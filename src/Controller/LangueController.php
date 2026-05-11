<?php


namespace App\Controller;


use App\Entity\Langue;
use App\Entity\User;
use App\Form\LangueType;
use App\Repository\CoursRepository;
use App\Repository\LangueRepository;
use App\Repository\NiveauRepository;
use App\Repository\TestPassageRepository;
use App\Repository\UserProgressRepository;
use App\Service\LanguageStatsService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;


#[Route('/Langue')]
final class LangueController extends AbstractController
{
    #[Route('/', name: 'app_langue_index', methods: ['GET'])]
    public function indexEtudiant(Request $request, LangueRepository $langueRepository): Response
    {
        $search = $request->query->get('search', '');
        $sortBy = $request->query->get('sortBy', '');
        $search = is_string($search) ? $search : '';
        $langues = $langueRepository->findActiveLangues($search);
        if ($sortBy === 'popularite') {
            usort($langues, fn($a, $b) => $b->getPopularite() <=> $a->getPopularite());
        } elseif ($sortBy === 'nom') {
            usort($langues, function($a, $b) {
                $nomA = (string) $a->getNom();
                $nomB = (string) $b->getNom();
                return strcasecmp($nomA, $nomB);
            });
        }
        return $this->render('langue/index.html.twig', [
            'langues' => $langues,
            'search'  => $search,
            'sortBy'  => $sortBy,
        ]);
    }
    #[Route('/drapeau/{filename}', name: 'app_drapeau_show', methods: ['GET'])]
public function showDrapeau(string $filename): Response
{
    $uploadDir = 'C:/xampp/htdocs/fluently/public/uploads/images/langues/';
    $filePath = $uploadDir . $filename;
   
    if (!file_exists($filePath)) {
        throw $this->createNotFoundException('Drapeau non trouvé');
    }
   
    return $this->file($filePath);
}
    private function getTypedUser(): ?User
    {
        $user = $this->getUser();
        if (!$user instanceof User) {
            return null;
        }
        return $user;
    }
   
