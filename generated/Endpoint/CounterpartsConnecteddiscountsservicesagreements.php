<?php

namespace glook\PecomSdk\Generated\Endpoint;

class CounterpartsConnecteddiscountsservicesagreements extends \glook\PecomSdk\Generated\Runtime\Client\BaseEndpoint implements \glook\PecomSdk\Generated\Runtime\Client\Endpoint
{
    /**
    * Метод выводит информацию по подключенным в ПЭК сервисам, скидкам и основным дополнительным соглашениям по конкретному контрагенту. Для работы метода контрагент должен подтвердить, что связан с логином, который указан при авторизации (см. вопрос "Как подтвердить личный кабинет на сайте pecom.ru?" внизу страницы: https://pecom.ru/business/integration/#ltl-ltl)
    
    Основные сервисы, доп. соглашения, которые могут повлиять на процесс интеграции с клиентами, и их важные параметры приведены в описании примера ответа метода с необходимыми пояснениями по правилам их использования.
    
    Если какая-то запись есть в ответе — значит сервис по контрагенту подключен и действует на момент вызова запроса. Данные по срокам действия необходимо уточнять у своего менеджера ПЭК
    
    Массив `params`, выводимый в массиве `specialConditionsWithParams`, в некоторых случаях содержит дополнительную информацию по особенностям применения скидок и сервисов. Пример основных параметров, которые там могут быть приведены, в описании формат ответа. В общем случае для пояснения логики работы тех или иных сервисов и скидок, прямо не представленных в примере ответа метода, необходимо обращаться к Вашему менеджеру ПЭК. API является "витриной" и специалисты по API не имеют достаточных компетенций в консультациях по особенностям всего объема скидок и сервисов.
    *
    * @param \glook\PecomSdk\Generated\Model\ConnectedDiscountsServicesAgreementsRequest $requestBody 
    */
    public function __construct(\glook\PecomSdk\Generated\Model\ConnectedDiscountsServicesAgreementsRequest $requestBody)
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
        return '/counterparts/connecteddiscountsservicesagreements/';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \glook\PecomSdk\Generated\Model\ConnectedDiscountsServicesAgreementsRequest) {
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
     * @throws \glook\PecomSdk\Generated\Exception\CounterpartsConnecteddiscountsservicesagreementsBadRequestException
     * @throws \glook\PecomSdk\Generated\Exception\CounterpartsConnecteddiscountsservicesagreementsForbiddenException
     * @throws \glook\PecomSdk\Generated\Exception\CounterpartsConnecteddiscountsservicesagreementsInternalServerErrorException
     * @throws \glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\glook\PecomSdk\Generated\Model\ConnectedDiscountsServicesAgreementsResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'glook\\PecomSdk\\Generated\\Model\\ConnectedDiscountsServicesAgreementsResponse', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \glook\PecomSdk\Generated\Exception\CounterpartsConnecteddiscountsservicesagreementsBadRequestException($serializer->deserialize($body, 'glook\\PecomSdk\\Generated\\Model\\CommonErrorEnvelope', 'json'));
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \glook\PecomSdk\Generated\Exception\CounterpartsConnecteddiscountsservicesagreementsForbiddenException($serializer->deserialize($body, 'glook\\PecomSdk\\Generated\\Model\\CommonErrorEnvelope', 'json'));
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \glook\PecomSdk\Generated\Exception\CounterpartsConnecteddiscountsservicesagreementsInternalServerErrorException($serializer->deserialize($body, 'glook\\PecomSdk\\Generated\\Model\\CommonErrorEnvelope', 'json'));
        }
        throw new \glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array('BasicAuth');
    }
}