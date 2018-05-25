<?php

declare(strict_types=1);

namespace AppBundle\Model;

use Symfony\Component\HttpFoundation\Response;

class ApiProblem implements \JsonSerializable
{
    const TYPE_VALIDATION_ERROR = 'validation_error';
    const TYPE_INVALID_REQUEST_BODY_FORMAT = 'invalid_body_format';
//    const TYPE_NOT_FOUND = 'not_found';

    private $statusCode;
    private $type;
    private $title;
    private $errors;
    private $details;
    
    public function __construct(
        int $statusCode,
        string $type = null,
        array $errors = []
    ) {
        if ($type) {
            $this->type = $type;
            $this->title = $this->getTitles()[$type];
        } else {
            $this->type = 'about:blank';
            $this->title = Response::$statusTexts[$statusCode];
        }

        $this->statusCode = $statusCode;
        $this->errors = $errors;
    }

    public function jsonSerialize(): array
    {
        $data = [
            'status' => $this->statusCode,
            'type' => $this->type,
            'title' => $this->title,
        ];

        if ($this->errors) {
            $data['errors'] = $this->errors;
        }

        if ($this->details) {
            $data['details'] = $this->details;
        }

        return $data;
    }

    public function setDetails($details)
    {
        $this->details = $details;
    }

    public function getStatusCode(): int
    {
        return $this->statusCode;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getTitles(): array
    {
        return [
            self::TYPE_VALIDATION_ERROR => 'There was a validation error.',
            self::TYPE_INVALID_REQUEST_BODY_FORMAT => 'Invalid JSON format sent.',
//            self::TYPE_NOT_FOUND => 'Not Found',
        ];
    }
}