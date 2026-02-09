<?php

namespace App\Controller;

use App\Entity\Test;
use App\Entity\TestPassage;
use App\Entity\Question;
use App\Entity\Reponse;
use App\Form\TestType;
use App\Repository\TestRepository;
use App\Repository\ReponseRepository;
use App\Repository\TestPassageRepository;
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
    public function index(Request $request, TestRepository $testRepository): Response
    {
        $search = $request->query->get('search', '');
        $type = $request->query->get('type', '');
        $langueId = $request->query->get('langue', '');

        $queryBuilder = $testRepository->createQueryBuilder('t')
            ->leftJoin('t.langue', 'l')
            ->leftJoin('t.questions', 'q');

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

        return $this->render('test/index.html.twig', [
            'tests' => $tests,
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
        // Vérifier si l'utilisateur est connecté via session
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

        // Vérifier si le test a déjà été terminé
        $existingTermine = $testPassageRepository->findOneBy([
            'test'   => $test,
            'user'   => $user,
            'statut' => 'termine'
        ]);

        if ($existingTermine) {
            $this->addFlash('info', 'Vous avez déjà terminé ce test.');
            return $this->redirectToRoute('app_test_student_result', ['id' => $existingTermine->getId()]);
        }

        // Vérifier s'il y a un test en cours
        $passageEnCours = $testPassageRepository->findOneBy([
            'test'   => $test,
            'user'   => $user,
            'statut' => 'en_cours'
        ]);

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
        // Vérifier si l'utilisateur est connecté via session
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

        // Vérifier s'il y a déjà un test en cours
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
        ReponseRepository $reponseRepository
    ): Response
    {
        // Vérifier si l'utilisateur est connecté via session
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

        $scoreTotal = 0;
        $questions = $test->getQuestions();

        foreach ($questions as $question) {
            $reponseId = $request->request->get('question_' . $question->getId());

            if ($reponseId) {
                $reponse = $reponseRepository->find($reponseId);
                if ($reponse && $reponse->isCorrect()) {
                    $scoreTotal += $question->getScoreMax();
                }
            }
        }

        $passage->setScore($scoreTotal);
        $passage->setResultat($passage->getScoreMax() > 0 ? ($scoreTotal / $passage->getScoreMax()) * 100 : 0);
        $passage->setDateFin(new DateTime());
        $passage->setTempsPasse((new DateTime())->getTimestamp() - $passage->getDateDebut()->getTimestamp());
        $passage->setStatut('termine');

        $entityManager->flush();

        $niveau = $this->determinerNiveau($passage->getResultat());

        $this->addFlash('success', sprintf(
            'Test terminé ! Score : %.1f%% → Niveau estimé : %s',
            $passage->getResultat(),
            $niveau
        ));

        return $this->redirectToRoute('app_test_student_result', [
            'id' => $passage->getId()
        ]);
    }

    #[Route('/etudiant/results/{id}', name: 'app_test_student_result', methods: ['GET'])]
    public function studentResults(
        TestPassage $passage,
        Request $request,
        EntityManagerInterface $entityManager
    ): Response
    {
        // Vérifier si l'utilisateur est connecté via session
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

        // Vérifier que le passage appartient bien à l'utilisateur connecté
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
   // $this->denyAccessUnlessGranted('ROLE_ADMIN'); // ou ton rôle admin

    // Recherche et filtres
    $search = $request->query->get('search', '');
    $statut = $request->query->get('statut', '');
    $langueId = $request->query->get('langue', '');
    $testId = $request->query->get('test', '');

    $queryBuilder = $testPassageRepository->createQueryBuilder('tp')
        ->leftJoin('tp.test', 't')
        ->leftJoin('t.langue', 'l')
        ->leftJoin('tp.user', 'u');

    // Filtre recherche (sur utilisateur, test, langue, score)
    if ($search) {
        $queryBuilder->andWhere('
            LOWER(u.email) LIKE :search OR 
            LOWER(t.titre) LIKE :search OR 
            LOWER(l.nom) LIKE :search
        ')
        ->setParameter('search', '%' . strtolower($search) . '%');
    }

    // Filtre statut
    if ($statut) {
        $queryBuilder->andWhere('tp.statut = :statut')
                     ->setParameter('statut', $statut);
    }

    // Filtre langue
    if ($langueId) {
        $queryBuilder->andWhere('l.id = :langue')
                     ->setParameter('langue', $langueId);
    }

    // Filtre test spécifique
    if ($testId) {
        $queryBuilder->andWhere('t.id = :test')
                     ->setParameter('test', $testId);
    }

    // Tri par date descendante
    $queryBuilder->orderBy('tp.dateFin', 'DESC');

    $passages = $queryBuilder->getQuery()->getResult();

    // Statistiques rapides
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