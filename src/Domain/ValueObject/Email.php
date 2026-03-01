<?php

namespace App\Domain\ValueObject;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Embeddable]
readonly class Email
{
    #[ORM\Column(length: 255)]
    public string $address;

    public function __construct(string $address)
    {
        if (!filter_var($address, FILTER_VALIDATE_EMAIL)) {
            throw new \InvalidArgumentException("Invalid email address: '{$address}'");
        }
        $this->address = $address;
    }

    public function toString(): string
    {
        return $this->address;
    }

    public function equals(Email $other): bool
    {
        return strtolower($this->address) === strtolower($other->address);
    }

    public function __toString(): string
    {
        return $this->address;
    }
}
