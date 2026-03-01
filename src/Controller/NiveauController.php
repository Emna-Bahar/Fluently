<?php

namespace App\Controller;

use App\Entity\Niveau;
use App\Form\NiveauType;
use App\Repository\NiveauRepository;
use App\Repository\LangueRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\String\Slugger\SluggerInterface;

#[Route('/niveau')]
final class NiveauController extends AbstractController
{
    #[Route('/', name: 'app_niveau_index', methods: ['GET'])]
    public function index(Request $request, NiveauRepository $niveauRepository, LangueRepository $langueRepository): Response
    {
        $langueId   = $request->query->get('langue');
        $difficulte = $request->query->get('difficulte');
        $seuilMin   = $request->query->get('seuil_min');
        $seuilMax   = $request->query->get('seuil_max');
        $langueId = $langueId !== null ? (int) $langueId : null;
        $difficulte = is_string($difficulte) ? $difficulte : null;
        $seuilMin = $seuilMin !== null ? (int) $seuilMin : null;
        $seuilMax = $seuilMax !== null ? (int) $seuilMax : null;
        $langues = $langueRepository->findAll();
        $niveaux = $niveauRepository->findNiveauxFiltres($langueId, $difficulte, $seuilMin, $seuilMax);

        return $this->render('niveau/index.html.twig', [
            'niveaux'        => $niveaux,
            'langues'        => $langues,
            'selectedLangue' => $langueId ? $langueRepository->find($langueId) : null,
        ]);
    }

    #[Route('/new', name: 'app_niveau_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $em, SluggerInterface $slugger): Response
    {
        $niveau = new Niveau();
        $form = $this->createForm(NiveauType::class, $niveau);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('imageCouvertureFile')->getData();
            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $imageFile->guessExtension();

                try {
                    $imageFile->move(
                        $this->getParameter('kernel.project_dir') . '/public/uploads/niveaux',
                        $newFilename
                    );
                    $niveau->setImageCouverture($newFilename);
                } catch (FileException $e) {
                    $this->addFlash('error', 'Erreur lors de l\'upload de l\'image : ' . $e->getMessage());
                }
            }

            $em->persist($niveau);
            $em->flush();

            $this->addFlash('success', 'Niveau créé avec succès !');
            return $this->redirectToRoute('app_niveau_index');
        }

        return $this->render('niveau/new.html.twig', [
            'niveau' => $niveau,
            'form'   => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_niveau_show', methods: ['GET'])]
    public function show(Niveau $niveau): Response
    {
        return $this->render('niveau/show.html.twig', [
            'niveau' => $niveau,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_niveau_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Niveau $niveau, EntityManagerInterface $em, SluggerInterface $slugger): Response
    {
        $form = $this->createForm(NiveauType::class, $niveau);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('imageCouvertureFile')->getData();
            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $imageFile->guessExtension();

                try {
                    if ($niveau->getImageCouverture()) {
                        $oldPath = $this->getParameter('kernel.project_dir') . '/public/uploads/niveaux/' . $niveau->getImageCouverture();
                        if (file_exists($oldPath)) {
                            unlink($oldPath);
                        }
                    }

                    $imageFile->move(
                        $this->getParameter('kernel.project_dir') . '/public/uploads/niveaux',
                        $newFilename
                    );
                    $niveau->setImageCouverture($newFilename);
                } catch (FileException $e) {
                    $this->addFlash('error', 'Erreur upload image : ' . $e->getMessage());
                }
            }

            $em->flush();

            $this->addFlash('success', 'Niveau modifié avec succès !');
            return $this->redirectToRoute('app_niveau_index');
        }

        return $this->render('niveau/edit.html.twig', [
            'niveau' => $niveau,
            'form'   => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_niveau_delete', methods: ['POST'])]
    public function delete(Request $request, Niveau $niveau, EntityManagerInterface $em): Response
    {
        $token = $request->request->get('_token');
        $token = is_string($token) ? $token : '';
        
        if ($this->isCsrfTokenValid('delete' . $niveau->getId(), $token)) {
            if ($niveau->getImageCouverture()) {
                $filePath = $this->getParameter('kernel.project_dir') . '/public/uploads/niveaux/' . $niveau->getImageCouverture();
                if (file_exists($filePath)) {
                    unlink($filePath);
                }
            }

            $em->remove($niveau);
            $em->flush();

            $this->addFlash('success', 'Niveau supprimé avec succès !');
        }

        return $this->redirectToRoute('app_niveau_index');
    }
}