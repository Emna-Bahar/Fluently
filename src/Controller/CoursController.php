<?php
// src/Controller/CoursController.php

namespace App\Controller;

use App\Entity\Cours;
use App\Entity\Langue;
use App\Entity\Niveau;
use App\Entity\UserProgress;
use App\Form\CoursType;
use App\Repository\CoursRepository;
use App\Repository\NiveauRepository;
use App\Repository\UserProgressRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

#[Route('/cours')]
final class CoursController extends AbstractController
{
    #[Route(name: 'app_cours_index', methods: ['GET'])]
    public function index(CoursRepository $coursRepository, NiveauRepository $niveauRepository, Request $request, SessionInterface $session): Response
    {
        $langueId = $request->query->get('langue');
        $difficulte = $request->query->get('difficulte');

        $niveaux = $niveauRepository->findAll();

        $query = $coursRepository->createQueryBuilder('c')
            ->join('c.Id_niveau', 'n')
            ->join('n.Id_langue', 'l')
            ->orderBy('l.nom', 'ASC')
            ->addOrderBy('n.ordre', 'ASC')
            ->addOrderBy('c.numero', 'ASC');

        if ($langueId) {
            $query->andWhere('l.id = :langueId')
                  ->setParameter('langueId', $langueId);
        }

        if ($difficulte) {
            $query->andWhere('n.difficulte = :difficulte')
                  ->setParameter('difficulte', $difficulte);
        }

        $cours = $query->getQuery()->getResult();

        return $this->render('cours/index.html.twig', [
            'cours' => $cours,
            'niveaux' => $niveaux,
        ]);
    }

