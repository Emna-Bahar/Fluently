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
     */
    public function logEvent(
        TestPassage $passage,
        string $eventType,
        array $details = []
    ): void {
        $this->logger->warning('🔒 EXAM EVENT', [
            'passage_id' => $passage->getId(),
            'user_id' => $passage->getUser()->getId(),
            'user_email' => $passage->getUser()->getEmail(),
            'test_id' => $passage->getTest()->getId(),
            'test_titre' => $passage->getTest()->getTitre(),
            'event_type' => $eventType,
            'timestamp' => (new \DateTime())->format('Y-m-d H:i:s'),
            'details' => $details
        ]);

        // ✅ AUSSI : Stocker dans la session pour affichage immédiat
        $this->addEventToSession($passage->getId(), $eventType, $details);
    }

    /**
     * Stocke les événements dans la session (temporaire)
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
     */
    public function getSessionEvents(int $passageId): array
    {
        $session = $this->requestStack->getSession();
        return $session->get('exam_events_' . $passageId, []);
    }

    /**
     * Analyse les comportements suspects
     */
    public function analyzeSuspiciousActivity(TestPassage $passage): array
    {
        $events = $this->getSessionEvents($passage->getId());

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
        if ($passage->getTempsPasse()) {
            $tempsPasse = $passage->getTempsPasse();
            $tempsAttendu = ($passage->getTest()->getDureeEstimee() ?: 15) * 60;
            
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