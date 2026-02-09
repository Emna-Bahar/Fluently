<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegisterType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RegisterController extends AbstractController
{
    #[Route('/register', name: 'app_register')]
    public function index(Request $request, EntityManagerInterface $em): Response
    {
        // 1️⃣ Créer le formulaire
        $form = $this->createForm(RegisterType::class);

        // 2️⃣ Gérer la requête
        $form->handleRequest($request);

        // 3️⃣ Si le formulaire est soumis et valide
        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            // Vérifier si l'email existe déjà
            $existingUser = $em->getRepository(User::class)->findOneBy(['email' => $data['email']]);
            if ($existingUser) {
                $this->addFlash('error', 'Cet email est déjà utilisé.');
                return $this->render('register/index.html.twig', [
                    'form' => $form->createView(),
                ]);
            }

            // Créer l'utilisateur
            $user = new User();
            $user->setNom($data['full_name']);
            $user->setPrenom($data['username']);
            $user->setEmail($data['email']);
            $user->setPassword(password_hash($data['password'], PASSWORD_DEFAULT));
            $user->setRole($data['role'] ?? 'etudiant'); // si vous ajoutez le role au formulaire
            $user->setStatut('online');

            $em->persist($user);
            $em->flush();

            $this->addFlash('success', 'Registration successful! You can now log in.');
            return $this->redirectToRoute('app_login');
        }

        // 4️⃣ Envoyer le formulaire à Twig
        return $this->render('register/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
