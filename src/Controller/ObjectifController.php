<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ObjectifController extends AbstractController
{
    #[Route('/objectif', name: 'app_objectif')]
public function objectif(): Response
{
    return $this->render('objectif/index.html.twig');
}

}