<?php
namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FaceController extends AbstractController
{
    #[Route('/face-setup/save', name: 'app_face_save', methods: ['POST'])]
    public function save(Request $request, EntityManagerInterface $em): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $userId = $data['user_id'];
        $descriptor = json_encode($data['descriptor']);

        $user = $em->getRepository(User::class)->find($userId);
        $user->setFaceDescriptor($descriptor);
        $em->flush();

        return new JsonResponse(['success' => true]);
    }

    #[Route('/face-setup/{id}', name: 'app_face_setup')]
    public function setup(User $user): Response
    {
        return $this->render('face/setup.html.twig', [
            'user' => $user
        ]);
    }

    #[Route('/face-verify', name: 'app_face_verify', methods: ['POST'])]
    public function verify(Request $request, EntityManagerInterface $em): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $userId = $data['user_id'];
        $inputDescriptor = $data['descriptor'];

        $user = $em->getRepository(User::class)->find($userId);

        if (!$user || !$user->getFaceDescriptor()) {
            return new JsonResponse(['match' => false]);
        }

        $savedDescriptor = json_decode($user->getFaceDescriptor(), true);

        $distance = 0;
        foreach ($savedDescriptor as $i => $val) {
            $distance += pow($val - $inputDescriptor[$i], 2);
        }
        $distance = sqrt($distance);

        $match = $distance < 0.6;

        return new JsonResponse(['match' => $match, 'distance' => $distance]);
    }

    #[Route('/face-verify-page', name: 'app_face_verify_page')]
    public function verifyPage(): Response
    {
        /** @var \App\Entity\User $user */
        $user = $this->getUser();

        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

        if (!$user->getFaceDescriptor()) {
            return $this->redirectToRoute('app_default_redirect');
        }

        return $this->render('face/verify.html.twig', [
            'user' => $user
        ]);
    }

    #[Route('/face-success', name: 'app_face_success')]
    public function faceSuccess(EntityManagerInterface $em): Response
    {
        /** @var \App\Entity\User $user */
        $user = $this->getUser();

        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

        $user->setStatut('online');
        $em->flush();

        if (in_array('ROLE_ADMIN', $user->getRoles(), true)) {
            return $this->redirectToRoute('dashboard');
        }

        return $this->redirectToRoute('app_home');
    }
}