<?php

declare(strict_types=1);

namespace AppBundle\Controller;

use AppBundle\Entity\Animal;
use AppBundle\Entity\Program;
use AppBundle\Model\ApiProblem;
use AppBundle\Model\ApiProblemException;
use Doctrine\Common\Collections\Collection;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Validator\ConstraintViolationListInterface;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;

class AnimalController extends Controller
{
    /**
     * @Route("/animals")
     * @Method("POST")
     * @ApiDoc(
     *     description="Create new animal",
     *     parameters={
     *         {"name"="species", "dataType"="string", "required"=true, "description"="animal species, e.g., cat"},
     *         {"name"="breed", "dataType"="string", "required"=true, "description"="animal breed, e.g., abyssinian "}
     *     },
     *     statusCodes={
     *         201="Animal created",
     *         400={
     *             "Validation error",
     *             "Invalid JSON format",
     *             "Animal already exists"
     *         }
     *     }
     * )
     * )
     */
    public function createAction(Request $request): JsonResponse
    {
        $animal = new Animal();

        $this->handleRequest($request, $animal);

        $errors = $this->get('validator')->validate($animal);

        if (count($errors) > 0) {
            $this->throwApiProblemValidationException($errors);
        }

        $this->save($animal);

        return $this->json($animal, Response::HTTP_CREATED, [
            'Location' => $this->generateUrl('animals_show', ['id' => $animal->getId()])
        ]);
    }

    /**
     * @Route("/animals/{id}")
     * @Method({"PUT", "PATCH"})
     * @ApiDoc(
     *     description="Update animal",
     *     requirements={
     *         {"name"="id", "requirement"="\d+", "dataType"="integer", "description"="animal id"}
     *     },
     *     filters={
     *         {"name"="embedded", "dataType"="string", "value"="program"}
     *     },
     *     parameters={
     *         {"name"="species", "dataType"="string", "required"=true, "description"="animal species, e.g., cat"},
     *         {"name"="breed", "dataType"="string","required"=true, "description"="animal breed, e.g., abyssinian "}
     *     },
     *     statusCodes={
     *         200="Animal updated",
     *         400={
     *             "Validation error",
     *             "Invalid JSON format"
     *         },
     *         404="Animal not found"
     *     }
     * )
     */
    public function updateAction(Request $request, $id): JsonResponse
    {
        $animal = $this->getDoctrine()->getRepository(Animal::class)->find($id);

        if (!$animal) {
            throw new NotFoundHttpException('Animal not found.');
        }

        if ($request->isMethod('PUT')) {
            $this->handleRequest($request, $animal);
        } else {
            $this->handlePatchRequest($request, $animal);
        }

        $errors = $this->get('validator')->validate($animal);

        if (count($errors) > 0) {
            $this->throwApiProblemValidationException($errors);
        }

        $this->save($animal);

        if ($request->query->get('embedded') === 'program') {
            $animal = $this->getEmbeddedAnimal($animal);
        }

        return $this->json($animal);
    }

    /**
     * @Route("/animals")
     * @Method("GET")
     * @ApiDoc(
     *     description="Show animals",
     *     filters={
     *         {"name"="embedded", "dataType"="string", "value"="program"}
     *     },
     *     statusCodes={
     *          200="Animals returned"
     *     }
     * )
     */
    public function listAction(Request $request): JsonResponse
    {
        $animals = $this->getDoctrine()->getRepository(Animal::class)->findAll();

        if ($request->query->get('embedded') === 'program') {
            $animals = $this->getEmbeddedAnimals($animals);
        }

        return $this->json($animals);
    }

    /**
     * @Route("/animals/{id}", name="animals_show")
     * @Method("GET")
     * @ApiDoc(
     *     description="Show animal",
     *     filters={
     *         {"name"="embedded", "dataType"="string", "value"="program"}
     *     },
     *     requirements={
     *         {"name"="id", "requirement"="\d+", "dataType"="integer", "description"="animal id"}
     *     },
     *     statusCodes={
     *         200="Animal returned",
     *         404="Animal not found"
     *     }
     * )
     */
    public function showAction(Request $request, $id): JsonResponse
    {
        $animal = $this->getDoctrine()->getRepository(Animal::class)->find($id);

        if (! $animal) {
            throw new NotFoundHttpException('Animal not found.');
        }

        if ($request->query->get('embedded') === 'program') {
            $animal = $this->getEmbeddedAnimal($animal);
        }

        return $this->json($animal);
    }

