<?php

namespace glook\PecomSdk\Generated\Model;

class CurrentStatusItem
{
    /**
     * Код груза.
     *
     * @var null|string
     */
    protected $cargoCode;

    /**
     * Текущий клиентский статус
     *
     * @var null|CurrentStatus
     */
    protected $currentStatus;

    /**
     * Код груза.
     */
    public function getCargoCode(): ?string
    {
        return $this->cargoCode;
    }

    /**
     * Код груза.
     */
    public function setCargoCode(?string $cargoCode): self
    {
        $this->cargoCode = $cargoCode;

        return $this;
    }

    /**
     * Текущий клиентский статус
     */
    public function getCurrentStatus(): ?CurrentStatus
    {
        return $this->currentStatus;
    }

    /**
     * Текущий клиентский статус
     */
    public function setCurrentStatus(?CurrentStatus $currentStatus): self
    {
        $this->currentStatus = $currentStatus;

        return $this;
    }
}
