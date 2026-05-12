<?php

namespace glook\PecomSdk\Generated\Model;

class CargoPickupServices
{
    /**
     * Есть комплект сопроводительных документов
     *
     * @var bool|null
     */
    protected $accompanyingDocuments;
    /**
     * Дистанция переноски, м
     *
     * @var int|null
     */
    protected $carryingDistance;
    /**
     * 
     *
     * @var CashOnDelivery|null
     */
    protected $cashOnDelivery;
    /**
     * Email для бухгалтерских уведомлений
     *
     * @var string|null
     */
    protected $email;
    /**
     * Этаж с которого необходимо забрать груз
     *
     * @var int|null
     */
    protected $floor;
    /**
     * Возврат документов
     *
     * @var bool|null
     */
    protected $isDocumentsReturn;
    /**
     * Есть лифт
     *
     * @var bool|null
     */
    protected $isElevator;
    /**
     * Изготовление защитной транспортировочной упаковки
     *
     * @var bool|null
     */
    protected $isHP;
    /**
     * Дополнительное страхование груза
     *
     * @var bool|null
     */
    protected $isInsurance;
    /**
     * Стоимость груза для страхования, руб. Обязательно при isInsurance = true
     *
     * @var float|null
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
     * @var bool|null
     */
    protected $isSealing;
    /**
     * Количество мест для пломбировки. Обязательно при isSealing = true
     *
     * @var int|null
     */
    protected $isSealingPositionsCount;
    /**
     * Упаковка груза стреппинг-лентой
     *
     * @var bool|null
     */
    protected $isStrapping;
    /**
     * Есть комплект сопроводительных документов
     *
     * @return bool|null
     */
    public function getAccompanyingDocuments() : ?bool
    {
        return $this->accompanyingDocuments;
    }
    /**
     * Есть комплект сопроводительных документов
     *
     * @param bool|null $accompanyingDocuments
     *
     * @return self
     */
    public function setAccompanyingDocuments(?bool $accompanyingDocuments) : self
    {
        $this->accompanyingDocuments = $accompanyingDocuments;
        return $this;
    }
    /**
     * Дистанция переноски, м
     *
     * @return int|null
     */
    public function getCarryingDistance() : ?int
    {
        return $this->carryingDistance;
    }
    /**
     * Дистанция переноски, м
     *
     * @param int|null $carryingDistance
     *
     * @return self
     */
    public function setCarryingDistance(?int $carryingDistance) : self
    {
        $this->carryingDistance = $carryingDistance;
        return $this;
    }
    /**
     * 
     *
     * @return CashOnDelivery|null
     */
    public function getCashOnDelivery() : ?CashOnDelivery
    {
        return $this->cashOnDelivery;
    }
    /**
     * 
     *
     * @param CashOnDelivery|null $cashOnDelivery
     *
     * @return self
     */
    public function setCashOnDelivery(?CashOnDelivery $cashOnDelivery) : self
    {
        $this->cashOnDelivery = $cashOnDelivery;
        return $this;
    }
    /**
     * Email для бухгалтерских уведомлений
     *
     * @return string|null
     */
    public function getEmail() : ?string
    {
        return $this->email;
    }
    /**
     * Email для бухгалтерских уведомлений
     *
     * @param string|null $email
     *
     * @return self
     */
    public function setEmail(?string $email) : self
    {
        $this->email = $email;
        return $this;
    }
    /**
     * Этаж с которого необходимо забрать груз
     *
     * @return int|null
     */
    public function getFloor() : ?int
    {
        return $this->floor;
    }
    /**
     * Этаж с которого необходимо забрать груз
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
     * Возврат документов
     *
     * @return bool|null
     */
    public function getIsDocumentsReturn() : ?bool
    {
        return $this->isDocumentsReturn;
    }
    /**
     * Возврат документов
     *
     * @param bool|null $isDocumentsReturn
     *
     * @return self
     */
    public function setIsDocumentsReturn(?bool $isDocumentsReturn) : self
    {
        $this->isDocumentsReturn = $isDocumentsReturn;
        return $this;
    }
    /**
     * Есть лифт
     *
     * @return bool|null
     */
    public function getIsElevator() : ?bool
    {
        return $this->isElevator;
    }
    /**
     * Есть лифт
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
     * Изготовление защитной транспортировочной упаковки
     *
     * @return bool|null
     */
    public function getIsHP() : ?bool
    {
        return $this->isHP;
    }
    /**
     * Изготовление защитной транспортировочной упаковки
     *
     * @param bool|null $isHP
     *
     * @return self
     */
    public function setIsHP(?bool $isHP) : self
    {
        $this->isHP = $isHP;
        return $this;
    }
    /**
     * Дополнительное страхование груза
     *
     * @return bool|null
     */
    public function getIsInsurance() : ?bool
    {
        return $this->isInsurance;
    }
    /**
     * Дополнительное страхование груза
     *
     * @param bool|null $isInsurance
     *
     * @return self
     */
    public function setIsInsurance(?bool $isInsurance) : self
    {
        $this->isInsurance = $isInsurance;
        return $this;
    }
    /**
     * Стоимость груза для страхования, руб. Обязательно при isInsurance = true
     *
     * @return float|null
     */
    public function getIsInsurancePrice() : ?float
    {
        return $this->isInsurancePrice;
    }
    /**
     * Стоимость груза для страхования, руб. Обязательно при isInsurance = true
     *
     * @param float|null $isInsurancePrice
     *
     * @return self
     */
    public function setIsInsurancePrice(?float $isInsurancePrice) : self
    {
        $this->isInsurancePrice = $isInsurancePrice;
        return $this;
    }
    /**
     * Необходима погрузка силами «ПЭК»
     *
     * @return bool
     */
    public function getIsLoading() : bool
    {
        return $this->isLoading;
    }
    /**
     * Необходима погрузка силами «ПЭК»
     *
     * @param bool $isLoading
     *
     * @return self
     */
    public function setIsLoading(bool $isLoading) : self
    {
        $this->isLoading = $isLoading;
        return $this;
    }
    /**
     * Пломбировка груза (обязательна только до 3 кг)
     *
     * @return bool|null
     */
    public function getIsSealing() : ?bool
    {
        return $this->isSealing;
    }
    /**
     * Пломбировка груза (обязательна только до 3 кг)
     *
     * @param bool|null $isSealing
     *
     * @return self
     */
    public function setIsSealing(?bool $isSealing) : self
    {
        $this->isSealing = $isSealing;
        return $this;
    }
    /**
     * Количество мест для пломбировки. Обязательно при isSealing = true
     *
     * @return int|null
     */
    public function getIsSealingPositionsCount() : ?int
    {
        return $this->isSealingPositionsCount;
    }
    /**
     * Количество мест для пломбировки. Обязательно при isSealing = true
     *
     * @param int|null $isSealingPositionsCount
     *
     * @return self
     */
    public function setIsSealingPositionsCount(?int $isSealingPositionsCount) : self
    {
        $this->isSealingPositionsCount = $isSealingPositionsCount;
        return $this;
    }
    /**
     * Упаковка груза стреппинг-лентой
     *
     * @return bool|null
     */
    public function getIsStrapping() : ?bool
    {
        return $this->isStrapping;
    }
    /**
     * Упаковка груза стреппинг-лентой
     *
     * @param bool|null $isStrapping
     *
     * @return self
     */
    public function setIsStrapping(?bool $isStrapping) : self
    {
        $this->isStrapping = $isStrapping;
        return $this;
    }
}