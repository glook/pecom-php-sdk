<?php

declare(strict_types=1);

namespace glook\PecomSdk\Exception;

use Psr\Http\Client\ClientExceptionInterface;
use Psr\Http\Message\ResponseInterface;

class PecomApiException extends \RuntimeException implements ClientExceptionInterface
{
    /** @var null|string */
    private $title;

    /** @var array */
    private $payload;

    /** @var ResponseInterface */
    private $response;

    public function __construct(
        string $message,
        int $code,
        ?string $title,
        array $payload,
        ResponseInterface $response
    ) {
        parent::__construct($message, $code);
        $this->title = $title;
        $this->payload = $payload;
        $this->response = $response;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function getPayload(): array
    {
        return $this->payload;
    }

    public function getResponse(): ResponseInterface
    {
        return $this->response;
    }
}
