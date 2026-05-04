<?php

namespace glook\PecomSdk\Generated\Endpoint;

class CargosdocumentsGetcontent extends \glook\PecomSdk\Generated\Runtime\Client\BaseEndpoint implements \glook\PecomSdk\Generated\Runtime\Client\Endpoint
{
    /**
    * Метод на данный момент позволяет получить документы "Поручение экспедитора/ Экспедиторская расписка" и "Счет на оплату" по оформленным грузам.
    - Сначала необходимо запросить документ методом [`/CARGOSDOCUMENTS/ORDER/`](#tag/cargosdocuments/POST/cargosdocuments/order/) и дождаться готовности документа
    - Для получения "Счета на оплату" необходимо передать идентификатор контрагента-плательщика `counterpartGuid` в системах ПЭК, связанный с ЛК. `counterpartGuid` можно получить методом [`/COUNTERPARTS/CONFIRMEDACCESSTOCOUNTERPARTIES/`](#tag/counterparts/POST/counterparts/confirmedaccesstocounterparties/).
    - Для получения "Счета на оплату" в формате `"xml"`, необходимо передать уточняющий параметр `docFormat` в запросе.
    Данные счета вернутся в формате CommerseML редакции 2.
    - Счета на оплату возвращаются в `"zip"` архиве (в архиве может быть несколько счетов по грузу)
    - [XSD схема Commerce ML 4.02](https://kabinet.pecom.ru/UserData/Api/CML402.zip)
    *
    * @param \glook\PecomSdk\Generated\Model\CargosdocumentsGetcontentRequest $requestBody 
    */
    public function __construct(\glook\PecomSdk\Generated\Model\CargosdocumentsGetcontentRequest $requestBody)
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
        return '/cargosdocuments/getcontent/';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \glook\PecomSdk\Generated\Model\CargosdocumentsGetcontentRequest) {
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
     * @throws \glook\PecomSdk\Generated\Exception\CargosdocumentsGetcontentBadRequestException
     * @throws \glook\PecomSdk\Generated\Exception\CargosdocumentsGetcontentForbiddenException
     * @throws \glook\PecomSdk\Generated\Exception\CargosdocumentsGetcontentInternalServerErrorException
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
            throw new \glook\PecomSdk\Generated\Exception\CargosdocumentsGetcontentBadRequestException($serializer->deserialize($body, 'glook\\PecomSdk\\Generated\\Model\\CommonErrorEnvelope', 'json'));
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \glook\PecomSdk\Generated\Exception\CargosdocumentsGetcontentForbiddenException($serializer->deserialize($body, 'glook\\PecomSdk\\Generated\\Model\\CommonErrorEnvelope', 'json'));
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \glook\PecomSdk\Generated\Exception\CargosdocumentsGetcontentInternalServerErrorException($serializer->deserialize($body, 'glook\\PecomSdk\\Generated\\Model\\CommonErrorEnvelope', 'json'));
        }
        throw new \glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array('BasicAuth');
    }
}