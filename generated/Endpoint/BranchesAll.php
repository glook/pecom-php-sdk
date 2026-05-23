<?php

namespace glook\PecomSdk\Generated\Endpoint;

use glook\PecomSdk\Generated\Exception\BranchesAllBadRequestException;
use glook\PecomSdk\Generated\Exception\BranchesAllForbiddenException;
use glook\PecomSdk\Generated\Exception\BranchesAllInternalServerErrorException;
use glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException;
use glook\PecomSdk\Generated\Model\BranchesAllPostBody;
use glook\PecomSdk\Generated\Model\BranchesAllPostResponse200;
use glook\PecomSdk\Generated\Runtime\Client\BaseEndpoint;
use glook\PecomSdk\Generated\Runtime\Client\Endpoint;
use glook\PecomSdk\Generated\Runtime\Client\EndpointTrait;
use Symfony\Component\Serializer\SerializerInterface;

class BranchesAll extends BaseEndpoint implements Endpoint
{
    use EndpointTrait;

    /**
     * ID склада отправления/назначения в методе расчёта стоимости [`/calculator/calculateprice/`](#tag/calculator/POST/calculator/calculateprice/) (параметр `senderWarehouseId` / `receiverWarehouseId`) и в методах подачи заявок (параметр `WarehouseId`) можно получить из ответа метода в поле `branches[].divisions[].warehouses[].id`.
     * НЕ ПЕРЕДАВАЙТЕ ДРУГИХ ID. При подаче любого другого ID из ответа этого метода, запрос будет отклонён.
     * - ОБЯЗАТЕЛЬНО учитывайте доступность подбираемых складов по габаритам и разрешенных для них операций. Ограничения по габаритам конкретного склада можно получить из ответа метода в полях `branches[].divisions[].warehouses[].maxWeight`, `maxVolume`, `maxWeightPerPlace`, `maxDimension`. Разрешённые операции можно получить из ответа метода в поле `branches[].divisions[].kindsOfTransportation[]`.
     * - Обращаем Ваше внимание, что географическая структура отделений ПЭК (города и отделения в них, обслуживаемые конкретным филиалом), отличается от структуры финансовой подчинённости.
     *
     * Географическая структура — это какой филиал обслуживает какие города (`branches[].cities[]`) и отделения (`branches[].cities[].divisions[]`). При этом в структуре приведены основные крупные населенные пункты, в то время как доставка до адреса может осуществлена и в мелкие населенные пункты, не указанные в ответе метода. Для определения полной географии перевозки ПЭК рекомендуется использовать методы [`/branches/findzonebyaddress/`](#tag/branches/POST/branches/findzonebyaddress/), [`/branches/findzonebycoordinates/`](#tag/branches/POST/branches/findzonebycoordinates/). Ближайшие к адресу подходящие склады можно выбрать методом: [`/branches/nearestdepartments/`](#tag/branches/POST/branches/nearestdepartments/).
     * Финансовая структура — внутренняя организационная структура ПЭК, используемая для выбора филиала оплаты услуги в методах подачи заявок (реквизит `"paymentCity"`)."."Филиал оплаты" — филиал ПЭК, в котором плательщик за услугу ПЭК будет получать оригиналы закрывающих бухгалтерских документов: УПД, отчёт по страхованию и т.п. Указанные документы можно получить в любом собственном отделении ПЭК (не ПВЗ, см. описание реквизита `"departmentTypeId"`), относящемуся к указанному филиалу оплаты (`branches[].divisions[].warehouses[]`). Филиал оплаты также определяет возможность применения к грузу некоторых назначенных контрагенту скидок и сервисов.
     * Таким образом, у одного филиала могут быть различными списки обслуживаемых отделений по географической структуре: `branches[].cities[].divisions[]` и относящихся к нему отделений по финансовой структуре: `branches[].divisions[]`.
     */
    public function __construct(BranchesAllPostBody $requestBody)
    {
        $this->body = $requestBody;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/branches/all/';
    }

    public function getBody(SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof BranchesAllPostBody) {
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
     * @return null|BranchesAllPostResponse200
     *
     * @throws BranchesAllBadRequestException
     * @throws BranchesAllForbiddenException
     * @throws BranchesAllInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    protected function transformResponseBody(string $body, int $status, SerializerInterface $serializer, ?string $contentType = null)
    {
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'glook\PecomSdk\Generated\Model\BranchesAllPostResponse200', 'json');
        }
        if (false === is_null($contentType) && (400 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new BranchesAllBadRequestException($serializer->deserialize($body, 'glook\PecomSdk\Generated\Model\CommonErrorEnvelope', 'json'));
        }
        if (false === is_null($contentType) && (403 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new BranchesAllForbiddenException($serializer->deserialize($body, 'glook\PecomSdk\Generated\Model\CommonErrorEnvelope', 'json'));
        }
        if (false === is_null($contentType) && (500 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new BranchesAllInternalServerErrorException($serializer->deserialize($body, 'glook\PecomSdk\Generated\Model\CommonErrorEnvelope', 'json'));
        }

        throw new UnexpectedStatusCodeException($status, $body);
    }
}
