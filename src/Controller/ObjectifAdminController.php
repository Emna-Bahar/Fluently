<?php

namespace App\Controller;

use App\Entity\Objectif;
use App\Form\ObjectifType;
use App\Repository\ObjectifRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/admin/objectif')]
final class ObjectifAdminController extends AbstractController
{
    #[Route('/', name: 'app_objectif_admin_index', methods: ['GET'])]
    public function index(ObjectifRepository $objectifRepository): Response
    {
        return $this->render('objectif_admin/index.html.twig', [
            'objectifs' => $objectifRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_objectif_admin_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $objectif = new Objectif();
        $form     = $this->createForm(ObjectifType::class, $objectif);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if ($objectif->getDateFin() <= $objectif->getDateDeb()) {
                $this->addFlash('error', 'La date de fin doit être après la date de début');
            } else {
                $entityManager->persist($objectif);
                $entityManager->flush();
                $this->addFlash('success', 'Objectif créé avec succès!');
                return $this->redirectToRoute('app_objectif_admin_index');
            }
        } elseif ($form->isSubmitted()) {
            $this->addFlash('error', 'Veuillez corriger les erreurs dans le formulaire');
        }

        return $this->render('objectif_admin/new.html.twig', [
            'objectif' => $objectif,
            'form'     => $form,
        ]);
    }

    #[Route('/stats', name: 'app_objectif_admin_stats', methods: ['GET'])]
    public function stats(ObjectifRepository $objectifRepository): Response
    {
        $total     = $objectifRepository->count([]);
        $enCours   = $objectifRepository->count(['statut' => 'en_cours']);
        $complete  = $objectifRepository->count(['statut' => 'complete']);
        $abandonne = $objectifRepository->count(['statut' => 'abandonne']);
        $enPause   = $objectifRepository->count(['statut' => 'en_pause']);

        $pourcentageEnCours   = $total > 0 ? round(($enCours   / $total) * 100, 2) : 0;
        $pourcentageComplete  = $total > 0 ? round(($complete  / $total) * 100, 2) : 0;
        $pourcentageAbandonne = $total > 0 ? round(($abandonne / $total) * 100, 2) : 0;
        $pourcentageEnPause   = $total > 0 ? round(($enPause   / $total) * 100, 2) : 0;

        return $this->render('objectif_admin/stats.html.twig', [
            'total'                => $total,
            'enCours'              => $enCours,
            'complete'             => $complete,
            'abandonne'            => $abandonne,
            'enPause'              => $enPause,
            'pourcentageEnCours'   => $pourcentageEnCours,
            'pourcentageComplete'  => $pourcentageComplete,
            'pourcentageAbandonne' => $pourcentageAbandonne,
            'pourcentageEnPause'   => $pourcentageEnPause,
        ]);
    }

    #[Route('/{id}', name: 'app_objectif_admin_show', methods: ['GET'])]
    public function show(int $id, ObjectifRepository $objectifRepository): Response
    {
        $objectif = $objectifRepository->find($id);

        if (!$objectif) {
            throw $this->createNotFoundException('Objectif non trouvé');
        }

        return $this->render('objectif_admin/show.html.twig', [
            'objectif' => $objectif,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_objectif_admin_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, int $id, ObjectifRepository $objectifRepository, EntityManagerInterface $entityManager): Response
    {
        $objectif = $objectifRepository->find($id);

        if (!$objectif) {
            throw $this->createNotFoundException('Objectif non trouvé');
        }

        $form = $this->createForm(ObjectifType::class, $objectif);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if ($objectif->getDateFin() <= $objectif->getDateDeb()) {
                $this->addFlash('error', 'La date de fin doit être après la date de début');
            } else {
                $entityManager->flush();
                $this->addFlash('success', 'Objectif modifié avec succès!');
                return $this->redirectToRoute('app_objectif_admin_index');
            }
        } elseif ($form->isSubmitted()) {
            $this->addFlash('error', 'Veuillez corriger les erreurs dans le formulaire');
        }

        return $this->render('objectif_admin/edit.html.twig', [
            'objectif' => $objectif,
            'form'     => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_objectif_admin_delete', methods: ['POST'])]
    public function delete(Request $request, int $id, ObjectifRepository $objectifRepository, EntityManagerInterface $entityManager): Response
    {
        $objectif = $objectifRepository->find($id);

        if (!$objectif) {
            throw $this->createNotFoundException('Objectif non trouvé');
        }

        if ($this->isCsrfTokenValid('delete' . $objectif->getId(), (string) $request->request->get('_token'))) {
            $entityManager->remove($objectif);
            $entityManager->flush();
            $this->addFlash('success', 'Objectif supprimé avec succès!');
        }

        return $this->redirectToRoute('app_objectif_admin_index');
    }
}