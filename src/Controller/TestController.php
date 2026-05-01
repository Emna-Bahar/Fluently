<?php

namespace App\Controller;

use App\Entity\Test;
use App\Entity\TestPassage;
use App\Entity\User;
use App\Entity\Langue;
use App\Form\TestType;
use App\Service\TestScoringService;
use App\Service\ExamModeService;
use App\Repository\TestRepository;
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
    private LoggerInterface $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

#[Route('', name: 'app_test_index', methods: ['GET'])]
public function index(Request $request, TestRepository $testRepository, LangueRepository $langueRepository): Response
{
    $search = $request->query->get('search', '');
    $type = $request->query->get('type', '');
    $langueId = $request->query->get('langue', '');

    // ✅ Utiliser la méthode du repository
    $searchStr = is_string($search) ? $search : null;
    $typeStr = is_string($type) ? $type : null;
    $langueIdStr = is_string($langueId) ? $langueId : null;
    
    $tests = $testRepository->findByFilters($searchStr, $typeStr, $langueIdStr);
    $langues = $langueRepository->findBy([], ['nom' => 'ASC']);

    return $this->render('test/index.html.twig', [
        'tests'  => $tests,
        'langues' => $langues,
        'search' => $search,
        'type'   => $type,
        'langue' => $langueId,
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
        $token = $request->request->get('_token');
        $tokenStr = is_string($token) ? $token : '';
        
        if ($this->isCsrfTokenValid('delete' . $test->getId(), $tokenStr)) {
            $entityManager->remove($test);
            $entityManager->flush();
            $this->addFlash('success', 'Test supprimé avec succès !');
        }

        return $this->redirectToRoute('app_test_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/etudiant/{id}', name: 'app_test_student_show', methods: ['GET'])]
    public function studentShow(
        Test $test,
        Request $request,
        EntityManagerInterface $entityManager,
        TestPassageRepository $testPassageRepository,
        WorkflowInterface $testPassageStateMachine
    ): Response {
        $user = $this->getUser();
        if (!$user instanceof User) {
            $this->addFlash('error', 'Vous devez être connecté.');
            return $this->redirectToRoute('app_login');
        }

        // Chercher un passage en cours ou en pause
        $passage = $testPassageRepository->findOneBy([
            'test'   => $test,
            'user'   => $user,
            'statut' => ['en_cours', 'en_pause']
        ]);

        // Vérifier expiration seulement si en_cours
        if ($passage && $passage->getStatut() === 'en_cours') {
            $dateDebut = $passage->getDateDebut();
            if ($dateDebut) {
                $dureeSecondes = ($test->getDureeEstimee() ?: 15) * 60;
                $tempsEcoule = (new \DateTime())->getTimestamp() - $dateDebut->getTimestamp();

                if ($tempsEcoule >= $dureeSecondes) {
                    try {
                        $testPassageStateMachine->apply($passage, 'expirer');
                        $entityManager->flush();
                        $this->addFlash('warning', '⏰ Temps écoulé.');
                        return $this->redirectToRoute('app_test_student_result', ['id' => $passage->getId()]);
                    } catch (\Exception $e) {
                        $this->addFlash('error', 'Erreur : ' . $e->getMessage());
                    }
                }
            }
        }

        // Récupérer les réponses sauvegardées si en_pause
        $savedAnswers = [];
        if ($passage) {
            $sessionKey = 'test_answers_' . $test->getId() . '_' . $user->getId();
            $savedAnswers = $request->getSession()->get($sessionKey, []);
        }

        // Calculer temps restant
        $tempsRestantSecondes = null;
        if ($passage && $passage->getStatut() === 'en_cours' && $passage->getDateDebut()) {
            $dureeSecondes = ($test->getDureeEstimee() ?: 15) * 60;
            $tempsEcoule = (new \DateTime())->getTimestamp() - $passage->getDateDebut()->getTimestamp();
            $tempsRestantSecondes = max(0, $dureeSecondes - $tempsEcoule);
        }

        return $this->render('test_student/show.html.twig', [
            'test'                 => $test,
            'langue'               => $test->getLangue(),
            'passageEnCours'       => $passage,
            'savedAnswers'         => $savedAnswers,
            'tempsRestantSecondes' => $tempsRestantSecondes,
        ]);
    }

    #[Route('/etudiant/{id}/start', name: 'app_test_student_start', methods: ['POST'])]
    public function startTest(
        Test $test,
        Request $request,
        EntityManagerInterface $em,
        WorkflowInterface $testPassageStateMachine
    ): Response {
        $user = $this->getUser();
        if (!$user instanceof User) {
            $this->addFlash('error', 'Vous devez être connecté.');
            return $this->redirectToRoute('app_login');
        }

        // Vérifier si un test est déjà EN COURS
        $existing = $em->getRepository(TestPassage::class)
            ->findOneBy(['test' => $test, 'user' => $user, 'statut' => 'en_cours']);

        if ($existing) {
            return $this->redirectToRoute('app_test_student_show', ['id' => $test->getId()]);
        }

        // Créer un nouveau passage (même si des passages terminés existent)
        $passage = new TestPassage();
        $passage->setTest($test);
        $passage->setUser($user);
        $passage->setScoreMax($test->getScoreMax());

        $em->persist($passage);
        $em->flush();

        try {
            $testPassageStateMachine->apply($passage, 'demarrer');
            $em->flush();
        } catch (\Exception $e) {
            $em->remove($passage);
            $em->flush();
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
): Response {
    $user = $this->getUser();
    if (!$user instanceof User) {
        return $this->redirectToRoute('app_login');
    }

    $passage = $em->getRepository(TestPassage::class)
        ->findOneBy(['test' => $test, 'user' => $user, 'statut' => 'en_cours']);

    if (!$passage) {
        $this->addFlash('error', 'Aucun test en cours à mettre en pause.');
        return $this->redirectToRoute('app_test_student_show', ['id' => $test->getId()]);
    }

    // ✅ Sauvegarder les réponses en session
    $sessionKey = 'test_answers_' . $test->getId() . '_' . $user->getId();
    $answers = [];
    foreach ($request->request->all() as $key => $value) {
        if (str_starts_with($key, 'question_') || str_starts_with($key, 'oral_') || str_starts_with($key, 'texte_')) {
            $answers[$key] = $value;
        }
    }
    $request->getSession()->set($sessionKey, $answers);

    // ✅ Sauvegarder le temps écoulé
    $dateDebut = $passage->getDateDebut();
    if ($dateDebut) {
        $tempsEcoule = (new \DateTime())->getTimestamp() - $dateDebut->getTimestamp();
        $request->getSession()->set('temps_ecoule_' . $passage->getId(), $tempsEcoule);
    }

    try {
        $testPassageStateMachine->apply($passage, 'mettre_en_pause');
        $em->flush();
        $this->addFlash('info', 'Test mis en pause. Tes réponses sont sauvegardées.');
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
    ): Response {
        $user = $this->getUser();

        if (!$user instanceof User) {
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
            $this->addFlash('success', 'Test repris !');
        } catch (\Exception $e) {
            $this->addFlash('error', 'Impossible de reprendre : ' . $e->getMessage());
        }

        return $this->redirectToRoute('app_test_student_show', ['id' => $test->getId()]);
    }

    #[Route('/admin/passage/{id}/expire', name: 'admin_expire_passage', methods: ['POST'])]
    public function expirePassage(
        TestPassage $passage,
        WorkflowInterface $testPassageStateMachine,
        EntityManagerInterface $em,
        Request $request
    ): Response {
        $token = $request->request->get('_token');
        $tokenStr = is_string($token) ? $token : '';
        
        if (!$this->isCsrfTokenValid('expire' . $passage->getId(), $tokenStr)) {
            $this->addFlash('error', 'Token CSRF invalide.');
            return $this->redirectToRoute('app_admin_test_passages');
        }

        try {
            $testPassageStateMachine->apply($passage, 'expirer');
            $em->flush();
            $this->addFlash('success', '⏰ Test expiré.');
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
        $token = $request->request->get('_token');
        $tokenStr = is_string($token) ? $token : '';
        
        if (!$this->isCsrfTokenValid('finaliser' . $passage->getId(), $tokenStr)) {
            $this->addFlash('error', 'Token CSRF invalide.');
            return $this->redirectToRoute('app_admin_test_passages');
        }

        try {
            $testPassageStateMachine->apply($passage, 'finaliser');
            $em->flush();
            $this->addFlash('success', '✅ Test finalisé.');
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
    AITextCorrectionService $aiCorrection
): Response {
    $user = $this->getUser();
    if (!$user instanceof User) {
        $this->addFlash('error', 'Vous devez être connecté.');
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

    // ✅ Calculer score séparément par type de question
    $scoreTotal = 0;
    $scoreMax = 0;
    $details = [];

    foreach ($test->getQuestions() as $question) {
        $qScoreMax = $question->getScoreMax();
        $scoreMax += $qScoreMax;

        if ($question->getType() === 'texte_libre') {
            $studentText = $request->request->get('texte_' . $question->getId());
            $studentText = is_string($studentText) ? $studentText : '';
            
            if (strlen(trim($studentText)) >= 50) {
                $langue = $test->getLangue();
                $langueNom = $langue ? $langue->getNom() : 'Français';
                
                try {
                    $correction = $aiCorrection->correctFreeText(
                        $studentText,
                        $question->getEnonce(),
                        $langueNom,
                        'B1'
                    );
                    $iaScore = $correction['score'] ?? 50;
                    $questionScore = ($iaScore / 100.0) * $qScoreMax;
                } catch (\Exception $e) {
                    $questionScore = $qScoreMax * 0.5; // 50% par défaut si erreur IA
                }
            } else {
                $questionScore = 0;
            }
            $scoreTotal += $questionScore;

        } elseif ($question->getType() === 'oral') {
            $spokenText = $request->request->get('oral_' . $question->getId());
            $spokenText = is_string($spokenText) ? $spokenText : '';
            $expectedText = $question->getEnonce();
            
            // Calcul Levenshtein
            $spokenNorm = mb_strtolower(trim($spokenText));
            $expectedNorm = mb_strtolower(trim($expectedText));
            
            if ($spokenNorm === $expectedNorm) {
                $similarity = 1.0;
            } else {
                $lev = levenshtein($spokenNorm, $expectedNorm);
                $maxLen = max(strlen($spokenNorm), strlen($expectedNorm));
                $similarity = $maxLen > 0 ? 1 - ($lev / $maxLen) : 1.0;
            }
            
            if ($similarity >= 0.85) {
                $questionScore = $qScoreMax;
            } elseif ($similarity >= 0.60) {
                $questionScore = $qScoreMax * 0.5;
            } else {
                $questionScore = 0;
            }
            $scoreTotal += $questionScore;

        } else {
            // QCM
            $reponseId = $request->request->get('question_' . $question->getId());
            $questionScore = 0;
            
            if ($reponseId) {
                $reponse = $entityManager->getRepository(\App\Entity\Reponse::class)->find($reponseId);
                if ($reponse && $reponse->isCorrect()) {
                    $questionScore = $qScoreMax;
                }
            }
            $scoreTotal += $questionScore;
        }
    }

    // ✅ Calcul sécurisé du pourcentage
    $pourcentage = $scoreMax > 0 ? min(100, ($scoreTotal / $scoreMax) * 100) : 0;

    $passage->setScore((int) round($scoreTotal));
    $passage->setScoreMax((int) round($scoreMax));
    $passage->setResultat($pourcentage);
    $passage->setDateFin(new \DateTime());
    
    $dateDebut = $passage->getDateDebut();
    if ($dateDebut) {
        $passage->setTempsPasse((new \DateTime())->getTimestamp() - $dateDebut->getTimestamp());
    }
    
    $passage->setStatut('termine');

    // ✅ Nettoyer les réponses sauvegardées en session
    $sessionKey = 'test_answers_' . $test->getId() . '_' . $user->getId();
    $request->getSession()->remove($sessionKey);
    // ✅ Sauvegarder les détails pour la page résultat
    $detailsForSession = [];
    foreach ($test->getQuestions() as $question) {
        $detail = [
            'enonce' => $question->getEnonce(),
            'type'   => $question->getType(),
        ];
        
        if ($question->getType() === 'qcm') {
            $reponseId = $request->request->get('question_' . $question->getId());
            $selectedReponse = $reponseId ? $entityManager->getRepository(\App\Entity\Reponse::class)->find($reponseId) : null;
            $correctReponse = null;
            foreach ($question->getReponses() as $rep) {
                if ($rep->isCorrect()) { $correctReponse = $rep; break; }
            }
            $detail['selected'] = $selectedReponse ? $selectedReponse->getContenuRep() : 'Non répondu';
            $detail['is_correct'] = $selectedReponse && $selectedReponse->isCorrect();
            $detail['correct_answer'] = $correctReponse ? $correctReponse->getContenuRep() : 'N/A';
        } elseif ($question->getType() === 'oral') {
            $spoken = $request->request->get('oral_' . $question->getId(), '');
            $detail['selected'] = $spoken;
            $detail['is_correct'] = true; // On affiche juste ce qui a été dit
            $detail['correct_answer'] = $question->getEnonce();
        } elseif ($question->getType() === 'texte_libre') {
            $texte = $request->request->get('texte_' . $question->getId(), '');
            $detail['selected'] = $texte;
            $detail['is_correct'] = strlen(trim($texte)) >= 50;
            $detail['correct_answer'] = '(Corrigé par IA)';
        }
        
        $detailsForSession[] = $detail;
    }
    $request->getSession()->set('test_details_' . $passage->getId(), $detailsForSession);
    $entityManager->flush();

    $niveau = $this->determinerNiveau($pourcentage);

    $this->addFlash('success', sprintf(
        'Test terminé ! Score : %.1f%% → Niveau : %s',
        $pourcentage,
        $niveau
    ));

    return $this->redirectToRoute('app_test_student_result', ['id' => $passage->getId()]);
}

    #[Route('/etudiant/result/{id}', name: 'app_test_student_result', methods: ['GET'])]
    public function studentResults(
        TestPassage $passage,
        Request $request,
        ExamModeService $examService,
        EntityManagerInterface $entityManager
    ): Response {
        $user = $this->getUser();
        if (!$user instanceof User) {
            $this->addFlash('error', 'Vous devez être connecté.');
            return $this->redirectToRoute('app_login');
        }

        if ($passage->getUser() !== $user) {
            throw $this->createAccessDeniedException();
        }

        $test = $passage->getTest();
        $examAnalysis = null;
        if ($test && $examService->isExamMode($test)) {
            $examAnalysis = $examService->analyzeSuspiciousActivity($passage);
            $passageId = $passage->getId();
            if ($passageId) $examService->clearSessionEvents($passageId);
        }

        // ✅ Récupérer les détails depuis la session
        $details = $request->getSession()->get('test_details_' . $passage->getId(), []);

        // ✅ Historique des passages (pour ce test et cet utilisateur)
        $historique = $entityManager->getRepository(TestPassage::class)->findBy(
            ['test' => $test, 'user' => $user, 'statut' => 'termine'],
            ['dateFin' => 'DESC']
        );

        $langue = $test ? $test->getLangue() : null;
        $resultat = $passage->getResultat() ?? 0.0;

        return $this->render('test_student/result.html.twig', [
            'test'         => $test,
            'passage'      => $passage,
            'langue'       => $langue,
            'niveau'       => $this->determinerNiveau($resultat),
            'examAnalysis' => $examAnalysis,
            'details'      => $details,
            'historique'   => $historique,
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
): Response {
    $search = $request->query->get('search', '');
    $statut = $request->query->get('statut', '');
    $langueId = $request->query->get('langue', '');
    $testId = $request->query->get('test', '');

    // ✅ Utiliser la méthode du repository
    $searchStr = is_string($search) ? $search : null;
    $statutStr = is_string($statut) ? $statut : null;
    $langueIdStr = is_string($langueId) ? $langueId : null;
    $testIdStr = is_string($testId) ? $testId : null;
    
    $passages = $testPassageRepository->findByFilters($searchStr, $statutStr, $langueIdStr, $testIdStr);

    $totalPassages = $testPassageRepository->count([]);
    $termineCount  = $testPassageRepository->count(['statut' => 'termine']);
    $enCoursCount  = $testPassageRepository->count(['statut' => 'en_cours']);
    
    // ✅ Utiliser la méthode du repository
    $scoreMoyen = $testPassageRepository->getAverageScore();

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
        $user = $this->getUser();

        if (!$user instanceof User) {
            $this->addFlash('error', 'Vous devez être connecté.');
            return $this->redirectToRoute('app_login');
        }

        $langue = $em->getRepository(Langue::class)->find($langueId);

        if (!$langue) {
            throw $this->createNotFoundException();
        }

        $analysis = $analyzer->analyzeUserPerformance($user, $langue);

        $recommendations = null;
        if ($analysis['has_data']) {
            $recommendations = $analyzer->generateAIRecommendations($user, $langue, $analysis);
        }

        return $this->render('test_student/analyse.html.twig', [
            'user'            => $user,
            'langue'          => $langue,
            'analysis'        => $analysis,
            'recommendations' => $recommendations
        ]);
    }
}