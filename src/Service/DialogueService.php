<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class DialogueService
{
    private $httpClient;
    private $apiKey;

    public function __construct(HttpClientInterface $httpClient)
    {
        $this->httpClient = $httpClient;
        $this->apiKey = $_ENV['MISTRAL_API_KEY'];
    }

    /**
     * Génère un dialogue basé sur un thème et un niveau
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

    /**
     * Appelle l'API Mistral
     */
    public function callMistral(string $prompt): string
    {
        $url = "https://api.mistral.ai/v1/chat/completions";
        
        $data = [
            'model' => 'mistral-tiny',
            'messages' => [
                ['role' => 'user', 'content' => $prompt]
            ],
            'temperature' => 0.7,
            'max_tokens' => 1000
        ];
        
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Authorization: Bearer ' . trim($this->apiKey),
            'Content-Type: application/json'
        ]);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        
        $response = curl_exec($ch);
        curl_close($ch);
        
        $result = json_decode($response, true);
        
        return $result['choices'][0]['message']['content'] ?? "Erreur de génération";
    }

    /**
     * Parse le dialogue en tableau structuré
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
        
        // Si le parsing a échoué, créer un dialogue par défaut
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