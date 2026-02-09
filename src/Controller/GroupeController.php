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
             $currentUserId = $this->getUser()?->getId(); // PLACEHOLDERPLACEHOLDERPLACEHOLDER | MBA3ED RODHA: $currentUserId = $this->getUser()?->getId();
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
    
    #[Route('/messages/{id}/delete', name: 'app_message_delete', methods: ['POST'])]
        public function deleteMessage(Message $message, Request $request, EntityManagerInterface $em): Response
        {
            if (!$this->isCsrfTokenValid('del_msg_' . $message->getId(), $request->request->get('_token'))) {
                throw $this->createAccessDeniedException('Bad CSRF token');
            }

            $currentUserId = 1; //PLACEHOLDERPLACEHOLDERPLACEHOLDER | MBA3ED RODHA: $currentUserId = $this->getUser()?->getId();
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
        public function editMessage(Message $message, Request $request, EntityManagerInterface $em): Response
        {
            $currentUserId = 1; // placeholder for now
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
            $user = $userRepository->find(1);  ##PLACEHOLDER PLACEHOLDER PLACEHOLDER PLACEHOLDER PLACEHOLDER PLACEHOLDER PLACEHOLDER 
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

    #[Route('/adminGroup', name: 'admin_group_index', methods: ['GET'])]
        public function adminGroupIndex(GroupeRepository $groupeRepo): Response
        {
            return $this->render('groupe/admin_groups.html.twig', [
                'groupes' => $groupeRepo->findAll(),
            ]);
        }

    
    #[Route('/adminGroup/{id}', name: 'admin_group_manage', methods: ['GET'])]
        public function adminGroupManage(
            Groupe $groupe,
            MessageRepository $messageRepo,
            Request $request
        ): Response {
            $q = trim((string) $request->query->get('q', ''));

            if ($q !== '') {
                $messages = $messageRepo->createQueryBuilder('m')
                    ->leftJoin('m.id_user_id', 'u')
                    ->andWhere('m.id_groupe_id = :g')
                    ->andWhere('m.contenu LIKE :q OR u.nom LIKE :q OR u.prenom LIKE :q')
                    ->setParameter('g', $groupe)
                    ->setParameter('q', '%' . $q . '%')
                    ->orderBy('m.date_creation', 'DESC')
                    ->getQuery()
                    ->getResult();
            } else {
                $messages = $messageRepo->findBy(['Id_groupe' => $groupe], ['date_creation' => 'DESC']);
            }

            return $this->render('groupe/admin_group_chat.html.twig', [
                'groupe' => $groupe,
                'messages' => $messages,
                'q' => $q,
            ]);
        }

    #[Route('/adminGroup/message/{id}/delete', name: 'admin_message_delete', methods: ['POST'])]
        public function adminDeleteMessage(
            Message $message,
            Request $request,
            EntityManagerInterface $em
        ): Response {
            if (!$this->isCsrfTokenValid('admin_del_msg_' . $message->getId(), $request->request->get('_token'))) {
                throw $this->createAccessDeniedException('Bad CSRF token');
            }

            $groupId = $message->getIdGroupe()->getId();
            $em->remove($message);
            $em->flush();

            return $this->redirectToRoute('admin_group_manage', ['id' => $groupId]);
        }



}