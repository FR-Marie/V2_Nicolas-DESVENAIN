<?php

namespace App\Entity;

use App\Repository\InstrumentsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=InstrumentsRepository::class)
 */
class Instruments
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
    private $instrument;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getInstrument(): ?string
    {
        return $this->instrument;
    }

    public function setInstrument(string $instrument): self
    {
        $this->instrument = $instrument;

        return $this;
    }
}
