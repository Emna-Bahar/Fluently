<?php

namespace App\Tests\Service;

use App\Entity\Test;
use App\Service\TestManager;
use PHPUnit\Framework\TestCase;

class TestManagerTest extends TestCase
{
    /**
     * TEST 1 : Un test valide doit passer la validation
     */
    public function testValidTest(): void
    {
        // 1️⃣ ARRANGE : Préparer les données
        $test = new Test();
        $test->setTitre('Test de niveau A1');
        $test->setDureeEstimee(15);

        // 2️⃣ ACT : Exécuter l'action
        // On crée le gestionnaire et on valide
        $manager = new TestManager();
        $result = $manager->validate($test);

        // 3️⃣ ASSERT : Vérifier le résultat
        // On s'attend à ce que la validation retourne true
        $this->assertTrue($result);
    }

    /**
     * TEST 2 : Un test sans titre doit échouer
     */
    public function testTestWithoutTitle(): void
    {
        // 1️⃣ On s'attend à ce qu'une exception soit lancée
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Le titre du test est obligatoire');

        // 2️⃣ On crée un test SANS titre
        $test = new Test();
        $test->setDureeEstimee(15);

        // 3️⃣ On essaye de valider (ça doit échouer)
        $manager = new TestManager();
        $manager->validate($test);
    }

    /**
     * TEST 3 : Un test avec titre vide doit échouer
     */
    public function testTestWithEmptyTitle(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Le titre du test est obligatoire');

        $test = new Test();
        $test->setTitre(''); // ❌ Titre vide
        $test->setDureeEstimee(15);

        $manager = new TestManager();
        $manager->validate($test);
    }

    /**
     * TEST 4 : Un test avec durée nulle doit échouer
     */
    public function testTestWithNullDuration(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('La durée estimée doit être supérieure à 0');

        $test = new Test();
        $test->setTitre('Test A1');
        // Pas de setDureeEstimee() → reste null

        $manager = new TestManager();
        $manager->validate($test);
    }

    /**
     * TEST 5 : Un test avec durée négative doit échouer
     */
    public function testTestWithNegativeDuration(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('La durée estimée doit être supérieure à 0');

        $test = new Test();
        $test->setTitre('Test A1');
        $test->setDureeEstimee(-5); // ❌ Durée négative

        $manager = new TestManager();
        $manager->validate($test);
    }

    /**
     * TEST 6 : Un test avec durée = 0 doit échouer
     */
    public function testTestWithZeroDuration(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('La durée estimée doit être supérieure à 0');

        $test = new Test();
        $test->setTitre('Test A1');
        $test->setDureeEstimee(0); // ❌ Durée = 0

        $manager = new TestManager();
        $manager->validate($test);
    }
}