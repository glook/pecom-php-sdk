<?php

namespace glook\PecomSdk\Generated\Endpoint;

use glook\PecomSdk\Generated\Exception\BranchesDepartmentslimitBadRequestException;
use glook\PecomSdk\Generated\Exception\BranchesDepartmentslimitForbiddenException;
use glook\PecomSdk\Generated\Exception\BranchesDepartmentslimitInternalServerErrorException;
use glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException;
use glook\PecomSdk\Generated\Model\BranchesDepartmentslimitPostBody;
use glook\PecomSdk\Generated\Model\BranchesDepartmentslimitPostResponse200;
use glook\PecomSdk\Generated\Runtime\Client\BaseEndpoint;
use glook\PecomSdk\Generated\Runtime\Client\Endpoint;
use glook\PecomSdk\Generated\Runtime\Client\EndpointTrait;
use Symfony\Component\Serializer\SerializerInterface;

class BranchesDepartmentslimit extends BaseEndpoint implements Endpoint
{
    use EndpointTrait;

    /**
     * Метод возвращает максимально-допустимые значения ВГХ груза для тарифа "Express Автоперевозка" между указанными филиалами или складами. Результат возвращается в виде структуры.
     * - Метод не проверяет наличие маршрута перевозки между филиалами.
     * - Если возвращается пустой ответ — значит для тарифа "Express Автоперевозка" нет возможности перевозить груз между указанными филиалами (складами).
     * - Идентификаторы филиалов и складов отправителя/ получателя можно получить методом [`/branches/nearestdepartments/`](#tag/branches/POST/branches/nearestdepartments/) (в ответе метода `freeDepartments.branchId` и `freeDepartments.warehouseId`)
     */
    public function __construct(BranchesDepartmentslimitPostBody $requestBody)
    {
        $this->body = $requestBody;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/branches/departmentslimit/';
    }

    public function getBody(SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof BranchesDepartmentslimitPostBody) {
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
     * @return BranchesDepartmentslimitPostResponse200
     *
     * @throws BranchesDepartmentslimitBadRequestException
     * @throws BranchesDepartmentslimitForbiddenException
     * @throws BranchesDepartmentslimitInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    protected function transformResponseBody(string $body, int $status, SerializerInterface $serializer, ?string $contentType = null)
    {
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'glook\PecomSdk\Generated\Model\BranchesDepartmentslimitPostResponse200', 'json');
        }
        if (false === is_null($contentType) && (400 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new BranchesDepartmentslimitBadRequestException($serializer->deserialize($body, 'glook\PecomSdk\Generated\Model\CommonErrorEnvelope', 'json'));
        }
        if (false === is_null($contentType) && (403 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new BranchesDepartmentslimitForbiddenException($serializer->deserialize($body, 'glook\PecomSdk\Generated\Model\CommonErrorEnvelope', 'json'));
        }
        if (false === is_null($contentType) && (500 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new BranchesDepartmentslimitInternalServerErrorException($serializer->deserialize($body, 'glook\PecomSdk\Generated\Model\CommonErrorEnvelope', 'json'));
        }

        throw new UnexpectedStatusCodeException($status, $body);
    }
}
