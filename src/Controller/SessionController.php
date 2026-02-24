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
    private function getCurrentUser(EntityManagerInterface $em): ?User
    {
        $user = $this->getUser();

        if ($user instanceof User) {
            return $user;
        }

        // Fallback développement UNIQUEMENT (à commenter/supprimer plus tard)
        return $em->getRepository(User::class)->find(1);
    }

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

        $qb = $sessionRepository->createQueryBuilder('s')
            ->leftJoin('s.group', 'g')
            ->addSelect('g');

        if ($statut = $filters['statut']) {
            $qb->andWhere('s.statut = :statut')->setParameter('statut', $statut);
        }

        if ($groupeId = $filters['groupe']) {
            $qb->andWhere('g.id = :groupe')->setParameter('groupe', $groupeId);
        }

        if ($search = trim($filters['search'] ?? '')) {
            $search = '%' . $search . '%';
            $qb->andWhere('s.lienReunion LIKE :search OR s.statut LIKE :search OR g.nom LIKE :search')
               ->setParameter('search', $search);
        }

        $sortBy = $request->query->get('sortBy', 'dateHeure');
        $sortBy = in_array($sortBy, ['dateHeure', 'statut']) ? $sortBy : 'dateHeure';
        $order  = strtoupper($request->query->get('order', 'DESC')) === 'ASC' ? 'ASC' : 'DESC';

        $qb->orderBy('s.' . $sortBy, $order);

        $pagination = $paginator->paginate(
            $qb,
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

        $qb = $sessionRepository->createQueryBuilder('s')
            ->where('s.user = :user')
            ->setParameter('user', $user);

        if ($statut = $request->query->get('statut')) {
            $qb->andWhere('s.statut = :statut')->setParameter('statut', $statut);
        }

        $sortBy = $request->query->get('sortBy', 'dateHeure');
        $sortBy = in_array($sortBy, ['dateHeure', 'statut']) ? $sortBy : 'dateHeure';
        $order  = strtoupper($request->query->get('order', 'DESC')) === 'ASC' ? 'ASC' : 'DESC';

        $qb->orderBy('s.' . $sortBy, $order);

        $pagination = $paginator->paginate(
            $qb,
            $request->query->getInt('page', 1),
            10
        );

        return $this->render('session/professeur.html.twig', [
            'pagination' => $pagination,
            'groupes'    => $groupeRepository->findAll(),
        ]);
    }

    #[Route('/professeur/dashboard', name: 'session_prof_dashboard', methods: ['GET'])]
    public function professeurDashboard(
        SessionRepository $sessionRepository,
        ReservationRepository $reservationRepository,
        EntityManagerInterface $em,
        PaginatorInterface $paginator,
        Request $request
    ): Response
    {
        $user = $this->getCurrentUser($em);

        if (!$user) {
            $this->addFlash('warning', 'Veuillez vous connecter pour accéder à cet espace.');
            return $this->redirectToRoute('app_login');
        }

        $qbSessions = $sessionRepository->createQueryBuilder('s')
            ->where('s.user = :user')
            ->setParameter('user', $user)
            ->orderBy('s.dateHeure', 'DESC');

        $sessionsPagination = $paginator->paginate(
            $qbSessions,
            $request->query->getInt('page_sessions', 1),
            8
        );

        $pendingReservations = $reservationRepository->findPendingForProf($user);

        $recentReservations = $reservationRepository->createQueryBuilder('r')
            ->join('r.session', 's')
            ->where('s.user = :user')
            ->andWhere('r.statut != :en_attente')
            ->setParameter('user', $user)
            ->setParameter('en_attente', 'en attente')
            ->orderBy('r.dateReservation', 'DESC')
            ->setMaxResults(12)
            ->getQuery()
            ->getResult();

        return $this->render('dashboard/prof_dashboard.html.twig', [
            'sessionsPagination'   => $sessionsPagination,
            'pendingReservations'  => $pendingReservations,
            'recentReservations'   => $recentReservations,
            'user'                 => $user,
        ]);
    }

    #[Route('/new', name: 'app_session_new', methods: ['GET', 'POST'])]
    public function new(
        Request $request,
        EntityManagerInterface $em,
        GroupeRepository $groupeRepository
    ): Response
    {
        $session = new Session();

        $user = $this->getCurrentUser($em);
        if (!$user) {
            $this->addFlash('warning', 'Veuillez vous connecter.');
            return $this->redirectToRoute('app_login');
        }
        $session->setUser($user);

        $form = $this->createForm(SessionType::class, $session);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($session);
            $em->flush();

            $this->addFlash('success', 'Session créée avec succès !');
            return $this->redirectToRoute('session_prof_dashboard');
        }

        return $this->render('session/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/professeur/sessions', name: 'prof_session_list', methods: ['GET'])]
    public function profSessionList(
        Request $request,
        SessionRepository $sessionRepository,
        EntityManagerInterface $em,
        PaginatorInterface $paginator
    ): Response
    {
        $user = $this->getCurrentUser($em);
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

        $qb = $sessionRepository->createQueryBuilder('s')
            ->where('s.user = :user')
            ->setParameter('user', $user)
            ->orderBy('s.dateHeure', 'DESC');

        $pagination = $paginator->paginate(
            $qb,
            $request->query->getInt('page', 1),
            15
        );

        return $this->render('dashboard/list.html.twig', [
            'pagination' => $pagination,
            'user' => $user,
        ]);
    }

    #[Route('/professeur/sessions/new', name: 'prof_session_new', methods: ['GET', 'POST'])]
    public function profSessionNew(
        Request $request,
        EntityManagerInterface $em,
        GroupeRepository $groupeRepository
    ): Response
    {
        $user = $this->getCurrentUser($em);
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

        $session = new Session();
        $session->setUser($user);

        $form = $this->createForm(SessionType::class, $session);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($session);
            $em->flush();
            $this->addFlash('success', 'Session créée avec succès !');
            return $this->redirectToRoute('prof_session_list');
        }

        return $this->render('dashboard/new.html.twig', [
            'form' => $form->createView(),
            'user' => $user,
        ]);
    }

    #[Route('/professeur/sessions/{id}', name: 'prof_session_show', methods: ['GET'])]
    public function profSessionShow(
        int $id,
        SessionRepository $sessionRepository,
        EntityManagerInterface $em
    ): Response
    {
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

        if ($session->getUser() !== $user) {
            throw $this->createAccessDeniedException('Vous n\'êtes pas autorisé à voir cette session.');
        }

        return $this->render('dashboard/show.html.twig', [
            'session' => $session,
            'user' => $user,
        ]);
    }

    #[Route('/professeur/sessions/{id}/edit', name: 'prof_session_edit', methods: ['GET', 'POST'])]
    public function profSessionEdit(
        int $id,
        Request $request,
        SessionRepository $sessionRepository,
        EntityManagerInterface $em
    ): Response
    {
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

        if ($session->getUser() !== $user) {
            throw $this->createAccessDeniedException('Vous n\'êtes pas autorisé à modifier cette session.');
        }

        $form = $this->createForm(SessionType::class, $session);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            $this->addFlash('success', 'Session modifiée avec succès !');
            return $this->redirectToRoute('prof_session_list');
        }

        if ($form->isSubmitted() && !$form->isValid()) {
            $this->addFlash('error', 'Le formulaire contient des erreurs. Vérifiez les champs.');
        }

        return $this->render('dashboard/edit.html.twig', [
            'form' => $form->createView(),
            'session' => $session,
            'user' => $user,
        ]);
    }

    #[Route('/professeur/sessions/{id}', name: 'prof_session_delete', methods: ['POST'])]
    public function profSessionDelete(
        int $id,
        Request $request,
        SessionRepository $sessionRepository,
        EntityManagerInterface $em
    ): Response
    {
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

        if ($session->getUser() !== $user) {
            throw $this->createAccessDeniedException('Vous n\'êtes pas autorisé à supprimer cette session.');
        }

        if ($this->isCsrfTokenValid('delete' . $session->getId(), $request->request->get('_token'))) {
            $em->remove($session);
            $em->flush();
            $this->addFlash('success', 'Session supprimée avec succès !');
        } else {
            $this->addFlash('error', 'Token CSRF invalide.');
        }

        return $this->redirectToRoute('prof_session_list');
    }

    #[Route('/{id}/rate', name: 'app_session_rate', methods: ['POST'])]
    public function rate(
        Session $session,
        Request $request,
        EntityManagerInterface $em
    ): JsonResponse
    {
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

        return $this->json([
            'success' => true,
            'rating'  => $rating,
            'message' => 'Note enregistrée'
        ]);
    }
}