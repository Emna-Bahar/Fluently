<?php

namespace App\Controller;

use App\Entity\Test;
use App\Entity\TestPassage;
use App\Entity\Question;
use App\Entity\User;
use App\Entity\Reponse;
use App\Entity\Langue;
use App\Form\TestType;
use App\Service\TestScoringService;
use App\Service\ExamModeService;
use App\Repository\TestRepository;
use App\Repository\ReponseRepository;
use App\Repository\TestPassageRepository;
use App\Repository\LangueRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Workflow\WorkflowInterface;
use App\Service\AITextCorrectionService;
use Psr\Log\LoggerInterface;
use App\Service\PerformanceAnalyzerService;
use DateTime;

#[Route('/admin/test')]
final class TestController extends AbstractController
{
    // ==================== PARTIE ADMIN ====================
    private LoggerInterface $logger;
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
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
        TestPassageRepository $testPassageRepository,
        WorkflowInterface $testPassageStateMachine
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

        // Vérifier si déjà terminé
        $existingTermine = $testPassageRepository->findOneBy([
            'test'   => $test,
            'user'   => $user,
            'statut' => 'termine'
        ]);

        if ($existingTermine) {
            $this->addFlash('info', 'Vous avez déjà terminé ce test.');
            return $this->redirectToRoute('app_test_student_result', ['id' => $existingTermine->getId()]);
        }

        // Chercher un passage EN COURS ou EN PAUSE
        $passage = $testPassageRepository->findOneBy([
            'test'   => $test,
            'user'   => $user,
            'statut' => ['en_cours', 'en_pause']
        ]);

        // Vérification du temps écoulé → seulement si statut = 'en_cours'
        if ($passage && $passage->getStatut() === 'en_cours') {
            $dureeMinutes = $test->getDureeEstimee() ?: 15;
            $dureeSecondes = $dureeMinutes * 60;
            $tempsEcoule = (new DateTime())->getTimestamp() - $passage->getDateDebut()->getTimestamp();

            if ($tempsEcoule >= $dureeSecondes) {
                try {
                    // Sécurité : ne pas appliquer plusieurs fois
                    if ($passage->getStatut() === 'en_cours') {
                        $testPassageStateMachine->apply($passage, 'expirer');
                        $entityManager->flush();
                    }

                    $this->addFlash('warning', '⏰ Le temps est écoulé. Le test a été soumis automatiquement avec un score de 0.');
                    return $this->redirectToRoute('app_test_student_result', ['id' => $passage->getId()]);
                } catch (\Exception $e) {
                    $this->addFlash('error', 'Erreur lors de l’expiration : ' . $e->getMessage());
                    // On continue quand même pour afficher la page (au cas où)
                }
            }
        }

