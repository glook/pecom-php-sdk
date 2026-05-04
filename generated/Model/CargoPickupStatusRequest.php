<?php

namespace glook\PecomSdk\Generated\Model;

class CargoPickupStatusRequest
{
    /**
     * Список кодов грузов
     *
     * @var string[]
     */
    protected $cargoCodes;
    /**
     * Список кодов грузов
     *
     * @return string[]
     */
    public function getCargoCodes() : array
    {
        return $this->cargoCodes;
    }
    /**
     * Список кодов грузов
     *
     * @param string[] $cargoCodes
     *
     * @return self
     */
    public function setCargoCodes(array $cargoCodes) : self
    {
        $this->cargoCodes = $cargoCodes;
        return $this;
    }
}