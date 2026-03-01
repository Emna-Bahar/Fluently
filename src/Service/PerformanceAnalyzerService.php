<?php

namespace App\Service;

use App\Entity\User;
use App\Entity\Langue;
use App\Repository\TestPassageRepository;
use Doctrine\ORM\EntityManagerInterface;

class PerformanceAnalyzerService
{
    public function __construct(
        private TestPassageRepository $testPassageRepository,
        private AITextCorrectionService $aiService
    ) {}

    /**
     * Analyse complète des performances d'un utilisateur
     * @return array{competences: array<string, array{score: float, count: int, niveau: string}>, stats_globales: array<string, mixed>, progression: array<int, array{date: string, score: float, test: string}>, has_data: bool}
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
                'progression' => [],
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
     * @param array<int, \App\Entity\TestPassage> $passages
     * @return array<string, array{score: float, count: int, niveau: string}>
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
                if (!$test) {
                    continue;
                }
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
     * @param array<int, \App\Entity\TestPassage> $passages
     * @return array<string, mixed>
     */
    private function calculateGlobalStats(array $passages): array
    {
        $totalTests = count($passages);
        $scores = array_map(fn($p) => $p->getResultat() ?? 0.0, $passages);
        $scoreMoyen = $totalTests > 0 ? array_sum($scores) / $totalTests : 0;
        
        $tempsTotal = array_sum(array_map(fn($p) => $p->getTempsPasse() ?? 0, $passages));
        
        $meilleurScore = !empty($scores) ? max($scores) : 0.0;
        $dernierTest = end($passages);
        $dernierScore = 0.0;
        if ($dernierTest !== false) {
            $dernierScore = $dernierTest->getResultat() ?? 0.0;  // ✅ Protection
        }
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
     * @param array<int, \App\Entity\TestPassage> $passages
     * @return array<int, array{date: string, score: float, test: string}>
     */
    private function calculateProgression(array $passages): array
    {
        $progression = [];
        
        foreach ($passages as $passage) {
            $dateFin = $passage->getDateFin();
            $test = $passage->getTest();
            
            // ✅ PROTECTIONS
            if (!$dateFin || !$test) {
                continue;
            }
            $titre = $test->getTitre();
        
            // ✅ SKIP si le titre est null
            if ($titre === null) {
                continue;
            }
            
            $date = $dateFin->format('Y-m-d');
            $resultat = $passage->getResultat() ?? 0.0;
            
            $progression[] = [
                'date' => $date,
                'score' => round($resultat, 1),
                'test' => $titre
            ];
        }

        return $progression;
    }

    /**
     * Détermine la tendance de progression
     * @param array<int, \App\Entity\TestPassage> $passages
     */
    private function calculateProgressionTrend(array $passages): string
    {
        if (count($passages) < 2) {
            return 'stable';
        }

        $scores = array_map(fn($p) => $p->getResultat() ?? 0.0, $passages);
        $halfCount = (int) ceil(count($scores) / 2);
        $firstHalf = array_slice($scores, 0, $halfCount);
        $secondHalf = array_slice($scores, $halfCount);

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
     * @param array<string, mixed> $analysis
     * @return array{recommandations: array<mixed>, message_encouragement: string}
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

    /**
     * @param array<string, array{score: float, count: int, niveau: string}> $competences
     * @param array<string, mixed> $stats
     */
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

    /**
     * @param array<string, array{score: float, count: int, niveau: string}> $competences
     * @return array{recommandations: array<mixed>, message_encouragement: string}
     */
    private function generateDefaultRecommendations(array $competences): array
    {
        $recommendations = [];

        $minScore = 100.0;
        $weakestComp = null;
        
        foreach ($competences as $comp => $data) {
            if ($data['score'] < $minScore && $data['count'] > 0) {
                $minScore = $data['score'];
                $weakestComp = $comp;
            }
        }

        if ($weakestComp !== null) {  // ✅ Enlever le is_string()
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