    #[Route('/{id}/apprentissage', name: 'app_langue_apprentissage', methods: ['GET'])]
    public function apprentissage(
        Langue $langue,
        CoursRepository $coursRepository,
        NiveauRepository $niveauRepository,
        Request $request,
        EntityManagerInterface $em,
        TestPassageRepository $testPassageRepository,
        UserProgressRepository $progressRepository
    ): Response {
        $user = $this->getTypedUser();
        if (!$user) {
            $this->addFlash('error', 'Vous devez être connecté pour accéder à cette page.');
            return $this->redirectToRoute('app_login');
        }


        // ── Charger TOUS les cours de la langue (tous niveaux) ────────
        $tousLesNiveaux = $niveauRepository->findBy(['Id_langue' => $langue], ['ordre' => 'ASC']);
        $tousLesCours = [];
        foreach ($tousLesNiveaux as $niv) {
            $coursDuNiveau = $coursRepository->findBy(['Id_niveau' => $niv], ['numero' => 'ASC']);
            foreach ($coursDuNiveau as $c) {
                $tousLesCours[] = $c;
            }
        }


        // ── Récupérer TOUTES les progressions de cet user pour cette langue ──
        // APRÈS — utiliser findMostRecentByUserAndLangue, exactement comme MesTestsController
        $progress = $progressRepository->findMostRecentByUserAndLangue($user, $langue);


        $toutesProgresses = $progressRepository->findBy([
            'user'   => $user,
            'langue' => $langue,
        ]);


        // Indexer par niveau_id pour accès rapide dans le template
        $progressParNiveau = [];
        foreach ($toutesProgresses as $prog) {
            if ($prog->getNiveauActuel()) {
                // Garder le plus récent par niveau_id
                $nid = $prog->getNiveauActuel()->getId();
                if (!isset($progressParNiveau[$nid])) {
                    $progressParNiveau[$nid] = $prog;
                } else {
                    $existingDate = $progressParNiveau[$nid]->getDateDerniereActivite();
                    $newDate = $prog->getDateDerniereActivite();
                    if ($newDate && (!$existingDate || $newDate > $existingDate)) {
                        $progressParNiveau[$nid] = $prog;
                    }
                }
            }
        }


        // Si aucune progression ET aucun niveau connu → initialiser sur le 1er niveau
        if (!$progress && !empty($tousLesNiveaux)) {
            $premierNiveau = $tousLesNiveaux[0];
            $progress = new \App\Entity\UserProgress();
            $progress->setUser($user);
            $progress->setLangue($langue);
            $progress->setNiveauActuel($premierNiveau);
            $progress->setDernierNumeroCours(0);
            $progress->setTestNiveauComplete(false);
            $progress->setDateDerniereActivite(new \DateTimeImmutable());
            $em->persist($progress);
            $em->flush();
            $progressParNiveau[$premierNiveau->getId()] = $progress;
        }
       


        // ── Test de niveau ─────────────────────────────────────────────
        $testNiveau = $em->getRepository(\App\Entity\Test::class)
            ->createQueryBuilder('t')
            ->andWhere('t.langue = :langue')
            ->andWhere('t.type = :type')
            ->setParameter('langue', $langue)
            ->setParameter('type', 'Test de niveau')
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();


        $dernierPassage = null;
        $niveauObtenu = null;
        $niveauUtilisateur = $progress ? $progress->getNiveauActuel() : null;


        if ($testNiveau) {
            $dernierPassage = $testPassageRepository->findOneBy(
                ['test' => $testNiveau, 'user' => $user, 'statut' => 'termine'],
                ['dateFin' => 'DESC']
            );


            if ($dernierPassage && method_exists($dernierPassage, 'getResultat')) {
                $score = $dernierPassage->getResultat();
                if ($score !== null) {
                    $niveauObtenuTest = $this->determinerNiveau($score);
                    $niveauTest = $niveauRepository->findByLangueEtDifficulte($langue, $niveauObtenuTest);


                    if (!$niveauTest) {
                        $ordreNiveaux = ['A1'=>1,'A2'=>2,'B1'=>3,'B2'=>4,'C1'=>5,'C2'=>6];
                        $seuilsMin    = ['A1'=>0,'A2'=>50,'B1'=>60,'B2'=>70,'C1'=>80,'C2'=>90];
                        $seuilsMax    = ['A1'=>49,'A2'=>59,'B1'=>69,'B2'=>79,'C1'=>89,'C2'=>100];


                        $niveauTest = new \App\Entity\Niveau();
                        $niveauTest->setIdLangue($langue);
                        $niveauTest->setDifficulte($niveauObtenuTest);
                        $niveauTest->setOrdre($ordreNiveaux[$niveauObtenuTest]);
                        $niveauTest->setSeuilScoreMin($seuilsMin[$niveauObtenuTest]);
                        $niveauTest->setSeuilScoreMax($seuilsMax[$niveauObtenuTest]);
                        $niveauTest->setImageCouverture('default.jpg');
                        $niveauTest->setTitre($langue->getNom() . ' - Niveau ' . $niveauObtenuTest);
                        $niveauTest->setDescription('Niveau ' . $niveauObtenuTest . ' pour ' . $langue->getNom());
                        $em->persist($niveauTest);
                        $em->flush();
                    }


                    // Mettre à jour la progression
                    $progressNiveauTest = $progressParNiveau[$niveauTest->getId()] ?? null;


                    if (!$progressNiveauTest) {
                        $progressNiveauTest = new \App\Entity\UserProgress();
                        $progressNiveauTest->setUser($user);
                        $progressNiveauTest->setLangue($langue);
                        $progressNiveauTest->setNiveauActuel($niveauTest);
                        $progressNiveauTest->setDernierNumeroCours(0);
                        $progressNiveauTest->setTestNiveauComplete(true);
                        $progressNiveauTest->setDateDerniereActivite(new \DateTimeImmutable());
                        $em->persist($progressNiveauTest);
                        $em->flush();
                        $progressParNiveau[$niveauTest->getId()] = $progressNiveauTest;
                    } elseif (!$progressNiveauTest->isTestNiveauComplete()) {
                        $progressNiveauTest->setTestNiveauComplete(true);
                        $progressNiveauTest->setDateDerniereActivite(new \DateTimeImmutable());
                        $em->flush();
                    }


                    $niveauUtilisateur = $niveauTest;
                    // ← CORRECTION ICI : extraire le CODE CECRL, pas la difficulté complète
                    $niveauObtenu = $niveauObtenuTest; // ← Utiliser le code déjà extrait !
                }
            }
        }


        // ← SI AUCUN TEST DE NIVEAU N'A ÉTÉ PASSÉ, extraire le code de la progression
        if ($niveauObtenu === null && $niveauUtilisateur) {
            $difficulte = $niveauUtilisateur->getDifficulte();
            foreach (['C2','C1','B2','B1','A2','A1'] as $code) {
                if (strpos(strtoupper($difficulte), $code) !== false) {
                    $niveauObtenu = $code;
                    break;
                }
            }
            if (!$niveauObtenu) {
                $niveauObtenu = $difficulte;
            }
        }


        // ── Temps de session ───────────────────────────────────────────
        $session = $request->getSession();
        $tempsTotalSession = $session->get('temps_total_' . $langue->getId(), 0);
        $tempsTotal = round($tempsTotalSession / 60);


        // ── Stats globales ─────────────────────────────────────────────
        $coursCompletes = $progress ? ($progress->getDernierNumeroCours() ?? 0) : 0;
        $niveauActuel = $progress ? $progress->getNiveauActuel() : null;
        $totalCoursNiveau = 0;
        if ($niveauActuel) {
            $totalCoursNiveau = $coursRepository->countByNiveau($niveauActuel);
        }
        $progression = $totalCoursNiveau > 0 ? ($coursCompletes / $totalCoursNiveau * 100) : 0;


        // ── Recommandations ────────────────────────────────────────────
        $pointsFaibles = [];
        $recommandations = [];
        if ($niveauUtilisateur) {
            $niveauNom = $niveauUtilisateur->getDifficulte();
            // Extraire seulement le code pour les recommandations
            $codeNiveau = '';
            foreach (['C2','C1','B2','B1','A2','A1'] as $code) {
                if (strpos(strtoupper($niveauNom), $code) !== false) {
                    $codeNiveau = $code;
                    break;
                }
            }
           
            if ($codeNiveau === 'A1') {
                $pointsFaibles = ['prononciation', 'verbes de base', 'vocabulaire quotidien'];
                $recommandations = [
                    ['type'=>'video','titre'=>'Prononciation anglaise pour débutants','url'=>'#','icon'=>'🎥'],
                    ['type'=>'exercice','titre'=>'Quiz sur les verbes "to be" et "to have"','icon'=>'✏️'],
                    ['type'=>'article','titre'=>'Les 50 mots essentiels en anglais','icon'=>'📖'],
                ];
            } elseif ($codeNiveau === 'A2') {
                $pointsFaibles = ['temps du passé', 'prépositions', 'vocabulaire des voyages'];
                $recommandations = [
                    ['type'=>'video','titre'=>'Le prétérit simple expliqué','url'=>'#','icon'=>'🎥'],
                    ['type'=>'exercice','titre'=>'Exercices sur les prépositions','icon'=>'✏️'],
                    ['type'=>'video','titre'=>'Vocabulaire pour voyager','url'=>'#','icon'=>'🎥'],
                ];
            } elseif ($codeNiveau === 'B1') {
                $pointsFaibles = ['conditionnel', 'phrases complexes', 'vocabulaire professionnel'];
                $recommandations = [
                    ['type'=>'video','titre'=>'Le conditionnel en anglais','url'=>'#','icon'=>'🎥'],
                    ['type'=>'article','titre'=>'Comment structurer une phrase complexe','icon'=>'📖'],
                    ['type'=>'exercice','titre'=>'Vocabulaire des affaires','icon'=>'✏️'],
                ];
            } else {
                $pointsFaibles = ['expressions idiomatiques', 'nuances de sens', 'anglais formel'];
                $recommandations = [
                    ['type'=>'video','titre'=>'10 expressions idiomatiques à connaître','url'=>'#','icon'=>'🎥'],
                    ['type'=>'article','titre'=>'Différence entre "say", "tell" et "speak"','icon'=>'📖'],
                    ['type'=>'exercice','titre'=>'Anglais formel vs informel','icon'=>'✏️'],
                ];
            }
        }


        // ── Tests de la langue ─────────────────────────────────────────
        $testsLangue = $em->getRepository(\App\Entity\Test::class)
            ->findBy(['langue' => $langue]);


        return $this->render('langue/apprentissage.html.twig', [
            'langue'             => $langue,
            'allCours'           => $tousLesCours,
            'lastCompletedId'    => $progress ? ($progress->getDernierNumeroCours() ?? 0) : 0,
            'testNiveau'         => $testNiveau,
            'dernierPassage'     => $dernierPassage,
            'niveauUtilisateur'  => $niveauUtilisateur,
            'niveauObtenu'       => $niveauObtenu,  // ← Maintenant c'est le code CECRL (A1, B2, etc.)
            'progress'           => $progress,
            'progressParNiveau'  => $progressParNiveau,
            'user'               => $user,
            'testsLangue'        => $testsLangue,
            'tempsTotal'         => $tempsTotal,
            'coursCompletes'     => $coursCompletes,
            'totalCoursNiveau'   => $totalCoursNiveau,
            'progression'        => $progression,
            'pointsFaibles'      => $pointsFaibles,
            'recommandations'    => $recommandations,
        ]);
    }


