<?php

namespace App\Entity;

use App\Repository\QuestionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: QuestionRepository::class)]
class Question
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "L'énoncé est obligatoire")]
    #[Assert\Length(min: 5, max: 255, minMessage: "Au moins 5 caractères", maxMessage: "Max 255 caractères")]
    private ?string $enonce = null;

    #[ORM\Column(length: 50)]
    #[Assert\NotBlank(message: "Le type est obligatoire")]
    #[Assert\Choice(choices: ['qcm', 'texte_libre', 'oral'], message: "Type invalide (qcm, texte_libre, oral)")]
    private ?string $type = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: "Score max obligatoire")]
    #[Assert\Range(min: 1, max: 20, notInRangeMessage: "Score max entre 1 et 20")]
    private ?float $score_max = null;

    #[ORM\ManyToOne(inversedBy: 'questions')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Test $Id_test = null;

    /**
     * @var Collection<int, Reponse>
     */
    #[ORM\OneToMany(targetEntity: Reponse::class, mappedBy: 'Id_question')]
    private Collection $reponses;

    public function __construct()
    {
        $this->reponses = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEnonce(): ?string
    {
        return $this->enonce;
    }

    public function setEnonce(string $enonce): static
    {
        $this->enonce = $enonce;

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

    public function getScoreMax(): ?float
    {
        return $this->score_max;
    }

    public function setScoreMax(float $score_max): static
    {
        $this->score_max = $score_max;

        return $this;
    }

    public function getIdTest(): ?Test
    {
        return $this->Id_test;
    }

    public function setIdTest(?Test $Id_test): static
    {
        $this->Id_test = $Id_test;

        return $this;
    }

    /**
     * @return Collection<int, Reponse>
     */
    public function getReponses(): Collection
    {
        return $this->reponses;
    }

    public function addReponse(Reponse $reponse): static
    {
        if (!$this->reponses->contains($reponse)) {
            $this->reponses->add($reponse);
            $reponse->setIdQuestion($this);
        }

        return $this;
    }

    public function removeReponse(Reponse $reponse): static
    {
        if ($this->reponses->removeElement($reponse)) {
            // set the owning side to null (unless already changed)
            if ($reponse->getIdQuestion() === $this) {
                $reponse->setIdQuestion(null);
            }
        }

        return $this;
    }
}
