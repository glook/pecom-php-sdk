<?php

namespace glook\PecomSdk\Generated\Endpoint;

use glook\PecomSdk\Generated\Exception\CounterpartsConnecteddiscountsservicesagreementsBadRequestException;
use glook\PecomSdk\Generated\Exception\CounterpartsConnecteddiscountsservicesagreementsForbiddenException;
use glook\PecomSdk\Generated\Exception\CounterpartsConnecteddiscountsservicesagreementsInternalServerErrorException;
use glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException;
use glook\PecomSdk\Generated\Model\ConnectedDiscountsServicesAgreementsRequest;
use glook\PecomSdk\Generated\Model\ConnectedDiscountsServicesAgreementsResponse;
use glook\PecomSdk\Generated\Runtime\Client\BaseEndpoint;
use glook\PecomSdk\Generated\Runtime\Client\Endpoint;
use glook\PecomSdk\Generated\Runtime\Client\EndpointTrait;
use Symfony\Component\Serializer\SerializerInterface;

class CounterpartsConnecteddiscountsservicesagreements extends BaseEndpoint implements Endpoint
{
    use EndpointTrait;

    /**
     * Метод выводит информацию по подключенным в ПЭК сервисам, скидкам и основным дополнительным соглашениям по конкретному контрагенту. Для работы метода контрагент должен подтвердить, что связан с логином, который указан при авторизации (см. вопрос "Как подтвердить личный кабинет на сайте pecom.ru?" внизу страницы: https://pecom.ru/business/integration/#ltl-ltl)
     *
     * Основные сервисы, доп. соглашения, которые могут повлиять на процесс интеграции с клиентами, и их важные параметры приведены в описании примера ответа метода с необходимыми пояснениями по правилам их использования.
     *
     * Если какая-то запись есть в ответе — значит сервис по контрагенту подключен и действует на момент вызова запроса. Данные по срокам действия необходимо уточнять у своего менеджера ПЭК
     *
     * Массив `params`, выводимый в массиве `specialConditionsWithParams`, в некоторых случаях содержит дополнительную информацию по особенностям применения скидок и сервисов. Пример основных параметров, которые там могут быть приведены, в описании формат ответа. В общем случае для пояснения логики работы тех или иных сервисов и скидок, прямо не представленных в примере ответа метода, необходимо обращаться к Вашему менеджеру ПЭК. API является "витриной" и специалисты по API не имеют достаточных компетенций в консультациях по особенностям всего объема скидок и сервисов.
     */
    public function __construct(ConnectedDiscountsServicesAgreementsRequest $requestBody)
    {
        $this->body = $requestBody;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/counterparts/connecteddiscountsservicesagreements/';
    }

    public function getBody(SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof ConnectedDiscountsServicesAgreementsRequest) {
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
     * @return ConnectedDiscountsServicesAgreementsResponse
     *
     * @throws CounterpartsConnecteddiscountsservicesagreementsBadRequestException
     * @throws CounterpartsConnecteddiscountsservicesagreementsForbiddenException
     * @throws CounterpartsConnecteddiscountsservicesagreementsInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    protected function transformResponseBody(string $body, int $status, SerializerInterface $serializer, ?string $contentType = null)
    {
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'glook\PecomSdk\Generated\Model\ConnectedDiscountsServicesAgreementsResponse', 'json');
        }
        if (false === is_null($contentType) && (400 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new CounterpartsConnecteddiscountsservicesagreementsBadRequestException($serializer->deserialize($body, 'glook\PecomSdk\Generated\Model\CommonErrorEnvelope', 'json'));
        }
        if (false === is_null($contentType) && (403 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new CounterpartsConnecteddiscountsservicesagreementsForbiddenException($serializer->deserialize($body, 'glook\PecomSdk\Generated\Model\CommonErrorEnvelope', 'json'));
        }
        if (false === is_null($contentType) && (500 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new CounterpartsConnecteddiscountsservicesagreementsInternalServerErrorException($serializer->deserialize($body, 'glook\PecomSdk\Generated\Model\CommonErrorEnvelope', 'json'));
        }

        throw new UnexpectedStatusCodeException($status, $body);
    }
}
