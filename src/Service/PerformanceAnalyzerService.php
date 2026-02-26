<?php

namespace App\Service;

use App\Entity\User;
use App\Entity\Langue;
use App\Repository\TestPassageRepository;
use Doctrine\ORM\EntityManagerInterface;

class PerformanceAnalyzerService
{
    public function __construct(
        private EntityManagerInterface $em,
        private TestPassageRepository $testPassageRepository,
        private AITextCorrectionService $aiService
    ) {}

    /**
     * Analyse complète des performances d'un utilisateur
     */
    public function analyzeUserPerformance(User $user, Langue $langue): array
    {
        // Récupérer tous les tests terminés pour cette langue
        $passages = $this->testPassageRepository->createQueryBuilder('tp')
            ->join('tp.test', 't')
            ->where('tp.user = :user')
            ->andWhere('t.langue = :langue')
            ->andWhere('tp.statut = :statut')
            ->setParameter('user', $user)
            ->setParameter('langue', $langue)
            ->setParameter('statut', 'termine')
            ->getQuery()
            ->getResult();

        if (empty($passages)) {
            return [
                'competences' => [],
                'stats_globales' => [
                    'tests_passes' => 0,
                    'score_moyen' => 0,
                    'temps_total' => 0
                ],
                'has_data' => false
            ];
        }

        // Calculer les compétences
        $competences = $this->calculateCompetences($passages);
        
        // Stats globales
        $statsGlobales = $this->calculateGlobalStats($passages);
        
        // Progression temporelle
        $progression = $this->calculateProgression($passages);
        
        return [
            'competences' => $competences,
            'stats_globales' => $statsGlobales,
            'progression' => $progression,
            'has_data' => true
        ];
    }

    /**
     * Calcule les scores par compétence
     */
    private function calculateCompetences(array $passages): array
    {
        $competences = [
            'grammaire' => [],
            'vocabulaire' => [],
            'comprehension' => [],
            'oral' => []
        ];

        foreach ($passages as $passage) {
            $test = $passage->getTest();
            $questions = $test->getQuestions();

            foreach ($questions as $question) {
                $type = $question->getType();
                
                // Mapper les types de questions aux compétences
                if ($type === 'qcm' || $type === 'vrai_faux') {
                    // On considère que les QCM testent grammaire et vocabulaire
                    $competences['grammaire'][] = $passage->getResultat();
                    $competences['vocabulaire'][] = $passage->getResultat();
                } elseif ($type === 'oral') {
                    $competences['oral'][] = $passage->getResultat();
                } elseif ($type === 'texte_libre') {
                    $competences['comprehension'][] = $passage->getResultat();
                }
            }
        }

        // Calculer les moyennes
        $result = [];
        foreach ($competences as $competence => $scores) {
            if (!empty($scores)) {
                $moyenne = array_sum($scores) / count($scores);
                $result[$competence] = [
                    'score' => round($moyenne, 1),
                    'count' => count($scores),
                    'niveau' => $this->determineNiveau($moyenne)
                ];
            } else {
                $result[$competence] = [
                    'score' => 0,
                    'count' => 0,
                    'niveau' => 'Non évalué'
                ];
            }
        }

        return $result;
    }

    /**
     * Calcule les statistiques globales
     */
    private function calculateGlobalStats(array $passages): array
    {
        $totalTests = count($passages);
        $scores = array_map(fn($p) => $p->getResultat(), $passages);
        $scoreMoyen = array_sum($scores) / $totalTests;
        
        $tempsTotal = array_sum(array_map(fn($p) => $p->getTempsPasse() ?? 0, $passages));
        
        $meilleurScore = max($scores);
        $dernierTest = end($passages);
        $dernierScore = $dernierTest->getResultat();

        return [
            'tests_passes' => $totalTests,
            'score_moyen' => round($scoreMoyen, 1),
            'temps_total' => $tempsTotal,
            'temps_total_heures' => round($tempsTotal / 3600, 1),
            'meilleur_score' => round($meilleurScore, 1),
            'dernier_score' => round($dernierScore, 1),
            'progression' => $this->calculateProgressionTrend($passages)
        ];
    }

