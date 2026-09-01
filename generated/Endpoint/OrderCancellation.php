<?php

namespace glook\PecomSdk\Generated\Endpoint;

use glook\PecomSdk\Generated\Exception\OrderCancellationBadRequestException;
use glook\PecomSdk\Generated\Exception\OrderCancellationForbiddenException;
use glook\PecomSdk\Generated\Exception\OrderCancellationInternalServerErrorException;
use glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException;
use glook\PecomSdk\Generated\Model\OrderCancellationResult;
use glook\PecomSdk\Generated\Runtime\Client\BaseEndpoint;
use glook\PecomSdk\Generated\Runtime\Client\Endpoint;
use glook\PecomSdk\Generated\Runtime\Client\EndpointTrait;
use Symfony\Component\Serializer\SerializerInterface;

class OrderCancellation extends BaseEndpoint implements Endpoint
{
    use EndpointTrait;

    /**
     * Использовать метод нужно не ранее, чем через 5 – 10 минут после подачи заявки
     * Заявка на забор может быть аннулирована до момента её планирования в маршрутном листе водителя
     * Аннулирование заявок с самопривозом на склад ПЭК не требуется
     *
     * @param string[] $requestBody
     */
    public function __construct(array $requestBody)
    {
        $this->body = $requestBody;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/order/cancellation/';
    }

    public function getBody(SerializerInterface $serializer, $streamFactory = null): array
    {
        if (is_array($this->body)) {
            return [['Content-Type' => ['application/json']], json_encode($this->body)];
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
     * @return OrderCancellationResult[]
     *
     * @throws OrderCancellationBadRequestException
     * @throws OrderCancellationForbiddenException
     * @throws OrderCancellationInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    protected function transformResponseBody(string $body, int $status, SerializerInterface $serializer, ?string $contentType = null)
    {
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'glook\PecomSdk\Generated\Model\OrderCancellationResult[]', 'json');
        }
        if (false === is_null($contentType) && (400 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new OrderCancellationBadRequestException($serializer->deserialize($body, 'glook\PecomSdk\Generated\Model\CommonErrorEnvelope', 'json'));
        }
        if (false === is_null($contentType) && (403 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new OrderCancellationForbiddenException($serializer->deserialize($body, 'glook\PecomSdk\Generated\Model\CommonErrorEnvelope', 'json'));
        }
        if (false === is_null($contentType) && (500 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new OrderCancellationInternalServerErrorException($serializer->deserialize($body, 'glook\PecomSdk\Generated\Model\CommonErrorEnvelope', 'json'));
        }

        throw new UnexpectedStatusCodeException($status, $body);
    }
}
