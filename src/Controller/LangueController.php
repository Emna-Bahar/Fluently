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

#[Route('/Langue')]
final class LangueController extends AbstractController
{
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
        $tousLesCours = $coursRepository->createQueryBuilder('c')
            ->leftJoin('c.Id_niveau', 'n')
            ->where('n.Id_langue = :langue')
            ->setParameter('langue', $langue)
            ->orderBy('n.ordre', 'ASC')
            ->addOrderBy('c.numero', 'ASC')
            ->getQuery()
            ->getResult();

        // ✅ FIXED: use Symfony security instead of session
        $user = $this->getUser();

        if (!$user) {
            $this->addFlash('error', 'Vous devez être connecté pour accéder à cette page.');
            return $this->redirectToRoute('app_login');
        }

        $progress = $progressRepository->findOrCreate($user, $langue);

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
        $niveauUtilisateur = $progress->getNiveauActuel();

        if ($niveauUtilisateur) {
            $niveauObtenu = $niveauUtilisateur->getDifficulte();
        }

        if ($testNiveau) {
            $dernierPassage = $testPassageRepository->findOneBy(
                ['test' => $testNiveau, 'user' => $user, 'statut' => 'termine'],
                ['dateFin' => 'DESC']
            );

            if ($dernierPassage && $dernierPassage->getResultat() !== null) {
                $score = $dernierPassage->getResultat();
                $niveauObtenuTest = $this->determinerNiveau($score);

                $niveauTest = $niveauRepository->findOneBy([
                    'Id_langue' => $langue,
                    'difficulte' => $niveauObtenuTest
                ]);

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

                if (!$progress->isTestNiveauComplete() ||
                    ($progress->getNiveauActuel() && $progress->getNiveauActuel()->getId() !== $niveauTest->getId())) {
                    $progress->setTestNiveauComplete(true);
                    $progress->setNiveauActuel($niveauTest);
                    $progress->setDernierNumeroCours(0);
                    $progress->setDateDerniereActivite(new \DateTime());
                    $em->flush();

                    $niveauUtilisateur = $niveauTest;
                    $niveauObtenu = $niveauTest->getDifficulte();
                }
            }
        }

        $session = $request->getSession();
        $tempsTotalSession = $session->get('temps_total_' . $langue->getId(), 0);
        $tempsTotal = round($tempsTotalSession / 60);

        $coursCompletes = $progress->getDernierNumeroCours() ?? 0;
        $niveauActuel = $progress->getNiveauActuel();

        $totalCoursNiveau = 0;
        if ($niveauActuel) {
            $totalCoursNiveau = $em->getRepository(\App\Entity\Cours::class)->count(['Id_niveau' => $niveauActuel]);
        }

        $progression = $totalCoursNiveau > 0 ? ($coursCompletes / $totalCoursNiveau * 100) : 0;

        $pointsFaibles = [];
        $recommandations = [];

        if ($niveauUtilisateur) {
            $niveauNom = $niveauUtilisateur->getDifficulte();

            if ($niveauNom == 'A1') {
                $pointsFaibles = ['prononciation', 'verbes de base', 'vocabulaire quotidien'];
                $recommandations = [
                    ['type' => 'video', 'titre' => 'Prononciation anglaise pour débutants', 'url' => '#', 'icon' => '🎥'],
                    ['type' => 'exercice', 'titre' => 'Quiz sur les verbes "to be" et "to have"', 'icon' => '✏️'],
                    ['type' => 'article', 'titre' => 'Les 50 mots essentiels en anglais', 'icon' => '📖']
                ];
            } elseif ($niveauNom == 'A2') {
                $pointsFaibles = ['temps du passé', 'prépositions', 'vocabulaire des voyages'];
                $recommandations = [
                    ['type' => 'video', 'titre' => 'Le prétérit simple expliqué', 'url' => '#', 'icon' => '🎥'],
                    ['type' => 'exercice', 'titre' => 'Exercices sur les prépositions', 'icon' => '✏️'],
                    ['type' => 'video', 'titre' => 'Vocabulaire pour voyager', 'url' => '#', 'icon' => '🎥']
                ];
            } elseif ($niveauNom == 'B1') {
                $pointsFaibles = ['conditionnel', 'phrases complexes', 'vocabulaire professionnel'];
                $recommandations = [
                    ['type' => 'video', 'titre' => 'Le conditionnel en anglais', 'url' => '#', 'icon' => '🎥'],
                    ['type' => 'article', 'titre' => 'Comment structurer une phrase complexe', 'icon' => '📖'],
                    ['type' => 'exercice', 'titre' => 'Vocabulaire des affaires', 'icon' => '✏️']
                ];
            } else {
                $pointsFaibles = ['expressions idiomatiques', 'nuances de sens', 'anglais formel'];
                $recommandations = [
                    ['type' => 'video', 'titre' => '10 expressions idiomatiques à connaître', 'url' => '#', 'icon' => '🎥'],
                    ['type' => 'article', 'titre' => 'Différence entre "say", "tell" et "speak"', 'icon' => '📖'],
                    ['type' => 'exercice', 'titre' => 'Anglais formel vs informel', 'icon' => '✏️']
                ];
            }
        }

        if ($progress->getNiveauActuel()) {
            $niveauActuelProgress = $progress->getNiveauActuel();
            $totalCoursNiveau = $em->getRepository(\App\Entity\Cours::class)->count(['Id_niveau' => $niveauActuelProgress]);

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

                    $niveauUtilisateur = $niveauSuivant;
                    $niveauObtenu = $niveauSuivant->getDifficulte();

                    $this->addFlash('success', '🎉 Félicitations ! Vous passez au niveau ' . $niveauSuivant->getDifficulte() . ' !');
                }
            }
        }

        $coursParNiveau = [];
        foreach ($tousLesCours as $c) {
            $niveauId = $c->getIdNiveau()->getId();
            if (!isset($coursParNiveau[$niveauId])) {
                $coursParNiveau[$niveauId] = ['niveau' => $c->getIdNiveau(), 'cours' => []];
            }
            $coursParNiveau[$niveauId]['cours'][] = $c;
        }

        foreach ($coursParNiveau as &$data) {
            usort($data['cours'], fn($a, $b) => $a->getNumero() <=> $b->getNumero());
        }

        $testsLangue = $em->getRepository(\App\Entity\Test::class)->findBy(['langue' => $langue]);

        return $this->render('langue/apprentissage.html.twig', [
            'langue'             => $langue,
            'allCours'           => $tousLesCours,
            'coursParNiveau'     => $coursParNiveau,
            'lastCompletedId'    => $progress ? $progress->getDernierNumeroCours() : 0,
            'testNiveau'         => $testNiveau,
            'dernierPassage'     => $dernierPassage,
            'niveauUtilisateur'  => $niveauUtilisateur,
            'niveauObtenu'       => $niveauObtenu,
            'progress'           => $progress,
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

    #[Route('/admin/new', name: 'app_admin_langue_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $em): Response
    {
        $langue = new Langue();
        $form = $this->createForm(LangueType::class, $langue, ['is_edit' => false]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
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
        $form = $this->createForm(LangueType::class, $langue, ['is_edit' => true]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
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
        if ($this->isCsrfTokenValid('delete' . $langue->getId(), $request->request->get('_token'))) {
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