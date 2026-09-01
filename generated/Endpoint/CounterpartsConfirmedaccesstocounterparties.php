<?php

namespace glook\PecomSdk\Generated\Endpoint;

use glook\PecomSdk\Generated\Exception\CounterpartsConfirmedaccesstocounterpartiesBadRequestException;
use glook\PecomSdk\Generated\Exception\CounterpartsConfirmedaccesstocounterpartiesForbiddenException;
use glook\PecomSdk\Generated\Exception\CounterpartsConfirmedaccesstocounterpartiesInternalServerErrorException;
use glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException;
use glook\PecomSdk\Generated\Model\ConfirmedAccessToCounterpartiesRequest;
use glook\PecomSdk\Generated\Model\ConfirmedAccessToCounterparty;
use glook\PecomSdk\Generated\Runtime\Client\BaseEndpoint;
use glook\PecomSdk\Generated\Runtime\Client\Endpoint;
use glook\PecomSdk\Generated\Runtime\Client\EndpointTrait;
use Symfony\Component\Serializer\SerializerInterface;

class CounterpartsConfirmedaccesstocounterparties extends BaseEndpoint implements Endpoint
{
    use EndpointTrait;

    /**
     * Метод выводит список контрагентов, которые подтвердили доступ к своим данным в компании ПЭК для логина, под которым выполняется запрос по API.
     */
    public function __construct(ConfirmedAccessToCounterpartiesRequest $requestBody)
    {
        $this->body = $requestBody;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/counterparts/confirmedaccesstocounterparties/';
    }

    public function getBody(SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof ConfirmedAccessToCounterpartiesRequest) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }

        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    public function getAuthenticationScopes(): array
    {
        return ['BasicAuth'];
    }

    /**
     * @return ConfirmedAccessToCounterparty[]
     *
     * @throws CounterpartsConfirmedaccesstocounterpartiesBadRequestException
     * @throws CounterpartsConfirmedaccesstocounterpartiesForbiddenException
     * @throws CounterpartsConfirmedaccesstocounterpartiesInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    protected function transformResponseBody(string $body, int $status, SerializerInterface $serializer, ?string $contentType = null)
    {
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'glook\PecomSdk\Generated\Model\ConfirmedAccessToCounterparty[]', 'json');
        }
        if (false === is_null($contentType) && (400 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new CounterpartsConfirmedaccesstocounterpartiesBadRequestException($serializer->deserialize($body, 'glook\PecomSdk\Generated\Model\CommonErrorEnvelope', 'json'));
        }
        if (false === is_null($contentType) && (403 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new CounterpartsConfirmedaccesstocounterpartiesForbiddenException($serializer->deserialize($body, 'glook\PecomSdk\Generated\Model\CommonErrorEnvelope', 'json'));
        }
        if (false === is_null($contentType) && (500 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new CounterpartsConfirmedaccesstocounterpartiesInternalServerErrorException($serializer->deserialize($body, 'glook\PecomSdk\Generated\Model\CommonErrorEnvelope', 'json'));
        }

        throw new UnexpectedStatusCodeException($status, $body);
    }
}
