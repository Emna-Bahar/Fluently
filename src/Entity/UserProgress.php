<?php

namespace App\Entity;

use App\Repository\UserProgressRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UserProgressRepository::class)]
class UserProgress
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $user = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Langue $langue = null;

    #[ORM\ManyToOne]
    private ?Niveau $niveauActuel = null;

    #[ORM\ManyToOne]
    private ?Cours $dernierCoursComplete = null;

    #[ORM\Column]
    private int $dernierNumeroCours = 0;

    #[ORM\Column]
    private bool $testNiveauComplete = false;  // CORRECTION: enlevé le ?

    #[ORM\Column(type: 'datetime_immutable', nullable: true)]
    private ?\DateTimeImmutable $dateDerniereActivite = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;

        return $this;
    }

    public function getLangue(): ?Langue
    {
        return $this->langue;
    }

    public function setLangue(?Langue $langue): static
    {
        $this->langue = $langue;

        return $this;
    }

    public function getNiveauActuel(): ?Niveau
    {
        return $this->niveauActuel;
    }

    public function setNiveauActuel(?Niveau $niveauActuel): static
    {
        $this->niveauActuel = $niveauActuel;

        return $this;
    }

    public function getDernierCoursComplete(): ?Cours
    {
        return $this->dernierCoursComplete;
    }

    public function setDernierCoursComplete(?Cours $cours): static
    {
        $this->dernierCoursComplete = $cours;

        if ($cours) {
            $this->dernierNumeroCours = $cours->getNumero();
        }

        return $this;
    }

    public function getDernierNumeroCours(): int
    {
        return $this->dernierNumeroCours;
    }

    public function setDernierNumeroCours(int $numero): static
    {
        $this->dernierNumeroCours = $numero;

        return $this;
    }

    public function isTestNiveauComplete(): bool  
    {
        return $this->testNiveauComplete;
    }

    public function setTestNiveauComplete(bool $complete): static  
    {
        $this->testNiveauComplete = $complete;

        return $this;
    }

    public function getDateDerniereActivite(): ?\DateTime
    {
        return $this->dateDerniereActivite;
    }

    protected function setDateDerniereActivite(?\DateTime $date): static
    {
        $this->dateDerniereActivite = $date;

        return $this;
    }
}