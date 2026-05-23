<?php

namespace glook\PecomSdk\Generated\Endpoint;

use glook\PecomSdk\Generated\Exception\ReceiversUpdateBadRequestException;
use glook\PecomSdk\Generated\Exception\ReceiversUpdateForbiddenException;
use glook\PecomSdk\Generated\Exception\ReceiversUpdateInternalServerErrorException;
use glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException;
use glook\PecomSdk\Generated\Model\ReceiversSuccessResponse;
use glook\PecomSdk\Generated\Model\ReceiverUpdateRequest;
use glook\PecomSdk\Generated\Runtime\Client\BaseEndpoint;
use glook\PecomSdk\Generated\Runtime\Client\Endpoint;
use glook\PecomSdk\Generated\Runtime\Client\EndpointTrait;
use Symfony\Component\Serializer\SerializerInterface;

class ReceiversUpdate extends BaseEndpoint implements Endpoint
{
    use EndpointTrait;

    /**
     * Обязательно указывать в запросе код получателя в поле `code`
     * Остальные поля необязательны, следует указывать только значения полей, которые нужно изменить
     * Значения необязательных полей `inn, address, person` можно очистить с помощью запроса,
     * для этого надо установить соответствующий признак очистки поля (один из: `clearInn, clearAddress, clearPerson`).
     * При этом недопустимо в одном запросе указывать и новое значение, и признак очистки для одного и того же поля.
     */
    public function __construct(ReceiverUpdateRequest $requestBody)
    {
        $this->body = $requestBody;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/receivers/update/';
    }

    public function getBody(SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof ReceiverUpdateRequest) {
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
     * @return null|ReceiversSuccessResponse
     *
     * @throws ReceiversUpdateBadRequestException
     * @throws ReceiversUpdateForbiddenException
     * @throws ReceiversUpdateInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    protected function transformResponseBody(string $body, int $status, SerializerInterface $serializer, ?string $contentType = null)
    {
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'glook\PecomSdk\Generated\Model\ReceiversSuccessResponse', 'json');
        }
        if (false === is_null($contentType) && (400 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new ReceiversUpdateBadRequestException($serializer->deserialize($body, 'glook\PecomSdk\Generated\Model\CommonErrorEnvelope', 'json'));
        }
        if (false === is_null($contentType) && (403 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new ReceiversUpdateForbiddenException($serializer->deserialize($body, 'glook\PecomSdk\Generated\Model\CommonErrorEnvelope', 'json'));
        }
        if (false === is_null($contentType) && (500 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new ReceiversUpdateInternalServerErrorException($serializer->deserialize($body, 'glook\PecomSdk\Generated\Model\CommonErrorEnvelope', 'json'));
        }

        throw new UnexpectedStatusCodeException($status, $body);
    }
}
