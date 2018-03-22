<?php

declare(strict_types=1);

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity
 * @ORM\Table(name="animals")
 * @UniqueEntity(
 *     fields={"breed", "species"},
 *     message="This animal already exists."
 * )
 */
class Animal implements \JsonSerializable
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", nullable=true)
     * @Assert\NotBlank(message="Animal breed is required.")
     */
    private $breed;

    /**
     * @ORM\Column(type="string", nullable=true)
     * @Assert\NotBlank(message="Animal species is required.")
     */
    private $species;

    public function jsonSerialize(): array
    {
        return [
            'breed' => $this->breed,
            'species' => $this->species,
        ];
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getBreed(): ?string
    {
        return $this->breed;
    }

    public function setBreed(?string $breed)
    {
        $this->breed = $breed;
    }

    public function getSpecies(): ?string
    {
        return $this->species;
    }

    public function setSpecies(?string $species)
    {
        $this->species = $species;
    }
}