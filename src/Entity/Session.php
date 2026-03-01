<?php

namespace App\Entity;

use App\Repository\SessionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

#[ORM\Entity(repositoryClass: SessionRepository::class)]
class Session
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    // ✅ PHPStan fix ligne 19 (property.unusedType) : même cas que Reservation::$id
    // Doctrine injecte l'int via réflexion après persist+flush, jamais via PHP direct
    private ?int $id = null; // @phpstan-ignore-line property.unusedType

<<<<<<< HEAD
    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    #[Assert\NotBlank(message: "La date et heure sont obligatoires")]
    private \DateTimeInterface $dateHeure;

    #[ORM\Column(length: 50)]
    #[Assert\NotBlank(message: "Le statut est obligatoire")]
    #[Assert\Choice(choices: ['planifiée', 'en_cours', 'terminée', 'annulée'], message: "Statut invalide")]
    private string $statut = '';
=======
    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    #[Assert\NotBlank(message: "La date et heure de la session sont obligatoires.")]
    #[Assert\GreaterThanOrEqual(
        value: "now",
        message: "La session ne peut pas être planifiée dans le passé."
    )]
    private ?\DateTimeInterface $dateHeure = null;

    #[ORM\Column(length: 50)]
    #[Assert\NotBlank(message: "Le statut est obligatoire.")]
    #[Assert\Choice(
        choices: ["planifiée", "en cours", "terminée", "annulée"],
        message: "Statut invalide. Valeurs acceptées : planifiée, en cours, terminée, annulée."
    )]
    private ?string $statut = null;
>>>>>>> origin/gestion/reservation-session

    #[ORM\Column(length: 255, nullable: true)]
    #[Assert\NotBlank(message: "Le lien de la réunion est obligatoire.")]
    #[Assert\Url(message: "Le lien doit être une URL valide (ex: https://meet.google.com/...)")]
    #[Assert\Length(
        min: 10,
        max: 255,
        minMessage: "Le lien doit contenir au moins {{ limit }} caractères.",
        maxMessage: "Le lien ne peut pas dépasser {{ limit }} caractères."
    )]
    private ?string $lienReunion = null;

    #[ORM\ManyToOne(inversedBy: 'sessions')]
    #[ORM\JoinColumn(name: "id_group_id", referencedColumnName: "id", nullable: false)]
    #[Assert\NotNull(message: "Le groupe est obligatoire.")]
    private ?Groupe $group = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(name: "id_user_id", referencedColumnName: "id", nullable: false)]
    #[Assert\NotNull(message: "L'enseignant est obligatoire.")]
    private ?User $user = null;

    /**
     * @var Collection<int, Reservation>
     */
    #[ORM\OneToMany(mappedBy: 'session', targetEntity: Reservation::class, orphanRemoval: true)]
    private Collection $reservations;

    #[ORM\Column(type: Types::INTEGER, nullable: true)]
    #[Assert\Range(min: 0, max: 5, notInRangeMessage: "Le rating doit être entre {{ min }} et {{ max }}.")]
    private ?int $rating = null;

    public function __construct()
    {
        $this->reservations = new ArrayCollection();
    }

    #[Assert\Callback]
    public function validate(ExecutionContextInterface $context): void
    {
        if ($this->statut === 'en cours' && empty($this->lienReunion)) {
            $context->buildViolation("Le lien de réunion est obligatoire quand la session est 'en cours'.")
                ->atPath('lienReunion')
                ->addViolation();
        }
        if ($this->statut !== 'terminée' && $this->rating !== null) {
            $context->buildViolation("Le rating ne peut être défini que pour les sessions terminées.")
                ->atPath('rating')
                ->addViolation();
        }
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateHeure(): \DateTimeInterface
    {
        return $this->dateHeure;
    }

    public function setDateHeure(\DateTimeInterface $dateHeure): static
    {
        $this->dateHeure = $dateHeure;
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

    public function getLienReunion(): ?string
    {
        return $this->lienReunion;
    }

    public function setLienReunion(?string $lienReunion): static
    {
        $this->lienReunion = $lienReunion;
        return $this;
    }

    public function getRating(): ?int
    {
        return $this->rating;
    }

    public function setRating(?int $rating): static
    {
        $this->rating = $rating;
        return $this;
    }

    public function getGroup(): ?Groupe
    {
        return $this->group;
    }

    public function setGroup(?Groupe $group): static
    {
        $this->group = $group;
        return $this;
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

    /**
     * @return Collection<int, Reservation>
     */
    public function getReservations(): Collection
    {
        return $this->reservations;
    }

    public function addReservation(Reservation $reservation): static
    {
        if (!$this->reservations->contains($reservation)) {
            $this->reservations->add($reservation);
            $reservation->setSession($this);
        }
        return $this;
    }

    public function removeReservation(Reservation $reservation): static
    {
        if ($this->reservations->removeElement($reservation)) {
            if ($reservation->getSession() === $this) {
                $reservation->setSession(null);
            }
        }
        return $this;
    }
}