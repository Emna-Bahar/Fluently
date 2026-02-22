<?php

namespace App\Controller;

use App\Entity\Objectif;
use App\Form\ObjectifType;
use App\Repository\ObjectifRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Knp\Component\Pager\PaginatorInterface;

#[Route('/objectif')]
final class ObjectifController extends AbstractController
{
    // ===================== LISTE =====================
    #[Route(name: 'app_objectif_index', methods: ['GET'])]
    public function index(
        Request $request,
        ObjectifRepository $objectifRepository,
        PaginatorInterface $paginator
    ): Response {
        $query = $objectifRepository->createQueryBuilder('o')
            ->orderBy('o.id', 'DESC')
            ->getQuery();

        $pagination = $paginator->paginate(
            $query,
            $request->query->getInt('page', 1),
            3
        );

        return $this->render('objectif/index.html.twig', [
            'objectifs' => $pagination,
        ]);
    }

    // ===================== CALENDRIER =====================
    #[Route('/calendar', name: 'app_objectif_calendar', methods: ['GET'])]
    public function calendar(): Response
    {
        return $this->render('objectif/calendar.html.twig');
    }

    // ===================== CALENDRIER EVENTS JSON =====================
    #[Route('/calendar/events', name: 'app_objectif_calendar_events', methods: ['GET'])]
    public function calendarEvents(ObjectifRepository $objectifRepository): JsonResponse
    {
        $objectifs = $objectifRepository->findAll();
        $events    = [];

        foreach ($objectifs as $objectif) {
            if (!$objectif->getDateFin()) continue;

            $color = match($objectif->getStatut()) {
                'complete'  => '#2ecc71',
                'abandonne' => '#95a5a6',
                'en_pause'  => '#f39c12',
                default     => $objectif->getDateFin() < new \DateTime() ? '#e74c3c' : '#4f6df5',
            };

            $events[] = [
                'id'    => $objectif->getId(),
                'title' => $objectif->getTitre(),
                'start' => $objectif->getDateDeb()?->format('Y-m-d'),
                'end'   => $objectif->getDateFin()->format('Y-m-d'),
                'color' => $color,
                'url'   => $this->generateUrl('app_objectif_show', ['id' => $objectif->getId()]),
            ];
        }

        return new JsonResponse($events);
    }

    // ===================== NOUVEAU =====================
    #[Route('/new', name: 'app_objectif_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $objectif = new Objectif();
        $form     = $this->createForm(ObjectifType::class, $objectif);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($objectif);
            $entityManager->flush();
            $this->addFlash('success', 'Objectif créé avec succès ! 🎯');
            return $this->redirectToRoute('app_objectif_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('objectif/new.html.twig', [
            'objectif' => $objectif,
            'form'     => $form,
        ]);
    }

    // ===================== AFFICHER =====================
    #[Route('/{id}', name: 'app_objectif_show', methods: ['GET'])]
    public function show(Objectif $objectif): Response
    {
        return $this->render('objectif/show.html.twig', [
            'objectif' => $objectif,
        ]);
    }

    // ===================== MODIFIER =====================
    #[Route('/{id}/edit', name: 'app_objectif_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Objectif $objectif, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ObjectifType::class, $objectif);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            $this->addFlash('success', 'Objectif modifié avec succès ! ✏️');
            return $this->redirectToRoute('app_objectif_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('objectif/edit.html.twig', [
            'objectif' => $objectif,
            'form'     => $form,
        ]);
    }

    // ===================== SUPPRIMER =====================
    #[Route('/{id}', name: 'app_objectif_delete', methods: ['POST'])]
    public function delete(Request $request, Objectif $objectif, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $objectif->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($objectif);
            $entityManager->flush();
            $this->addFlash('success', 'Objectif supprimé ! 🗑️');
        }

        return $this->redirectToRoute('app_objectif_index', [], Response::HTTP_SEE_OTHER);
    }
}