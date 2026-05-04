<?php

namespace glook\PecomSdk\Generated\Exception;

class CalculatorCalculatepriceBadRequestException extends BadRequestException
{
    private $validationError;
    public function __construct(\glook\PecomSdk\Generated\Model\ValidationError $validationError)
    {
        parent::__construct('Ошибка валидации запроса', 400);
        $this->validationError = $validationError;
    }
    public function getValidationError()
    {
        return $this->validationError;
    }
}