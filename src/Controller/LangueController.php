<?php

namespace App\Controller;

use App\Entity\Langue;
use App\Form\LangueType;
use App\Repository\LangueRepository;
use App\Repository\CoursRepository;
use App\Repository\NiveauRepository;
use App\Repository\TestPassageRepository;
use App\Repository\UserProgressRepository;
use App\Service\LanguageStatsService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\String\Slugger\SluggerInterface;

#[Route('/Langue')]
final class LangueController extends AbstractController
{
    // FRONT ÉTUDIANT - Liste publique des langues actives
    #[Route('/', name: 'app_langue_index', methods: ['GET'])]
    public function indexEtudiant(Request $request, LangueRepository $langueRepository): Response
    {
        $search = $request->query->get('search', '');
        $sortBy = $request->query->get('sortBy', '');

        $query = $langueRepository->createQueryBuilder('l')
            ->where('l.is_active = :active')
            ->setParameter('active', true);

        if ($search) {
            $query->andWhere('LOWER(l.nom) LIKE :search')
                  ->setParameter('search', '%' . strtolower($search) . '%');
        }

        $langues = $query->getQuery()->getResult();

        if ($sortBy === 'popularite') {
            usort($langues, fn($a, $b) => $b->getPopularite() <=> $a->getPopularite());
        } elseif ($sortBy === 'nom') {
            usort($langues, fn($a, $b) => strcasecmp($a->getNom(), $b->getNom()));
        }

        return $this->render('langue/index.html.twig', [
            'langues' => $langues,
            'search'  => $search,
            'sortBy'  => $sortBy,
        ]);
    }

