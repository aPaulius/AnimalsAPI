<?php

namespace AppBundle\EventListener;

use AppBundle\Model\ApiProblem;
use AppBundle\Model\ApiProblemException;
use GuzzleHttp\Exception\ClientException;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Event\GetResponseForExceptionEvent;
use Symfony\Component\HttpKernel\Exception\HttpException;

class ApiProblemExceptionListener
{
    public function onKernelException(GetResponseForExceptionEvent $event)
    {
//        $e = $event->getException();
//
//        if ($e instanceof ApiProblemException) {
//            $apiProblem = $e->getApiProblem();
//        } else {
//            $statusCode = $e instanceof ClientException
//                ? $e->getCode()
//                : $e->getStatusCode();
//
//            $apiProblem = new ApiProblem($statusCode);
//
//            if ($e instanceof HttpException) {
//                $apiProblem->setDetails($e->getMessage());
//            }
//        }
//
//        $jsonResponse = new JsonResponse(
//            $apiProblem,
//            $apiProblem->getStatusCode(), [
//                'Content-Type' => 'application/problem+json',
//            ]
//        );
//
//        $event->setResponse($jsonResponse);
    }
}