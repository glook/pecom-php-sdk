<?php

namespace glook\PecomSdk\Generated\Model;

class CargosStatusByPositionBarcodesRequest
{
    /**
     * Штрих-коды
     *
     * @var string[]
     */
    protected $positionBarCodes;
    /**
     * Штрих-коды
     *
     * @return string[]
     */
    public function getPositionBarCodes() : array
    {
        return $this->positionBarCodes;
    }
    /**
     * Штрих-коды
     *
     * @param string[] $positionBarCodes
     *
     * @return self
     */
    public function setPositionBarCodes(array $positionBarCodes) : self
    {
        $this->positionBarCodes = $positionBarCodes;
        return $this;
    }
}