    // FRONT ÉTUDIANT - Parcours d'apprentissage (VERSION CORRIGÉE)
   // FRONT ÉTUDIANT - Parcours d'apprentissage (VERSION CORRIGÉE)
#[Route('/{id}/apprentissage', name: 'app_langue_apprentissage', methods: ['GET'])]
public function apprentissage(
    Langue $langue, 
    CoursRepository $coursRepository, 
    NiveauRepository $niveauRepository,
    Request $request, 
    EntityManagerInterface $em,
    TestPassageRepository $testPassageRepository,
    UserProgressRepository $progressRepository
): Response
{
    // Récupérer tous les cours de cette langue
    $tousLesCours = $coursRepository->createQueryBuilder('c')
        ->leftJoin('c.Id_niveau', 'n')
        ->where('n.Id_langue = :langue')
        ->setParameter('langue', $langue)
        ->orderBy('n.ordre', 'ASC')
        ->addOrderBy('c.numero', 'ASC')
        ->getQuery()
        ->getResult();

    // Récupérer l'utilisateur connecté
    $session = $request->getSession();
    $userId = $session->get('user_id');
    $user = $userId ? $em->getRepository(\App\Entity\User::class)->find($userId) : null;

    if (!$user) {
        $this->addFlash('error', 'Vous devez être connecté pour accéder à cette page.');
        return $this->redirectToRoute('app_login');
    }

    // Récupérer ou créer la progression
    $progress = $progressRepository->findOrCreate($user, $langue);

    // Récupérer le test de niveau
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

    // 🔴 **CHANGEMENT IMPORTANT ICI :**
    // On utilise d'abord le niveau de la progression, puis on le met à jour avec le test si nécessaire
    $niveauUtilisateur = $progress->getNiveauActuel();
    
    if ($niveauUtilisateur) {
        $niveauObtenu = $niveauUtilisateur->getDifficulte();
    }

    if ($testNiveau) {
        $dernierPassage = $testPassageRepository->findOneBy(
            [
                'test' => $testNiveau,
                'user' => $user,
                'statut' => 'termine'
            ],
            ['dateFin' => 'DESC']
        );

        if ($dernierPassage && $dernierPassage->getResultat() !== null) {
            $score = $dernierPassage->getResultat();
            $niveauObtenuTest = $this->determinerNiveau($score);
            
            // Chercher le niveau dans la base de données
            $niveauTest = $niveauRepository->findOneBy([
                'Id_langue' => $langue,
                'difficulte' => $niveauObtenuTest
            ]);

            // Si le niveau n'existe pas, le créer automatiquement
            if (!$niveauTest) {
                $ordreNiveaux = ['A1' => 1, 'A2' => 2, 'B1' => 3, 'B2' => 4, 'C1' => 5, 'C2' => 6];
                $seuilsMin = ['A1' => 0, 'A2' => 50, 'B1' => 60, 'B2' => 70, 'C1' => 80, 'C2' => 90];
                $seuilsMax = ['A1' => 49, 'A2' => 59, 'B1' => 69, 'B2' => 79, 'C1' => 89, 'C2' => 100];
                
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

            // Mettre à jour la progression si le test est terminé et que le niveau est différent
            if (!$progress->isTestNiveauComplete() || 
                ($progress->getNiveauActuel() && $progress->getNiveauActuel()->getId() !== $niveauTest->getId())) {
                
                $progress->setTestNiveauComplete(true);
                $progress->setNiveauActuel($niveauTest);
                $progress->setDernierNumeroCours(0);
                $progress->setDateDerniereActivite(new \DateTime());
                $em->flush();
                
                // Mettre à jour les variables pour le template
                $niveauUtilisateur = $niveauTest;
                $niveauObtenu = $niveauTest->getDifficulte();
            }
        }
    }

    // 🟢 **VÉRIFICATION DU PASSAGE AU NIVEAU SUPÉRIEUR**
    if ($progress->getNiveauActuel()) {
        $niveauActuelProgress = $progress->getNiveauActuel();
        $coursRepo = $em->getRepository(\App\Entity\Cours::class);
        $totalCoursNiveau = $coursRepo->count([
            'Id_niveau' => $niveauActuelProgress
        ]);
        
        // Si tous les cours sont terminés, passer au niveau suivant
        if ($totalCoursNiveau > 0 && $progress->getDernierNumeroCours() >= $totalCoursNiveau) {
            $niveauSuivant = $niveauRepository->findOneBy([
                'Id_langue' => $langue,
                'ordre' => $niveauActuelProgress->getOrdre() + 1
            ]);
            
            if ($niveauSuivant) {
                $progress->setNiveauActuel($niveauSuivant);
                $progress->setDernierNumeroCours(0);
                $progress->setDateDerniereActivite(new \DateTime());
                $em->flush();
                
                // Mettre à jour les variables pour le template
                $niveauUtilisateur = $niveauSuivant;
                $niveauObtenu = $niveauSuivant->getDifficulte();
                
                $this->addFlash('success', '🎉 Félicitations ! Vous passez au niveau ' . $niveauSuivant->getDifficulte() . ' !');
            }
        }
    }

    // Grouper les cours par niveau pour le template
    $coursParNiveau = [];
    foreach ($tousLesCours as $c) {
        $niveauId = $c->getIdNiveau()->getId();
        if (!isset($coursParNiveau[$niveauId])) {
            $coursParNiveau[$niveauId] = [
                'niveau' => $c->getIdNiveau(),
                'cours' => []
            ];
        }
        $coursParNiveau[$niveauId]['cours'][] = $c;
    }

    // Trier les cours par numéro pour chaque niveau
    foreach ($coursParNiveau as &$data) {
        usort($data['cours'], fn($a, $b) => $a->getNumero() <=> $b->getNumero());
    }

    return $this->render('langue/apprentissage.html.twig', [
        'langue'             => $langue,
        'allCours'          => $tousLesCours,
        'coursParNiveau'    => $coursParNiveau,
        'lastCompletedId'   => $progress ? $progress->getDernierNumeroCours() : 0,
        'testNiveau'        => $testNiveau,
        'dernierPassage'    => $dernierPassage,
        'niveauUtilisateur' => $niveauUtilisateur,
        'niveauObtenu'      => $niveauObtenu,
        'progress'          => $progress,
        'user'              => $user,
    ]);
}
     
    private function determinerNiveau(float $score): string
    {
        if ($score >= 90) return 'C2';
        if ($score >= 80) return 'C1';
        if ($score >= 70) return 'B2';
        if ($score >= 60) return 'B1';
        if ($score >= 50) return 'A2';
        return 'A1'; // Score < 50% ou score = 0%
    }

    // BACK-OFFICE ADMIN - Liste complète
    #[Route('/admin', name: 'app_admin_langue_index', methods: ['GET'])]
    public function indexAdmin(Request $request, LangueRepository $langueRepository): Response
    {
        $search = $request->query->get('search', '');
        $active = $request->query->get('active', '');

        $query = $langueRepository->createQueryBuilder('l');

        if ($search) {
            $query->andWhere('LOWER(l.nom) LIKE :search')
                  ->setParameter('search', '%' . strtolower($search) . '%');
        }

        if ($active !== '') {
            $query->andWhere('l.is_active = :active')
                  ->setParameter('active', (bool)$active);
        }

        $langues = $query->getQuery()->getResult();

        return $this->render('langue/index_admin.html.twig', [
            'langues' => $langues,
        ]);
    }

    // ADMIN - Création
    #[Route('/admin/new', name: 'app_admin_langue_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $em, SluggerInterface $slugger): Response
    {
        $langue = new Langue();
        $form = $this->createForm(LangueType::class, $langue, [
            'is_edit' => false,
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $drapeauFile = $form->get('drapeauFile')->getData();
            if ($drapeauFile) {
                $originalFilename = pathinfo($drapeauFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $drapeauFile->guessExtension();

                try {
                    $drapeauFile->move(
                        $this->getParameter('kernel.project_dir') . '/public/images/langues',
                        $newFilename
                    );
                    $langue->setDrapeau($newFilename);
                } catch (FileException $e) {
                    $this->addFlash('error', 'Erreur lors de l\'upload du drapeau : ' . $e->getMessage());
                }
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

    // ADMIN - Modification
    #[Route('/admin/{id}/edit', name: 'app_admin_langue_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Langue $langue, EntityManagerInterface $em, SluggerInterface $slugger): Response
    {
        $form = $this->createForm(LangueType::class, $langue, ['is_edit' => true]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $drapeauFile = $form->get('drapeauFile')->getData();
            if ($drapeauFile) {
                if ($langue->getDrapeau()) {
                    $oldPath = $this->getParameter('kernel.project_dir') . '/public/images/langues/' . $langue->getDrapeau();
                    if (file_exists($oldPath)) {
                        unlink($oldPath);
                    }
                }

                $originalFilename = pathinfo($drapeauFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $drapeauFile->guessExtension();

                try {
                    $drapeauFile->move(
                        $this->getParameter('kernel.project_dir') . '/public/images/langues',
                        $newFilename
                    );
                    $langue->setDrapeau($newFilename);
                } catch (FileException $e) {
                    $this->addFlash('error', 'Erreur lors du remplacement du drapeau : ' . $e->getMessage());
                }
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

    // ADMIN - Suppression
    #[Route('/admin/{id}/delete', name: 'app_admin_langue_delete', methods: ['POST'])]
    public function delete(Request $request, Langue $langue, EntityManagerInterface $em): Response
    {
        if ($this->isCsrfTokenValid('delete' . $langue->getId(), $request->request->get('_token'))) {
            if ($langue->getDrapeau()) {
                $filePath = $this->getParameter('kernel.project_dir') . '/public/images/langues/' . $langue->getDrapeau();
                if (file_exists($filePath)) {
                    unlink($filePath);
                }
            }

            $em->remove($langue);
            $em->flush();

            $this->addFlash('success', 'Langue supprimée avec succès.');
        }

        return $this->redirectToRoute('app_admin_langue_index');
    }

    // SHOW
    #[Route('/{id}', name: 'app_langue_show', methods: ['GET'])]
    public function show(Langue $langue): Response
    {
        return $this->render('langue/show.html.twig', [
            'langue' => $langue,
        ]);
    }

    // STATS ADMIN
    #[Route('/admin/stats', name: 'app_admin_langue_stats', methods: ['GET'])]
    public function statsAdmin(LanguageStatsService $statsService): Response
    {
        $globalLanguages = $statsService->getTopLanguages(20);
        return $this->render('langue/stats_admin.html.twig', [
            'globalLanguages' => $globalLanguages,
        ]);
    }
}