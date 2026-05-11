<?php

namespace App\Controller;

use App\Entity\Session;
use App\Entity\User;
use App\Form\SessionType;
use App\Repository\SessionRepository;
use App\Repository\GroupeRepository;
use App\Repository\ReservationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/session')]
class SessionController extends AbstractController
{
    /**
     * ✅ Récupère l'User réel depuis la BDD via l'email (getUserIdentifier).
     * Robuste contre les proxies Doctrine et les objets désérialisés depuis la session PHP.
     */
    private function getCurrentUser(EntityManagerInterface $em): ?User
    {
        $userInterface = $this->getUser();

        if ($userInterface === null) {
            return $em->getRepository(User::class)->find(1); // fallback dev
        }

        /** @var User|null */
        return $em->getRepository(User::class)->findOneBy([
            'email' => $userInterface->getUserIdentifier(),
        ]);
    }

    // =========================================================================
    // ESPACE ÉTUDIANT — liste publique des sessions
    // =========================================================================

    #[Route('/', name: 'app_session_index', methods: ['GET'])]
    public function index(
        Request $request,
        SessionRepository $sessionRepository,
        GroupeRepository $groupeRepository,
        ReservationRepository $reservationRepository,
        EntityManagerInterface $em,
        PaginatorInterface $paginator
    ): Response {
        $filters = [
            'statut' => $request->query->get('statut'),
            'groupe' => $request->query->get('groupe'),
            'search' => $request->query->get('search'),
        ];

        $sortBy = (string) $request->query->get('sortBy', 'dateHeure');
        $order  = strtoupper((string) $request->query->get('order', 'DESC')) === 'ASC' ? 'ASC' : 'DESC';

        $pagination     = $paginator->paginate(
            $sessionRepository->getFilteredQuery($filters, $sortBy, $order),
            $request->query->getInt('page', 1),
            6
        );

        $user           = $this->getCurrentUser($em);
        $myReservations = $user ? $reservationRepository->findBy(['user' => $user]) : [];

        return $this->render('session/index.html.twig', [
            'pagination'     => $pagination,
            'groupes'        => $groupeRepository->findAll(),
            'myReservations' => $myReservations,
        ]);
    }

    // =========================================================================
    // CRÉATION SESSION — route étudiant (formulaire public)
    // ✅ FIX : on force TOUJOURS session->setUser($currentUser)
    //          Le champ 'user' est retiré du formulaire (show_user_field=false)
    //          pour empêcher qu'un étudiant se désigne comme enseignant.
    // =========================================================================

