<?php

namespace glook\PecomSdk\Generated\Endpoint;

use glook\PecomSdk\Generated\Exception\CalculatorCalculatepriceBadRequestException;
use glook\PecomSdk\Generated\Exception\CalculatorCalculatepriceForbiddenException;
use glook\PecomSdk\Generated\Exception\CalculatorCalculatepriceInternalServerErrorException;
use glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException;
use glook\PecomSdk\Generated\Model\CalculatePriceRequest;
use glook\PecomSdk\Generated\Model\CalculatePriceResponse;
use glook\PecomSdk\Generated\Runtime\Client\BaseEndpoint;
use glook\PecomSdk\Generated\Runtime\Client\Endpoint;
use glook\PecomSdk\Generated\Runtime\Client\EndpointTrait;
use Symfony\Component\Serializer\SerializerInterface;

class CalculatorCalculateprice extends BaseEndpoint implements Endpoint
{
    use EndpointTrait;

    /**
     * - [Общие рекомендации по передаче адреса забора/доставки в запрос при интеграции с транспортной компанией](https://kabinet.pecom.ru/UserData/Api/%D0%9E%D0%B1%D1%89%D0%B8%D0%B5%20%D1%80%D0%B5%D0%BA%D0%BE%D0%BC%D0%B5%D0%BD%D0%B4%D0%B0%D1%86%D0%B8%D0%B8%20%D0%BF%D0%BE%20%D0%BF%D0%B5%D1%80%D0%B5%D0%B4%D0%B0%D1%87%D0%B5%20%D0%B0%D0%B4%D1%80%D0%B5%D1%81%D0%B0%20%D0%B2%20%D0%B7%D0%B0%D0%BF%D1%80%D0%BE%D1%81%20%D0%BF%D1%80%D0%B8%20%D0%B8%D0%BD%D1%82%D0%B5%D0%B3%D1%80%D0%B0%D1%86%D0%B8%D0%B8.docx)
     * - Выбор адреса отправления и адреса получения осуществляется по следующей логике: если заказана услуга забора/доставки, то расчет стоимости ведется по координатам напрямую переданным в запрос (параметр `"coordinates"` блоков `pickup` / `delivery`), или координатам, полученным по переданной строке адреса (параметр `"address"` блоков `pickup` / `delivery`). Все прочие параметры определяющие адреса будут проигнорированы.
     * - Если услуга забора/доставки не заказана, то необходимо передавать ID склада отправления/назначения (параметр `senderWarehouseId` / `receiverWarehouseId`).
     * - ID склада населенного пункта (с отбором по разрешенным габаритам можно получить методом [`/branches/nearestdepartments`](#tag/branches/POST/branches/nearestdepartments/), возвращающим ближайшие отделения к переданному в запрос адресу. Или самостоятельно выбирать удобное отделение/склад из ответа метода [`/branches/all`](#tag/branches/POST/branches/all/) (поле `branches[].divisions[].warehouses[].id`), при этом необходимо учитывать доступность складов по габаритам и разрешенных для них операций.
     * - Быстро получить ID склада основного отделения любого филиала можно используя метод [`/branches/findzonebyaddress`](#tag/branches/POST/branches/findzonebyaddress/). в ответе метода реквизит `mainWarehouseId`. Основное отделение является центральным складом конкретного филиала, из которого можно дозаказать доставку до адреса или ПВЗ, который относится к зоне обслуживаемого филиала.
     * Например, по адресу «Самарская область, город Отрадный», основным является отделение филиала «Самара» по адресу: ул. Земеца, д. 32 литера 354, так как город Отрадный обслуживает филиал «Самара».
     * - Объекты со стоимостью услуг для разных видов перевозки возвращаются отдельно в массиве `transfers`.
     * Тип перевозки указывается в поле объекта `transfers[].type`; 3 соответствует автоперевозке, 1 — авиа.
     * - Сроки авиаперевозки могут указываться несколькими значениями, для разных вариантов времени сдачи груза на склад отправителем.
     * В ответе метод возвращает массив данных по времени приемки груза — `transportingTimes`.
     * Количество элементов в массивах сроков перевозки `commonTerms[].transporting` и
     * перевозки с доставкой `commonTerms[].transportingWithDelivery` равно количеству элементов в данном массиве `transportingTimes`.
     * Чтобы определить ориентировочный срок доставки, нужно сначала выбрать элемент массива данных по времени приемки груза `transportingTimes` со временем, ранее которого груз был сдан на склад.
     * После этого ориентировочный срок доставки можно смотреть в соответствующих элементах массивов `commonTerms[].transporting` и `commonTerms[].transportingWithDelivery`.
     * - В массиве `cargos` нужно передавать информацию по каждому грузоместу груза, заполняя несколько элементов массива.
     * Каждый элемент массива будет восприниматься, как отдельное грузоместо одного груза.
     * Если Вам известны габариты и вес каждого грузоместа, то передавайте Длину, Ширину, Высоту и Вес.
     * Если Вам известны только общие габариты всего груза (Объём, Вес, Максимальный габарит и количество мест) и не известны вес и габариты каждого грузоместа, то передавайте на вход столько элементов массива - сколько мест.
     * В каждом элементе массива указывайте средние Вес и Объём грузоместа (разделите общий вес груза и общий объём груза на кол-во мест) и Максимальный габарит грузоместа.
     * Важно! Признак `isHP` в калькуляторе рассчитывается всегда по грузу в целом - если хотя бы у одного грузоместа значение будет true, то защитная транспортировочная упаковка будет рассчитана для всего груза.
     * - Параметр `needReturnDocuments` необязательный. Выберите, если необходим возврат документов с подписью и печатью получателя, подтверждающих, что груз им получен. [Подробнее](https://pecom.ru/services/additional-features/vozvrat-dokumentov/).
     * - Параметр `needArrangeTransportationDocuments` необязательный. Выберите, чтобы расчитать передачу вместе с грузом комплекта сопроводительных документов, которые будут выданы грузополучателю вместе с грузом. [Подробнее](https://pecom.ru/services/additional-features/perevozka-soprovoditelnykh-dokumentov/).
     * - Если по направлению, продукту и прочим параметрам по грузу будут застрахованы сроки перевозки и сам груз, то в ответе будет услуга с названием в поле info: "Страхование груза и срока", если будет застрахован только груз, то будет название "Страхование".
     * - [Архив с примерами минимальных запросов CalculatePrice (.zip, 2Кб)](https://kabinet.pecom.ru/UserData/Api/%D0%90%D1%80%D1%85%D0%B8%D0%B2%20%D1%81%20%D0%BF%D1%80%D0%B8%D0%BC%D0%B5%D1%80%D0%B0%D0%BC%D0%B8%20%D0%BC%D0%B8%D0%BD%D0%B8%D0%BC%D0%B0%D0%BB%D1%8C%D0%BD%D1%8B%D1%85%20%D0%B7%D0%B0%D0%BF%D1%80%D0%BE%D1%81%D0%BE%D0%B2%20CalculatePrice.zip?v=134222797029825469).
     */
    public function __construct(CalculatePriceRequest $requestBody)
    {
        $this->body = $requestBody;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/calculator/calculateprice/';
    }

