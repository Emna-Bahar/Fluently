<?php

namespace App\Controller;

use App\Entity\Langue;
use App\Form\LangueType;
use App\Repository\LangueRepository;
use App\Repository\CoursRepository;
use App\Service\LanguageStatsService;
use Doctrine\ORM\EntityManagerInterface;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\String\Slugger\SluggerInterface;



#[Route('/Langue')]
final class LangueController extends AbstractController
{
    // ────────────────────────────────────────────────
    // FRONT ÉTUDIANT - Liste publique des langues actives
    // ────────────────────────────────────────────────
    #[Route('/', name: 'app_langue_index', methods: ['GET'])]
    public function indexEtudiant(Request $request, LangueRepository $langueRepository): Response
    {
        $search = $request->query->get('search', '');
        $sortBy = $request->query->get('sortBy', '');

        // Seulement les langues actives
        $query = $langueRepository->createQueryBuilder('l')
            ->where('l.is_active = :active')
            ->setParameter('active', true);

        if ($search) {
            $query->andWhere('LOWER(l.nom) LIKE :search')
                  ->setParameter('search', '%' . strtolower($search) . '%');
        }

        $langues = $query->getQuery()->getResult();

        // Tri manuel après filtrage
        if ($sortBy === 'popularite') {
            usort($langues, fn($a, $b) => $b->getPopularite() <=> $a->getPopularite());
        } elseif ($sortBy === 'nom') {
            usort($langues, fn($a, $b) => strcasecmp($a->getNom(), $b->getNom()));
        }

        return $this->render('langue/index.html.twig', [  // ← ton template étudiant actuel
            'langues' => $langues,
            'search'  => $search,
            'sortBy'  => $sortBy,
        ]);
    }

    // ────────────────────────────────────────────────
    // FRONT ÉTUDIANT - Parcours d'apprentissage (jeu)
    // ────────────────────────────────────────────────
    #[Route('/{id}/apprentissage', name: 'app_langue_apprentissage', methods: ['GET'])]
public function apprentissage(Langue $langue, CoursRepository $coursRepository, Request $request, EntityManagerInterface $em): Response
{
    $cours = $coursRepository->createQueryBuilder('c')
        ->leftJoin('c.Id_niveau', 'n')
        ->where('n.Id_langue = :langue')
        ->setParameter('langue', $langue)
        ->orderBy('n.ordre', 'ASC')
        ->addOrderBy('c.numero', 'ASC')
        ->getQuery()
        ->getResult();

    // Lire le dernier cours terminé depuis la session
    $session = $request->getSession();
    $key = 'last_completed_cours_langue_' . $langue->getId();
    $lastCompletedId = $session->get($key, 0); // 0 = rien terminé

    // NOUVEAU : Récupérer le test de niveau pour cette langue
    $testNiveau = $em->getRepository(\App\Entity\Test::class)
        ->createQueryBuilder('t')
        ->where('t.Id_langue = :langue')
        ->andWhere('t.type = :type')
        ->setParameter('langue', $langue)
        ->setParameter('type', 'Niveau') // ou 'Niveau' selon ton type
        ->setMaxResults(1)
        ->getQuery()
        ->getOneOrNullResult();

    return $this->render('langue/apprentissage.html.twig', [
        'langue'           => $langue,
        'allCours'         => $cours,
        'lastCompletedId'  => $lastCompletedId,
        'testNiveau'       => $testNiveau, // ← NOUVEAU
    ]);
}

    // ────────────────────────────────────────────────
    // BACK-OFFICE ADMIN - Liste complète de toutes les langues
    // ────────────────────────────────────────────────
    #[Route('/admin', name: 'app_admin_langue_index', methods: ['GET'])]
public function indexAdmin(Request $request, LangueRepository $langueRepository): Response
{
    $search = $request->query->get('search', '');
    $active = $request->query->get('active', '');

    $query = $langueRepository->createQueryBuilder('l');

    if ($search) {
        $query->andWhere('LOWER(l.nom) LIKE :search')
              ->setParameter('search', '%' . strtolower($search) . '%');
    }

    if ($active !== '') {
        $query->andWhere('l.is_active = :active')
              ->setParameter('active', (bool)$active);
    }

    $langues = $query->getQuery()->getResult();

    return $this->render('langue/index_admin.html.twig', [
        'langues' => $langues,
    ]);
}

