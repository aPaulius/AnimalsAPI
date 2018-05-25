<?php

declare(strict_types=1);

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="programs")
 */
class Program implements \JsonSerializable
{
    /**
     * @var int
     * @ORM\Column(type="integer")
     * @ORM\Id
     */
    private $id;

    /**
     * @ORM\ManyToMany(targetEntity="Animal", mappedBy="programs", cascade={"persist"})
     */
    private $animals;

    public function __construct(int $id)
    {
        $this->id = $id;
        $this->animals = new ArrayCollection();
    }

    public function jsonSerialize()
    {
        return [
            'id' => $this->id,
        ];
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getAnimals(): Collection
    {
        return $this->animals;
    }

    public function addAnimal(Animal $animal)
    {
        $this->animals->add($animal);
    }
}