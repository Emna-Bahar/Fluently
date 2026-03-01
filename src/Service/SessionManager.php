<?php
namespace App\service;
use App\Entity\Session;
class SessionManager
{public function validate(Session $session): bool{
        // Règle 1 : Le statut doit être valide
        $statutsValides = ["planifiée", "en cours", "terminée", "annulée"];
        if (empty($session->getStatut()) || !in_array($session->getStatut(), $statutsValides)) {
            throw new \InvalidArgumentException("Statut invalide.");}
        // Règle 2 : Le lien est obligatoire si statut = "en cours"
        if ($session->getStatut() === 'en cours' && empty($session->getLienReunion())) {
            throw new \InvalidArgumentException("Le lien de réunion est obligatoire quand la session est 'en cours'.");
        }

        // Règle 3 : Le lien doit être une URL valide s'il est fourni
        if ($session->getLienReunion() !== null && !filter_var($session->getLienReunion(), FILTER_VALIDATE_URL)) {
            throw new \InvalidArgumentException("Le lien doit être une URL valide.");
        }

        // Règle 4 : Le rating ne peut être défini que pour les sessions terminées
        if ($session->getStatut() !== 'terminée' && $session->getRating() !== null) {
            throw new \InvalidArgumentException("Le rating ne peut être défini que pour les sessions terminées.");
        }

        // Règle 5 : Le rating doit être entre 0 et 5
        if ($session->getRating() !== null && ($session->getRating() < 0 || $session->getRating() > 5)) {
            throw new \InvalidArgumentException("Le rating doit être entre 0 et 5.");
        }

        return true;
    }
}