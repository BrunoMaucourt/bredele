<?php

namespace App\Entity;

use App\Repository\ProductRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProductRepository::class)]
class Product
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $product_name = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $product_description = null;

    #[ORM\Column]
    private ?int $product_price = null;

    #[ORM\Column]
    private ?int $product_stock = null;

    #[ORM\Column]
    private ?int $product_categories_ID = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $product_created_at = null;

    #[ORM\Column]
    private ?int $product_discount = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->product_name;
    }

    public function setName(string $name): self
    {
        $this->product_name = $name;

        return $this;
    }

    public function getProductDescription(): ?string
    {
        return $this->product_description;
    }

    public function setProductDescription(string $product_description): self
    {
        $this->product_description = $product_description;

        return $this;
    }

    public function getProductPrice(): ?int
    {
        return $this->product_price;
    }

    public function setProductPrice(int $product_price): self
    {
        $this->product_price = $product_price;

        return $this;
    }

    public function getProductStock(): ?int
    {
        return $this->product_stock;
    }

    public function setProductStock(int $product_stock): self
    {
        $this->product_stock = $product_stock;

        return $this;
    }

    public function getProductCategoriesID(): ?int
    {
        return $this->product_categories_ID;
    }

    public function setProductCategoriesID(int $product_categories_ID): self
    {
        $this->product_categories_ID = $product_categories_ID;

        return $this;
    }

    public function getProductCreatedAt(): ?\DateTimeInterface
    {
        return $this->product_created_at;
    }

    public function setProductCreatedAt(\DateTimeInterface $product_created_at): self
    {
        $this->product_created_at = $product_created_at;

        return $this;
    }

    public function getProductDiscount(): ?int
    {
        return $this->product_discount;
    }

    public function setProductDiscount(int $product_discount): self
    {
        $this->product_discount = $product_discount;

        return $this;
    }
}
