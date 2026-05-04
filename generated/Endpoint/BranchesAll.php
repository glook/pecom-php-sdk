<?php

namespace glook\PecomSdk\Generated\Endpoint;

class BranchesAll extends \glook\PecomSdk\Generated\Runtime\Client\BaseEndpoint implements \glook\PecomSdk\Generated\Runtime\Client\Endpoint
{
    /**
    * ID склада отправления/назначения в методе расчёта стоимости [`/calculator/calculateprice/`](#tag/calculator/POST/calculator/calculateprice/) (параметр `senderWarehouseId` / `receiverWarehouseId`) и в методах подачи заявок (параметр `WarehouseId`) можно получить из ответа метода в поле `branches[].divisions[].warehouses[].id`.
    НЕ ПЕРЕДАВАЙТЕ ДРУГИХ ID. При подаче любого другого ID из ответа этого метода, запрос будет отклонён.
    - ОБЯЗАТЕЛЬНО учитывайте доступность подбираемых складов по габаритам и разрешенных для них операций. Ограничения по габаритам конкретного склада можно получить из ответа метода в полях `branches[].divisions[].warehouses[].maxWeight`, `maxVolume`, `maxWeightPerPlace`, `maxDimension`. Разрешённые операции можно получить из ответа метода в поле `branches[].divisions[].kindsOfTransportation[]`.
    - Обращаем Ваше внимание, что географическая структура отделений ПЭК (города и отделения в них, обслуживаемые конкретным филиалом), отличается от структуры финансовой подчинённости.
    
      * Географическая структура — это какой филиал обслуживает какие города (`branches[].cities[]`) и отделения (`branches[].cities[].divisions[]`). При этом в структуре приведены основные крупные населенные пункты, в то время как доставка до адреса может осуществлена и в мелкие населенные пункты, не указанные в ответе метода. Для определения полной географии перевозки ПЭК рекомендуется использовать методы [`/branches/findzonebyaddress/`](#tag/branches/POST/branches/findzonebyaddress/), [`/branches/findzonebycoordinates/`](#tag/branches/POST/branches/findzonebycoordinates/). Ближайшие к адресу подходящие склады можно выбрать методом: [`/branches/nearestdepartments/`](#tag/branches/POST/branches/nearestdepartments/).
     * Финансовая структура — внутренняя организационная структура ПЭК, используемая для выбора филиала оплаты услуги в методах подачи заявок (реквизит `"paymentCity"`)."."Филиал оплаты" — филиал ПЭК, в котором плательщик за услугу ПЭК будет получать оригиналы закрывающих бухгалтерских документов: УПД, отчёт по страхованию и т.п. Указанные документы можно получить в любом собственном отделении ПЭК (не ПВЗ, см. описание реквизита `"departmentTypeId"`), относящемуся к указанному филиалу оплаты (`branches[].divisions[].warehouses[]`). Филиал оплаты также определяет возможность применения к грузу некоторых назначенных контрагенту скидок и сервисов.
    Таким образом, у одного филиала могут быть различными списки обслуживаемых отделений по географической структуре: `branches[].cities[].divisions[]` и относящихся к нему отделений по финансовой структуре: `branches[].divisions[]`.
    *
    * @param null|\glook\PecomSdk\Generated\Model\BranchesAllPostBody $requestBody 
    */
    public function __construct(?\glook\PecomSdk\Generated\Model\BranchesAllPostBody $requestBody = null)
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
        return '/branches/all/';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \glook\PecomSdk\Generated\Model\BranchesAllPostBody) {
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
     * @throws \glook\PecomSdk\Generated\Exception\BranchesAllBadRequestException
     * @throws \glook\PecomSdk\Generated\Exception\BranchesAllForbiddenException
     * @throws \glook\PecomSdk\Generated\Exception\BranchesAllInternalServerErrorException
     * @throws \glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\glook\PecomSdk\Generated\Model\BranchesAllPostResponse200
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'glook\\PecomSdk\\Generated\\Model\\BranchesAllPostResponse200', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \glook\PecomSdk\Generated\Exception\BranchesAllBadRequestException($serializer->deserialize($body, 'glook\\PecomSdk\\Generated\\Model\\CommonErrorEnvelope', 'json'));
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \glook\PecomSdk\Generated\Exception\BranchesAllForbiddenException($serializer->deserialize($body, 'glook\\PecomSdk\\Generated\\Model\\CommonErrorEnvelope', 'json'));
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \glook\PecomSdk\Generated\Exception\BranchesAllInternalServerErrorException($serializer->deserialize($body, 'glook\\PecomSdk\\Generated\\Model\\CommonErrorEnvelope', 'json'));
        }
        throw new \glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array('BasicAuth');
    }
}