<?php

namespace App\Controller;

use App\Entity\Objectif;
use App\Repository\ObjectifRepository;
use App\Repository\TacheRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;

#[Route('/recommandation')]
final class RecommandationController extends AbstractController
{
    private const GROQ_API_URL = 'https://api.groq.com/openai/v1/chat/completions';
    private const GROQ_MODEL = 'llama-3.1-8b-instant';

    public function __construct(
        private HttpClientInterface $httpClient
    ) {}

    #[Route('/', name: 'app_recommandation_index', methods: ['GET'])]
    public function index(
        ObjectifRepository $objectifRepository,
        TacheRepository $tacheRepository
    ): Response {
        $objectifs = $objectifRepository->findAll();
        $stats     = $this->calculerStats($objectifs);

        $objectifsTermines = array_values(array_filter(
            $objectifs, fn($o) => $o->getStatut() === 'complete'
        ));

        $objectifsEnCours = array_values(array_filter(
            $objectifs, fn($o) => $o->getStatut() === 'en_cours'
        ));

        return $this->render('recommandation/index.html.twig', [
            'objectifs'         => $objectifs,
            'objectifsTermines' => $objectifsTermines,
            'objectifsEnCours'  => $objectifsEnCours,
            'stats'             => $stats,
        ]);
    }

    #[Route('/generer', name: 'app_recommandation_generer', methods: ['POST'])]
    public function generer(
        ObjectifRepository $objectifRepository,
        TacheRepository $tacheRepository
    ): JsonResponse {
        $objectifs = $objectifRepository->findAll();
        $taches    = $tacheRepository->findAll();

        if (empty($objectifs)) {
            return new JsonResponse([
                'success' => false,
                'message' => 'Aucun objectif trouvé. Créez d\'abord des objectifs !'
            ]);
        }

        $groqKey = $_ENV['GROQ_API_KEY'] ?? '';

        if (empty($groqKey)) {
            return new JsonResponse([
                'success' => true,
                'data'    => $this->modeDemo($objectifs),
                'mode'    => 'demo'
            ]);
        }

        $prompt = $this->construirePrompt($objectifs, $taches);

        try {
            $response = $this->httpClient->request('POST', self::GROQ_API_URL, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $groqKey,
                    'Content-Type'  => 'application/json',
                ],
                'timeout' => 30,
                'json'    => [
                    'model'       => self::GROQ_MODEL,
                    'temperature' => 0.7,
                    'max_tokens'  => 2000,
                    'messages'    => [
                        [
                            'role'    => 'system',
                            'content' => $this->getSystemPrompt()
                        ],
                        [
                            'role'    => 'user',
                            'content' => $prompt
                        ]
                    ]
                ]
            ]);

            $body    = $response->toArray();
            $content = $body['choices'][0]['message']['content'] ?? '';

            $content = preg_replace('/```json\s*/i', '', $content);
            $content = preg_replace('/```\s*/i', '', $content);
            $content = trim(is_string($content) ? $content : '');



            preg_match('/\{.*\}/s', $content, $matches);
            $jsonStr = $matches[0] ?? $content;

            $data = json_decode($jsonStr, true);

            if (!$data || json_last_error() !== JSON_ERROR_NONE) {
                return new JsonResponse([
                    'success' => true,
                    'data'    => $this->modeDemo($objectifs),
                    'mode'    => 'demo'
                ]);
            }

