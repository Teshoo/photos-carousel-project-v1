<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\GetCollection;
use App\Repository\TripRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TripRepository::class)]
#[ApiResource(
    operations: [
        new Get(),
        new GetCollection(),
    ],
)]
class Trip
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\OneToMany(mappedBy: 'trip', targetEntity: DayTrip::class)]
    private Collection $tripDays;

    public function __construct()
    {
        $this->tripDays = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection<int, DayTrip>
     */
    public function getTripDays(): Collection
    {
        return $this->tripDays;
    }

    public function addTripDay(DayTrip $tripDay): self
    {
        if (!$this->tripDays->contains($tripDay)) {
            $this->tripDays->add($tripDay);
            $tripDay->setTrip($this);
        }

        return $this;
    }

    public function removeTripDay(DayTrip $tripDay): self
    {
        if ($this->tripDays->removeElement($tripDay)) {
            // set the owning side to null (unless already changed)
            if ($tripDay->getTrip() === $this) {
                $tripDay->setTrip(null);
            }
        }

        return $this;
    }
}
