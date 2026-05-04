<?php

namespace glook\PecomSdk\Generated\Endpoint;

class BranchesChecknocalcservices extends \glook\PecomSdk\Generated\Runtime\Client\BaseEndpoint implements \glook\PecomSdk\Generated\Runtime\Client\Endpoint
{
    /**
    * Метод на текущий момент позволяет проверить только услуги Наложенный платеж: GUID = 739293fd-edc7-495d-9e56-6f61ad39bb8c и Выдача по СМС (упрощенная выдача): GUID = ffb40421-4761-11e8-80c9-00155d668927 по конкретному направлению перевозки.
    - Обращаем ваше внимание, что метод проверяет доступность услуг только по географии. Для проверки возможности использования данных услуг конкретными отправителями и их условия необходимо использовать метод [`/connecteddiscountsservicesagreements/`](#tag/counterparts/POST/counterparts/connecteddiscountsservicesagreements/).
    - На вход данного метода ожидается ID филиалов отправления и назначения, которые можно получить из метода расчета стоимости или из методов получения географии, при этом для отделений филиал необходимо брать из организационной структуры.
    *
    * @param \glook\PecomSdk\Generated\Model\BranchesChecknocalcservicesPostBody $requestBody 
    */
    public function __construct(\glook\PecomSdk\Generated\Model\BranchesChecknocalcservicesPostBody $requestBody)
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
        return '/branches/checknocalcservices/';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \glook\PecomSdk\Generated\Model\BranchesChecknocalcservicesPostBody) {
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
     * @throws \glook\PecomSdk\Generated\Exception\BranchesChecknocalcservicesBadRequestException
     * @throws \glook\PecomSdk\Generated\Exception\BranchesChecknocalcservicesForbiddenException
     * @throws \glook\PecomSdk\Generated\Exception\BranchesChecknocalcservicesInternalServerErrorException
     * @throws \glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\glook\PecomSdk\Generated\Model\BranchesChecknocalcservicesPostResponse200Item[]
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'glook\\PecomSdk\\Generated\\Model\\BranchesChecknocalcservicesPostResponse200Item[]', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \glook\PecomSdk\Generated\Exception\BranchesChecknocalcservicesBadRequestException($serializer->deserialize($body, 'glook\\PecomSdk\\Generated\\Model\\CommonErrorEnvelope', 'json'));
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \glook\PecomSdk\Generated\Exception\BranchesChecknocalcservicesForbiddenException($serializer->deserialize($body, 'glook\\PecomSdk\\Generated\\Model\\CommonErrorEnvelope', 'json'));
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \glook\PecomSdk\Generated\Exception\BranchesChecknocalcservicesInternalServerErrorException($serializer->deserialize($body, 'glook\\PecomSdk\\Generated\\Model\\CommonErrorEnvelope', 'json'));
        }
        throw new \glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array('BasicAuth');
    }
}