<?php

namespace glook\PecomSdk\Generated\Model;

class ListAllOrderResponse
{
    /**
     * Грузы
     *
     * @var ListAllOrderItem[]|null
     */
    protected $cargos;
    /**
     * Грузы
     *
     * @return ListAllOrderItem[]|null
     */
    public function getCargos() : ?array
    {
        return $this->cargos;
    }
    /**
     * Грузы
     *
     * @param ListAllOrderItem[]|null $cargos
     *
     * @return self
     */
    public function setCargos(?array $cargos) : self
    {
        $this->cargos = $cargos;
        return $this;
    }
}