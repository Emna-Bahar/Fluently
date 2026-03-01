<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegisterType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class RegisterController extends AbstractController
{
    #[Route('/register', name: 'app_register')]
    public function register(
        Request $request,
        EntityManagerInterface $em,
        UserPasswordHasherInterface $passwordHasher
    ): Response {

        $user = new User();

        $form = $this->createForm(RegisterType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // Split full_name
            $fullName = (string) $form->get('full_name')->getData();
            $parts = explode(' ', $fullName, 2);

            $user->setNom($parts[0]);
            $user->setPrenom($parts[1] ?? '');

            $user->setEmail((string) $form->get('email')->getData());

            // Hash password — cast to string to satisfy PHPStan
            $hashedPassword = $passwordHasher->hashPassword(
                $user,
                (string) $form->get('password')->getData()
            );

            $user->setPassword($hashedPassword);

            // Fix: cast $selectedRole to string
            $selectedRole = (string) $request->request->get('role', 'user');

            $roles = match($selectedRole) {
                'admin'   => ['ROLE_ADMIN'],
                'teacher' => ['ROLE_TEACHER'],
                'student' => ['ROLE_STUDENT'],
                default   => ['ROLE_USER'],
            };

            $user->setRoles($roles);
            $user->setStatut('active');

            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('app_face_setup', ['id' => $user->getId()]);
        }

        return $this->render('register/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}