<?php

namespace glook\PecomSdk\Generated\Model;

class StatusByBarcodeResponse
{
    /**
     * Статусы грузов
     *
     * @var null|CargoStatusByBarcodeItem[]
     */
    protected $cargos;

    /**
     * Статусы грузов
     *
     * @return null|CargoStatusByBarcodeItem[]
     */
    public function getCargos(): ?array
    {
        return $this->cargos;
    }

    /**
     * Статусы грузов
     *
     * @param null|CargoStatusByBarcodeItem[] $cargos
     */
    public function setCargos(?array $cargos): self
    {
        $this->cargos = $cargos;

        return $this;
    }
}
