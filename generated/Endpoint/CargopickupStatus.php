<?php

namespace glook\PecomSdk\Generated\Endpoint;

use glook\PecomSdk\Generated\Exception\CargopickupStatusBadRequestException;
use glook\PecomSdk\Generated\Exception\CargopickupStatusForbiddenException;
use glook\PecomSdk\Generated\Exception\CargopickupStatusInternalServerErrorException;
use glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException;
use glook\PecomSdk\Generated\Model\CargoPickupStatusError;
use glook\PecomSdk\Generated\Model\CargoPickupStatusItem;
use glook\PecomSdk\Generated\Model\CargoPickupStatusRequest;
use glook\PecomSdk\Generated\Runtime\Client\BaseEndpoint;
use glook\PecomSdk\Generated\Runtime\Client\Endpoint;
use glook\PecomSdk\Generated\Runtime\Client\EndpointTrait;
use Symfony\Component\Serializer\SerializerInterface;

class CargopickupStatus extends BaseEndpoint implements Endpoint
{
    use EndpointTrait;

    public function __construct(CargoPickupStatusRequest $requestBody)
    {
        $this->body = $requestBody;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/cargopickup/status/';
    }

    public function getBody(SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof CargoPickupStatusRequest) {
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
     * @return CargoPickupStatusError|CargoPickupStatusItem[]
     *
     * @throws CargopickupStatusBadRequestException
     * @throws CargopickupStatusForbiddenException
     * @throws CargopickupStatusInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    protected function transformResponseBody(string $body, int $status, SerializerInterface $serializer, ?string $contentType = null)
    {
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            $decodedBody = json_decode($body);
            $matchingTypes = [];
            if (is_array($decodedBody) && !array_filter($decodedBody, function ($item) {
                return !(is_object($item) && (!property_exists($item, 'carBrand') || (is_null($item->{'carBrand'}) || is_string($item->{'carBrand'}))) && (!property_exists($item, 'carDriver') || (is_null($item->{'carDriver'}) || is_string($item->{'carDriver'}))) && (!property_exists($item, 'carDriverPhone') || (is_null($item->{'carDriverPhone'}) || is_string($item->{'carDriverPhone'}))) && (property_exists($item, 'cargoCode') && is_string($item->{'cargoCode'})) && (!property_exists($item, 'carNumber') || (is_null($item->{'carNumber'}) || is_string($item->{'carNumber'}))) && (!property_exists($item, 'error') || (is_null($item->{'error'}) || is_string($item->{'error'}))) && (!property_exists($item, 'fenceStatus') || (is_null($item->{'fenceStatus'}) || is_string($item->{'fenceStatus'}))) && (!property_exists($item, 'intakeStatus') || (is_null($item->{'intakeStatus'}) || is_string($item->{'intakeStatus'}))) && (!property_exists($item, 'intakeStatusCode') || (is_null($item->{'intakeStatusCode'}) || is_int($item->{'intakeStatusCode'}))) && (!property_exists($item, 'intervalFrom') || (is_null($item->{'intervalFrom'}) || is_string($item->{'intervalFrom'}))) && (!property_exists($item, 'intervalLunchBreakFrom') || (is_null($item->{'intervalLunchBreakFrom'}) || is_string($item->{'intervalLunchBreakFrom'}))) && (!property_exists($item, 'intervalLunchBreakTo') || (is_null($item->{'intervalLunchBreakTo'}) || is_string($item->{'intervalLunchBreakTo'}))) && (!property_exists($item, 'intervalTo') || (is_null($item->{'intervalTo'}) || is_string($item->{'intervalTo'}))) && (!property_exists($item, 'pickupDate') || (is_null($item->{'pickupDate'}) || is_string($item->{'pickupDate'}))));
            })) {
                $matchingTypes[] = 'glook\PecomSdk\Generated\Model\CargoPickupStatusItem[]';
            }
            if (is_object($decodedBody) && (property_exists($decodedBody, 'error') && (is_object($decodedBody->{'error'}) && (!property_exists($decodedBody->{'error'}, 'error') || (is_null($decodedBody->{'error'}->{'error'}) || is_object($decodedBody->{'error'}->{'error'}))) && (property_exists($decodedBody->{'error'}, 'message') && is_string($decodedBody->{'error'}->{'message'})) && (property_exists($decodedBody->{'error'}, 'status') && is_int($decodedBody->{'error'}->{'status'})) && (property_exists($decodedBody->{'error'}, 'title') && is_string($decodedBody->{'error'}->{'title'}))))) {
                $matchingTypes[] = 'glook\PecomSdk\Generated\Model\CargoPickupStatusError';
            }
            if (1 !== count($matchingTypes)) {
                throw new \UnexpectedValueException('Ответ API должен соответствовать ровно одной схеме oneOf');
            }
            if ('glook\PecomSdk\Generated\Model\CargoPickupStatusItem[]' === $matchingTypes[0]) {
                return $serializer->deserialize($body, 'glook\PecomSdk\Generated\Model\CargoPickupStatusItem[]', 'json');
            }
            if ('glook\PecomSdk\Generated\Model\CargoPickupStatusError' === $matchingTypes[0]) {
                return $serializer->deserialize($body, 'glook\PecomSdk\Generated\Model\CargoPickupStatusError', 'json');
            }

            throw new \UnexpectedValueException('Ответ API должен соответствовать ровно одной схеме oneOf');
        }
        if (false === is_null($contentType) && (400 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new CargopickupStatusBadRequestException($serializer->deserialize($body, 'glook\PecomSdk\Generated\Model\CommonErrorEnvelope', 'json'));
        }
        if (false === is_null($contentType) && (403 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new CargopickupStatusForbiddenException($serializer->deserialize($body, 'glook\PecomSdk\Generated\Model\CommonErrorEnvelope', 'json'));
        }
        if (false === is_null($contentType) && (500 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new CargopickupStatusInternalServerErrorException($serializer->deserialize($body, 'glook\PecomSdk\Generated\Model\CommonErrorEnvelope', 'json'));
        }

        throw new UnexpectedStatusCodeException($status, $body);
    }
}
