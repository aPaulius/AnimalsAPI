<?php

declare(strict_types=1);

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\PersistentCollection;
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
     * @var int
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(type="string", nullable=true)
     * @Assert\NotBlank(message="Animal species is required.")
     */
    private $species;

    /**
     * @var string
     * @ORM\Column(type="string", nullable=true)
     * @Assert\NotBlank(message="Animal breed is required.")
     */
    private $breed;

    /**
     * @var array
     * @ORM\ManyToMany(targetEntity="Program", inversedBy="animals")
     * @ORM\JoinTable(name="animal_programs")
     */
    private $programs;

    public function __construct()
    {
        $this->programs = new ArrayCollection();
    }

    public function programsToArray()
    {
        $programsArray = [];

        foreach ($this->programs as $program) {
            $programsArray[] = [
                'id' => $program->getId()
            ];
        }

        $this->programs = $programsArray;
    }

    public function addPrograms(array $programs)
    {
        $this->programs = $programs;
    }

    public function jsonSerialize(): array
    {
        return [
            'id' => $this->id,
            'breed' => $this->breed,
            'species' => $this->species,
            'programs' => $this->programs->toArray(),
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

    public function getPrograms()
    {
        return $this->programs;
    }

    public function addProgram(Program $program)
    {
        $this->programs->add($program);
    }

    public function removePrograms()
    {
        $this->programs = new ArrayCollection();
    }
}