    #[Route('/admin/cours/new', name: 'app_admin_cours_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $em, SluggerInterface $slugger): Response
    {
        $cours = new Cours();
        $cours->setDateCreation(new \DateTime());

        $form = $this->createForm(CoursType::class, $cours, [
            'is_edit' => false,
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $langue = $form->get('langue')->getData();
            $niveau = $form->get('Id_niveau')->getData();

            if (!$langue || !$niveau || $niveau->getIdLangue()->getId() !== $langue->getId()) {
                $this->addFlash('danger', 'La langue et le niveau ne correspondent pas.');
                return $this->render('cours/new.html.twig', ['form' => $form->createView()]);
            }

            $cours->setIdNiveau($niveau);

            $allRessources = [];

            // Upload des fichiers locaux 
            $files = $form->get('ressourcesFiles')->getData() ?? [];
            if ($files) {
                $uploadDir = $this->getCoursUploadDir($cours);
                foreach ($files as $file) {
                    if ($file instanceof UploadedFile) {
                        $originalName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
                        $safeName = $slugger->slug($originalName);
                        $extension = $file->guessExtension();
                        $newFilename = $safeName . '-' . uniqid() . '.' . $extension;

                        try {
                            $file->move($uploadDir, $newFilename);
                            $allRessources[] = $newFilename;
                        } catch (FileException $e) {
                            $this->addFlash('danger', 'Erreur upload : ' . $file->getClientOriginalName());
                        }
                    }
                }
            }

            // Liens YouTube
            $youtubeLinksInput = $form->get('youtubeLinks')->getData();
            if ($youtubeLinksInput && !empty(trim($youtubeLinksInput))) {
                $lines = explode("\n", trim($youtubeLinksInput));
                foreach ($lines as $line) {
                    $line = trim($line);
                    if (!empty($line)) {
                        // Validation manuelle
                        if (filter_var($line, FILTER_VALIDATE_URL) && 
                            (str_contains($line, 'youtube.com/watch') || 
                             str_contains($line, 'youtu.be/') || 
                             str_contains($line, 'youtube.com/embed'))) {
                            $allRessources[] = $line;
                        } else {
                            $this->addFlash('warning', 'Lien YouTube ignoré (invalide) : ' . $line);
                        }
                    }
                }
            }

            // Enregistrer les ressources dans l'entité
            if (!empty($allRessources)) {
                $cours->setRessource(implode("\n", $allRessources));
            }

            $em->persist($cours);
            $em->flush();

            $this->addFlash('success', 'Cours créé avec succès.');
            return $this->redirectToRoute('app_cours_index');
        }

        return $this->render('cours/new.html.twig', ['form' => $form->createView()]);
    }
    
    // Pour l'étudiant (front-office)
    #[Route('/{id}', name: 'app_cours_show', methods: ['GET'])]
    public function show(Cours $cour, Request $request, EntityManagerInterface $em): Response
    {
        // Vérifier si l'utilisateur a le droit d'accéder à ce cours
        $session = $request->getSession();
        $userId = $session->get('user_id');
        $user = $userId ? $em->getRepository(\App\Entity\User::class)->find($userId) : null;

        if (!$user) {
            $this->addFlash('error', 'Vous devez être connecté.');
            return $this->redirectToRoute('app_login');
        }

        $langue = $cour->getIdNiveau()->getIdLangue();
        
        // Récupérer la progression
        $progressRepo = $em->getRepository(UserProgress::class);
        $progress = $progressRepo->findOneBy([
            'user' => $user,
            'langue' => $langue
        ]);

        // Vérifier si le cours est débloqué
        $estDebloque = false;
        
        if ($progress) {
            $niveauActuel = $progress->getNiveauActuel();
            $niveauCours = $cour->getIdNiveau();
            
            if ($niveauActuel && $niveauActuel->getId() === $niveauCours->getId()) {
                // Même niveau → vérifier le numéro
                $estDebloque = $cour->getNumero() <= $progress->getDernierNumeroCours() + 1;
            }
        }

        if (!$estDebloque) {
            $this->addFlash('warning', 'Ce cours n\'est pas encore débloqué.');
            return $this->redirectToRoute('app_langue_apprentissage', ['id' => $langue->getId()]);
        }

        $difficulte = $cour->getIdNiveau()->getDifficulte();

        $langSlug = (new \Symfony\Component\String\Slugger\AsciiSlugger())->slug($langue->getNom())->lower();
        $nivSlug = (new \Symfony\Component\String\Slugger\AsciiSlugger())->slug($difficulte)->lower();

        $dirPath = $this->getParameter('kernel.project_dir') . "/public/uploads/cours/$langSlug/$nivSlug";
        $publicPath = "/uploads/cours/$langSlug/$nivSlug";

        $files = is_dir($dirPath) ? array_values(array_diff(scandir($dirPath), ['.', '..'])) : [];
        $dbResources = $cour->getRessource() ? explode("\n", trim($cour->getRessource())) : [];
        $dbResources = array_filter($dbResources, fn($v) => trim($v) !== '');
        $allResources = array_unique(array_merge($files, $dbResources));

        return $this->render('cours/base_apprentissage.html.twig', [  
            'cour' => $cour,
            'files' => $allResources,  
            'public_path' => $publicPath,
            'progress' => $progress,
        ]);
    }

    #[Route('/admin/{id}', name: 'app_admin_cours_show', methods: ['GET'])]
    public function adminShow(Cours $cour): Response
    {
        $niveau = $cour->getIdNiveau();
        $langue = $niveau->getIdLangue();
        $difficulte = $niveau->getDifficulte();

        $langSlug = (new \Symfony\Component\String\Slugger\AsciiSlugger())->slug($langue->getNom())->lower();
        $nivSlug = (new \Symfony\Component\String\Slugger\AsciiSlugger())->slug($difficulte)->lower();

        $dirPath = $this->getParameter('kernel.project_dir') . "/public/uploads/cours/$langSlug/$nivSlug";
        $publicPath = "/uploads/cours/$langSlug/$nivSlug";

        $files = is_dir($dirPath) ? array_values(array_diff(scandir($dirPath), ['.', '..'])) : [];

        return $this->render('cours/show.html.twig', [
            'cour' => $cour,
            'files' => $files,
            'public_path' => $publicPath,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_cours_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Cours $cour, EntityManagerInterface $em, SluggerInterface $slugger): Response
    {
        $form = $this->createForm(CoursType::class, $cour, [
            'is_edit' => true, 
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $langue = $form->get('langue')->getData();
            $niveau = $cour->getIdNiveau();
            if ($langue && $niveau && $niveau->getIdLangue()->getId() !== $langue->getId()) {
                $this->addFlash('danger', 'La langue et le niveau ne correspondent pas.');
                return $this->render('cours/edit.html.twig', [
                    'cour' => $cour,
                    'form' => $form->createView(),
                ]);
            }

            // Suppression de ressources
            $deleteFiles = $request->request->all()['delete_ressources'] ?? [];
            $deleteFiles = is_array($deleteFiles) ? $deleteFiles : [];
            if ($deleteFiles) {
                $currentFiles = array_filter(explode("\n", $cour->getRessource() ?? ''));
                foreach ($deleteFiles as $fileToDelete) {
                    $key = array_search($fileToDelete, $currentFiles);
                    if ($key !== false) {
                        unset($currentFiles[$key]);
                        $filePath = $this->getCoursUploadDir($cour) . '/' . $fileToDelete;
                        if (file_exists($filePath)) {
                            @unlink($filePath);
                        }
                    }
                }
                $cour->setRessource(implode("\n", $currentFiles));
            }

            // Ajout de nouveaux fichiers
            $newFiles = $form->get('ressourcesFiles')->getData() ?? [];

            if (!empty($newFiles)) {
                $uploadDir = $this->getCoursUploadDir($cour);
                $existingFiles = array_filter(explode("\n", $cour->getRessource() ?? ''));

                foreach ($newFiles as $file) {
                    if ($file instanceof UploadedFile) {
                        $originalName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
                        $safeName = $slugger->slug($originalName);
                        $extension = $file->guessExtension();
                        $newFilename = $safeName . '-' . uniqid() . '.' . $extension;

                        try {
                            $file->move($uploadDir, $newFilename);
                            $existingFiles[] = $newFilename;
                        } catch (FileException $e) {
                            $this->addFlash('danger', 'Erreur lors de l\'upload : ' . $e->getMessage());
                        }
                    }
                }

                $cour->setRessource(implode("\n", $existingFiles));
            }

            $em->flush();

            $this->addFlash('success', 'Cours modifié avec succès.');
            return $this->redirectToRoute('app_cours_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('cours/edit.html.twig', [
            'cour' => $cour,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_cours_delete', methods: ['POST'])]
    public function delete(Request $request, Cours $cour, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$cour->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($cour);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_cours_index', [], Response::HTTP_SEE_OTHER);
    }
    
    // MÉTHODE TERMINER CORRIGÉE
    // MÉTHODE TERMINER CORRIGÉE - LIGNE ~242
#[Route('/{id}/terminer', name: 'app_cours_terminer', methods: ['POST'])]
public function terminer(Cours $cours, Request $request, EntityManagerInterface $em): Response
{
    $session = $request->getSession();
    $userId = $session->get('user_id');
    $user = $userId ? $em->getRepository(\App\Entity\User::class)->find($userId) : null;

    if (!$user) {
        return $this->json(['success' => false, 'message' => 'Vous devez être connecté']);
    }

    $langue = $cours->getIdNiveau()->getIdLangue();
    
    // Récupérer la progression
    $progressRepo = $em->getRepository(UserProgress::class);
    $progress = $progressRepo->findOneBy([
        'user' => $user,
        'langue' => $langue
    ]);

    if (!$progress) {
        return $this->json(['success' => false, 'message' => 'Progression non trouvée']);
    }

    $niveauCours = $cours->getIdNiveau();
    $niveauActuel = $progress->getNiveauActuel();
    
    // Vérifier que c'est bien le bon niveau
    if ($niveauActuel && $niveauActuel->getId() === $niveauCours->getId()) {
        $numeroCours = $cours->getNumero();
        $dernierNumero = $progress->getDernierNumeroCours();
        
        // Mettre à jour si c'est le cours actuel ou le suivant
        if ($numeroCours >= $dernierNumero) {
            $progress->setDernierCoursComplete($cours);
            $progress->setDernierNumeroCours($numeroCours);
            $progress->setDateDerniereActivite(new \DateTime());
            
            // 🟢 **VÉRIFICATION SI TOUS LES COURS DU NIVEAU SONT TERMINÉS**
            $coursRepository = $em->getRepository(Cours::class);
            $totalCoursNiveau = $coursRepository->count([
                'Id_niveau' => $niveauActuel
            ]);
            
            // Si l'utilisateur a terminé tous les cours du niveau actuel
            if ($numeroCours >= $totalCoursNiveau) {
                // Chercher le niveau suivant
                $niveauSuivant = $em->getRepository(\App\Entity\Niveau::class)
                    ->findOneBy([
                        'Id_langue' => $langue,
                        'ordre' => $niveauActuel->getOrdre() + 1
                    ]);
                
                // Si un niveau suivant existe, passer au niveau supérieur
                if ($niveauSuivant) {
                    $progress->setNiveauActuel($niveauSuivant);
                    $progress->setDernierNumeroCours(0);
                    $this->addFlash('success', '🎉 Félicitations ! Vous passez au niveau ' . $niveauSuivant->getDifficulte());
                }
            }
            
            $em->flush();
            
            return $this->json(['success' => true]);
        }
    }

    return $this->json(['success' => false, 'message' => 'Impossible de terminer ce cours']);
}
    private function getCoursUploadDir(Cours $cours): string
    {
        $niveau = $cours->getIdNiveau();
        $langue = $niveau->getIdLangue();

        $langSlug = (new \Symfony\Component\String\Slugger\AsciiSlugger())->slug($langue->getNom())->lower();
        $nivSlug = (new \Symfony\Component\String\Slugger\AsciiSlugger())->slug($niveau->getDifficulte())->lower();

        $baseDir = $this->getParameter('kernel.project_dir') . '/public/uploads/cours';
        $dir = "$baseDir/$langSlug/$nivSlug";

        if (!is_dir($dir)) {
            mkdir($dir, 0777, true);
        }

        return $dir;
    }
}