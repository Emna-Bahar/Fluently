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
    
    // 🔥 AMÉLIORATION : Nettoyer mais garder la structure
    $texteUtilisateurClean = strtolower(preg_replace('/[^\w\s\']/u', '', $texteUtilisateur));
    $texteAttenduClean = strtolower(preg_replace('/[^\w\s\']/u', '', $texteAttendu));
    
    // Si les textes sont identiques après nettoyage -> parfait !
    if ($texteUtilisateurClean === $texteAttenduClean) {
        return $this->json([
            'score' => 100,
            'erreurs' => [],
            'reussite' => true,
            'texte_utilisateur' => $texteUtilisateur,
            'texte_attendu' => $texteAttendu,
            'statistiques' => [
                'mots_corrects' => count(explode(' ', $texteAttenduClean)),
                'total_mots' => count(explode(' ', $texteAttenduClean)),
                'mots_manquants' => 0,
                'mots_en_trop' => 0
            ]
        ]);
    }
    
    // Diviser en mots
    $motsUtilisateur = array_values(array_filter(explode(' ', $texteUtilisateurClean)));
    $motsAttendus = array_values(array_filter(explode(' ', $texteAttenduClean)));
    
    $motsCorrects = 0;
    $erreurs = [];
    $motsManquants = [];
    $motsEnTrop = [];
    
    // Mots insignifiants (articles, prépositions, etc.)
    $motsInsignifiants = ['le', 'la', 'les', 'un', 'une', 'des', 'du', 'de', 'je', 'tu', 'il', 'elle', 'nous', 'vous', 'ils', 'elles', 'et', 'ou', 'mais', 'donc', 'car', 'ni', 'or', 'a', 'an', 'the', 'in', 'on', 'at', 'to', 'for', 'with', 'by', 'from', 'of', 'i', 'you', 'he', 'she', 'it', 'we', 'they'];
    
    // 🔥 AMÉLIORATION : Algorithme de comparaison plus robuste
    $utilisateurIndex = 0;
    $attenduIndex = 0;
    
    while ($attenduIndex < count($motsAttendus) || $utilisateurIndex < count($motsUtilisateur)) {
        // Si on a dépassé la fin des mots utilisateur
        if ($utilisateurIndex >= count($motsUtilisateur)) {
            // Tous les mots restants sont manquants
            for ($i = $attenduIndex; $i < count($motsAttendus); $i++) {
                if (!in_array($motsAttendus[$i], $motsInsignifiants)) {
                    $motsManquants[] = ['mot' => $motsAttendus[$i]];
                }
            }
            break;
        }
        
        // Si on a dépassé la fin des mots attendus
        if ($attenduIndex >= count($motsAttendus)) {
            // Tous les mots restants sont en trop
            for ($i = $utilisateurIndex; $i < count($motsUtilisateur); $i++) {
                if (!in_array($motsUtilisateur[$i], $motsInsignifiants)) {
                    $motsEnTrop[] = ['mot' => $motsUtilisateur[$i]];
                }
            }
            break;
        }
        
        $motUtilisateur = $motsUtilisateur[$utilisateurIndex];
        $motAttendu = $motsAttendus[$attenduIndex];
        
        // Vérifier si les mots correspondent exactement
        if ($motUtilisateur === $motAttendu) {
            $motsCorrects++;
            $utilisateurIndex++;
            $attenduIndex++;
        }
        // Vérifier la similarité (fautes d'orthographe)
        elseif (levenshtein($motUtilisateur, $motAttendu) <= 2) {
            $erreurs[] = [
                'type' => 'orthographe',
                'message' => "Tu as dit '{$motUtilisateur}', mais le mot correct est '{$motAttendu}'",
                'attendu' => $motAttendu,
                'entendu' => $motUtilisateur
            ];
            $motsCorrects += 0.5;
            $utilisateurIndex++;
            $attenduIndex++;
        }
        // Mot manquant
        elseif (!in_array($motAttendu, $motsInsignifiants)) {
            $motsManquants[] = ['mot' => $motAttendu];
            $attenduIndex++;
        } else {
            // Mot insignifiant, on passe
            $attenduIndex++;
        }
    }
    
    // Calculer le score
    $totalMotsSignificatifs = count(array_filter($motsAttendus, function($mot) use ($motsInsignifiants) {
        return !in_array($mot, $motsInsignifiants);
    }));
    
    $score = $totalMotsSignificatifs > 0 ? ($motsCorrects / $totalMotsSignificatifs) * 100 : 0;
    
    // Construire les messages d'erreur
    $messagesErreur = [];
    
    foreach ($erreurs as $erreur) {
        $messagesErreur[] = $erreur;
    }
    
    foreach ($motsManquants as $manquant) {
        $messagesErreur[] = [
            'type' => 'missing',
            'message' => "Il manque le mot '{$manquant['mot']}' dans ta phrase"
        ];
    }
    
    foreach ($motsEnTrop as $trop) {
        $messagesErreur[] = [
            'type' => 'extra',
            'message' => "Tu as ajouté le mot '{$trop['mot']}' qui n'est pas dans la phrase"
        ];
    }
    
    return $this->json([
        'score' => round($score),
        'erreurs' => $messagesErreur,
        'reussite' => $score >= 90 && empty($motsManquants) && empty($motsEnTrop),
        'texte_utilisateur' => $texteUtilisateur,
        'texte_attendu' => $texteAttendu,
        'statistiques' => [
            'mots_corrects' => $motsCorrects,
            'total_mots' => $totalMotsSignificatifs,
            'mots_manquants' => count($motsManquants),
            'mots_en_trop' => count($motsEnTrop)
        ]
    ]);
}
}