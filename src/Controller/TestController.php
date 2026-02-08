<?php

namespace App\Controller;

use App\Entity\Test;
use App\Entity\Question;
use App\Entity\Reponse;
use App\Entity\Langue;
use App\Form\TestType;
use App\Repository\TestRepository;
use App\Repository\ReponseRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/admin/test')]
final class TestController extends AbstractController
{
    // ==================== PARTIE ADMIN (DASHBOARD) ====================
    
    #[Route('', name: 'app_test_index', methods: ['GET'])]
public function index(Request $request, TestRepository $testRepository): Response
{
    $search = $request->query->get('search', '');
    $type = $request->query->get('type', '');
    $langueId = $request->query->get('langue', '');

    $queryBuilder = $testRepository->createQueryBuilder('t')
        ->leftJoin('t.Id_langue', 'l')
        ->leftJoin('t.questions', 'q');

    // Filtre par recherche (type)
    if ($search) {
        $queryBuilder->andWhere('LOWER(t.type) LIKE :search')
                     ->setParameter('search', '%' . strtolower($search) . '%');
    }

    // Filtre par type
    if ($type) {
        $queryBuilder->andWhere('t.type = :type')
                     ->setParameter('type', $type);
    }

    // Filtre par langue
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
    
    // ==================== PARTIE FRONT (ÉTUDIANT) ====================
    
    #[Route('/etudiant/{id}', name: 'app_test_student_show', methods: ['GET'])]
    public function studentShow(Test $test): Response
    {
        // Vérifier si l'utilisateur est connecté
        $this->denyAccessUnlessGranted('ROLE_USER');
        
        // Vérifier si c'est bien un test de niveau
        if ($test->getType() !== 'Test de niveau') {
            $this->addFlash('warning', 'Ce test n\'est pas un test de niveau.');
            return $this->redirectToRoute('app_langue_apprentissage', [
                'id' => $test->getIdLangue()->getId()
            ]);
        }
        
        return $this->render('test_student/show.html.twig', [
            'test' => $test,
            'langue' => $test->getIdLangue(),
        ]);
    }
    
    #[Route('/etudiant/{id}/submit', name: 'app_test_student_submit', methods: ['POST'])]
    public function studentSubmit(
        Request $request, 
        Test $test, 
        EntityManagerInterface $entityManager,
        ReponseRepository $reponseRepository
    ): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        $user = $this->getUser();
        
        $scoreTotal = 0;
        $questions = $test->getQuestions();
        $reponsesData = [];
        
        // Récupérer toutes les réponses
        foreach ($questions as $question) {
            $reponseId = $request->request->get('question_' . $question->getId());
            $reponsesData[$question->getId()] = $reponseId;
            
            if ($reponseId) {
                $reponse = $reponseRepository->find($reponseId);
                if ($reponse && $reponse->isEstCorrecte()) {
                    $scoreTotal += $question->getScoreMax();
                }
            }
        }
        
        // Calculer le pourcentage
        $scoreMaxPossible = 0;
        foreach ($questions as $question) {
            $scoreMaxPossible += $question->getScoreMax();
        }
        
        $pourcentage = $scoreMaxPossible > 0 ? ($scoreTotal / $scoreMaxPossible) * 100 : 0;
        
        // Mettre à jour le test avec le résultat
        $test->setResultat($pourcentage);
        $test->setIdUser($user);
        $test->setDatePassage(new \DateTime());
        
        $entityManager->flush();
        
        // Déterminer le niveau basé sur le score
        $niveau = $this->determinerNiveau($pourcentage);
        
        $this->addFlash('success', sprintf(
            'Test terminé avec succès ! Score : %.1f%%. Niveau déterminé : %s', 
            $pourcentage, 
            $niveau
        ));
        
        // Rediriger vers la page de résultats
        return $this->redirectToRoute('app_test_student_results', [
            'id' => $test->getId(),
            'score' => $scoreTotal,
            'max' => $scoreMaxPossible,
            'pourcentage' => $pourcentage,
            'niveau' => $niveau,
            'reponses' => json_encode($reponsesData)
        ]);
    }
    
    #[Route('/etudiant/{id}/results', name: 'app_test_student_results', methods: ['GET'])]
    public function studentResults(
        Test $test, 
        Request $request
    ): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        
        $score = $request->query->get('score', 0);
        $max = $request->query->get('max', 100);
        $pourcentage = $request->query->get('pourcentage', 0);
        $niveau = $request->query->get('niveau', 'A1');
        $reponsesData = json_decode($request->query->get('reponses', '{}'), true);
        
        return $this->render('test_student/results.html.twig', [
            'test' => $test,
            'langue' => $test->getIdLangue(),
            'score' => $score,
            'max' => $max,
            'pourcentage' => $pourcentage,
            'niveau' => $niveau,
            'reponsesData' => $reponsesData,
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
}