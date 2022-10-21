<?php

namespace App\Entity;

use App\Repository\ActualitesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ActualitesRepository::class)
 */
class Actualites
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date_actualite;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $titre_actualite;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $image_actualite;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lien_actualite;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $resume_actualite;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateActualite(): ?\DateTimeInterface
    {
        return $this->date_actualite;
    }

    public function setDateActualite(\DateTimeInterface $date_actualite): self
    {
        $this->date_actualite = $date_actualite;

        return $this;
    }

    public function getTitreActualite(): ?string
    {
        return $this->titre_actualite;
    }

    public function setTitreActualite(string $titre_actualite): self
    {
        $this->titre_actualite = $titre_actualite;

        return $this;
    }

    public function getImageActualite(): ?string
    {
        return $this->image_actualite;
    }

    public function setImageActualite(string $image_actualite): self
    {
        $this->image_actualite = $image_actualite;

        return $this;
    }

    public function getLienActualite(): ?string
    {
        return $this->lien_actualite;
    }

    public function setLienActualite(string $lien_actualite): self
    {
        $this->lien_actualite = $lien_actualite;

        return $this;
    }

    public function getResumeActualite(): ?string
    {
        return $this->resume_actualite;
    }

    public function setResumeActualite(string $resume_actualite): self
    {
        $this->resume_actualite = $resume_actualite;

        return $this;
    }
}
