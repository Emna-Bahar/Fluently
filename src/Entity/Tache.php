<?php

namespace App\Entity;

use App\Repository\TacheRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TacheRepository::class)]
class Tache
{
 #[ORM\Id]
#[ORM\GeneratedValue]
#[ORM\Column]
/** @phpstan-ignore property.unusedType */
private ?int $id = null;

    #[ORM\Column(length: 50)]
    private string $titre = '';

    #[ORM\Column(length: 100)]
    private string $description = '';

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private \DateTime $date_limite;

    #[ORM\Column(length: 50)]
    private string $statut = '';

    #[ORM\Column(length: 50)]
    private string $priorite = '';

    #[ORM\ManyToOne(inversedBy: 'taches')]
    #[ORM\JoinColumn(nullable: false, onDelete: 'CASCADE')]
    private ?Objectif $Id_objectif = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): static
    {
        $this->titre = $titre;

        return $this;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getDateLimite(): \DateTime
    {
        return $this->date_limite;
    }

    public function setDateLimite(\DateTime $date_limite): static
    {
        $this->date_limite = $date_limite;

        return $this;
    }

    public function getStatut(): string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): static
    {
        $this->statut = $statut;

        return $this;
    }

    public function getPriorite(): string
    {
        return $this->priorite;
    }

    public function setPriorite(string $priorite): static
    {
        $this->priorite = $priorite;

        return $this;
    }

    public function getIdObjectif(): ?Objectif
    {
        return $this->Id_objectif;
    }

    public function setIdObjectif(?Objectif $Id_objectif): static
    {
        $this->Id_objectif = $Id_objectif;

        return $this;
    }
}
