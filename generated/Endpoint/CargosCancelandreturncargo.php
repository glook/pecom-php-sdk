<?php

namespace glook\PecomSdk\Generated\Endpoint;

use glook\PecomSdk\Generated\Exception\CargosCancelandreturncargoBadRequestException;
use glook\PecomSdk\Generated\Exception\CargosCancelandreturncargoForbiddenException;
use glook\PecomSdk\Generated\Exception\CargosCancelandreturncargoInternalServerErrorException;
use glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException;
use glook\PecomSdk\Generated\Model\CancelAndReturnResponse;
use glook\PecomSdk\Generated\Model\CargosCancelAndReturnRequest;
use glook\PecomSdk\Generated\Runtime\Client\BaseEndpoint;
use glook\PecomSdk\Generated\Runtime\Client\Endpoint;
use glook\PecomSdk\Generated\Runtime\Client\EndpointTrait;
use Symfony\Component\Serializer\SerializerInterface;

class CargosCancelandreturncargo extends BaseEndpoint implements Endpoint
{
    use EndpointTrait;

    /**
     * - Метод позволяет автоматически перенаправить груз отправителю с момента оформления груза на складе в городе отправления и до момента выдачи получателю
     * - Выполняется по одному конкретному грузу
     * - В процессе движения груза в ПЭК существуют интервалы времени, когда возврат отправителю оформить не возможно. Например: до того как груз принят на склад ПЭК и оформлен к перевозке или если груз уже на последней миле при доставке получателю, в этом случае метод будет сообщать о неуспешной попытке оформления возврата
     */
    public function __construct(CargosCancelAndReturnRequest $requestBody)
    {
        $this->body = $requestBody;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/cargos/cancelandreturncargo/';
    }

    public function getBody(SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof CargosCancelAndReturnRequest) {
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
     * @return CancelAndReturnResponse
     *
     * @throws CargosCancelandreturncargoBadRequestException
     * @throws CargosCancelandreturncargoForbiddenException
     * @throws CargosCancelandreturncargoInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    protected function transformResponseBody(string $body, int $status, SerializerInterface $serializer, ?string $contentType = null)
    {
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'glook\PecomSdk\Generated\Model\CancelAndReturnResponse', 'json');
        }
        if (false === is_null($contentType) && (400 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new CargosCancelandreturncargoBadRequestException($serializer->deserialize($body, 'glook\PecomSdk\Generated\Model\CommonErrorEnvelope', 'json'));
        }
        if (false === is_null($contentType) && (403 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new CargosCancelandreturncargoForbiddenException($serializer->deserialize($body, 'glook\PecomSdk\Generated\Model\CommonErrorEnvelope', 'json'));
        }
        if (false === is_null($contentType) && (500 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new CargosCancelandreturncargoInternalServerErrorException($serializer->deserialize($body, 'glook\PecomSdk\Generated\Model\CommonErrorEnvelope', 'json'));
        }

        throw new UnexpectedStatusCodeException($status, $body);
    }
}
