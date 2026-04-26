<?php

namespace App\Controller;

use App\Service\GameService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/jeu')]
class GameController extends AbstractController
{
    #[Route('/generer', name: 'app_jeu_generer', methods: ['POST'])]
    public function generer(Request $request, GameService $gameService): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $type = $data['type'] ?? 'scrambled';
        $niveau = $data['niveau'] ?? 'A1';
        $langue = $data['langue'] ?? 'anglais';
        $theme = $data['theme'] ?? null; 
        $jeu = match($type) {
            'scrambled' => $gameService->generateScrambledSentence($niveau, $langue, $theme),
            'oddoneout' => $gameService->generateOddOneOut($niveau, $langue),
            default => $gameService->generateScrambledSentence($niveau, $langue, $theme)
        };
        $session = $request->getSession();
        $session->set('jeu_actuel', $jeu);  
        return $this->json($jeu);
    }
    
    #[Route('/verifier', name: 'app_jeu_verifier', methods: ['POST'])]
    public function verifier(Request $request, GameService $gameService): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $type = $data['type'];
        $reponse = $data['reponse'];
        
        $session = $request->getSession();
        $jeuActuel = $session->get('jeu_actuel');
        
        $resultat = match($type) {
            'scrambled' => $gameService->checkScrambledAnswer($reponse, $jeuActuel['original']),
            default => ['correct' => false, 'message' => 'Type de jeu non supporté']
        };

        if ($resultat['correct']) {
            $this->addPoints($request, 10);
        }
        
        return $this->json($resultat);
    }
    
    private function addPoints(Request $request, int $points): void
    {
        $session = $request->getSession();
        $totalPoints = $session->get('points_jeux', 0) + $points;
        $session->set('points_jeux', $totalPoints);
    }
}