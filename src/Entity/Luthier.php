<?php

namespace App\Entity;

use App\Repository\LuthierRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LuthierRepository::class)
 */
class Luthier
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
    private $titre_page;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image_slide1;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image_slide2;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image_slide3;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $image_slide4;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $image_slide5;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $titre_introduction;

    /**
     * @ORM\Column(type="text")
     */
    private $introduction;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $titre_texte1;

    /**
     * @ORM\Column(type="text")
     */
    private $texte1;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $titre_texte2;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $texte2;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $titre_texte3;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $texte3;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitrePage(): ?string
    {
        return $this->titre_page;
    }

    public function setTitrePage(string $titre_page): self
    {
        $this->titre_page = $titre_page;

        return $this;
    }

    public function getImageSlide1(): ?string
    {
        return $this->image_slide1;
    }

    public function setImageSlide1(string $image_slide1): self
    {
        $this->image_slide1 = $image_slide1;

        return $this;
    }

    public function getImageSlide2(): ?string
    {
        return $this->image_slide2;
    }

    public function setImageSlide2(string $image_slide2): self
    {
        $this->image_slide2 = $image_slide2;

        return $this;
    }

    public function getImageSlide3(): ?string
    {
        return $this->image_slide3;
    }

    public function setImageSlide3(?string $image_slide3): self
    {
        $this->image_slide3 = $image_slide3;

        return $this;
    }

    public function getImageSlide4(): ?string
    {
        return $this->image_slide4;
    }

    public function setImageSlide4(?string $image_slide4): self
    {
        $this->image_slide4 = $image_slide4;

        return $this;
    }

    public function getImageSlide5(): ?string
    {
        return $this->image_slide5;
    }

    public function setImageSlide5(?string $image_slide5): self
    {
        $this->image_slide5 = $image_slide5;

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

    public function getTitreTexte1(): ?string
    {
        return $this->titre_texte1;
    }

    public function setTitreTexte1(string $titre_texte1): self
    {
        $this->titre_texte1 = $titre_texte1;

        return $this;
    }

    public function getTexte1(): ?string
    {
        return $this->texte1;
    }

    public function setTexte1(string $texte1): self
    {
        $this->texte1 = $texte1;

        return $this;
    }

    public function getTitreTexte2(): ?string
    {
        return $this->titre_texte2;
    }

    public function setTitreTexte2(?string $titre_texte2): self
    {
        $this->titre_texte2 = $titre_texte2;

        return $this;
    }

    public function getTexte2(): ?string
    {
        return $this->texte2;
    }

    public function setTexte2(?string $texte2): self
    {
        $this->texte2 = $texte2;

        return $this;
    }

    public function getTitreTexte3(): ?string
    {
        return $this->titre_texte3;
    }

    public function setTitreTexte3(?string $titre_texte3): self
    {
        $this->titre_texte3 = $titre_texte3;

        return $this;
    }

    public function getTexte3(): ?string
    {
        return $this->texte3;
    }

    public function setTexte3(?string $texte3): self
    {
        $this->texte3 = $texte3;

        return $this;
    }
}
