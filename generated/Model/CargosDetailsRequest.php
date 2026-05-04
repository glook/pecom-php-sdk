<?php

namespace glook\PecomSdk\Generated\Model;

class CargosDetailsRequest
{
    /**
     * Код груза
     *
     * @var string
     */
    protected $cargoCode;
    /**
     * Код груза
     *
     * @return string
     */
    public function getCargoCode() : string
    {
        return $this->cargoCode;
    }
    /**
     * Код груза
     *
     * @param string $cargoCode
     *
     * @return self
     */
    public function setCargoCode(string $cargoCode) : self
    {
        $this->cargoCode = $cargoCode;
        return $this;
    }
}