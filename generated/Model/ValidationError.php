<?php

namespace glook\PecomSdk\Generated\Model;

class ValidationError
{
    /**
     * 
     *
     * @var ValidationErrorError|null
     */
    protected $error;
    /**
     * 
     *
     * @return ValidationErrorError|null
     */
    public function getError() : ?ValidationErrorError
    {
        return $this->error;
    }
    /**
     * 
     *
     * @param ValidationErrorError|null $error
     *
     * @return self
     */
    public function setError(?ValidationErrorError $error) : self
    {
        $this->error = $error;
        return $this;
    }
}