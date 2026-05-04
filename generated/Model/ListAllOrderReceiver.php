<?php

namespace glook\PecomSdk\Generated\Model;

class ListAllOrderReceiver
{
    /**
     * 
     *
     * @var ListAllOrderReceiverCounterpart
     */
    protected $counterpart;
    /**
     * Адрес доставки груза, если заказана услуга доставки до адреса
     *
     * @var string|null
     */
    protected $delivieryAddress;
    /**
     * Заказана услуга доставки до адреса получателя
     *
     * @var bool|null
     */
    protected $isDelivery;
    /**
     * Адрес склада в городе получения
     *
     * @var string|null
     */
    protected $warehouseAddress;
    /**
     * Идентификатор склада получения
     *
     * @var string|null
     */
    protected $warehouseId;
    /**
     * 
     *
     * @return ListAllOrderReceiverCounterpart
     */
    public function getCounterpart() : ListAllOrderReceiverCounterpart
    {
        return $this->counterpart;
    }
    /**
     * 
     *
     * @param ListAllOrderReceiverCounterpart $counterpart
     *
     * @return self
     */
    public function setCounterpart(ListAllOrderReceiverCounterpart $counterpart) : self
    {
        $this->counterpart = $counterpart;
        return $this;
    }
    /**
     * Адрес доставки груза, если заказана услуга доставки до адреса
     *
     * @return string|null
     */
    public function getDelivieryAddress() : ?string
    {
        return $this->delivieryAddress;
    }
    /**
     * Адрес доставки груза, если заказана услуга доставки до адреса
     *
     * @param string|null $delivieryAddress
     *
     * @return self
     */
    public function setDelivieryAddress(?string $delivieryAddress) : self
    {
        $this->delivieryAddress = $delivieryAddress;
        return $this;
    }
    /**
     * Заказана услуга доставки до адреса получателя
     *
     * @return bool|null
     */
    public function getIsDelivery() : ?bool
    {
        return $this->isDelivery;
    }
    /**
     * Заказана услуга доставки до адреса получателя
     *
     * @param bool|null $isDelivery
     *
     * @return self
     */
    public function setIsDelivery(?bool $isDelivery) : self
    {
        $this->isDelivery = $isDelivery;
        return $this;
    }
    /**
     * Адрес склада в городе получения
     *
     * @return string|null
     */
    public function getWarehouseAddress() : ?string
    {
        return $this->warehouseAddress;
    }
    /**
     * Адрес склада в городе получения
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
     * Идентификатор склада получения
     *
     * @return string|null
     */
    public function getWarehouseId() : ?string
    {
        return $this->warehouseId;
    }
    /**
     * Идентификатор склада получения
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