            return new JsonResponse([
                'success' => true,
                'data'    => $data,
                'mode'    => 'groq'
            ]);

        } catch (\Exception $e) {
            return new JsonResponse([
                'success' => true,
                'data'    => $this->modeDemo($objectifs),
                'mode'    => 'demo',
                'error'   => $e->getMessage()
            ]);
        }
    }

    // ============================================================
    // NOUVELLE ROUTE : Créer un objectif directement depuis la recommandation
    // ============================================================
    #[Route('/creer-objectif', name: 'app_recommandation_creer_objectif', methods: ['POST'])]
    public function creerObjectif(
        Request $request,
        EntityManagerInterface $entityManager
    ): JsonResponse {
        $data = json_decode($request->getContent(), true);

        if (!$data) {
            return new JsonResponse(['success' => false, 'message' => 'Données invalides'], 400);
        }

        try {
            $objectif = new Objectif();
            $objectif->setTitre($data['titre'] ?? 'Objectif sans titre');
            $objectif->setDescription($data['description'] ?? '');
            
            // Dates automatiques
            $objectif->setDateDeb(new \DateTime());
            $duree = $data['duree_semaines'] ?? 4;
            $dateFin = (new \DateTime())->modify("+{$duree} weeks");
            $objectif->setDateFin($dateFin);
            
            $objectif->setStatut('en_cours');

            // Récupérer l'utilisateur connecté (remplace par ton système d'auth)
            $user = $this->getUser(); // ou une autre méthode pour récupérer l'utilisateur
            if (!$user) {
                // Si pas d'utilisateur connecté, prendre le premier utilisateur par défaut
                // À adapter selon ton système
                $objectif->setIdUser($entityManager->getRepository(\App\Entity\User::class)->findOneBy([]));
            } else {
    if ($user instanceof \App\Entity\User) {
        $objectif->setIdUser($user);
    }
}

            $entityManager->persist($objectif);
            $entityManager->flush();

            return new JsonResponse([
                'success' => true,
                'message' => 'Objectif créé avec succès !',
                'objectif' => [
                    'id' => $objectif->getId(),
                    'titre' => $objectif->getTitre(),
                    'description' => $objectif->getDescription(),
                    'dateDeb' => $objectif->getDateDeb()?->format('d/m/Y') ?? '',
                    'dateFin' => $objectif->getDateFin()?->format('d/m/Y') ?? '',
                ]
            ]);

        } catch (\Exception $e) {
            return new JsonResponse([
                'success' => false,
                'message' => 'Erreur : ' . $e->getMessage()
            ], 500);
        }
    }

    private function getSystemPrompt(): string
    {
        return <<<PROMPT
Tu es un coach expert en apprentissage des langues sur la plateforme Fluently.
Analyse les données d'un apprenant et propose 3 recommandations d'objectifs PERSONNALISÉES et PRÉCISES.

RÈGLES STRICTES :
- Réponds UNIQUEMENT en JSON valide, sans aucun texte avant ou après
- Base-toi UNIQUEMENT sur les données fournies
- Sois très spécifique dans les recommandations
- Les tâches suggérées doivent être concrètes et actionnables

FORMAT JSON OBLIGATOIRE :
{
    "analyse": "Analyse personnalisée de 2-3 phrases basée sur les données réelles",
    "niveau": "débutant ou intermédiaire ou avancé",
    "score_progression": 75,
    "points_forts": ["point fort 1 basé sur données", "point fort 2"],
    "axes_amelioration": ["axe 1 basé sur données", "axe 2"],
    "recommandations": [
        {
            "rang": 1,
            "titre": "Titre concret de l objectif",
            "description": "Description détaillée et actionnable",
            "pourquoi": "Justification basée sur l historique réel",
            "difficulte": "facile ou moyen ou difficile",
            "duree_semaines": 3,
            "priorite": "haute ou moyenne ou basse",
            "taches": [
                {"titre": "Tâche concrète 1", "priorite": "haute"},
                {"titre": "Tâche concrète 2", "priorite": "moyenne"},
                {"titre": "Tâche concrète 3", "priorite": "basse"}
            ],
            "emoji": "🎯"
        }
    ]
}
PROMPT;
    }

// construirePrompt()
/**
 * @param Objectif[] $objectifs
 * @param \App\Entity\Tache[] $taches
 */
