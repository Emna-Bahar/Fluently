<?php

namespace App\Controller;

use App\Entity\Test;
use App\Entity\Reponse;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/test')]
final class TestStudentController extends AbstractController
{
    /**
     * Afficher le test pour que l'étudiant le passe
     */
   /* #[Route('/{id}', name: 'app_test_student_show', methods: ['GET'])]
    public function show(Test $test): Response
    {
        // Vérifier que le test a des questions
        if ($test->getQuestions()->count() === 0) {
            $this->addFlash('warning', 'Ce test n\'a pas encore de questions.');
            return $this->redirectToRoute('app_langue_index');
        }

        return $this->render('test_student/show.html.twig', [
            'test' => $test,
        ]);
    }*/

    /**
     * Soumettre les réponses et calculer le score
     */
    /*#[Route('/{id}/submit', name: 'app_test_student_submit', methods: ['POST'])]
    public function submit(Test $test, Request $request, EntityManagerInterface $entityManager): Response
    {
        $data = $request->request->all();
        
        // Calculer le score
        $totalScore = 0;
        $maxScore = 0;
        $correctAnswers = 0;
        $totalQuestions = $test->getQuestions()->count();
        $details = [];

        foreach ($test->getQuestions() as $question) {
            $maxScore += $question->getScoreMax();
            
            // Récupérer la réponse de l'étudiant pour cette question
            $studentAnswerId = $data['question_' . $question->getId()] ?? null;
            
            if ($studentAnswerId) {
                // Trouver la réponse sélectionnée
                $selectedReponse = $entityManager->getRepository(Reponse::class)->find($studentAnswerId);
                
                if ($selectedReponse && $selectedReponse->isCorrect()) {
                    // Bonne réponse
                    $totalScore += $selectedReponse->getScore();
                    $correctAnswers++;
                    $details[$question->getId()] = [
                        'question' => $question->getEnonce(),
                        'correct' => true,
                        'score' => $selectedReponse->getScore(),
                        'selected' => $selectedReponse->getContenuRep(),
                    ];
                } else {
                    // Mauvaise réponse
                    $details[$question->getId()] = [
                        'question' => $question->getEnonce(),
                        'correct' => false,
                        'score' => 0,
                        'selected' => $selectedReponse ? $selectedReponse->getContenuRep() : 'Aucune',
                        'correctAnswer' => $this->getCorrectAnswer($question),
                    ];
                }
            } else {
                // Pas de réponse
                $details[$question->getId()] = [
                    'question' => $question->getEnonce(),
                    'correct' => false,
                    'score' => 0,
                    'selected' => 'Aucune réponse',
                    'correctAnswer' => $this->getCorrectAnswer($question),
                ];
            }
        }

        // Calculer le pourcentage
        $pourcentage = $maxScore > 0 ? round(($totalScore / $maxScore) * 100, 2) : 0;

        // Mettre à jour le test avec le résultat
        $test->setResultat($pourcentage);
        $test->setDatePassage(new \DateTime());
        $entityManager->flush();

        // Stocker les détails en session pour la page de résultat
        $request->getSession()->set('test_results', [
            'test_id' => $test->getId(),
            'test_type' => $test->getType(),
            'langue' => $test->getIdLangue() ? $test->getIdLangue()->getNom() : 'Non définie',
            'total_questions' => $totalQuestions,
            'correct_answers' => $correctAnswers,
            'total_score' => $totalScore,
            'max_score' => $maxScore,
            'pourcentage' => $pourcentage,
            'details' => $details,
        ]);

        return $this->redirectToRoute('app_test_student_result', ['id' => $test->getId()]);
    }*/

    /**
     * Afficher le résultat du test
     */
    /*#[Route('/{id}/result', name: 'app_test_student_result', methods: ['GET'])]
    public function result(Test $test, Request $request): Response
    {
        $results = $request->getSession()->get('test_results');

        if (!$results || $results['test_id'] !== $test->getId()) {
            $this->addFlash('error', 'Aucun résultat disponible pour ce test.');
            return $this->redirectToRoute('app_langue_index');
        }

        // Effacer les résultats de la session après affichage
        $request->getSession()->remove('test_results');

        return $this->render('test_student/result.html.twig', [
            'test' => $test,
            'results' => $results,
        ]);
    }*/

    /**
     * Obtenir la bonne réponse pour une question
     */
   /* private function getCorrectAnswer($question): string
    {
        foreach ($question->getReponses() as $reponse) {
            if ($reponse->isCorrect()) {
                return $reponse->getContenuRep();
            }
        }
        return 'Aucune réponse correcte définie';
    }*/
}