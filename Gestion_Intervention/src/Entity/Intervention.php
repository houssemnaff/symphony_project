<?php

namespace App\Entity;

use App\Repository\InterventionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: InterventionRepository::class)]
class Intervention
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateinterv = null;

    #[ORM\Column(length: 255)]
    private ?string $codeClt = null;

    #[ORM\Column(length: 255)]
    private ?string $referencepd = null;

    #[ORM\Column(length: 255)]
    private ?string $codetech = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateinterv(): ?\DateTimeInterface
    {
        return $this->dateinterv;
    }

    public function setDateinterv(\DateTimeInterface $dateinterv): static
    {
        $this->dateinterv = $dateinterv;

        return $this;
    }

    public function getCodeClt(): ?string
    {
        return $this->codeClt;
    }

    public function setCodeClt(string $codeClt): static
    {
        $this->codeClt = $codeClt;

        return $this;
    }

    public function getReferencepd(): ?string
    {
        return $this->referencepd;
    }

    public function setReferencepd(string $referencepd): static
    {
        $this->referencepd = $referencepd;

        return $this;
    }

    public function getCodetech(): ?string
    {
        return $this->codetech;
    }

    public function setCodetech(string $codetech): static
    {
        $this->codetech = $codetech;

        return $this;
    }
    
}
