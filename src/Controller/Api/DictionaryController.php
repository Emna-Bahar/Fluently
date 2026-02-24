<?php

namespace App\Controller\Api;

use App\Service\DictionaryService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/api/dictionary')]
class DictionaryController extends AbstractController
{
    #[Route('/search/{word}', methods: ['GET'])]
    public function search(
        string $word, 
        Request $request,
        DictionaryService $dictionary
    ): JsonResponse {
        // Récupérer les paramètres de langue (pour compatibilité)
        $fromLang = $request->query->get('from', 'fr');
        $toLang = $request->query->get('to', 'en');
        
        $result = $dictionary->getDefinition($word, $fromLang, $toLang);
        return $this->json($result);
    }

    #[Route('/languages', methods: ['GET'])]
    public function languages(DictionaryService $dictionary): JsonResponse
    {
        return $this->json($dictionary->getSupportedLanguages());
    }
}