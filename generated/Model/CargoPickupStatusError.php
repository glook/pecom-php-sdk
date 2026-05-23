<?php

namespace glook\PecomSdk\Generated\Model;

class CargoPickupStatusError
{
    /**
     * @var CargoPickupStatusErrorError
     */
    protected $error;

    public function getError(): CargoPickupStatusErrorError
    {
        return $this->error;
    }

    public function setError(CargoPickupStatusErrorError $error): self
    {
        $this->error = $error;

        return $this;
    }
}
