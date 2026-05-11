<?php

namespace App\Entity;

use App\Repository\MessageLogRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MessageLogRepository::class)]
#[ORM\Table(name: 'message_log')]
class MessageLog
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    /** 'edited' or 'deleted' */
    #[ORM\Column(length: 20)]
    private string $action = '';

    /** Original message ID (nullable: deleted messages no longer exist) */
    #[ORM\Column(nullable: true)]
    private ?int $messageId = null;

    /** Relation to Message (nullable if message was deleted) */
    #[ORM\ManyToOne]
    #[ORM\JoinColumn(name: 'message_id', referencedColumnName: 'id', nullable: true, onDelete: 'SET NULL')]
    private ?Message $message = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Groupe $groupe = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: true)]
    private ?User $user = null;

    /** Snapshot of the user display name at the time of the action */
    #[ORM\Column(length: 255)]
    private string $userName = '';

    /** Content before the edit/delete */
    #[ORM\Column(type: 'text')]
    private string $originalContent = '';

    /** New content (only filled for edits) */
    #[ORM\Column(type: 'text', nullable: true)]
    private ?string $newContent = null;

    #[ORM\Column(type: 'datetime_immutable')]
    private \DateTimeImmutable $createdAt;

    #[ORM\Column(type: 'datetime_immutable', nullable: true)]
    private ?\DateTimeImmutable $updatedAt = null;

    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(name: 'created_by_id', referencedColumnName: 'id', nullable: false, onDelete: 'CASCADE')]
    private User $createdBy;

    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(name: 'updated_by_id', referencedColumnName: 'id', nullable: true, onDelete: 'SET NULL')]
    private ?User $updatedBy = null;

    public function __construct()
    {
        $this->createdAt = new \DateTimeImmutable();
    }

    public function getId(): ?int { return $this->id; }

    public function getAction(): string { return $this->action; }
    public function setAction(string $action): static { $this->action = $action; return $this; }

    public function getMessageId(): ?int { return $this->messageId; }
    public function setMessageId(?int $messageId): static { $this->messageId = $messageId; return $this; }

    public function getMessage(): ?Message { return $this->message; }
    public function setMessage(?Message $message): static { $this->message = $message; return $this; }

    public function getGroupe(): ?Groupe { return $this->groupe; }
    public function setGroupe(?Groupe $groupe): static { $this->groupe = $groupe; return $this; }

    public function getUser(): ?User { return $this->user; }
    public function setUser(?User $user): static { $this->user = $user; return $this; }

    public function getUserName(): string { return $this->userName; }
    public function setUserName(string $userName): static { $this->userName = $userName; return $this; }

    public function getOriginalContent(): string { return $this->originalContent; }
    public function setOriginalContent(string $originalContent): static { $this->originalContent = $originalContent; return $this; }

    public function getNewContent(): ?string { return $this->newContent; }
    public function setNewContent(?string $newContent): static { $this->newContent = $newContent; return $this; }

    public function getCreatedAt(): \DateTimeImmutable { return $this->createdAt; }

    public function getUpdatedAt(): ?\DateTimeImmutable { return $this->updatedAt; }
    public function setUpdatedAt(?\DateTimeImmutable $updatedAt): static { $this->updatedAt = $updatedAt; return $this; }

    public function getCreatedBy(): User { return $this->createdBy; }
    public function setCreatedBy(User $createdBy): static { $this->createdBy = $createdBy; return $this; }

    public function getUpdatedBy(): ?User { return $this->updatedBy; }
    public function setUpdatedBy(?User $updatedBy): static { $this->updatedBy = $updatedBy; return $this; }
}