    public function getBody(SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof CalculatePriceRequest) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }

        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    public function getAuthenticationScopes(): array
    {
        return ['BasicAuth'];
    }

    /**
     * @return CalculatePriceResponse
     *
     * @throws CalculatorCalculatepriceBadRequestException
     * @throws CalculatorCalculatepriceForbiddenException
     * @throws CalculatorCalculatepriceInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    protected function transformResponseBody(string $body, int $status, SerializerInterface $serializer, ?string $contentType = null)
    {
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'glook\PecomSdk\Generated\Model\CalculatePriceResponse', 'json');
        }
        if (false === is_null($contentType) && (400 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new CalculatorCalculatepriceBadRequestException($serializer->deserialize($body, 'glook\PecomSdk\Generated\Model\ValidationError', 'json'));
        }
        if (false === is_null($contentType) && (403 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new CalculatorCalculatepriceForbiddenException($serializer->deserialize($body, 'glook\PecomSdk\Generated\Model\CommonErrorEnvelope', 'json'));
        }
        if (false === is_null($contentType) && (500 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new CalculatorCalculatepriceInternalServerErrorException($serializer->deserialize($body, 'glook\PecomSdk\Generated\Model\CommonErrorEnvelope', 'json'));
        }

        throw new UnexpectedStatusCodeException($status, $body);
    }
}
