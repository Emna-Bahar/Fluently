<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class SessionController extends AbstractController
{
    #[Route('/session', name: 'app_session')]
    public function index(): Response
    {
        return $this->render('session/index.html.twig');
    }

    #[Route('/session/{id}', name: 'app_session_single')]
    public function single($id): Response
    {
        return $this->render('session/single.html.twig', [
            'id' => $id,
        ]);
    }
}