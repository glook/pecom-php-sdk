<?php

namespace glook\PecomSdk\Generated\Model;

class CargosdocumentsOrderResponse
{
    /**
     * @var CargosdocumentsOrderResponseResult
     */
    protected $result;

    public function getResult(): CargosdocumentsOrderResponseResult
    {
        return $this->result;
    }

    public function setResult(CargosdocumentsOrderResponseResult $result): self
    {
        $this->result = $result;

        return $this;
    }
}
