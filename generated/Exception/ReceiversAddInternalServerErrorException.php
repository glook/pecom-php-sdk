<?php

namespace glook\PecomSdk\Generated\Exception;

class ReceiversAddInternalServerErrorException extends InternalServerErrorException
{
    private $commonErrorEnvelope;
    public function __construct(\glook\PecomSdk\Generated\Model\CommonErrorEnvelope $commonErrorEnvelope)
    {
        parent::__construct('Internal Server Error. Серверная ошибка обычно использует общий JSON-конверт `{error: {title, message}}`.', 500);
        $this->commonErrorEnvelope = $commonErrorEnvelope;
    }
    public function getCommonErrorEnvelope()
    {
        return $this->commonErrorEnvelope;
    }
}