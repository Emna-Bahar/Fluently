<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    #[Route('/login', name: 'app_login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        $user = $this->getUser();
        if ($user) {
            return $this->redirectToRoute('app_default_redirect');
        }

        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('login/index.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error,
        ]);
    }

    #[Route('/default-redirect', name: 'app_default_redirect')]
    public function defaultRedirect(EntityManagerInterface $em): Response
    {
        /** @var \App\Entity\User|null $user */
        $user = $this->getUser();

        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

        if ($user->getStatut() === 'disabled') {
            $this->addFlash('error', 'Votre compte est désactivé.');
            $this->container->get('security.token_storage')->setToken(null);
            return $this->redirectToRoute('app_login');
        }

        // If user has face registered → verify first
        if ($user->getFaceDescriptor()) {
            return $this->redirectToRoute('app_face_verify_page');
        }

        $user->setStatut('online');
        $em->flush();

        if (in_array('ROLE_ADMIN', $user->getRoles(), true)) {
            return $this->redirectToRoute('dashboard');
        }

        return $this->redirectToRoute('app_home');
    }

    #[Route('/logout', name: 'app_logout')]
    public function logout(EntityManagerInterface $em): void
    {
        $user = $this->getUser();
        if ($user instanceof User) {
            $user->setStatut('offline');
            $em->flush();
        }

        throw new \LogicException('Logout is handled by Symfony.');
    }
}