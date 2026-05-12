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
     * Текущий клиентский статус
     *
     * @var CurrentStatus|null
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
     * Текущий клиентский статус
     *
     * @return CurrentStatus|null
     */
    public function getCurrentStatus() : ?CurrentStatus
    {
        return $this->currentStatus;
    }
    /**
     * Текущий клиентский статус
     *
     * @param CurrentStatus|null $currentStatus
     *
     * @return self
     */
    public function setCurrentStatus(?CurrentStatus $currentStatus) : self
    {
        $this->currentStatus = $currentStatus;
        return $this;
    }
}