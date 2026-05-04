<?php

namespace glook\PecomSdk\Generated\Exception;

class PreregistrationSubmitForbiddenException extends ForbiddenException
{
    private $commonErrorEnvelope;
    public function __construct(\glook\PecomSdk\Generated\Model\CommonErrorEnvelope $commonErrorEnvelope)
    {
        parent::__construct('Forbidden. При ошибке авторизации возвращается JSON-конверт с описанием ошибки.', 403);
        $this->commonErrorEnvelope = $commonErrorEnvelope;
    }
    public function getCommonErrorEnvelope()
    {
        return $this->commonErrorEnvelope;
    }
}