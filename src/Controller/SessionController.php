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
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/session')]
class SessionController extends AbstractController
{
    #[Route('/', name: 'app_session_index', methods: ['GET'])]
    public function index(
    Request $request,
    SessionRepository $sessionRepository,
    GroupeRepository $groupeRepository,
    ReservationRepository $reservationRepository,
    EntityManagerInterface $em,
    PaginatorInterface $paginator
): Response
{
    $filters = [
        'statut' => $request->query->get('statut'),
        'groupe' => $request->query->get('groupe'),
        'search' => $request->query->get('search'),
    ];

    // ────────────────────────────────────────────────
    // QueryBuilder DIRECT dans le controller (solution temporaire efficace)
    // ────────────────────────────────────────────────
    $qb = $sessionRepository->createQueryBuilder('s')
        ->leftJoin('s.group', 'g')
        ->addSelect('g');

    if (!empty($filters['statut'])) {
        $qb->andWhere('s.statut = :statut')
           ->setParameter('statut', $filters['statut']);
    }

    if (!empty($filters['groupe'])) {
        $qb->andWhere('s.group = :groupe')
           ->setParameter('groupe', $filters['groupe']);
    }

    if (!empty($filters['search'])) {
        $search = '%' . trim($filters['search']) . '%';
        $qb->andWhere('s.lienReunion LIKE :search OR s.statut LIKE :search OR g.nom LIKE :search')
           ->setParameter('search', $search);
    }

    $allowedSort = ['dateHeure', 'statut'];
    $sortBy = $request->query->get('sortBy', 'dateHeure');
    $sortBy = in_array($sortBy, $allowedSort) ? $sortBy : 'dateHeure';
    $order = $request->query->get('order', 'DESC');

    $qb->orderBy('s.' . $sortBy, $order);

    $query = $qb->getQuery();

    $pagination = $paginator->paginate(
        $query,
        $request->query->getInt('page', 1),
        6
    );

    $user = $this->getTestUser($em);
    $myReservations = $user ? $reservationRepository->findByUser($user) : [];

    return $this->render('session/index.html.twig', [
        'pagination'      => $pagination,
        'groupes'         => $groupeRepository->findAll(),
        'myReservations'  => $myReservations,
    ]);
}

    #[Route('/search', name: 'app_session_search', methods: ['GET'])]
    public function search(
    Request $request,
    SessionRepository $sessionRepository,
    PaginatorInterface $paginator,
    EntityManagerInterface $em,
    ReservationRepository $reservationRepository
): Response
{
    $filters = $request->query->all();

    $qb = $sessionRepository->createQueryBuilder('s')
        ->leftJoin('s.group', 'g')
        ->addSelect('g');

    if (!empty($filters['statut'])) {
        $qb->andWhere('s.statut = :statut')->setParameter('statut', $filters['statut']);
    }

    if (!empty($filters['groupe'])) {
        $qb->andWhere('s.group = :groupe')->setParameter('groupe', $filters['groupe']);
    }

    if (!empty($filters['search'])) {
        $search = '%' . trim($filters['search']) . '%';
        $qb->andWhere('s.lienReunion LIKE :search OR s.statut LIKE :search OR g.nom LIKE :search')
           ->setParameter('search', $search);
    }

    $allowedSort = ['dateHeure', 'statut'];
    $sortBy = $request->query->get('sortBy', 'dateHeure');
    $sortBy = in_array($sortBy, $allowedSort) ? $sortBy : 'dateHeure';
    $order = $request->query->get('order', 'DESC');

    $qb->orderBy('s.' . $sortBy, $order);

    $query = $qb->getQuery();

    $pagination = $paginator->paginate(
        $query,
        $request->query->getInt('page', 1),
        6
    );

    $user = $this->getTestUser($em);
    $myReservations = $user ? $reservationRepository->findByUser($user) : [];

    return $this->render('session/_table.html.twig', [
        'pagination'     => $pagination,
        'myReservations' => $myReservations,
    ]);
}
#[Route('/professeur', name: 'session_professeur', methods: ['GET'])]
// Temporaire : Enlevé IsGranted car sécurité pas configurée. Remettre quand login OK.
public function espaceProfesseur(
    Request $request,
    SessionRepository $sessionRepository,
    GroupeRepository $groupeRepository,
    EntityManagerInterface $em,
    PaginatorInterface $paginator
): Response
{
    $filters = [
        'statut' => $request->query->get('statut'),
    ];

    $user = $this->getTestUser($em); // Workaround

    $qb = $sessionRepository->createQueryBuilder('s')
        ->andWhere('s.user = :user')
        ->setParameter('user', $user);

    if (!empty($filters['statut'])) {
        $qb->andWhere('s.statut = :statut')
        ->setParameter('statut', $filters['statut']);
    }

    $allowedSort = ['dateHeure', 'statut'];
    $sortBy = $request->query->get('sortBy', 'dateHeure');
    $sortBy = in_array($sortBy, $allowedSort) ? $sortBy : 'dateHeure';
    $order = $request->query->get('order', 'DESC');

    $qb->orderBy('s.' . $sortBy, $order);

    $query = $qb->getQuery();

    $sessions = $paginator->paginate(
        $query,
        $request->query->getInt('page', 1),
        10
    );

    return $this->render('session/professeur.html.twig', [
    'pagination' => $sessions,   // ← Change 'sessions' en 'pagination'
    'groupes'    => $groupeRepository->findAll(),
]);
}

