<?php

namespace glook\PecomSdk\Generated\Endpoint;

class OrderPrint extends \glook\PecomSdk\Generated\Runtime\Client\BaseEndpoint implements \glook\PecomSdk\Generated\Runtime\Client\Endpoint
{
    /**
    * Метод позволяет получать файлы заявок и этикеток в формате PDF в кодировке base64
    В зависимости от значений параметра типа (`type` : `big`, `simple`, `multiple`), можно получить печатную форму заявки, этикетки конкретного груза или этикеток всех грузов заявки соответственно. Для типа `multiple`, если в заявке указано несколько грузополучателей (метод подачи заявки `preregistration/submit` `orderType` = `0` или `14`), то будут выведены на печать этикетки по всем грузам из заявки).
    *
    * @param \glook\PecomSdk\Generated\Model\OrderPrintRequest $requestBody 
    */
    public function __construct(\glook\PecomSdk\Generated\Model\OrderPrintRequest $requestBody)
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
        return '/order/print/';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \glook\PecomSdk\Generated\Model\OrderPrintRequest) {
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
     * @throws \glook\PecomSdk\Generated\Exception\OrderPrintBadRequestException
     * @throws \glook\PecomSdk\Generated\Exception\OrderPrintForbiddenException
     * @throws \glook\PecomSdk\Generated\Exception\OrderPrintInternalServerErrorException
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
            throw new \glook\PecomSdk\Generated\Exception\OrderPrintBadRequestException($serializer->deserialize($body, 'glook\\PecomSdk\\Generated\\Model\\CommonErrorEnvelope', 'json'));
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \glook\PecomSdk\Generated\Exception\OrderPrintForbiddenException($serializer->deserialize($body, 'glook\\PecomSdk\\Generated\\Model\\CommonErrorEnvelope', 'json'));
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \glook\PecomSdk\Generated\Exception\OrderPrintInternalServerErrorException($serializer->deserialize($body, 'glook\\PecomSdk\\Generated\\Model\\CommonErrorEnvelope', 'json'));
        }
        throw new \glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array('BasicAuth');
    }
}