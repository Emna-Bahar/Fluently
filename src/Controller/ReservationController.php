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

    /**
     * Recharge l'entité User réelle depuis la BDD via l'email.
     * Robuste contre les proxies Doctrine et la désérialisation de session PHP.
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

    /**
     * ✅ Vérifie que la réservation appartient bien à une session du prof connecté.
     * Utilisé pour sécuriser les actions : modifier statut, supprimer.
     */
    private function checkProfOwnsReservation(Reservation $reservation, User $prof): bool
    {
        return $reservation->getSession()?->getUser()?->getId() === $prof->getId();
    }

    // =========================================================================
    // LISTE DES RÉSERVATIONS DE L'ÉTUDIANT CONNECTÉ
    // =========================================================================

    #[Route('/', name: 'app_reservation_index', methods: ['GET'])]
    public function index(EntityManagerInterface $em): Response
    {
        $user = $this->getCurrentUser($em);

        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

        $reservations = $this->reservationRepository->findByUser($user);

        return $this->render('reservation/index.html.twig', [
            'reservations' => $reservations,
        ]);
    }

    // =========================================================================
    // ESPACE PROFESSEUR — liste des réservations sur SES sessions
    // =========================================================================

    #[Route('/professeur/reservations', name: 'reservation_professeur', methods: ['GET'])]
    public function professeurReservations(EntityManagerInterface $em): Response
    {
        $user = $this->getCurrentUser($em);

        if (!$user) {
            $this->addFlash('warning', 'Veuillez vous connecter.');
            return $this->redirectToRoute('app_login');
        }

        // ✅ DEBUG temporaire — décommenter si problème persiste :
        // $all = $this->reservationRepository->findAll();
        // foreach ($all as $r) {
        //     dump([
        //         'resa_id'      => $r->getId(),
        //         'statut'       => $r->getStatut(),
        //         'session_id'   => $r->getSession()?->getId(),
        //         'session_prof' => $r->getSession()?->getUser()?->getId(),
        //         'current_prof' => $user->getId(),
        //         'match'        => $r->getSession()?->getUser()?->getId() === $user->getId(),
        //     ]);
        // }
        // dd('FIN DEBUG');

        $reservations = $this->reservationRepository->findAllForProf($user);

        return $this->render('reservation/professeur.html.twig', [
            'reservations' => $reservations,
            'user'         => $user,
        ]);
    }

    // =========================================================================
    // CALENDRIER
    // =========================================================================

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
                'confirmée', 'acceptée' => '#00C853',
                'en attente'            => '#ffc107',
                'refusée'               => '#FF4757',
                'annulée'               => '#FF4757',
                default                 => '#6b6b9a',
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

    // =========================================================================
    // NOUVELLE RÉSERVATION (côté étudiant)
    // =========================================================================

    #[Route('/new', name: 'app_reservation_new', methods: ['GET', 'POST'])]
    public function new(
        Request $request,
        EntityManagerInterface $em
    ): Response {
        $user = $this->getCurrentUser($em);

        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

        $reservation = new Reservation();
        $reservation->setUser($user);
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
            // ✅ Sécurité : on reforce le user et le statut après handleRequest
            $reservation->setUser($user);
            $reservation->setStatut('en attente');

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

    // =========================================================================
    // VOIR UNE RÉSERVATION
    // =========================================================================

    #[Route('/{id}', name: 'app_reservation_show', methods: ['GET'])]
    public function show(Reservation $reservation): Response
    {
        return $this->render('reservation/show.html.twig', [
            'reservation' => $reservation,
        ]);
    }

    // =========================================================================
    // MODIFIER UNE RÉSERVATION (côté prof)
    // =========================================================================

    #[Route('/{id}/edit', name: 'app_reservation_edit', methods: ['GET', 'POST'])]
    public function edit(
        Request $request,
        Reservation $reservation,
        EntityManagerInterface $em
    ): Response {
        $user = $this->getCurrentUser($em);

        if (!$user || !$this->checkProfOwnsReservation($reservation, $user)) {
            throw $this->createAccessDeniedException(
                'Vous n\'êtes pas autorisé à modifier cette réservation.'
            );
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

    // =========================================================================
    // CHANGER LE STATUT D'UNE RÉSERVATION (confirmer / refuser / annuler)
    // =========================================================================

    #[Route('/{id}/statut', name: 'app_reservation_update_statut', methods: ['POST'])]
    public function updateStatut(
        Request $request,
        Reservation $reservation,
        EntityManagerInterface $em
    ): Response {
        $user = $this->getCurrentUser($em);

        // ✅ Sécurité : seul le prof propriétaire de la SESSION peut changer le statut
        if (!$user || !$this->checkProfOwnsReservation($reservation, $user)) {
            throw $this->createAccessDeniedException(
                'Vous n\'êtes pas autorisé à modifier cette réservation.'
            );
        }

        $statut  = (string) $request->request->get('statut', '');
        $allowed = ['confirmée', 'acceptée', 'refusée', 'annulée'];
        $token   = (string) $request->request->get('_token', '');

        if (
            in_array($statut, $allowed, true)
            && $this->isCsrfTokenValid('resa_statut_' . $reservation->getId(), $token)
        ) {
            $reservation->setStatut($statut);
            $em->flush();
            $this->addFlash('success', 'Réservation marquée comme "' . $statut . '".');
        } else {
            $this->addFlash('error', 'Action invalide ou token CSRF incorrect.');
        }

        return $this->redirectToRoute('reservation_professeur');
    }

    // =========================================================================
    // SUPPRIMER UNE RÉSERVATION
    // =========================================================================

    #[Route('/{id}', name: 'app_reservation_delete', methods: ['POST'])]
    public function delete(
        Request $request,
        Reservation $reservation,
        EntityManagerInterface $em
    ): Response {
        $user = $this->getCurrentUser($em);

        // ✅ Sécurité : seul le prof propriétaire de la SESSION peut supprimer
        if (!$user || !$this->checkProfOwnsReservation($reservation, $user)) {
            throw $this->createAccessDeniedException(
                'Vous n\'êtes pas autorisé à supprimer cette réservation.'
            );
        }

        $token = (string) $request->request->get('_token', '');

        if ($this->isCsrfTokenValid('delete' . $reservation->getId(), $token)) {
            $em->remove($reservation);
            $em->flush();
            $this->addFlash('success', 'Réservation supprimée.');
        } else {
            $this->addFlash('error', 'Token CSRF invalide.');
        }

        return $this->redirectToRoute('reservation_professeur');
    }
}