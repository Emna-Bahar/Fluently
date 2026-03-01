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
    public function index(TacheRepository $tacheRepository, ObjectifRepository $objectifRepository): Response
    {
        // ── Calcul de la gamification ──
        $gamification = $this->calculerGamification(
            $objectifRepository->findAll(),
            $tacheRepository->findAll()
        );

        return $this->render('tache/index.html.twig', [
            'taches' => $tacheRepository->findAll(),
            'gamification' => $gamification,
        ]);
    }

    // ===================== RECHERCHE AJAX =====================
    #[Route('/search', name: 'app_tache_search', methods: ['POST'])]
    public function search(Request $request, TacheRepository $tacheRepository): JsonResponse
    {
        $search   = $request->request->getString('search');
        $statut   = $request->request->getString('statut');
        $priorite = $request->request->getString('priorite');

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

    // ===================== CALCUL GAMIFICATION =====================
/**
 * @param \App\Entity\Objectif[] $objectifs
 * @param \App\Entity\Tache[] $taches
 * @return array<string, mixed>
 */
private function calculerGamification(array $objectifs, array $taches): array    {
        // ── Calcul des points ──
        $tachesTerminees   = array_filter($taches,    fn($t) => $t->getStatut() === 'terminee');
        $objectifsCompletes = array_filter($objectifs, fn($o) => $o->getStatut() === 'complete');

        $pointsTaches    = count($tachesTerminees)   * 10;  // 10 pts par tâche
        $pointsObjectifs = count($objectifsCompletes) * 50; // 50 pts par objectif
        $totalPoints     = $pointsTaches + $pointsObjectifs;

        // ── Niveau ──
        $niveau = match(true) {
            $totalPoints >= 1000 => ['label' => 'Légende',       'icone' => '🦁', 'couleur' => '#8e44ad', 'prochain' => 1000],
            $totalPoints >= 500  => ['label' => 'Expert',        'icone' => '🌟', 'couleur' => '#f39c12', 'prochain' => 1000],
            $totalPoints >= 100  => ['label' => 'Intermédiaire', 'icone' => '🚀', 'couleur' => '#3498db', 'prochain' => 500],
            $totalPoints >= 10   => ['label' => 'Débutant',      'icone' => '🌱', 'couleur' => '#2ecc71', 'prochain' => 100],
            default              => ['label' => 'Novice',        'icone' => '🐣', 'couleur' => '#95a5a6', 'prochain' => 10],
        };

        $progression = min(100, round(($totalPoints / $niveau['prochain']) * 100));

        // ── Badges ──
        $nbTaches    = count($tachesTerminees);
        $nbObjectifs = count($objectifsCompletes);

        $tousBadges = [
            ['icone' => '🎯', 'nom' => 'Premier pas',     'description' => '1 tâche complétée',      'couleur' => '#2ecc71', 'obtenu' => $nbTaches >= 1],
            ['icone' => '⚡', 'nom' => 'En route',         'description' => '5 tâches complétées',    'couleur' => '#3498db', 'obtenu' => $nbTaches >= 5],
            ['icone' => '🔥', 'nom' => 'Productif',        'description' => '10 tâches complétées',   'couleur' => '#e67e22', 'obtenu' => $nbTaches >= 10],
            ['icone' => '🤖', 'nom' => 'Machine',          'description' => '25 tâches complétées',   'couleur' => '#9b59b6', 'obtenu' => $nbTaches >= 25],
            ['icone' => '🏅', 'nom' => 'Objectif atteint', 'description' => '1 objectif complété',    'couleur' => '#f1c40f', 'obtenu' => $nbObjectifs >= 1],
            ['icone' => '🏆', 'nom' => 'Ambitieux',        'description' => '3 objectifs complétés',  'couleur' => '#e74c3c', 'obtenu' => $nbObjectifs >= 3],
            ['icone' => '👑', 'nom' => 'Champion',         'description' => '5 objectifs complétés',  'couleur' => '#f39c12', 'obtenu' => $nbObjectifs >= 5],
        ];

        $badgesObtenus = array_filter($tousBadges, fn($b) => $b['obtenu']);

        return [
            'totalPoints' => $totalPoints,
            'pointsTaches' => $pointsTaches,
            'pointsObjectifs' => $pointsObjectifs,
            'nbTaches' => $nbTaches,
            'nbObjectifs' => $nbObjectifs,
            'niveau' => $niveau,
            'progression' => $progression,
            'badgesObtenus' => array_values($badgesObtenus),
        ];
    }
}
