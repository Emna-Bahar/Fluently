<?php

namespace App\Controller;

use App\Entity\Cours;
use App\Form\CoursPersonnaliseType;
use App\Message\GenererCoursMessage;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/cour s-personnalise')]
class CoursPersonnaliseController extends AbstractController
{
    #[Route('/generer/{id}', name: 'app_cours_personnalise_generer')]
    public function generer(
        Request $request, 
        Cours $cours, 
        EntityManagerInterface $em,
        MessageBusInterface $bus  // ← INJECTE LE MESSAGE BUS
    ): Response
    {
        // Récupérer l'utilisateur connecté
        $session = $request->getSession();
        $userId = $session->get('user_id');
        $user = $userId ? $em->getRepository(\App\Entity\User::class)->find($userId) : null;

        if (!$user) {
            $this->addFlash('error', 'Vous devez être connecté.');
            return $this->redirectToRoute('app_login');
        }

        // Créer le formulaire
        $form = $this->createForm(CoursPersonnaliseType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            
            // 👇 DISPATCHER LE MESSAGE AU LIEU D'APPELER DIRECTEMENT L'API
            $bus->dispatch(new GenererCoursMessage(
                $data,
                $cours->getId(),
                $user->getId()
            ));
            
            $this->addFlash('success', '🎉 Votre cours personnalisé a été mis en file d\'attente. Il sera disponible dans quelques instants.');
            
            return $this->redirectToRoute('app_cours_show', ['id' => $cours->getId()]);
        }

        return $this->render('cours_personnalise/generer.html.twig', [
            'form' => $form->createView(),
            'cours' => $cours
        ]);
    }
}