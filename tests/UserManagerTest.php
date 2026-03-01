<?php

namespace App\Tests\Service;

use App\Entity\User;
use App\Service\UserManager;
use PHPUnit\Framework\TestCase;

class UserManagerTest extends TestCase
{
    // ✅ TEST 1 : Utilisateur valide — tout est correct
    public function testValidUser(): void
    {
        $user = new User();
        $user->setNom('Ben Ali');
        $user->setPrenom('Azer');
        $user->setEmail('azer.benali@gmail.com');
        $user->setPassword('motdepasse123');
        $user->setStatut('actif');

        $manager = new UserManager();
        $this->assertTrue($manager->validate($user));
    }

    // ❌ TEST 2 : Nom vide — doit lever une exception
    public function testUserWithoutNom(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Le nom est obligatoire');

        $user = new User();
        $user->setNom('');
        $user->setPrenom('Azer');
        $user->setEmail('azer@gmail.com');
        $user->setPassword('motdepasse123');
        $user->setStatut('actif');

        $manager = new UserManager();
        $manager->validate($user);
    }

    // ❌ TEST 3 : Prénom vide — doit lever une exception
    public function testUserWithoutPrenom(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Le prénom est obligatoire');

        $user = new User();
        $user->setNom('Ben Ali');
        $user->setPrenom('');
        $user->setEmail('azer@gmail.com');
        $user->setPassword('motdepasse123');
        $user->setStatut('actif');

        $manager = new UserManager();
        $manager->validate($user);
    }

    // ❌ TEST 4 : Email invalide — doit lever une exception
    public function testUserWithInvalidEmail(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Email invalide');

        $user = new User();
        $user->setNom('Ben Ali');
        $user->setPrenom('Azer');
        $user->setEmail('email_invalide');
        $user->setPassword('motdepasse123');
        $user->setStatut('actif');

        $manager = new UserManager();
        $manager->validate($user);
    }

    // ❌ TEST 5 : Mot de passe trop court — doit lever une exception
    public function testUserWithShortPassword(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Le mot de passe doit contenir au moins 8 caractères');

        $user = new User();
        $user->setNom('Ben Ali');
        $user->setPrenom('Azer');
        $user->setEmail('azer@gmail.com');
        $user->setPassword('123');
        $user->setStatut('actif');

        $manager = new UserManager();
        $manager->validate($user);
    }

    // ❌ TEST 6 : Statut invalide — doit lever une exception
    public function testUserWithInvalidStatut(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Le statut doit être actif ou inactif');

        $user = new User();
        $user->setNom('Ben Ali');
        $user->setPrenom('Azer');
        $user->setEmail('azer@gmail.com');
        $user->setPassword('motdepasse123');
        $user->setStatut('bloque');

        $manager = new UserManager();
        $manager->validate($user);
    }
}