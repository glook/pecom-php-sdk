<?php

namespace glook\PecomSdk\Generated\Endpoint;

use glook\PecomSdk\Generated\Exception\CargosdocumentsCargoinvoicebyperiodBadRequestException;
use glook\PecomSdk\Generated\Exception\CargosdocumentsCargoinvoicebyperiodForbiddenException;
use glook\PecomSdk\Generated\Exception\CargosdocumentsCargoinvoicebyperiodInternalServerErrorException;
use glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException;
use glook\PecomSdk\Generated\Model\CargosdocumentsCargoinvoicebyperiodRequest;
use glook\PecomSdk\Generated\Runtime\Client\BaseEndpoint;
use glook\PecomSdk\Generated\Runtime\Client\Endpoint;
use glook\PecomSdk\Generated\Runtime\Client\EndpointTrait;
use Symfony\Component\Serializer\SerializerInterface;

class CargosdocumentsCargoinvoicebyperiod extends BaseEndpoint implements Endpoint
{
    use EndpointTrait;

    /**
     * Для получения неоплаченных идентификаторов грузов необходимо передать идентификатор плательщика `counterpartGuid`. `counterpartGuid` можно получить методом [`/COUNTERPARTS/CONFIRMEDACCESSTOCOUNTERPARTIES/`](#tag/counterparts/POST/counterparts/confirmedaccesstocounterparties/)
     * - Запрошенный период не может превышать 31 день.
     * - По полученным идентификаторам грузов можно запросить Счет на оплату методом [`/CARGOSDOCUMENTS/ORDER/`](#tag/cargosdocuments/POST/cargosdocuments/order/).
     */
    public function __construct(CargosdocumentsCargoinvoicebyperiodRequest $requestBody)
    {
        $this->body = $requestBody;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/cargosdocuments/cargoinvoicebyperiod/';
    }

    public function getBody(SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof CargosdocumentsCargoinvoicebyperiodRequest) {
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
     * @throws CargosdocumentsCargoinvoicebyperiodBadRequestException
     * @throws CargosdocumentsCargoinvoicebyperiodForbiddenException
     * @throws CargosdocumentsCargoinvoicebyperiodInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    protected function transformResponseBody(string $body, int $status, SerializerInterface $serializer, ?string $contentType = null)
    {
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return json_decode($body);
        }
        if (false === is_null($contentType) && (400 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new CargosdocumentsCargoinvoicebyperiodBadRequestException($serializer->deserialize($body, 'glook\PecomSdk\Generated\Model\CommonErrorEnvelope', 'json'));
        }
        if (false === is_null($contentType) && (403 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new CargosdocumentsCargoinvoicebyperiodForbiddenException($serializer->deserialize($body, 'glook\PecomSdk\Generated\Model\CommonErrorEnvelope', 'json'));
        }
        if (false === is_null($contentType) && (500 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new CargosdocumentsCargoinvoicebyperiodInternalServerErrorException($serializer->deserialize($body, 'glook\PecomSdk\Generated\Model\CommonErrorEnvelope', 'json'));
        }

        throw new UnexpectedStatusCodeException($status, $body);
    }
}
