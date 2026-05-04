<?php

namespace glook\PecomSdk\Generated\Endpoint;

class BranchesFindzonebyaddress extends \glook\PecomSdk\Generated\Runtime\Client\BaseEndpoint implements \glook\PecomSdk\Generated\Runtime\Client\Endpoint
{
    /**
     * Метод по строке адреса выводит филиал, к которому относится указанный адрес, наименование тарифной зоны, ID склада основного отделения филиала. Составляющие части адреса возвращаются в виде массива: страна, регион, населенный пункт, улица, дом. Если возвращается пустой ответ — значит зона адреса не обслуживается ПЭК.
     *
     * @param \glook\PecomSdk\Generated\Model\BranchesFindzonebyaddressPostBody $requestBody 
     */
    public function __construct(\glook\PecomSdk\Generated\Model\BranchesFindzonebyaddressPostBody $requestBody)
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
        return '/branches/findzonebyaddress/';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \glook\PecomSdk\Generated\Model\BranchesFindzonebyaddressPostBody) {
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
     * @throws \glook\PecomSdk\Generated\Exception\BranchesFindzonebyaddressBadRequestException
     * @throws \glook\PecomSdk\Generated\Exception\BranchesFindzonebyaddressForbiddenException
     * @throws \glook\PecomSdk\Generated\Exception\BranchesFindzonebyaddressInternalServerErrorException
     * @throws \glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\glook\PecomSdk\Generated\Model\BranchesFindzonebyaddressPostResponse200
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'glook\\PecomSdk\\Generated\\Model\\BranchesFindzonebyaddressPostResponse200', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \glook\PecomSdk\Generated\Exception\BranchesFindzonebyaddressBadRequestException($serializer->deserialize($body, 'glook\\PecomSdk\\Generated\\Model\\CommonErrorEnvelope', 'json'));
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \glook\PecomSdk\Generated\Exception\BranchesFindzonebyaddressForbiddenException($serializer->deserialize($body, 'glook\\PecomSdk\\Generated\\Model\\CommonErrorEnvelope', 'json'));
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \glook\PecomSdk\Generated\Exception\BranchesFindzonebyaddressInternalServerErrorException($serializer->deserialize($body, 'glook\\PecomSdk\\Generated\\Model\\CommonErrorEnvelope', 'json'));
        }
        throw new \glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array('BasicAuth');
    }
}