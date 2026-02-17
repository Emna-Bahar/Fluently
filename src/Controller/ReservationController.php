<?php

namespace App\Controller;

use App\Entity\Reservation;
use App\Entity\User;
use App\Entity\Session;
use App\Form\ReservationType;
use App\Repository\ReservationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/reservation')]
class ReservationController extends AbstractController
{
    #[Route('/', name: 'app_reservation_index', methods: ['GET'])]
    public function index(ReservationRepository $reservationRepository, EntityManagerInterface $em): Response
    {
        $user = $this->getTestUser($em);
        $reservations = $reservationRepository->findByUser($user);

        return $this->render('reservation/index.html.twig', [
            'reservations' => $reservations,
        ]);
    }

    #[Route('/professeur/reservations', name: 'reservation_professeur', methods: ['GET'])]
    public function espaceProfesseurReservations(ReservationRepository $reservationRepository, EntityManagerInterface $em): Response
    {
        $user = $this->getTestUser($em);
        $reservations = $reservationRepository->findPendingForProf($user);

        return $this->render('reservation/professeur.html.twig', [
            'reservations' => $reservations,
        ]);
    }

    #[Route('/new', name: 'app_reservation_new', methods: ['GET', 'POST'])]
    public function new(
        Request $request,
        EntityManagerInterface $em,
        ReservationRepository $reservationRepository
    ): Response
    {
        $reservation = new Reservation();
        $reservation->setUser($this->getTestUser($em));
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

        $successMessage = null;

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($reservation);
            $em->flush();
            $successMessage = 'Demande de réservation envoyée avec succès.';
            $this->addFlash('success', $successMessage);
            return $this->redirectToRoute('app_session_index');
        }

        return $this->render('reservation/form.html.twig', [
            'form'            => $form->createView(),
            'reservation'     => $reservation,
            'edit'            => false,
            'is_student_view' => true,
            'successMessage'  => $successMessage,
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
    ): Response
    {
        if ($reservation->getSession()->getUser() !== $this->getTestUser($em)) {
            throw $this->createAccessDeniedException();
        }

        $form = $this->createForm(ReservationType::class, $reservation, [
            'is_student_view' => false,
        ]);

        $form->handleRequest($request);

        $successMessage = null;

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            $successMessage = 'Réservation modifiée avec succès.';
            $this->addFlash('success', $successMessage);
            return $this->redirectToRoute('reservation_professeur');
        }

        return $this->render('reservation/form.html.twig', [
            'form'            => $form->createView(),
            'reservation'     => $reservation,
            'edit'            => true,
            'is_student_view' => false,
            'successMessage'  => $successMessage,
        ]);
    }

    #[Route('/{id}', name: 'app_reservation_delete', methods: ['POST'])]
    public function delete(
        Request $request,
        Reservation $reservation,
        EntityManagerInterface $em
    ): Response
    {
        if ($reservation->getSession()->getUser() !== $this->getTestUser($em)) {
            throw $this->createAccessDeniedException();
        }

        if ($this->isCsrfTokenValid('delete' . $reservation->getId(), $request->request->get('_token'))) {
            $em->remove($reservation);
            $em->flush();
            $this->addFlash('success', 'Réservation supprimée.');
        }

        return $this->redirectToRoute('reservation_professeur');
    }

    private function getTestUser(EntityManagerInterface $em): ?User
    {
        return $em->getRepository(User::class)->find(1); // Change par un ID valide
    }
}