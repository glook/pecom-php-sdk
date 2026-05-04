<?php

namespace glook\PecomSdk\Generated\Model;

class CargosDeliveryStatusRequest
{
    /**
     * Индексы грузов
     *
     * @var string[]
     */
    protected $cargoCodes;
    /**
     * Индексы грузов
     *
     * @return string[]
     */
    public function getCargoCodes() : array
    {
        return $this->cargoCodes;
    }
    /**
     * Индексы грузов
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