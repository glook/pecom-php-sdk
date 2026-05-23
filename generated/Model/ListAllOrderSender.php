<?php

namespace glook\PecomSdk\Generated\Model;

class ListAllOrderSender
{
    /**
     * Идентификатор филиала.
     *
     * @var null|string
     */
    protected $branchId;

    /**
     * Контрагент
     *
     * @var null|ListAllOrderSenderCounterpart
     */
    protected $counterpart;

    /**
     * Адрес забора груза, если заказана услуга забора.
     *
     * @var null|string
     */
    protected $intakeAddress;

    /**
     * Заказана услуга забора груза.
     *
     * @var null|bool
     */
    protected $isIntake;

    /**
     * Адрес склада в городе отправления.
     *
     * @var null|string
     */
    protected $warehouseAddress;

    /**
     * Идентификатор склада отправления.
     *
     * @var null|string
     */
    protected $warehouseId;

    /**
     * Идентификатор филиала.
     */
    public function getBranchId(): ?string
    {
        return $this->branchId;
    }

    /**
     * Идентификатор филиала.
     */
    public function setBranchId(?string $branchId): self
    {
        $this->branchId = $branchId;

        return $this;
    }

    /**
     * Контрагент
     */
    public function getCounterpart(): ?ListAllOrderSenderCounterpart
    {
        return $this->counterpart;
    }

    /**
     * Контрагент
     */
    public function setCounterpart(?ListAllOrderSenderCounterpart $counterpart): self
    {
        $this->counterpart = $counterpart;

        return $this;
    }

    /**
     * Адрес забора груза, если заказана услуга забора.
     */
    public function getIntakeAddress(): ?string
    {
        return $this->intakeAddress;
    }

    /**
     * Адрес забора груза, если заказана услуга забора.
     */
    public function setIntakeAddress(?string $intakeAddress): self
    {
        $this->intakeAddress = $intakeAddress;

        return $this;
    }

    /**
     * Заказана услуга забора груза.
     */
    public function getIsIntake(): ?bool
    {
        return $this->isIntake;
    }

    /**
     * Заказана услуга забора груза.
     */
    public function setIsIntake(?bool $isIntake): self
    {
        $this->isIntake = $isIntake;

        return $this;
    }

    /**
     * Адрес склада в городе отправления.
     */
    public function getWarehouseAddress(): ?string
    {
        return $this->warehouseAddress;
    }

    /**
     * Адрес склада в городе отправления.
     */
    public function setWarehouseAddress(?string $warehouseAddress): self
    {
        $this->warehouseAddress = $warehouseAddress;

        return $this;
    }

    /**
     * Идентификатор склада отправления.
     */
    public function getWarehouseId(): ?string
    {
        return $this->warehouseId;
    }

    /**
     * Идентификатор склада отправления.
     */
    public function setWarehouseId(?string $warehouseId): self
    {
        $this->warehouseId = $warehouseId;

        return $this;
    }
}