    private function determinerNiveau(float $score): string
    {
        if ($score >= 90) return 'C2';
        if ($score >= 80) return 'C1';
        if ($score >= 70) return 'B2';
        if ($score >= 60) return 'B1';
        if ($score >= 50) return 'A2';
        return 'A1';
    }
    #[Route('/admin', name: 'app_admin_langue_index', methods: ['GET'])]
    public function indexAdmin(Request $request, LangueRepository $langueRepository): Response
    {
        $search = $request->query->get('search', '');
        $active = $request->query->get('active', '');
        $search = is_string($search) ? $search : '';
        $active = is_string($active) ? $active : '';
        $langues = $langueRepository->findLanguesFiltrees($search, $active);
        return $this->render('langue/index_admin.html.twig', [
            'langues' => $langues,
        ]);
    }


   


#[Route('/admin/new', name: 'app_admin_langue_new', methods: ['GET', 'POST'])]
public function new(Request $request, EntityManagerInterface $em): Response
{
    $langue = new Langue();
    $form = $this->createForm(LangueType::class, $langue, ['is_edit' => false]);
    $form->handleRequest($request);
   
    if ($form->isSubmitted() && $form->isValid()) {
        // Récupérer le fichier uploadé
        $drapeauFile = $form->get('drapeauFile')->getData();
       
        if ($drapeauFile instanceof UploadedFile) {
            // Créer le dossier s'il n'existe pas
            $uploadDir = 'C:/xampp/htdocs/fluently/public/uploads/images/langues/';
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0777, true);
            }
           
            // Générer un nom unique
            $originalName = pathinfo($drapeauFile->getClientOriginalName(), PATHINFO_FILENAME);
            $extension = $drapeauFile->guessExtension();
            $newFilename = uniqid() . '_' . $originalName . '.' . $extension;
           
            // Déplacer le fichier
            $drapeauFile->move($uploadDir, $newFilename);
           
            // Stocker le chemin COMPLET (comme JavaFX)
            $langue->setDrapeau('/uploads/images/langues/' . $newFilename);
        }
       
