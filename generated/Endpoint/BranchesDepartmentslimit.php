<?php

namespace glook\PecomSdk\Generated\Endpoint;

class BranchesDepartmentslimit extends \glook\PecomSdk\Generated\Runtime\Client\BaseEndpoint implements \glook\PecomSdk\Generated\Runtime\Client\Endpoint
{
    /**
    * Метод возвращает максимально-допустимые значения ВГХ груза для тарифа "Express Автоперевозка" между указанными филиалами или складами. Результат возвращается в виде структуры.
    - Метод не проверяет наличие маршрута перевозки между филиалами.
    - Если возвращается пустой ответ — значит для тарифа "Express Автоперевозка" нет возможности перевозить груз между указанными филиалами (складами).
    - Идентификаторы филиалов и складов отправителя/ получателя можно получить методом [`/branches/nearestdepartments/`](#tag/branches/POST/branches/nearestdepartments/) (в ответе метода `freeDepartments.branchId` и `freeDepartments.warehouseId`)
    *
    * @param \glook\PecomSdk\Generated\Model\BranchesDepartmentslimitPostBody $requestBody 
    */
    public function __construct(\glook\PecomSdk\Generated\Model\BranchesDepartmentslimitPostBody $requestBody)
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
        return '/branches/departmentslimit/';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \glook\PecomSdk\Generated\Model\BranchesDepartmentslimitPostBody) {
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
     * @throws \glook\PecomSdk\Generated\Exception\BranchesDepartmentslimitBadRequestException
     * @throws \glook\PecomSdk\Generated\Exception\BranchesDepartmentslimitForbiddenException
     * @throws \glook\PecomSdk\Generated\Exception\BranchesDepartmentslimitInternalServerErrorException
     * @throws \glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\glook\PecomSdk\Generated\Model\BranchesDepartmentslimitPostResponse200
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'glook\\PecomSdk\\Generated\\Model\\BranchesDepartmentslimitPostResponse200', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \glook\PecomSdk\Generated\Exception\BranchesDepartmentslimitBadRequestException($serializer->deserialize($body, 'glook\\PecomSdk\\Generated\\Model\\CommonErrorEnvelope', 'json'));
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \glook\PecomSdk\Generated\Exception\BranchesDepartmentslimitForbiddenException($serializer->deserialize($body, 'glook\\PecomSdk\\Generated\\Model\\CommonErrorEnvelope', 'json'));
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \glook\PecomSdk\Generated\Exception\BranchesDepartmentslimitInternalServerErrorException($serializer->deserialize($body, 'glook\\PecomSdk\\Generated\\Model\\CommonErrorEnvelope', 'json'));
        }
        throw new \glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array('BasicAuth');
    }
}