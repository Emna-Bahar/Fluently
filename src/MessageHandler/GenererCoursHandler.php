<?php

namespace App\MessageHandler;

use App\Entity\Cours;
use App\Entity\User;
use App\Message\GenererCoursMessage;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;

#[AsMessageHandler]
class GenererCoursHandler
{
    private EntityManagerInterface $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    public function __invoke(GenererCoursMessage $message)
    {
        try {
            // Récupérer les données
            $data = $message->getData();
            $cours = $this->em->getRepository(Cours::class)->find($message->getCoursId());
            $user = $this->em->getRepository(User::class)->find($message->getUserId());
            
            if (!$cours || !$user) {
                return;
            }
            
            $niveau = $cours->getIdNiveau()->getDifficulte();
            $langue = $cours->getIdNiveau()->getIdLangue()->getNom();
            
            $prompt = "Génère un cours de {$langue} de niveau {$niveau} avec les thèmes suivants :
            - Vocabulaire: " . ($data['vocabulaire'] ?? 'Non spécifié') . "
            - Grammaire: " . ($data['grammaire'] ?? 'Non spécifié') . "
            - Nouveaux mots: " . ($data['nouveauxMots'] ?? 'Non spécifié') . "

            Le cours doit être structuré EXACTEMENT comme ceci :

            # [Titre en anglais] - [Titre en français]
            **Niveau {$niveau}**

            ## 1. INTRODUCTION
            [Introduction bilingue : 2-3 phrases en français expliquant le sujet, puis traduction en anglais]

            ## 2. VOCABULAIRE
            Présente le vocabulaire dans un tableau avec 3 colonnes :

            | Mot (anglais) | Définition (français) | Exemple (anglais) |
            |----------------|----------------------|-------------------|
            | [mot] | [définition en français] | [phrase exemple en anglais] |
            | [mot] | [définition en français] | [phrase exemple en anglais] |

            ## 3. GRAMMAIRE
            [Explication en français des règles de grammaire]
            *Exemples :*
            - *[phrase exemple en anglais]* → [traduction française]
            - *[phrase exemple en anglais]* → [traduction française]

            ## 4. NOUVEAUX MOTS
            Liste des mots importants :
            - ***[mot anglais]** * [prononciation approximative] : [traduction française]
            - ***[mot anglais]** * [prononciation approximative] : [traduction française]

            ## 5. EXERCICES PRATIQUES
            *Consigne en français :* [description de l'exercice]

            **Exercice 1 :** [énoncé en anglais]
            **Exercice 2 :** [énoncé en anglais]
            **Exercice 3 :** [énoncé en anglais]

            ## 6. CORRIGÉS
            **Exercice 1 :** [réponses]
            **Exercice 2 :** [réponses]
            **Exercice 3 :** [réponses]

            ## 7. CONCLUSION
            [Conclusion bilingue : conseils pour pratiquer]

            Réponds en français pour les explications, mais garde les mots et exemples en {$langue}.
            
            IMPORTANT : 
            - Utilise **gras** pour les titres
            - Utilise *italique* pour les mots anglais dans les explications
            - Fais des tableaux propres pour le vocabulaire";
            
            // Appeler Mistral AI
            $contenu = $this->appelerMistral($prompt);
            
            // Générer le PDF
            $pdfPath = $this->genererPDF($contenu, $cours);
            
            // Rechercher des vidéos YouTube
            $videos = $this->rechercherVideosYouTube($data['themesYoutube'] ?? '');
            
            // Récupérer les ressources existantes
            $ressourcesExistantes = $cours->getRessource() ? explode("\n", $cours->getRessource()) : [];
            
            // Nettoyer les chemins
            $ressourcesNettoyees = [];
            foreach ($ressourcesExistantes as $res) {
                $res = trim($res);
                if (!empty($res)) {
                    $ressourcesNettoyees[] = $res;
                }
            }
            
            // Ajouter le PDF
            if ($pdfPath) {
                $ressourcesNettoyees[] = $pdfPath;
            }
            
            // Ajouter les vidéos YouTube
            if (!empty($videos)) {
    foreach ($videos as $video) {
        if (!empty($video['url'])) {
            $ressourcesNettoyees[] = $video['url'];
            error_log('Vidéo ajoutée: ' . $video['titre']); // Pour debug
        }
    }
} else {
    error_log('Aucune vidéo trouvée pour les thèmes: ' . ($data['themesYoutube'] ?? 'vide'));
}
            
            // Sauvegarder sans doublons
            $cours->setRessource(implode("\n", array_unique($ressourcesNettoyees)));
            
            // Sauvegarder
            $this->em->flush();
            
        } catch (\Exception $e) {
            error_log('Erreur génération cours: ' . $e->getMessage());
            throw $e;
        }
    }

    private function appelerMistral(string $prompt): string
    {
        $apiKey = $_ENV['MISTRAL_API_KEY'];
        
        // URL de l'API Mistral
        $url = "https://api.mistral.ai/v1/chat/completions";
        
        $data = [
            'model' => 'mistral-tiny',
            'messages' => [
                [
                    'role' => 'system',
                    'content' => 'Tu es un professeur de langue expert. Tu dois générer des cours structurés avec :
                    - Titre principal en anglais et français
                    - Introduction bilingue
                    - Vocabulaire présenté dans un tableau avec colonnes : Mot, Définition, Exemple
                    - Grammaire expliquée en français avec exemples en anglais
                    - Liste des nouveaux mots (format : mot [prononciation] - traduction)
                    - Exercices en anglais avec consignes en français
                    - Corrigés des exercices
                    
                    IMPORTANT : 
                    - Les titres doivent être en **gras**
                    - Les mots anglais doivent être en *italique*
                    - Utilise des tableaux pour le vocabulaire
                    - Sépare clairement les sections'
            ],
                [
                    'role' => 'user',
                    'content' => $prompt
                ]
            ],
            'temperature' => 0.7,
            'max_tokens' => 3000
        ];
        
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Authorization: Bearer ' . trim($apiKey),
            'Content-Type: application/json'
        ]);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_TIMEOUT, 60);
        
        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        
        if (curl_error($ch)) {
            throw new \Exception('Erreur cURL: ' . curl_error($ch));
        }
        
        curl_close($ch);
        
        if ($httpCode !== 200) {
            throw new \Exception('Erreur Mistral (HTTP ' . $httpCode . '): ' . $response);
        }
        
        $result = json_decode($response, true);
        
        if (isset($result['choices'][0]['message']['content'])) {
            return $result['choices'][0]['message']['content'];
        } else {
            return "Erreur: Réponse inattendue de l'API";
        }
    }

    private function rechercherVideosYouTube(?string $themes): array
{
    if (!$themes || empty(trim($themes))) {
        return [];
    }
    
    $apiKey = $_ENV['YOUTUBE_API_KEY'];
    
    // Vérifier que la clé n'est pas un placeholder
    if (strpos($apiKey, 'AIza') !== 0 || strlen($apiKey) < 20) {
        error_log('Clé API YouTube invalide ou manquante');
        return [];
    }
    
    $themesArray = explode("\n", $themes);
    $videos = [];
    
    foreach ($themesArray as $theme) {
        $theme = trim($theme);
        if (empty($theme)) continue;
        
        // Attendre un peu entre les requêtes
        usleep(500000); // 0.5 seconde
        
        $query = urlencode($theme . " cours");
        $url = "https://www.googleapis.com/youtube/v3/search?part=snippet&q={$query}&type=video&maxResults=3&key={$apiKey}";
        
        try {
            $response = file_get_contents($url);
            $data = json_decode($response, true);
            
            if (isset($data['error'])) {
                error_log('Erreur API YouTube: ' . json_encode($data['error']));
                continue;
            }
            
            if (isset($data['items']) && count($data['items']) > 0) {
                foreach ($data['items'] as $item) {
                    $videoId = $item['id']['videoId'];
                    $videos[] = [
                        'titre' => $item['snippet']['title'],
                        'chaine' => $item['snippet']['channelTitle'],
                        'description' => $item['snippet']['description'],
                        'url' => "https://www.youtube.com/watch?v=" . $videoId,
                        'embed' => "https://www.youtube.com/embed/" . $videoId,
                        'theme' => $theme
                    ];
                }
            }
        } catch (\Exception $e) {
            error_log('Exception YouTube: ' . $e->getMessage());
            continue;
        }
    }
    
    return $videos;
}

    private function genererPDF(string $contenu, Cours $cours): string
    {
        $uploadDir = dirname(__DIR__, 2) . '/public/uploads/cours_personnalises';
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }
        
        $filename = 'cours_' . uniqid() . '.pdf';
        $filepath = $uploadDir . '/' . $filename;
        
        $html = "<!DOCTYPE html>
        <html>
        <head>
            <meta charset='UTF-8'>
            <title>Cours personnalisé - {$cours->getIdNiveau()->getTitre()}</title>
            <style>
                body {
                    font-family: 'Arial', sans-serif;
                    line-height: 1.6;
                    margin: 40px;
                    color: #333;
                }
                h1 {
                    color: #2c3e50;
                    border-bottom: 3px solid #3498db;
                    padding-bottom: 10px;
                    font-size: 28px;
                    text-align: center;
                }
                h2 {
                    color: #34495e;
                    margin-top: 30px;
                    border-left: 5px solid #3498db;
                    padding-left: 15px;
                    font-size: 22px;
                    background-color: #f8f9fa;
                    padding: 10px 15px;
                    border-radius: 0 5px 5px 0;
                }
                h3 {
                    color: #7f8c8d;
                    font-size: 18px;
                    margin-top: 20px;
                    font-style: italic;
                }
                .header {
                    text-align: center;
                    margin-bottom: 30px;
                    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                    color: white;
                    padding: 20px;
                    border-radius: 10px;
                }
                .header h1 {
                    color: white;
                    border-bottom: 2px solid rgba(255,255,255,0.3);
                }
                .date {
                    color: #7f8c8d;
                    font-size: 12px;
                    text-align: right;
                    margin-bottom: 20px;
                    font-style: italic;
                }
                table {
                    width: 100%;
                    border-collapse: collapse;
                    margin: 20px 0;
                    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
                }
                th {
                    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                    color: white;
                    padding: 12px;
                    text-align: left;
                    font-weight: bold;
                }
                td {
                    padding: 12px;
                    border-bottom: 1px solid #e0e0e0;
                }
                tr:nth-child(even) {
                    background-color: #f8f9fa;
                }
                tr:hover {
                    background-color: #e8f4fd;
                }
                .content {
                    margin-top: 30px;
                }
                .exercice {
                    background: #f8f9fa;
                    padding: 15px;
                    border-radius: 5px;
                    margin: 20px 0;
                    border-left: 5px solid #e74c3c;
                }
                .corrige {
                    background: #e8f5e9;
                    padding: 15px;
                    border-radius: 5px;
                    margin: 20px 0;
                    border-left: 5px solid #27ae60;
                }
                .footer {
                    margin-top: 50px;
                    text-align: center;
                    color: #bdc3c7;
                    font-size: 11px;
                    border-top: 1px solid #ecf0f1;
                    padding-top: 20px;
                }
                strong, b {
                    color: #2c3e50;
                }
                em, i {
                    color: #e67e22;
                    font-style: italic;
                }
                ul, ol {
                    margin: 15px 0;
                    padding-left: 25px;
                }
                li {
                    margin: 5px 0;
                }
                .vocabulaire-mot {
                    font-weight: bold;
                    color: #2980b9;
                }
                .vocabulaire-def {
                    color: #27ae60;
                }
                .vocabulaire-exemple {
                    font-style: italic;
                    color: #e67e22;
                }
            </style>
        </head>
        <body>
            <div class='date'>Généré le " . date('d/m/Y à H:i') . "</div>
            
            <div class='header'>
                <h1>Cours personnalisé - {$cours->getIdNiveau()->getTitre()}</h1>
                <p style='font-size: 18px;'><strong>{$cours->getIdNiveau()->getIdLangue()->getNom()}</strong> • Niveau <strong>{$cours->getIdNiveau()->getDifficulte()}</strong></p>
            </div>
            
            <div class='content'>
                " . $this->formatterContenu($contenu) . "
            </div>
            
            <div class='footer'>
                Généré par IA - Fluently - " . date('Y') . "
            </div>
        </body>
        </html>";
        
        $pdf = new \Dompdf\Dompdf();
        $pdf->loadHtml($html);
        $pdf->setPaper('A4');
        $pdf->render();
        
        file_put_contents($filepath, $pdf->output());
        
        return '/uploads/cours_personnalises/' . $filename;
    }

    private function formatterContenu(string $contenu): string
    {
        // Convertir les marques de formatage simples en HTML
        $contenu = preg_replace('/\*\*(.*?)\*\*/', '<strong>$1</strong>', $contenu);
        $contenu = preg_replace('/\*(.*?)\*/', '<em>$1</em>', $contenu);
        $contenu = preg_replace('/^### (.*?)$/m', '<h3>$1</h3>', $contenu);
        $contenu = preg_replace('/^## (.*?)$/m', '<h2>$1</h2>', $contenu);
        $contenu = preg_replace('/^# (.*?)$/m', '<h1>$1</h1>', $contenu);
        
        // Détecter et formater les exercices
        $contenu = preg_replace('/\*\*Exercice \d+ :\*\*(.*?)(?=\*\*Exercice|\Z)/s', '<div class="exercice"><strong>Exercice $1</strong></div>', $contenu);
        $contenu = preg_replace('/\*\*Corrigé.*?\*\*(.*?)(?=\*\*|$)/s', '<div class="corrige"><strong>Corrigé</strong>$1</div>', $contenu);
        
        // Convertir les tableaux Markdown en HTML
        if (preg_match('/\|.*\|/', $contenu)) {
            $lignes = explode("\n", $contenu);
            $dansTableau = false;
            $tableHTML = '';
            $estEnTete = true;
            $nouveauContenu = [];
            
            foreach ($lignes as $ligne) {
                if (preg_match('/^\|.*\|$/', trim($ligne))) {
                    if (!$dansTableau) {
                        $dansTableau = true;
                        $tableHTML = '<table>';
                        $estEnTete = true;
                    }
                    
                    // C'est une ligne de tableau
                    $cellules = explode('|', trim($ligne, '|'));
                    
                    // Vérifier si c'est une ligne de séparation (|---|)
                    $estLigneSeparation = true;
                    foreach ($cellules as $cellule) {
                        if (!preg_match('/^[\s-]+$/', trim($cellule))) {
                            $estLigneSeparation = false;
                            break;
                        }
                    }
                    
                    if ($estLigneSeparation) {
                        // Ligne de séparation, on change l'en-tête
                        $estEnTete = false;
                        continue;
                    }
                    
                    if ($estEnTete) {
                        $tableHTML .= '<thead><tr>';
                        foreach ($cellules as $cellule) {
                            $tableHTML .= '<th>' . trim($cellule) . '</th>';
                        }
                        $tableHTML .= '</tr></thead><tbody>';
                    } else {
                        $tableHTML .= '<tr>';
                        foreach ($cellules as $cellule) {
                            $tableHTML .= '<td>' . trim($cellule) . '</td>';
                        }
                        $tableHTML .= '</tr>';
                    }
                } else {
                    if ($dansTableau) {
                        $tableHTML .= '</tbody></table>';
                        $nouveauContenu[] = $tableHTML;
                        $dansTableau = false;
                        $tableHTML = '';
                    }
                    $nouveauContenu[] = $ligne;
                }
            }
            
            if ($dansTableau) {
                $tableHTML .= '</tbody></table>';
                $nouveauContenu[] = $tableHTML;
            }
            
            $contenu = implode("\n", $nouveauContenu);
        }
        
        return nl2br($contenu);
    }
}