private function construirePrompt(array $objectifs, array $taches): string    {
        $total      = count($objectifs);
        $termines   = 0;
        $enCours    = 0;
        $abandonnes = 0;
        $enPause    = 0;

        foreach ($objectifs as $o) {
            match ($o->getStatut()) {
                'complete'  => $termines++,
                'en_cours'  => $enCours++,
                'abandonne' => $abandonnes++,
                'en_pause'  => $enPause++,
                default     => null
            };
        }

        $prompt  = "=== PROFIL APPRENANT (données réelles) ===\n";
        $prompt .= "Plateforme : Fluently (apprentissage des langues)\n";
        $prompt .= "Total objectifs : {$total} ";
        $prompt .= "({$termines} terminés, {$enCours} en cours, {$abandonnes} abandonnés, {$enPause} en pause)\n\n";

        $prompt .= "=== DÉTAIL DES OBJECTIFS ===\n";
        foreach ($objectifs as $objectif) {
            $tachesObj       = $objectif->getTaches();
            $nbTaches        = count($tachesObj);
            $tachesTerminees = 0;
            $tachesBloquees  = 0;

            foreach ($tachesObj as $t) {
                if ($t->getStatut() === 'terminee') $tachesTerminees++;
                if ($t->getStatut() === 'bloquee')  $tachesBloquees++;
            }

            $progression = $nbTaches > 0
                ? round(($tachesTerminees / $nbTaches) * 100)
                : 0;

            $enRetard = $objectif->getDateFin()
                && $objectif->getStatut() !== 'complete'
                && $objectif->getDateFin() < new \DateTime();

            $prompt .= "\n[OBJECTIF #{$objectif->getId()}] {$objectif->getTitre()}\n";
            $prompt .= "  Statut      : {$objectif->getStatut()}\n";
            $prompt .= "  Description : {$objectif->getDescription()}\n";
            $prompt .= "  Progression : {$progression}% ({$tachesTerminees}/{$nbTaches} tâches terminées)\n";

            if ($objectif->getDateDeb() && $objectif->getDateFin()) {
                $prompt .= "  Période     : du {$objectif->getDateDeb()->format('d/m/Y')} ";
                $prompt .= "au {$objectif->getDateFin()->format('d/m/Y')}\n";
            }

            if ($enRetard) {
                $prompt .= "  !! EN RETARD sur la date prévue\n";
            }
            if ($tachesBloquees > 0) {
                $prompt .= "  !! {$tachesBloquees} tâche(s) bloquée(s)\n";
            }

            if ($nbTaches > 0) {
                $prompt .= "  Tâches :\n";
                foreach ($tachesObj as $t) {
                    $prompt .= "    - [{$t->getStatut()}] {$t->getTitre()} (priorité: {$t->getPriorite()})\n";
                }
            }
        }

        $prompt .= "\n=== DEMANDE ===\n";
        $prompt .= "Propose 3 objectifs d'apprentissage de langues recommandés et personnalisés.\n";
        $prompt .= "Justifie chaque recommandation en te basant sur les objectifs existants ci-dessus.\n";
        $prompt .= "Réponds UNIQUEMENT en JSON valide.\n";

        return $prompt;
    }

// modeDemo()
/**
 * @param Objectif[] $objectifs
 * @return array<string, mixed>
 */
