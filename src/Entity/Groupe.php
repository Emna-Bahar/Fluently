<?php

namespace App\Entity;

use App\Repository\GroupeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

// ✅ use BcMath\Number SUPPRIMÉ — c'était la cause du TypeError

#[ORM\Entity(repositoryClass: GroupeRepository::class)]
class Groupe
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    // ✅ CORRIGÉ : propriété ?int, cohérent avec BDD (int(11))
    #[ORM\Column]
    private ?int $capacite = null;

    #[ORM\Column(length: 50)]
    private ?string $statut = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTime $date_creation = null;

    #[ORM\ManyToOne(inversedBy: 'groupes')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Langue $ID_langue = null;

    #[ORM\ManyToOne(inversedBy: 'groupes')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Niveau $Id_niveau = null;

    /**
     * @var Collection<int, User>
     */
    #[ORM\ManyToMany(targetEntity: User::class, inversedBy: 'groupes')]
    private Collection $Id_user;

    /**
     * @var Collection<int, Message>
     */
    #[ORM\OneToMany(targetEntity: Message::class, mappedBy: 'Id_groupe')]
    private Collection $messages;

    /**
     * @var Collection<int, Session>
     */
    // ✅ mappedBy: 'group' — car dans Session.php la propriété est $group
    #[ORM\OneToMany(targetEntity: Session::class, mappedBy: 'group')]
    private Collection $sessions;

    public function __construct()
    {
        $this->Id_user  = new ArrayCollection();
        $this->messages = new ArrayCollection();
        $this->sessions = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;
        return $this;
    }

    // ✅ CORRIGÉ : ?int au lieu de ?Number — plus de TypeError
    public function getCapacite(): ?int
    {
        return $this->capacite;
    }

    // ✅ CORRIGÉ : int au lieu de Number
    public function setCapacite(int $capacite): static
    {
        $this->capacite = $capacite;
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

    public function getDateCreation(): ?\DateTime
    {
        return $this->date_creation;
    }

    public function setDateCreation(\DateTime $date_creation): static
    {
        $this->date_creation = $date_creation;
        return $this;
    }

    public function getIDLangue(): ?Langue
    {
        return $this->ID_langue;
    }

    public function setIDLangue(?Langue $ID_langue): static
    {
        $this->ID_langue = $ID_langue;
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

    /**
     * @return Collection<int, User>
     */
    public function getIdUser(): Collection
    {
        return $this->Id_user;
    }

    public function addIdUser(User $idUser): static
    {
        if (!$this->Id_user->contains($idUser)) {
            $this->Id_user->add($idUser);
        }
        return $this;
    }

    public function removeIdUser(User $idUser): static
    {
        $this->Id_user->removeElement($idUser);
        return $this;
    }

    /**
     * @return Collection<int, Message>
     */
    public function getMessages(): Collection
    {
        return $this->messages;
    }

    public function addMessage(Message $message): static
    {
        if (!$this->messages->contains($message)) {
            $this->messages->add($message);
            $message->setIdGroupe($this);
        }
        return $this;
    }

    public function removeMessage(Message $message): static
    {
        if ($this->messages->removeElement($message)) {
            if ($message->getIdGroupe() === $this) {
                $message->setIdGroupe(null);
            }
        }
        return $this;
    }

    /**
     * @return Collection<int, Session>
     */
    public function getSessions(): Collection
    {
        return $this->sessions;
    }

    public function addSession(Session $session): static
    {
        if (!$this->sessions->contains($session)) {
            $this->sessions->add($session);
            // ✅ CORRIGÉ : Session.php a setGroup() et getGroup(), PAS setIdGroup()
            $session->setGroup($this);
        }
        return $this;
    }

    public function removeSession(Session $session): static
    {
        if ($this->sessions->removeElement($session)) {
            // ✅ CORRIGÉ : Session.php a getGroup(), PAS getIdGroup()
            if ($session->getGroup() === $this) {
                $session->setGroup(null);
            }
        }
        return $this;
    }
}