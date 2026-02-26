<?php

namespace App\Controller;

use App\Entity\Reservation;
use App\Entity\Session;
use App\Form\ReservationType;
use App\Repository\ReservationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/reservation')]
class ReservationController extends AbstractController
{
    #[Route('/', name: 'app_reservation_index', methods: ['GET', 'POST'])]
    public function index(
        ReservationRepository $reservationRepository,
        Request $request,
        EntityManagerInterface $entityManager,
        PaginatorInterface $paginator
    ): Response {
        $newReservation = new Reservation();

        $form = $this->createForm(ReservationType::class, $newReservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $entityManager->persist($newReservation);
                $entityManager->flush();
                $this->addFlash('success', 'Reservation creee avec succes !');
                return $this->redirectToRoute('app_reservation_index');
            } catch (\Exception $e) {
                $this->addFlash('error', 'Erreur lors de la creation : ' . $e->getMessage());
            }
        }

        $query = $reservationRepository->createQueryBuilder('r')
            ->orderBy('r.dateReservation', 'DESC')
            ->getQuery();

        $pagination = $paginator->paginate(
            $query,
            $request->query->getInt('page', 1),
            10
        );

        return $this->render('reservation/index.html.twig', [
            'reservations' => $pagination,
            'form_create' => $form->createView(),
        ]);
    }

    #[Route('/new', name: 'app_reservation_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $reservation = new Reservation();

        $sessionId = $request->query->get('session');
        if ($sessionId) {
            $session = $entityManager->getRepository(Session::class)->find($sessionId);
            if ($session) {
                $reservation->setSession($session);
            }
        }

        $form = $this->createForm(ReservationType::class, $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $entityManager->persist($reservation);
                $entityManager->flush();
                $this->addFlash('success', 'Reservation creee avec succes !');
                return $this->redirectToRoute('app_reservation_index');
            } catch (\Exception $e) {
                $this->addFlash('error', 'Erreur lors de la creation : ' . $e->getMessage());
            }
        }

        return $this->render('reservation/new.html.twig', [
            'reservation' => $reservation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_reservation_show', methods: ['GET'], requirements: ['id' => '\d+'])]
    public function show(Reservation $reservation): Response
    {
        return $this->render('reservation/show.html.twig', [
            'reservation' => $reservation,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_reservation_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Reservation $reservation, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ReservationType::class, $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $entityManager->flush();
                $this->addFlash('success', 'Reservation modifiee avec succes !');
                return $this->redirectToRoute('app_reservation_index');
            } catch (\Exception $e) {
                $this->addFlash('error', 'Erreur lors de la modification : ' . $e->getMessage());
            }
        }

        return $this->render('reservation/edit.html.twig', [
            'reservation' => $reservation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_reservation_delete', methods: ['POST'])]
    public function delete(Request $request, Reservation $reservation, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $reservation->getId(), $request->request->get('_token'))) {
            try {
                $entityManager->remove($reservation);
                $entityManager->flush();
                $this->addFlash('success', 'Reservation supprimee !');
            } catch (\Exception $e) {
                $this->addFlash('error', 'Erreur lors de la suppression : ' . $e->getMessage());
            }
        }
        return $this->redirectToRoute('app_reservation_index');
    }
// partie admin

    // ==================== ADMIN ROUTES ====================
    
    #[Route('/admin/reservations', name: 'admin_reservation_index', methods: ['GET', 'POST'])]
    public function adminIndex(
        ReservationRepository $reservationRepository,
        Request $request,
        EntityManagerInterface $entityManager,
        PaginatorInterface $paginator
    ): Response {
        $newReservation = new Reservation();
        $form = $this->createForm(ReservationType::class, $newReservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $entityManager->persist($newReservation);
                $entityManager->flush();
                $this->addFlash('success', 'Réservation créée avec succès !');
                return $this->redirectToRoute('admin_reservation_index');
            } catch (\Exception $e) {
                $this->addFlash('error', 'Erreur lors de la création : ' . $e->getMessage());
            }
        }

        $query = $reservationRepository->createQueryBuilder('r')
            ->orderBy('r.dateReservation', 'DESC')
            ->getQuery();

        $pagination = $paginator->paginate(
            $query,
            $request->query->getInt('page', 1),
            10
        );

        return $this->render('dashboard/reservation/index.html.twig', [
            'reservations' => $pagination,
            'form_create' => $form->createView(),
        ]);
    }

    #[Route('/admin/reservations/new', name: 'admin_reservation_new', methods: ['GET', 'POST'])]
    public function adminNew(Request $request, EntityManagerInterface $entityManager): Response
    {
        $reservation = new Reservation();

        $sessionId = $request->query->get('session');
        if ($sessionId) {
            $session = $entityManager->getRepository(Session::class)->find($sessionId);
            if ($session) {
                $reservation->setSession($session);
            }
        }

        $form = $this->createForm(ReservationType::class, $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $entityManager->persist($reservation);
                $entityManager->flush();
                $this->addFlash('success', 'Réservation créée avec succès !');
                return $this->redirectToRoute('admin_reservation_index');
            } catch (\Exception $e) {
                $this->addFlash('error', 'Erreur lors de la création : ' . $e->getMessage());
            }
        }

        return $this->render('dashboard/reservation/new.html.twig', [
            'reservation' => $reservation,
            'form' => $form,
        ]);
    }

    #[Route('/admin/reservations/{id}', name: 'admin_reservation_show', methods: ['GET'], requirements: ['id' => '\d+'])]
    public function adminShow(Reservation $reservation): Response
    {
        return $this->render('dashboard/reservation/show.html.twig', [
            'reservation' => $reservation,
        ]);
    }

    #[Route('/admin/reservations/{id}/edit', name: 'admin_reservation_edit', methods: ['GET', 'POST'])]
    public function adminEdit(Request $request, Reservation $reservation, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ReservationType::class, $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $entityManager->flush();
                $this->addFlash('success', 'Réservation modifiée avec succès !');
                return $this->redirectToRoute('admin_reservation_index');
            } catch (\Exception $e) {
                $this->addFlash('error', 'Erreur lors de la modification : ' . $e->getMessage());
            }
        }

        return $this->render('dashboard/reservation/edit.html.twig', [
            'reservation' => $reservation,
            'form' => $form,
        ]);
    }

    #[Route('/admin/reservations/{id}/delete', name: 'admin_reservation_delete', methods: ['POST'])]
    public function adminDelete(Request $request, Reservation $reservation, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $reservation->getId(), $request->request->get('_token'))) {
            try {
                $entityManager->remove($reservation);
                $entityManager->flush();
                $this->addFlash('success', 'Réservation supprimée !');
            } catch (\Exception $e) {
                $this->addFlash('error', 'Erreur lors de la suppression : ' . $e->getMessage());
            }
        }
        return $this->redirectToRoute('admin_reservation_index');
    }

    // ==================== FRONT ROUTES (si besoin plus tard) ====================
    
    #[Route('/mes-reservations', name: 'front_reservation_index', methods: ['GET'])]
    public function frontIndex(
        ReservationRepository $reservationRepository,
        Request $request,
        PaginatorInterface $paginator
    ): Response {
        // TODO: Filtrer par utilisateur connecté
        $query = $reservationRepository->createQueryBuilder('r')
            ->orderBy('r.dateReservation', 'DESC')
            ->getQuery();

        $pagination = $paginator->paginate(
            $query,
            $request->query->getInt('page', 1),
            10
        );

        return $this->render('front/reservation/index.html.twig', [
            'reservations' => $pagination,
        ]);
    }

    #[Route('/reservations/new', name: 'front_reservation_new', methods: ['GET', 'POST'])]
    public function frontNew(Request $request, EntityManagerInterface $entityManager): Response
    {
        $reservation = new Reservation();

        $sessionId = $request->query->get('session');
        if ($sessionId) {
            $session = $entityManager->getRepository(Session::class)->find($sessionId);
            if ($session) {
                $reservation->setSession($session);
            }
        }

        $form = $this->createForm(ReservationType::class, $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $entityManager->persist($reservation);
                $entityManager->flush();
                $this->addFlash('success', 'Réservation créée avec succès !');
                return $this->redirectToRoute('front_reservation_index');
            } catch (\Exception $e) {
                $this->addFlash('error', 'Erreur lors de la création : ' . $e->getMessage());
            }
        }

        return $this->render('front/reservation/new.html.twig', [
            'reservation' => $reservation,
            'form' => $form,
        ]);
    }
}