private function modeDemo(array $objectifs): array
    {
        $termines = count(array_filter($objectifs, fn($o) => $o->getStatut() === 'complete'));
        $total    = count($objectifs);
        $taux     = $total > 0 ? round(($termines / $total) * 100) : 0;

        $niveau = match(true) {
            $taux >= 70 => 'avancé',
            $taux >= 40 => 'intermédiaire',
            default     => 'débutant'
        };

        $titresExistants = implode(', ', array_map(fn($o) => $o->getTitre(), $objectifs));

        return [
            'analyse'           => "Vous avez {$total} objectifs dont {$termines} terminés ({$taux}% de complétion). Vos objectifs actuels ({$titresExistants}) montrent une belle progression. Voici les recommandations basées sur votre historique.",
            'niveau'            => $niveau,
            'score_progression' => $taux,
            'points_forts'      => [
                "{$termines} objectif(s) complété(s) avec succès",
                'Régularité démontrée dans le suivi',
            ],
            'axes_amelioration' => [
                'Réduire les objectifs abandonnés',
                'Augmenter la vitesse de complétion des tâches',
            ],
            'recommandations' => [
                [
                    'rang'           => 1,
                    'titre'          => 'Pratiquer la conversation quotidienne',
                    'description'    => 'Suite naturelle de vos objectifs actuels : passer de la théorie à la pratique orale intensive.',
                    'pourquoi'       => "Basé sur vos {$total} objectifs existants, il est temps de consolider par la pratique orale.",
                    'difficulte'     => 'moyen',
                    'duree_semaines' => 3,
                    'priorite'       => 'haute',
                    'taches'         => [
                        ['titre' => 'Pratiquer 15 min de conversation par jour', 'priorite' => 'haute'],
                        ['titre' => 'Regarder 2 vidéos en langue cible par semaine', 'priorite' => 'moyenne'],
                        ['titre' => 'Tenir un journal audio en langue cible', 'priorite' => 'basse'],
                    ],
                    'emoji' => '🗣️'
                ],
                [
                    'rang'           => 2,
                    'titre'          => 'Maîtriser 500 mots de vocabulaire courant',
                    'description'    => 'Élargir le vocabulaire pour fluidifier l\'expression et la compréhension.',
                    'pourquoi'       => 'Un vocabulaire solide accélère la progression sur tous vos objectifs actuels.',
                    'difficulte'     => 'facile',
                    'duree_semaines' => 4,
                    'priorite'       => 'haute',
                    'taches'         => [
                        ['titre' => 'Apprendre 20 nouveaux mots par jour avec Anki', 'priorite' => 'haute'],
                        ['titre' => 'Révisions espacées chaque matin (10 min)', 'priorite' => 'haute'],
                        ['titre' => 'Écrire des phrases avec les mots appris', 'priorite' => 'moyenne'],
                    ],
                    'emoji' => '📚'
                ],
                [
                    'rang'           => 3,
                    'titre'          => 'Comprendre des textes authentiques',
                    'description'    => 'Lire des articles et blogs réels dans la langue cible pour atteindre un niveau naturel.',
                    'pourquoi'       => 'Étape logique après avoir posé les bases avec vos objectifs précédents.',
                    'difficulte'     => 'difficile',
                    'duree_semaines' => 6,
                    'priorite'       => 'moyenne',
                    'taches'         => [
                        ['titre' => 'Lire 1 article par jour dans la langue cible', 'priorite' => 'haute'],
                        ['titre' => 'Annoter les mots inconnus et les réviser', 'priorite' => 'moyenne'],
                        ['titre' => 'Résumer chaque article lu en quelques phrases', 'priorite' => 'basse'],
                    ],
                    'emoji' => '📰'
                ]
            ]
        ];
    }

// calculerStats()
/**
 * @param Objectif[] $objectifs
 * @return array<string, int|float>
 */
private function calculerStats(array $objectifs): array     {
        $total      = count($objectifs);
        $termines   = 0;
        $enCours    = 0;
        $abandonnes = 0;
        $enPause    = 0;
        $totalTaches      = 0;
        $tachesTerminees  = 0;
        $tachesBloquees   = 0;

        foreach ($objectifs as $objectif) {
            match ($objectif->getStatut()) {
                'complete'  => $termines++,
                'en_cours'  => $enCours++,
                'abandonne' => $abandonnes++,
                'en_pause'  => $enPause++,
                default     => null
            };

            foreach ($objectif->getTaches() as $tache) {
                $totalTaches++;
                if ($tache->getStatut() === 'terminee') $tachesTerminees++;
                if ($tache->getStatut() === 'bloquee')  $tachesBloquees++;
            }
        }

        return [
            'total'           => $total,
            'termines'        => $termines,
            'enCours'         => $enCours,
            'abandonnes'      => $abandonnes,
            'enPause'         => $enPause,
            'tauxCompletion'  => $total > 0 ? round(($termines / $total) * 100) : 0,
            'totalTaches'     => $totalTaches,
            'tachesTerminees' => $tachesTerminees,
            'tachesBloquees'  => $tachesBloquees,
            'tauxTaches'      => $totalTaches > 0 ? round(($tachesTerminees / $totalTaches) * 100) : 0,
        ];
    }
}