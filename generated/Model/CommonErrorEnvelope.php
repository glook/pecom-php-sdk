<?php

namespace glook\PecomSdk\Generated\Model;

class CommonErrorEnvelope
{
    /**
     * 
     *
     * @var CommonErrorObject
     */
    protected $error;
    /**
     * 
     *
     * @return CommonErrorObject
     */
    public function getError() : CommonErrorObject
    {
        return $this->error;
    }
    /**
     * 
     *
     * @param CommonErrorObject $error
     *
     * @return self
     */
    public function setError(CommonErrorObject $error) : self
    {
        $this->error = $error;
        return $this;
    }
}