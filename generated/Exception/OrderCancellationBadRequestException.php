<?php

namespace glook\PecomSdk\Generated\Exception;

class OrderCancellationBadRequestException extends BadRequestException
{
    private $commonErrorEnvelope;
    public function __construct(\glook\PecomSdk\Generated\Model\CommonErrorEnvelope $commonErrorEnvelope)
    {
        parent::__construct('Bad Request. Ошибка валидации запроса. Сервер может вернуть HTTP-статус 200 с телом ответа, содержащим объект `error` с описанием ошибок.', 400);
        $this->commonErrorEnvelope = $commonErrorEnvelope;
    }
    public function getCommonErrorEnvelope()
    {
        return $this->commonErrorEnvelope;
    }
}