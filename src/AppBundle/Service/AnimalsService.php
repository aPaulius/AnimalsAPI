<?php

declare(strict_types=1);

namespace AppBundle\Service;

use AppBundle\Entity\Animal;
use AppBundle\Entity\Program;
use AppBundle\Exception\AnimalAlreadyExists;
use AppBundle\Exception\AnimalNotFound;
use AppBundle\Exception\ValidationError;
use Doctrine\ORM\EntityManager;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ConnectException;
use Symfony\Component\Validator\Validator\TraceableValidator;

class AnimalsService
{
    private $validator;
    private $em;
    private $tvProgramsApi;

    public function __construct(
        TraceableValidator $validator,
        EntityManager $em,
        Client $tvProgramsApi
    ) {
        $this->validator = $validator;
        $this->em = $em;
        $this->tvProgramsApi = $tvProgramsApi;
    }

    /**
     * Create new animal
     *
     * @param string $species
     * @param string $breed
     * @return mixed \AppBundle\Entity\Animal
     * @throws \AppBundle\Exception\AnimalAlreadyExists
     * @throws \AppBundle\Exception\ValidationError
     */
    public function createAnimal($species = null, $breed = null): Animal {
        if (!$species || !$breed) {
            throw new ValidationError('SOAP-ENV:Client', 'Breed and species are quired.');
        }

        $animal = new Animal();
        $animal->setSpecies($species);
        $animal->setBreed($breed);

        $errors = $this->validator->validate($animal);

        if (count($errors) > 0) {
            throw new AnimalAlreadyExists('SOAP-ENV:Client', 'This animal already exists.');
        }

        $this->em->persist($animal);
        $this->em->flush();

        $animal->programsToArray();

        return $animal;
    }

    /**
     * Update animal
     *
     * @param string $id
     * @param string $species
     * @param string $breed
     * @param bool $embedded
     * @return mixed \AppBundle\Entity\Animal
     * @throws \AppBundle\Exception\ValidationError
     * @throws \AppBundle\Exception\AnimalNotFound
     */
    public function updateAnimal($id = null, $species = null, $breed = null, $embedded = false): Animal
    {
        if (!is_string($id) || !$id || !is_string($species) || !$species || !is_string($breed) || !$breed) {
            throw new ValidationError('SOAP-ENV:Client', 'Id, species and breed are required.');
        }

        $animal = $this->em->getRepository(Animal::class)->find($id);

        if (!$animal) throw new AnimalNotFound('SOAP-ENV:Client', 'Animal not found.');

        $animal->setSpecies($species);
        $animal->setBreed($breed);

        $errors = $this->validator->validate($animal);

        if (count($errors) > 0) throw new AnimalAlreadyExists('SOAP-ENV:Client', 'This animal already exists.');

        $this->em->flush();

        $animal->programsToArray();

        if ($embedded) {
            $animal = $this->getEmbeddedAnimal($animal);
        }

        return $animal;
    }

    /**
     * Update animal species
     *
     * @param string $id
     * @param string $species
     * @param bool $embedded
     * @return mixed \AppBundle\Entity\Animal
     * @throws \AppBundle\Exception\ValidationError
     * @throws \AppBundle\Exception\AnimalNotFound
     */
    public function updateAnimalSpecies($id = null, $species = null, $embedded = false): Animal
    {
        if (!is_string($id) || !$id || !is_string($species) || !$species) {
            throw new ValidationError('SOAP-ENV:Client', 'Id and species are required.');
        }

        $animal = $this->em->getRepository(Animal::class)->find($id);

        if (!$animal) throw new AnimalNotFound('SOAP-ENV:Client', 'Animal not found.');

        $animal->setSpecies($species);

        $errors = $this->validator->validate($animal);

        if (count($errors) > 0) throw new AnimalAlreadyExists('SOAP-ENV:Client', 'This animal already exists.');

        $this->em->flush();

        $animal->programsToArray();

        if ($embedded) {
            $animal = $this->getEmbeddedAnimal($animal);
        }

        return $animal;
    }

    /**
     * Update animal breed
     *
     * @param string $id
     * @param string $breed
     * @param bool $embedded
     * @return mixed \AppBundle\Entity\Animal
     * @throws \AppBundle\Exception\ValidationError
     * @throws \AppBundle\Exception\AnimalNotFound
     */
    public function updateAnimalBreed($id = null, $breed = null, $embedded = false): Animal
    {
        if (!is_string($id) || !$id || !is_string($breed) || !$breed) {
            throw new ValidationError('SOAP-ENV:Client', 'Id and breed are required.');
        }

        $animal = $this->em->getRepository(Animal::class)->find($id);

        if (!$animal) throw new AnimalNotFound('SOAP-ENV:Client', 'Animal not found.');

        $animal->setBreed($breed);

        $errors = $this->validator->validate($animal);

        if (count($errors) > 0) throw new AnimalAlreadyExists('SOAP-ENV:Client', 'This animal already exists.');

        $this->em->flush();

        $animal->programsToArray();

        if ($embedded) {
            $animal = $this->getEmbeddedAnimal($animal);
        }

        return $animal;
    }

    /**
     * Show animals
     *
     * @param bool $embedded
     * @return array
     */
    public function showAnimals($embedded = false): array {
        $animals = $this->em->getRepository(Animal::class)->findAll();

        foreach ($animals as $animal) {
            $animal->programsToArray();

            if ($embedded) {
                $this->getEmbeddedAnimal($animal);
            }
        }

        return $animals;
    }

