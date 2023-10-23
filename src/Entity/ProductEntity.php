<?php

namespace App\Entity;

use App\Repository\ProductEntityRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProductEntityRepository::class)]
class ProductEntity
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $type = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $opisanie = null;

    #[ORM\Column]
    private ?int $price = null;

    #[ORM\Column]
    private ?int $kolvo = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function getOpisanie(): ?string
    {
        return $this->opisanie;
    }

    public function setOpisanie(?string $opisanie): static
    {
        $this->opisanie = $opisanie;

        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): static
    {
        $this->price = $price;

        return $this;
    }

    public function getKolvo(): ?int
    {
        return $this->kolvo;
    }

    public function setKolvo(int $kolvo): static
    {
        $this->kolvo = $kolvo;

        return $this;
    }
}
