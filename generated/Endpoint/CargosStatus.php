<?php

namespace glook\PecomSdk\Generated\Endpoint;

class CargosStatus extends \glook\PecomSdk\Generated\Runtime\Client\BaseEndpoint implements \glook\PecomSdk\Generated\Runtime\Client\Endpoint
{
    /**
    * - Максимальное количество кодов грузов в одном запросе: **15**
    - Возможные значения поля `cargos[].info.cargoStatus` (статус груза): `Аннулировано до приемки груза`, `Заявка на забор зарегистрирована`, `Ожидается передача груза от отправителя`, `Принят к перевозке`, `Принят на ПВЗ`, `Возвращен отправителю`, `Оформлен`, `В пути`, `В пути на терминал`, `Прибыл`, `Прибыл частично`, `Разгружается. Ожидайте оповещения`, `Выполняется адресная доставка`, `Выдан получателю`, `Доставлен получателю`, `Отправлен на возврат`, `Утилизирован`, `Изъят на таможне`, `Возвращен отправителю` , `Выдан ( мест { количество_мест } из { количество_мест } )`
    - Для груза, который является возвратом документов по другому грузу, в ответе возвращается поле `cargos[].cargo.parentCargoCode` с кодом исходного груза.
    - Возможные значения поля `cargos[].info.cargoStatus` (id статуса груза): [`/cargos/statustables/`](#cargos_statustables)
    - Поле `intakeAddress` будет заполнено только для грузов с забором.
    *
    * @param \glook\PecomSdk\Generated\Model\CargosStatusRequest $requestBody 
    */
    public function __construct(\glook\PecomSdk\Generated\Model\CargosStatusRequest $requestBody)
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
        return '/cargos/status/';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \glook\PecomSdk\Generated\Model\CargosStatusRequest) {
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
     * @throws \glook\PecomSdk\Generated\Exception\CargosStatusBadRequestException
     * @throws \glook\PecomSdk\Generated\Exception\CargosStatusForbiddenException
     * @throws \glook\PecomSdk\Generated\Exception\CargosStatusInternalServerErrorException
     * @throws \glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\glook\PecomSdk\Generated\Model\CargosStatusResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'glook\\PecomSdk\\Generated\\Model\\CargosStatusResponse', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \glook\PecomSdk\Generated\Exception\CargosStatusBadRequestException($serializer->deserialize($body, 'glook\\PecomSdk\\Generated\\Model\\CommonErrorEnvelope', 'json'));
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \glook\PecomSdk\Generated\Exception\CargosStatusForbiddenException($serializer->deserialize($body, 'glook\\PecomSdk\\Generated\\Model\\CommonErrorEnvelope', 'json'));
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \glook\PecomSdk\Generated\Exception\CargosStatusInternalServerErrorException($serializer->deserialize($body, 'glook\\PecomSdk\\Generated\\Model\\CommonErrorEnvelope', 'json'));
        }
        throw new \glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array('BasicAuth');
    }
}