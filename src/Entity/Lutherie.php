<?php

namespace App\Entity;

use App\Repository\LutherieRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LutherieRepository::class)
 */
class Lutherie
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $titre_site;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $titre_introduction;

    /**
     * @ORM\Column(type="text")
     */
    private $introduction;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image_description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image_galerie;

    /**
     * @ORM\Column(type="text")
     */
    private $description1;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description2;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $galerie1;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $galerie2;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $galerie3;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $galerie4;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $galerie5;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $galerie6;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $galerie7;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $galerie8;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $galerie9;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $galerie10;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $galerie11;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $galerie12;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $galerie13;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $galerie14;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $galerie15;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitreSite(): ?string
    {
        return $this->titre_site;
    }

    public function setTitreSite(string $titre_site): self
    {
        $this->titre_site = $titre_site;

        return $this;
    }

    public function getTitreIntroduction(): ?string
    {
        return $this->titre_introduction;
    }

    public function setTitreIntroduction(string $titre_introduction): self
    {
        $this->titre_introduction = $titre_introduction;

        return $this;
    }

    public function getIntroduction(): ?string
    {
        return $this->introduction;
    }

    public function setIntroduction(string $introduction): self
    {
        $this->introduction = $introduction;

        return $this;
    }

    public function getImageDescription(): ?string
    {
        return $this->image_description;
    }

    public function setImageDescription(string $image_description): self
    {
        $this->image_description = $image_description;

        return $this;
    }

    public function getImageGalerie(): ?string
    {
        return $this->image_galerie;
    }

    public function setImageGalerie(string $image_galerie): self
    {
        $this->image_galerie = $image_galerie;

        return $this;
    }

    public function getDescription1(): ?string
    {
        return $this->description1;
    }

    public function setDescription1(string $description1): self
    {
        $this->description1 = $description1;

        return $this;
    }

    public function getDescription2(): ?string
    {
        return $this->description2;
    }

    public function setDescription2(string $description2): self
    {
        $this->description2 = $description2;

        return $this;
    }

    public function getGalerie1(): ?string
    {
        return $this->galerie1;
    }

    public function setGalerie1(string $galerie1): self
    {
        $this->galerie1 = $galerie1;

        return $this;
    }

    public function getGalerie2(): ?string
    {
        return $this->galerie2;
    }

    public function setGalerie2(string $galerie2): self
    {
        $this->galerie2 = $galerie2;

        return $this;
    }

    public function getGalerie3(): ?string
    {
        return $this->galerie3;
    }

    public function setGalerie3(string $galerie3): self
    {
        $this->galerie3 = $galerie3;

        return $this;
    }

    public function getGalerie4(): ?string
    {
        return $this->galerie4;
    }

    public function setGalerie4(string $galerie4): self
    {
        $this->galerie4 = $galerie4;

        return $this;
    }

    public function getGalerie5(): ?string
    {
        return $this->galerie5;
    }

    public function setGalerie5(string $galerie5): self
    {
        $this->galerie5 = $galerie5;

        return $this;
    }

    public function getGalerie6(): ?string
    {
        return $this->galerie6;
    }

    public function setGalerie6(string $galerie6): self
    {
        $this->galerie6 = $galerie6;

        return $this;
    }

    public function getGalerie7(): ?string
    {
        return $this->galerie7;
    }

    public function setGalerie7(string $galerie7): self
    {
        $this->galerie7 = $galerie7;

        return $this;
    }

    public function getGalerie8(): ?string
    {
        return $this->galerie8;
    }

    public function setGalerie8(string $galerie8): self
    {
        $this->galerie8 = $galerie8;

        return $this;
    }

    public function getGalerie9(): ?string
    {
        return $this->galerie9;
    }

    public function setGalerie9(string $galerie9): self
    {
        $this->galerie9 = $galerie9;

        return $this;
    }

    public function getGalerie10(): ?string
    {
        return $this->galerie10;
    }

    public function setGalerie10(string $galerie10): self
    {
        $this->galerie10 = $galerie10;

        return $this;
    }

    public function getGalerie11(): ?string
    {
        return $this->galerie11;
    }

    public function setGalerie11(string $galerie11): self
    {
        $this->galerie11 = $galerie11;

        return $this;
    }

    public function getGalerie12(): ?string
    {
        return $this->galerie12;
    }

    public function setGalerie12(string $galerie12): self
    {
        $this->galerie12 = $galerie12;

        return $this;
    }

    public function getGalerie13(): ?string
    {
        return $this->galerie13;
    }

    public function setGalerie13(string $galerie13): self
    {
        $this->galerie13 = $galerie13;

        return $this;
    }

    public function getGalerie14(): ?string
    {
        return $this->galerie14;
    }

    public function setGalerie14(string $galerie14): self
    {
        $this->galerie14 = $galerie14;

        return $this;
    }

    public function getGalerie15(): ?string
    {
        return $this->galerie15;
    }

    public function setGalerie15(string $galerie15): self
    {
        $this->galerie15 = $galerie15;

        return $this;
    }
}
