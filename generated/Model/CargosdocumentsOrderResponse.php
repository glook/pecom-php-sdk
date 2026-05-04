<?php

namespace glook\PecomSdk\Generated\Model;

class CargosdocumentsOrderResponse
{
    /**
     * 
     *
     * @var CargosdocumentsOrderResponseResult
     */
    protected $result;
    /**
     * 
     *
     * @return CargosdocumentsOrderResponseResult
     */
    public function getResult() : CargosdocumentsOrderResponseResult
    {
        return $this->result;
    }
    /**
     * 
     *
     * @param CargosdocumentsOrderResponseResult $result
     *
     * @return self
     */
    public function setResult(CargosdocumentsOrderResponseResult $result) : self
    {
        $this->result = $result;
        return $this;
    }
}