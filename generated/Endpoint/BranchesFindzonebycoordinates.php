<?php

namespace glook\PecomSdk\Generated\Endpoint;

use glook\PecomSdk\Generated\Exception\BranchesFindzonebycoordinatesBadRequestException;
use glook\PecomSdk\Generated\Exception\BranchesFindzonebycoordinatesForbiddenException;
use glook\PecomSdk\Generated\Exception\BranchesFindzonebycoordinatesInternalServerErrorException;
use glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException;
use glook\PecomSdk\Generated\Model\BranchesFindzonebycoordinatesPostBodyItem;
use glook\PecomSdk\Generated\Model\ZoneByCoordinate;
use glook\PecomSdk\Generated\Runtime\Client\BaseEndpoint;
use glook\PecomSdk\Generated\Runtime\Client\Endpoint;
use glook\PecomSdk\Generated\Runtime\Client\EndpointTrait;
use Symfony\Component\Serializer\SerializerInterface;

class BranchesFindzonebycoordinates extends BaseEndpoint implements Endpoint
{
    use EndpointTrait;

    /**
     * Метод по координатам ищет филиал и наименование тарифной зоны, к которой он привязан. Результат возвращается в виде массива. Если возвращается пустой ответ — значит зона адреса не обслуживается ПЭК.
     *
     * @param BranchesFindzonebycoordinatesPostBodyItem[] $requestBody
     */
    public function __construct(array $requestBody)
    {
        $this->body = $requestBody;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/branches/findzonebycoordinates/';
    }

    public function getBody(SerializerInterface $serializer, $streamFactory = null): array
    {
        if (is_array($this->body) and isset($this->body[0]) and $this->body[0] instanceof BranchesFindzonebycoordinatesPostBodyItem) {
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
     * @return null|ZoneByCoordinate[]
     *
     * @throws BranchesFindzonebycoordinatesBadRequestException
     * @throws BranchesFindzonebycoordinatesForbiddenException
     * @throws BranchesFindzonebycoordinatesInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    protected function transformResponseBody(string $body, int $status, SerializerInterface $serializer, ?string $contentType = null)
    {
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'glook\PecomSdk\Generated\Model\ZoneByCoordinate[]', 'json');
        }
        if (false === is_null($contentType) && (400 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new BranchesFindzonebycoordinatesBadRequestException($serializer->deserialize($body, 'glook\PecomSdk\Generated\Model\CommonErrorEnvelope', 'json'));
        }
        if (false === is_null($contentType) && (403 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new BranchesFindzonebycoordinatesForbiddenException($serializer->deserialize($body, 'glook\PecomSdk\Generated\Model\CommonErrorEnvelope', 'json'));
        }
        if (false === is_null($contentType) && (500 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new BranchesFindzonebycoordinatesInternalServerErrorException($serializer->deserialize($body, 'glook\PecomSdk\Generated\Model\CommonErrorEnvelope', 'json'));
        }

        throw new UnexpectedStatusCodeException($status, $body);
    }
}
