<?php

namespace App\Controller;

use App\Entity\Session;
use App\Form\SessionType;
use App\Repository\SessionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/session')]
class SessionController extends AbstractController
{
 #[Route('/', name: 'app_session_index', methods: ['GET'])]
public function index(
    SessionRepository $repository,
    Request $request,
    PaginatorInterface $paginator
): Response
{
    $search = trim($request->query->get('search', ''));
    $dateInput = $request->query->get('date', '');
    $sort   = $request->query->get('sort', 'id'); // CHANGÉ: tri par défaut sur 'id'
    $direction = $request->query->get('direction', 'asc'); // CHANGÉ: ordre croissant par défaut

    $qb = $repository->createQueryBuilder('s');

    // Recherche texte
    if ($search) {
        $qb->andWhere($qb->expr()->orX(
            $qb->expr()->like('LOWER(s.statut)', ':search'),
            $qb->expr()->like('LOWER(g.nom)', ':search'),
            $qb->expr()->like('LOWER(u.prenom)', ':search'),
            $qb->expr()->like('LOWER(u.nom)', ':search')
        ))
        ->leftJoin('s.groupe', 'g')
        ->leftJoin('s.user', 'u')
        ->setParameter('search', '%' . strtolower($search) . '%');
    }

    // Filtre date
    if ($dateInput) {
        try {
            $dateFormatted = null;
            
            if (preg_match('/^(\d{2})\/(\d{2})\/(\d{4})$/', $dateInput, $matches)) {
                $dateFormatted = $matches[3] . '-' . $matches[2] . '-' . $matches[1];
            } 
            elseif (preg_match('/^\d{4}-\d{2}-\d{2}$/', $dateInput)) {
                $dateFormatted = $dateInput;
            }
            
            if ($dateFormatted) {
                $startDate = new \DateTime($dateFormatted . ' 00:00:00');
                $endDate = new \DateTime($dateFormatted . ' 23:59:59');
                
                $qb->andWhere('s.dateHeure BETWEEN :dateStart AND :dateEnd')
                   ->setParameter('dateStart', $startDate)
                   ->setParameter('dateEnd', $endDate);
            }
        } catch (\Exception $e) {
            // Ignore silencieusement
        }
    }

    // Tri sécurisé - AJOUTÉ 'id' dans les colonnes autorisées
    $allowed = ['id', 'dateHeure', 'statut']; // AJOUTÉ 'id'
    if (in_array($sort, $allowed)) {
        $qb->orderBy('s.' . $sort, strtoupper($direction));
    } else {
        $qb->orderBy('s.id', 'ASC'); // Par défaut: ID croissant
    }

    $pagination = $paginator->paginate(
        $qb,
        $request->query->getInt('page', 1),
        10
    );

    return $this->render('session/index.html.twig', [
        'sessions'    => $pagination,
        'search'      => $search,
        'date'        => $dateInput,
        'sort'        => $sort,
        'direction'   => $direction,
        'form_create' => $this->createForm(SessionType::class)->createView(),
    ]);
}

   
    #[Route('/new', name: 'app_session_new', methods: ['GET', 'POST'])]
public function new(Request $request, EntityManagerInterface $entityManager): Response
{
    $session = new Session();
    $form = $this->createForm(SessionType::class, $session);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        // Le champ dateHeure est maintenant rempli par JavaScript
        // Pas besoin de traitement supplémentaire
        
        $entityManager->persist($session);
        $entityManager->flush();

        return $this->redirectToRoute('app_session_index', [], Response::HTTP_SEE_OTHER);
    }

    return $this->render('session/new.html.twig', [
        'form' => $form->createView(),
    ]);
}

    #[Route('/{id}', name: 'app_session_show', methods: ['GET'], requirements: ['id' => '\d+'])]
    public function show(Session $session): Response
    {
        return $this->render('session/show.html.twig', [
            'session' => $session,
        ]);
    }
