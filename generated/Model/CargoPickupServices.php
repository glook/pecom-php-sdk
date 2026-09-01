<?php

namespace glook\PecomSdk\Generated\Model;

class CargoPickupServices
{
    /**
     * Есть комплект сопроводительных документов
     *
     * @var null|bool
     */
    protected $accompanyingDocuments;

    /**
     * Дистанция переноски, м
     *
     * @var null|int
     */
    protected $carryingDistance;

    /**
     * @var null|CashOnDelivery
     */
    protected $cashOnDelivery;

    /**
     * Email для бухгалтерских уведомлений
     *
     * @var null|string
     */
    protected $email;

    /**
     * Этаж с которого необходимо забрать груз
     *
     * @var null|int
     */
    protected $floor;

    /**
     * Возврат документов
     *
     * @var null|bool
     */
    protected $isDocumentsReturn;

    /**
     * Есть лифт
     *
     * @var null|bool
     */
    protected $isElevator;

    /**
     * Изготовление защитной транспортировочной упаковки
     *
     * @var null|bool
     */
    protected $isHP;

    /**
     * Дополнительное страхование груза
     *
     * @var null|bool
     */
    protected $isInsurance;

    /**
     * Стоимость груза для страхования, руб. Обязательно при isInsurance = true
     *
     * @var null|float
     */
    protected $isInsurancePrice;

    /**
     * Необходима погрузка силами «ПЭК»
     *
     * @var bool
     */
    protected $isLoading;

    /**
     * Пломбировка груза (обязательна только до 3 кг)
     *
     * @var null|bool
     */
    protected $isSealing;

    /**
     * Количество мест для пломбировки. Обязательно при isSealing = true
     *
     * @var null|int
     */
    protected $isSealingPositionsCount;

    /**
     * Упаковка груза стреппинг-лентой
     *
     * @var null|bool
     */
    protected $isStrapping;

    /**
     * Есть комплект сопроводительных документов
     */
    public function getAccompanyingDocuments(): ?bool
    {
        return $this->accompanyingDocuments;
    }

    /**
     * Есть комплект сопроводительных документов
     */
    public function setAccompanyingDocuments(?bool $accompanyingDocuments): self
    {
        $this->accompanyingDocuments = $accompanyingDocuments;

        return $this;
    }

    /**
     * Дистанция переноски, м
     */
    public function getCarryingDistance(): ?int
    {
        return $this->carryingDistance;
    }

    /**
     * Дистанция переноски, м
     */
    public function setCarryingDistance(?int $carryingDistance): self
    {
        $this->carryingDistance = $carryingDistance;

        return $this;
    }

    public function getCashOnDelivery(): ?CashOnDelivery
    {
        return $this->cashOnDelivery;
    }

    public function setCashOnDelivery(?CashOnDelivery $cashOnDelivery): self
    {
        $this->cashOnDelivery = $cashOnDelivery;

        return $this;
    }

    /**
     * Email для бухгалтерских уведомлений
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * Email для бухгалтерских уведомлений
     */
    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Этаж с которого необходимо забрать груз
     */
    public function getFloor(): ?int
    {
        return $this->floor;
    }

    /**
     * Этаж с которого необходимо забрать груз
     */
    public function setFloor(?int $floor): self
    {
        $this->floor = $floor;

        return $this;
    }

    /**
     * Возврат документов
     */
    public function getIsDocumentsReturn(): ?bool
    {
        return $this->isDocumentsReturn;
    }

    /**
     * Возврат документов
     */
    public function setIsDocumentsReturn(?bool $isDocumentsReturn): self
    {
        $this->isDocumentsReturn = $isDocumentsReturn;

        return $this;
    }

    /**
     * Есть лифт
     */
    public function getIsElevator(): ?bool
    {
        return $this->isElevator;
    }

    /**
     * Есть лифт
     */
    public function setIsElevator(?bool $isElevator): self
    {
        $this->isElevator = $isElevator;

        return $this;
    }

    /**
     * Изготовление защитной транспортировочной упаковки
     */
    public function getIsHP(): ?bool
    {
        return $this->isHP;
    }

    /**
     * Изготовление защитной транспортировочной упаковки
     */
    public function setIsHP(?bool $isHP): self
    {
        $this->isHP = $isHP;

        return $this;
    }

    /**
     * Дополнительное страхование груза
     */
    public function getIsInsurance(): ?bool
    {
        return $this->isInsurance;
    }

    /**
     * Дополнительное страхование груза
     */
    public function setIsInsurance(?bool $isInsurance): self
    {
        $this->isInsurance = $isInsurance;

        return $this;
    }

    /**
     * Стоимость груза для страхования, руб. Обязательно при isInsurance = true
     */
    public function getIsInsurancePrice(): ?float
    {
        return $this->isInsurancePrice;
    }

    /**
     * Стоимость груза для страхования, руб. Обязательно при isInsurance = true
     */
    public function setIsInsurancePrice(?float $isInsurancePrice): self
    {
        $this->isInsurancePrice = $isInsurancePrice;

        return $this;
    }

    /**
     * Необходима погрузка силами «ПЭК»
     */
    public function getIsLoading(): bool
    {
        return $this->isLoading;
    }

    /**
     * Необходима погрузка силами «ПЭК»
     */
    public function setIsLoading(bool $isLoading): self
    {
        $this->isLoading = $isLoading;

        return $this;
    }

    /**
     * Пломбировка груза (обязательна только до 3 кг)
     */
    public function getIsSealing(): ?bool
    {
        return $this->isSealing;
    }

    /**
     * Пломбировка груза (обязательна только до 3 кг)
     */
    public function setIsSealing(?bool $isSealing): self
    {
        $this->isSealing = $isSealing;

        return $this;
    }

    /**
     * Количество мест для пломбировки. Обязательно при isSealing = true
     */
    public function getIsSealingPositionsCount(): ?int
    {
        return $this->isSealingPositionsCount;
    }

    /**
     * Количество мест для пломбировки. Обязательно при isSealing = true
     */
    public function setIsSealingPositionsCount(?int $isSealingPositionsCount): self
    {
        $this->isSealingPositionsCount = $isSealingPositionsCount;

        return $this;
    }

    /**
     * Упаковка груза стреппинг-лентой
     */
    public function getIsStrapping(): ?bool
    {
        return $this->isStrapping;
    }

    /**
     * Упаковка груза стреппинг-лентой
     */
    public function setIsStrapping(?bool $isStrapping): self
    {
        $this->isStrapping = $isStrapping;

        return $this;
    }
}
