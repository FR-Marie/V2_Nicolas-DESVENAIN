<?php

namespace App\Entity;

use App\Repository\InstrumentsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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

    /**
     * @ORM\OneToMany(targetEntity=Realisations::class, mappedBy="instrument")
     */
    private $realisations;

    public function __construct()
    {
        $this->realisations = new ArrayCollection();
    }

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

    /**
     * @return Collection<int, Realisations>
     */
    public function getRealisations(): Collection
    {
        return $this->realisations;
    }

    public function addRealisation(Realisations $realisation): self
    {
        if (!$this->realisations->contains($realisation)) {
            $this->realisations[] = $realisation;
            $realisation->setInstrument($this);
        }

        return $this;
    }

    public function removeRealisation(Realisations $realisation): self
    {
        if ($this->realisations->removeElement($realisation)) {
            // set the owning side to null (unless already changed)
            if ($realisation->getInstrument() === $this) {
                $realisation->setInstrument(null);
            }
        }

        return $this;
    }
}
