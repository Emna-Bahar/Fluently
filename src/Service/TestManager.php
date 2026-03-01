<?php

namespace App\Service;

use App\Entity\Test;

class TestManager
{
    /**
     * Valide un test selon les règles métier
     * 
     * @param Test $test
     * @return bool
     * @throws \InvalidArgumentException si les règles ne sont pas respectées
     */
    public function validate(Test $test): bool
    {
        // ✅ RÈGLE 1 : Le titre ne peut pas être vide
        if (empty($test->getTitre())) {
            throw new \InvalidArgumentException('Le titre du test est obligatoire');
        }

        // ✅ RÈGLE 2 : La durée doit être supérieure à 0
        if ($test->getDureeEstimee() === null || $test->getDureeEstimee() <= 0) {
            throw new \InvalidArgumentException('La durée estimée doit être supérieure à 0');
        }

        // ✅ Si tout est OK, retourne true
        return true;
    }
}