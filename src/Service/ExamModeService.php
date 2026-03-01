<?php
// src/Service/ExamModeService.php

namespace App\Service;

use App\Entity\Test;
use App\Entity\TestPassage;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\RequestStack;

class ExamModeService
{
    public function __construct(
        private LoggerInterface $logger,
        private RequestStack $requestStack
    ) {}

    /**
     * Détecte automatiquement si c'est un mode examen
     */
    public function isExamMode(Test $test): bool
    {
        $type = $test->getType();
        return $type === 'Test de niveau' || $type === 'Test de fin de niveau';
    }

    /**
     * Log un événement suspect dans les fichiers Symfony
     * @param array<string, mixed> $details
     */

    public function logEvent(
        TestPassage $passage,
        string $eventType,
        array $details = []
    ): void {
        $user = $passage->getUser();
        $test = $passage->getTest();
            
        if (!$user || !$test) {
            return;
        }
        
        $this->logger->warning('🔒 EXAM EVENT', [
            'passage_id' => $passage->getId(),
            'user_id' => $user->getId(),  // ✅ Utiliser la variable $user
            'user_email' => $user->getEmail(),  // ✅ Utiliser la variable $user
            'test_id' => $test->getId(),  // ✅ Utiliser la variable $test
            'test_titre' => $test->getTitre(),  // ✅ Utiliser la variable $test
            'event_type' => $eventType,
            'timestamp' => (new \DateTime())->format('Y-m-d H:i:s'),
            'details' => $details
        ]);

        // ✅ AUSSI : Stocker dans la session pour affichage immédiat
        $passageId = $passage->getId();
        if ($passageId !== null) {
            $this->addEventToSession($passageId, $eventType, $details);
        }
    }

    /**
     * Stocke les événements dans la session (temporaire)
     * @param array<string, mixed> $details
     */
    private function addEventToSession(int $passageId, string $eventType, array $details): void
    {
        $session = $this->requestStack->getSession();
        $key = 'exam_events_' . $passageId;
        
        $events = $session->get($key, []);
        $events[] = [
            'type' => $eventType,
            'timestamp' => time(),
            'details' => $details
        ];
        
        $session->set($key, $events);
    }

    /**
     * Récupère les événements depuis la session
     * @return array<int, array<string, mixed>>
     */
    public function getSessionEvents(int $passageId): array
    {
        $session = $this->requestStack->getSession();
        return $session->get('exam_events_' . $passageId, []);
    }

    /**
     * Analyse les comportements suspects
     * @return array{suspicion_score: int, flags: array<string>, events: array<string, int>, recommendation: string, color: string}
     */
    public function analyzeSuspiciousActivity(TestPassage $passage): array
    {
        $passageId = $passage->getId();
        if ($passageId === null) {
            return [
                'suspicion_score' => 0,
                'flags' => [],
                'events' => ['tab_switches' => 0, 'copy_pastes' => 0, 'page_blurs' => 0, 'total_events' => 0],
                'recommendation' => 'VALIDER',
                'color' => 'success'
            ];
        }
        $events = $this->getSessionEvents($passageId);

        $suspicionScore = 0;
        $flags = [];

        // Compteurs
        $tabSwitches = 0;
        $copyPastes = 0;
        $pageBlurs = 0;

        foreach ($events as $event) {
            switch ($event['type']) {
                case 'tab_switch':
                    $tabSwitches++;
                    if ($tabSwitches > 3) {
                        $suspicionScore += 20;
                        $flags[] = 'Changements d\'onglet fréquents (' . $tabSwitches . ' fois)';
                    }
                    break;
                
                case 'copy_paste':
                    $copyPastes++;
                    $suspicionScore += 30;
                    $flags[] = 'Copier-coller détecté (' . $copyPastes . ' tentatives)';
                    break;
                
                case 'page_blur':
                    $pageBlurs++;
                    if ($pageBlurs > 5) {
                        $suspicionScore += 15;
                        $flags[] = 'Perte de focus répétée (' . $pageBlurs . ' fois)';
                    }
                    break;
                
                case 'devtools_attempt':
                    $suspicionScore += 40;
                    $flags[] = 'Tentative d\'ouverture des outils développeur';
                    break;
            }
        }

        // Analyse du temps (si déjà soumis)
        $test = $passage->getTest();
        if ($passage->getTempsPasse() && $test) {
            $tempsPasse = $passage->getTempsPasse();
            $tempsAttendu = ($test->getDureeEstimee() ?: 15) * 60;
            
            if ($tempsPasse < $tempsAttendu * 0.3) {
                $suspicionScore += 25;
                $flags[] = 'Test terminé trop rapidement (' . round($tempsPasse / 60) . ' min)';
            }
        }

        return [
            'suspicion_score' => min($suspicionScore, 100),
            'flags' => $flags,
            'events' => [
                'tab_switches' => $tabSwitches,
                'copy_pastes' => $copyPastes,
                'page_blurs' => $pageBlurs,
                'total_events' => count($events)
            ],
            'recommendation' => $this->getRecommendation($suspicionScore),
            'color' => $this->getColor($suspicionScore)
        ];
    }

    private function getRecommendation(int $score): string
    {
        if ($score >= 70) {
            return 'INVALIDER - Comportement très suspect';
        } elseif ($score >= 40) {
            return 'SURVEILLER - Activité suspecte détectée';
        } else {
            return 'VALIDER - Comportement normal';
        }
    }

    private function getColor(int $score): string
    {
        if ($score >= 70) return 'danger';
        if ($score >= 40) return 'warning';
        return 'success';
    }

    /**
     * Nettoie les événements de la session après soumission
     */
    public function clearSessionEvents(int $passageId): void
    {
        $session = $this->requestStack->getSession();
        $session->remove('exam_events_' . $passageId);
    }
}