<?php

namespace glook\PecomSdk\Generated\Exception;

use glook\PecomSdk\Generated\Model\ValidationError;

class CalculatorCalculatepriceBadRequestException extends BadRequestException
{
    private $validationError;

    public function __construct(ValidationError $validationError)
    {
        parent::__construct('Ошибка валидации запроса', 400);
        $this->validationError = $validationError;
    }

    public function getValidationError()
    {
        return $this->validationError;
    }
}
