<?php

namespace App\Entity;

use App\Repository\ProjetsEnCoursRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProjetsEnCoursRepository::class)
 */
class ProjetsEnCours
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $titre_projet;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $image_projet;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $resume_projet;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitreProjet(): ?string
    {
        return $this->titre_projet;
    }

    public function setTitreProjet(?string $titre_projet): self
    {
        $this->titre_projet = $titre_projet;

        return $this;
    }

    public function getImageProjet(): ?string
    {
        return $this->image_projet;
    }

    public function setImageProjet(?string $image_projet): self
    {
        $this->image_projet = $image_projet;

        return $this;
    }

    public function getResumeProjet(): ?string
    {
        return $this->resume_projet;
    }

    public function setResumeProjet(?string $resume_projet): self
    {
        $this->resume_projet = $resume_projet;

        return $this;
    }
}
