<?php

namespace glook\PecomSdk\Generated\Model;

class CurrentStatusItem
{
    /**
     * Код груза
     *
     * @var string|null
     */
    protected $cargoCode;
    /**
     * 
     *
     * @var CurrentStatus
     */
    protected $currentStatus;
    /**
     * Код груза
     *
     * @return string|null
     */
    public function getCargoCode() : ?string
    {
        return $this->cargoCode;
    }
    /**
     * Код груза
     *
     * @param string|null $cargoCode
     *
     * @return self
     */
    public function setCargoCode(?string $cargoCode) : self
    {
        $this->cargoCode = $cargoCode;
        return $this;
    }
    /**
     * 
     *
     * @return CurrentStatus
     */
    public function getCurrentStatus() : CurrentStatus
    {
        return $this->currentStatus;
    }
    /**
     * 
     *
     * @param CurrentStatus $currentStatus
     *
     * @return self
     */
    public function setCurrentStatus(CurrentStatus $currentStatus) : self
    {
        $this->currentStatus = $currentStatus;
        return $this;
    }
}