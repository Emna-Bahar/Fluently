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

    #[ORM\Column]
    private int $groupeId = 0;

    #[ORM\Column(nullable: true)]
    private ?int $userId = null;

    /** Snapshot of the user display name at the time of the action */
    #[ORM\Column(length: 255)]
    private string $userName = '';

    /** Content before the edit/delete */
    #[ORM\Column(type: 'text')]
    private string $originalContent = '';

    /** New content (only filled for edits) */
    #[ORM\Column(type: 'text', nullable: true)]
    private ?string $newContent = null;

    #[ORM\Column(type: 'datetime')]
    private \DateTime $createdAt;

    public function __construct()
    {
        $this->createdAt = new \DateTime();
    }

    public function getId(): ?int { return $this->id; }

    public function getAction(): string { return $this->action; }
    public function setAction(string $action): static { $this->action = $action; return $this; }

    public function getMessageId(): ?int { return $this->messageId; }
    public function setMessageId(?int $messageId): static { $this->messageId = $messageId; return $this; }

    public function getGroupeId(): int { return $this->groupeId; }
    public function setGroupeId(int $groupeId): static { $this->groupeId = $groupeId; return $this; }

    public function getUserId(): ?int { return $this->userId; }
    public function setUserId(?int $userId): static { $this->userId = $userId; return $this; }

    public function getUserName(): string { return $this->userName; }
    public function setUserName(string $userName): static { $this->userName = $userName; return $this; }

    public function getOriginalContent(): string { return $this->originalContent; }
    public function setOriginalContent(string $originalContent): static { $this->originalContent = $originalContent; return $this; }

    public function getNewContent(): ?string { return $this->newContent; }
    public function setNewContent(?string $newContent): static { $this->newContent = $newContent; return $this; }

    public function getCreatedAt(): \DateTime { return $this->createdAt; }
}
