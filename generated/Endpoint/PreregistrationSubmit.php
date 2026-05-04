<?php

namespace glook\PecomSdk\Generated\Endpoint;

class PreregistrationSubmit extends \glook\PecomSdk\Generated\Runtime\Client\BaseEndpoint implements \glook\PecomSdk\Generated\Runtime\Client\Endpoint
{
    /**
    * - Максимальное количество грузов в одной заявке для orderType = 0 и 14 — **50**, для orderType = 3 и 4 - **1**.
    - [Общие рекомендации по передаче адреса забора/доставки в запрос при интеграции с транспортной компанией](https://kabinet.pecom.ru/UserData/Api/%D0%9E%D0%B1%D1%89%D0%B8%D0%B5%20%D1%80%D0%B5%D0%BA%D0%BE%D0%BC%D0%B5%D0%BD%D0%B4%D0%B0%D1%86%D0%B8%D0%B8%20%D0%BF%D0%BE%20%D0%BF%D0%B5%D1%80%D0%B5%D0%B4%D0%B0%D1%87%D0%B5%20%D0%B0%D0%B4%D1%80%D0%B5%D1%81%D0%B0%20%D0%B2%20%D0%B7%D0%B0%D0%BF%D1%80%D0%BE%D1%81%20%D0%BF%D1%80%D0%B8%20%D0%B8%D0%BD%D1%82%D0%B5%D0%B3%D1%80%D0%B0%D1%86%D0%B8%D0%B8.docx)
    - Возможность забора груза "день в день" в соответствии с Вашим договором уточняйте у своего закрепленного менеджера или в филиале отправления. Есть ограничения по времени забора и по габаритам, которые зависят от конкретных филиалов. Подача заявок по API на забор груза "день в день" за административными чертами города, а также на праздничные и выходные дни невозможна.
    - **ВАЖНО!** Использование технологии "Упрощенный забор": раздельной подачи "Заказа на машину" и "Заказа на перевозку" (orderType = 4), возможно, только после подключения услуги менеджером со стороны ПЭК. Вызов машины по этой технологии осуществляется только после подачи отдельного "Заказа на машину"
    - При подаче "Заказа на перевозку" (orderType = 4) реквизиты с требованиями к машине забора заполнять необходимо, но они будут проигнорированы, требования к машине имеет смысл передавать при подаче "Заказа на машину". Адрес забора в "Заказе на перевозку" и "Заказе на машину" должны в точности совпадать.
    - ID склада населенного пункта (с отбором по разрешенным габаритам можно получить методом [`/branches/nearestdepartments/`](#tag/branches/POST/branches/nearestdepartments/), возвращающим ближайшие отделения к переданному в запрос адресу. Или самостоятельно выбирать удобное отделение/склад из ответа метода [`/branches/all/`](#tag/branches/POST/branches/all/) (поле `branches[].divisions[].warehouses[].id`). Обращайте внимание на разрешенные типы операций складов и ограничения по габаритам (поле `branches[].divisions[].warehouses[].kindsOfTransportation[].description`, `type`, `operations[]`)
    - Быстро получить ID склада основного отделения любого филиала можно используя метод [`/branches/findzonebyaddress/`](#tag/branches/POST/branches/findzonebyaddress/). В ответе метода реквизит `mainWarehouseId`. Основное отделение является центральным складом конкретного филиала, из которого можно заказать доставку до адреса или ПВЗ, который относится к зоне обслуживаемого филиала.  
    Например, по адресу «Самарская область, город Отрадный», основным является отделение филиала «Самара» по адресу: ул. Земеца, д. 32 литера 354, так как город Отрадный обслуживает филиал «Самара».
    - Указать получателей для грузов можно в объекте `cargos[].receiver`.   - Услуга наложенного платежа `cargos[].services.cashOnDelivery` может быть доступна при заключении договора на оказание данной услуги и для тарифа/продукта EasyWay.
     - Для работы с продуктами/ тарифами EasyWay (12) и ДТС Автоперевозка (7) требуется заключение дополнительного соглашения на соответствующий продукт.
     - Реквизит `"paymentCity"` рекомендуется передавать только в некоторых случаях, описанных ниже. При передаче `"paymentCity"` в нём ожидается указание наименования филиала оплаты. "Филиал оплаты" - филиал ПЭК, в котором плательщик за услугу ПЭК будет получать оригиналы закрывающих бухгалтерских документов: УПД, отчёт по страхованию и т.п. Филиал оплаты также определяет возможность применения к грузу некоторых назначенных контрагенту скидок и сервисов.
    
    `"paymentCity"` обязателен только при указании плательщиком "третьего лица" (type=3)!
    
    Если плательщиками указаны Отправитель (type=1) или Получатель (type=2), то `"paymentCity"` следует передавать ТОЛЬКО в следующих случаях:
       * плательщиком за услугу указан Отправитель (type=1) и Филиал оплаты, отличается от филиала отправления,
       * плательщиком за услугу указан Получатель (type=2) и Филиал оплаты, отличается от филиала получения.
    По умолчанию, если Плательщик - отправитель, то Филиалом оплаты будет указан Филиал отправления; если Плательщик - получатель, то Филиал получения.
    
    Наименование филиала можно получить в ответе методов [`/branches/all/`](#tag/branches/POST/branches/all/) в поле `branches[].title` или [`/branches/findzonebyaddress/`](#tag/branches/POST/branches/findzonebyaddress/) в поле `branchTitle`
    - Замечания по валидации
     * При заказе услуги наложенного платежа `cargos[].services.cashOnDelivery` заявленная стоимость груза `cargos[].services.insurance.cost` устанавливается равной фактической стоимости товара `cargos[].services.cashOnDelivery.actualCost`.
     * Установка соответствующего значения в поле `includeTES` позволяет настраивать включение транспортно-экспедиционных услуг (ТЭУ) в сумму наложенного платежа (НП) для каждого груза или исключение ТЭУ из суммы НП: `true`— за услуги платит отправитель из суммы НП, `false`— за услуги платит получатель сверх суммы НП.
     * При указании идентификатора склада `sender.warehouseId` следует помнить, что он будет проигнорирован, если заказана услуга забор от адреса отправителя.
     * При указании идентификатора склада `cargos[].receiver.warehouseId` следует помнить, что он будет проигнорирован, если заказана услуга доставки.
    - `cargo.services.delivery.avisationDateTime, cargo.services.delivery.dateOfDelivery` При передаче выполняется проверка на возможность выполнения заявок в указанные даты по процессам компании
    - [Архив с примерами минимальных запросов Preregistration (.zip, 7Кб)](https://kabinet.pecom.ru/UserData/Api/%D0%90%D1%80%D1%85%D0%B8%D0%B2%20%D1%81%20%D0%BF%D1%80%D0%B8%D0%BC%D0%B5%D1%80%D0%B0%D0%BC%D0%B8%20%D0%BC%D0%B8%D0%BD%D0%B8%D0%BC%D0%B0%D0%BB%D1%8C%D0%BD%D1%8B%D1%85%20%D0%B7%D0%B0%D0%BF%D1%80%D0%BE%D1%81%D0%BE%D0%B2%20PREREGISTRATION.zip?v=134222797078245462)
    *
    * @param \glook\PecomSdk\Generated\Model\PreregistrationSubmitRequest $requestBody 
    */
    public function __construct(\glook\PecomSdk\Generated\Model\PreregistrationSubmitRequest $requestBody)
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
        return '/preregistration/submit/';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \glook\PecomSdk\Generated\Model\PreregistrationSubmitRequest) {
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
     * @throws \glook\PecomSdk\Generated\Exception\PreregistrationSubmitBadRequestException
     * @throws \glook\PecomSdk\Generated\Exception\PreregistrationSubmitForbiddenException
     * @throws \glook\PecomSdk\Generated\Exception\PreregistrationSubmitInternalServerErrorException
     * @throws \glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\glook\PecomSdk\Generated\Model\PreregistrationSubmitResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'glook\\PecomSdk\\Generated\\Model\\PreregistrationSubmitResponse', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \glook\PecomSdk\Generated\Exception\PreregistrationSubmitBadRequestException($serializer->deserialize($body, 'glook\\PecomSdk\\Generated\\Model\\CommonErrorEnvelope', 'json'));
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \glook\PecomSdk\Generated\Exception\PreregistrationSubmitForbiddenException($serializer->deserialize($body, 'glook\\PecomSdk\\Generated\\Model\\CommonErrorEnvelope', 'json'));
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \glook\PecomSdk\Generated\Exception\PreregistrationSubmitInternalServerErrorException($serializer->deserialize($body, 'glook\\PecomSdk\\Generated\\Model\\CommonErrorEnvelope', 'json'));
        }
        throw new \glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array('BasicAuth');
    }
}