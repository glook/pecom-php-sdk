<?php

namespace glook\PecomSdk\Generated\Endpoint;

use glook\PecomSdk\Generated\Exception\BranchesCheckpickupdateBadRequestException;
use glook\PecomSdk\Generated\Exception\BranchesCheckpickupdateForbiddenException;
use glook\PecomSdk\Generated\Exception\BranchesCheckpickupdateInternalServerErrorException;
use glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException;
use glook\PecomSdk\Generated\Model\BranchesCheckpickupdatePostBody;
use glook\PecomSdk\Generated\Model\BranchesCheckpickupdatePostResponse200;
use glook\PecomSdk\Generated\Runtime\Client\BaseEndpoint;
use glook\PecomSdk\Generated\Runtime\Client\Endpoint;
use glook\PecomSdk\Generated\Runtime\Client\EndpointTrait;
use Symfony\Component\Serializer\SerializerInterface;

class BranchesCheckpickupdate extends BaseEndpoint implements Endpoint
{
    use EndpointTrait;

    /**
     * Метод позволяет определить только возможность забора груза в указанную дату и выводит массив доступных дат до и после указанной даты.
     * - Если необходимо проверить, действует ли льготный тариф на забор по запрошенному адресу в указанную дату, рекомендуем использовать метод [`/calculator/checkdeliverydate/.`](#tag/calculator/POST/calculator/checkdeliverydate/)
     */
    public function __construct(BranchesCheckpickupdatePostBody $requestBody)
    {
        $this->body = $requestBody;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/branches/checkpickupdate/';
    }

    public function getBody(SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof BranchesCheckpickupdatePostBody) {
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
     * @return BranchesCheckpickupdatePostResponse200
     *
     * @throws BranchesCheckpickupdateBadRequestException
     * @throws BranchesCheckpickupdateForbiddenException
     * @throws BranchesCheckpickupdateInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    protected function transformResponseBody(string $body, int $status, SerializerInterface $serializer, ?string $contentType = null)
    {
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'glook\PecomSdk\Generated\Model\BranchesCheckpickupdatePostResponse200', 'json');
        }
        if (false === is_null($contentType) && (400 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new BranchesCheckpickupdateBadRequestException($serializer->deserialize($body, 'glook\PecomSdk\Generated\Model\CommonErrorEnvelope', 'json'));
        }
        if (false === is_null($contentType) && (403 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new BranchesCheckpickupdateForbiddenException($serializer->deserialize($body, 'glook\PecomSdk\Generated\Model\CommonErrorEnvelope', 'json'));
        }
        if (false === is_null($contentType) && (500 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new BranchesCheckpickupdateInternalServerErrorException($serializer->deserialize($body, 'glook\PecomSdk\Generated\Model\CommonErrorEnvelope', 'json'));
        }

        throw new UnexpectedStatusCodeException($status, $body);
    }
}
