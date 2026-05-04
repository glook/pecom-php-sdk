<?php

namespace glook\PecomSdk\Generated\Endpoint;

class CargosRoutesanddriverinfo extends \glook\PecomSdk\Generated\Runtime\Client\BaseEndpoint implements \glook\PecomSdk\Generated\Runtime\Client\Endpoint
{
    /**
     * - Метод выводит персональные данные водителей, осуществляющих забор/доставку груза для возможности использования их данных для заказа пропусков. Данные по водителям забора доступны только логину, которые имеет доступ к отправителю груза. Данные по водителям доставки доступны только получателям грузам. Метод работает только по маршрутным листам текущей или будущих дат
     *
     * @param \glook\PecomSdk\Generated\Model\CargosRoutesAndDriverInfoRequest $requestBody 
     */
    public function __construct(\glook\PecomSdk\Generated\Model\CargosRoutesAndDriverInfoRequest $requestBody)
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
        return '/cargos/routesanddriverinfo/';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \glook\PecomSdk\Generated\Model\CargosRoutesAndDriverInfoRequest) {
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
     * @throws \glook\PecomSdk\Generated\Exception\CargosRoutesanddriverinfoBadRequestException
     * @throws \glook\PecomSdk\Generated\Exception\CargosRoutesanddriverinfoForbiddenException
     * @throws \glook\PecomSdk\Generated\Exception\CargosRoutesanddriverinfoInternalServerErrorException
     * @throws \glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\glook\PecomSdk\Generated\Model\RouteMapAddress[]
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'glook\\PecomSdk\\Generated\\Model\\RouteMapAddress[]', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \glook\PecomSdk\Generated\Exception\CargosRoutesanddriverinfoBadRequestException($serializer->deserialize($body, 'glook\\PecomSdk\\Generated\\Model\\CommonErrorEnvelope', 'json'));
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \glook\PecomSdk\Generated\Exception\CargosRoutesanddriverinfoForbiddenException($serializer->deserialize($body, 'glook\\PecomSdk\\Generated\\Model\\CommonErrorEnvelope', 'json'));
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \glook\PecomSdk\Generated\Exception\CargosRoutesanddriverinfoInternalServerErrorException($serializer->deserialize($body, 'glook\\PecomSdk\\Generated\\Model\\CommonErrorEnvelope', 'json'));
        }
        throw new \glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array('BasicAuth');
    }
}