<?php

namespace glook\PecomSdk\Generated\Model;

class CargosCancelAndReturnRequest
{
    /**
     * Код груза
     *
     * @var string
     */
    protected $code;
    /**
     * Код груза
     *
     * @return string
     */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
     * Код груза
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode(string $code) : self
    {
        $this->code = $code;
        return $this;
    }
}