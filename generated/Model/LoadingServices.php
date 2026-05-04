<?php

namespace glook\PecomSdk\Generated\Model;

class LoadingServices
{
    /**
     * Перенести груз (в метрах)
     *
     * @var float|null
     */
    protected $carryingDistance;
    /**
     * Поднять/спустить на этаж
     *
     * @var int|null
     */
    protected $floor;
    /**
     * Подъем на лифте
     *
     * @var bool|null
     */
    protected $isElevator;
    /**
     * Расчитывать ПРР
     *
     * @var bool|null
     */
    protected $isLoading;
    /**
     * Перенести груз (в метрах)
     *
     * @return float|null
     */
    public function getCarryingDistance() : ?float
    {
        return $this->carryingDistance;
    }
    /**
     * Перенести груз (в метрах)
     *
     * @param float|null $carryingDistance
     *
     * @return self
     */
    public function setCarryingDistance(?float $carryingDistance) : self
    {
        $this->carryingDistance = $carryingDistance;
        return $this;
    }
    /**
     * Поднять/спустить на этаж
     *
     * @return int|null
     */
    public function getFloor() : ?int
    {
        return $this->floor;
    }
    /**
     * Поднять/спустить на этаж
     *
     * @param int|null $floor
     *
     * @return self
     */
    public function setFloor(?int $floor) : self
    {
        $this->floor = $floor;
        return $this;
    }
    /**
     * Подъем на лифте
     *
     * @return bool|null
     */
    public function getIsElevator() : ?bool
    {
        return $this->isElevator;
    }
    /**
     * Подъем на лифте
     *
     * @param bool|null $isElevator
     *
     * @return self
     */
    public function setIsElevator(?bool $isElevator) : self
    {
        $this->isElevator = $isElevator;
        return $this;
    }
    /**
     * Расчитывать ПРР
     *
     * @return bool|null
     */
    public function getIsLoading() : ?bool
    {
        return $this->isLoading;
    }
    /**
     * Расчитывать ПРР
     *
     * @param bool|null $isLoading
     *
     * @return self
     */
    public function setIsLoading(?bool $isLoading) : self
    {
        $this->isLoading = $isLoading;
        return $this;
    }
}