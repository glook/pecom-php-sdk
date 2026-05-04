<?php

namespace glook\PecomSdk\Generated\Model;

class StatusByBarcodeResponse
{
    /**
     * Статусы грузов
     *
     * @var CargoStatusByBarcodeItem[]|null
     */
    protected $cargos;
    /**
     * Статусы грузов
     *
     * @return CargoStatusByBarcodeItem[]|null
     */
    public function getCargos() : ?array
    {
        return $this->cargos;
    }
    /**
     * Статусы грузов
     *
     * @param CargoStatusByBarcodeItem[]|null $cargos
     *
     * @return self
     */
    public function setCargos(?array $cargos) : self
    {
        $this->cargos = $cargos;
        return $this;
    }
}