<?php

namespace App\Tests\Service;

use App\Entity\Objectif;
use App\Entity\User;
use App\Service\ObjectifService;
use PHPUnit\Framework\TestCase;

class ObjectifServiceTest extends TestCase
{
    private ObjectifService $service;

    protected function setUp(): void
    {
        $this->service = new ObjectifService();
    }

    // ❌ Date fin < date debut
    public function testDatesInvalides(): void
    {
        $objectif = new Objectif();
        $objectif->setDateDeb(new \DateTime('2024-03-10'));
        $objectif->setDateFin(new \DateTime('2024-03-01'));

        $this->expectException(\InvalidArgumentException::class);

        $this->service->verifierDates($objectif);
    }

    // ❌ Date debut null
    public function testDateDebNull(): void
    {
        $objectif = new Objectif();
        $objectif->setDateFin(new \DateTime('2024-03-10'));

        $this->expectException(\InvalidArgumentException::class);

        $this->service->verifierDates($objectif);
    }

    // ❌ Date fin null
    public function testDateFinNull(): void
    {
        $objectif = new Objectif();
        $objectif->setDateDeb(new \DateTime('2024-03-10'));

        $this->expectException(\InvalidArgumentException::class);

        $this->service->verifierDates($objectif);
    }

    // ❌ Utilisateur null
    public function testUtilisateurNull(): void
    {
        $objectif = new Objectif();

        $this->expectException(\InvalidArgumentException::class);

        $this->service->verifierUtilisateur($objectif);
    }

    // ✅ Utilisateur valide
    public function testUtilisateurValide(): void
    {
        $objectif = new Objectif();

        $user = $this->createMock(User::class);
        $objectif->setIdUser($user);

        $this->assertTrue(
            $this->service->verifierUtilisateur($objectif)
        );
    }

    // ✅ Objectif complet valide
    public function testObjectifValide(): void
    {
        $objectif = new Objectif();
        $objectif->setDateDeb(new \DateTime('2024-03-01'));
        $objectif->setDateFin(new \DateTime('2024-03-10'));

        $user = $this->createMock(User::class);
        $objectif->setIdUser($user);

        $this->assertTrue(
            $this->service->validerObjectif($objectif)
        );
    }
}