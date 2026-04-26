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
        $langue = $data['langue'] ?? 'anglais';
        
        $dialogue = $service->genererDialogue($theme, $niveau, $langue);

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
        $texteUtilisateurClean = strtolower(preg_replace('/[^\w\s\']/u', '', $texteUtilisateur ?? '') ?? '');
        $texteAttenduClean = strtolower(preg_replace('/[^\w\s\']/u', '', $texteAttendu ?? '') ?? '');
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
        
        $motsUtilisateur = array_values(array_filter(explode(' ', $texteUtilisateurClean)));
        $motsAttendus = array_values(array_filter(explode(' ', $texteAttenduClean)));
        $motsCorrects = 0;
        $erreurs = [];
        $motsManquants = [];
        $motsEnTrop = [];
        $motsInsignifiants = ['le', 'la', 'les', 'un', 'une', 'des', 'du', 'de', 'je', 'tu', 'il', 'elle', 'nous', 'vous', 'ils', 'elles', 'et', 'ou', 'mais', 'donc', 'car', 'ni', 'or', 'a', 'an', 'the', 'in', 'on', 'at', 'to', 'for', 'with', 'by', 'from', 'of', 'i', 'you', 'he', 'she', 'it', 'we', 'they'];
        $utilisateurIndex = 0;
        $attenduIndex = 0;
        while ($attenduIndex < count($motsAttendus) || $utilisateurIndex < count($motsUtilisateur)) {
            if ($utilisateurIndex >= count($motsUtilisateur)) {
                for ($i = $attenduIndex; $i < count($motsAttendus); $i++) {
                    if (!in_array($motsAttendus[$i], $motsInsignifiants)) {
                        $motsManquants[] = ['mot' => $motsAttendus[$i]];
                    }
                }
                break;
            }
            if ($attenduIndex >= count($motsAttendus)) {
                for ($i = $utilisateurIndex; $i < count($motsUtilisateur); $i++) {
                    if (!in_array($motsUtilisateur[$i], $motsInsignifiants)) {
                        $motsEnTrop[] = ['mot' => $motsUtilisateur[$i]];
                    }
                }
                break;
            }
            $motUtilisateur = $motsUtilisateur[$utilisateurIndex];
            $motAttendu = $motsAttendus[$attenduIndex];          
            if ($motUtilisateur === $motAttendu) {
                $motsCorrects++;
                $utilisateurIndex++;
                $attenduIndex++;
            } elseif (levenshtein($motUtilisateur, $motAttendu) <= 2) {
                $erreurs[] = [
                    'type' => 'orthographe',
                    'message' => "Tu as dit '{$motUtilisateur}', mais le mot correct est '{$motAttendu}'",
                    'attendu' => $motAttendu,
                    'entendu' => $motUtilisateur
                ];
                $motsCorrects += 0.5;
                $utilisateurIndex++;
                $attenduIndex++;
            } elseif (!in_array($motAttendu, $motsInsignifiants)) {
                $motsManquants[] = ['mot' => $motAttendu];
                $attenduIndex++;
            } else {
                $attenduIndex++;
            }
        }
        
        $totalMotsSignificatifs = count(array_filter($motsAttendus, function($mot) use ($motsInsignifiants) {
            return !in_array($mot, $motsInsignifiants);
        }));        
        $score = $totalMotsSignificatifs > 0 ? ($motsCorrects / $totalMotsSignificatifs) * 100 : 0;
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