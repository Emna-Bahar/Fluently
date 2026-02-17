<?php

namespace App\Entity;

use App\Repository\ReservationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ReservationRepository::class)]
class Reservation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

   #[ORM\Column(type: Types::DATE_MUTABLE)]
#[Assert\NotBlank(message: "La date de réservation est obligatoire.")]
#[Assert\GreaterThanOrEqual(
    value: "today",
    message: "La date de réservation doit être aujourd'hui ou dans le futur."
)]
private ?\DateTimeInterface $dateReservation = null;
    #[ORM\Column(length: 50)]
    #[Assert\NotBlank(message: "Le statut est obligatoire.")]
    #[Assert\Choice(
        choices: ["en attente", "confirmée", "annulée", "refusée"],
        message: "Statut invalide. Valeurs acceptées : en attente, confirmée, annulée, refusée."
    )]
    private ?string $statut = null;

    #[ORM\ManyToOne(inversedBy: 'reservations')]
#[ORM\JoinColumn(name: "id_session_id", referencedColumnName: "id", nullable: false)]
#[Assert\NotNull(message: "La session est obligatoire.")]
private ?Session $session = null;
    #[ORM\ManyToOne]
#[ORM\JoinColumn(name: "id_user_id", referencedColumnName: "id", nullable: false)]
#[Assert\NotNull(message: "L'utilisateur est obligatoire.")]
private ?User $user = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateReservation(): ?\DateTimeInterface
    {
        return $this->dateReservation;
    }

    public function setDateReservation(\DateTimeInterface $dateReservation): static
    {
        $this->dateReservation = $dateReservation;
        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): static
    {
        $this->statut = $statut;
        return $this;
    }

    public function getSession(): ?Session
    {
        return $this->session;
    }

    public function setSession(?Session $session): static
    {
        $this->session = $session;
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
}