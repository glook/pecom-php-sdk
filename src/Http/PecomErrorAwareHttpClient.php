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
        $status = $response->getStatusCode();
        $isSuccess = $status >= 200 && $status < 300;

        if ($isSuccess && !$this->isJsonResponse($response)) {
            return $response;
        }

        $body = (string) $response->getBody();
        $streamFactory = Psr17FactoryDiscovery::findStreamFactory();
        $response = $response->withBody($streamFactory->createStream($body));

        $payload = json_decode($body, true);
        $payload = is_array($payload) ? $payload : [];

        $error = (isset($payload['error']) && is_array($payload['error'])) ? $payload['error'] : [];

        $errTitle = (isset($error['title']) && is_string($error['title'])) ? $error['title'] : null;
        $errMessage = (isset($error['message']) && is_string($error['message'])) ? $error['message'] : null;
        $errStatus = (isset($error['status']) && is_int($error['status'])) ? $error['status'] : $status;
        $fields = (isset($error['fields']) && is_array($error['fields'])) ? $error['fields'] : [];

        $hasInlineError = null !== $errTitle || null !== $errMessage || !empty($fields);

        if ($isSuccess && !$hasInlineError) {
            return $response;
        }

        if (400 === $errStatus || 400 === $status || 'Ошибка валидации' === $errTitle) {
            throw new PecomValidationException(
                $errMessage ?? sprintf('PECOM validation error (HTTP %d)', $status),
                $errStatus,
                $errTitle,
                $fields,
                $payload,
                $response
            );
        }

        throw new PecomApiException(
            $errMessage ?? sprintf('PECOM API error (HTTP %d)', $status),
            $errStatus,
            $errTitle,
            $payload,
            $response
        );
    }

    private function isJsonResponse(ResponseInterface $response): bool
    {
        $contentType = $response->getHeaderLine('Content-Type');
        if ('' === $contentType) {
            return false;
        }

        return false !== stripos($contentType, 'application/json')
            || false !== stripos($contentType, '+json');
    }
}
