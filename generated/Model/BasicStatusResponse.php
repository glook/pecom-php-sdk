<?php

namespace glook\PecomSdk\Generated\Model;

class BasicStatusResponse
{
    /**
     * Статусы грузов
     *
     * @var BasicStatusItem[]|null
     */
    protected $cargos;
    /**
     * Статусы грузов
     *
     * @return BasicStatusItem[]|null
     */
    public function getCargos() : ?array
    {
        return $this->cargos;
    }
    /**
     * Статусы грузов
     *
     * @param BasicStatusItem[]|null $cargos
     *
     * @return self
     */
    public function setCargos(?array $cargos) : self
    {
        $this->cargos = $cargos;
        return $this;
    }
}