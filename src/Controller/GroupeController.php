<?php

namespace App\Controller;
use App\Entity\Message;
use App\Repository\UserRepository;
use App\Entity\Groupe;
use App\Repository\GroupeRepository;
use App\Repository\MessageRepository;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class GroupeController extends AbstractController
{
    #[Route('/groupes', name: 'app_groupe', methods: ['GET'])]
    public function index(GroupeRepository $groupeRepository): Response
    {
        return $this->render('groupe/index.html.twig', [
            'groupes' => $groupeRepository->findAll(),
        ]);
    }

    
    #[Route('/groupes/{id}', name: 'app_groupe_details', methods: ['GET'])]
    public function show(
        Groupe $groupe,
        MessageRepository $messageRepository
        ):Response {
            $messages = $messageRepository->findBy(
                ['Id_groupe' => $groupe],
                ['date_creation' => 'ASC']
            );

            return $this->render('groupe/details.html.twig', [
                'groupe' => $groupe,
                'messages' => $messages,
            ]); 
        }
    
    #[Route('/groupes/{id}/message', name: 'app_groupe_message', methods: ['POST'])]
public function sendMessage(
    Request $request,
    Groupe $groupe,
    EntityManagerInterface $em,
    UserRepository $userRepository
): Response {
    $contenu = trim((string) $request->request->get('contenu'));

    if ($contenu === '') {
        return $this->redirectToRoute('app_groupe_details', [
            'id' => $groupe->getId(),
        ]);
    }

    $now = new \DateTime();

    $message = new Message();
    $message->setContenu($contenu);
    $user = $userRepository->find(1);  #TABDILET ID USER AVEC LA SESSION
    $message->setIdUser($user);
    $message->setIdGroupe($groupe);
    
    // REQUIRED FIELDS (to avoid "cannot be null")
    $message->setTypeMessage('text');
    $message->setIsEpingle(false);
    $message->setStatutMessage('sent');
    $message->setDateCreation($now);
    $message->setDateModif($now);

    // optional (nullable)
    $message->setEmojiReact(null);

    $em->persist($message);
    $em->flush();

    return $this->redirectToRoute('app_groupe_details', [
        'id' => $groupe->getId(),
    ]);
}



}