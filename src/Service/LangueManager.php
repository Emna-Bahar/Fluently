<?php

namespace App\Service;

use App\Entity\Langue;
use App\Repository\LangueRepository;
use Doctrine\ORM\EntityManagerInterface;

class LangueManager
{
    private EntityManagerInterface $entityManager;
    private LangueRepository $langueRepository;

    public function __construct(EntityManagerInterface $entityManager, LangueRepository $langueRepository)
    {
        $this->entityManager = $entityManager;
        $this->langueRepository = $langueRepository;
    }

    /**
     * @param Langue $langue La langue à valider
     * @param bool $isEdit Mode édition (true = on ignore la langue elle-même dans la vérification d'unicité)
     * @throws \InvalidArgumentException
     */
    public function validate(Langue $langue, bool $isEdit = false): bool
    {
        // RÈGLE 1: Nom obligatoire et longueur valide
        $nom = $langue->getNom();
        if (empty($nom)) {
            throw new \InvalidArgumentException('Le nom de la langue est obligatoire');
        }
        if (strlen($nom) < 2) {
            throw new \InvalidArgumentException('Le nom doit contenir au moins 2 caractères');
        }
        if (strlen($nom) > 50) {
            throw new \InvalidArgumentException('Le nom ne peut pas dépasser 50 caractères');
        }

        // RÈGLE 2: Description obligatoire et longueur minimale
        $description = $langue->getDescription();
        if (empty($description)) {
            throw new \InvalidArgumentException('La description est obligatoire');
        }
        if (strlen($description) < 5) {
            throw new \InvalidArgumentException('La description doit contenir au moins 5 caractères');
        }

        // RÈGLE 3: Nom unique (vérification en BDD)
        $this->validateUniqueName($langue, $isEdit);

        return true;
    }

    /**
     * Vérifie que le nom est unique en base de données
     */
    private function validateUniqueName(Langue $langue, bool $isEdit): void
    {
        $existingLangue = $this->langueRepository->findOneBy(['nom' => $langue->getNom()]);
        
        if ($existingLangue) {
            if ($isEdit && $existingLangue->getId() === $langue->getId()) {
                return; 
            }
            
            throw new \InvalidArgumentException('Une langue avec ce nom existe déjà dans le système');
        }
    }

    /**
     * Crée une nouvelle langue avec validation
     */
    public function create(string $nom, string $description, bool $isActive = true): Langue
    {
        $langue = new Langue();
        $langue->setNom($nom);
        $langue->setDescription($description);
        $langue->setIsActive($isActive);
        $langue->setDateAjout(new \DateTime());

        $this->validate($langue, false);
        
        $this->entityManager->persist($langue);
        $this->entityManager->flush();

        return $langue;
    }

    /**
     * Met à jour une langue existante
     */
    public function update(Langue $langue, string $nom, string $description, ?bool $isActive = null): Langue
    {
        $langue->setNom($nom);
        $langue->setDescription($description);
        
        if ($isActive !== null) {
            $langue->setIsActive($isActive);
        }
        $this->validate($langue, true);
        $this->entityManager->flush();
        return $langue;
    }
}