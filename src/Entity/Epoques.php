<?php

namespace App\Entity;

use App\Repository\EpoquesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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

    /**
     * @ORM\OneToMany(targetEntity=Realisations::class, mappedBy="epoque")
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

    public function getEpoque(): ?string
    {
        return $this->epoque;
    }

    public function setEpoque(string $epoque): self
    {
        $this->epoque = $epoque;

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
            $realisation->setEpoque($this);
        }

        return $this;
    }

    public function removeRealisation(Realisations $realisation): self
    {
        if ($this->realisations->removeElement($realisation)) {
            // set the owning side to null (unless already changed)
            if ($realisation->getEpoque() === $this) {
                $realisation->setEpoque(null);
            }
        }

        return $this;
    }

    public function __toString(){
        return $this->epoque;
    }
}
