<?php

namespace App\Entity;

use App\Repository\RealisationsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RealisationsRepository::class)
 */
class Realisations
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
     * @ORM\Column(type="string", length=50)
     */
    private $titre_realisation;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image_realisation;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $resume_realisation;

    /**
     * @ORM\Column(type="text")
     */
    private $description_realisation1;

    /**
     * @ORM\Column(type="text")
     */
    private $description_realisation2;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $annexe_realisation1;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $annexe_realisation2;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $annexe_realisation3;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $annexe_realisation4;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $annexe_realisation5;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $video_realisation;


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

    public function getTitreRealisation(): ?string
    {
        return $this->titre_realisation;
    }

    public function setTitreRealisation(string $titre_realisation): self
    {
        $this->titre_realisation = $titre_realisation;

        return $this;
    }

    public function getImageRealisation(): ?string
    {
        return $this->image_realisation;
    }

    public function setImageRealisation(string $image_realisation): self
    {
        $this->image_realisation = $image_realisation;

        return $this;
    }

    public function getResumeRealisation(): ?string
    {
        return $this->resume_realisation;
    }

    public function setResumeRealisation(string $resume_realisation): self
    {
        $this->resume_realisation = $resume_realisation;

        return $this;
    }

    public function getDescriptionRealisation1(): ?string
    {
        return $this->description_realisation1;
    }

    public function setDescriptionRealisation1(string $description_realisation1): self
    {
        $this->description_realisation1 = $description_realisation1;

        return $this;
    }

    public function getDescriptionRealisation2(): ?string
    {
        return $this->description_realisation2;
    }

    public function setDescriptionRealisation2(string $description_realisation2): self
    {
        $this->description_realisation2 = $description_realisation2;

        return $this;
    }

    public function getAnnexeRealisation1(): ?string
    {
        return $this->annexe_realisation1;
    }

    public function setAnnexeRealisation1(string $annexe_realisation1): self
    {
        $this->annexe_realisation1 = $annexe_realisation1;

        return $this;
    }

    public function getAnnexeRealisation2(): ?string
    {
        return $this->annexe_realisation2;
    }

    public function setAnnexeRealisation2(string $annexe_realisation2): self
    {
        $this->annexe_realisation2 = $annexe_realisation2;

        return $this;
    }

    public function getAnnexeRealisation3(): ?string
    {
        return $this->annexe_realisation3;
    }

    public function setAnnexeRealisation3(string $annexe_realisation3): self
    {
        $this->annexe_realisation3 = $annexe_realisation3;

        return $this;
    }

    public function getAnnexeRealisation4(): ?string
    {
        return $this->annexe_realisation4;
    }

    public function setAnnexeRealisation4(string $annexe_realisation4): self
    {
        $this->annexe_realisation4 = $annexe_realisation4;

        return $this;
    }

    public function getAnnexeRealisation5(): ?string
    {
        return $this->annexe_realisation5;
    }

    public function setAnnexeRealisation5(string $annexe_realisation5): self
    {
        $this->annexe_realisation5 = $annexe_realisation5;

        return $this;
    }

    public function getVideoRealisation(): ?string
    {
        return $this->video_realisation;
    }

    public function setVideoRealisation(?string $video_realisation): self
    {
        $this->video_realisation = $video_realisation;

        return $this;
    }

}
