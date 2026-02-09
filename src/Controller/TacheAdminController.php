<?php

namespace App\Controller;

use App\Entity\Tache;
use App\Form\TacheType;
use App\Repository\TacheRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Dompdf\Dompdf;
use Dompdf\Options;

#[Route('/admin/tache')]
final class TacheAdminController extends AbstractController
{
    // ===================== LISTE =====================
    #[Route('/', name: 'app_tache_admin_index', methods: ['GET'])]
    public function index(TacheRepository $tacheRepository): Response
    {
        return $this->render('tache_admin/index.html.twig', [
            'taches' => $tacheRepository->findAll(),
        ]);
    }

    // ===================== AJOUT =====================
    #[Route('/new', name: 'app_tache_admin_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $tache = new Tache();
        $form = $this->createForm(TacheType::class, $tache);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($tache);
            $entityManager->flush();

            return $this->redirectToRoute('app_tache_admin_index');
        }

        return $this->render('tache_admin/new.html.twig', [
            'form' => $form,
        ]);
    }

    // ===================== AFFICHER =====================
    #[Route('/{id<\d+>}', name: 'app_tache_admin_show', methods: ['GET'])]
    public function show(Tache $tache): Response
    {
        return $this->render('tache_admin/show.html.twig', [
            'tache' => $tache,
        ]);
    }

    // ===================== MODIFIER =====================
    #[Route('/{id<\d+>}/edit', name: 'app_tache_admin_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Tache $tache, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(TacheType::class, $tache);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            return $this->redirectToRoute('app_tache_admin_index');
        }

        return $this->render('tache_admin/edit.html.twig', [
            'form' => $form,
            'tache' => $tache,
        ]);
    }

    // ===================== SUPPRIMER =====================
    #[Route('/{id<\d+>}', name: 'app_tache_admin_delete', methods: ['POST'])]
    public function delete(Request $request, Tache $tache, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$tache->getId(), $request->request->get('_token'))) {
            $entityManager->remove($tache);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_tache_admin_index');
    }

    // ===================== EXPORT PDF =====================
    #[Route('/export-pdf', name: 'app_tache_admin_export_pdf', methods: ['GET'])]
    public function exportPdf(TacheRepository $tacheRepository): Response
    {
        $taches = $tacheRepository->findAll();

        $options = new Options();
        $options->set('defaultFont', 'DejaVu Sans');
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isRemoteEnabled', true);

        $dompdf = new Dompdf($options);

        $html = $this->renderView('tache_admin/pdf.html.twig', [
            'taches' => $taches,
            'date' => new \DateTime(),
        ]);

        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        return new Response(
            $dompdf->output(),
            200,
            [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'attachment; filename="taches.pdf"',
            ]
        );
    }
}
