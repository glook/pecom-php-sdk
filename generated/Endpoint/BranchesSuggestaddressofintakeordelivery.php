<?php

namespace glook\PecomSdk\Generated\Endpoint;

class BranchesSuggestaddressofintakeordelivery extends \glook\PecomSdk\Generated\Runtime\Client\BaseEndpoint implements \glook\PecomSdk\Generated\Runtime\Client\Endpoint
{
    /**
    * Метод позволяет в ИТ системе реализовать быстрый подбор адреса забора/ доставки по аналогии с тем, как это сделано на сайте pecom.ru при подаче заявки. На вход дается строка с частью адреса, в ответе выводятся наиболее похожие варианты. При этом перечень вариантов содержит только адреса зоны доставки/ забора ПЭК.
    В некоторых случаях отсутствие вариантов адресов может говорить только о том, что адреса еще нет в базе, но забор/ доставка по адресу возможны, если есть забор/ доставка на соседние улицы/ дома.
    - Не используйте данный метод для проверки доступности адреса, т.к. есть ограничения по числу запросов для всех пользователей в сутки.
    - Для проверки доступности адреса Забора и Доставки используйте метод [/BRANCHES/FINDZONEBYADDRESS/](#tag/branches/POST/branches/findzonebyaddress/). Правильность адреса можно смотреть в ответе метода /FINDZONEBYADDRESS/ в блоке GeoData. Address. formatted
    *
    * @param \glook\PecomSdk\Generated\Model\BranchesSuggestaddressofintakeordeliveryPostBody $requestBody 
    */
    public function __construct(\glook\PecomSdk\Generated\Model\BranchesSuggestaddressofintakeordeliveryPostBody $requestBody)
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
        return '/branches/suggestaddressofintakeordelivery/';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \glook\PecomSdk\Generated\Model\BranchesSuggestaddressofintakeordeliveryPostBody) {
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
     * @throws \glook\PecomSdk\Generated\Exception\BranchesSuggestaddressofintakeordeliveryBadRequestException
     * @throws \glook\PecomSdk\Generated\Exception\BranchesSuggestaddressofintakeordeliveryForbiddenException
     * @throws \glook\PecomSdk\Generated\Exception\BranchesSuggestaddressofintakeordeliveryInternalServerErrorException
     * @throws \glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\glook\PecomSdk\Generated\Model\SuggestAddressResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'glook\\PecomSdk\\Generated\\Model\\SuggestAddressResponse', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \glook\PecomSdk\Generated\Exception\BranchesSuggestaddressofintakeordeliveryBadRequestException($serializer->deserialize($body, 'glook\\PecomSdk\\Generated\\Model\\CommonErrorEnvelope', 'json'));
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \glook\PecomSdk\Generated\Exception\BranchesSuggestaddressofintakeordeliveryForbiddenException($serializer->deserialize($body, 'glook\\PecomSdk\\Generated\\Model\\CommonErrorEnvelope', 'json'));
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \glook\PecomSdk\Generated\Exception\BranchesSuggestaddressofintakeordeliveryInternalServerErrorException($serializer->deserialize($body, 'glook\\PecomSdk\\Generated\\Model\\CommonErrorEnvelope', 'json'));
        }
        throw new \glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array('BasicAuth');
    }
}