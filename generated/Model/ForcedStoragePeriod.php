<?php

namespace glook\PecomSdk\Generated\Model;

class ForcedStoragePeriod
{
    /**
     * Статус груза `Бесплатное хранение`, `Вынужденное хранение`, `Праздничные дни`, `В пути`, `Корректировка долга`
     *
     * @var string|null
     */
    protected $cargoStatus;
    /**
     * Стоимость хранения
     *
     * @var float|null
     */
    protected $costStorage;
    /**
     * Количество дней по окончанию действия тарифа
     *
     * @var float|null
     */
    protected $endDataNumber;
    /**
     * Дата окончания начисления
     *
     * @var string|null
     */
    protected $endDate;
    /**
     * Минимальная стоимость хранения
     *
     * @var float|null
     */
    protected $minStorageCost;
    /**
     * Ставка
     *
     * @var float|null
     */
    protected $rate;
    /**
     * Количество дней с начала действия тарифа
     *
     * @var float|null
     */
    protected $startDataNumber;
    /**
     * Дата начисления
     *
     * @var string|null
     */
    protected $startDate;
    /**
     * Статус груза `Бесплатное хранение`, `Вынужденное хранение`, `Праздничные дни`, `В пути`, `Корректировка долга`
     *
     * @return string|null
     */
    public function getCargoStatus() : ?string
    {
        return $this->cargoStatus;
    }
    /**
     * Статус груза `Бесплатное хранение`, `Вынужденное хранение`, `Праздничные дни`, `В пути`, `Корректировка долга`
     *
     * @param string|null $cargoStatus
     *
     * @return self
     */
    public function setCargoStatus(?string $cargoStatus) : self
    {
        $this->cargoStatus = $cargoStatus;
        return $this;
    }
    /**
     * Стоимость хранения
     *
     * @return float|null
     */
    public function getCostStorage() : ?float
    {
        return $this->costStorage;
    }
    /**
     * Стоимость хранения
     *
     * @param float|null $costStorage
     *
     * @return self
     */
    public function setCostStorage(?float $costStorage) : self
    {
        $this->costStorage = $costStorage;
        return $this;
    }
    /**
     * Количество дней по окончанию действия тарифа
     *
     * @return float|null
     */
    public function getEndDataNumber() : ?float
    {
        return $this->endDataNumber;
    }
    /**
     * Количество дней по окончанию действия тарифа
     *
     * @param float|null $endDataNumber
     *
     * @return self
     */
    public function setEndDataNumber(?float $endDataNumber) : self
    {
        $this->endDataNumber = $endDataNumber;
        return $this;
    }
    /**
     * Дата окончания начисления
     *
     * @return string|null
     */
    public function getEndDate() : ?string
    {
        return $this->endDate;
    }
    /**
     * Дата окончания начисления
     *
     * @param string|null $endDate
     *
     * @return self
     */
    public function setEndDate(?string $endDate) : self
    {
        $this->endDate = $endDate;
        return $this;
    }
    /**
     * Минимальная стоимость хранения
     *
     * @return float|null
     */
    public function getMinStorageCost() : ?float
    {
        return $this->minStorageCost;
    }
    /**
     * Минимальная стоимость хранения
     *
     * @param float|null $minStorageCost
     *
     * @return self
     */
    public function setMinStorageCost(?float $minStorageCost) : self
    {
        $this->minStorageCost = $minStorageCost;
        return $this;
    }
    /**
     * Ставка
     *
     * @return float|null
     */
    public function getRate() : ?float
    {
        return $this->rate;
    }
    /**
     * Ставка
     *
     * @param float|null $rate
     *
     * @return self
     */
    public function setRate(?float $rate) : self
    {
        $this->rate = $rate;
        return $this;
    }
    /**
     * Количество дней с начала действия тарифа
     *
     * @return float|null
     */
    public function getStartDataNumber() : ?float
    {
        return $this->startDataNumber;
    }
    /**
     * Количество дней с начала действия тарифа
     *
     * @param float|null $startDataNumber
     *
     * @return self
     */
    public function setStartDataNumber(?float $startDataNumber) : self
    {
        $this->startDataNumber = $startDataNumber;
        return $this;
    }
    /**
     * Дата начисления
     *
     * @return string|null
     */
    public function getStartDate() : ?string
    {
        return $this->startDate;
    }
    /**
     * Дата начисления
     *
     * @param string|null $startDate
     *
     * @return self
     */
    public function setStartDate(?string $startDate) : self
    {
        $this->startDate = $startDate;
        return $this;
    }
}