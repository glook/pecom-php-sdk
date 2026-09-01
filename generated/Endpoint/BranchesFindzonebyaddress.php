<?php

namespace glook\PecomSdk\Generated\Endpoint;

use glook\PecomSdk\Generated\Exception\BranchesFindzonebyaddressBadRequestException;
use glook\PecomSdk\Generated\Exception\BranchesFindzonebyaddressForbiddenException;
use glook\PecomSdk\Generated\Exception\BranchesFindzonebyaddressInternalServerErrorException;
use glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException;
use glook\PecomSdk\Generated\Model\BranchesAddressRequest;
use glook\PecomSdk\Generated\Model\BranchesFindzonebyaddressPostResponse200;
use glook\PecomSdk\Generated\Runtime\Client\BaseEndpoint;
use glook\PecomSdk\Generated\Runtime\Client\Endpoint;
use glook\PecomSdk\Generated\Runtime\Client\EndpointTrait;
use Symfony\Component\Serializer\SerializerInterface;

class BranchesFindzonebyaddress extends BaseEndpoint implements Endpoint
{
    use EndpointTrait;

    /**
     * Метод по строке адреса выводит филиал, к которому относится указанный адрес, наименование тарифной зоны, ID склада основного отделения филиала. Составляющие части адреса возвращаются в виде массива: страна, регион, населенный пункт, улица, дом. Если возвращается пустой ответ — значит зона адреса не обслуживается ПЭК.
     */
    public function __construct(BranchesAddressRequest $requestBody)
    {
        $this->body = $requestBody;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/branches/findzonebyaddress/';
    }

    public function getBody(SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof BranchesAddressRequest) {
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
     * @return BranchesFindzonebyaddressPostResponse200
     *
     * @throws BranchesFindzonebyaddressBadRequestException
     * @throws BranchesFindzonebyaddressForbiddenException
     * @throws BranchesFindzonebyaddressInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    protected function transformResponseBody(string $body, int $status, SerializerInterface $serializer, ?string $contentType = null)
    {
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'glook\PecomSdk\Generated\Model\BranchesFindzonebyaddressPostResponse200', 'json');
        }
        if (false === is_null($contentType) && (400 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new BranchesFindzonebyaddressBadRequestException($serializer->deserialize($body, 'glook\PecomSdk\Generated\Model\CommonErrorEnvelope', 'json'));
        }
        if (false === is_null($contentType) && (403 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new BranchesFindzonebyaddressForbiddenException($serializer->deserialize($body, 'glook\PecomSdk\Generated\Model\CommonErrorEnvelope', 'json'));
        }
        if (false === is_null($contentType) && (500 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new BranchesFindzonebyaddressInternalServerErrorException($serializer->deserialize($body, 'glook\PecomSdk\Generated\Model\CommonErrorEnvelope', 'json'));
        }

        throw new UnexpectedStatusCodeException($status, $body);
    }
}
