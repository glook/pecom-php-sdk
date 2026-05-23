<?php

namespace glook\PecomSdk\Generated\Endpoint;

use glook\PecomSdk\Generated\Exception\BranchesCountrytypeidentitydocumentBadRequestException;
use glook\PecomSdk\Generated\Exception\BranchesCountrytypeidentitydocumentForbiddenException;
use glook\PecomSdk\Generated\Exception\BranchesCountrytypeidentitydocumentInternalServerErrorException;
use glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException;
use glook\PecomSdk\Generated\Model\BranchesCountrytypeidentitydocumentPostBody;
use glook\PecomSdk\Generated\Model\BranchesCountrytypeidentitydocumentPostResponse200;
use glook\PecomSdk\Generated\Runtime\Client\BaseEndpoint;
use glook\PecomSdk\Generated\Runtime\Client\Endpoint;
use glook\PecomSdk\Generated\Runtime\Client\EndpointTrait;
use Symfony\Component\Serializer\SerializerInterface;

class BranchesCountrytypeidentitydocument extends BaseEndpoint implements Endpoint
{
    use EndpointTrait;

    /**
     * Возвращает допустимые документы, удостоверяющие личность, для страны отправления/получения.
     */
    public function __construct(BranchesCountrytypeidentitydocumentPostBody $requestBody)
    {
        $this->body = $requestBody;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/branches/countrytypeidentitydocument/';
    }

    public function getBody(SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof BranchesCountrytypeidentitydocumentPostBody) {
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
     * @return null|BranchesCountrytypeidentitydocumentPostResponse200
     *
     * @throws BranchesCountrytypeidentitydocumentBadRequestException
     * @throws BranchesCountrytypeidentitydocumentForbiddenException
     * @throws BranchesCountrytypeidentitydocumentInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    protected function transformResponseBody(string $body, int $status, SerializerInterface $serializer, ?string $contentType = null)
    {
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'glook\PecomSdk\Generated\Model\BranchesCountrytypeidentitydocumentPostResponse200', 'json');
        }
        if (false === is_null($contentType) && (400 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new BranchesCountrytypeidentitydocumentBadRequestException($serializer->deserialize($body, 'glook\PecomSdk\Generated\Model\CommonErrorEnvelope', 'json'));
        }
        if (false === is_null($contentType) && (403 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new BranchesCountrytypeidentitydocumentForbiddenException($serializer->deserialize($body, 'glook\PecomSdk\Generated\Model\CommonErrorEnvelope', 'json'));
        }
        if (false === is_null($contentType) && (500 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new BranchesCountrytypeidentitydocumentInternalServerErrorException($serializer->deserialize($body, 'glook\PecomSdk\Generated\Model\CommonErrorEnvelope', 'json'));
        }

        throw new UnexpectedStatusCodeException($status, $body);
    }
}
