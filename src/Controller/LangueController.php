<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class LangueController extends AbstractController
{
  
    #[Route('/Langue', name: 'app_langue')]
    public function index(): Response
    {
        return $this->render('Langue/index.html.twig');
    }
}