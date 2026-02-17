<?php

namespace App\Controller;

use App\Entity\Test;
use App\Entity\TestPassage;
use App\Entity\Question;
use App\Entity\Reponse;
use App\Form\TestType;
use App\Service\TestScoringService;
use App\Repository\TestRepository;
use App\Repository\ReponseRepository;
use App\Repository\TestPassageRepository;
use App\Repository\LangueRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use DateTime;

#[Route('/admin/test')]
final class TestController extends AbstractController
{
    // ==================== PARTIE ADMIN ====================
    
    #[Route('', name: 'app_test_index', methods: ['GET'])]
    public function index(Request $request, TestRepository $testRepository,LangueRepository $langueRepository): Response
    {
        $search = $request->query->get('search', '');
        $type = $request->query->get('type', '');
        $langueId = $request->query->get('langue', '');

        $queryBuilder = $testRepository->createQueryBuilder('t')
            ->leftJoin('t.langue', 'l')
            ->leftJoin('t.questions', 'q')
            ->orderBy('t.titre', 'ASC'); // Tri par défaut sur le titre

        if ($search) {
            $queryBuilder->andWhere('LOWER(t.titre) LIKE :search OR LOWER(t.type) LIKE :search')
                         ->setParameter('search', '%' . strtolower($search) . '%');
        }

        if ($type) {
            $queryBuilder->andWhere('t.type = :type')
                         ->setParameter('type', $type);
        }

        if ($langueId) {
            $queryBuilder->andWhere('l.id = :langue')
                         ->setParameter('langue', $langueId);
        }

        $tests = $queryBuilder->getQuery()->getResult();

        // Récupérer toutes les langues pour le select
        $langues = $langueRepository->findBy([], ['nom' => 'ASC']);

        return $this->render('test/index.html.twig', [
            'tests' => $tests,
            'langues' => $langues,           // ← Passé au template
            'search'  => $search,             // Pour garder la valeur dans l'input
            'type'    => $type,
            'langue'  => $langueId,
        ]);
    }

    #[Route('/new', name: 'app_test_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $test = new Test();
        $form = $this->createForm(TestType::class, $test);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($test);
            $entityManager->flush();

