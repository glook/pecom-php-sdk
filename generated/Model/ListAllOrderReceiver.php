<?php

namespace glook\PecomSdk\Generated\Model;

class ListAllOrderReceiver
{
    /**
     * Контрагент
     *
     * @var null|ListAllOrderReceiverCounterpart
     */
    protected $counterpart;

    /**
     * Адрес доставки груза, если заказана услуга доставки до адреса.
     *
     * @var null|string
     */
    protected $delivieryAddress;

    /**
     * Заказана услуга доставки до адреса получателя.
     *
     * @var null|bool
     */
    protected $isDelivery;

    /**
     * Адрес склада в городе получения.
     *
     * @var null|string
     */
    protected $warehouseAddress;

    /**
     * Идентификатор склада получения.
     *
     * @var null|string
     */
    protected $warehouseId;

    /**
     * Контрагент
     */
    public function getCounterpart(): ?ListAllOrderReceiverCounterpart
    {
        return $this->counterpart;
    }

    /**
     * Контрагент
     */
    public function setCounterpart(?ListAllOrderReceiverCounterpart $counterpart): self
    {
        $this->counterpart = $counterpart;

        return $this;
    }

    /**
     * Адрес доставки груза, если заказана услуга доставки до адреса.
     */
    public function getDelivieryAddress(): ?string
    {
        return $this->delivieryAddress;
    }

    /**
     * Адрес доставки груза, если заказана услуга доставки до адреса.
     */
    public function setDelivieryAddress(?string $delivieryAddress): self
    {
        $this->delivieryAddress = $delivieryAddress;

        return $this;
    }

    /**
     * Заказана услуга доставки до адреса получателя.
     */
    public function getIsDelivery(): ?bool
    {
        return $this->isDelivery;
    }

    /**
     * Заказана услуга доставки до адреса получателя.
     */
    public function setIsDelivery(?bool $isDelivery): self
    {
        $this->isDelivery = $isDelivery;

        return $this;
    }

    /**
     * Адрес склада в городе получения.
     */
    public function getWarehouseAddress(): ?string
    {
        return $this->warehouseAddress;
    }

    /**
     * Адрес склада в городе получения.
     */
    public function setWarehouseAddress(?string $warehouseAddress): self
    {
        $this->warehouseAddress = $warehouseAddress;

        return $this;
    }

    /**
     * Идентификатор склада получения.
     */
    public function getWarehouseId(): ?string
    {
        return $this->warehouseId;
    }

    /**
     * Идентификатор склада получения.
     */
    public function setWarehouseId(?string $warehouseId): self
    {
        $this->warehouseId = $warehouseId;

        return $this;
    }
}
