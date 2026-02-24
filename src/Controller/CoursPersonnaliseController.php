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

#[Route('/cours-personnalise')]
class CoursPersonnaliseController extends AbstractController
{
    #[Route('/generer/{id}', name: 'app_cours_personnalise_generer')]
    public function generer(
        Request $request,
        Cours $cours,
        EntityManagerInterface $em,
        MessageBusInterface $bus
    ): Response {
        // ✅ FIXED: use Symfony security instead of session
        $user = $this->getUser();

        if (!$user) {
            $this->addFlash('error', 'Vous devez être connecté.');
            return $this->redirectToRoute('app_login');
        }

        $form = $this->createForm(CoursPersonnaliseType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            /** @var \App\Entity\User $user */
         $user = $this->getUser();

            $bus->dispatch(new GenererCoursMessage(
                $data,
                $cours->getId(),
                $user->getId()
            ));

            $this->addFlash('success', '🎉 Votre cours personnalisé a été mis en file d\'attente.');
            return $this->redirectToRoute('app_cours_show', ['id' => $cours->getId()]);
        }

        return $this->render('cours_personnalise/generer.html.twig', [
            'form'  => $form->createView(),
            'cours' => $cours
        ]);
    }
}