            $this->addFlash('success', 'Test créé avec succès !');
            return $this->redirectToRoute('app_test_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('test/new.html.twig', [
            'test' => $test,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_test_show', methods: ['GET'])]
    public function show(Test $test): Response
    {
        return $this->render('test/show.html.twig', [
            'test' => $test,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_test_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Test $test, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(TestType::class, $test);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            $this->addFlash('success', 'Test modifié avec succès !');
            return $this->redirectToRoute('app_test_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('test/edit.html.twig', [
            'test' => $test,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_test_delete', methods: ['POST'])]
    public function delete(Request $request, Test $test, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$test->getId(), $request->request->get('_token'))) {
            $entityManager->remove($test);
            $entityManager->flush();
            $this->addFlash('success', 'Test supprimé avec succès !');
        }

        return $this->redirectToRoute('app_test_index', [], Response::HTTP_SEE_OTHER);
    }

    // ==================== PARTIE ÉTUDIANT ====================

    #[Route('/etudiant/{id}', name: 'app_test_student_show', methods: ['GET'])]
    public function studentShow(
        Test $test,
        Request $request,
        EntityManagerInterface $entityManager,
        TestPassageRepository $testPassageRepository
    ): Response
    {
        $session = $request->getSession();
        $userId = $session->get('user_id');

        if (!$userId) {
            $this->addFlash('error', 'Vous devez être connecté pour passer un test.');
            return $this->redirectToRoute('app_login');
        }

        $user = $entityManager->getRepository(\App\Entity\User::class)->find($userId);

        if (!$user) {
            $this->addFlash('error', 'Utilisateur introuvable.');
            return $this->redirectToRoute('app_login');
        }

        $existingTermine = $testPassageRepository->findOneBy([
            'test'   => $test,
            'user'   => $user,
            'statut' => 'termine'
        ]);

        if ($existingTermine) {
            $this->addFlash('info', 'Vous avez déjà terminé ce test.');
            return $this->redirectToRoute('app_test_student_result', ['id' => $existingTermine->getId()]);
        }

        $passageEnCours = $testPassageRepository->findOneBy([
            'test'   => $test,
            'user'   => $user,
            'statut' => 'en_cours'
        ]);

        // 🔴 VÉRIFIER SI LE TEMPS EST ÉCOULÉ
        if ($passageEnCours) {
            $dureeMinutes = $test->getDureeEstimee() ?: 15;
            $dureeSecondes = $dureeMinutes * 60;
            $tempsEcoule = (new \DateTime())->getTimestamp() - $passageEnCours->getDateDebut()->getTimestamp();
            
            if ($tempsEcoule >= $dureeSecondes) {
                // Soumettre automatiquement avec score 0
                $passageEnCours->setScore(0);
                $passageEnCours->setResultat(0);
                $passageEnCours->setDateFin(new \DateTime());
                $passageEnCours->setTempsPasse($tempsEcoule);
                $passageEnCours->setStatut('termine');
                $entityManager->flush();
                
                $this->addFlash('warning', '⏰ Le temps était écoulé. Le test a été soumis automatiquement avec un score de 0.');
                return $this->redirectToRoute('app_test_student_result', ['id' => $passageEnCours->getId()]);
            }
        }

        return $this->render('test_student/show.html.twig', [
            'test'           => $test,
            'langue'         => $test->getLangue(),
            'passageEnCours' => $passageEnCours,
        ]);
    }

    #[Route('/etudiant/{id}/start', name: 'app_test_student_start', methods: ['POST'])]
    public function startTest(
        Test $test,
        Request $request,
        EntityManagerInterface $entityManager
    ): Response
    {
        $session = $request->getSession();
        $userId = $session->get('user_id');

        if (!$userId) {
            $this->addFlash('error', 'Vous devez être connecté pour démarrer un test.');
            return $this->redirectToRoute('app_login');
        }

        $user = $entityManager->getRepository(\App\Entity\User::class)->find($userId);

        if (!$user) {
            $this->addFlash('error', 'Utilisateur introuvable.');
            return $this->redirectToRoute('app_login');
        }

        $existing = $entityManager->getRepository(TestPassage::class)
            ->findOneBy(['test' => $test, 'user' => $user, 'statut' => 'en_cours']);

        if ($existing) {
            $this->addFlash('warning', 'Vous avez déjà un test en cours.');
            return $this->redirectToRoute('app_test_student_show', ['id' => $test->getId()]);
        }

        $passage = new TestPassage();
        $passage->setTest($test);
        $passage->setUser($user);
        $passage->setDateDebut(new DateTime());
        $passage->setStatut('en_cours');
        $passage->setScoreMax($test->getScoreMax());

        $entityManager->persist($passage);
        $entityManager->flush();

        $this->addFlash('success', 'Test démarré ! Bonne chance !');
        return $this->redirectToRoute('app_test_student_show', ['id' => $test->getId()]);
    }

    #[Route('/etudiant/{id}/submit', name: 'app_test_student_submit', methods: ['POST'])]
        public function studentSubmit(
            Request $request,
            Test $test,
            EntityManagerInterface $entityManager,
            TestScoringService $scoringService // ✅ Injection du service
        ): Response
        {
            $session = $request->getSession();
            $userId = $session->get('user_id');

            if (!$userId) {
                $this->addFlash('error', 'Vous devez être connecté.');
                return $this->redirectToRoute('app_login');
            }

            $user = $entityManager->getRepository(\App\Entity\User::class)->find($userId);

            if (!$user) {
                $this->addFlash('error', 'Utilisateur introuvable.');
                return $this->redirectToRoute('app_login');
            }

            $passage = $entityManager->getRepository(TestPassage::class)
                ->findOneBy([
                    'test'   => $test,
                    'user'   => $user,
                    'statut' => 'en_cours'
                ]);

            if (!$passage) {
                $this->addFlash('error', 'Aucun test en cours trouvé.');
                return $this->redirectToRoute('app_test_student_show', ['id' => $test->getId()]);
            }

            // ✅ Utiliser le service pour calculer le score
            $scoringResult = $scoringService->calculateTestScore($test, $request);

            $passage->setScore($scoringResult['total_score']);
            $passage->setResultat($scoringResult['percentage']);
            $passage->setDateFin(new \DateTime());
            $passage->setTempsPasse((new \DateTime())->getTimestamp() - $passage->getDateDebut()->getTimestamp());
            $passage->setStatut('termine');

            $entityManager->flush();

            $niveau = $this->determinerNiveau($passage->getResultat());

            $this->addFlash('success', sprintf(
                'Test terminé ! Score : %.1f%% → Niveau estimé : %s',
                $passage->getResultat(),
                $niveau
            ));

            return $this->redirectToRoute('app_langue_apprentissage', [
                'id' => $test->getLangue()->getId()
            ]);
        }


    #[Route('/etudiant/result/{id}', name: 'app_test_student_result', methods: ['GET'])]
    public function studentResults(
        TestPassage $passage,
        Request $request,
        EntityManagerInterface $entityManager
    ): Response
    {
        $session = $request->getSession();
        $userId = $session->get('user_id');

        if (!$userId) {
            $this->addFlash('error', 'Vous devez être connecté.');
            return $this->redirectToRoute('app_login');
        }

        $user = $entityManager->getRepository(\App\Entity\User::class)->find($userId);

        if (!$user) {
            $this->addFlash('error', 'Utilisateur introuvable.');
            return $this->redirectToRoute('app_login');
        }

        if ($passage->getUser()->getId() !== $user->getId()) {
            throw $this->createAccessDeniedException('Vous ne pouvez pas voir les résultats d\'un autre utilisateur.');
        }

        $test = $passage->getTest();

        return $this->render('test_student/result.html.twig', [
            'test'    => $test,
            'passage' => $passage,
            'langue'  => $test->getLangue(),
            'niveau'  => $this->determinerNiveau($passage->getResultat()),
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

    #[Route('/admin/test/passages', name: 'app_admin_test_passages', methods: ['GET'])]
    public function adminTestPassages(
        Request $request,
        TestPassageRepository $testPassageRepository
    ): Response
    {
        $search = $request->query->get('search', '');
        $statut = $request->query->get('statut', '');
        $langueId = $request->query->get('langue', '');
        $testId = $request->query->get('test', '');

        $queryBuilder = $testPassageRepository->createQueryBuilder('tp')
            ->leftJoin('tp.test', 't')
            ->leftJoin('t.langue', 'l')
            ->leftJoin('tp.user', 'u');

        if ($search) {
            $queryBuilder->andWhere('
                LOWER(u.email) LIKE :search OR 
                LOWER(t.titre) LIKE :search OR 
                LOWER(l.nom) LIKE :search
            ')
            ->setParameter('search', '%' . strtolower($search) . '%');
        }

        if ($statut) {
            $queryBuilder->andWhere('tp.statut = :statut')
                         ->setParameter('statut', $statut);
        }

        if ($langueId) {
            $queryBuilder->andWhere('l.id = :langue')
                         ->setParameter('langue', $langueId);
        }

        if ($testId) {
            $queryBuilder->andWhere('t.id = :test')
                         ->setParameter('test', $testId);
        }

        $queryBuilder->orderBy('tp.dateFin', 'DESC');

        $passages = $queryBuilder->getQuery()->getResult();

        $totalPassages = $testPassageRepository->count([]);
        $termineCount = $testPassageRepository->count(['statut' => 'termine']);
        $enCoursCount = $testPassageRepository->count(['statut' => 'en_cours']);
        $scoreMoyen = $testPassageRepository->createQueryBuilder('tp')
            ->select('AVG(tp.resultat)')
            ->getQuery()
            ->getSingleScalarResult() ?? 0;

        return $this->render('test/passages.html.twig', [
            'passages'      => $passages,
            'totalPassages' => $totalPassages,
            'termineCount'  => $termineCount,
            'enCoursCount'  => $enCoursCount,
            'scoreMoyen'    => round($scoreMoyen, 1),
            'search'        => $search,
            'statut'        => $statut,
            'langueId'      => $langueId,
            'testId'        => $testId,
        ]);
    }
}