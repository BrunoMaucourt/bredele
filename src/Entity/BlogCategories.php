<?php

namespace App\Entity;

use App\Repository\BlogCategoriesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BlogCategoriesRepository::class)]
class BlogCategories
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $article_categories = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getArticleCategories(): ?string
    {
        return $this->article_categories;
    }

    public function setArticleCategories(string $article_categories): self
    {
        $this->article_categories = $article_categories;

        return $this;
    }
}
