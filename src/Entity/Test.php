<?php

namespace App\Entity;

use App\Repository\TestRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: TestRepository::class)]
class Test
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le titre est obligatoire")]
    private ?string $titre = null;

    #[ORM\Column(length: 50)]
    #[Assert\NotBlank(message: "Le type est obligatoire")]
    private ?string $type = null;

    #[ORM\Column(nullable: true)]
    private ?int $dureeEstimee = null; // en minutes

    #[ORM\ManyToOne(inversedBy: 'tests')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Langue $langue = null;

    /**
     * @var Collection<int, Question>
     */
    #[ORM\OneToMany(targetEntity: Question::class, mappedBy: 'Id_test', cascade: ['persist', 'remove'])]
    private Collection $questions;

    /**
     * @var Collection<int, TestPassage>
     */
    #[ORM\OneToMany(targetEntity: TestPassage::class, mappedBy: 'test', cascade: ['remove'])]
    private Collection $passages;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: true)]
    private ?Niveau $niveau = null;

    public function __construct()
    {
        $this->questions = new ArrayCollection();
        $this->passages = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): static
    {
        $this->titre = $titre;
        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): static
    {
        $this->type = $type;
        return $this;
    }

    public function getDureeEstimee(): ?int
    {
        return $this->dureeEstimee;
    }

    public function setDureeEstimee(?int $dureeEstimee): static
    {
        $this->dureeEstimee = $dureeEstimee;
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

    /**
     * @return Collection<int, Question>
     */
    public function getQuestions(): Collection
    {
        return $this->questions;
    }

    public function addQuestion(Question $question): static
    {
        if (!$this->questions->contains($question)) {
            $this->questions->add($question);
            $question->setIdTest($this);
        }
        return $this;
    }

    public function removeQuestion(Question $question): static
    {
        if ($this->questions->removeElement($question)) {
            if ($question->getIdTest() === $this) {
                $question->setIdTest(null);
            }
        }
        return $this;
    }

    /**
     * @return Collection<int, TestPassage>
     */
    public function getPassages(): Collection
    {
        return $this->passages;
    }

    public function addPassage(TestPassage $passage): static
    {
        if (!$this->passages->contains($passage)) {
            $this->passages->add($passage);
            $passage->setTest($this);
        }
        return $this;
    }

    public function removePassage(TestPassage $passage): static
    {
        if ($this->passages->removeElement($passage)) {
            if ($passage->getTest() === $this) {
                $passage->setTest(null);
            }
        }
        return $this;
    }

    // Méthodes utiles pour les templates
    public function getScoreMax(): int
    {
        $total = 0;
        foreach ($this->questions as $question) {
            $total += $question->getScoreMax();
        }
        return $total;
    }

    // COMPATIBILITÉ TEMPORAIRE (pour les anciens templates)
    public function getIdLangue(): ?Langue
    {
        return $this->langue;
    }

    public function setIdLangue(?Langue $langue): static
    {
        $this->langue = $langue;
        return $this;
    }

    public function getNiveau(): ?Niveau
    {
        return $this->niveau;
    }

    public function setNiveau(?Niveau $niveau): static
    {
        $this->niveau = $niveau;
        return $this;
    }
}