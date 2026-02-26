<?php

namespace App\Controller;

use App\Repository\ObjectifRepository;
use App\Repository\TacheRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/gamification')]
final class GamificationController extends AbstractController
{
    #[Route('/', name: 'app_gamification_index', methods: ['GET'])]
    public function index(
        ObjectifRepository $objectifRepository,
        TacheRepository    $tacheRepository
    ): Response {
        $objectifs = $objectifRepository->findAll();
        $taches    = $tacheRepository->findAll();

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
            ['icone' => '💯', 'nom' => 'Centurion',        'description' => '100 points gagnés',      'couleur' => '#1abc9c', 'obtenu' => $totalPoints >= 100],
            ['icone' => '🌟', 'nom' => 'Expert',           'description' => '500 points gagnés',      'couleur' => '#2980b9', 'obtenu' => $totalPoints >= 500],
            ['icone' => '🦁', 'nom' => 'Légende',          'description' => '1000 points gagnés',     'couleur' => '#8e44ad', 'obtenu' => $totalPoints >= 1000],
        ];

        $badgesObtenus = array_filter($tousBadges, fn($b) => $b['obtenu']);
        $badgesLocked  = array_filter($tousBadges, fn($b) => !$b['obtenu']);

        // ── Classement par objectif (top utilisateurs simulé) ──
        $classement = [];
        foreach ($objectifs as $o) {
            if (!$o->getIdUser()) continue;
            $uid  = $o->getIdUser()->getId();
            $nom  = $o->getIdUser()->getPrenom() . ' ' . $o->getIdUser()->getNom();
            if (!isset($classement[$uid])) {
                $classement[$uid] = ['nom' => $nom, 'points' => 0, 'taches' => 0, 'objectifs' => 0];
            }
            if ($o->getStatut() === 'complete') {
                $classement[$uid]['points']    += 50;
                $classement[$uid]['objectifs'] += 1;
            }
            foreach ($o->getTaches() as $t) {
                if ($t->getStatut() === 'terminee') {
                    $classement[$uid]['points'] += 10;
                    $classement[$uid]['taches'] += 1;
                }
            }
        }
        usort($classement, fn($a, $b) => $b['points'] - $a['points']);

        return $this->render('gamification/index.html.twig', [
            'totalPoints'       => $totalPoints,
            'pointsTaches'      => $pointsTaches,
            'pointsObjectifs'   => $pointsObjectifs,
            'nbTaches'          => $nbTaches,
            'nbObjectifs'       => $nbObjectifs,
            'niveau'            => $niveau,
            'progression'       => $progression,
            'badgesObtenus'     => array_values($badgesObtenus),
            'badgesLocked'      => array_values($badgesLocked),
            'classement'        => array_slice($classement, 0, 10),
        ]);
    }
}