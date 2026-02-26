<?php

namespace App\Entity;

use App\Repository\ReponseRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ReponseRepository::class)]
class Reponse
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Contenu obligatoire")]
    #[Assert\Length(min: 2, max: 255)]
    private ?string $contenu_rep = null;

    #[ORM\Column]
    private ?bool $is_correct = null;

    #[ORM\Column]
    private ?float $score = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTime $date_reponse = null;

    #[ORM\ManyToOne(inversedBy: 'reponses')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Question $Id_question = null;

    public function __construct()
    {
        $this->date_reponse = new \DateTime();
    }
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContenuRep(): ?string
    {
        return $this->contenu_rep;
    }

    public function setContenuRep(string $contenu_rep): static
    {
        $this->contenu_rep = $contenu_rep;

        return $this;
    }

    public function isCorrect(): ?bool
    {
        return $this->is_correct;
    }

    public function setIsCorrect(bool $is_correct): static
    {
        $this->is_correct = $is_correct;

        return $this;
    }

    public function getScore(): ?float
    {
        return $this->score;
    }

    public function setScore(float $score): static
    {
        $this->score = $score;

        return $this;
    }

    public function getDateReponse(): ?\DateTime
    {
        return $this->date_reponse;
    }

    public function setDateReponse(\DateTime $date_reponse): static
    {
        $this->date_reponse = $date_reponse;

        return $this;
    }

    public function getIdQuestion(): ?Question
    {
        return $this->Id_question;
    }

    public function setIdQuestion(?Question $Id_question): static
    {
        $this->Id_question = $Id_question;

        return $this;
    }
}
