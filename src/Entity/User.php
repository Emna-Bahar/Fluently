<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UserRepository::class)]
class User
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $email = null;

    #[ORM\Column(length: 50)]
    private ?string $nom = null;

    #[ORM\Column(length: 50)]
    private ?string $prenom = null;

    #[ORM\Column(length: 100)]
    private ?string $role = null;

    #[ORM\Column(length: 100)]
    private ?string $statut = null;

    /** @var Collection<int, Groupe> */
    #[ORM\ManyToMany(targetEntity: Groupe::class, mappedBy: 'Id_user')]
    private Collection $groupes;

    /** @var Collection<int, Langue> */
    #[ORM\ManyToMany(targetEntity: Langue::class, mappedBy: 'Id_user')]
    private Collection $langues;

    /** @var Collection<int, Message> */
    #[ORM\OneToMany(targetEntity: Message::class, mappedBy: 'Id_user')]
    private Collection $messages;

    /** @var Collection<int, Objectif> */
    #[ORM\OneToMany(targetEntity: Objectif::class, mappedBy: 'Id_user')]
    private Collection $objectifs;

    /** @var Collection<int, Reservation> */
    #[ORM\OneToMany(targetEntity: Reservation::class, mappedBy: 'Id_user')]
    private Collection $reservations;

    /** @var Collection<int, Session> */
    #[ORM\OneToMany(targetEntity: Session::class, mappedBy: 'Id_user')]
    private Collection $sessions;

    /** @var Collection<int, Test> */
    #[ORM\OneToMany(targetEntity: Test::class, mappedBy: 'Id_user')]
    private Collection $tests;

    public function __construct()
    {
        $this->groupes = new ArrayCollection();
        $this->langues = new ArrayCollection();
        $this->messages = new ArrayCollection();
        $this->objectifs = new ArrayCollection();
        $this->reservations = new ArrayCollection();
        $this->sessions = new ArrayCollection();
        $this->tests = new ArrayCollection();
    }

    public function getId(): ?int { return $this->id; }

    public function getEmail(): ?string { return $this->email; }
    public function setEmail(string $email): static { $this->email = $email; return $this; }

    public function getNom(): ?string { return $this->nom; }
    public function setNom(string $nom): static { $this->nom = $nom; return $this; }

    public function getPrenom(): ?string { return $this->prenom; }
    public function setPrenom(string $prenom): static { $this->prenom = $prenom; return $this; }

    public function getRole(): ?string { return $this->role; }
    public function setRole(string $role): static { $this->role = $role; return $this; }

    public function getStatut(): ?string { return $this->statut; }
    public function setStatut(string $statut): static { $this->statut = $statut; return $this; }

    public function getGroupes(): Collection { return $this->groupes; }
    public function getLangues(): Collection { return $this->langues; }
    public function getMessages(): Collection { return $this->messages; }
    public function getObjectifs(): Collection { return $this->objectifs; }
    public function getReservations(): Collection { return $this->reservations; }
    public function getSessions(): Collection { return $this->sessions; }
    public function getTests(): Collection { return $this->tests; }
}
