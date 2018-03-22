<?php

declare(strict_types=1);

namespace AppBundle\Controller;

use AppBundle\Entity\Animal;
use AppBundle\Model\ApiProblem;
use AppBundle\Model\ApiProblemException;
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
     *         {"name"="id", "requirement"="\d", "dataType"="integer", "description"="animal id"}
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
    public function updateAction(Request $request, int $id): JsonResponse
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

        return $this->json($animal);
    }

    /**
     * @Route("/animals")
     * @Method("GET")
     * @ApiDoc(
     *     description="Show animals",
     *     statusCodes={
     *          200="Animals returned"
     *     }
     * )
     */
    public function listAction(): JsonResponse
    {
        $animals = $this->getDoctrine()->getRepository(Animal::class)->findAll();

        return $this->json($animals);
    }

    /**
     * @Route("/animals/{id}", name="animals_show")
     * @Method("GET")
     * @ApiDoc(
     *     description="Show animal",
     *     requirements={
     *         {"name"="id", "requirement"="\d", "dataType"="integer", "description"="animal id"}
     *     },
     *     statusCodes={
     *         200="Animal returned",
     *         404="Animal not found"
     *     }
     * )
     */
    public function showAction(int $id): JsonResponse
    {
        $animal = $this->getDoctrine()->getRepository(Animal::class)->find($id);

        if (! $animal) {
            throw new NotFoundHttpException('Animal not found.');
        }

        return $this->json($animal);
    }

    /**
     * @Route("/animals/{id}", name="animals_delete")
     * @Method("DELETE")
     * @ApiDoc(
     *     description="Delete animal",
     *     requirements={
     *         {"name"="id", "requirement"="\d", "dataType"="integer", "description"="animal id"}
     *     },
     *     statusCodes={
     *         204={
     *             "Animal deleted",
     *             "Animal not found"
     *         }
     *     }
     * )
     */
    public function deleteAction(int $id): JsonResponse
    {
        $animal = $this->getDoctrine()->getRepository(Animal::class)->find($id);

        if ($animal) {
            $this->getDoctrine()->getManager()->remove($animal);
            $this->getDoctrine()->getManager()->flush();
        }

        return $this->json(null, Response::HTTP_NO_CONTENT);
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
    
    private function save(Animal $animal): void
    {
        $this->getDoctrine()->getManager()->persist($animal);
        $this->getDoctrine()->getManager()->flush();
    }
}