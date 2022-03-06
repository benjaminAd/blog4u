<?php

namespace App\Entity;

use App\Repository\ReactionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReactionRepository::class)]
class Reaction
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $libelle;

    #[ORM\ManyToOne(targetEntity: UserReaction::class, inversedBy: 'reaction')]
    #[ORM\JoinColumn(nullable: false)]
    private $no;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getNo(): ?UserReaction
    {
        return $this->no;
    }

    public function setNo(?UserReaction $no): self
    {
        $this->no = $no;

        return $this;
    }
}
