<?php

namespace App\Tests;

use App\Entity\Groupe;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Validator\ConstraintViolationListInterface;
use Symfony\Component\Validator\Validation;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class GroupeTest extends TestCase
{
    private static ?ValidatorInterface $validator = null;

    protected function setUp(): void
    {
        if (self::$validator === null) {
            self::$validator = Validation::createValidatorBuilder()
                ->enableAttributeMapping()
                ->getValidator();
        }
    }

    public function testValidGroupePassesValidation(): void
    {
        $groupe = $this->createValidGroupe();

        $violations = self::$validator->validate($groupe);

        $this->assertCount(0, $violations);
    }

    public function testNomCannotBeBlank(): void
    {
        $groupe = $this->createValidGroupe();
        $groupe->setNom('');

        $violations = self::$validator->validate($groupe);

        $this->assertViolationOnProperty($violations, 'nom');
    }

    public function testDescriptionMustHaveMinimumLength(): void
    {
        $groupe = $this->createValidGroupe();
        $groupe->setDescription('Court');

        $violations = self::$validator->validate($groupe);

        $this->assertViolationOnProperty($violations, 'description');
    }

    public function testCapaciteMustBePositive(): void
    {
        $groupe = $this->createValidGroupe();
        $groupe->setCapacite(0);

        $violations = self::$validator->validate($groupe);

        $this->assertViolationOnProperty($violations, 'capacite');
    }

    public function testStatutCannotBeBlank(): void
    {
        $groupe = $this->createValidGroupe();
        $groupe->setStatut('');

        $violations = self::$validator->validate($groupe);

        $this->assertViolationOnProperty($violations, 'statut');
    }

    public function testDateCreationIsRequired(): void
    {
        $groupe = new Groupe();
        $groupe
            ->setNom('Groupe A2')
            ->setDescription('Description suffisamment longue.')
            ->setCapacite(10)
            ->setStatut('actif');

        $violations = self::$validator->validate($groupe);

        $this->assertViolationOnProperty($violations, 'date_creation');
    }

    private function createValidGroupe(): Groupe
    {
        $groupe = new Groupe();
        $groupe
            ->setNom('Groupe Anglais A2')
            ->setDescription('Ce groupe est destiné à la pratique hebdomadaire.')
            ->setCapacite(12)
            ->setStatut('actif')
            ->setDateCreation(new \DateTime('today'));

        return $groupe;
    }

    private function assertViolationOnProperty(ConstraintViolationListInterface $violations, string $property): void
    {
        $paths = [];
        foreach ($violations as $violation) {
            $paths[] = $violation->getPropertyPath();
        }

        $this->assertContains($property, $paths);
    }
}
