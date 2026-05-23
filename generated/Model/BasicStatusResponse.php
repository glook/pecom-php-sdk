<?php

namespace glook\PecomSdk\Generated\Model;

class BasicStatusResponse
{
    /**
     * Статусы грузов.
     *
     * @var null|BasicStatusItem[]
     */
    protected $cargos;

    /**
     * Статусы грузов.
     *
     * @return null|BasicStatusItem[]
     */
    public function getCargos(): ?array
    {
        return $this->cargos;
    }

    /**
     * Статусы грузов.
     *
     * @param null|BasicStatusItem[] $cargos
     */
    public function setCargos(?array $cargos): self
    {
        $this->cargos = $cargos;

        return $this;
    }
}
