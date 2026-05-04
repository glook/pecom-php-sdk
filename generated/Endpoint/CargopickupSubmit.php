<?php

namespace glook\PecomSdk\Generated\Endpoint;

class CargopickupSubmit extends \glook\PecomSdk\Generated\Runtime\Client\BaseEndpoint implements \glook\PecomSdk\Generated\Runtime\Client\Endpoint
{
    /**
    * - [Общие рекомендации по передаче адреса забора/доставки в запрос при интеграции с транспортной компанией](https://kabinet.pecom.ru/UserData/Api/%D0%9E%D0%B1%D1%89%D0%B8%D0%B5%20%D1%80%D0%B5%D0%BA%D0%BE%D0%BC%D0%B5%D0%BD%D0%B4%D0%B0%D1%86%D0%B8%D0%B8%20%D0%BF%D0%BE%20%D0%BF%D0%B5%D1%80%D0%B5%D0%B4%D0%B0%D1%87%D0%B5%20%D0%B0%D0%B4%D1%80%D0%B5%D1%81%D0%B0%20%D0%B2%20%D0%B7%D0%B0%D0%BF%D1%80%D0%BE%D1%81%20%D0%BF%D1%80%D0%B8%20%D0%B8%D0%BD%D1%82%D0%B5%D0%B3%D1%80%D0%B0%D1%86%D0%B8%D0%B8.docx)
    - **ВАЖНО!** Использование технологии "Упрощенный забор": раздельной подачи "Заказа на машину" и "Заказа на перевозку" (pickupType = 4), возможно, только после подключения услуги менеджером со стороны ПЭК. Вызов машины по этой технологии осуществляется только после подачи отдельного "Заказа на машину".
    - При подаче "Заказа на перевозку" (pickupType = 4) реквизиты с требованиями к машине забора заполнять необходимо, но они будут проигнорированы, требования к машине имеет смысл передавать при подаче "Заказа на машину". Адрес забора в "Заказе на перевозку" и "Заказе на машину" должны в точности совпадать.
    - Возможность забора груза "день в день" в соответствии с Вашим договором уточняйте у своего закрепленного менеджера или в филиале отправления. Есть ограничения по времени забора и по габаритам, которые зависят от конкретных филиалов. Подача заявок по API на забор груза "день в день" за административными чертами города, а также на праздничные и выходные дни невозможна.
    - Максимальный размер одного файла вложения: **2,00 Мб**, максимальный размер всех файлов: **10,00 Мб**, максимальное количество файлов: **10**
    - Услуга наложенного платежа `services.cashOnDelivery` может быть доступна при заключении договора на оказание данной услуги и для тарифа/продукта EasyWay.
    - Для работы с тарифом EasyWay требуется заключение дополнительного соглашения.
    - Установка соответствующего значения в поле `includeTES` позволяет настраивать включение транспортно-экспедиционных услуг (ТЭУ) в сумму наложенного платежа (НП) для каждого груза или исключение ТЭУ из суммы НП: `true`— за услуги платит отправитель из суммы НП, `false`— за услуги платит получатель сверх суммы НП
    - ID склада населенного пункта (с отбором по разрешенным габаритам можно получить методом [`/branches/nearestdepartments/`](#tag/branches/POST/branches/nearestdepartments/), возвращающим ближайшие отделения к переданному в запрос адресу. Или самостоятельно выбирать удобное отделение/склад из ответа метода [`/branches/all/`](#tag/branches/POST/branches/all/) (поле `branches[].divisions[].warehouses[].id`). Обращайте внимание на разрешенные типы операций складов и ограничения по габаритам (поле `branches[].divisions[].warehouses[].kindsOfTransportation[].description`, `type`, `operations[]`)
    - Быстро получить ID склада основного отделения любого филиала можно используя метод [`/branches/findzonebyaddress/`](#tag/branches/POST/branches/findzonebyaddress/). В ответе метода реквизит `mainWarehouseId`. Основное отделение является центральным складом конкретного филиала, из которого можно заказать доставку до адреса или ПВЗ, который относится к зоне обслуживаемого филиала.
    - При указании идентификатора склада `receiver.warehouseId` следует помнить, что он будет проигнорирован, если заказана услуга доставки
    - `isDocumentsReturn`— при заказанной услуге "Возврат документов" создается отдельный груз "Возвратные документы", который направляется в отделение-отправитель. При необходимости клиент может отдельно заказать доставку этого груза по нужному адресу
    - `common.applicationDate, receiver.avisationDateTime, receiver.dateOfDelivery` При передаче выполняется проверка на возможность выполнения заявок в указанные даты по процессам компании
    - `receiver.identityCard.type` в значении 0 (Без предоставления документа) подразумевает, что идентификация получателя (доступна по договору оферты) будет произведена с использованием кода СМС. Ограничения на использование данного способа идентификации описаны [здесь](https://pecom.ru/services/additional-features/upr-vidacha/)
    - Реквизит `"paymentCity"` рекомендуется передавать только в некоторых случаях, описанных ниже. При передаче `"paymentCity"` в нём ожидается указание наименования филиала оплаты. "Филиал оплаты" - филиал ПЭК, в котором плательщик за услугу ПЭК будет получать оригиналы закрывающих бухгалтерских документов: УПД, отчёт по страхованию и т.п. Филиал оплаты также определяет возможность применения к грузу некоторых назначенных контрагенту скидок и сервисов.
    
    `"paymentCity"` обязателен только при указании плательщиком "третьего лица" (`type=3`)!
    
    Если плательщиками указаны Отправитель (`type=1`) или Получатель (`type=2`), то `"paymentCity"` следует передавать ТОЛЬКО в следующих случаях:
     * плательщиком за услугу указан Отправитель (`type=1`) и Филиал оплаты, отличается от филиала отправления,
     * плательщиком за услугу указан Получатель (`type=2`) и Филиал оплаты, отличается от филиала получения.
    По умолчанию, если Плательщик - отправитель, то Филиалом оплаты будет указан Филиал отправления; если Плательщик - получатель, то Филиал получения.
    
    Наименование филиала можно получить в ответе методов [`/branches/all/`](#tag/branches/POST/branches/all/) в поле `branches[].title` или [`/branches/findzonebyaddress`](#tag/branches/POST/branches/findzonebyaddress/) в поле `branchTitle`
    - [Архив с примерами минимальных запросов CargoPickup (.zip, 6Кб)](https://kabinet.pecom.ru/UserData/Api/%D0%90%D1%80%D1%85%D0%B8%D0%B2%20%D1%81%20%D0%BF%D1%80%D0%B8%D0%BC%D0%B5%D1%80%D0%B0%D0%BC%D0%B8%20%D0%BC%D0%B8%D0%BD%D0%B8%D0%BC%D0%B0%D0%BB%D1%8C%D0%BD%D1%8B%D1%85%20%D0%B7%D0%B0%D0%BF%D1%80%D0%BE%D1%81%D0%BE%D0%B2%20CARGOPICKUP.zip?v=134222797038175447)
    *
    * @param \glook\PecomSdk\Generated\Model\CargoPickupSubmitRequest $requestBody 
    */
    public function __construct(\glook\PecomSdk\Generated\Model\CargoPickupSubmitRequest $requestBody)
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
        return '/cargopickup/submit/';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \glook\PecomSdk\Generated\Model\CargoPickupSubmitRequest) {
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
     * @throws \glook\PecomSdk\Generated\Exception\CargopickupSubmitBadRequestException
     * @throws \glook\PecomSdk\Generated\Exception\CargopickupSubmitForbiddenException
     * @throws \glook\PecomSdk\Generated\Exception\CargopickupSubmitInternalServerErrorException
     * @throws \glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\glook\PecomSdk\Generated\Model\CargoPickupSubmitResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'glook\\PecomSdk\\Generated\\Model\\CargoPickupSubmitResponse', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \glook\PecomSdk\Generated\Exception\CargopickupSubmitBadRequestException($serializer->deserialize($body, 'glook\\PecomSdk\\Generated\\Model\\CommonErrorEnvelope', 'json'));
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \glook\PecomSdk\Generated\Exception\CargopickupSubmitForbiddenException($serializer->deserialize($body, 'glook\\PecomSdk\\Generated\\Model\\CommonErrorEnvelope', 'json'));
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \glook\PecomSdk\Generated\Exception\CargopickupSubmitInternalServerErrorException($serializer->deserialize($body, 'glook\\PecomSdk\\Generated\\Model\\CommonErrorEnvelope', 'json'));
        }
        throw new \glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array('BasicAuth');
    }
}