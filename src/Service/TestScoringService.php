<?php

namespace App\Service;

use App\Entity\Test;
use App\Repository\ReponseRepository;
use Symfony\Component\HttpFoundation\Request;

class TestScoringService
{
    public function __construct(
        private ReponseRepository $reponseRepository,
        private SpeechEvaluationService $speechService
    ) {}
    /**
     * @return array{total_score: float, max_score: int, percentage: float, details: array<int, mixed>}
     */
    public function calculateTestScore(Test $test, Request $request): array
    {
        $scoreTotal = 0;
        $details = [];
        
        foreach ($test->getQuestions() as $question) {
            $questionScore = 0;
            
            if ($question->getType() === 'oral') {
                // ✅ Récupérer la transcription envoyée par le frontend
                $spokenText = $request->request->get('oral_' . $question->getId());
                $spokenTextStr = is_string($spokenText) ? $spokenText : '';
                $expectedText = $question->getEnonce() ?? '';
                $status = $this->speechService->evaluateAnswer($spokenTextStr, $expectedText);
                
                $maxScore = $question->getScoreMax() ?? 0.0;
                $questionScore = $this->speechService->calculateScore($status, $maxScore);

                $details[] = [
                    'question_id' => $question->getId(),
                    'type' => 'oral',
                    'spoken' => $spokenText,
                    'expected' => $expectedText,
                    'status' => $status,
                    'score' => $questionScore,
                    'max_score' => $maxScore
                ];
            } else {
                // Question QCM
                $reponseId = $request->request->get('question_' . $question->getId());
                
                if ($reponseId) {
                    $reponse = $this->reponseRepository->find($reponseId);
                    if ($reponse && $reponse->isCorrect()) {
                        $questionScore = $question->getScoreMax();
                    }
                }
                
                $details[] = [
                    'question_id' => $question->getId(),
                    'type' => 'qcm',
                    'reponse_id' => $reponseId,
                    'score' => $questionScore,
                    'max_score' => $question->getScoreMax()
                ];
            }
            
            $scoreTotal += $questionScore;
        }
        
        return [
            'total_score' => $scoreTotal,
            'max_score' => $test->getScoreMax(),
            'percentage' => $test->getScoreMax() > 0 
                ? ($scoreTotal / $test->getScoreMax()) * 100 
                : 0,
            'details' => $details
        ];
    }
}