    // ────────────────────────────────────────────────
    // ADMIN - Création d'une nouvelle langue + upload drapeau
    // ────────────────────────────────────────────────
    #[Route('/admin/new', name: 'app_admin_langue_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $em, SluggerInterface $slugger): Response
    {
        $langue = new Langue();
        $form = $this->createForm(LangueType::class, $langue);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // Upload du drapeau
            $drapeauFile = $form->get('drapeauFile')->getData();
            if ($drapeauFile) {
                $originalFilename = pathinfo($drapeauFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $drapeauFile->guessExtension();

                try {
                    $drapeauFile->move(
                        $this->getParameter('kernel.project_dir') . '/public/images/langues',
                        $newFilename
                    );
                    $langue->setDrapeau($newFilename);
                } catch (FileException $e) {
                    $this->addFlash('error', 'Erreur lors de l\'upload du drapeau : ' . $e->getMessage());
                }
            }

            // Date d'ajout automatique si vide
            if (!$langue->getDateAjout()) {
                $langue->setDateAjout(new \DateTime());
            }

            $em->persist($langue);
            $em->flush();

            $this->addFlash('success', 'Langue créée avec succès !');
            return $this->redirectToRoute('app_admin_langue_index');
        }

        return $this->render('langue/new.html.twig', [
            'langue' => $langue,
            'form'   => $form->createView(),
        ]);
    }

    // ────────────────────────────────────────────────
    // ADMIN - Modification d'une langue + remplacement drapeau
    // ────────────────────────────────────────────────
    #[Route('/admin/{id}/edit', name: 'app_admin_langue_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Langue $langue, EntityManagerInterface $em, SluggerInterface $slugger): Response
    {
        $form = $this->createForm(LangueType::class, $langue);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // Gestion remplacement du drapeau
            $drapeauFile = $form->get('drapeauFile')->getData();
            if ($drapeauFile) {
                // Supprimer l'ancien si existant
                if ($langue->getDrapeau()) {
                    $oldPath = $this->getParameter('kernel.project_dir') . '/public/images/langues/' . $langue->getDrapeau();
                    if (file_exists($oldPath)) {
                        unlink($oldPath);
                    }
                }

                $originalFilename = pathinfo($drapeauFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $drapeauFile->guessExtension();

                try {
                    $drapeauFile->move(
                        $this->getParameter('kernel.project_dir') . '/public/images/langues',
                        $newFilename
                    );
                    $langue->setDrapeau($newFilename);
                } catch (FileException $e) {
                    $this->addFlash('error', 'Erreur lors du remplacement du drapeau : ' . $e->getMessage());
                }
            }

            $em->flush();
            $this->addFlash('success', 'Langue modifiée avec succès.');
            return $this->redirectToRoute('app_admin_langue_index');
        }

        return $this->render('langue/edit.html.twig', [
            'langue' => $langue,
            'form'   => $form->createView(),
        ]);
    }

    
    // ────────────────────────────────────────────────
    // ADMIN - Suppression d'une langue + suppression drapeau
    // ────────────────────────────────────────────────
    #[Route('/admin/{id}/delete', name: 'app_admin_langue_delete', methods: ['POST'])]
    public function delete(Request $request, Langue $langue, EntityManagerInterface $em): Response
    {
        if ($this->isCsrfTokenValid('delete' . $langue->getId(), $request->request->get('_token'))) {

            // Supprimer le fichier drapeau s'il existe
            if ($langue->getDrapeau()) {
                $filePath = $this->getParameter('kernel.project_dir') . '/public/images/langues/' . $langue->getDrapeau();
                if (file_exists($filePath)) {
                    unlink($filePath);
                }
            }

            $em->remove($langue);
            $em->flush();

            $this->addFlash('success', 'Langue supprimée avec succès.');
        }

        return $this->redirectToRoute('app_admin_langue_index');
    }

    // ────────────────────────────────────────────────
    // SHOW (utilisé par étudiant ET admin si besoin)
    // ────────────────────────────────────────────────
    #[Route('/{id}', name: 'app_langue_show', methods: ['GET'])]
    public function show(Langue $langue): Response
    {
        return $this->render('langue/show.html.twig', [
            'langue' => $langue,
        ]);
    }

   #[Route('/admin/stats', name: 'app_admin_langue_stats', methods: ['GET'])]
public function statsAdmin(LanguageStatsService $statsService): Response
{
    $globalLanguages = $statsService->getTopLanguages(20);

    return $this->render('langue/stats_admin.html.twig', [
        'globalLanguages' => $globalLanguages,
    ]);
}
}