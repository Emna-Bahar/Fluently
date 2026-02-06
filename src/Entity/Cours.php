<?php

namespace App\Entity;

use App\Repository\CoursRepository;
use BcMath\Number;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CoursRepository::class)]
class Cours
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $numero = null;

    #[ORM\Column(length: 255)]
    private ?string $ressource = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTime $date_creation = null;

    #[ORM\OneToOne(targetEntity: self::class, inversedBy: 'cours', cascade: ['persist', 'remove'])]
    private ?self $cours_precedent_id = null;

    #[ORM\OneToOne(targetEntity: self::class, mappedBy: 'cours_precedent_id', cascade: ['persist', 'remove'])]
    private ?self $cours = null;

    #[ORM\ManyToOne(inversedBy: 'cours')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Niveau $Id_niveau = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumero(): ?Number
    {
        return $this->numero;
    }

    public function setNumero(Number $numero): static
    {
        $this->numero = $numero;

        return $this;
    }

    public function getRessource(): ?string
    {
        return $this->ressource;
    }

    public function setRessource(string $ressource): static
    {
        $this->ressource = $ressource;

        return $this;
    }

    public function getDateCreation(): ?\DateTime
    {
        return $this->date_creation;
    }

    public function setDateCreation(\DateTime $date_creation): static
    {
        $this->date_creation = $date_creation;

        return $this;
    }

    public function getCoursPrecedentId(): ?self
    {
        return $this->cours_precedent_id;
    }

    public function setCoursPrecedentId(?self $cours_precedent_id): static
    {
        $this->cours_precedent_id = $cours_precedent_id;

        return $this;
    }

    public function getCours(): ?self
    {
        return $this->cours;
    }

    public function setCours(?self $cours): static
    {
        // unset the owning side of the relation if necessary
        if (null === $cours && null !== $this->cours) {
            $this->cours->setCoursPrecedentId(null);
        }

        // set the owning side of the relation if necessary
        if (null !== $cours && $cours->getCoursPrecedentId() !== $this) {
            $cours->setCoursPrecedentId($this);
        }

        $this->cours = $cours;

        return $this;
    }

    public function getIdNiveau(): ?Niveau
    {
        return $this->Id_niveau;
    }

    public function setIdNiveau(?Niveau $Id_niveau): static
    {
        $this->Id_niveau = $Id_niveau;

        return $this;
    }
}
