<?php

namespace glook\PecomSdk\Generated\Endpoint;

use glook\PecomSdk\Generated\Exception\AccountingdocumentsListforcounterpartyBadRequestException;
use glook\PecomSdk\Generated\Exception\AccountingdocumentsListforcounterpartyForbiddenException;
use glook\PecomSdk\Generated\Exception\AccountingdocumentsListforcounterpartyInternalServerErrorException;
use glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException;
use glook\PecomSdk\Generated\Model\AccountingDocumentListResponse;
use glook\PecomSdk\Generated\Model\AccountingdocumentsListforcounterpartyPostBody;
use glook\PecomSdk\Generated\Runtime\Client\BaseEndpoint;
use glook\PecomSdk\Generated\Runtime\Client\Endpoint;
use glook\PecomSdk\Generated\Runtime\Client\EndpointTrait;
use Symfony\Component\Serializer\SerializerInterface;

class AccountingdocumentsListforcounterparty extends BaseEndpoint implements Endpoint
{
    use EndpointTrait;

    /**
     * Метод позволяет получить список бухгалтерских документов за указанный период по контрагенту из своего ЛК ПЭК и по указанному филиалу оплаты
     * - Максимальная длительность периода для запроса — **60** календарных дней.
     */
    public function __construct(AccountingdocumentsListforcounterpartyPostBody $requestBody)
    {
        $this->body = $requestBody;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/accountingdocuments/listforcounterparty/';
    }

    public function getBody(SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof AccountingdocumentsListforcounterpartyPostBody) {
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
     * @return AccountingDocumentListResponse
     *
     * @throws AccountingdocumentsListforcounterpartyBadRequestException
     * @throws AccountingdocumentsListforcounterpartyForbiddenException
     * @throws AccountingdocumentsListforcounterpartyInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    protected function transformResponseBody(string $body, int $status, SerializerInterface $serializer, ?string $contentType = null)
    {
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'glook\PecomSdk\Generated\Model\AccountingDocumentListResponse', 'json');
        }
        if (false === is_null($contentType) && (400 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new AccountingdocumentsListforcounterpartyBadRequestException($serializer->deserialize($body, 'glook\PecomSdk\Generated\Model\CommonErrorEnvelope', 'json'));
        }
        if (false === is_null($contentType) && (403 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new AccountingdocumentsListforcounterpartyForbiddenException($serializer->deserialize($body, 'glook\PecomSdk\Generated\Model\CommonErrorEnvelope', 'json'));
        }
        if (false === is_null($contentType) && (500 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new AccountingdocumentsListforcounterpartyInternalServerErrorException($serializer->deserialize($body, 'glook\PecomSdk\Generated\Model\CommonErrorEnvelope', 'json'));
        }

        throw new UnexpectedStatusCodeException($status, $body);
    }
}
