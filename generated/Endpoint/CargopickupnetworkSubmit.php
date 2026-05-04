<?php

namespace glook\PecomSdk\Generated\Endpoint;

class CargopickupnetworkSubmit extends \glook\PecomSdk\Generated\Runtime\Client\BaseEndpoint implements \glook\PecomSdk\Generated\Runtime\Client\Endpoint
{
    /**
    * Метод не рекомендуется к использованию, корректная работа метода не гарантируется.
    
    - Максимальное количество грузов в одной заявке (и объектов с информацией о грузах в ответе) — **50**
    - [Общие рекомендации по передаче адреса забора/доставки в запрос при интеграции с транспортной компанией](https://kabinet.pecom.ru/UserData/Api/%D0%9E%D0%B1%D1%89%D0%B8%D0%B5%20%D1%80%D0%B5%D0%BA%D0%BE%D0%BC%D0%B5%D0%BD%D0%B4%D0%B0%D1%86%D0%B8%D0%B8%20%D0%BF%D0%BE%20%D0%BF%D0%B5%D1%80%D0%B5%D0%B4%D0%B0%D1%87%D0%B5%20%D0%B0%D0%B4%D1%80%D0%B5%D1%81%D0%B0%20%D0%B2%20%D0%B7%D0%B0%D0%BF%D1%80%D0%BE%D1%81%20%D0%BF%D1%80%D0%B8%20%D0%B8%D0%BD%D1%82%D0%B5%D0%B3%D1%80%D0%B0%D1%86%D0%B8%D0%B8.docx)
    - В элементах массива `cargos.items[]` с данными о грузах необходимо указывать данные получателя в объекте `cargos.items[].receiver`.
    - У объекта `cargos.items[].services.(услуга).payer.other` для услуг pickUp (забор), transporting (перевозка), delivery (доставка), insurance (страховка) добавилось поле `paymentCity`.
    - Реквизит `"paymentCity"` рекомендуется передавать только в некоторых случаях, описанных ниже. При передаче `"paymentCity"` в нём ожидается указание наименования филиала оплаты. "Филиал оплаты" - филиал ПЭК, в котором плательщик за услугу ПЭК будет получать оригиналы закрывающих бухгалтерских документов: УПД, отчёт по страхованию и т.п. Филиал оплаты также определяет возможность применения к грузу некоторых назначенных контрагенту скидок и сервисов.
    
    `"paymentCity"` обязателен только при указании плательщиком "третьего лица" (`type=3`)!
    
    Если плательщиками указаны Отправитель (`type=1`) или Получатель (`type=2`), то `"paymentCity"` следует передавать ТОЛЬКО в следующих случаях:
     * плательщиком за услугу указан Отправитель (`type=1`) и Филиал оплаты, отличается от филиала отправления,
     * плательщиком за услугу указан Получатель (`type=2`) и Филиал оплаты, отличается от филиала получения.
    По умолчанию, если Плательщик - отправитель, то Филиалом оплаты будет указан Филиал отправления; если Плательщик - получатель, то Филиал получения.
    
    Наименование филиала можно получить в ответе методов [`/branches/all/`](#tag/branches/POST/branches/all/) в поле `branches[].title` или [`/branches/findzonebyaddress/`](#tag/branches/POST/branches/findzonebyaddress/) в поле `branchTitle`
    - Можно указать штрих-коды для позиций грузов. Для этого надо во-первых для всей заявки в поле `cargos.common.typeClientBarcode` указать тип штрих-кода, регистр при указании типа штрих-кода не важен.
    Список допустимых типов штрих-кодов можно получить с помощью метода [/cargopickupnetwork/availabletypebarcode](#tag/cargopickupnetwork/POST/cargopickupnetwork/availabletypebarcode/).
    Для каждого груза нужно указать массив со штрих-кодами позиций груза в поле `cargos.items[].cargo.clientPositionsBarcode`.
    Штрих-кодов не должно быть указано больше, чем позиций груза (`cargos.items[].cargo.positionsCount`).
    - Для подачи заявки с наложенным платежом, следует использовать другие методы API. Свяжитесь с нами, если у Вас есть такая потребность.
    - `cargos.items[].receiver.identityCard.type` в значении 0 (Без предоставления документа) подразумевает, что идентификация получателя (доступна по договору оферты) будет произведена с использованием кода СМС. Ограничения на использование данного способа идентификации описаны [здесь](https://pecom.ru/services/additional-features/upr-vidacha/)
    - Данные по наименованию филиала отправления и получения для реквизитов `sender.city` и `receiver.city` можно получить используя метод [`/branches/findzonebyaddress/`](#tag/branches/POST/branches/findzonebyaddress/). На вход в метод передавать адрес забора и/или доставки, в ответе метода брать значение реквизита `branchTitle` и подставлять в реквизит `city` соответствующего блока.
    - Возможность забора груза "день в день" в соответствии с Вашим договором уточняйте у своего закрепленного менеджера или в филиале отправления. Есть ограничения по времени забора и по габаритам, которые зависят от конкретных филиалов. Подача заявок по API на забор груза "день в день" за административными чертами города, а также на праздничные и выходные дни невозможна.
    *
    * @param \glook\PecomSdk\Generated\Model\CargoPickupNetworkSubmitRequest $requestBody 
    */
    public function __construct(\glook\PecomSdk\Generated\Model\CargoPickupNetworkSubmitRequest $requestBody)
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
        return '/cargopickupnetwork/submit/';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \glook\PecomSdk\Generated\Model\CargoPickupNetworkSubmitRequest) {
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
     * @throws \glook\PecomSdk\Generated\Exception\CargopickupnetworkSubmitBadRequestException
     * @throws \glook\PecomSdk\Generated\Exception\CargopickupnetworkSubmitForbiddenException
     * @throws \glook\PecomSdk\Generated\Exception\CargopickupnetworkSubmitInternalServerErrorException
     * @throws \glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\glook\PecomSdk\Generated\Model\CargoPickupNetworkSubmitResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'glook\\PecomSdk\\Generated\\Model\\CargoPickupNetworkSubmitResponse', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \glook\PecomSdk\Generated\Exception\CargopickupnetworkSubmitBadRequestException($serializer->deserialize($body, 'glook\\PecomSdk\\Generated\\Model\\CommonErrorEnvelope', 'json'));
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \glook\PecomSdk\Generated\Exception\CargopickupnetworkSubmitForbiddenException($serializer->deserialize($body, 'glook\\PecomSdk\\Generated\\Model\\CommonErrorEnvelope', 'json'));
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \glook\PecomSdk\Generated\Exception\CargopickupnetworkSubmitInternalServerErrorException($serializer->deserialize($body, 'glook\\PecomSdk\\Generated\\Model\\CommonErrorEnvelope', 'json'));
        }
        throw new \glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array('BasicAuth');
    }
}