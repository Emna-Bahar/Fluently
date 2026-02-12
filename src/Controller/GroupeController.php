<?php

namespace App\Controller;

use App\Entity\Message;
use App\Entity\Groupe;
use App\Repository\GroupeRepository;
use App\Repository\MessageRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
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
        MessageRepository $messageRepository,
        Request $request
    ): Response {
        $session = $request->getSession();
        $currentUserId = $session->get('user_id'); // ✅ FIX

        $messages = $messageRepository->findBy(
            ['Id_groupe' => $groupe],
            ['date_creation' => 'ASC']
        );

        return $this->render('groupe/details.html.twig', [
            'groupe' => $groupe,
            'messages' => $messages,
            'currentUserId' => $currentUserId,
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

        $session = $request->getSession();
        $userId = $session->get('user_id'); // ✅ FIX

        if (!$userId) {
            throw $this->createAccessDeniedException('User not logged in');
        }

        $user = $userRepository->find($userId); // ✅ NOW VALID

        $now = new \DateTime();

        $message = new Message();
        $message->setContenu($contenu);
        $message->setIdUser($user);
        $message->setIdGroupe($groupe);
        $message->setTypeMessage('text');
        $message->setIsEpingle(false);
        $message->setStatutMessage('sent');
        $message->setDateCreation($now);
        $message->setDateModif($now);
        $message->setEmojiReact(null);

        $em->persist($message);
        $em->flush();

        return $this->redirectToRoute('app_groupe_details', [
            'id' => $groupe->getId(),
        ]);
    }

    #[Route('/messages/{id}/delete', name: 'app_message_delete', methods: ['POST'])]
    public function deleteMessage(
        Message $message,
        Request $request,
        EntityManagerInterface $em
    ): Response {
        if (!$this->isCsrfTokenValid('del_msg_' . $message->getId(), $request->request->get('_token'))) {
            throw $this->createAccessDeniedException('Bad CSRF token');
        }

        $session = $request->getSession();
        $currentUserId = $session->get('user_id'); // ✅ FIX

        $ownerId = $message->getIdUser()?->getId();

        if ($ownerId !== $currentUserId) {
            throw $this->createAccessDeniedException('Not your message');
        }

        $groupeId = $request->request->getInt('groupeId');

        $em->remove($message);
        $em->flush();

        return $this->redirectToRoute('app_groupe_details', ['id' => $groupeId]);
    }

    #[Route('/messages/{id}/edit', name: 'app_message_edit', methods: ['POST'])]
    public function editMessage(
        Message $message,
        Request $request,
        EntityManagerInterface $em
    ): Response {
        $session = $request->getSession();
        $currentUserId = $session->get('user_id'); // ✅ FIX

        $ownerId = $message->getIdUser()?->getId();

        if ($ownerId !== $currentUserId) {
            throw $this->createAccessDeniedException('Not your message');
        }

        $contenu = trim((string) $request->request->get('contenu'));

        if ($contenu !== '') {
            $message->setContenu($contenu);
            $message->setDateModif(new \DateTime());
            $em->flush();
        }

        $groupeId = $request->request->getInt('groupeId');

        return $this->redirectToRoute('app_groupe_details', ['id' => $groupeId]);
    }
}