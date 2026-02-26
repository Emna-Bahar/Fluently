<?php

namespace App\Service;

class SpeechEvaluationService
{
    /**
     * Calcule la similarité entre deux textes (algorithme Levenshtein)
     * Retourne un score entre 0 et 1 (1 = identique)
     */
    public function calculateSimilarity(string $spoken, string $expected): float
    {
        $spoken = $this->normalize($spoken);
        $expected = $this->normalize($expected);
        
        if ($spoken === $expected) {
            return 1.0;
        }
        
        $levenshteinDistance = levenshtein($spoken, $expected);
        $maxLength = max(strlen($spoken), strlen($expected));
        
        if ($maxLength === 0) {
            return 1.0;
        }
        
        return 1 - ($levenshteinDistance / $maxLength);
    }
    
    /**
     * Normalise un texte (minuscules, sans ponctuation, sans accents)
     */
    private function normalize(string $text): string
    {
        // Minuscules
        $text = mb_strtolower($text, 'UTF-8');
        
        // Supprimer ponctuation
        $text = preg_replace('/[^\p{L}\p{N}\s]/u', '', $text);
        
        // Supprimer espaces multiples
        $text = preg_replace('/\s+/', ' ', $text);
        
        return trim($text);
    }
    
    /**
     * Évalue une réponse orale et retourne le statut
     * @return string 'correct', 'partial', ou 'incorrect'
     */
    public function evaluateAnswer(string $spoken, string $expected): string
    {
        $similarity = $this->calculateSimilarity($spoken, $expected);
        
        if ($similarity >= 0.85) {
            return 'correct'; // 100% des points
        } elseif ($similarity >= 0.60) {
            return 'partial'; // 50% des points
        } else {
            return 'incorrect'; // 0 point
        }
    }
    
    /**
     * Calcule le score pour une réponse orale
     */
    public function calculateScore(string $status, float $maxScore): float
    {
        return match($status) {
            'correct' => $maxScore,
            'partial' => $maxScore * 0.5,
            'incorrect' => 0.0,
            default => 0.0,
        };
    }
}