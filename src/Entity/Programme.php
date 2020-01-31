<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\ProgrammeRepository")
 */
class Programme
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Intitule;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $AnimerPar;

    /**
     * @ORM\Column(type="time")
     */
    private $Heure;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Salle;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $Explicatif;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIntitule(): ?string
    {
        return $this->Intitule;
    }

    public function setIntitule(string $Intitule): self
    {
        $this->Intitule = $Intitule;

        return $this;
    }

    public function getAnimerPar(): ?string
    {
        return $this->AnimerPar;
    }

    public function setAnimerPar(string $AnimerPar): self
    {
        $this->AnimerPar = $AnimerPar;

        return $this;
    }

    public function getHeure(): ?\DateTimeInterface
    {
        return $this->Heure;
    }

    public function setHeure(\DateTimeInterface $Heure): self
    {
        $this->Heure = $Heure;

        return $this;
    }

    public function getSalle(): ?string
    {
        return $this->Salle;
    }

    public function setSalle(string $Salle): self
    {
        $this->Salle = $Salle;

        return $this;
    }

    public function getExplicatif(): ?string
    {
        return $this->Explicatif;
    }

    public function setExplicatif(?string $Explicatif): self
    {
        $this->Explicatif = $Explicatif;

        return $this;
    }
}
