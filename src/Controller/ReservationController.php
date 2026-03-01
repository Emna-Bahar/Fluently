<?php

namespace App\Controller;

use App\Entity\Session;
use App\Entity\Reservation;
use App\Entity\User;
use App\Form\ReservationType;
use App\Repository\ReservationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/reservation')]
class ReservationController extends AbstractController
{
    public function __construct(
        private ReservationRepository $reservationRepository,
    ) {}

    private function getCurrentUser(EntityManagerInterface $em): ?User
    {
        $user = $this->getUser();
        if ($user instanceof User) {
            return $user;
        }
        return $em->getRepository(User::class)->find(1);
    }

    #[Route('/', name: 'app_reservation_index', methods: ['GET'])]
    public function index(EntityManagerInterface $em): Response
    {
        $user = $this->getCurrentUser($em);

        // ✅ PHPStan fix #1 ligne 38 : findByUser() attend un User non-null
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

        $reservations = $this->reservationRepository->findByUser($user);

        return $this->render('reservation/index.html.twig', [
            'reservations' => $reservations,
        ]);
    }

    #[Route('/professeur/reservations', name: 'reservation_professeur', methods: ['GET'])]
    public function professeurReservations(EntityManagerInterface $em): Response
    {
        $user = $this->getCurrentUser($em);

        if (!$user) {
            $this->addFlash('warning', 'Veuillez vous connecter.');
            return $this->redirectToRoute('app_login');
        }

        $reservations = $this->reservationRepository->findAllForProf($user);

        return $this->render('reservation/professeur.html.twig', [
            'reservations' => $reservations,
            'user'         => $user,
        ]);
    }

    #[Route('/calendar', name: 'reservation_calendar', methods: ['GET'])]
    public function calendar(): Response
    {
        return $this->render('reservation/calendar.html.twig');
    }

    #[Route('/calendar/events', name: 'reservation_calendar_events', methods: ['GET'])]
    public function calendarEvents(EntityManagerInterface $em): JsonResponse
    {
        $user         = $this->getCurrentUser($em);
        $reservations = $this->reservationRepository->findBy(['user' => $user]);
        $events       = [];

        foreach ($reservations as $resa) {
            $session = $resa->getSession();
            $group   = $session?->getGroup();
            $niveau  = $group?->getIdNiveau();
            $langue  = $group?->getIDLangue();

            if (!$session?->getDateHeure()) {
                continue;
            }

            $color = match($resa->getStatut()) {
                'confirmée'  => '#00C853',
                'en attente' => '#ffc107',
                'refusée'    => '#FF4757',
                'annulée'    => '#FF4757',
                default      => '#6b6b9a',
            };

            $events[] = [
                'id'              => $resa->getId(),
                'title'           => ($langue?->getNom() ?? 'Session') . ' ' . ($niveau?->getTitre() ?? ''),
                'start'           => $session->getDateHeure()->format('Y-m-d\TH:i:s'),
                'backgroundColor' => $color,
                'borderColor'     => $color,
                'extendedProps'   => [
                    'statut'      => $resa->getStatut(),
                    'groupe'      => $group?->getNom() ?? '-',
                    'niveau'      => $niveau?->getTitre() ?? '-',
                    'langue'      => $langue?->getNom() ?? '-',
                    'formateur'   => $session->getUser()
                        ? $session->getUser()->getPrenom() . ' ' . $session->getUser()->getNom()
                        : '-',
                    'lienReunion' => $session->getLienReunion(),
                    'dateResa'    => $resa->getDateReservation()?->format('d/m/Y') ?? '-',
                ],
            ];
        }

        return $this->json($events);
    }

    #[Route('/new', name: 'app_reservation_new', methods: ['GET', 'POST'])]
    public function new(
        Request $request,
        EntityManagerInterface $em
    ): Response {
        $reservation = new Reservation();
        $reservation->setUser($this->getCurrentUser($em));
        $reservation->setStatut('en attente');

        $sessionId = $request->query->get('session_id');
        if ($sessionId) {
            $session = $em->getRepository(Session::class)->find($sessionId);
            if ($session) {
                $reservation->setSession($session);
            }
        }

        $form = $this->createForm(ReservationType::class, $reservation, [
            'is_student_view' => true,
        ]);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($reservation);
            $em->flush();
            $this->addFlash('success', 'Demande de réservation envoyée avec succès.');
            return $this->redirectToRoute('app_session_index');
        }

