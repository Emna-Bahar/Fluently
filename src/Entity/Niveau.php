<?php

namespace App\Entity;

use App\Repository\NiveauRepository;
use BcMath\Number;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: NiveauRepository::class)]
class Niveau
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $titre = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    #[ORM\Column(length: 255)]
    private ?string $image_couverture = null;

    #[ORM\Column(length: 50)]
    private ?string $difficulte = null;

    #[ORM\Column]
    private ?int $ordre = null;

    #[ORM\Column]
    private ?float $seuil_score_max = null;

    #[ORM\Column]
    private ?float $seuil_score_min = null;

    #[ORM\ManyToOne(inversedBy: 'niveaux')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Langue $Id_langue = null;

    /**
     * @var Collection<int, Cours>
     */
    #[ORM\OneToMany(targetEntity: Cours::class, mappedBy: 'Id_niveau')]
    private Collection $cours;

    /**
     * @var Collection<int, Groupe>
     */
    #[ORM\OneToMany(targetEntity: Groupe::class, mappedBy: 'Id_niveau')]
    private Collection $groupes;

    public function __construct()
    {
        $this->cours = new ArrayCollection();
        $this->groupes = new ArrayCollection();
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getImageCouverture(): ?string
    {
        return $this->image_couverture;
    }

    public function setImageCouverture(string $image_couverture): static
    {
        $this->image_couverture = $image_couverture;

        return $this;
    }

    public function getDifficulte(): ?string
    {
        return $this->difficulte;
    }

    public function setDifficulte(string $difficulte): static
    {
        $this->difficulte = $difficulte;

        return $this;
    }

    public function getOrdre(): ?Number
    {
        return $this->ordre;
    }

    public function setOrdre(Number $ordre): static
    {
        $this->ordre = $ordre;

        return $this;
    }

    public function getSeuilScoreMax(): ?float
    {
        return $this->seuil_score_max;
    }

    public function setSeuilScoreMax(float $seuil_score_max): static
    {
        $this->seuil_score_max = $seuil_score_max;

        return $this;
    }

    public function getSeuilScoreMin(): ?float
    {
        return $this->seuil_score_min;
    }

    public function setSeuilScoreMin(float $seuil_score_min): static
    {
        $this->seuil_score_min = $seuil_score_min;

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

    /**
     * @return Collection<int, Cours>
     */
    public function getCours(): Collection
    {
        return $this->cours;
    }

    public function addCour(Cours $cour): static
    {
        if (!$this->cours->contains($cour)) {
            $this->cours->add($cour);
            $cour->setIdNiveau($this);
        }

        return $this;
    }

    public function removeCour(Cours $cour): static
    {
        if ($this->cours->removeElement($cour)) {
            // set the owning side to null (unless already changed)
            if ($cour->getIdNiveau() === $this) {
                $cour->setIdNiveau(null);
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
            $groupe->setIdNiveau($this);
        }

        return $this;
    }

    public function removeGroupe(Groupe $groupe): static
    {
        if ($this->groupes->removeElement($groupe)) {
            // set the owning side to null (unless already changed)
            if ($groupe->getIdNiveau() === $this) {
                $groupe->setIdNiveau(null);
            }
        }

        return $this;
    }
}
