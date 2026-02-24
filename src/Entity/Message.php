<?php

namespace App\Entity;

use App\Repository\MessageRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MessageRepository::class)]
class Message
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $contenu = null;

    #[ORM\Column(length: 50)]
    private ?string $type_message = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $emoji_react = null;

    #[ORM\Column]
    private ?bool $is_epingle = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTime $date_creation = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTime $date_modif = null;

    #[ORM\Column(length: 50)]
    private ?string $statut_message = null;

    #[ORM\ManyToOne(inversedBy: 'messages')]
    private ?Groupe $Id_groupe = null;

    #[ORM\ManyToOne]
    private ?User $Id_user = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(string $contenu): static
    {
        $this->contenu = $contenu;

        return $this;
    }

    public function getTypeMessage(): ?string
    {
        return $this->type_message;
    }

    public function setTypeMessage(string $type_message): static
    {
        $this->type_message = $type_message;

        return $this;
    }

    public function getEmojiReact(): ?string
    {
        return $this->emoji_react;
    }

    public function setEmojiReact(?string $emoji_react): static
    {
        $this->emoji_react = $emoji_react;

        return $this;
    }

    public function isEpingle(): ?bool
    {
        return $this->is_epingle;
    }

    public function setIsEpingle(bool $is_epingle): static
    {
        $this->is_epingle = $is_epingle;

        return $this;
    }

    public function getDateCreation(): ?\DateTime
    {
        return $this->date_creation;
    }

    public function setDateCreation(\DateTimeInterface $date_creation): static
    {
        $this->date_creation = \DateTime::createFromInterface($date_creation);

        return $this;
    }

    public function getDateModif(): ?\DateTime
    {
        return $this->date_modif;
    }

    public function setDateModif(\DateTimeInterface $date_modif): static
    {
        $this->date_modif = \DateTime::createFromInterface($date_modif);

        return $this;
    }

    public function getStatutMessage(): ?string
    {
        return $this->statut_message;
    }

    public function setStatutMessage(string $statut_message): static
    {
        $this->statut_message = $statut_message;

        return $this;
    }

    public function getIdGroupe(): ?Groupe
    {
        return $this->Id_groupe;
    }

    public function setIdGroupe(?Groupe $Id_groupe): static
    {
        $this->Id_groupe = $Id_groupe;

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
}
