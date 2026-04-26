<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class GameService
{
    private DialogueService $mistralService;      
    
    public function __construct(DialogueService $mistralService)
    {
        $this->mistralService = $mistralService;
    }

    /**
     * 
     * @param string $niveau Niveau de difficulté
     * @param string $langue Langue de la phrase
     * @param string|null $theme Thème optionnel
     * @return array{
     *     type: 'scrambled',
     *     original: string,
     *     scrambled: string[],
     *     wordCount: int,
     *     langue: string,
     *     niveau: string,
     *     hint: string
     * }
     */
    public function generateScrambledSentence(string $niveau, string $langue, ?string $theme = null): array
    {
        $themeName = $theme ?? ($langue === 'anglais' ? 'general' : 'général');
        
        if ($langue === 'anglais') {
            $prompt = "Generate ONE simple sentence in English at {$niveau} level about '{$themeName}'. The sentence must have between 4 and 7 words. Answer ONLY with the sentence, no additional text.";
        } else {
            $prompt = "Génère UNE SEULE phrase simple en français de niveau {$niveau} sur le thème '{$themeName}'. La phrase doit avoir entre 4 et 7 mots. Réponds UNIQUEMENT avec la phrase, sans texte supplémentaire.";
        }
        
        $correctSentence = $this->mistralService->callMistral($prompt);
        
        $correctSentence = trim($correctSentence ?? '');
        $correctSentence = preg_replace('/[^\w\s\']/u', '', $correctSentence) ?? '';
        
        $words = explode(' ', $correctSentence);
        $words = array_filter($words, fn($w) => !empty($w));
        
        $scrambledWords = $words;
        shuffle($scrambledWords);
        
        return [
            'type' => 'scrambled',
            'original' => $correctSentence,
            'scrambled' => $scrambledWords,  
            'wordCount' => count($words),
            'langue' => $langue,
            'niveau' => $niveau,
            'hint' => $this->generateHint($correctSentence, $langue)
        ];
    }
 
    /**
     * 
     * @param string $sentence La phrase originale
     * @param string $langue Langue de l'indice
     * @return string Indice
     */
    private function generateHint(string $sentence, string $langue): string
    {
        $words = explode(' ', $sentence);
        $firstWord = $words[0] ?? '';
        $lastWord = $words[count($words) - 1] ?? '';
        
        if ($langue === 'anglais') {
            return "The sentence starts with '{$firstWord}' and ends with '{$lastWord}'";
        }
        return "La phrase commence par '{$firstWord}' et se termine par '{$lastWord}'";
    }

    /**
     * 
     * @param string $niveau Niveau de difficulté
     * @param string $langue Langue du jeu
     * @return array{
     *     type: 'oddoneout',
     *     category: string,
     *     words: string[],
     *     intruder: string,
     *     explanation: string,
     *     langue: string,
     *     niveau: string
     * }
     */
    public function generateOddOneOut(string $niveau, string $langue): array
    {
        error_log("generateOddOneOut - Niveau: $niveau, Langue: $langue");

        $categories = [
            'A1' => [
                'fr' => [
                    'nourriture' => ['pizza', 'hamburger', 'salade', 'chaise'],
                    'animaux' => ['chien', 'chat', 'souris', 'voiture'],
                    'couleurs' => ['rouge', 'bleu', 'vert', 'maison'],
                    'vêtements' => ['chemise', 'pantalon', 'chaussure', 'ordinateur'],
                    'famille' => ['père', 'mère', 'frère', 'livre']
                ],
                'en' => [
                    'food' => ['pizza', 'hamburger', 'salad', 'chair'],
                    'animals' => ['dog', 'cat', 'mouse', 'car'],
                    'colors' => ['red', 'blue', 'green', 'house'],
                    'clothes' => ['shirt', 'pants', 'shoes', 'computer'],
                    'family' => ['father', 'mother', 'brother', 'book']
                ]
            ],
            'A2' => [
                'fr' => [
                    'professions' => ['médecin', 'professeur', 'ingénieur', 'stylo'],
                    'transports' => ['voiture', 'vélo', 'train', 'pomme'],
                    'sports' => ['football', 'tennis', 'natation', 'cuisine'],
                    'meubles' => ['table', 'chaise', 'lit', 'fenêtre']
                ],
                'en' => [
                    'professions' => ['doctor', 'teacher', 'engineer', 'pen'],
                    'transport' => ['car', 'bike', 'train', 'apple'],
                    'sports' => ['soccer', 'tennis', 'swimming', 'kitchen'],
                    'furniture' => ['table', 'chair', 'bed', 'window']
                ]
            ],
            'B1' => [
                'fr' => [
                    'émotions' => ['joie', 'tristesse', 'colère', 'fenêtre'],
                    'météo' => ['pluie', 'neige', 'soleil', 'ordinateur'],
                    'voyage' => ['passeport', 'valise', 'billet', 'réfrigérateur']
                ],
                'en' => [
                    'emotions' => ['joy', 'sadness', 'anger', 'window'],
                    'weather' => ['rain', 'snow', 'sun', 'computer'],
                    'travel' => ['passport', 'suitcase', 'ticket', 'refrigerator']
                ]
            ]
        ];
        
        $langueCode = $langue === 'anglais' ? 'en' : 'fr';
        $levelCategories = $categories[$niveau][$langueCode] ?? $categories['A1'][$langueCode];
        
        $category = (string) array_rand($levelCategories);
        $words = $levelCategories[$category];
        
        $intruder = $words[count($words) - 1];
        
        shuffle($words);
        
        if ($langue === 'anglais') {
            $explanation = "Find the word that doesn't belong to the category '{$category}'";
        } else {
            $explanation = "Trouve le mot qui n'appartient pas à la catégorie '{$category}'";
        }
        
        error_log("Catégorie choisie: $category, Intrus: $intruder");
        
        return [
            'type' => 'oddoneout',
            'category' => $category,
            'words' => $words,  
            'intruder' => $intruder,
            'explanation' => $explanation,
            'langue' => $langue,
            'niveau' => $niveau
        ];
    }
    
    /**
     * 
     * @param string $niveau Niveau de difficulté
     * @param string $langue Langue du jeu
     * @return array{
     *     type: 'crossword',
     *     words: array<array{mot: string, indice: string, lettres: int}>,
     *     langue: string,
     *     niveau: string
     * }
     */
    public function generateSimpleCrossword(string $niveau, string $langue): array
    {
        $words = [
            'A1' => [
                'fr' => [
                    ['mot' => 'CHAT', 'indice' => 'Animal qui miaule', 'lettres' => 4],
                    ['mot' => 'CHIEN', 'indice' => 'Animal qui aboie', 'lettres' => 5],
                    ['mot' => 'SOLEIL', 'indice' => 'Il brille dans le ciel', 'lettres' => 6],
                    ['mot' => 'PLUIE', 'indice' => 'Eau qui tombe du ciel', 'lettres' => 5],
                    ['mot' => 'MAISON', 'indice' => 'Où on habite', 'lettres' => 6],
                    ['mot' => 'ECOLE', 'indice' => 'Où on apprend', 'lettres' => 5],
                    ['mot' => 'PIZZA', 'indice' => 'Plat italien rond', 'lettres' => 5],
                    ['mot' => 'LIVRE', 'indice' => 'On y lit des histoires', 'lettres' => 5]
                ],
                'en' => [
                    ['mot' => 'CAT', 'indice' => 'Animal that meows', 'lettres' => 3],
                    ['mot' => 'DOG', 'indice' => 'Animal that barks', 'lettres' => 3],
                    ['mot' => 'SUN', 'indice' => 'It shines in the sky', 'lettres' => 3],
                    ['mot' => 'RAIN', 'indice' => 'Water falling from sky', 'lettres' => 4],
                    ['mot' => 'HOUSE', 'indice' => 'Where you live', 'lettres' => 5],
                    ['mot' => 'SCHOOL', 'indice' => 'Where you learn', 'lettres' => 6],
                    ['mot' => 'PIZZA', 'indice' => 'Round Italian dish', 'lettres' => 5],
                    ['mot' => 'BOOK', 'indice' => 'You read stories in it', 'lettres' => 4]
                ]
            ],
            'A2' => [
                'fr' => [
                    ['mot' => 'MÉDECIN', 'indice' => 'Soigne les malades', 'lettres' => 7],
                    ['mot' => 'PROFESSEUR', 'indice' => 'Enseigne à l\'école', 'lettres' => 10],
                    ['mot' => 'VOITURE', 'indice' => 'Moyen de transport', 'lettres' => 7],
                    ['mot' => 'JARDIN', 'indice' => 'Où poussent les fleurs', 'lettres' => 6]
                ],
                'en' => [
                    ['mot' => 'DOCTOR', 'indice' => 'Heals sick people', 'lettres' => 6],
                    ['mot' => 'TEACHER', 'indice' => 'Teaches at school', 'lettres' => 7],
                    ['mot' => 'CAR', 'indice' => 'Means of transport', 'lettres' => 3],
                    ['mot' => 'GARDEN', 'indice' => 'Where flowers grow', 'lettres' => 6]
                ]
            ]
        ];
        
        $langueCode = $langue === 'anglais' ? 'en' : 'fr';
        $levelWords = $words[$niveau][$langueCode] ?? $words['A1'][$langueCode];
        
        $selectedKeys = array_rand($levelWords, min(3, count($levelWords)));
        $selectedWords = [];
        
        if (!is_array($selectedKeys)) {
            $selectedKeys = [$selectedKeys];
        }
        
        foreach ($selectedKeys as $key) {
            $selectedWords[] = $levelWords[$key];
        }
        
        return [
            'type' => 'crossword',
            'words' => $selectedWords,
            'langue' => $langue,
            'niveau' => $niveau
        ];
    }
   
    /**
     * 
     * @param string $userAnswer Réponse de l'utilisateur
     * @param string $correctAnswer Réponse correcte
     * @return array{
     *     correct: bool,
     *     message: string,
     *     score: int,
     *     correctAnswer?: string
     * }
     */
    public function checkScrambledAnswer(string $userAnswer, string $correctAnswer): array
    {
        $userAnswer = trim(strtolower($userAnswer ?? ''));
        $correctAnswer = trim(strtolower($correctAnswer ?? ''));
        
        $userAnswer = preg_replace('/[^\w\s\']/u', '', $userAnswer) ?? '';
        $correctAnswer = preg_replace('/[^\w\s\']/u', '', $correctAnswer) ?? '';
        
        if ($userAnswer === $correctAnswer) {
            return [
                'correct' => true,
                'message' => '🎉 Parfait !',
                'score' => 100
            ];
        }
        
        $userWords = explode(' ', $userAnswer);
        $correctWords = explode(' ', $correctAnswer);
        
        $correctCount = 0;
        $wrongPositions = [];
        
        foreach ($userWords as $index => $word) {
            if (isset($correctWords[$index]) && $word === $correctWords[$index]) {
                $correctCount++;
            } else {
                $wrongPositions[] = $index + 1;
            }
        }
        
        $score = count($correctWords) > 0 ? ($correctCount / count($correctWords)) * 100 : 0;
        
        return [
            'correct' => false,
            'message' => "Position des erreurs : " . implode(', ', $wrongPositions),
            'score' => (int) round($score),
            'correctAnswer' => $correctAnswer
        ];
    }
}