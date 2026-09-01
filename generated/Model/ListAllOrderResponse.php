<?php

namespace glook\PecomSdk\Generated\Model;

class ListAllOrderResponse
{
    /**
     * Грузы
     *
     * @var null|ListAllOrderItem[]
     */
    protected $cargos;

    /**
     * Грузы
     *
     * @return null|ListAllOrderItem[]
     */
    public function getCargos(): ?array
    {
        return $this->cargos;
    }

    /**
     * Грузы
     *
     * @param null|ListAllOrderItem[] $cargos
     */
    public function setCargos(?array $cargos): self
    {
        $this->cargos = $cargos;

        return $this;
    }
}
