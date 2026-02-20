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
    
    public function calculateTestScore(Test $test, Request $request): array
    {
        $scoreTotal = 0;
        $details = [];
        
        foreach ($test->getQuestions() as $question) {
            $questionScore = 0;
            
            if ($question->getType() === 'oral') {
                // ✅ Récupérer la transcription envoyée par le frontend
                $spokenText = $request->request->get('oral_' . $question->getId());
                $expectedText = $question->getEnonce();
                
                // ✅ Utiliser le service PHP pour évaluer
                $status = $this->speechService->evaluateAnswer($spokenText ?? '', $expectedText);
                $questionScore = $this->speechService->calculateScore($status, $question->getScoreMax());
                
                $details[] = [
                    'question_id' => $question->getId(),
                    'type' => 'oral',
                    'spoken' => $spokenText,
                    'expected' => $expectedText,
                    'status' => $status,
                    'score' => $questionScore,
                    'max_score' => $question->getScoreMax()
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