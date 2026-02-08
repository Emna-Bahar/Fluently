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

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\NotBlank(message: "La date de passage est obligatoire")]
    #[Assert\GreaterThan("today", message: "La date de passage doit être future")]
    private ?\DateTime $date_passage = null;

    #[ORM\Column(type: Types::FLOAT, nullable: true)]  // UNE SEULE annotation, nullable
    private ?float $resultat = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    #[Assert\NotBlank(message: "La durée est obligatoire")]
    private ?\DateTime $duree = null;

    #[ORM\Column(length: 50)]
    #[Assert\NotBlank(message: "Le type est obligatoire")]
    private ?string $type = null;

    #[ORM\ManyToOne(inversedBy: 'tests')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Langue $Id_langue = null;

    #[ORM\ManyToOne(inversedBy: 'tests')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $Id_user = null;

    /**
     * @var Collection<int, Question>
     */
    #[ORM\OneToMany(targetEntity: Question::class, mappedBy: 'Id_test')]
    private Collection $questions;

    public function __construct()
    {
        $this->questions = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDatePassage(): ?\DateTime
    {
        return $this->date_passage;
    }

    public function setDatePassage(\DateTime $date_passage): static
    {
        $this->date_passage = $date_passage;

        return $this;
    }

    public function getResultat(): ?float
    {
        return $this->resultat;
    }

    public function setResultat(?float $resultat): static
    {
        $this->resultat = $resultat;

        return $this;
    }

    public function getDuree(): ?\DateTime
    {
        return $this->duree;
    }

    public function setDuree(\DateTime $duree): static
    {
        $this->duree = $duree;

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

    public function getIdLangue(): ?Langue
    {
        return $this->Id_langue;
    }

    public function setIdLangue(?Langue $Id_langue): static
    {
        $this->Id_langue = $Id_langue;

        return $this;
    }

    public function getIdUser(): ?User
    {
        return $this->Id_user;
    }

    public function setIdUser(?User $Id_user): static
    {
        $this->Id_user = $Id_user;

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
}