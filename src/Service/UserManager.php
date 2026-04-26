<?php

namespace App\Service;

use App\Entity\User;

class UserManager
{
    public function validate(User $user): bool
    {
        // Règle 1 : Le nom est obligatoire
        if (empty($user->getNom())) {
            throw new \InvalidArgumentException('Le nom est obligatoire');
        }

        // Règle 2 : Le prénom est obligatoire
        if (empty($user->getPrenom())) {
            throw new \InvalidArgumentException('Le prénom est obligatoire');
        }

        // Règle 3 : L'email doit être valide
        if (!filter_var($user->getEmail(), FILTER_VALIDATE_EMAIL)) {
            throw new \InvalidArgumentException('Email invalide');
        }

        // Règle 4 : Le mot de passe doit contenir au moins 8 caractères
        if (strlen($user->getPassword()) < 8) {
            throw new \InvalidArgumentException('Le mot de passe doit contenir au moins 8 caractères');
        }

        // Règle 5 : Le statut doit être "actif" ou "inactif"
        if (!in_array($user->getStatut(), ['actif', 'inactif'])) {
            throw new \InvalidArgumentException('Le statut doit être actif ou inactif');
        }

        return true;
    }
}