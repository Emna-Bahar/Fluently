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
    /**
     * Récupère le user courant (même logique que SessionController)
     */
    private function getCurrentUser(EntityManagerInterface $em): ?User
    {
        $user = $this->getUser();
        if ($user instanceof User) {
            return $user;
        }
        // Fallback développement uniquement
        return $em->getRepository(User::class)->find(1);
    }

    #[Route('/', name: 'app_reservation_index', methods: ['GET'])]
    public function index(ReservationRepository $reservationRepository, EntityManagerInterface $em): Response
    {
        $user = $this->getCurrentUser($em);
        $reservations = $reservationRepository->findByUser($user);

        return $this->render('reservation/index.html.twig', [
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
    ): Response
    {
        $user = $this->getCurrentUser($em);

        if ($reservation->getSession()->getUser()->getId() !== $user->getId()) {
            throw $this->createAccessDeniedException();
        }

        $form = $this->createForm(ReservationType::class, $reservation, [
            'is_student_view' => false,
        ]);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            $this->addFlash('success', 'Réservation modifiée avec succès.');
            return $this->redirectToRoute('session_prof_dashboard');
        }

        return $this->render('reservation/form.html.twig', [
            'form'            => $form->createView(),
            'reservation'     => $reservation,
            'edit'            => true,
            'is_student_view' => false,
            'successMessage'  => null,
        ]);
    }

    /**
     * Mise à jour rapide du statut (Confirmer / Refuser) depuis le dashboard
     */
    #[Route('/{id}/statut', name: 'app_reservation_update_statut', methods: ['POST'])]
    public function updateStatut(
        Request $request,
        Reservation $reservation,
        EntityManagerInterface $em
    ): Response
    {
        $user = $this->getCurrentUser($em);

        if ($reservation->getSession()->getUser()->getId() !== $user->getId()) {
            throw $this->createAccessDeniedException();
        }

        $statut  = $request->request->get('statut');
        $allowed = ['confirmée', 'refusée', 'annulée'];

        if (
            in_array($statut, $allowed) &&
            $this->isCsrfTokenValid('resa_statut_' . $reservation->getId(), $request->request->get('_token'))
        ) {
            $reservation->setStatut($statut);
            $em->flush();
            $this->addFlash('success', 'Réservation marquée comme "' . $statut . '".');
        } else {
            $this->addFlash('error', 'Action invalide.');
        }

        return $this->redirectToRoute('session_prof_dashboard');
    }

    #[Route('/{id}', name: 'app_reservation_delete', methods: ['POST'])]
    public function delete(
        Request $request,
        Reservation $reservation,
        EntityManagerInterface $em
    ): Response
    {
        $user = $this->getCurrentUser($em);

        if ($reservation->getSession()->getUser()->getId() !== $user->getId()) {
            throw $this->createAccessDeniedException();
        }

        if ($this->isCsrfTokenValid('delete' . $reservation->getId(), $request->request->get('_token'))) {
            $em->remove($reservation);
            $em->flush();
            $this->addFlash('success', 'Réservation supprimée.');
        }

        return $this->redirectToRoute('session_prof_dashboard');
    }
}