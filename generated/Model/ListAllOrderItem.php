<?php

namespace glook\PecomSdk\Generated\Model;

class ListAllOrderItem
{
    /**
     * Статус груза
     *
     * @var int|null
     */
    protected $cargoStatus;
    /**
     * Наименование груза
     *
     * @var string|null
     */
    protected $description;
    /**
     * Плановая дата забора груза Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     *
     * @var string|null
     */
    protected $intakePlanDateTime;
    /**
     * Вид перевозки
     *
     * @var string|null
     */
    protected $kindOfTransportationType;
    /**
     * Дата и время создания заявки
     *
     * @var string|null
     */
    protected $orderDate;
    /**
     * Номер заказа клиента
     *
     * @var string|null
     */
    protected $orderNumber;
    /**
     * 
     *
     * @var ListAllOrderReceiver
     */
    protected $receiver;
    /**
     * 
     *
     * @var ListAllOrderSender
     */
    protected $sender;
    /**
     * Тип перевозки
     *
     * @var string|null
     */
    protected $shippingType;
    /**
     * Дата и время сдачи груза Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     *
     * @var string|null
     */
    protected $takeOnStockDateTime;
    /**
     * Код груза
     *
     * @var string|null
     */
    protected $code;
    /**
     * Статус груза
     *
     * @return int|null
     */
    public function getCargoStatus() : ?int
    {
        return $this->cargoStatus;
    }
    /**
     * Статус груза
     *
     * @param int|null $cargoStatus
     *
     * @return self
     */
    public function setCargoStatus(?int $cargoStatus) : self
    {
        $this->cargoStatus = $cargoStatus;
        return $this;
    }
    /**
     * Наименование груза
     *
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * Наименование груза
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description) : self
    {
        $this->description = $description;
        return $this;
    }
    /**
     * Плановая дата забора груза Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     *
     * @return string|null
     */
    public function getIntakePlanDateTime() : ?string
    {
        return $this->intakePlanDateTime;
    }
    /**
     * Плановая дата забора груза Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     *
     * @param string|null $intakePlanDateTime
     *
     * @return self
     */
    public function setIntakePlanDateTime(?string $intakePlanDateTime) : self
    {
        $this->intakePlanDateTime = $intakePlanDateTime;
        return $this;
    }
    /**
     * Вид перевозки
     *
     * @return string|null
     */
    public function getKindOfTransportationType() : ?string
    {
        return $this->kindOfTransportationType;
    }
    /**
     * Вид перевозки
     *
     * @param string|null $kindOfTransportationType
     *
     * @return self
     */
    public function setKindOfTransportationType(?string $kindOfTransportationType) : self
    {
        $this->kindOfTransportationType = $kindOfTransportationType;
        return $this;
    }
    /**
     * Дата и время создания заявки
     *
     * @return string|null
     */
    public function getOrderDate() : ?string
    {
        return $this->orderDate;
    }
    /**
     * Дата и время создания заявки
     *
     * @param string|null $orderDate
     *
     * @return self
     */
    public function setOrderDate(?string $orderDate) : self
    {
        $this->orderDate = $orderDate;
        return $this;
    }
    /**
     * Номер заказа клиента
     *
     * @return string|null
     */
    public function getOrderNumber() : ?string
    {
        return $this->orderNumber;
    }
    /**
     * Номер заказа клиента
     *
     * @param string|null $orderNumber
     *
     * @return self
     */
    public function setOrderNumber(?string $orderNumber) : self
    {
        $this->orderNumber = $orderNumber;
        return $this;
    }
    /**
     * 
     *
     * @return ListAllOrderReceiver
     */
    public function getReceiver() : ListAllOrderReceiver
    {
        return $this->receiver;
    }
    /**
     * 
     *
     * @param ListAllOrderReceiver $receiver
     *
     * @return self
     */
    public function setReceiver(ListAllOrderReceiver $receiver) : self
    {
        $this->receiver = $receiver;
        return $this;
    }
    /**
     * 
     *
     * @return ListAllOrderSender
     */
    public function getSender() : ListAllOrderSender
    {
        return $this->sender;
    }
    /**
     * 
     *
     * @param ListAllOrderSender $sender
     *
     * @return self
     */
    public function setSender(ListAllOrderSender $sender) : self
    {
        $this->sender = $sender;
        return $this;
    }
    /**
     * Тип перевозки
     *
     * @return string|null
     */
    public function getShippingType() : ?string
    {
        return $this->shippingType;
    }
    /**
     * Тип перевозки
     *
     * @param string|null $shippingType
     *
     * @return self
     */
    public function setShippingType(?string $shippingType) : self
    {
        $this->shippingType = $shippingType;
        return $this;
    }
    /**
     * Дата и время сдачи груза Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     *
     * @return string|null
     */
    public function getTakeOnStockDateTime() : ?string
    {
        return $this->takeOnStockDateTime;
    }
    /**
     * Дата и время сдачи груза Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     *
     * @param string|null $takeOnStockDateTime
     *
     * @return self
     */
    public function setTakeOnStockDateTime(?string $takeOnStockDateTime) : self
    {
        $this->takeOnStockDateTime = $takeOnStockDateTime;
        return $this;
    }
    /**
     * Код груза
     *
     * @return string|null
     */
    public function getCode() : ?string
    {
        return $this->code;
    }
    /**
     * Код груза
     *
     * @param string|null $code
     *
     * @return self
     */
    public function setCode(?string $code) : self
    {
        $this->code = $code;
        return $this;
    }
}