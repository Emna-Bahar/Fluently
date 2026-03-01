<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class DictionaryService
{
    private HttpClientInterface $httpClient;

    public function __construct(HttpClientInterface $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    /**
     * 
     * @param string $word Le mot à rechercher
     * @param string $fromLang Langue source (fr, en, etc.)
     * @param string $toLang Langue cible (non utilisé actuellement)
     * @return array{
     *     word?: string,
     *     definitions?: string[],
     *     examples?: string[],
     *     functional_label?: string,
     *     error: string
     * }|array{
     *     word: string,
     *     definitions: string[],
     *     examples: string[],
     *     functional_label?: string
     * } Résultat avec définitions ou message d'erreur
     */
    public function getDefinition(string $word, string $fromLang = 'fr', string $toLang = 'en'): array
    {
        try {
            $response = $this->httpClient->request('GET', 
                "https://{$fromLang}.wiktionary.org/api/rest_v1/page/definition/" . urlencode($word));
            $data = $response->toArray();
            
            if (empty($data)) {
                return $this->tryOtherLanguage($word, $fromLang === 'fr' ? 'en' : 'fr');
            }

            return $this->formatData($data, $word);
        } catch (\Exception $e) {
            return $this->tryOtherLanguage($word, $fromLang === 'fr' ? 'en' : 'fr');
        }
    }

    /**
     * 
     * @param string $word Le mot à rechercher
     * @param string $lang Langue alternative
     * @return array{
     *     word?: string,
     *     definitions?: string[],
     *     examples?: string[],
     *     functional_label?: string,
     *     error: string
     * }|array{
     *     word: string,
     *     definitions: string[],
     *     examples: string[],
     *     functional_label?: string
     * } Résultat ou message d'erreur
     */
    private function tryOtherLanguage(string $word, string $lang): array
    {
        try {
            $response = $this->httpClient->request('GET', 
                "https://{$lang}.wiktionary.org/api/rest_v1/page/definition/" . urlencode($word));
            return $this->formatData($response->toArray(), $word);
        } catch (\Exception $e) {
            return ['error' => 'Mot non trouvé'];
        }
    }

    /**
     * Formate les données brutes de l'API Wiktionary
     * 
     * @param array<mixed> $data Données brutes de l'API
     * @param string $word Mot recherché
     * @return array{
     *     word: string,
     *     definitions: string[],
     *     examples: string[],
     *     functional_label?: string
     * } Données formatées
     */
    private function formatData(array $data, string $word): array
    {
        $result = [
            'word' => $word,
            'definitions' => [],
            'examples' => []
        ];

        foreach ($data as $langData) {
            if (!is_array($langData)) {
                continue;
            }
            
            foreach ($langData as $entry) {
                if (!is_array($entry)) {
                    continue;
                }
                
                if (isset($entry['partOfSpeech']) && is_string($entry['partOfSpeech'])) {
                    $result['functional_label'] = $entry['partOfSpeech'];
                }
                
                if (isset($entry['definitions']) && is_array($entry['definitions'])) {
                    foreach ($entry['definitions'] as $def) {
                        if (!is_array($def)) {
                            continue;
                        }
                        
                        if (isset($def['definition']) && is_string($def['definition'])) {
                            $result['definitions'][] = strip_tags($def['definition']);
                        }
                        
                        if (isset($def['parsedExamples']) && is_array($def['parsedExamples'])) {
                            foreach ($def['parsedExamples'] as $ex) {
                                if (!is_array($ex)) {
                                    continue;
                                }
                                if (isset($ex['example']) && is_string($ex['example'])) {
                                    $result['examples'][] = strip_tags($ex['example']);
                                }
                            }
                        }
                    }
                }
            }
        }

        $result['definitions'] = array_slice($result['definitions'], 0, 5);
        $result['examples'] = array_slice($result['examples'], 0, 3);
        
        return $result;
    }

    /**
     * 
     * @return array<string, string> Tableau associatif code => nom
     */
    public function getSupportedLanguages(): array
    {
        return [
            'fr' => 'Français',
            'en' => 'Anglais',
            'es' => 'Espagnol',
            'de' => 'Allemand',
            'it' => 'Italien',
            'pt' => 'Portugais'
        ];
    }
}