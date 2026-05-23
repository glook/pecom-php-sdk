<?php

namespace glook\PecomSdk\Generated\Model;

class CommonErrorEnvelope
{
    /**
     * @var CommonErrorObject
     */
    protected $error;

    public function getError(): CommonErrorObject
    {
        return $this->error;
    }

    public function setError(CommonErrorObject $error): self
    {
        $this->error = $error;

        return $this;
    }
}
