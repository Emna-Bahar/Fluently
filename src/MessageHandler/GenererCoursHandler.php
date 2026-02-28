<?php

namespace App\MessageHandler;

use App\Entity\Cours;
use App\Entity\User;
use App\Message\GenererCoursMessage;
use App\Message\GenererCoursData;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;

#[AsMessageHandler]
class GenererCoursHandler
{
    private EntityManagerInterface $em;
    private string $mistralKey;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
        $this->mistralKey = (string) ($_ENV['MISTRAL_API_KEY'] ?? '');
    }

    public function __invoke(GenererCoursMessage $message): void  
    {
        $cours = $this->em->getRepository(Cours::class)->find($message->getCoursId());
        $user = $this->em->getRepository(User::class)->find($message->getUserId());
        
        if (!$cours || !$user) {
            return;
        }

        $niveau = $cours->getIdNiveau()?->getDifficulte() ?? '';
        $langue = $cours->getIdNiveau()?->getIdLangue()?->getNom() ?? '';
        
        /** @var GenererCoursData $data */
        $data = $message->getData();

        $prompt = "Génère un cours de {$langue} niveau {$niveau} avec:
        Vocabulaire: " . ($data->getVocabulaire() ?? 'Non spécifié') . "
        Grammaire: " . ($data->getGrammaire() ?? 'Non spécifié') . "
        Nouveaux mots: " . ($data->getNouveauxMots() ?? 'Non spécifié') . "

Format EXIGÉ:
# [Titre EN] - [Titre FR]
**Niveau {$niveau}**

## 1. INTRODUCTION
[Introduction bilingue]

## 2. VOCABULAIRE
| Mot (anglais) | Définition (français) | Exemple (anglais) |
|----------------|----------------------|-------------------|
| mot | définition | exemple |

## 3. GRAMMAIRE
[Explication FR avec exemples EN]

## 4. NOUVEAUX MOTS
- ***mot*** [prononciation] : traduction

## 5. EXERCICES
**Exercice 1:** [énoncé EN]
**Exercice 2:** [énoncé EN]

## 6. CORRIGÉS
**Exercice 1:** [réponses]
**Exercice 2:** [réponses]";

        $contenu = $this->callMistral($prompt);
        $pdfPath = $this->genererPDF($contenu, $cours, $langue, $niveau);
        $videos = $this->searchVideos($data->getThemesYoutube() ?? '');  

        $ressources = array_filter(explode("\n", $cours->getRessource() ?? ''));
        if ($pdfPath) {
            $ressources[] = $pdfPath;
        }
        foreach ($videos as $video) {
            if (!empty($video['url'])) {
                $ressources[] = $video['url'];
            }
        }

        $cours->setRessource(implode("\n", array_unique($ressources)));
        $this->em->flush();
    }

    private function callMistral(string $prompt): string
    {
        $ch = curl_init("https://api.mistral.ai/v1/chat/completions");
        
        $headers = [
            'Authorization: Bearer ' . trim($this->mistralKey),
            'Content-Type: application/json'
        ];
        
        $postFields = json_encode([
            'model' => 'mistral-tiny',
            'messages' => [
                ['role' => 'system', 'content' => 'Tu es un professeur de langue. Génère des cours structurés.'],
                ['role' => 'user', 'content' => $prompt]
            ],
            'temperature' => 0.7,
            'max_tokens' => 3000
        ]);
        
        if ($postFields === false) {
            return '';
        }
        
        curl_setopt_array($ch, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_HTTPHEADER => $headers,
            CURLOPT_POSTFIELDS => $postFields,
            CURLOPT_TIMEOUT => 60
        ]);
        
        $response = curl_exec($ch);
        $curlError = curl_error($ch);
        curl_close($ch);
        
        if ($response === false || $curlError) {
            return '';
        }
        if (!is_string($response)) {
            return '';
        }
        
        $result = json_decode($response, true);
        if (!is_array($result) || !isset($result['choices'][0]['message']['content'])) {
            return '';
        }
        
        return $result['choices'][0]['message']['content'];
    }

    /**
     * Recherche des vidéos YouTube
     * 
     * @return array<array{titre: string, url: string, embed: string, theme: string}>
     */
    private function searchVideos(string $themes): array
    {
        if (!$themes || !($key = $_ENV['YOUTUBE_API_KEY'] ?? '')) {
            return [];
        }
        
        $videos = [];
        foreach (array_filter(explode("\n", $themes)) as $theme) {
            usleep(500000);
            $url = "https://www.googleapis.com/youtube/v3/search?part=snippet&q=" 
                 . urlencode($theme . " cours") . "&type=video&maxResults=2&key={$key}";
            
            try {
                $content = file_get_contents($url);
                if ($content === false) {
                    continue;
                }
                
                /** @var array{items?: array<int, array{snippet: array{title: string}, id: array{videoId: string}}>} $data */
                $data = json_decode($content, true);
                
                if (!is_array($data) || !isset($data['items']) || !is_array($data['items'])) {
                    continue;
                }
                
                foreach ($data['items'] as $item) {
                    if (!is_array($item) || !isset($item['snippet']['title'], $item['id']['videoId'])) {
                        continue;
                    }
                    
                    $videos[] = [
                        'titre' => (string) $item['snippet']['title'],
                        'url' => "https://www.youtube.com/watch?v=" . $item['id']['videoId'],
                        'embed' => "https://www.youtube.com/embed/" . $item['id']['videoId'],
                        'theme' => $theme
                    ];
                }
            } catch (\Exception $e) {
                continue;
            }
        }
        return $videos;
    }

    private function genererPDF(string $contenu, Cours $cours, string $langue, string $niveau): string
    {
        $dir = dirname(__DIR__, 2) . '/public/uploads/cours_personnalises';
        if (!is_dir($dir)) {
            mkdir($dir, 0777, true);
        }
        
        $filename = 'cours_' . uniqid() . '.pdf';
        $path = $dir . '/' . $filename;
        
        $titre = $cours->getIdNiveau()?->getTitre() ?? 'Cours';
        
        $html = "<!DOCTYPE html><html><head><meta charset='UTF-8'><style>
            body{font-family:Arial;margin:40px;} h1{color:#2c3e50;border-bottom:3px solid #3498db;}
            h2{color:#34495e;border-left:5px solid #3498db;padding-left:15px;}
            table{width:100%;border-collapse:collapse;} th{background:#667eea;color:white;padding:12px;}
            td{padding:12px;border-bottom:1px solid #e0e0e0;} .exercice{background:#f8f9fa;padding:15px;border-left:5px solid #e74c3c;}
            .corrige{background:#e8f5e9;padding:15px;border-left:5px solid #27ae60;}
        </style></head><body>
            <h1>Cours personnalisé - {$titre}</h1>
            <p><strong>{$langue}</strong> • Niveau <strong>{$niveau}</strong></p>
            " . $this->formatContent($contenu) . "
        </body></html>";
        
        $pdf = new \Dompdf\Dompdf();
        $pdf->loadHtml($html);
        $pdf->setPaper('A4');
        $pdf->render();
        file_put_contents($path, $pdf->output());
        
        return '/uploads/cours_personnalises/' . $filename;
    }

    private function formatContent(string $contenu): string
    {
        $contenu = preg_replace(
            ['/\*\*(.*?)\*\*/', '/\*(.*?)\*/', '/^# (.*?)$/m', '/^## (.*?)$/m'],
            ['<strong>$1</strong>', '<em>$1</em>', '<h1>$1</h1>', '<h2>$1</h2>'],
            $contenu
        );
        
        return nl2br((string) $contenu);
    }
}