#[Route('/{id}/reservations', name: 'app_session_reservations', methods: ['GET'], requirements: ['id' => '\d+'])]
public function showReservations(Session $session): Response
{
    // Rediriger vers la page des réservations
    return $this->redirectToRoute('app_reservation_index');
}

    #[Route('/{id}/edit', name: 'app_session_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Session $session, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(SessionType::class, $session);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $entityManager->flush();
                $this->addFlash('success', 'Session modifiee avec succes !');
                return $this->redirectToRoute('app_session_index');
            } catch (\Exception $e) {
                $this->addFlash('error', 'Erreur lors de la modification : ' . $e->getMessage());
            }
        }

        return $this->render('session/edit.html.twig', [
            'session' => $session,
            'form' => $form,
        ]);
    }

    #[Route('/{id}/rejoindre', name: 'app_session_rejoindre', methods: ['GET'])]
    public function rejoindre(Session $session): Response
    {
        return $this->redirectToRoute('app_reservation_new', ['session' => $session->getId()]);
    }

    #[Route('/{id}', name: 'app_session_delete', methods: ['POST'])]
    public function delete(Request $request, Session $session, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $session->getId(), $request->request->get('_token'))) {
            try {
                $entityManager->remove($session);
                $entityManager->flush();
                $this->addFlash('success', 'Session supprimee avec succes !');
            } catch (\Exception $e) {
                $this->addFlash('error', 'Erreur lors de la suppression : ' . $e->getMessage());
            }
        }
        return $this->redirectToRoute('app_session_index');
    }



    // partie admin
    // ==================== ADMIN ROUTES ====================
    
    #[Route('/admin/sessions', name: 'admin_session_index', methods: ['GET', 'POST'])]
    public function adminIndex(
        SessionRepository $sessionRepository,
        Request $request,
        EntityManagerInterface $entityManager,
        PaginatorInterface $paginator
    ): Response {
        $newSession = new Session();
        $form = $this->createForm(SessionType::class, $newSession);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $entityManager->persist($newSession);
                $entityManager->flush();
                $this->addFlash('success', 'Session créée avec succès !');
                return $this->redirectToRoute('admin_session_index');
            } catch (\Exception $e) {
                $this->addFlash('error', 'Erreur lors de la création : ' . $e->getMessage());
            }
        }

        $query = $sessionRepository->createQueryBuilder('s')
            ->orderBy('s.dateHeure', 'DESC')
            ->getQuery();

        $pagination = $paginator->paginate(
            $query,
            $request->query->getInt('page', 1),
            10
        );

        return $this->render('dashboard/session/index.html.twig', [
            'sessions' => $pagination,
            'form_create' => $form->createView(),
        ]);
    }

    #[Route('/admin/sessions/new', name: 'admin_session_new', methods: ['GET', 'POST'])]
    public function adminNew(Request $request, EntityManagerInterface $entityManager): Response
    {
        $session = new Session();
        $form = $this->createForm(SessionType::class, $session);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $entityManager->persist($session);
                $entityManager->flush();
                $this->addFlash('success', 'Session créée avec succès !');
                return $this->redirectToRoute('admin_session_index');
            } catch (\Exception $e) {
                $this->addFlash('error', 'Erreur lors de la création : ' . $e->getMessage());
            }
        }

        return $this->render('dashboard/session/new.html.twig', [
            'session' => $session,
            'form' => $form,
        ]);
    }

    #[Route('/admin/sessions/{id}', name: 'admin_session_show', methods: ['GET'], requirements: ['id' => '\d+'])]
    public function adminShow(Session $session): Response
    {
        return $this->render('dashboard/session/show.html.twig', [
            'session' => $session,
        ]);
    }

    #[Route('/admin/sessions/{id}/edit', name: 'admin_session_edit', methods: ['GET', 'POST'])]
    public function adminEdit(Request $request, Session $session, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(SessionType::class, $session);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $entityManager->flush();
                $this->addFlash('success', 'Session modifiée avec succès !');
                return $this->redirectToRoute('admin_session_index');
            } catch (\Exception $e) {
                $this->addFlash('error', 'Erreur lors de la modification : ' . $e->getMessage());
            }
        }

        return $this->render('dashboard/session/edit.html.twig', [
            'session' => $session,
            'form' => $form,
        ]);
    }

    #[Route('/admin/sessions/{id}/delete', name: 'admin_session_delete', methods: ['POST'])]
    public function adminDelete(Request $request, Session $session, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $session->getId(), $request->request->get('_token'))) {
            try {
                $entityManager->remove($session);
                $entityManager->flush();
                $this->addFlash('success', 'Session supprimée avec succès !');
            } catch (\Exception $e) {
                $this->addFlash('error', 'Erreur lors de la suppression : ' . $e->getMessage());
            }
        }
        return $this->redirectToRoute('admin_session_index');
    }

    // ==================== FRONT ROUTES (si besoin plus tard) ====================
    
    #[Route('/sessions', name: 'front_session_index', methods: ['GET'])]
    public function frontIndex(
        SessionRepository $sessionRepository,
        Request $request,
        PaginatorInterface $paginator
    ): Response {
        $query = $sessionRepository->createQueryBuilder('s')
            ->where('s.dateHeure >= :now')
            ->setParameter('now', new \DateTime())
            ->orderBy('s.dateHeure', 'ASC')
            ->getQuery();

        $pagination = $paginator->paginate(
            $query,
            $request->query->getInt('page', 1),
            12
        );

        return $this->render('front/session/index.html.twig', [
            'sessions' => $pagination,
        ]);
    }

    #[Route('/sessions/{id}', name: 'front_session_show', methods: ['GET'], requirements: ['id' => '\d+'])]
    public function frontShow(Session $session): Response
    {
        return $this->render('front/session/show.html.twig', [
            'session' => $session,
        ]);
    }

    #[Route('/sessions/{id}/rejoindre', name: 'front_session_rejoindre', methods: ['GET'])]
    public function frontRejoindre(Session $session): Response
    {
        return $this->redirectToRoute('front_reservation_new', [
            'session' => $session->getId()
        ]);
    }
}
