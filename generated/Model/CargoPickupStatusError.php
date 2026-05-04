<?php

namespace glook\PecomSdk\Generated\Model;

class CargoPickupStatusError
{
    /**
     * 
     *
     * @var CargoPickupStatusErrorError
     */
    protected $error;
    /**
     * 
     *
     * @return CargoPickupStatusErrorError
     */
    public function getError() : CargoPickupStatusErrorError
    {
        return $this->error;
    }
    /**
     * 
     *
     * @param CargoPickupStatusErrorError $error
     *
     * @return self
     */
    public function setError(CargoPickupStatusErrorError $error) : self
    {
        $this->error = $error;
        return $this;
    }
}