<?php

namespace App\Controller;

use App\Entity\Cours;
use App\Entity\User;
use App\Form\CoursPersonnaliseType;
use App\Message\GenererCoursMessage;
use App\Message\GenererCoursData;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/cours-personnalise')]
class CoursPersonnaliseController extends AbstractController
{
    private function getTypedUser(): ?User
    {
        $user = $this->getUser();
        
        if (!$user instanceof User) {
            return null;
        }
        
        return $user;
    }

    #[Route('/generer/{id}', name: 'app_cours_personnalise_generer')]
    public function generer(
        Request $request,
        Cours $cours,
        EntityManagerInterface $em,
        MessageBusInterface $bus
    ): Response {
        $user = $this->getTypedUser();

        if (!$user) {
            $this->addFlash('error', 'Vous devez être connecté.');
            return $this->redirectToRoute('app_login');
        }

        $form = $this->createForm(CoursPersonnaliseType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var array{
             *     vocabulaire?: string,
             *     grammaire?: string,
             *     nouveauxMots?: string,
             *     themesYoutube?: string
             * } $formData 
             */
            $formData = $form->getData();
            
            $data = new GenererCoursData(
                $formData['vocabulaire'] ?? null,
                $formData['grammaire'] ?? null,
                $formData['nouveauxMots'] ?? null,
                $formData['themesYoutube'] ?? null
            );

            $bus->dispatch(new GenererCoursMessage(
                $data,
                (int) $cours->getId(),
                (int) $user->getId()
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