    #[Route('/new', name: 'app_session_new', methods: ['GET', 'POST'])]
    public function new(
        Request $request,
        EntityManagerInterface $em
    ): Response {
        $user = $this->getCurrentUser($em);
        if (!$user) {
            $this->addFlash('warning', 'Veuillez vous connecter.');
            return $this->redirectToRoute('app_login');
        }

        $session = new Session();
        $session->setUser($user); // ✅ forcé avant handleRequest

        // show_user_field: false → le champ enseignant n'apparaît PAS dans le form
        $form = $this->createForm(SessionType::class, $session, [
            'show_user_field' => false,
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            // ✅ On reforce l'user après handleRequest (sécurité supplémentaire)
            $session->setUser($user);

            if ($form->isValid()) {
                $now = new \DateTime();
                if ($session->getDateHeure() && $session->getDateHeure() <= $now) {
                    if ($request->isXmlHttpRequest()) {
                        return $this->json(['success' => false, 'errors' => ['La date choisie doit être dans le futur.']]);
                    }
                    $this->addFlash('danger', 'La date choisie doit être dans le futur.');
                    return $this->render('session/new.html.twig', ['form' => $form->createView()]);
                }

                $em->persist($session);
                $em->flush();

                if ($request->isXmlHttpRequest()) {
                    return $this->json(['success' => true, 'message' => 'Session créée avec succès !']);
                }

                $this->addFlash('success', 'Session créée avec succès !');
                return $this->redirectToRoute('app_session_index');
            }

            if ($request->isXmlHttpRequest()) {
                $errors = [];
                foreach ($form->getErrors(true) as $error) {
                    $errors[] = $error->getMessage();
                }
                return $this->json(['success' => false, 'errors' => $errors]);
            }
        }

        return $this->render('session/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    // =========================================================================
    // ESPACE PROFESSEUR
    // =========================================================================

    #[Route('/professeur/reservations', name: 'session_prof_reservations_redirect', methods: ['GET'])]
    public function redirectToReservations(): Response
    {
        return $this->redirectToRoute('reservation_professeur');
    }

    #[Route('/professeur/dashboard', name: 'session_prof_dashboard', methods: ['GET'])]
    public function professeurDashboard(
        SessionRepository $sessionRepository,
        ReservationRepository $reservationRepository,
        EntityManagerInterface $em,
        PaginatorInterface $paginator,
        Request $request
    ): Response {
        $user = $this->getCurrentUser($em);
        if (!$user) {
            $this->addFlash('warning', 'Veuillez vous connecter pour accéder à cet espace.');
            return $this->redirectToRoute('app_login');
        }

        $sessionsPagination  = $paginator->paginate(
            $sessionRepository->getQueryByProf($user),
            $request->query->getInt('page_sessions', 1),
            8
        );
        $pendingReservations = $reservationRepository->findPendingForProf($user);
        $recentReservations  = $reservationRepository->findRecentForProf($user);

        return $this->render('dashboard/prof_dashboard.html.twig', [
            'sessionsPagination'  => $sessionsPagination,
            'pendingReservations' => $pendingReservations,
            'recentReservations'  => $recentReservations,
            'user'                => $user,
        ]);
    }

    #[Route('/professeur/sessions', name: 'prof_session_list', methods: ['GET'])]
    public function profSessionList(
        Request $request,
        SessionRepository $sessionRepository,
        EntityManagerInterface $em,
        PaginatorInterface $paginator
    ): Response {
        $user = $this->getCurrentUser($em);
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

        $pagination = $paginator->paginate(
            $sessionRepository->getQueryByProfOrdered($user),
            $request->query->getInt('page', 1),
            15
        );

        return $this->render('dashboard/list.html.twig', [
            'pagination' => $pagination,
            'user'       => $user,
        ]);
    }

    // =========================================================================
    // CRÉATION SESSION PROF — route dédiée (/professeur/sessions/new)
    // ✅ FIX : même logique, user forcé, champ enseignant masqué
    // =========================================================================

    #[Route('/professeur/sessions/new', name: 'prof_session_new', methods: ['GET', 'POST'])]
    public function profSessionNew(
        Request $request,
        EntityManagerInterface $em
    ): Response {
        $user = $this->getCurrentUser($em);
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

        $session = new Session();
        $session->setUser($user); // ✅ forcé avant handleRequest

        $form = $this->createForm(SessionType::class, $session, [
            'show_user_field' => false,
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $session->setUser($user); // ✅ reforce après handleRequest

            if ($form->isValid()) {
                $em->persist($session);
                $em->flush();

                if ($request->isXmlHttpRequest()) {
                    return $this->json(['success' => true, 'message' => 'Session créée avec succès !']);
                }

                $this->addFlash('success', 'Session créée avec succès !');
                return $this->redirectToRoute('session_professeur');
            }

            if ($request->isXmlHttpRequest()) {
                $errors = [];
                foreach ($form->getErrors(true) as $error) {
                    $errors[] = $error->getMessage();
                }
                return $this->json(['success' => false, 'errors' => $errors], 400);
            }

            $this->addFlash('error', 'Le formulaire contient des erreurs. Vérifiez les champs.');
        }

        return $this->render('session/new.html.twig', [
            'form' => $form->createView(),
            'user' => $user,
        ]);
    }

    #[Route('/professeur/sessions/{id}/edit', name: 'prof_session_edit', methods: ['GET', 'POST'])]
    public function profSessionEdit(
        int $id,
        Request $request,
        SessionRepository $sessionRepository,
        EntityManagerInterface $em
    ): Response {
        $user = $this->getCurrentUser($em);
        if (!$user) {
            $this->addFlash('warning', 'Veuillez vous connecter.');
            return $this->redirectToRoute('app_login');
        }

        $session = $sessionRepository->find($id);
        if (!$session) {
            $this->addFlash('error', 'La session #' . $id . ' n\'existe pas ou a été supprimée.');
            return $this->redirectToRoute('prof_session_list');
        }

        if ($session->getUser()?->getId() !== $user->getId()) {
            throw $this->createAccessDeniedException('Vous n\'êtes pas autorisé à modifier cette session.');
        }

        $form = $this->createForm(SessionType::class, $session, [
            'show_user_field' => false,
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $session->setUser($user); // ✅ reforce le propriétaire

            if ($form->isValid()) {
                $em->flush();

                if ($request->isXmlHttpRequest()) {
                    return $this->json([
                        'success' => true,
                        'message' => 'Session modifiée avec succès !',
                        'session' => [
                            'id'          => $session->getId(),
                            'date'        => $session->getDateHeure()?->format('d/m/Y H:i'),
                            'statut'      => $session->getStatut(),
                            'groupe'      => $session->getGroup()?->getNom(),
                            'groupeId'    => $session->getGroup()?->getId(),
                            'lienReunion' => $session->getLienReunion(),
                        ],
                    ]);
                }

                $this->addFlash('success', 'Session modifiée avec succès !');
                return $this->redirectToRoute('prof_session_list');
            }

            if ($request->isXmlHttpRequest()) {
                $errors = [];
                foreach ($form->getErrors(true) as $error) {
                    $errors[] = $error->getMessage();
                }
                return $this->json(['success' => false, 'errors' => $errors], 400);
            }

            $this->addFlash('error', 'Le formulaire contient des erreurs. Vérifiez les champs.');
        }

        return $this->render('dashboard/edit.html.twig', [
            'form'    => $form->createView(),
            'session' => $session,
            'user'    => $user,
        ]);
    }

    #[Route('/professeur/sessions/{id}', name: 'prof_session_show', methods: ['GET'])]
    public function profSessionShow(
        int $id,
        SessionRepository $sessionRepository,
        EntityManagerInterface $em
    ): Response {
        $user = $this->getCurrentUser($em);
        if (!$user) {
            $this->addFlash('warning', 'Veuillez vous connecter.');
            return $this->redirectToRoute('app_login');
        }

        $session = $sessionRepository->find($id);
        if (!$session) {
            $this->addFlash('error', 'La session #' . $id . ' n\'existe pas ou a été supprimée.');
            return $this->redirectToRoute('prof_session_list');
        }

        if ($session->getUser()?->getId() !== $user->getId()) {
            throw $this->createAccessDeniedException('Vous n\'êtes pas autorisé à voir cette session.');
        }

        return $this->render('dashboard/show.html.twig', [
            'session' => $session,
            'user'    => $user,
        ]);
    }

    #[Route('/professeur/sessions/{id}', name: 'prof_session_delete', methods: ['POST'])]
    public function profSessionDelete(
        int $id,
        Request $request,
        SessionRepository $sessionRepository,
        EntityManagerInterface $em
    ): Response {
        $user = $this->getCurrentUser($em);
        if (!$user) {
            $this->addFlash('warning', 'Veuillez vous connecter.');
            return $this->redirectToRoute('app_login');
        }

        $session = $sessionRepository->find($id);
        if (!$session) {
            $this->addFlash('error', 'La session #' . $id . ' n\'existe pas ou a déjà été supprimée.');
            return $this->redirectToRoute('prof_session_list');
        }

        if ($session->getUser()?->getId() !== $user->getId()) {
            throw $this->createAccessDeniedException('Vous n\'êtes pas autorisé à supprimer cette session.');
        }

        $token = (string) $request->request->get('_token', '');

        if ($this->isCsrfTokenValid('delete' . $session->getId(), $token)) {
            $em->remove($session);
            $em->flush();
            if ($request->isXmlHttpRequest()) {
                return $this->json(['success' => true, 'message' => 'Session supprimée avec succès !']);
            }
            $this->addFlash('success', 'Session supprimée avec succès !');
        } else {
            if ($request->isXmlHttpRequest()) {
                return $this->json(['success' => false, 'message' => 'Token CSRF invalide.'], 400);
            }
            $this->addFlash('error', 'Token CSRF invalide.');
        }

        if ($request->isXmlHttpRequest()) {
            return $this->json(['success' => false, 'message' => 'Impossible de supprimer la session.'], 400);
        }

        return $this->redirectToRoute('prof_session_list');
    }

    // =========================================================================
    // PAGE PRINCIPALE ESPACE PROF (liste paginée + modales AJAX)
    // =========================================================================

    #[Route('/professeur', name: 'session_professeur', methods: ['GET'])]
    public function espaceProfesseur(
        Request $request,
        SessionRepository $sessionRepository,
        GroupeRepository $groupeRepository,
        EntityManagerInterface $em,
        PaginatorInterface $paginator
    ): Response {
        $user = $this->getCurrentUser($em);
        if (!$user) {
            $this->addFlash('warning', 'Veuillez vous connecter pour accéder à cet espace.');
            return $this->redirectToRoute('app_login');
        }

        $filters = ['statut' => $request->query->get('statut')];
        $sortBy  = (string) $request->query->get('sortBy', 'dateHeure');
        $order   = strtoupper((string) $request->query->get('order', 'DESC')) === 'ASC' ? 'ASC' : 'DESC';

        $pagination = $paginator->paginate(
            $sessionRepository->getFilteredQueryForProf($user, $filters, $sortBy, $order),
            $request->query->getInt('page', 1),
            10
        );

        return $this->render('session/professeur.html.twig', [
            'pagination' => $pagination,
            'groupes'    => $groupeRepository->findAll(),
        ]);
    }

    // =========================================================================
    // NOTATION
    // =========================================================================

    #[Route('/{id}/rate', name: 'app_session_rate', methods: ['POST'])]
    public function rate(
        Session $session,
        Request $request,
        EntityManagerInterface $em
    ): JsonResponse {
        $user = $this->getCurrentUser($em);

        if (!$user || $session->getUser()?->getId() !== $user->getId() || $session->getStatut() !== 'terminée') {
            return $this->json(['error' => 'Action non autorisée'], 403);
        }

        $rating = (int) $request->request->get('rating', 0);
        if ($rating < 1 || $rating > 5) {
            return $this->json(['error' => 'Note invalide (1–5)'], 400);
        }

        $session->setRating($rating);
        $em->flush();

        return $this->json(['success' => true, 'rating' => $rating, 'message' => 'Note enregistrée']);
    }
}