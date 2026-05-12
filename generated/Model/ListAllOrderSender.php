<?php

namespace glook\PecomSdk\Generated\Model;

class ListAllOrderSender
{
    /**
     * Идентификатор филиала
     *
     * @var string|null
     */
    protected $branchId;
    /**
     * Контрагент
     *
     * @var ListAllOrderSenderCounterpart|null
     */
    protected $counterpart;
    /**
     * Адрес забора груза, если заказана услуга забора
     *
     * @var string|null
     */
    protected $intakeAddress;
    /**
     * Заказана услуга забора груза
     *
     * @var bool|null
     */
    protected $isIntake;
    /**
     * Адрес склада в городе отправления
     *
     * @var string|null
     */
    protected $warehouseAddress;
    /**
     * Идентификатор склада отправления
     *
     * @var string|null
     */
    protected $warehouseId;
    /**
     * Идентификатор филиала
     *
     * @return string|null
     */
    public function getBranchId() : ?string
    {
        return $this->branchId;
    }
    /**
     * Идентификатор филиала
     *
     * @param string|null $branchId
     *
     * @return self
     */
    public function setBranchId(?string $branchId) : self
    {
        $this->branchId = $branchId;
        return $this;
    }
    /**
     * Контрагент
     *
     * @return ListAllOrderSenderCounterpart|null
     */
    public function getCounterpart() : ?ListAllOrderSenderCounterpart
    {
        return $this->counterpart;
    }
    /**
     * Контрагент
     *
     * @param ListAllOrderSenderCounterpart|null $counterpart
     *
     * @return self
     */
    public function setCounterpart(?ListAllOrderSenderCounterpart $counterpart) : self
    {
        $this->counterpart = $counterpart;
        return $this;
    }
    /**
     * Адрес забора груза, если заказана услуга забора
     *
     * @return string|null
     */
    public function getIntakeAddress() : ?string
    {
        return $this->intakeAddress;
    }
    /**
     * Адрес забора груза, если заказана услуга забора
     *
     * @param string|null $intakeAddress
     *
     * @return self
     */
    public function setIntakeAddress(?string $intakeAddress) : self
    {
        $this->intakeAddress = $intakeAddress;
        return $this;
    }
    /**
     * Заказана услуга забора груза
     *
     * @return bool|null
     */
    public function getIsIntake() : ?bool
    {
        return $this->isIntake;
    }
    /**
     * Заказана услуга забора груза
     *
     * @param bool|null $isIntake
     *
     * @return self
     */
    public function setIsIntake(?bool $isIntake) : self
    {
        $this->isIntake = $isIntake;
        return $this;
    }
    /**
     * Адрес склада в городе отправления
     *
     * @return string|null
     */
    public function getWarehouseAddress() : ?string
    {
        return $this->warehouseAddress;
    }
    /**
     * Адрес склада в городе отправления
     *
     * @param string|null $warehouseAddress
     *
     * @return self
     */
    public function setWarehouseAddress(?string $warehouseAddress) : self
    {
        $this->warehouseAddress = $warehouseAddress;
        return $this;
    }
    /**
     * Идентификатор склада отправления
     *
     * @return string|null
     */
    public function getWarehouseId() : ?string
    {
        return $this->warehouseId;
    }
    /**
     * Идентификатор склада отправления
     *
     * @param string|null $warehouseId
     *
     * @return self
     */
    public function setWarehouseId(?string $warehouseId) : self
    {
        $this->warehouseId = $warehouseId;
        return $this;
    }
}