    /**
     * @Route("/animals/{id}", name="animals_delete")
     * @Method("DELETE")
     * @ApiDoc(
     *     description="Delete animal",
     *     requirements={
     *         {"name"="id", "requirement"="\d+", "dataType"="integer", "description"="animal id"}
     *     },
     *     statusCodes={
     *         204="Animal deleted",
     *         404="Animal not found"
     *     }
     * )
     */
    public function deleteAction($id): JsonResponse
    {
        $animal = $this->getDoctrine()->getRepository(Animal::class)->find($id);

        if (! $animal) {
            throw new NotFoundHttpException('Animal not found.');
        }

        $this->getDoctrine()->getManager()->remove($animal);
        $this->getDoctrine()->getManager()->flush();

        return $this->json(null, Response::HTTP_NO_CONTENT);
    }

    /**
     * @Route("/animals/{id}/programs", name="animals_assign_program")
     * @Method("POST")
     * @ApiDoc(
     *     description="Assign program to animal",
     *     requirements={
     *         {"name"="id", "requirement"="\d+", "dataType"="integer", "description"="animal id"}
     *     },
     *     parameters={
     *          {"name"="title", "required"=true, "dataType"="string", "description"="TV show title"},
     *          {"name"="television", "required"=true, "dataType"="string", "description"="TV name"},
     *          {"name"="start_time", "required"=true, "dataType"="string", "description"="TV show start time"},
     *          {"name"="description", "required"=false, "dataType"="string", "description"="TV show description"},
     *          {"name"="legal_age", "required"=false, "dataType"="string", "description"="TV show legal age"},
     *          {"name"="release_year", "required"=false, "dataType"="string", "description"="TV show release year"},
     *          {"name"="type", "required"=false, "dataType"="string", "description"="TV show type"},
     *     },
     *     filters={
     *         {"name"="embedded", "dataType"="string", "value"="program"}
     *     },
     *     statusCodes={
     *         200="TV program assigned to animal",
     *         400="Validation error",
     *         404="Animal not found"
     *     }
     * )
     */
    public function assignProgramAction(Request $request, $id): JsonResponse
    {
        $animal = $this->getDoctrine()->getRepository(Animal::class)->find($id);

        if (! $animal) {
            throw new NotFoundHttpException('Animal not found.');
        }

        $data = $this->handle($request);

        $title = $data['title'] ?? null;
        $television = $data['television'] ?? null;
        $startTime = $data['start_time'] ?? null;
        $description = $data['description'] ?? null;
        $legalAge = $data['legal_age'] ?? null;
        $releaseYear = $data['release_year'] ?? null;
        $type = $data['type'] ?? null;

        $this->validateAssignProgramRequest($title, $television, $startTime);

        $response = $this->get('eight_points_guzzle.client.tv_api')->post('tv_programs', [
            'body' => json_encode([
                'title' => $title,
                'television' => $television,
                'start_time' => $startTime,
                'description' => $description,
                'legal_age' => $legalAge,
                'release_year' => $releaseYear,
                'type' => $type,
            ])
        ]);

        $tvProgramId = (int) explode('/', $response->getHeader('Location')[0])[4];

        $program = new Program($tvProgramId);

        $animal->addProgram($program);

        $this->save($program);

        if ($request->query->get('embedded') === 'program') {
            $animal = $this->getEmbeddedAnimal($animal);
        }

        return $this->json($animal, Response::HTTP_OK);
    }

    /**
     * @Route("/animals/{id}/programs")
     * @Method({"PUT"})
     * @ApiDoc(
     *     description="Update animal programs",
     *     requirements={
     *         {"name"="id", "requirement"="\d+", "dataType"="integer", "description"="animal id"}
     *     },
     *     filters={
     *         {"name"="embedded", "dataType"="string", "value"="program"}
     *     },
     *     parameters={
     *         {"name"="programs", "dataType"="array", "required"=true, "description"="animal program ids"}
     *     },
     *     statusCodes={
     *         200="Animal updated",
     *         400={
     *             "Invalid JSON format",
     *             "Validation error",
     *         },
     *         404="Animal not found"
     *     }
     * )
     */
    public function updateProgramsAction(Request $request, $id)
    {
        $animal = $this->getDoctrine()->getRepository(Animal::class)->find($id);

        if (!$animal) {
            throw new NotFoundHttpException('Animal not found.');
        }

        $data = $this->handle($request);

        $this->validateUpdateProgramsRequest($data);

        $animal->removePrograms();

        $this->assignPrograms($animal, $data);

        $this->save($animal);

        if ($request->query->get('embedded') === 'program') {
            $animal = $this->getEmbeddedAnimal($animal);
        }

        return $this->json($animal);
    }

