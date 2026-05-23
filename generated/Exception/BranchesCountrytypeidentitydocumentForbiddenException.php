<?php

namespace glook\PecomSdk\Generated\Exception;

use glook\PecomSdk\Generated\Model\CommonErrorEnvelope;

class BranchesCountrytypeidentitydocumentForbiddenException extends ForbiddenException
{
    private $commonErrorEnvelope;

    public function __construct(CommonErrorEnvelope $commonErrorEnvelope)
    {
        parent::__construct('Forbidden. При ошибке авторизации возвращается JSON-конверт с описанием ошибки.', 403);
        $this->commonErrorEnvelope = $commonErrorEnvelope;
    }

    public function getCommonErrorEnvelope()
    {
        return $this->commonErrorEnvelope;
    }
}
