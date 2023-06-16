<?php

namespace App\Entity;

use App\Repository\NewsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


#[ORM\Entity(repositoryClass: NewsRepository::class)]
class News
{

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;


    #[ORM\Column(type: 'string', length: 255)]
    private $name;

    #[ORM\Column(type: 'datetime', options:["default", "CURRENT_TIMESTAMP"])]
    private $dateLoad;

    #[ORM\Column(type: 'text')]
    private $description;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $viewsNum;

    #[ORM\Column(type: 'text')]
    private $content;

    #[ORM\Column(type: 'string', length: 255)]
    private $fotopath;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDateLoad(): ?\DateTimeInterface
    {
        return $this->dateLoad;
    }

    public function setDateLoad(\DateTimeInterface $dateLoad): self
    {
        $this->dateLoad = $dateLoad;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getViewsNum(): ?int
    {
        return $this->viewsNum;
    }

    public function setViewsNum(?int $viewsNum): self
    {
        $this->viewsNum = $viewsNum;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getFotopath(): ?string
    {
        return $this->fotopath;
    }

    public function setFotopath(string $fotopath): self
    {
        $this->fotopath = $fotopath;

        return $this;
    }
}