        return $this->render('reservation/form.html.twig', [
            'form'            => $form->createView(),
            'reservation'     => $reservation,
            'edit'            => false,
            'is_student_view' => true,
            'successMessage'  => null,
        ]);
    }

    #[Route('/{id}', name: 'app_reservation_show', methods: ['GET'])]
    public function show(Reservation $reservation): Response
    {
        return $this->render('reservation/show.html.twig', [
            'reservation' => $reservation,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_reservation_edit', methods: ['GET', 'POST'])]
    public function edit(
        Request $request,
        Reservation $reservation,
        EntityManagerInterface $em
    ): Response {
        $user = $this->getCurrentUser($em);

        // ✅ PHPStan fix #2 lignes 176 : getSession()/getUser()/getId() sur null possible
        // On vérifie que $user, session et user de session existent avant d'appeler getId()
        $session     = $reservation->getSession();
        $sessionUser = $session?->getUser();

        if (!$user || !$session || !$sessionUser || $sessionUser->getId() !== $user->getId()) {
            throw $this->createAccessDeniedException();
        }

        $form = $this->createForm(ReservationType::class, $reservation, [
            'is_student_view' => false,
        ]);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            $this->addFlash('success', 'Réservation modifiée avec succès.');
            return $this->redirectToRoute('reservation_professeur');
        }

        return $this->render('reservation/form.html.twig', [
            'form'            => $form->createView(),
            'reservation'     => $reservation,
            'edit'            => true,
            'is_student_view' => false,
            'successMessage'  => null,
        ]);
    }

    #[Route('/{id}/statut', name: 'app_reservation_update_statut', methods: ['POST'])]
    public function updateStatut(
        Request $request,
        Reservation $reservation,
        EntityManagerInterface $em
    ): Response {
        $user = $this->getCurrentUser($em);

        // ✅ PHPStan fix #3 lignes 210 : même pattern null-check avant getId()
        $session     = $reservation->getSession();
        $sessionUser = $session?->getUser();

        if (!$user || !$session || !$sessionUser || $sessionUser->getId() !== $user->getId()) {
            throw $this->createAccessDeniedException();
        }

        // ✅ PHPStan fix #4 ligne 221 : cast (string) car get() retourne bool|float|int|string|null
        $statut  = (string) $request->request->get('statut', '');
        $allowed = ['confirmée', 'refusée', 'annulée'];

        // ✅ PHPStan fix #5 ligne 219 : cast (string) pour isCsrfTokenValid() qui attend string|null
        $token = (string) $request->request->get('_token', '');

        if (in_array($statut, $allowed) && $this->isCsrfTokenValid('resa_statut_' . $reservation->getId(), $token)) {
            $reservation->setStatut($statut);
            $em->flush();
            $this->addFlash('success', 'Réservation marquée comme "' . $statut . '".');
        } else {
            $this->addFlash('error', 'Action invalide.');
        }

        $referer = $request->headers->get('referer');
        if ($referer && str_contains($referer, 'professeur/reservations')) {
            return $this->redirectToRoute('reservation_professeur');
        }

        return $this->redirectToRoute('session_prof_dashboard');
    }

    #[Route('/{id}', name: 'app_reservation_delete', methods: ['POST'])]
    public function delete(
        Request $request,
        Reservation $reservation,
        EntityManagerInterface $em
    ): Response {
        $user = $this->getCurrentUser($em);

        // ✅ PHPStan fix #6 lignes 245 : même pattern null-check avant getId()
        $session     = $reservation->getSession();
        $sessionUser = $session?->getUser();

        if (!$user || !$session || !$sessionUser || $sessionUser->getId() !== $user->getId()) {
            throw $this->createAccessDeniedException();
        }

        // ✅ PHPStan fix #7 ligne 249 : cast (string) pour isCsrfTokenValid()
        $token = (string) $request->request->get('_token', '');

        if ($this->isCsrfTokenValid('delete' . $reservation->getId(), $token)) {
            $em->remove($reservation);
            $em->flush();
            $this->addFlash('success', 'Réservation supprimée.');
        }

        $referer = $request->headers->get('referer');
        if ($referer && str_contains($referer, 'professeur/reservations')) {
            return $this->redirectToRoute('reservation_professeur');
        }

        return $this->redirectToRoute('session_prof_dashboard');
    }
}