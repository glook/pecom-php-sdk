<?php

namespace glook\PecomSdk\Generated\Model;

class CargosBasicStatusRequest
{
    /**
     * Коды грузов
     *
     * @var string[]
     */
    protected $cargoCodes;
    /**
     * Коды грузов
     *
     * @return string[]
     */
    public function getCargoCodes() : array
    {
        return $this->cargoCodes;
    }
    /**
     * Коды грузов
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