<?php

namespace glook\PecomSdk\Generated\Model;

class CargosdocumentsGetcontentErrorResponse
{
    /**
     * 
     *
     * @var CargosdocumentsGetcontentErrorResponseError
     */
    protected $error;
    /**
     * 
     *
     * @return CargosdocumentsGetcontentErrorResponseError
     */
    public function getError() : CargosdocumentsGetcontentErrorResponseError
    {
        return $this->error;
    }
    /**
     * 
     *
     * @param CargosdocumentsGetcontentErrorResponseError $error
     *
     * @return self
     */
    public function setError(CargosdocumentsGetcontentErrorResponseError $error) : self
    {
        $this->error = $error;
        return $this;
    }
}