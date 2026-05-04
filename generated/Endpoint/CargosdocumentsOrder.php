<?php

namespace glook\PecomSdk\Generated\Endpoint;

class CargosdocumentsOrder extends \glook\PecomSdk\Generated\Runtime\Client\BaseEndpoint implements \glook\PecomSdk\Generated\Runtime\Client\Endpoint
{
    /**
    * Метод на данный момент позволяет запросить документы "Поручение экспедитора/ Экспедиторская расписка" и "Счет на оплату" по оформленным грузам.
    - При первом успешном вызове метода по конкретному грузу в ответе будет статус 0 - "Документ запрошен".
    При повторном вызове и после получения статуса 1 - "Документ готов к скачиванию", получите документ методом [`/CARGOSDOCUMENTS/GETCONTENT/`](#tag/cargosdocuments/POST/cargosdocuments/getcontent/)
    - Для получения "Счета на оплату" необходимо передать идентификатор контрагента-плательщика `"counterpartGuid"` в системах ПЭК, связанный с ЛК.
    По грузу должна быть задолженность для этого контрагента-плательщика. `"counterpartGuid"` можно получить методом [`/COUNTERPARTS/CONFIRMEDACCESSTOCOUNTERPARTIES/`](#tag/counterparts/POST/counterparts/confirmedaccesstocounterparties/).
    - Для получения "Счета на оплату" в формате `"xml"`, необходимо передать уточняющий параметр `"docFormat"` в запросе. Данные счета вернутся в формате **CommerseML** редакции 2.
    - Есть ограничение на число запросов в сутки для одного логина
    *
    * @param \glook\PecomSdk\Generated\Model\CargosdocumentsOrderRequest $requestBody 
    */
    public function __construct(\glook\PecomSdk\Generated\Model\CargosdocumentsOrderRequest $requestBody)
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
        return '/cargosdocuments/order/';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \glook\PecomSdk\Generated\Model\CargosdocumentsOrderRequest) {
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
     * @throws \glook\PecomSdk\Generated\Exception\CargosdocumentsOrderBadRequestException
     * @throws \glook\PecomSdk\Generated\Exception\CargosdocumentsOrderForbiddenException
     * @throws \glook\PecomSdk\Generated\Exception\CargosdocumentsOrderInternalServerErrorException
     * @throws \glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\glook\PecomSdk\Generated\Model\CargosdocumentsOrderResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'glook\\PecomSdk\\Generated\\Model\\CargosdocumentsOrderResponse', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \glook\PecomSdk\Generated\Exception\CargosdocumentsOrderBadRequestException($serializer->deserialize($body, 'glook\\PecomSdk\\Generated\\Model\\CommonErrorEnvelope', 'json'));
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \glook\PecomSdk\Generated\Exception\CargosdocumentsOrderForbiddenException($serializer->deserialize($body, 'glook\\PecomSdk\\Generated\\Model\\CommonErrorEnvelope', 'json'));
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \glook\PecomSdk\Generated\Exception\CargosdocumentsOrderInternalServerErrorException($serializer->deserialize($body, 'glook\\PecomSdk\\Generated\\Model\\CommonErrorEnvelope', 'json'));
        }
        throw new \glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array('BasicAuth');
    }
}