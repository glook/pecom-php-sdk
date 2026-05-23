<?php

namespace glook\PecomSdk\Generated\Endpoint;

use glook\PecomSdk\Generated\Exception\CargopickupCheckOrderedPickupType3CarBadRequestException;
use glook\PecomSdk\Generated\Exception\CargopickupCheckOrderedPickupType3CarForbiddenException;
use glook\PecomSdk\Generated\Exception\CargopickupCheckOrderedPickupType3CarInternalServerErrorException;
use glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException;
use glook\PecomSdk\Generated\Model\CargoPickupCheckOrderedPickupType3CarRequest;
use glook\PecomSdk\Generated\Model\CargoPickupCheckOrderedPickupType3CarResponse;
use glook\PecomSdk\Generated\Runtime\Client\BaseEndpoint;
use glook\PecomSdk\Generated\Runtime\Client\Endpoint;
use glook\PecomSdk\Generated\Runtime\Client\EndpointTrait;
use Symfony\Component\Serializer\SerializerInterface;

class CargopickupCheckOrderedPickupType3Car extends BaseEndpoint implements Endpoint
{
    use EndpointTrait;

    /**
     * Метод работает при подключеной услуге "Упрощенный заказ машины" и возвращает ранее отправленные методом [`/cargopickup/submit/`](#tag/cargopickup/POST/cargopickup/submit/) заказы на машины (со значением параметра "pickupType": 3). Может использоваться для проверки ранее поданного заказа на машину и получения его статуса.
     */
    public function __construct(CargoPickupCheckOrderedPickupType3CarRequest $requestBody)
    {
        $this->body = $requestBody;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/cargopickup/checkOrderedPickupType3Car/';
    }

    public function getBody(SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof CargoPickupCheckOrderedPickupType3CarRequest) {
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
     * @return null|CargoPickupCheckOrderedPickupType3CarResponse
     *
     * @throws CargopickupCheckOrderedPickupType3CarBadRequestException
     * @throws CargopickupCheckOrderedPickupType3CarForbiddenException
     * @throws CargopickupCheckOrderedPickupType3CarInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    protected function transformResponseBody(string $body, int $status, SerializerInterface $serializer, ?string $contentType = null)
    {
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'glook\PecomSdk\Generated\Model\CargoPickupCheckOrderedPickupType3CarResponse', 'json');
        }
        if (false === is_null($contentType) && (400 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new CargopickupCheckOrderedPickupType3CarBadRequestException($serializer->deserialize($body, 'glook\PecomSdk\Generated\Model\CommonErrorEnvelope', 'json'));
        }
        if (false === is_null($contentType) && (403 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new CargopickupCheckOrderedPickupType3CarForbiddenException($serializer->deserialize($body, 'glook\PecomSdk\Generated\Model\CommonErrorEnvelope', 'json'));
        }
        if (false === is_null($contentType) && (500 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new CargopickupCheckOrderedPickupType3CarInternalServerErrorException($serializer->deserialize($body, 'glook\PecomSdk\Generated\Model\CommonErrorEnvelope', 'json'));
        }

        throw new UnexpectedStatusCodeException($status, $body);
    }
}
