<?php

namespace App\Controller;

use App\Entity\Tache;
use App\Form\TacheType;
use App\Repository\TacheRepository;
use App\Repository\ObjectifRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/tache')]
final class TacheController extends AbstractController
{
    // ===================== LISTE =====================
    #[Route('/', name: 'app_tache_index', methods: ['GET'])]
    public function index(TacheRepository $tacheRepository): Response
    {
        return $this->render('tache/index.html.twig', [
            'taches' => $tacheRepository->findAll(),
        ]);
    }

    // ===================== RECHERCHE AJAX =====================
    #[Route('/search', name: 'app_tache_search', methods: ['POST'])]
    public function search(Request $request, TacheRepository $tacheRepository): JsonResponse
    {
        $search   = $request->request->get('search', '');
        $statut   = $request->request->get('statut', '');
        $priorite = $request->request->get('priorite', '');

        $taches = $tacheRepository->searchTaches($search, $statut, $priorite);

        $data = [];
        foreach ($taches as $tache) {
            $data[] = [
                'id'        => $tache->getId(),
                'titre'     => $tache->getTitre(),
                'description' => $tache->getDescription(),
                'dateLimite'  => $tache->getDateLimite()
                                    ? $tache->getDateLimite()->format('d/m/Y')
                                    : '-',
                'statut'    => $tache->getStatut(),
                'priorite'  => $tache->getPriorite(),
                'objectif'  => $tache->getIdObjectif()
                                    ? $tache->getIdObjectif()->getTitre()
                                    : '-',
                'urlShow'   => $this->generateUrl('app_tache_show', ['id' => $tache->getId()]),
                'urlEdit'   => $this->generateUrl('app_tache_edit', ['id' => $tache->getId()]),
            ];
        }

        return new JsonResponse([
            'success' => true,
            'count'   => count($data),
            'taches'  => $data,
        ]);
    }

    // ===================== AJOUT =====================
    #[Route('/new', name: 'app_tache_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $tache = new Tache();
        $form  = $this->createForm(TacheType::class, $tache);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($tache);
            $entityManager->flush();

            $this->addFlash('success', 'Tâche créée avec succès !');
            return $this->redirectToRoute('app_tache_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('tache/new.html.twig', [
            'tache' => $tache,
            'form'  => $form,
        ]);
    }

    // ===================== AJOUT DEPUIS OBJECTIF =====================
    #[Route('/new/objectif/{id}', name: 'app_tache_new_from_objectif', methods: ['GET', 'POST'])]
    public function newFromObjectif(
        Request $request,
        EntityManagerInterface $entityManager,
        ObjectifRepository $objectifRepository,
        int $id
    ): Response {
        $objectif = $objectifRepository->find($id);

        if (!$objectif) {
            throw $this->createNotFoundException('Objectif introuvable');
        }

        $tache = new Tache();
        $tache->setIdObjectif($objectif);

        $form = $this->createForm(TacheType::class, $tache);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($tache);
            $entityManager->flush();

            $this->addFlash('success', 'Tâche ajoutée à l\'objectif avec succès !');
            return $this->redirectToRoute('app_objectif_show', ['id' => $objectif->getId()]);
        }

        return $this->render('tache/new.html.twig', [
            'tache'   => $tache,
            'form'    => $form,
            'objectif' => $objectif,
        ]);
    }

    // ===================== AFFICHER =====================
    #[Route('/{id}', name: 'app_tache_show', methods: ['GET'])]
    public function show(Tache $tache): Response
    {
        return $this->render('tache/show.html.twig', [
            'tache' => $tache,
        ]);
    }

    // ===================== MODIFIER =====================
    #[Route('/{id}/edit', name: 'app_tache_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Tache $tache, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(TacheType::class, $tache);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            $this->addFlash('success', 'Tâche modifiée avec succès !');
            return $this->redirectToRoute('app_tache_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('tache/edit.html.twig', [
            'tache' => $tache,
            'form'  => $form,
        ]);
    }

    // ===================== SUPPRIMER =====================
    #[Route('/{id}', name: 'app_tache_delete', methods: ['POST'])]
    public function delete(Request $request, Tache $tache, EntityManagerInterface $entityManager): Response
    {
        $objectif = $tache->getIdObjectif();

        if ($this->isCsrfTokenValid('delete' . $tache->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($tache);
            $entityManager->flush();
            $this->addFlash('success', 'Tâche supprimée avec succès !');
        }

        // Redirige vers l'objectif parent si disponible
        if ($objectif) {
            return $this->redirectToRoute('app_objectif_show', ['id' => $objectif->getId()]);
        }

        return $this->redirectToRoute('app_tache_index');
    }
}
