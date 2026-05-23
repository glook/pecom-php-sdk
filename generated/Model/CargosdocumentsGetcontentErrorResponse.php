<?php

namespace glook\PecomSdk\Generated\Model;

class CargosdocumentsGetcontentErrorResponse
{
    /**
     * @var CargosdocumentsGetcontentErrorResponseError
     */
    protected $error;

    public function getError(): CargosdocumentsGetcontentErrorResponseError
    {
        return $this->error;
    }

    public function setError(CargosdocumentsGetcontentErrorResponseError $error): self
    {
        $this->error = $error;

        return $this;
    }
}
