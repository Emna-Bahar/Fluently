<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;

class DialogueService
{
    private HttpClientInterface $httpClient;
    private string $apiKey;

    public function __construct(HttpClientInterface $httpClient)
    {
        $this->httpClient = $httpClient;
        $this->apiKey = (string) ($_ENV['MISTRAL_API_KEY'] ?? '');
    }

    /**
     * 
     * @param string $theme Thème du dialogue
     * @param string $niveau Niveau (A1, A2, B1, etc.)
     * @param string $langue Langue du dialogue
     * @return array<array{role: string, texte: string, ordre: int}> Dialogue généré
     */
    public function genererDialogue(string $theme, string $niveau, string $langue): array
    {
        $prompt = "Génère un dialogue de niveau {$niveau} en {$langue} sur le thème : '{$theme}'.

Le dialogue doit avoir 2 personnages : un professeur (IA) et un étudiant.
Format de réponse EXIGÉ :

IA: [première phrase du professeur]
Étudiant: [réponse de l'étudiant]
IA: [deuxième phrase du professeur]
Étudiant: [deuxième réponse]
IA: [troisième phrase]
Étudiant: [troisième réponse]

Important :
- 6 échanges au total (3 par personne)
- Phrases simples et adaptées au niveau {$niveau}
- Vocabulaire lié au thème '{$theme}'
- Ne mets aucun texte supplémentaire, seulement les répliques au format indiqué";

        $response = $this->callMistral($prompt);
        
        return $this->parserDialogue($response);
    }

    public function callMistral(string $prompt): string
    {
        try {
            $response = $this->httpClient->request('POST', 'https://api.mistral.ai/v1/chat/completions', [
                'headers' => [
                    'Authorization' => 'Bearer ' . trim($this->apiKey),
                    'Content-Type' => 'application/json',
                ],
                'json' => [
                    'model' => 'mistral-tiny',
                    'messages' => [
                        ['role' => 'user', 'content' => $prompt]
                    ],
                    'temperature' => 0.7,
                    'max_tokens' => 1000,
                ],
                'timeout' => 30,
            ]);

            $content = $response->getContent();
            $result = json_decode($content, true);

            if (!is_array($result) || !isset($result['choices'][0]['message']['content'])) {
                return "Erreur de génération";
            }

            return $result['choices'][0]['message']['content'];
        } catch (\Exception $e) {
            return "Erreur de génération";
        }
    }

    /**
     * 
     * @param string $texte Texte brut généré par l'API
     * @return array<array{role: string, texte: string, ordre: int}> Dialogue parsé
     */
    private function parserDialogue(string $texte): array
    {
        $lignes = explode("\n", $texte);
        $dialogue = [];
        $index = 0;
        
        foreach ($lignes as $ligne) {
            $ligne = trim($ligne);
            
            if (str_starts_with($ligne, 'IA:')) {
                $dialogue[] = [
                    'role' => 'ia',
                    'texte' => trim(substr($ligne, 3)),
                    'ordre' => $index++
                ];
            } elseif (str_starts_with($ligne, 'Étudiant:')) {
                $dialogue[] = [
                    'role' => 'etudiant',
                    'texte' => trim(substr($ligne, 9)),
                    'ordre' => $index++
                ];
            }
        }

        if (empty($dialogue)) {
            $dialogue = [
                ['role' => 'ia', 'texte' => "Bonjour! Comment allez-vous aujourd'hui?", 'ordre' => 0],
                ['role' => 'etudiant', 'texte' => "Je vais bien, merci! Et vous?", 'ordre' => 1],
                ['role' => 'ia', 'texte' => "Très bien! Quel est votre nom?", 'ordre' => 2],
                ['role' => 'etudiant', 'texte' => "Je m'appelle [votre nom].", 'ordre' => 3],
                ['role' => 'ia', 'texte' => "Enchanté! D'où venez-vous?", 'ordre' => 4],
                ['role' => 'etudiant', 'texte' => "Je viens de [votre ville].", 'ordre' => 5],
            ];
        }
        
        return $dialogue;
    }
}