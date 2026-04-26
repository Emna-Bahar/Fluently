<?php

namespace App\Tests\Service;

use App\Entity\Langue;
use App\Service\LangueManager;
use App\Repository\LangueRepository;
use Doctrine\ORM\EntityManagerInterface;
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\MockObject\MockObject;

class LangueManagerTest extends TestCase
{
    /** @var EntityManagerInterface&MockObject */
    private $entityManagerMock;
    
    /** @var LangueRepository&MockObject */
    private $langueRepositoryMock;
    
    private LangueManager $langueManager;

    protected function setUp(): void
    {
        $this->entityManagerMock = $this->createMock(EntityManagerInterface::class);
        $this->langueRepositoryMock = $this->createMock(LangueRepository::class);
        $this->entityManagerMock->expects($this->any())
            ->method('getRepository')
            ->with(Langue::class)
            ->willReturn($this->langueRepositoryMock);
        
        $this->langueManager = new LangueManager($this->entityManagerMock, $this->langueRepositoryMock);
    }

    public function testValidLangue(): void
    {
        $this->langueRepositoryMock->expects($this->once())
            ->method('findOneBy')
            ->with(['nom' => 'Français'])
            ->willReturn(null);

        $langue = new Langue();
        $langue->setNom('Français');
        $langue->setDescription('Langue de Molière, parlée dans le monde entier');
        $result = $this->langueManager->validate($langue, false);
        $this->assertTrue($result);
    }

    public function testLangueWithoutName(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Le nom de la langue est obligatoire');
        $langue = new Langue();
        $langue->setDescription('Description valide');
        $this->langueManager->validate($langue, false);
    }

    public function testLangueWithNameTooShort(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Le nom doit contenir au moins 2 caractères');
        $langue = new Langue();
        $langue->setNom('F');
        $langue->setDescription('Description valide');
        $this->langueManager->validate($langue, false);
    }

    public function testLangueWithNameTooLong(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Le nom ne peut pas dépasser 50 caractères');
        $langue = new Langue();
        $langue->setNom(str_repeat('a', 51));
        $langue->setDescription('Description valide');
        $this->langueManager->validate($langue, false);
    }

    public function testLangueWithoutDescription(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('La description est obligatoire');
        $langue = new Langue();
        $langue->setNom('Anglais');
        $this->langueManager->validate($langue, false);
    }

    public function testLangueWithDescriptionTooShort(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('La description doit contenir au moins 5 caractères');

        $langue = new Langue();
        $langue->setNom('Anglais');
        $langue->setDescription('Lang');
        $this->langueManager->validate($langue, false);
    }

    public function testCreateLangueWithDuplicateName(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Une langue avec ce nom existe déjà dans le système');

        $existingLangue = new Langue();
        $reflection = new \ReflectionClass($existingLangue);
        $property = $reflection->getProperty('id');
        $property->setAccessible(true);
        $property->setValue($existingLangue, 1);
        $existingLangue->setNom('Français');
        
        $this->langueRepositoryMock->expects($this->once())
            ->method('findOneBy')
            ->with(['nom' => 'Français'])
            ->willReturn($existingLangue);

        $langue = new Langue();
        $langue->setNom('Français');
        $langue->setDescription('Description valide');

        $this->langueManager->validate($langue, false);
    }

    public function testEditLangueWithSameName(): void
    {
        $existingLangue = new Langue();
        $reflection = new \ReflectionClass($existingLangue);
        $property = $reflection->getProperty('id');
        $property->setAccessible(true);
        $property->setValue($existingLangue, 1);
        $existingLangue->setNom('Français');
        
        $this->langueRepositoryMock->expects($this->once())
            ->method('findOneBy')
            ->with(['nom' => 'Français'])
            ->willReturn($existingLangue);

        $langue = new Langue();
        $reflection = new \ReflectionClass($langue);
        $property = $reflection->getProperty('id');
        $property->setAccessible(true);
        $property->setValue($langue, 1);
        $langue->setNom('Français');
        $langue->setDescription('Description valide');

        $result = $this->langueManager->validate($langue, true);
        
        $this->assertTrue($result);
    }

