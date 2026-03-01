<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;
use Psr\Log\LoggerInterface;

class AITextCorrectionService
{
    public function __construct(
        private HttpClientInterface $httpClient,
        private string $groqApiKey, // ← on change juste le nom de la variable
        private LoggerInterface $logger
    ) {}

    /**
     * Corrige un texte libre avec DeepSeek (gratuit et performant)
     */
    /**
    * @return array{score: int, grammaire: int, vocabulaire: int, coherence: int, erreurs: array<string>, corrections: array<string>, commentaire: string}
     */
    public function correctFreeText(
        string $studentText,
        string $expectedTheme,
        string $langue,
        string $niveau = 'B1'
    ): array {
        $prompt = $this->buildStrictPrompt($studentText, $expectedTheme, $langue, $niveau);

        $this->logger->info('Appel DeepSeek pour correction', [
            'langue' => $langue,
            'niveau' => $niveau,
            'texte_longueur' => strlen($studentText)
        ]);

        try {
            $response = $this->httpClient->request('POST', 'https://api.groq.com/openai/v1/chat/completions', [
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->groqApiKey,
                    'Content-Type' => 'application/json',
                ],
                'json' => [
                    'model' => 'llama-3.3-70b-versatile',  // ou 'deepseek-reasoner' si tu veux plus de réflexion
                    'messages' => [
                        ['role' => 'system', 'content' => 'Tu es un correcteur linguistique strict. Réponds UNIQUEMENT avec un JSON valide, sans aucun texte avant ou après, sans markdown, sans explication. Commence directement par { et termine par }.'],
                        ['role' => 'user', 'content' => $prompt],
                    ],
                    'temperature' => 0.1,
                    'max_tokens' => 1500,
                ],
            ]);

            $status = $response->getStatusCode();
            $this->logger->info('Réponse DeepSeek', ['status' => $status]);

            if ($status !== 200) {
                $error = $response->getContent(false);
                throw new \RuntimeException('DeepSeek erreur : ' . $error);
            }

            $data = $response->toArray();
            $content = $data['choices'][0]['message']['content'] ?? '';

            $this->logger->debug('Réponse brute DeepSeek', ['content' => $content]);

            $content = $this->cleanJsonResponse($content);

            $result = json_decode($content, true);

            if (!$result || json_last_error() !== JSON_ERROR_NONE) {
                $this->logger->error('JSON invalide DeepSeek', [
                    'error' => json_last_error_msg(),
                    'raw' => $content
                ]);
                throw new \RuntimeException('JSON invalide');
            }

            $this->logger->info('Correction DeepSeek réussie', ['score' => $result['score'] ?? 0]);

            return $result;

        } catch (\Exception $e) {
            $this->logger->error('Erreur DeepSeek correction', ['message' => $e->getMessage()]);
            return [
                'score' => 50,
                'grammaire' => 50,
                'vocabulaire' => 50,
                'coherence' => 50,
                'erreurs' => ['Erreur correction automatique'],
                'corrections' => [],
                'commentaire' => 'Correction IA temporairement indisponible.'
            ];
        }
    }

    private function buildStrictPrompt(
        string $studentText,
        string $expectedTheme,
        string $langue,
        string $niveau
    ): string {
        return <<<PROMPT
Tu es un correcteur linguistique strict. Réponds **EXCLUSIVEMENT** avec un JSON valide. Pas de texte avant, pas de texte après, pas de markdown, pas de ```json, pas d'explication.

Texte étudiant (niveau $niveau, thème "$expectedTheme") :
"$studentText"

Retourne exactement ce format :

{
  "score": nombre 0-100,
  "grammaire": 0-100,
  "vocabulaire": 0-100,
  "coherence": 0-100,
  "erreurs": ["erreur 1", "erreur 2"],
  "corrections": ["correction 1", "correction 2"],
  "commentaire": "texte court en $langue"
}

Commence par { et termine par }. Rien d'autre.
PROMPT;
    }

    private function cleanJsonResponse(string $content): string
    {
        $content = trim($content);
        
        $cleaned = preg_replace('/^```json\s*/i', '', $content);
        $content = $cleaned !== null ? $cleaned : $content;
        
        $cleaned = preg_replace('/\s*```$/', '', $content);
        $content = $cleaned !== null ? $cleaned : $content;
        
        $cleaned = preg_replace('/^```/', '', $content);
        $content = $cleaned !== null ? $cleaned : $content;

        if (preg_match('/(\{[\s\S]*\})/', $content, $matches)) {
            $content = $matches[1];
        }

        return trim($content);
    }
    /**
     * Génère des recommandations pédagogiques personnalisées
     */
    /**
    * @return array{recommandations: array<mixed>, message_encouragement: string}
     */
    public function generateRecommendations(string $prompt): array
    {
        $this->logger->info('🎯 Génération de recommandations IA');

        try {
            $response = $this->httpClient->request('POST', 'https://api.groq.com/openai/v1/chat/completions', [
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->groqApiKey,
                    'Content-Type' => 'application/json',
                ],
                'json' => [
                    'model' => 'llama-3.3-70b-versatile',
                    'messages' => [
                        ['role' => 'system', 'content' => 'Tu es un conseiller pédagogique expert. Réponds UNIQUEMENT en JSON valide.'],
                        ['role' => 'user', 'content' => $prompt],
                    ],
                    'temperature' => 0.7,
                    'max_tokens' => 1500,
                ],
            ]);

            $data = $response->toArray();
            $content = $data['choices'][0]['message']['content'] ?? '';
            
            $this->logger->debug('Réponse IA recommandations', ['content' => $content]);

            $content = $this->cleanJsonResponse($content);
            $result = json_decode($content, true);

            if (!$result || json_last_error() !== JSON_ERROR_NONE) {
                throw new \RuntimeException('JSON invalide');
            }

            $this->logger->info('✅ Recommandations générées', ['count' => count($result['recommandations'] ?? [])]);

            return $result;

        } catch (\Exception $e) {
            $this->logger->error('Erreur génération recommandations', ['message' => $e->getMessage()]);
            
            return [
                'recommandations' => [
                    [
                        'titre' => 'Continue à pratiquer',
                        'description' => 'La pratique régulière est la clé',
                        'actions' => ['Passer plus de tests', 'Réviser les erreurs'],
                        'priorite' => 'haute'
                    ]
                ],
                'message_encouragement' => 'Continue comme ça ! 💪'
            ];
        }
    }
}