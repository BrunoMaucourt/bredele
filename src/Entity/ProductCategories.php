<?php

namespace App\Entity;

use App\Repository\ProductCategoriesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProductCategoriesRepository::class)]
class ProductCategories
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $categories_name = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCategoriesName(): ?string
    {
        return $this->categories_name;
    }

    public function setCategoriesName(string $categories_name): self
    {
        $this->categories_name = $categories_name;

        return $this;
    }
}