    public function testEditLangueWithOtherLangueName(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Une langue avec ce nom existe déjà dans le système');

        $langue1 = new Langue();
        $reflection = new \ReflectionClass($langue1);
        $property = $reflection->getProperty('id');
        $property->setAccessible(true);
        $property->setValue($langue1, 1);
        $langue1->setNom('Français');
        
        $langue2 = new Langue();
        $reflection2 = new \ReflectionClass($langue2);
        $property2 = $reflection2->getProperty('id');
        $property2->setAccessible(true);
        $property2->setValue($langue2, 2);
        $langue2->setNom('Anglais');
        $langue2->setDescription('Description valide');

        $langue2->setNom('Français');

        $this->langueRepositoryMock->expects($this->once())
            ->method('findOneBy')
            ->with(['nom' => 'Français'])
            ->willReturn($langue1);

        $this->langueManager->validate($langue2, true);
    }

    public function testCreateLangue(): void
    {
        $this->langueRepositoryMock->expects($this->once())
            ->method('findOneBy')
            ->with(['nom' => 'Espagnol'])
            ->willReturn(null);
        $this->entityManagerMock->expects($this->once())
            ->method('persist')
            ->with($this->isInstanceOf(Langue::class));
        
        $this->entityManagerMock->expects($this->once())
            ->method('flush');

        $langue = $this->langueManager->create(
            'Espagnol',
            'Langue parlée dans 21 pays, riche et mélodieuse',
            true
        );

        $this->assertEquals('Espagnol', $langue->getNom());
        $this->assertEquals('Langue parlée dans 21 pays, riche et mélodieuse', $langue->getDescription());
        $this->assertTrue($langue->isActive());
        $this->assertNotNull($langue->getDateAjout());
    }

    public function testCreateLangueFailsWithDuplicateName(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $existingLangue = new Langue();
        $reflection = new \ReflectionClass($existingLangue);
        $property = $reflection->getProperty('id');
        $property->setAccessible(true);
        $property->setValue($existingLangue, 1);
        
        $this->langueRepositoryMock->expects($this->once())
            ->method('findOneBy')
            ->with(['nom' => 'Espagnol'])
            ->willReturn($existingLangue);

        $this->langueManager->create('Espagnol', 'Description valide', true);
    }

    public function testUpdateLangueWithSameName(): void
    {
        $langue = new Langue();
        $reflection = new \ReflectionClass($langue);
        $property = $reflection->getProperty('id');
        $property->setAccessible(true);
        $property->setValue($langue, 1);
        
        $langue->setNom('Français');
        $langue->setDescription('Ancienne description');

        $this->langueRepositoryMock->expects($this->once())
            ->method('findOneBy')
            ->with(['nom' => 'Français'])
            ->willReturn($langue);
        
        $this->entityManagerMock->expects($this->once())
            ->method('flush');

        $updated = $this->langueManager->update(
            $langue,
            'Français', 
            'Nouvelle description'
        );

        $this->assertEquals('Français', $updated->getNom());
        $this->assertEquals('Nouvelle description', $updated->getDescription());
    }

    public function testUpdateLangueWithOtherLangueName(): void
    {
        $this->expectException(\InvalidArgumentException::class);

        $langue = new Langue();
        $reflection = new \ReflectionClass($langue);
        $property = $reflection->getProperty('id');
        $property->setAccessible(true);
        $property->setValue($langue, 1);
        $langue->setNom('Anglais');
        $langue->setDescription('Description');

        $otherLangue = new Langue();
        $reflectionOther = new \ReflectionClass($otherLangue);
        $propertyOther = $reflectionOther->getProperty('id');
        $propertyOther->setAccessible(true);
        $propertyOther->setValue($otherLangue, 2);
        
        $this->langueRepositoryMock->expects($this->once())
            ->method('findOneBy')
            ->with(['nom' => 'Français'])
            ->willReturn($otherLangue);

        $this->langueManager->update($langue, 'Français', 'Description');
    }
}