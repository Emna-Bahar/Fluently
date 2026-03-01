<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class ProfileController extends AbstractController
{
    #[Route('/profile', name: 'app_profile')]
    public function index(
        Request $request,
        EntityManagerInterface $em,
        UserPasswordHasherInterface $passwordHasher
    ): Response
    {
        $user = $this->getUser();

        if (!$user instanceof User) {
            return $this->redirectToRoute('app_login');
        }

        $session = $request->getSession();

        if ($request->isMethod('POST')) {
            // Fix all argument.type errors: cast all request values to string
            $nom             = (string) $request->request->get('nom', '');
            $prenom          = (string) $request->request->get('prenom', '');
            $email           = (string) $request->request->get('email', '');
            $role            = (string) $request->request->get('role', '');
            $password        = (string) $request->request->get('password', '');
            $confirmPassword = (string) $request->request->get('confirm_password', '');

            $this->clearSessionErrors($session);
            $hasError = false;

            // VALIDATION 1: Nom
            if (empty($nom)) {
                $session->set('error_nom', 'Le nom est requis.');
                $hasError = true;
            } elseif (preg_match('/\d/', $nom)) {
                $session->set('error_nom', 'Le nom ne doit pas contenir de chiffres.');
                $hasError = true;
            } elseif (strlen($nom) < 2) {
                $session->set('error_nom', 'Le nom doit contenir au moins 2 caractères.');
                $hasError = true;
            }

            if ($hasError) {
                return $this->render('profile/index.html.twig', ['user' => $user]);
            }

            // VALIDATION 2: Prénom
            if (empty($prenom)) {
                $session->set('error_prenom', 'Le prénom est requis.');
                $hasError = true;
            } elseif (strlen($prenom) < 2) {
                $session->set('error_prenom', 'Le prénom doit contenir au moins 2 caractères.');
                $hasError = true;
            }

            if ($hasError) {
                return $this->render('profile/index.html.twig', ['user' => $user]);
            }

            // VALIDATION 3: Email
            if (empty($email)) {
                $session->set('error_email', 'L\'email est requis.');
                $hasError = true;
            } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $session->set('error_email', 'Veuillez saisir un email valide.');
                $hasError = true;
            } else {
                $existingUser = $em->getRepository(User::class)
                    ->findOneBy(['email' => $email]);

                if ($existingUser && $existingUser->getId() !== $user->getId()) {
                    $session->set('error_email', 'Cet email est déjà utilisé par un autre compte.');
                    $hasError = true;
                }
            }

            if ($hasError) {
                return $this->render('profile/index.html.twig', ['user' => $user]);
            }

            // VALIDATION 4: Password
            if (!empty($password)) {
                if (strlen($password) < 6) {
                    $session->set('error_password', 'Le mot de passe doit contenir au moins 6 caractères.');
                    $hasError = true;
                } elseif ($password !== $confirmPassword) {
                    $session->set('error_confirm_password', 'Les mots de passe ne correspondent pas.');
                    $hasError = true;
                }

                if ($hasError) {
                    return $this->render('profile/index.html.twig', ['user' => $user]);
                }
            }

            // VALIDATION 5: Role
            if (empty($role)) {
                $session->set('error_role', 'Le rôle est requis.');
                $hasError = true;
            }

            if ($hasError) {
                return $this->render('profile/index.html.twig', ['user' => $user]);
            }

            // UPDATE USER
            $user->setNom($nom);
            $user->setPrenom($prenom);
            $user->setEmail($email);
            $user->setRoles(['ROLE_' . strtoupper($role)]);

            if (!empty($password)) {
                $hashedPassword = $passwordHasher->hashPassword($user, $password);
                $user->setPassword($hashedPassword);
            }

            $em->flush();

            $this->clearSessionErrors($session);
            $this->addFlash('success', 'Profil mis à jour avec succès !');

            return $this->redirectToRoute('app_profile');
        }

        return $this->render('profile/index.html.twig', [
            'user' => $user,
        ]);
    }

    // Fix line 146: add SessionInterface type to $session parameter
    private function clearSessionErrors(SessionInterface $session): void
    {
        $errors = [
            'error_nom', 'error_prenom', 'error_email',
            'error_password', 'error_confirm_password', 'error_role'
        ];

        foreach ($errors as $error) {
            $session->remove($error);
        }
    }
}