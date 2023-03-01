<?php

namespace App\Entity;

use App\Repository\BlogAuthorRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BlogAuthorRepository::class)]
class BlogAuthor
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $author_name = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAuthorName(): ?string
    {
        return $this->author_name;
    }

    public function setAuthorName(string $author_name): self
    {
        $this->author_name = $author_name;

        return $this;
    }
}
