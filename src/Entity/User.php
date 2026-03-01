<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Serializer\Annotation\Ignore;
use SensitiveParameter;

#[ORM\Entity]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100, unique: true)]
    private string $email = '';

    #[ORM\Column(length: 50)]
    private string $nom = '';

    #[ORM\Column(length: 50)]
    private string $prenom = '';

    /** @var array<string> */
    #[ORM\Column(type: 'json')]
    private array $roles = [];

    #[ORM\Column]
    #[Ignore]
    private string $password = '';

    #[ORM\Column(length: 100)]
    private string $statut = '';

    #[ORM\Column(type: 'text', nullable: true)]
    private ?string $faceDescriptor = null;

    /** @var Collection<int, Langue> */
    #[ORM\ManyToMany(targetEntity: Langue::class, mappedBy: 'Id_user')]
    private Collection $langues;

    /** @var Collection<int, Groupe> */
    #[ORM\ManyToMany(targetEntity: Groupe::class, mappedBy: 'Id_user')]
    private Collection $groupes;

    /** @var Collection<int, TestPassage> */
    #[ORM\OneToMany(targetEntity: TestPassage::class, mappedBy: 'user')]
    private Collection $testPassages;

    /** @var Collection<int, Message> */
    #[ORM\OneToMany(targetEntity: Message::class, mappedBy: 'Id_user')]
    private Collection $messages;

    /** @var Collection<int, Objectif> */
    #[ORM\OneToMany(targetEntity: Objectif::class, mappedBy: 'Id_user')]
    private Collection $objectifs;

    public function __construct()
    {
        $this->langues = new ArrayCollection();
        $this->groupes = new ArrayCollection();
        $this->testPassages = new ArrayCollection();
        $this->messages = new ArrayCollection();
        $this->objectifs = new ArrayCollection();
        $this->roles = ['ROLE_USER'];
    }

    public function getId(): ?int { return $this->id; }

    public function getEmail(): string { return $this->email; }
    public function setEmail(string $email): static { $this->email = $email; return $this; }

    public function getNom(): string { return $this->nom; }
    public function setNom(string $nom): static { $this->nom = $nom; return $this; }

    public function getPrenom(): string { return $this->prenom; }
    public function setPrenom(string $prenom): static { $this->prenom = $prenom; return $this; }

    public function getStatut(): string { return $this->statut; }
    public function setStatut(string $statut): static { $this->statut = $statut; return $this; }

    /** @return array<string> */
    public function getRoles(): array
    {
        $roles = $this->roles;
        $roles[] = 'ROLE_USER';
        return array_unique($roles);
    }

    /** @param array<string> $roles */
    public function setRoles(array $roles): static
    {
        $this->roles = $roles;
        return $this;
    }

    public function getPassword(): string { return $this->password; }
    public function setPassword(#[SensitiveParameter] string $password): static { $this->password = $password; return $this; }

    public function eraseCredentials(): void {}

    // Fix: return $this->email ?? '' to avoid returning null when string expected
    public function getUserIdentifier(): string
    {
        return $this->email ?? '';
    }

    public function getFaceDescriptor(): ?string
    {
        return $this->faceDescriptor;
    }

    public function setFaceDescriptor(?string $faceDescriptor): static
    {
        $this->faceDescriptor = $faceDescriptor;
        return $this;
    }

    /** @return Collection<int, Langue> */
    public function getLangues(): Collection
    {
        return $this->langues;
    }

    /** @return Collection<int, Groupe> */
    public function getGroupes(): Collection
    {
        return $this->groupes;
    }

    /** @return Collection<int, TestPassage> */
    public function getTestPassages(): Collection
    {
        return $this->testPassages;
    }

    /** @return Collection<int, Message> */
    public function getMessages(): Collection
    {
        return $this->messages;
    }

    /** @return Collection<int, Objectif> */
    public function getObjectifs(): Collection
    {
        return $this->objectifs;
    }
}