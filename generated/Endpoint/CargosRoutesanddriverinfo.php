<?php

namespace glook\PecomSdk\Generated\Endpoint;

use glook\PecomSdk\Generated\Exception\CargosRoutesanddriverinfoBadRequestException;
use glook\PecomSdk\Generated\Exception\CargosRoutesanddriverinfoForbiddenException;
use glook\PecomSdk\Generated\Exception\CargosRoutesanddriverinfoInternalServerErrorException;
use glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException;
use glook\PecomSdk\Generated\Model\CargosRoutesAndDriverInfoRequest;
use glook\PecomSdk\Generated\Model\RouteMapAddress;
use glook\PecomSdk\Generated\Runtime\Client\BaseEndpoint;
use glook\PecomSdk\Generated\Runtime\Client\Endpoint;
use glook\PecomSdk\Generated\Runtime\Client\EndpointTrait;
use Symfony\Component\Serializer\SerializerInterface;

class CargosRoutesanddriverinfo extends BaseEndpoint implements Endpoint
{
    use EndpointTrait;

    /**
     * - Метод выводит персональные данные водителей, осуществляющих забор/доставку груза для возможности использования их данных для заказа пропусков. Данные по водителям забора доступны только логину, которые имеет доступ к отправителю груза. Данные по водителям доставки доступны только получателям грузам. Метод работает только по маршрутным листам текущей или будущих дат
     */
    public function __construct(CargosRoutesAndDriverInfoRequest $requestBody)
    {
        $this->body = $requestBody;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/cargos/routesanddriverinfo/';
    }

    public function getBody(SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof CargosRoutesAndDriverInfoRequest) {
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
     * @return null|RouteMapAddress[]
     *
     * @throws CargosRoutesanddriverinfoBadRequestException
     * @throws CargosRoutesanddriverinfoForbiddenException
     * @throws CargosRoutesanddriverinfoInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    protected function transformResponseBody(string $body, int $status, SerializerInterface $serializer, ?string $contentType = null)
    {
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'glook\PecomSdk\Generated\Model\RouteMapAddress[]', 'json');
        }
        if (false === is_null($contentType) && (400 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new CargosRoutesanddriverinfoBadRequestException($serializer->deserialize($body, 'glook\PecomSdk\Generated\Model\CommonErrorEnvelope', 'json'));
        }
        if (false === is_null($contentType) && (403 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new CargosRoutesanddriverinfoForbiddenException($serializer->deserialize($body, 'glook\PecomSdk\Generated\Model\CommonErrorEnvelope', 'json'));
        }
        if (false === is_null($contentType) && (500 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new CargosRoutesanddriverinfoInternalServerErrorException($serializer->deserialize($body, 'glook\PecomSdk\Generated\Model\CommonErrorEnvelope', 'json'));
        }

        throw new UnexpectedStatusCodeException($status, $body);
    }
}
