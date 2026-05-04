<?php

namespace glook\PecomSdk\Generated\Endpoint;

class CargopickupCheckOrderedPickupType3Car extends \glook\PecomSdk\Generated\Runtime\Client\BaseEndpoint implements \glook\PecomSdk\Generated\Runtime\Client\Endpoint
{
    /**
     * Метод работает при подключеной услуге "Упрощенный заказ машины" и возвращает ранее отправленные методом [`/cargopickup/submit/`](#tag/cargopickup/POST/cargopickup/submit/) заказы на машины (со значением параметра "pickupType": 3). Может использоваться для проверки ранее поданного заказа на машину и получения его статуса.
     *
     * @param \glook\PecomSdk\Generated\Model\CargoPickupCheckOrderedPickupType3CarRequest $requestBody 
     */
    public function __construct(\glook\PecomSdk\Generated\Model\CargoPickupCheckOrderedPickupType3CarRequest $requestBody)
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
        return '/cargopickup/checkOrderedPickupType3Car/';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \glook\PecomSdk\Generated\Model\CargoPickupCheckOrderedPickupType3CarRequest) {
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
     * @throws \glook\PecomSdk\Generated\Exception\CargopickupCheckOrderedPickupType3CarBadRequestException
     * @throws \glook\PecomSdk\Generated\Exception\CargopickupCheckOrderedPickupType3CarForbiddenException
     * @throws \glook\PecomSdk\Generated\Exception\CargopickupCheckOrderedPickupType3CarInternalServerErrorException
     * @throws \glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\glook\PecomSdk\Generated\Model\CargoPickupCheckOrderedPickupType3CarResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'glook\\PecomSdk\\Generated\\Model\\CargoPickupCheckOrderedPickupType3CarResponse', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \glook\PecomSdk\Generated\Exception\CargopickupCheckOrderedPickupType3CarBadRequestException($serializer->deserialize($body, 'glook\\PecomSdk\\Generated\\Model\\CommonErrorEnvelope', 'json'));
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \glook\PecomSdk\Generated\Exception\CargopickupCheckOrderedPickupType3CarForbiddenException($serializer->deserialize($body, 'glook\\PecomSdk\\Generated\\Model\\CommonErrorEnvelope', 'json'));
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \glook\PecomSdk\Generated\Exception\CargopickupCheckOrderedPickupType3CarInternalServerErrorException($serializer->deserialize($body, 'glook\\PecomSdk\\Generated\\Model\\CommonErrorEnvelope', 'json'));
        }
        throw new \glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array('BasicAuth');
    }
}