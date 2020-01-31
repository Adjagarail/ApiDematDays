<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ApiResource()
 * @Vich\Uploadable
 * @ORM\Entity(repositoryClass="App\Repository\SponsorsRepository")
 */
class Sponsors
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
    private $NomSponsor;

    /**
     * @ORM\Column(type="string", length=255)
     * @var string
     */
    private $Logo;

    /**
     * @Vich\UploadableField(mapping="sponsor_images", fileNameProperty="Logo")
     * @var File
     */
    private $imageFile;

    /**
     * @ORM\Column(type="datetime")
     * @var \DateTime
     */
    private $updatedAt;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomSponsor(): ?string
    {
        return $this->NomSponsor;
    }

    public function setNomSponsor(string $NomSponsor): self
    {
        $this->NomSponsor = $NomSponsor;

        return $this;
    }

    public function setImageFile(File $Logo = null)
    {
        $this->imageFile = $Logo;

        // VERY IMPORTANT:
        // It is required that at least one field changes if you are using Doctrine,
        // otherwise the event listeners won't be called and the file is lost
        if ($Logo) {
            // if 'updatedAt' is not defined in your entity, use another property
            $this->updatedAt = new \DateTime('now');
        }
    }

    public function getImageFile()
    {
        return $this->imageFile;
    }

    public function getLogo(): ?string
    {
        return $this->Logo;
    }

    public function setLogo(string $Logo): self
    {
        $this->Logo = $Logo;

        return $this;
    }
}
