<?php

namespace glook\PecomSdk\Generated\Model;

class ValidationError
{
    /**
     * @var null|ValidationErrorError
     */
    protected $error;

    public function getError(): ?ValidationErrorError
    {
        return $this->error;
    }

    public function setError(?ValidationErrorError $error): self
    {
        $this->error = $error;

        return $this;
    }
}