    /**
     * Show animals
     *
     * @param string $id
     * @param bool $embedded
     * @return mixed \AppBundle\Entity\Animal
     * @throws \AppBundle\Exception\AnimalNotFound
     * @throws \AppBundle\Exception\ValidationError
     */
    public function showAnimal($id = null, $embedded = false): Animal
    {
        if (!is_string($id) || !$id) throw new ValidationError('SOAP-ENV:Client', 'Id is required.');

        $animal = $this->em->getRepository(Animal::class)->find($id);

        if (!$animal) throw new AnimalNotFound('SOAP-ENV:Client', 'Animal not found.');

        $animal->programsToArray();

        if ($embedded) {
            $animal = $this->getEmbeddedAnimal($animal);
        }

        return $animal;
    }

    /**
     * Delete animal
     * @param string $id
     * @return string
     * @throws \AppBundle\Exception\AnimalNotFound
     * @throws \AppBundle\Exception\ValidationError
     */
    public function deleteAnimal($id = null): string
    {
        if (!$id) throw new ValidationError('SOAP-ENV:Client', 'Id is required.');

        $animal = $this->em->getRepository(Animal::class)->find($id);

        if (!$animal) throw new AnimalNotFound('SOAP-ENV:Client', 'Animal not found.');

        $this->em->remove($animal);
        $this->em->flush();

        return 'Animal deleted.';
    }

        /**
         * Assign program to animal
         * @param string $id
         * @param string $title
         * @param string $television
         * @param string $startTime
         * @param array $info
         * @param bool $embedded
         * @return mixed \AppBundle\Entity\Animal
         * @throws \AppBundle\Exception\AnimalNotFound
         * @throws \AppBundle\Exception\ValidationError
         */
        public function assignProgramToAnimal(
            $id = null,
            $title = null,
            $television = null,
            $startTime = null,
            $info = null,
            $embedded = false
        ): Animal {
            if (
                !is_string($id) || !$id ||
                !is_string($title) || !$title ||
                !is_string($television) || !$television ||
                !is_string($startTime) || !$startTime ||
                !is_array($info) || !$info
            ) {
                throw new ValidationError(
                    'SOAP-ENV:Client',
                    'Id, title, television, start time and info are required.');
            }

            $animal = $this->em->getRepository(Animal::class)->find($id);

            if (!$animal) throw new AnimalNotFound('SOAP-ENV:Client', 'Animal not found.');

            $tvProgram = [
                'title' => $title,
                'television' => $television,
                'start_time' => $startTime,
            ];

            foreach ($info as $data) {
                if ($data->key == 'description') $tvProgram['description'] = $data->value;

                if ($data->key == 'legalAge') $tvProgram['legal_age'] = $data->value;

                if ($data->key == 'releaseYear') $tvProgram['release_year'] = $data->value;

                if ($data->key == 'type') $tvProgram['description'] = $data->value;
            }

            $response = $this->tvProgramsApi->post('tv_programs', ['body' => json_encode($tvProgram)]);

            $tvProgramId = (int) explode('/', $response->getHeader('Location')[0])[4];

            $program = new Program($tvProgramId);

            $animal->addProgram($program);

            $this->em->persist($program);
            $this->em->flush();

            $animal->programsToArray();

            if ($embedded) {
                $animal = $this->getEmbeddedAnimal($animal);
            }

            return $animal;
        }

    /**
     * Update animal programs
     *
     * @param string $id
     * @param array $programIds
     * @param bool $embedded
     * @return mixed \AppBundle\Entity\Animal
     * @throws \AppBundle\Exception\AnimalNotFound
     */
    public function updateAnimalPrograms(
        $id = null,
        $programIds = null,
        $embedded = false
    ): Animal {
        if (!is_string($id) || !$id || !is_array($programIds) || count($programIds) == 0) {
            throw new ValidationError('SOAP-ENV:Client', 'Id and programs ids are required.');
        }

        $animal = $this->em->getRepository(Animal::class)->find($id);

        if (!$animal) throw new AnimalNotFound('SOAP-ENV:Client', 'Animal not found.');

        $animal->removePrograms();

        $programIds = $this->getProgramIds($programIds);

        foreach ($programIds as $programId) {
            $program = $this->em->getRepository(Program::class)->find($programId);
            if (!$program) {
                $program = new Program($programId);
                $this->em->persist($program);
            }

            $animal->addProgram($program);
        }

        $this->em->flush();

        $animal->programsToArray();

        if ($embedded) {
            $animal = $this->getEmbeddedAnimal($animal);
        }

        return $animal;
    }

    private function getProgramIds(array $programIds): array
    {
        $programs = [];

        try {
            $this->tvProgramsApi->get('tv_programs');
        } catch (ConnectException $e) {
            return $programs;
        }

        foreach ($programIds as $programId) {
            $programs[] = $this->getProgram($programId)->id;
        }

        return $programs;
    }

    private function getProgram($id)
    {
        try {
            $response = $this->tvProgramsApi->get('tv_programs/'.$id);
        } catch (\Exception $e) {
            throw new AnimalNotFound('SOAP-ENV:Client', 'Animal not found with id: ' . $id . '.');
        }

        return json_decode($response->getBody()->getContents());
    }

    private function getEmbeddedAnimal(Animal $animal): Animal
    {
        $programs = [];

        try {
            $this->tvProgramsApi->get('tv_programs');
        } catch (ConnectException $e) {
            return $animal;
        }

        foreach ($animal->getPrograms() as $program) {
            $programs[] = $this->getProgram($program['id']);
        }

        $animal->addPrograms($programs);

        return $animal;
    }
}