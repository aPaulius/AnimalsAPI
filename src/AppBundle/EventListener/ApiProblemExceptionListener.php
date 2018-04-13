<?php

namespace AppBundle\EventListener;

use AppBundle\Model\ApiProblem;
use AppBundle\Model\ApiProblemException;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Event\GetResponseForExceptionEvent;
use Symfony\Component\HttpKernel\Exception\HttpException;

class ApiProblemExceptionListener
{
    public function onKernelException(GetResponseForExceptionEvent $event)
    {
        $e = $event->getException();

        if ($e instanceof ApiProblemException) {
            $apiProblem = $e->getApiProblem();
        } else {
            $apiProblem = new ApiProblem($e->getStatusCode());

            if ($e instanceof HttpException) {
                $apiProblem->setDetails($e->getMessage());
            }
        }

        $jsonResponse = new JsonResponse(
            $apiProblem,
            $apiProblem->getStatusCode(), [
                'Content-Type' => 'application/problem+json',
            ]
        );

        $event->setResponse($jsonResponse);
    }
}