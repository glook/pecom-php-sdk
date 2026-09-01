<?php

namespace glook\PecomSdk\Generated\Endpoint;

use glook\PecomSdk\Generated\Exception\CargosdocumentsGetcontentBadRequestException;
use glook\PecomSdk\Generated\Exception\CargosdocumentsGetcontentForbiddenException;
use glook\PecomSdk\Generated\Exception\CargosdocumentsGetcontentInternalServerErrorException;
use glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException;
use glook\PecomSdk\Generated\Model\CargosdocumentsGetcontentErrorResponse;
use glook\PecomSdk\Generated\Model\CargosdocumentsGetcontentRequest;
use glook\PecomSdk\Generated\Model\CargosdocumentsGetcontentSuccessResponse;
use glook\PecomSdk\Generated\Runtime\Client\BaseEndpoint;
use glook\PecomSdk\Generated\Runtime\Client\Endpoint;
use glook\PecomSdk\Generated\Runtime\Client\EndpointTrait;
use Symfony\Component\Serializer\SerializerInterface;

class CargosdocumentsGetcontent extends BaseEndpoint implements Endpoint
{
    use EndpointTrait;

    /**
     * Метод на данный момент позволяет получить документы "Поручение экспедитора/ Экспедиторская расписка" и "Счет на оплату" по оформленным грузам.
     * - Сначала необходимо запросить документ методом [`/CARGOSDOCUMENTS/ORDER/`](#tag/cargosdocuments/POST/cargosdocuments/order/) и дождаться готовности документа
     * - Для получения "Счета на оплату" необходимо передать идентификатор контрагента-плательщика `counterpartGuid` в системах ПЭК, связанный с ЛК. `counterpartGuid` можно получить методом [`/COUNTERPARTS/CONFIRMEDACCESSTOCOUNTERPARTIES/`](#tag/counterparts/POST/counterparts/confirmedaccesstocounterparties/).
     * - Для получения "Счета на оплату" в формате `"xml"`, необходимо передать уточняющий параметр `docFormat` в запросе.
     * Данные счета вернутся в формате CommerseML редакции 2.
     * - Счета на оплату возвращаются в `"zip"` архиве (в архиве может быть несколько счетов по грузу)
     * - [XSD схема Commerce ML 4.02](https://kabinet.pecom.ru/UserData/Api/CML402.zip)
     */
    public function __construct(CargosdocumentsGetcontentRequest $requestBody)
    {
        $this->body = $requestBody;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/cargosdocuments/getcontent/';
    }

    public function getBody(SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof CargosdocumentsGetcontentRequest) {
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
     * @return CargosdocumentsGetcontentErrorResponse|CargosdocumentsGetcontentSuccessResponse
     *
     * @throws CargosdocumentsGetcontentBadRequestException
     * @throws CargosdocumentsGetcontentForbiddenException
     * @throws CargosdocumentsGetcontentInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    protected function transformResponseBody(string $body, int $status, SerializerInterface $serializer, ?string $contentType = null)
    {
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            $decodedBody_1 = json_decode($body);
            $matchingTypes_1 = [];
            if (is_object($decodedBody_1) && (property_exists($decodedBody_1, 'docBody') && is_string($decodedBody_1->{'docBody'})) && (!property_exists($decodedBody_1, 'docFormat') || (is_null($decodedBody_1->{'docFormat'}) || is_string($decodedBody_1->{'docFormat'}))) && (property_exists($decodedBody_1, 'docName') && is_string($decodedBody_1->{'docName'}))) {
                $matchingTypes_1[] = 'glook\PecomSdk\Generated\Model\CargosdocumentsGetcontentSuccessResponse';
            }
            if (is_object($decodedBody_1) && (property_exists($decodedBody_1, 'error') && (is_object($decodedBody_1->{'error'}) && (!property_exists($decodedBody_1->{'error'}, 'error') || (is_null($decodedBody_1->{'error'}->{'error'}) || is_object($decodedBody_1->{'error'}->{'error'}))) && (!property_exists($decodedBody_1->{'error'}, 'message') || (is_null($decodedBody_1->{'error'}->{'message'}) || is_string($decodedBody_1->{'error'}->{'message'}))) && (property_exists($decodedBody_1->{'error'}, 'status') && is_int($decodedBody_1->{'error'}->{'status'})) && (property_exists($decodedBody_1->{'error'}, 'title') && is_string($decodedBody_1->{'error'}->{'title'}))))) {
                $matchingTypes_1[] = 'glook\PecomSdk\Generated\Model\CargosdocumentsGetcontentErrorResponse';
            }
            if (1 !== count($matchingTypes_1)) {
                throw new \UnexpectedValueException('Ответ API должен соответствовать ровно одной схеме oneOf');
            }
            if ('glook\PecomSdk\Generated\Model\CargosdocumentsGetcontentSuccessResponse' === $matchingTypes_1[0]) {
                return $serializer->deserialize($body, 'glook\PecomSdk\Generated\Model\CargosdocumentsGetcontentSuccessResponse', 'json');
            }
            if ('glook\PecomSdk\Generated\Model\CargosdocumentsGetcontentErrorResponse' === $matchingTypes_1[0]) {
                return $serializer->deserialize($body, 'glook\PecomSdk\Generated\Model\CargosdocumentsGetcontentErrorResponse', 'json');
            }

            throw new \UnexpectedValueException('Ответ API должен соответствовать ровно одной схеме oneOf');
        }
        if (false === is_null($contentType) && (400 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new CargosdocumentsGetcontentBadRequestException($serializer->deserialize($body, 'glook\PecomSdk\Generated\Model\CommonErrorEnvelope', 'json'));
        }
        if (false === is_null($contentType) && (403 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new CargosdocumentsGetcontentForbiddenException($serializer->deserialize($body, 'glook\PecomSdk\Generated\Model\CommonErrorEnvelope', 'json'));
        }
        if (false === is_null($contentType) && (500 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new CargosdocumentsGetcontentInternalServerErrorException($serializer->deserialize($body, 'glook\PecomSdk\Generated\Model\CommonErrorEnvelope', 'json'));
        }

        throw new UnexpectedStatusCodeException($status, $body);
    }
}