        if (!$langue->getDateAjout()) {
            $langue->setDateAjout(new \DateTime());
        }
       
        $em->persist($langue);
        $em->flush();
       
        $this->addFlash('success', 'Langue créée avec succès !');
        return $this->redirectToRoute('app_admin_langue_index');
    }
   
    return $this->render('langue/new.html.twig', [
        'langue' => $langue,
        'form'   => $form->createView(),
    ]);
}


#[Route('/admin/{id}/edit', name: 'app_admin_langue_edit', methods: ['GET', 'POST'])]
public function edit(Request $request, Langue $langue, EntityManagerInterface $em): Response
{
    $oldDrapeau = $langue->getDrapeau(); // Sauvegarder l'ancien chemin
    $form = $this->createForm(LangueType::class, $langue, ['is_edit' => true]);
    $form->handleRequest($request);
   
    if ($form->isSubmitted() && $form->isValid()) {
        $drapeauFile = $form->get('drapeauFile')->getData();
       
        if ($drapeauFile instanceof UploadedFile) {
            // Supprimer l'ancien fichier
            if ($oldDrapeau) {
                $oldPath = 'C:/xampp/htdocs/fluently/public' . $oldDrapeau;
                if (file_exists($oldPath)) {
                    unlink($oldPath);
                }
            }
           
            // Créer le dossier s'il n'existe pas
            $uploadDir = 'C:/xampp/htdocs/fluently/public/uploads/images/langues/';
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0777, true);
            }
           
            // Générer un nom unique
            $originalName = pathinfo($drapeauFile->getClientOriginalName(), PATHINFO_FILENAME);
            $extension = $drapeauFile->guessExtension();
            $newFilename = uniqid() . '_' . $originalName . '.' . $extension;
           
            // Déplacer le fichier
            $drapeauFile->move($uploadDir, $newFilename);
           
            // Stocker le chemin COMPLET
            $langue->setDrapeau('/uploads/images/langues/' . $newFilename);
        }
       
        $em->flush();
        $this->addFlash('success', 'Langue modifiée avec succès.');
        return $this->redirectToRoute('app_admin_langue_index');
    }
   
    return $this->render('langue/edit.html.twig', [
        'langue' => $langue,
        'form'   => $form->createView(),
    ]);
}


    #[Route('/admin/{id}/delete', name: 'app_admin_langue_delete', methods: ['POST'])]
    public function delete(Request $request, Langue $langue, EntityManagerInterface $em): Response
    {
        $token = $request->request->get('_token');
        $token = is_string($token) ? $token : '';  
        if ($this->isCsrfTokenValid('delete' . $langue->getId(), $token)) {
            $em->remove($langue);
            $em->flush();
            $this->addFlash('success', 'Langue supprimée avec succès.');
        }
        return $this->redirectToRoute('app_admin_langue_index');
    }


    #[Route('/{id}', name: 'app_langue_show', methods: ['GET'])]
    public function show(Langue $langue): Response
    {
        return $this->render('langue/show.html.twig', [
            'langue' => $langue,
        ]);
    }


    #[Route('/admin/stats', name: 'app_admin_langue_stats', methods: ['GET'])]
    public function statsAdmin(LanguageStatsService $statsService): Response
    {
        $globalLanguages = $statsService->getTopLanguages(20);
        return $this->render('langue/stats_admin.html.twig', [
            'globalLanguages' => $globalLanguages,
        ]);
    }
}
