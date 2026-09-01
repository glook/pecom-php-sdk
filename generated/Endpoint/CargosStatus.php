<?php

namespace glook\PecomSdk\Generated\Endpoint;

use glook\PecomSdk\Generated\Exception\CargosStatusBadRequestException;
use glook\PecomSdk\Generated\Exception\CargosStatusForbiddenException;
use glook\PecomSdk\Generated\Exception\CargosStatusInternalServerErrorException;
use glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException;
use glook\PecomSdk\Generated\Model\CargosStatusRequest;
use glook\PecomSdk\Generated\Model\CargosStatusResponse;
use glook\PecomSdk\Generated\Runtime\Client\BaseEndpoint;
use glook\PecomSdk\Generated\Runtime\Client\Endpoint;
use glook\PecomSdk\Generated\Runtime\Client\EndpointTrait;
use Symfony\Component\Serializer\SerializerInterface;

class CargosStatus extends BaseEndpoint implements Endpoint
{
    use EndpointTrait;

    /**
     * - Максимальное количество кодов грузов в одном запросе: **15**
     * - Возможные значения поля `cargos[].info.cargoStatus` (статус груза): `Аннулировано до приемки груза`, `Заявка на забор зарегистрирована`, `Ожидается передача груза от отправителя`, `Принят к перевозке`, `Принят на ПВЗ`, `Возвращен отправителю`, `Оформлен`, `В пути`, `В пути на терминал`, `Прибыл`, `Прибыл частично`, `Разгружается. Ожидайте оповещения`, `Выполняется адресная доставка`, `Выдан получателю`, `Доставлен получателю`, `Отправлен на возврат`, `Утилизирован`, `Изъят на таможне`, `Возвращен отправителю` , `Выдан ( мест { количество_мест } из { количество_мест } )`
     * - Для груза, который является возвратом документов по другому грузу, в ответе возвращается поле `cargos[].cargo.parentCargoCode` с кодом исходного груза.
     * - Возможные значения поля `cargos[].info.cargoStatus` (id статуса груза): [`/cargos/statustables/`](#cargos_statustables)
     * - Поле `intakeAddress` будет заполнено только для грузов с забором.
     */
    public function __construct(CargosStatusRequest $requestBody)
    {
        $this->body = $requestBody;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/cargos/status/';
    }

    public function getBody(SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof CargosStatusRequest) {
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
     * @return CargosStatusResponse
     *
     * @throws CargosStatusBadRequestException
     * @throws CargosStatusForbiddenException
     * @throws CargosStatusInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    protected function transformResponseBody(string $body, int $status, SerializerInterface $serializer, ?string $contentType = null)
    {
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'glook\PecomSdk\Generated\Model\CargosStatusResponse', 'json');
        }
        if (false === is_null($contentType) && (400 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new CargosStatusBadRequestException($serializer->deserialize($body, 'glook\PecomSdk\Generated\Model\CommonErrorEnvelope', 'json'));
        }
        if (false === is_null($contentType) && (403 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new CargosStatusForbiddenException($serializer->deserialize($body, 'glook\PecomSdk\Generated\Model\CommonErrorEnvelope', 'json'));
        }
        if (false === is_null($contentType) && (500 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new CargosStatusInternalServerErrorException($serializer->deserialize($body, 'glook\PecomSdk\Generated\Model\CommonErrorEnvelope', 'json'));
        }

        throw new UnexpectedStatusCodeException($status, $body);
    }
}
