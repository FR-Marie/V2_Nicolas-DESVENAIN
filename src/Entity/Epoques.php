<?php

namespace App\Entity;

use App\Repository\EpoquesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EpoquesRepository::class)
 */
class Epoques
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
    private $epoque;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEpoque(): ?string
    {
        return $this->epoque;
    }

    public function setEpoque(string $epoque): self
    {
        $this->epoque = $epoque;

        return $this;
    }
}