        return $this->render('test_student/show.html.twig', [
            'test'           => $test,
            'langue'         => $test->getLangue(),
            'passageEnCours' => $passage,  // Peut être en_cours ou en_pause
        ]);
    }



    #[Route('/etudiant/{id}/start', name: 'app_test_student_start', methods: ['POST'])]
    public function startTest(
        Test $test, 
        Request $request, 
        EntityManagerInterface $em,
        WorkflowInterface $testPassageStateMachine
    ): Response {
        $session = $request->getSession();
        $userId = $session->get('user_id');

        if (!$userId) {
            $this->addFlash('error', 'Vous devez être connecté pour démarrer un test.');
            return $this->redirectToRoute('app_login');
        }

        $user = $em->getRepository(\App\Entity\User::class)->find($userId);

        if (!$user) {
            $this->addFlash('error', 'Utilisateur introuvable.');
            return $this->redirectToRoute('app_login');
        }

        // ✅ Vérifier si un passage en_cours existe déjà
        $existing = $em->getRepository(TestPassage::class)
            ->findOneBy([
                'test' => $test, 
                'user' => $user, 
                'statut' => 'en_cours'
            ]);

        if ($existing) {
            $this->addFlash('warning', 'Vous avez déjà un test en cours.');
            return $this->redirectToRoute('app_test_student_show', ['id' => $test->getId()]);
        }

        // ✅ Créer un nouveau passage
        $passage = new TestPassage();
        $passage->setTest($test);
        $passage->setUser($user);
        $passage->setScoreMax($test->getScoreMax());
        // Ne PAS définir dateDebut ici, le Workflow le fera
        
        $em->persist($passage);
        $em->flush(); // ✅ IMPORTANT : Flush AVANT d'appliquer le workflow (pour avoir l'ID)
        
        try {
            $testPassageStateMachine->apply($passage, 'demarrer');
            $em->flush(); // ✅ Flush après la transition
            $this->addFlash('success', 'Test démarré ! Bonne chance ! 🚀');
        } catch (\Exception $e) {
            $this->addFlash('error', 'Impossible de démarrer : ' . $e->getMessage());
            return $this->redirectToRoute('app_test_student_show', ['id' => $test->getId()]);
        }
        
        return $this->redirectToRoute('app_test_student_show', ['id' => $test->getId()]);
    }
    
    #[Route('/etudiant/{id}/pause', name: 'app_test_student_pause', methods: ['POST'])]
    public function pauseTest(
        Test $test,
        Request $request,
        EntityManagerInterface $em,
        WorkflowInterface $testPassageStateMachine
    ): Response
    {
        $user = $this->getUserFromSession($em, $request); // Méthode helper ci-dessous
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

        $passage = $em->getRepository(TestPassage::class)
            ->findOneBy(['test' => $test, 'user' => $user, 'statut' => 'en_cours']);

        if (!$passage) {
            $this->addFlash('error', 'Aucun test en cours à mettre en pause.');
            return $this->redirectToRoute('app_test_student_show', ['id' => $test->getId()]);
        }

        try {
            $testPassageStateMachine->apply($passage, 'mettre_en_pause');
            $em->flush();
            $this->addFlash('info', 'Test mis en pause. Vous pourrez le reprendre plus tard.');
        } catch (\Exception $e) {
            $this->addFlash('error', 'Impossible de mettre en pause : ' . $e->getMessage());
        }

        return $this->redirectToRoute('app_test_student_show', ['id' => $test->getId()]);
    }

    #[Route('/etudiant/{id}/resume', name: 'app_test_student_resume', methods: ['POST'])]
    public function resumeTest(
        Test $test,
        Request $request,
        EntityManagerInterface $em,
        WorkflowInterface $testPassageStateMachine
    ): Response
    {
        $user = $this->getUserFromSession($em, $request);
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

        $passage = $em->getRepository(TestPassage::class)
            ->findOneBy(['test' => $test, 'user' => $user, 'statut' => 'en_pause']);

        if (!$passage) {
            $this->addFlash('error', 'Aucun test en pause à reprendre.');
            return $this->redirectToRoute('app_test_student_show', ['id' => $test->getId()]);
        }

        try {
            $testPassageStateMachine->apply($passage, 'reprendre');
            $em->flush();
            $this->addFlash('success', 'Test repris ! Bonne continuation !');
        } catch (\Exception $e) {
            $this->addFlash('error', 'Impossible de reprendre : ' . $e->getMessage());
        }

        return $this->redirectToRoute('app_test_student_show', ['id' => $test->getId()]);
    }

    // Helper pour récupérer l'utilisateur (réutilisable)
    private function getUserFromSession(EntityManagerInterface $em, Request $request): ?User
    {
        $session = $request->getSession();
        $userId = $session->get('user_id');
        return $userId ? $em->getRepository(User::class)->find($userId) : null;
    }

    #[Route('/admin/passage/{id}/expire', name: 'admin_expire_passage', methods: ['POST'])]
    public function expirePassage(
        TestPassage $passage,
        WorkflowInterface $testPassageStateMachine,
        EntityManagerInterface $em,
        Request $request
    ): Response {
        // Vérifier CSRF
        if (!$this->isCsrfTokenValid('expire' . $passage->getId(), $request->request->get('_token'))) {
            $this->addFlash('error', 'Token CSRF invalide.');
            return $this->redirectToRoute('app_admin_test_passages');
        }
        
        try {
            $testPassageStateMachine->apply($passage, 'expirer');
            $em->flush();
            
            $this->addFlash('success', '⏰ Test expiré avec succès.');
        } catch (\Exception $e) {
            $this->addFlash('error', 'Impossible d\'expirer : ' . $e->getMessage());
        }
        
        return $this->redirectToRoute('app_admin_test_passages');
    }
    
    #[Route('/admin/passage/{id}/finaliser', name: 'admin_finaliser_passage', methods: ['POST'])]
    public function finaliserPassage(
        TestPassage $passage,
        WorkflowInterface $testPassageStateMachine,
        EntityManagerInterface $em,
        Request $request
    ): Response {
        if (!$this->isCsrfTokenValid('finaliser' . $passage->getId(), $request->request->get('_token'))) {
            $this->addFlash('error', 'Token CSRF invalide.');
            return $this->redirectToRoute('app_admin_test_passages');
        }
        
        try {
            $testPassageStateMachine->apply($passage, 'finaliser');
            $em->flush();
            
            $this->addFlash('success', '✅ Test finalisé avec succès.');
        } catch (\Exception $e) {
            $this->addFlash('error', 'Impossible de finaliser : ' . $e->getMessage());
        }
        
        return $this->redirectToRoute('app_admin_test_passages');
    }

    #[Route('/etudiant/{id}/submit', name: 'app_test_student_submit', methods: ['POST'])]
    public function studentSubmit(
        Request $request,
        Test $test,
        EntityManagerInterface $entityManager,
        TestScoringService $scoringService,
        AITextCorrectionService $aiCorrection // ✅ INJECTION
    ): Response {
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

        // ✅ Calculer le score avec le service (QCM + Oral)
        $scoringResult = $scoringService->calculateTestScore($test, $request);
        
        $scoreTotal = $scoringResult['total_score'];
        $scoreMax = $scoringResult['max_score'];
        
        // ✅ AJOUT : Traiter les questions texte libre avec l'IA
        foreach ($test->getQuestions() as $question) {
            if ($question->getType() === 'texte_libre') {
                $studentText = $request->request->get('texte_' . $question->getId());
                
                if ($studentText && strlen(trim($studentText)) >= 50) {
                    // Appeler l'IA pour corriger
                    $correction = $aiCorrection->correctFreeText(
                        $studentText,
                        $question->getEnonce(), // Le thème
                        $test->getLangue()->getNom(),
                        'B1' // TODO: Récupérer le vrai niveau de l'étudiant
                    );
                    
                    // Calculer le score (score IA * scoreMax de la question / 100)
                    $questionScore = ($correction['score'] / 100) * $question->getScoreMax();
                    $scoreTotal += $questionScore;
                    
                    // TODO: Stocker le feedback IA quelque part pour l'afficher
                    // (Pour l'instant on le logue)
                    $this->logger->info('Correction texte libre', [
                        'question_id' => $question->getId(),
                        'score' => $correction['score'],
                        'commentaire' => $correction['commentaire']
                    ]);
                }
            }
        }

        $passage->setScore($scoreTotal);
        $passage->setResultat(($scoreTotal / $scoreMax) * 100);
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
        ExamModeService $examService,
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
        // ✅ AJOUT : Analyse anti-triche pour les tests de niveau
        $examAnalysis = null;
        if ($examService->isExamMode($passage->getTest())) {
            $examAnalysis = $examService->analyzeSuspiciousActivity($passage);
            // Nettoyer la session après analyse
            $examService->clearSessionEvents($passage->getId());
        }
        return $this->render('test_student/result.html.twig', [
            'test'    => $test,
            'passage' => $passage,
            'langue'  => $test->getLangue(),
            'niveau'  => $this->determinerNiveau($passage->getResultat()),
            'examAnalysis' => $examAnalysis, // ✅ PASSAGE AU TEMPLATE
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
    #[Route('/exam/log-event/{id}', name: 'app_exam_log_event', methods: ['POST'])]
    public function logExamEvent(
        TestPassage $passage,
        Request $request,
        ExamModeService $examService
    ): Response {
        $data = json_decode($request->getContent(), true);
        
        $eventType = $data['event_type'] ?? 'unknown';
        $details = $data['details'] ?? [];
        
        // Log l'événement
        $examService->logEvent($passage, $eventType, $details);
        
        return $this->json(['success' => true]);
    }


    #[Route('/etudiant/analyse/{langueId}', name: 'app_etudiant_analyse', methods: ['GET'])]
    public function analysePerformance(
        int $langueId,
        Request $request,
        EntityManagerInterface $em,
        PerformanceAnalyzerService $analyzer
    ): Response {
        $session = $request->getSession();
        $userId = $session->get('user_id');

        if (!$userId) {
            $this->addFlash('error', 'Vous devez être connecté.');
            return $this->redirectToRoute('app_login');
        }

        $user = $em->getRepository(User::class)->find($userId);
        $langue = $em->getRepository(Langue::class)->find($langueId);

        if (!$user || !$langue) {
            throw $this->createNotFoundException();
        }

        // Analyser les performances
        $analysis = $analyzer->analyzeUserPerformance($user, $langue);

        // Générer les recommandations IA
        $recommendations = null;
        if ($analysis['has_data']) {
            $recommendations = $analyzer->generateAIRecommendations($user, $langue, $analysis);
        }

        return $this->render('test_student/analyse.html.twig', [
            'user' => $user,
            'langue' => $langue,
            'analysis' => $analysis,
            'recommendations' => $recommendations
        ]);
    }
}