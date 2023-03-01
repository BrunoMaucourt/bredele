<?php

namespace App\Entity;

use App\Repository\BlogRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BlogRepository::class)]
class Blog
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $article_name = null;

    #[ORM\Column]
    private ?int $article_author_ID = null;

    #[ORM\Column(length: 255)]
    private ?string $article_profil_picture = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $article_content = null;

    #[ORM\Column]
    private ?int $article_categories_ID = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $article_date = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getArticleName(): ?string
    {
        return $this->article_name;
    }

    public function setArticleName(string $article_name): self
    {
        $this->article_name = $article_name;

        return $this;
    }

    public function getArticleAuthorID(): ?int
    {
        return $this->article_author_ID;
    }

    public function setArticleAuthorID(int $article_author_ID): self
    {
        $this->article_author_ID = $article_author_ID;

        return $this;
    }

    public function getArticleProfilPicture(): ?string
    {
        return $this->article_profil_picture;
    }

    public function setArticleProfilPicture(string $article_profil_picture): self
    {
        $this->article_profil_picture = $article_profil_picture;

        return $this;
    }

    public function getArticleContent(): ?string
    {
        return $this->article_content;
    }

    public function setArticleContent(string $article_content): self
    {
        $this->article_content = $article_content;

        return $this;
    }

    public function getArticleCategoriesID(): ?int
    {
        return $this->article_categories_ID;
    }

    public function setArticleCategoriesID(int $article_categories): self
    {
        $this->article_categories_ID = $article_categories;

        return $this;
    }

    public function getArticleDate(): ?\DateTimeInterface
    {
        return $this->article_date;
    }

    public function setArticleDate(\DateTimeInterface $article_date): self
    {
        $this->article_date = $article_date;

        return $this;
    }
}
