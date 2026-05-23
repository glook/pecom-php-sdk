<?php

namespace glook\PecomSdk\Generated\Model;

class ForcedStoragePeriod
{
    /**
     * Статус груза `Бесплатное хранение`, `Вынужденное хранение`, `Праздничные дни`, `В пути`, `Корректировка долга`.
     *
     * @var null|string
     */
    protected $cargoStatus;

    /**
     * Стоимость хранения.
     *
     * @var null|float
     */
    protected $costStorage;

    /**
     * Количество дней по окончанию действия тарифа.
     *
     * @var null|float
     */
    protected $endDataNumber;

    /**
     * Дата окончания начисления.
     *
     * @var null|string
     */
    protected $endDate;

    /**
     * Минимальная стоимость хранения.
     *
     * @var null|float
     */
    protected $minStorageCost;

    /**
     * Ставка.
     *
     * @var null|float
     */
    protected $rate;

    /**
     * Количество дней с начала действия тарифа.
     *
     * @var null|float
     */
    protected $startDataNumber;

    /**
     * Дата начисления.
     *
     * @var null|string
     */
    protected $startDate;

    /**
     * Статус груза `Бесплатное хранение`, `Вынужденное хранение`, `Праздничные дни`, `В пути`, `Корректировка долга`.
     */
    public function getCargoStatus(): ?string
    {
        return $this->cargoStatus;
    }

    /**
     * Статус груза `Бесплатное хранение`, `Вынужденное хранение`, `Праздничные дни`, `В пути`, `Корректировка долга`.
     */
    public function setCargoStatus(?string $cargoStatus): self
    {
        $this->cargoStatus = $cargoStatus;

        return $this;
    }

    /**
     * Стоимость хранения.
     */
    public function getCostStorage(): ?float
    {
        return $this->costStorage;
    }

    /**
     * Стоимость хранения.
     */
    public function setCostStorage(?float $costStorage): self
    {
        $this->costStorage = $costStorage;

        return $this;
    }

    /**
     * Количество дней по окончанию действия тарифа.
     */
    public function getEndDataNumber(): ?float
    {
        return $this->endDataNumber;
    }

    /**
     * Количество дней по окончанию действия тарифа.
     */
    public function setEndDataNumber(?float $endDataNumber): self
    {
        $this->endDataNumber = $endDataNumber;

        return $this;
    }

    /**
     * Дата окончания начисления.
     */
    public function getEndDate(): ?string
    {
        return $this->endDate;
    }

    /**
     * Дата окончания начисления.
     */
    public function setEndDate(?string $endDate): self
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Минимальная стоимость хранения.
     */
    public function getMinStorageCost(): ?float
    {
        return $this->minStorageCost;
    }

    /**
     * Минимальная стоимость хранения.
     */
    public function setMinStorageCost(?float $minStorageCost): self
    {
        $this->minStorageCost = $minStorageCost;

        return $this;
    }

    /**
     * Ставка.
     */
    public function getRate(): ?float
    {
        return $this->rate;
    }

    /**
     * Ставка.
     */
    public function setRate(?float $rate): self
    {
        $this->rate = $rate;

        return $this;
    }

    /**
     * Количество дней с начала действия тарифа.
     */
    public function getStartDataNumber(): ?float
    {
        return $this->startDataNumber;
    }

    /**
     * Количество дней с начала действия тарифа.
     */
    public function setStartDataNumber(?float $startDataNumber): self
    {
        $this->startDataNumber = $startDataNumber;

        return $this;
    }

    /**
     * Дата начисления.
     */
    public function getStartDate(): ?string
    {
        return $this->startDate;
    }

    /**
     * Дата начисления.
     */
    public function setStartDate(?string $startDate): self
    {
        $this->startDate = $startDate;

        return $this;
    }
}