    /**
     * Calcule la progression dans le temps
     */
    private function calculateProgression(array $passages): array
    {
        $progression = [];
        
        foreach ($passages as $passage) {
            $date = $passage->getDateFin()->format('Y-m-d');
            $progression[] = [
                'date' => $date,
                'score' => round($passage->getResultat(), 1),
                'test' => $passage->getTest()->getTitre()
            ];
        }

        return $progression;
    }

    /**
     * Détermine la tendance de progression
     */
    private function calculateProgressionTrend(array $passages): string
    {
        if (count($passages) < 2) {
            return 'stable';
        }

        $scores = array_map(fn($p) => $p->getResultat(), $passages);
        $firstHalf = array_slice($scores, 0, ceil(count($scores) / 2));
        $secondHalf = array_slice($scores, ceil(count($scores) / 2));

        $avgFirst = array_sum($firstHalf) / count($firstHalf);
        $avgSecond = array_sum($secondHalf) / count($secondHalf);

        if ($avgSecond > $avgFirst + 5) {
            return 'progression';
        } elseif ($avgSecond < $avgFirst - 5) {
            return 'regression';
        } else {
            return 'stable';
        }
    }

    private function determineNiveau(float $score): string
    {
        if ($score >= 90) return 'Excellent';
        if ($score >= 80) return 'Très bien';
        if ($score >= 70) return 'Bien';
        if ($score >= 60) return 'Assez bien';
        if ($score >= 50) return 'Moyen';
        return 'À améliorer';
    }

    /**
     * Génère des recommandations personnalisées avec l'IA
     */
    public function generateAIRecommendations(User $user, Langue $langue, array $analysis): array
    {
        $competences = $analysis['competences'];
        $stats = $analysis['stats_globales'];

        // Construire le prompt pour l'IA
        $prompt = $this->buildRecommendationPrompt($user, $langue, $competences, $stats);

        try {
            // Utiliser ton service IA existant (on va adapter la méthode)
            $response = $this->aiService->generateRecommendations($prompt);
            
            return $response;
        } catch (\Exception $e) {
            // Fallback : recommandations par défaut
            return $this->generateDefaultRecommendations($competences);
        }
    }

    private function buildRecommendationPrompt(User $user, Langue $langue, array $competences, array $stats): string
    {
        $competencesText = '';
        foreach ($competences as $comp => $data) {
            $competencesText .= "- $comp: {$data['score']}% ({$data['niveau']})\n";
        }

        return <<<PROMPT
Tu es un conseiller pédagogique expert en apprentissage des langues.

**Profil de l'étudiant :**
- Prénom : {$user->getPrenom()}
- Langue étudiée : {$langue->getNom()}
- Tests passés : {$stats['tests_passes']}
- Score moyen : {$stats['score_moyen']}%
- Progression : {$stats['progression']}

**Compétences évaluées :**
$competencesText

**Tâche :**
Génère 3-4 recommandations personnalisées pour aider l'étudiant à progresser.

**Format de réponse (JSON uniquement, sans markdown) :**
{
  "recommandations": [
    {
      "titre": "Focus sur...",
      "description": "Explication courte",
      "actions": ["Action 1", "Action 2"],
      "priorite": "haute|moyenne|basse"
    }
  ],
  "message_encouragement": "Message personnalisé et motivant"
}

Commence directement par { et termine par }.
PROMPT;
    }

    private function generateDefaultRecommendations(array $competences): array
    {
        $recommendations = [];

        // Trouver la compétence la plus faible
        $minScore = 100;
        $weakestComp = null;
        foreach ($competences as $comp => $data) {
            if ($data['score'] < $minScore && $data['count'] > 0) {
                $minScore = $data['score'];
                $weakestComp = $comp;
            }
        }

        if ($weakestComp) {
            $recommendations[] = [
                'titre' => 'Améliorer ' . ucfirst($weakestComp),
                'description' => 'Cette compétence nécessite plus de travail',
                'actions' => ['Pratiquer régulièrement', 'Passer plus de tests'],
                'priorite' => 'haute'
            ];
        }

        return [
            'recommandations' => $recommendations,
            'message_encouragement' => 'Continue comme ça ! 💪'
        ];
    }
}