    private function validateAssignProgramRequest($title, $television, $startTime)
    {
        $errors = [];

        if (! $title) {
            $errors[] = 'Title is required';
        }

        if (! $television) {
            $errors[] = 'Television is required';
        }

        if (! $startTime) {
            $errors[] = 'Start time is required';
        }

        if ($errors) {
            $apiProblem = new ApiProblem(
                Response::HTTP_BAD_REQUEST,
                ApiProblem::TYPE_VALIDATION_ERROR,
                $errors
            );

            throw new ApiProblemException($apiProblem);
        }
    }

    private function validateUpdateProgramsRequest(array $data)
    {
        if (!array_key_exists('programs', $data)) {
            $apiProblem = new ApiProblem(
                Response::HTTP_BAD_REQUEST,
                ApiProblem::TYPE_VALIDATION_ERROR,
                ['Missing programs. Ex: { programs: [ {id: 1}, {id: 2} ] }']
            );

            throw new ApiProblemException($apiProblem);
        }
        foreach ($data['programs'] as $program) {
            if (!array_key_exists('id', $program)) {
                $apiProblem = new ApiProblem(
                    Response::HTTP_BAD_REQUEST,
                    ApiProblem::TYPE_VALIDATION_ERROR,
                    ['Missing program id. Ex: {id: 1}']
                );

                throw new ApiProblemException($apiProblem);
            }
        }
    }

    private function handleRequest(Request $request, Animal $animal)
    {
        $data = $this->handle($request);

        $breed = $data['breed'] ?? null;
        $species = $data['species'] ?? null;

        $animal->setBreed($breed);
        $animal->setSpecies($species);
    }

    private function handlePatchRequest(Request $request, Animal $animal)
    {
        $data = $this->handle($request);

        if (array_key_exists('breed', $data)) {
            $animal->setBreed($data['breed']);
        }

        if (array_key_exists('species', $data)) {
            $animal->setBreed($data['species']);
        }
    }

    private function handle(Request $request): array
    {
        $data = json_decode($request->getContent(), true);

        if (! $data) {
            $apiProblem = new ApiProblem(
                Response::HTTP_BAD_REQUEST,
                ApiProblem::TYPE_INVALID_REQUEST_BODY_FORMAT
            );

            throw new ApiProblemException($apiProblem);
        }

        return $data;
    }

    private function throwApiProblemValidationException(
        ConstraintViolationListInterface $validationErrors
    ) {
        $errors = [];

        foreach ($validationErrors as $validationError) {
            $errors[] = $validationError->getMessage();
        }

        $apiProblem = new ApiProblem(
            Response::HTTP_BAD_REQUEST,
            ApiProblem::TYPE_VALIDATION_ERROR,
            $errors
        );

        throw new ApiProblemException($apiProblem);
    }
    
    private function save($entity): void
    {
        $this->getDoctrine()->getManager()->persist($entity);
        $this->getDoctrine()->getManager()->flush();
    }

    private function getEmbeddedAnimals(array $animals): array
    {
        $data = [];

        /** @var Animal $animal */
        foreach ($animals as $animal) {
            $data[] = $this->getEmbeddedAnimal($animal);
        }

        return $data;
    }

    private function getEmbeddedAnimal(Animal $animal): array
    {
        $programs = [];

        foreach ($animal->getPrograms() as $program) {
            $programs[] = $this->getProgram($program->getId());
        }

        $animal = $animal->jsonSerialize();
        $animal['programs'] = $programs;

        return $animal;
    }

    private function getProgramIds(array $data): array
    {
        $programs = [];

        foreach ($data['programs'] as $program) {
            $programs[] = $this->getProgram($program['id'])->id;
        }

        return $programs;
    }

    private function getProgram($id)
    {
        $response = $this
            ->get('eight_points_guzzle.client.tv_api')
            ->get('tv_programs/'.$id);

        return json_decode($response->getBody()->getContents());
    }

    private function assignPrograms(Animal $animal, array $data)
    {
        $programIds = $this->getProgramIds($data);

        foreach ($programIds as $programId) {
            $program = $this->getDoctrine()->getRepository(Program::class)->find($programId);
            if (!$program) {
                $program = new Program($programId);
                $this->save($program);
            }

            $animal->addProgram($program);
        }
    }
}