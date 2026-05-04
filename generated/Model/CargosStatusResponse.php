<?php

namespace glook\PecomSdk\Generated\Model;

class CargosStatusResponse
{
    /**
     * Статусы грузов
     *
     * @var CargoStatusItem[]|null
     */
    protected $cargos;
    /**
     * Статусы грузов
     *
     * @return CargoStatusItem[]|null
     */
    public function getCargos() : ?array
    {
        return $this->cargos;
    }
    /**
     * Статусы грузов
     *
     * @param CargoStatusItem[]|null $cargos
     *
     * @return self
     */
    public function setCargos(?array $cargos) : self
    {
        $this->cargos = $cargos;
        return $this;
    }
}