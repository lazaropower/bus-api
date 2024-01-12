<?php

namespace App\Entity;

use App\Enum\UserRole;
use App\Repository\DiscountRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DiscountRepository::class)]
class Discount
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?UserRole $type = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 5, scale: 2)]
    private ?string $percentage = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): ?UserRole
    {
        return $this->type;
    }

    public function setType(UserRole $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function getPercentage(): ?string
    {
        return $this->percentage;
    }

    public function setPercentage(string $percentage): static
    {
        $this->percentage = $percentage;

        return $this;
    }
}
