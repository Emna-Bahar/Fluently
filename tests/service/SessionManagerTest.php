<?php

namespace App\Tests\Service;

use App\Entity\Session;
use App\Service\SessionManager;
use PHPUnit\Framework\TestCase;

class SessionManagerTest extends TestCase
{
    // ✅ Test 1 : Session valide "planifiée" avec lien valide
    public function testSessionPlanifieeValide(): void
    {
        $session = new Session();
        $session->setStatut('planifiée');
        $session->setLienReunion('https://meet.google.com/abc-defg-hij');

        $manager = new SessionManager();
        $this->assertTrue($manager->validate($session));
    }

    // ✅ Test 2 : Session "terminée" avec rating valide
    public function testSessionTermineeAvecRatingValide(): void
    {
        $session = new Session();
        $session->setStatut('terminée');
        $session->setLienReunion('https://meet.google.com/abc-defg-hij');
        $session->setRating(4);

        $manager = new SessionManager();
        $this->assertTrue($manager->validate($session));
    }

    // ❌ Test 3 : Statut invalide → exception
    public function testStatutInvalide(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage("Statut invalide.");

        $session = new Session();
        $session->setStatut('inexistant');

        $manager = new SessionManager();
        $manager->validate($session);
    }

    // ❌ Test 4 : Session "en cours" sans lien → exception
    public function testSessionEnCoursSansLien(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage("Le lien de réunion est obligatoire");

        $session = new Session();
        $session->setStatut('en cours');

        $manager = new SessionManager();
        $manager->validate($session);
    }

    // ❌ Test 5 : URL invalide → exception
    public function testLienInvalide(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage("Le lien doit être une URL valide.");

        $session = new Session();
        $session->setStatut('planifiée');
        $session->setLienReunion('pas-une-url');

        $manager = new SessionManager();
        $manager->validate($session);
    }

    // ❌ Test 6 : Rating défini sur session non terminée → exception
    public function testRatingInterditSiNonTerminee(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage("Le rating ne peut être défini que pour les sessions terminées.");

        $session = new Session();
        $session->setStatut('planifiée');
        $session->setRating(3);

        $manager = new SessionManager();
        $manager->validate($session);
    }

    // ❌ Test 7 : Rating hors limite → exception
    public function testRatingHorsLimite(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage("Le rating doit être entre 0 et 5.");

        $session = new Session();
        $session->setStatut('terminée');
        $session->setRating(10);

        $manager = new SessionManager();
        $manager->validate($session);
    }
}