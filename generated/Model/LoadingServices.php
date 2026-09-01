<?php

namespace glook\PecomSdk\Generated\Model;

class LoadingServices
{
    /**
     * Перенести груз (в метрах)
     *
     * @var null|float
     */
    protected $carryingDistance;

    /**
     * Поднять/спустить на этаж
     *
     * @var null|int
     */
    protected $floor;

    /**
     * Подъем на лифте
     *
     * @var null|bool
     */
    protected $isElevator;

    /**
     * Расчитывать ПРР
     *
     * @var null|bool
     */
    protected $isLoading;

    /**
     * Перенести груз (в метрах)
     */
    public function getCarryingDistance(): ?float
    {
        return $this->carryingDistance;
    }

    /**
     * Перенести груз (в метрах)
     */
    public function setCarryingDistance(?float $carryingDistance): self
    {
        $this->carryingDistance = $carryingDistance;

        return $this;
    }

    /**
     * Поднять/спустить на этаж
     */
    public function getFloor(): ?int
    {
        return $this->floor;
    }

    /**
     * Поднять/спустить на этаж
     */
    public function setFloor(?int $floor): self
    {
        $this->floor = $floor;

        return $this;
    }

    /**
     * Подъем на лифте
     */
    public function getIsElevator(): ?bool
    {
        return $this->isElevator;
    }

    /**
     * Подъем на лифте
     */
    public function setIsElevator(?bool $isElevator): self
    {
        $this->isElevator = $isElevator;

        return $this;
    }

    /**
     * Расчитывать ПРР
     */
    public function getIsLoading(): ?bool
    {
        return $this->isLoading;
    }

    /**
     * Расчитывать ПРР
     */
    public function setIsLoading(?bool $isLoading): self
    {
        $this->isLoading = $isLoading;

        return $this;
    }
}
