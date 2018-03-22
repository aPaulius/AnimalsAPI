<?php

declare(strict_types=1);

namespace AppBundle\Model;

use Symfony\Component\HttpKernel\Exception\HttpException;

class ApiProblemException extends HttpException
{
    private $apiProblem;

    public function __construct(
        ApiProblem $apiProblem,
        \Exception $previous = null,
        array $headers = [],
        $code = 0
    ) {
        parent::__construct($apiProblem->getStatusCode(), $apiProblem->getTitle(), $previous, $headers, $code);

        $this->apiProblem = $apiProblem;
    }

    public function getApiProblem(): ApiProblem
    {
        return $this->apiProblem;
    }
}