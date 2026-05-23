<?php

namespace glook\PecomSdk\Generated\Endpoint;

use glook\PecomSdk\Generated\Exception\CargosdocumentsOrderBadRequestException;
use glook\PecomSdk\Generated\Exception\CargosdocumentsOrderForbiddenException;
use glook\PecomSdk\Generated\Exception\CargosdocumentsOrderInternalServerErrorException;
use glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException;
use glook\PecomSdk\Generated\Model\CargosdocumentsOrderRequest;
use glook\PecomSdk\Generated\Model\CargosdocumentsOrderResponse;
use glook\PecomSdk\Generated\Runtime\Client\BaseEndpoint;
use glook\PecomSdk\Generated\Runtime\Client\Endpoint;
use glook\PecomSdk\Generated\Runtime\Client\EndpointTrait;
use Symfony\Component\Serializer\SerializerInterface;

class CargosdocumentsOrder extends BaseEndpoint implements Endpoint
{
    use EndpointTrait;

    /**
     * Метод на данный момент позволяет запросить документы "Поручение экспедитора/ Экспедиторская расписка" и "Счет на оплату" по оформленным грузам.
     * - При первом успешном вызове метода по конкретному грузу в ответе будет статус 0 - "Документ запрошен".
     * При повторном вызове и после получения статуса 1 - "Документ готов к скачиванию", получите документ методом [`/CARGOSDOCUMENTS/GETCONTENT/`](#tag/cargosdocuments/POST/cargosdocuments/getcontent/)
     * - Для получения "Счета на оплату" необходимо передать идентификатор контрагента-плательщика `"counterpartGuid"` в системах ПЭК, связанный с ЛК.
     * По грузу должна быть задолженность для этого контрагента-плательщика. `"counterpartGuid"` можно получить методом [`/COUNTERPARTS/CONFIRMEDACCESSTOCOUNTERPARTIES/`](#tag/counterparts/POST/counterparts/confirmedaccesstocounterparties/).
     * - Для получения "Счета на оплату" в формате `"xml"`, необходимо передать уточняющий параметр `"docFormat"` в запросе. Данные счета вернутся в формате **CommerseML** редакции 2.
     * - Есть ограничение на число запросов в сутки для одного логина.
     */
    public function __construct(CargosdocumentsOrderRequest $requestBody)
    {
        $this->body = $requestBody;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/cargosdocuments/order/';
    }

    public function getBody(SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof CargosdocumentsOrderRequest) {
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
     * @return null|CargosdocumentsOrderResponse
     *
     * @throws CargosdocumentsOrderBadRequestException
     * @throws CargosdocumentsOrderForbiddenException
     * @throws CargosdocumentsOrderInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    protected function transformResponseBody(string $body, int $status, SerializerInterface $serializer, ?string $contentType = null)
    {
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'glook\PecomSdk\Generated\Model\CargosdocumentsOrderResponse', 'json');
        }
        if (false === is_null($contentType) && (400 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new CargosdocumentsOrderBadRequestException($serializer->deserialize($body, 'glook\PecomSdk\Generated\Model\CommonErrorEnvelope', 'json'));
        }
        if (false === is_null($contentType) && (403 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new CargosdocumentsOrderForbiddenException($serializer->deserialize($body, 'glook\PecomSdk\Generated\Model\CommonErrorEnvelope', 'json'));
        }
        if (false === is_null($contentType) && (500 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new CargosdocumentsOrderInternalServerErrorException($serializer->deserialize($body, 'glook\PecomSdk\Generated\Model\CommonErrorEnvelope', 'json'));
        }

        throw new UnexpectedStatusCodeException($status, $body);
    }
}
