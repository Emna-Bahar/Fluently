<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class DictionaryService
{
    private $httpClient;

    public function __construct(HttpClientInterface $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    /**
     * Récupère la définition d'un mot via l'API Wiktionary
     * @param string $word Le mot à rechercher
     * @param string $fromLang Langue source (non utilisé pour Wiktionary)
     * @param string $toLang Langue cible (non utilisé pour Wiktionary)
     */
    public function getDefinition(string $word, string $fromLang = 'fr', string $toLang = 'en'): array
    {
        // URL de l'API Wiktionary (Wiktionnaire français)
        $url = sprintf(
            'https://fr.wiktionary.org/api/rest_v1/page/definition/%s',
            urlencode($word)
        );

        try {
            $response = $this->httpClient->request('GET', $url);
            $data = $response->toArray();

            if (empty($data)) {
                return ['error' => 'Mot non trouvé'];
            }

            return $this->formatWiktionaryData($data, $word);

        } catch (\Exception $e) {
            // Si l'API française échoue, essayer l'API anglaise
            return $this->tryEnglishWiktionary($word);
        }
    }

    /**
     * Essai avec l'API Wiktionary anglaise
     */
    private function tryEnglishWiktionary(string $word): array
    {
        try {
            $url = sprintf(
                'https://en.wiktionary.org/api/rest_v1/page/definition/%s',
                urlencode($word)
            );
            
            $response = $this->httpClient->request('GET', $url);
            $data = $response->toArray();

            if (empty($data)) {
                return ['error' => 'Mot non trouvé'];
            }

            return $this->formatWiktionaryData($data, $word);

        } catch (\Exception $e) {
            return ['error' => 'Mot non trouvé dans les dictionnaires'];
        }
    }

    /**
     * Formate les données de Wiktionary
     */
    private function formatWiktionaryData(array $data, string $word): array
    {
        $result = [
            'word' => $word,
            'functional_label' => '',
            'definitions' => [],
            'translations' => [],
            'examples' => []
        ];

        // Parcourir les différentes langues dans la réponse
        foreach ($data as $langCode => $langData) {
            foreach ($langData as $entry) {
                if (isset($entry['partOfSpeech'])) {
                    $result['functional_label'] = $entry['partOfSpeech'];
                }
                
                if (isset($entry['definitions']) && is_array($entry['definitions'])) {
                    foreach ($entry['definitions'] as $definition) {
                        if (isset($definition['definition'])) {
                            // Nettoyer la définition (enlever les balises HTML)
                            $cleanDef = strip_tags($definition['definition']);
                            $result['definitions'][] = $cleanDef;
                        }
                        
                        // Récupérer les exemples
                        if (isset($definition['parsedExamples']) && is_array($definition['parsedExamples'])) {
                            foreach ($definition['parsedExamples'] as $example) {
                                if (isset($example['example'])) {
                                    $result['examples'][] = strip_tags($example['example']);
                                }
                            }
                        }
                    }
                }
            }
        }

        // Limiter le nombre de définitions pour l'affichage
        $result['definitions'] = array_slice($result['definitions'], 0, 5);
        $result['examples'] = array_slice($result['examples'], 0, 3);

        return $result;
    }

    /**
     * Liste des codes de langue supportés
     */
    public function getSupportedLanguages(): array
    {
        return [
            'fr' => 'Français',
            'en' => 'Anglais',
            'es' => 'Espagnol',
            'de' => 'Allemand',
            'it' => 'Italien',
            'pt' => 'Portugais',
            'ru' => 'Russe',
            'zh' => 'Chinois',
            'ja' => 'Japonais',
            'ar' => 'Arabe',
        ];
    }
}