<?php

declare(strict_types=1);

namespace glook\PecomSdk\Http;

use glook\PecomSdk\Exception\PecomApiException;
use glook\PecomSdk\Exception\PecomValidationException;
use Http\Discovery\Psr17FactoryDiscovery;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class PecomErrorAwareHttpClient implements ClientInterface
{
    /** @var ClientInterface */
    private $innerClient;

    public function __construct(ClientInterface $innerClient)
    {
        $this->innerClient = $innerClient;
    }

    public function sendRequest(RequestInterface $request): ResponseInterface
    {
        $response = $this->innerClient->sendRequest($request);

        if (200 !== $response->getStatusCode()) {
            return $response;
        }

        $body = (string) $response->getBody();

        $streamFactory = Psr17FactoryDiscovery::findStreamFactory();
        $response = $response->withBody($streamFactory->createStream($body));

        if ('' === $body) {
            return $response;
        }

        $payload = json_decode($body, true);

        if (!is_array($payload)) {
            return $response;
        }

        if (!isset($payload['error']) || !is_array($payload['error'])) {
            return $response;
        }

        $error = $payload['error'];
        $status = isset($error['status']) && is_int($error['status']) ? $error['status'] : 0;
        $title = isset($error['title']) && is_string($error['title']) ? $error['title'] : null;
        $message = isset($error['message']) && is_string($error['message']) ? $error['message'] : 'PECOM API error';
        $fields = isset($error['fields']) && is_array($error['fields']) ? $error['fields'] : [];

        if (400 === $status || 'Ошибка валидации' === $title) {
            throw new PecomValidationException($message, $status, $title, $fields, $payload, $response);
        }

        throw new PecomApiException($message, $status, $title, $payload, $response);
    }
}
