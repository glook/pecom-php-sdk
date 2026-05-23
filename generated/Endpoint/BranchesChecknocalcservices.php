<?php

namespace glook\PecomSdk\Generated\Endpoint;

use glook\PecomSdk\Generated\Exception\BranchesChecknocalcservicesBadRequestException;
use glook\PecomSdk\Generated\Exception\BranchesChecknocalcservicesForbiddenException;
use glook\PecomSdk\Generated\Exception\BranchesChecknocalcservicesInternalServerErrorException;
use glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException;
use glook\PecomSdk\Generated\Model\BranchesChecknocalcservicesPostBody;
use glook\PecomSdk\Generated\Model\BranchesChecknocalcservicesPostResponse200Item;
use glook\PecomSdk\Generated\Runtime\Client\BaseEndpoint;
use glook\PecomSdk\Generated\Runtime\Client\Endpoint;
use glook\PecomSdk\Generated\Runtime\Client\EndpointTrait;
use Symfony\Component\Serializer\SerializerInterface;

class BranchesChecknocalcservices extends BaseEndpoint implements Endpoint
{
    use EndpointTrait;

    /**
     * Метод на текущий момент позволяет проверить только услуги Наложенный платеж: GUID = 739293fd-edc7-495d-9e56-6f61ad39bb8c и Выдача по СМС (упрощенная выдача): GUID = ffb40421-4761-11e8-80c9-00155d668927 по конкретному направлению перевозки.
     * - Обращаем ваше внимание, что метод проверяет доступность услуг только по географии. Для проверки возможности использования данных услуг конкретными отправителями и их условия необходимо использовать метод [`/connecteddiscountsservicesagreements/`](#tag/counterparts/POST/counterparts/connecteddiscountsservicesagreements/).
     * - На вход данного метода ожидается ID филиалов отправления и назначения, которые можно получить из метода расчета стоимости или из методов получения географии, при этом для отделений филиал необходимо брать из организационной структуры.
     */
    public function __construct(BranchesChecknocalcservicesPostBody $requestBody)
    {
        $this->body = $requestBody;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/branches/checknocalcservices/';
    }

    public function getBody(SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof BranchesChecknocalcservicesPostBody) {
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
     * @return null|BranchesChecknocalcservicesPostResponse200Item[]
     *
     * @throws BranchesChecknocalcservicesBadRequestException
     * @throws BranchesChecknocalcservicesForbiddenException
     * @throws BranchesChecknocalcservicesInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    protected function transformResponseBody(string $body, int $status, SerializerInterface $serializer, ?string $contentType = null)
    {
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'glook\PecomSdk\Generated\Model\BranchesChecknocalcservicesPostResponse200Item[]', 'json');
        }
        if (false === is_null($contentType) && (400 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new BranchesChecknocalcservicesBadRequestException($serializer->deserialize($body, 'glook\PecomSdk\Generated\Model\CommonErrorEnvelope', 'json'));
        }
        if (false === is_null($contentType) && (403 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new BranchesChecknocalcservicesForbiddenException($serializer->deserialize($body, 'glook\PecomSdk\Generated\Model\CommonErrorEnvelope', 'json'));
        }
        if (false === is_null($contentType) && (500 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new BranchesChecknocalcservicesInternalServerErrorException($serializer->deserialize($body, 'glook\PecomSdk\Generated\Model\CommonErrorEnvelope', 'json'));
        }

        throw new UnexpectedStatusCodeException($status, $body);
    }
}
