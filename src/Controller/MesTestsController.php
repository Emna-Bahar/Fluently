<?php


namespace App\Controller;


use App\Entity\User;
use App\Entity\Test;
use App\Entity\TestPassage;
use App\Entity\UserProgress;
use App\Repository\TestPassageRepository;
use App\Repository\LangueRepository;
use App\Repository\UserProgressRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;


#[Route('/mes-tests')]
final class MesTestsController extends AbstractController
{
    #[Route('', name: 'app_mes_tests', methods: ['GET'])]
    public function index(
        EntityManagerInterface $em,
        LangueRepository $langueRepository,
        TestPassageRepository $testPassageRepository,
        UserProgressRepository $progressRepository
    ): Response {
        $user = $this->getUser();
        if (!$user instanceof User) {
            $this->addFlash('error', 'Vous devez être connecté.');
            return $this->redirectToRoute('app_login');
        }


        $langues = $langueRepository->findBy(['is_active' => true], ['nom' => 'ASC']);


        $testsParLangue = [];


        foreach ($langues as $langue) {
            // Trouver le niveau actuel de l'utilisateur pour cette langue
            // Remplace findOneBy par une requête qui prend la ligne la plus récente
            $progress = $progressRepository->findMostRecentByUserAndLangue($user, $langue);


            $niveauActuel = $progress ? $progress->getNiveauActuel() : null;


            // Tous les tests de cette langue
            $tousTests = $em->getRepository(Test::class)->findBy(['langue' => $langue]);


            if (empty($tousTests)) continue;


            $testsAvecInfo = [];


            foreach ($tousTests as $test) {
                // Déterminer si le test est accessible
                $accessible = false;
                $raisonBlocage = null;


                if ($test->getType() === 'Test de niveau') {
                    // Toujours accessible
                    $accessible = true;
                } elseif ($niveauActuel === null) {
                    // Pas encore de niveau → tout bloqué sauf Test de niveau
                    $accessible = false;
                    $raisonBlocage = 'Passe d\'abord le test de niveau';
                } else {
                    // Vérifier que le niveau du test correspond au niveau actuel
                    $niveauDuTest = $test->getNiveau();
                    if ($niveauDuTest === null) {
                        $accessible = true; // pas de niveau requis
                    } else {
                        // Extraire les codes CECRL pour comparaison
                        $codeActuel = $this->extraireCodeCECRL($niveauActuel->getDifficulte());
                        $codeTest = $this->extraireCodeCECRL($niveauDuTest->getDifficulte());
                       
                        if ($codeActuel !== null && $codeTest !== null && $codeActuel === $codeTest) {
                            $accessible = true;
                        } else {
                            $accessible = false;
                            $raisonBlocage = 'Disponible au niveau ' . $niveauDuTest->getDifficulte() . ' (tu es en ' . $niveauActuel->getDifficulte() . ')';
                        }
                    }
                }


                // Historique des passages terminés
                $passages = $testPassageRepository->findBy(
                    ['test' => $test, 'user' => $user, 'statut' => 'termine'],
                    ['dateFin' => 'DESC']
                );


                $dernierPassage = !empty($passages) ? $passages[0] : null;
                $meilleurScore = 0;
                foreach ($passages as $p) {
                    $meilleurScore = max($meilleurScore, $p->getResultat() ?? 0);
                }


                $niveauObtenu = null;
                if ($test->getType() === 'Test de niveau' && $dernierPassage) {
                    $niveauObtenu = $this->scoreToNiveau($dernierPassage->getResultat() ?? 0);
                }


                $testsAvecInfo[] = [
                    'test'           => $test,
                    'passages'       => $passages,
                    'dernierPassage' => $dernierPassage,
                    'meilleurScore'  => round($meilleurScore, 1),
                    'nbrPassages'    => count($passages),
                    'niveauObtenu'   => $niveauObtenu,
                    'accessible'     => $accessible,
                    'raisonBlocage'  => $raisonBlocage,
                ];
            }


            if (!empty($testsAvecInfo)) {
                $testsParLangue[] = [
                    'langue'       => $langue,
                    'tests'        => $testsAvecInfo,
                    'niveauActuel' => $niveauActuel,
                ];
            }
        }


        return $this->render('mes_tests/index.html.twig', [
            'testsParLangue' => $testsParLangue,
        ]);
    }


    /**
     * Extrait le code CECRL (A1, A2, B1, B2, C1, C2) d'une chaîne de difficulté
     *
     * Exemples:
     * - "B2 - Intermédiaire supérieur" → "B2"
     * - "A1 - Débutant" → "A1"
     * - "C2" → "C2"
     * - "Français - Niveau B1" → "B1"
     * - "English - Niveau A2" → "A2"
     */
    private function extraireCodeCECRL(?string $difficulte): ?string
    {
        if ($difficulte === null) {
            return null;
        }
       
        // Liste des codes CECRL
        $codes = ['A1', 'A2', 'B1', 'B2', 'C1', 'C2'];
       
        // Version insensible à la casse
        $difficulteUpper = strtoupper($difficulte);
       
        foreach ($codes as $code) {
            // Chercher le code dans la chaîne (mot entier)
            if (preg_match('/\b' . $code . '\b/', $difficulteUpper)) {
                return $code;
            }
        }
       
        // Fallback: chercher simplement la présence du code
        foreach ($codes as $code) {
            if (strpos($difficulteUpper, $code) !== false) {
                return $code;
            }
        }
       
        return null;
    }


    private function scoreToNiveau(float $score): string
    {
        if ($score >= 90) return 'C2';
        if ($score >= 80) return 'C1';
        if ($score >= 70) return 'B2';
        if ($score >= 60) return 'B1';
        if ($score >= 50) return 'A2';
        return 'A1';
    }
}
