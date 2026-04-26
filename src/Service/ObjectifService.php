<?php

namespace App\Service;

use App\Entity\Objectif;

class ObjectifService
{
    public function verifierDates(Objectif $objectif): bool
    {
        if ($objectif->getDateDeb() === null) {
            throw new \InvalidArgumentException(
                'La date de début est obligatoire.'
            );
        }

        if ($objectif->getDateFin() === null) {
            throw new \InvalidArgumentException(
                'La date de fin est obligatoire.'
            );
        }

        if ($objectif->getDateFin() <= $objectif->getDateDeb()) {
            throw new \InvalidArgumentException(
                'La date de fin doit être postérieure à la date de début.'
            );
        }

        return true;
    }

    public function verifierUtilisateur(Objectif $objectif): bool
    {
        if ($objectif->getIdUser() === null) {
            throw new \InvalidArgumentException(
                'Un objectif doit être lié à un utilisateur.'
            );
        }

        return true;
    }

    public function validerObjectif(Objectif $objectif): bool
    {
        $this->verifierDates($objectif);
        $this->verifierUtilisateur($objectif);

        return true;
    }
}