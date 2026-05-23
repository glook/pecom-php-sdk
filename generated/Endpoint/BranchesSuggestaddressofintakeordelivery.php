<?php

namespace glook\PecomSdk\Generated\Endpoint;

use glook\PecomSdk\Generated\Exception\BranchesSuggestaddressofintakeordeliveryBadRequestException;
use glook\PecomSdk\Generated\Exception\BranchesSuggestaddressofintakeordeliveryForbiddenException;
use glook\PecomSdk\Generated\Exception\BranchesSuggestaddressofintakeordeliveryInternalServerErrorException;
use glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException;
use glook\PecomSdk\Generated\Model\BranchesAddressRequest;
use glook\PecomSdk\Generated\Model\SuggestAddressResponse;
use glook\PecomSdk\Generated\Runtime\Client\BaseEndpoint;
use glook\PecomSdk\Generated\Runtime\Client\Endpoint;
use glook\PecomSdk\Generated\Runtime\Client\EndpointTrait;
use Symfony\Component\Serializer\SerializerInterface;

class BranchesSuggestaddressofintakeordelivery extends BaseEndpoint implements Endpoint
{
    use EndpointTrait;

    /**
     * Метод позволяет в ИТ системе реализовать быстрый подбор адреса забора/ доставки по аналогии с тем, как это сделано на сайте pecom.ru при подаче заявки. На вход дается строка с частью адреса, в ответе выводятся наиболее похожие варианты. При этом перечень вариантов содержит только адреса зоны доставки/ забора ПЭК.
     * В некоторых случаях отсутствие вариантов адресов может говорить только о том, что адреса еще нет в базе, но забор/ доставка по адресу возможны, если есть забор/ доставка на соседние улицы/ дома.
     * - Не используйте данный метод для проверки доступности адреса, т.к. есть ограничения по числу запросов для всех пользователей в сутки.
     * - Для проверки доступности адреса Забора и Доставки используйте метод [/BRANCHES/FINDZONEBYADDRESS/](#tag/branches/POST/branches/findzonebyaddress/). Правильность адреса можно смотреть в ответе метода /FINDZONEBYADDRESS/ в блоке GeoData. Address. formatted.
     */
    public function __construct(BranchesAddressRequest $requestBody)
    {
        $this->body = $requestBody;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/branches/suggestaddressofintakeordelivery/';
    }

    public function getBody(SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof BranchesAddressRequest) {
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
     * @return null|SuggestAddressResponse
     *
     * @throws BranchesSuggestaddressofintakeordeliveryBadRequestException
     * @throws BranchesSuggestaddressofintakeordeliveryForbiddenException
     * @throws BranchesSuggestaddressofintakeordeliveryInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    protected function transformResponseBody(string $body, int $status, SerializerInterface $serializer, ?string $contentType = null)
    {
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'glook\PecomSdk\Generated\Model\SuggestAddressResponse', 'json');
        }
        if (false === is_null($contentType) && (400 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new BranchesSuggestaddressofintakeordeliveryBadRequestException($serializer->deserialize($body, 'glook\PecomSdk\Generated\Model\CommonErrorEnvelope', 'json'));
        }
        if (false === is_null($contentType) && (403 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new BranchesSuggestaddressofintakeordeliveryForbiddenException($serializer->deserialize($body, 'glook\PecomSdk\Generated\Model\CommonErrorEnvelope', 'json'));
        }
        if (false === is_null($contentType) && (500 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new BranchesSuggestaddressofintakeordeliveryInternalServerErrorException($serializer->deserialize($body, 'glook\PecomSdk\Generated\Model\CommonErrorEnvelope', 'json'));
        }

        throw new UnexpectedStatusCodeException($status, $body);
    }
}
