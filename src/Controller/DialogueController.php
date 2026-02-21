<?php

namespace App\Controller;

use App\Service\DialogueService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/dialogue')]
class DialogueController extends AbstractController
{
    #[Route('/generer', name: 'app_dialogue_generer', methods: ['POST'])]
    public function generer(Request $request, DialogueService $service): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $theme = $data['theme'] ?? 'Conversation générale';
        $niveau = $data['niveau'] ?? 'A1';
        $langue = $data['langue'] ?? 'Anglais';
        
        $dialogue = $service->genererDialogue($theme, $niveau, $langue);
        
        // Stocker en session
        $session = $request->getSession();
        $session->set('dialogue_actuel', $dialogue);
        $session->set('dialogue_theme', $theme);
        
        return $this->json([
            'dialogue' => $dialogue,
            'total' => count($dialogue)
        ]);
    }

    #[Route('/verifier', name: 'app_dialogue_verifier', methods: ['POST'])]
    public function verifier(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $texteUtilisateur = trim($data['texte'] ?? '');
        $texteAttendu = trim($data['attendu'] ?? '');
        
        // Nettoyer les textes mais garder la ponctuation pour la comparaison
        $texteUtilisateurClean = preg_replace('/[^\w\s\']/u', '', strtolower($texteUtilisateur));
        $texteAttenduClean = preg_replace('/[^\w\s\']/u', '', strtolower($texteAttendu));
        
        // Diviser en mots
        $motsUtilisateur = array_values(array_filter(explode(' ', $texteUtilisateurClean)));
        $motsAttendus = array_values(array_filter(explode(' ', $texteAttenduClean)));
        
        $motsCorrects = 0;
        $erreurs = [];
        $motsManquants = [];
        $motsEnTrop = [];
        
        // Utiliser un algorithme de comparaison plus intelligent
        $utilisateurIndex = 0;
        $attenduIndex = 0;
        
        while ($attenduIndex < count($motsAttendus)) {
            $motAttendu = $motsAttendus[$attenduIndex];
            
            // Mots insignifiants à ignorer
            $motsInsignifiants = ['le', 'la', 'les', 'un', 'une', 'des', 'du', 'de', 'je', 'tu', 'il', 'elle', 'nous', 'vous', 'ils', 'elles', 'et', 'ou', 'mais', 'donc', 'car', 'ni', 'or', 'a', 'an', 'the', 'in', 'on', 'at', 'to', 'for', 'with', 'by', 'from', 'of'];
            
            if ($utilisateurIndex < count($motsUtilisateur)) {
                $motUtilisateur = $motsUtilisateur[$utilisateurIndex];
                
                // Vérifier si les mots correspondent exactement
                if ($motUtilisateur === $motAttendu) {
                    $motsCorrects++;
                    $utilisateurIndex++;
                    $attenduIndex++;
                } 
                // Vérifier la similarité (tolérance pour les petites fautes)
                elseif (levenshtein($motUtilisateur, $motAttendu) <= 2) {
                    // Faute d'orthographe mineure
                    $erreurs[] = [
                        'attendu' => $motAttendu,
                        'entendu' => $motUtilisateur,
                        'position' => $attenduIndex,
                        'type' => 'orthographe',
                        'suggestion' => "Tu as dit '{$motUtilisateur}', mais c'est presque correct ! Le mot exact est '{$motAttendu}'."
                    ];
                    $motsCorrects += 0.5; // Demi-point pour les fautes mineures
                    $utilisateurIndex++;
                    $attenduIndex++;
                }
                // Mot en trop dans la phrase de l'utilisateur
                elseif (!in_array($motAttendu, $motsInsignifiants) && $utilisateurIndex > $attenduIndex) {
                    $motsEnTrop[] = [
                        'mot' => $motUtilisateur,
                        'position' => $utilisateurIndex
                    ];
                    $utilisateurIndex++;
                }
                // Mot manquant
                else {
                    $motsManquants[] = [
                        'mot' => $motAttendu,
                        'position' => $attenduIndex
                    ];
                    $attenduIndex++;
                }
            } else {
                // Plus de mots utilisateur, ce qui reste sont des mots manquants
                $motsManquants[] = [
                    'mot' => $motAttendu,
                    'position' => $attenduIndex
                ];
                $attenduIndex++;
            }
        }
        
        // Ajouter les mots en trop restants
        while ($utilisateurIndex < count($motsUtilisateur)) {
            $motsEnTrop[] = [
                'mot' => $motsUtilisateur[$utilisateurIndex],
                'position' => $utilisateurIndex
            ];
            $utilisateurIndex++;
        }
        
        // Calculer le score basé sur la similarité globale
        $similarite = 0;
        if (!empty($motsAttendus)) {
            // Calculer la similarité Levenshtein sur la phrase complète
            $distance = levenshtein($texteUtilisateurClean, $texteAttenduClean);
            $maxLength = max(strlen($texteUtilisateurClean), strlen($texteAttenduClean));
            $similarite = $maxLength > 0 ? (1 - $distance / $maxLength) * 100 : 0;
            
            // Ajuster le score en fonction des mots corrects
            $scoreMots = (count($motsAttendus) > 0) ? ($motsCorrects / count($motsAttendus)) * 100 : 0;
            $score = ($similarite * 0.4 + $scoreMots * 0.6); // Pondération
        } else {
            $score = 0;
        }
        
        // Construire les messages d'erreur détaillés
        $messagesErreur = [];
        
        foreach ($erreurs as $erreur) {
            $messagesErreur[] = [
                'type' => 'error',
                'message' => $erreur['suggestion'] ?? "Tu as dit '{$erreur['entendu']}' au lieu de '{$erreur['attendu']}'",
                'attendu' => $erreur['attendu'],
                'entendu' => $erreur['entendu']
            ];
        }
        
        foreach ($motsManquants as $manquant) {
            if (!in_array($manquant['mot'], $motsInsignifiants)) {
                $messagesErreur[] = [
                    'type' => 'missing',
                    'message' => "Il manque le mot '{$manquant['mot']}' dans ta phrase",
                    'mot' => $manquant['mot']
                ];
            }
        }
        
        foreach ($motsEnTrop as $trop) {
            if (!in_array($trop['mot'], $motsInsignifiants)) {
                $messagesErreur[] = [
                    'type' => 'extra',
                    'message' => "Tu as ajouté le mot '{$trop['mot']}' qui n'est pas dans la phrase",
                    'mot' => $trop['mot']
                ];
            }
        }
        
        // Si le score est élevé mais qu'il y a des erreurs, ne pas mettre "Bravo !"
        $reussite = $score >= 80 && empty($messagesErreur);
        
        // Pour l'affichage dans l'image, on veut voir ce que l'utilisateur a dit
        return $this->json([
            'score' => round($score),
            'erreurs' => $messagesErreur,
            'reussite' => $reussite,
            'texte_utilisateur' => $texteUtilisateur,
            'texte_attendu' => $texteAttendu,
            'statistiques' => [
                'mots_corrects' => $motsCorrects,
                'total_mots' => count($motsAttendus),
                'mots_manquants' => count($motsManquants),
                'mots_en_trop' => count($motsEnTrop)
            ]
        ]);
    }
}