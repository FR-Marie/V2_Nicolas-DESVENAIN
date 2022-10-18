<?php

namespace App\Entity;

use App\Repository\VideosRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=VideosRepository::class)
 */
class Videos
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
    private $titre_video;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description_video;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $chemin_video;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitreVideo(): ?string
    {
        return $this->titre_video;
    }

    public function setTitreVideo(?string $titre_video): self
    {
        $this->titre_video = $titre_video;

        return $this;
    }

    public function getDescriptionVideo(): ?string
    {
        return $this->description_video;
    }

    public function setDescriptionVideo(?string $description_video): self
    {
        $this->description_video = $description_video;

        return $this;
    }

    public function getCheminVideo(): ?string
    {
        return $this->chemin_video;
    }

    public function setCheminVideo(?string $chemin_video): self
    {
        $this->chemin_video = $chemin_video;

        return $this;
    }
}
