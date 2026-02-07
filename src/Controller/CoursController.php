<?php

namespace App\Controller;

use App\Entity\Cours;
use App\Entity\Langue;
use App\Entity\Niveau;
use App\Form\CoursType;
use App\Repository\CoursRepository;
use App\Repository\NiveauRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

#[Route('/cours')]
final class CoursController extends AbstractController
{
    #[Route(name: 'app_cours_index', methods: ['GET'])]
public function index(CoursRepository $coursRepository, NiveauRepository $niveauRepository, Request $request): Response
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

    $form = $this->createForm(CoursType::class, $cours);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        // 1. Récupérer la langue et le niveau choisis
        $langue = $form->get('langue')->getData();
        $niveau = $form->get('Id_niveau')->getData();

        if (!$langue || !$niveau || $niveau->getIdLangue()->getId() !== $langue->getId()) {
            $this->addFlash('danger', 'La langue et le niveau ne correspondent pas.');
            return $this->render('cours/new.html.twig', [
                'form' => $form->createView(),
            ]);
        }

        $cours->setIdNiveau($niveau);

        // 2. Upload des fichiers
        $files = $form->get('ressourcesFiles')->getData() ?? [];

        if ($files) {
            $uploadDir = $this->getCoursUploadDir($cours);

            $currentRessources = [];

            foreach ($files as $file) {
                if ($file instanceof UploadedFile) {
                    $originalName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
                    $safeName = $slugger->slug($originalName);
                    $extension = $file->guessExtension();
                    $newFilename = $safeName . '-' . uniqid() . '.' . $extension;

                    try {
                        $file->move($uploadDir, $newFilename);
                        $currentRessources[] = $newFilename;
                    } catch (FileException $e) {
                        $this->addFlash('danger', 'Erreur upload : ' . $file->getClientOriginalName());
                    }
                }
            }

            $cours->setRessource(implode("\n", $currentRessources));
        }

        $em->persist($cours);
        $em->flush();

        $this->addFlash('success', 'Cours créé avec succès.');
        return $this->redirectToRoute('app_cours_index');
    }

    return $this->render('cours/new.html.twig', [
        'form' => $form->createView(),
    ]);
}

    #[Route('/{id}', name: 'app_cours_show', methods: ['GET'])]
public function show(Cours $cour): Response
{
    $niveau = $cour->getIdNiveau();
    $langue = $niveau->getIdLangue();
    $difficulté = $niveau->getDifficulte(); // ← c'est ce qui est stocké dans $cour->getRessource()

    // Construire le chemin du dossier
    $langSlug = (new \Symfony\Component\String\Slugger\AsciiSlugger())->slug($langue->getNom())->lower();
    $nivSlug = (new \Symfony\Component\String\Slugger\AsciiSlugger())->slug($difficulté)->lower();

    $dirPath = $this->getParameter('kernel.project_dir') . "/public/uploads/cours/$langSlug/$nivSlug";
    $publicPath = "/uploads/cours/$langSlug/$nivSlug";

    // Lister tous les fichiers du dossier
    $files = [];
    if (is_dir($dirPath)) {
        $files = array_values(array_diff(scandir($dirPath), ['.', '..']));
    }

    return $this->render('cours/show.html.twig', [
        'cour' => $cour,
        'files' => $files,
        'public_path' => $publicPath,
        'langue' => $langue,
        'niveau' => $niveau,
    ]);
}

    #[Route('/{id}/edit', name: 'app_cours_edit', methods: ['GET', 'POST'])]
public function edit(Request $request, Cours $cour, EntityManagerInterface $em, SluggerInterface $slugger): Response
{
    $form = $this->createForm(CoursType::class, $cour);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {

        // 1. Vérification langue / niveau (optionnel mais utile)
        $langue = $form->get('langue')->getData();
        $niveau = $cour->getIdNiveau();
        if ($langue && $niveau && $niveau->getIdLangue()->getId() !== $langue->getId()) {
            $this->addFlash('danger', 'La langue et le niveau ne correspondent pas.');
            return $this->render('cours/edit.html.twig', [
                'cour' => $cour,
                'form' => $form->createView(),
            ]);
        }

        // 2. Gestion des suppressions de ressources existantes
        $deleteFiles = $request->request->all()['delete_ressources'] ?? [];
        $deleteFiles = is_array($deleteFiles) ? $deleteFiles : [];
        if ($deleteFiles) {
            $currentFiles = array_filter(explode("\n", $cour->getRessource() ?? ''));
            foreach ($deleteFiles as $fileToDelete) {
                $key = array_search($fileToDelete, $currentFiles);
                if ($key !== false) {
                    unset($currentFiles[$key]);
                    // Optionnel : supprimer physiquement le fichier
                    $filePath = $this->getCoursUploadDir($cour) . '/' . $fileToDelete;
                    if (file_exists($filePath)) {
                        @unlink($filePath);
                    }
                }
            }
            $cour->setRessource(implode("\n", $currentFiles));
        }

        // 3. Ajout des NOUVEAUX fichiers (la partie qui manquait)
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

        // 4. Sauvegarde finale
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
    
    #[Route('/{id}/terminer', name: 'app_cours_terminer', methods: ['POST'])]
public function terminer(Cours $cours, Request $request): Response
{
    $user = $this->getUser();
    if (!$user) {
        return $this->json(['success' => false, 'message' => 'Vous devez être connecté']);
    }

    $session = $request->getSession();
    $langueId = $cours->getIdNiveau()->getIdLangue()->getId();
    $key = 'last_completed_cours_langue_' . $langueId;

    // Mettre à jour le dernier cours terminé
    $session->set($key, $cours->getId());

    return $this->json(['success' => true]);
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
