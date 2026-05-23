<?php

namespace glook\PecomSdk\Generated\Model;

class CargosStatusResponse
{
    /**
     * Статусы грузов.
     *
     * @var null|CargoStatusItem[]
     */
    protected $cargos;

    /**
     * Статусы грузов.
     *
     * @return null|CargoStatusItem[]
     */
    public function getCargos(): ?array
    {
        return $this->cargos;
    }

    /**
     * Статусы грузов.
     *
     * @param null|CargoStatusItem[] $cargos
     */
    public function setCargos(?array $cargos): self
    {
        $this->cargos = $cargos;

        return $this;
    }
}
