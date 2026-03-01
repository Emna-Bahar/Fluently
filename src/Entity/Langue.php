<?php

namespace App\Entity;

use App\Repository\LangueRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\File;

#[ORM\Entity(repositoryClass: LangueRepository::class)]
#[UniqueEntity(
    fields: ['nom'],
    message: 'Cette langue existe déjà dans le système.'
)]
#[Vich\Uploadable]
class Langue
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    #[Assert\NotBlank(message: "Le nom de la langue est obligatoire.")]
    #[Assert\Length(
        min: 2,
        max: 50,
        minMessage: "Le nom doit contenir au moins {{ limit }} caractères.",
        maxMessage: "Le nom ne peut pas dépasser {{ limit }} caractères."
    )]
    private ?string $nom = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $drapeau = null;

    #[Vich\UploadableField(mapping: 'langue_drapeau', fileNameProperty: 'drapeau')]
    private ?File $drapeauFile = null;

    #[ORM\Column(type: 'datetime', nullable: true)]
    private ?\DateTimeInterface $updatedAt = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "La description est obligatoire.")]
    #[Assert\Length(
        min: 5,
        minMessage: "La description doit contenir au moins {{ limit }} caractères."
    )]
    private ?string $description = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $popularite = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTime $date_ajout = null;

    #[ORM\Column]
    #[Assert\NotNull(message: "Veuillez indiquer si la langue est active ou non.")]
    private ?bool $is_active = null;

    /**
     * @var Collection<int, User>
     */
    #[ORM\ManyToMany(targetEntity: User::class, inversedBy: 'langues')]
    private Collection $Id_user;

    /**
     * @var Collection<int, Niveau>
     */
    #[ORM\OneToMany(targetEntity: Niveau::class, mappedBy: 'Id_langue')]
    private Collection $niveaux;

    /**
     * @var Collection<int, Groupe>
     */
    #[ORM\OneToMany(targetEntity: Groupe::class, mappedBy: 'ID_langue')]
    private Collection $groupes;

    /**
     * @var Collection<int, Test>
     */
    #[ORM\OneToMany(targetEntity: Test::class, mappedBy: 'Id_langue')]
    private Collection $tests;

public function setDrapeauFile(?File $drapeauFile = null): void
    {
        $this->drapeauFile = $drapeauFile;
        
        if ($drapeauFile) {
           $this->updatedAt = new \DateTime();
        }
    }

    public function getDrapeauFile(): ?File
    {
        return $this->drapeauFile;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }

    public function __construct()
    {
        $this->Id_user = new ArrayCollection();
        $this->niveaux = new ArrayCollection();
        $this->groupes = new ArrayCollection();
        $this->tests = new ArrayCollection();

        // Valeurs par défaut raisonnables
        $this->date_ajout = new \DateTime();
        $this->is_active = true;
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

    public function getDrapeau(): ?string
    {
        return $this->drapeau;
    }

    public function setDrapeau(?string $drapeau): static
    {
        $this->drapeau = $drapeau;

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

    public function getPopularite(): ?string
    {
        return $this->popularite;
    }

    public function setPopularite(string $popularite): static
    {
        $this->popularite = $popularite;

        return $this;
    }

    public function getDateAjout(): ?\DateTime
    {
        return $this->date_ajout;
    }

    public function setDateAjout(\DateTime $date_ajout): static
    {
        $this->date_ajout = $date_ajout;

        return $this;
    }

    public function isActive(): ?bool
    {
        return $this->is_active;
    }

    public function setIsActive(bool $is_active): static
    {
        $this->is_active = $is_active;

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
     * @return Collection<int, Niveau>
     */
    public function getNiveaux(): Collection
    {
        return $this->niveaux;
    }

    public function addNiveau(Niveau $niveau): static
    {
        if (!$this->niveaux->contains($niveau)) {
            $this->niveaux->add($niveau);
            $niveau->setIdLangue($this);
        }

        return $this;
    }

    public function removeNiveau(Niveau $niveau): static
    {
        if ($this->niveaux->removeElement($niveau)) {
            if ($niveau->getIdLangue() === $this) {
                $niveau->setIdLangue(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Groupe>
     */
    public function getGroupes(): Collection
    {
        return $this->groupes;
    }

    public function addGroupe(Groupe $groupe): static
    {
        if (!$this->groupes->contains($groupe)) {
            $this->groupes->add($groupe);
            $groupe->setIDLangue($this);
        }

        return $this;
    }

    public function removeGroupe(Groupe $groupe): static
    {
        if ($this->groupes->removeElement($groupe)) {
            if ($groupe->getIDLangue() === $this) {
                $groupe->setIDLangue(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Test>
     */
    public function getTests(): Collection
    {
        return $this->tests;
    }

    public function addTest(Test $test): static
    {
        if (!$this->tests->contains($test)) {
            $this->tests->add($test);
            $test->setIdLangue($this);
        }

        return $this;
    }

    public function removeTest(Test $test): static
    {
        if ($this->tests->removeElement($test)) {
            if ($test->getIdLangue() === $this) {
                $test->setIdLangue(null);
            }
        }

        return $this;
    }
}