   // Création nouvelle session – plus d'IsGranted
#[Route('/new', name: 'app_session_new', methods: ['GET', 'POST'])]
public function new(
    Request $request,
    EntityManagerInterface $em,
    SessionRepository $sessionRepository
): Response
{
    $session = new Session();
    $session->setUser($this->getTestUser($em));

    $form = $this->createForm(SessionType::class, $session);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $em->persist($session);
        $em->flush();
        $this->addFlash('success', 'Session créée avec succès.');
        return $this->redirectToRoute('session_professeur');
    }

    return $this->render('session/new.html.twig', [
        'form' => $form->createView(),
        'edit' => false,
    ]);
}

#[Route('/{id}', name: 'app_session_show', methods: ['GET'])]
public function show(Session $session): Response
{
    return $this->render('session/show.html.twig', [
        'session' => $session,
    ]);
}

    // Modification – plus d'IsGranted
#[Route('/{id}/edit', name: 'app_session_edit', methods: ['GET', 'POST'])]
public function edit(
    Request $request,
    Session $session,
    EntityManagerInterface $em
): Response
{
    if ($session->getUser() !== $this->getTestUser($em)) {
        throw $this->createAccessDeniedException('Vous n\'êtes pas le propriétaire de cette session.');
    }

    $form = $this->createForm(SessionType::class, $session);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $em->flush();
        $this->addFlash('success', 'Session modifiée avec succès.');
        return $this->redirectToRoute('session_professeur');
    }

    return $this->render('session/edit.html.twig', [
        'form'    => $form->createView(),
        'edit'    => true,
        'session' => $session,
    ]);
}

// Suppression – plus d'IsGranted
#[Route('/{id}', name: 'app_session_delete', methods: ['POST'])]
public function delete(
    Request $request,
    Session $session,
    EntityManagerInterface $em
): Response
{
    if ($session->getUser() !== $this->getTestUser($em)) {
        throw $this->createAccessDeniedException();
    }

    if ($this->isCsrfTokenValid('delete' . $session->getId(), $request->request->get('_token'))) {
        $em->remove($session);
        $em->flush();
        $this->addFlash('success', 'Session supprimée.');
    }

    return $this->redirectToRoute('session_professeur');
}

   // Rating – plus d'IsGranted
#[Route('/{id}/rate', name: 'app_session_rate', methods: ['POST'])]
public function rate(Session $session, Request $request, EntityManagerInterface $em): JsonResponse
{
    if ($session->getUser() !== $this->getTestUser($em) || $session->getStatut() !== 'terminée') {
        return $this->json(['error' => 'Action non autorisée'], 403);
    }

    $rating = (int) $request->request->get('rating', 0);
    if ($rating < 0 || $rating > 5) {
        return $this->json(['error' => 'Note invalide'], 400);
    }

    $session->setRating($rating);
    $em->flush();

    return $this->json(['success' => true, 'rating' => $rating]);
}
    // Workaround privé pour user
    private function getTestUser(EntityManagerInterface $em): ?User
    {
        return $em->getRepository(User::class)->find(1); // Change par un ID valide
    }
}