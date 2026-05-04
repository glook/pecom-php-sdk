<?php

namespace glook\PecomSdk\Generated\Endpoint;

class CargosdocumentsCargoinvoicebyperiod extends \glook\PecomSdk\Generated\Runtime\Client\BaseEndpoint implements \glook\PecomSdk\Generated\Runtime\Client\Endpoint
{
    /**
    * Для получения неоплаченных идентификаторов грузов необходимо передать идентификатор плательщика `counterpartGuid`. `counterpartGuid` можно получить методом [`/COUNTERPARTS/CONFIRMEDACCESSTOCOUNTERPARTIES/`](#tag/counterparts/POST/counterparts/confirmedaccesstocounterparties/)
    - Запрошенный период не может превышать 31 день.
    - По полученным идентификаторам грузов можно запросить Счет на оплату методом [`/CARGOSDOCUMENTS/ORDER/`](#tag/cargosdocuments/POST/cargosdocuments/order/)
    *
    * @param \glook\PecomSdk\Generated\Model\CargosdocumentsCargoinvoicebyperiodRequest $requestBody 
    */
    public function __construct(\glook\PecomSdk\Generated\Model\CargosdocumentsCargoinvoicebyperiodRequest $requestBody)
    {
        $this->body = $requestBody;
    }
    use \glook\PecomSdk\Generated\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/cargosdocuments/cargoinvoicebyperiod/';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \glook\PecomSdk\Generated\Model\CargosdocumentsCargoinvoicebyperiodRequest) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \glook\PecomSdk\Generated\Exception\CargosdocumentsCargoinvoicebyperiodBadRequestException
     * @throws \glook\PecomSdk\Generated\Exception\CargosdocumentsCargoinvoicebyperiodForbiddenException
     * @throws \glook\PecomSdk\Generated\Exception\CargosdocumentsCargoinvoicebyperiodInternalServerErrorException
     * @throws \glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return json_decode($body);
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \glook\PecomSdk\Generated\Exception\CargosdocumentsCargoinvoicebyperiodBadRequestException($serializer->deserialize($body, 'glook\\PecomSdk\\Generated\\Model\\CommonErrorEnvelope', 'json'));
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \glook\PecomSdk\Generated\Exception\CargosdocumentsCargoinvoicebyperiodForbiddenException($serializer->deserialize($body, 'glook\\PecomSdk\\Generated\\Model\\CommonErrorEnvelope', 'json'));
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \glook\PecomSdk\Generated\Exception\CargosdocumentsCargoinvoicebyperiodInternalServerErrorException($serializer->deserialize($body, 'glook\\PecomSdk\\Generated\\Model\\CommonErrorEnvelope', 'json'));
        }
        throw new \glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array('BasicAuth');
    }
}