<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class GroupeController extends AbstractController
{
    #[Route('/groupes', name: 'app_groupe')]
public function instructors(): Response
{
    return $this->render('groupe/index.html.twig');
}

#[Route('/groupes/{id}', name: 'app_groupe_details')]
public function instructorDetails(int $id): Response
{
    // Logique pour récupérer l'instructeur
    return $this->render('groupe/details.html.twig', [
        'group_id' => $id
    ]);
}
}