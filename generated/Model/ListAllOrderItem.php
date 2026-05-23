<?php

namespace glook\PecomSdk\Generated\Model;

class ListAllOrderItem
{
    /**
     * Статус груза.
     *
     * @var null|int
     */
    protected $cargoStatus;

    /**
     * Наименование груза.
     *
     * @var null|string
     */
    protected $description;

    /**
     * Плановая дата забора груза Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     *
     * @var null|string
     */
    protected $intakePlanDateTime;

    /**
     * Вид перевозки.
     *
     * @var null|string
     */
    protected $kindOfTransportationType;

    /**
     * Дата и время создания заявки.
     *
     * @var null|string
     */
    protected $orderDate;

    /**
     * Номер заказа клиента.
     *
     * @var null|string
     */
    protected $orderNumber;

    /**
     * Получатель.
     *
     * @var null|ListAllOrderReceiver
     */
    protected $receiver;

    /**
     * Отправитель.
     *
     * @var null|ListAllOrderSender
     */
    protected $sender;

    /**
     * Тип перевозки.
     *
     * @var null|string
     */
    protected $shippingType;

    /**
     * Дата и время сдачи груза Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     *
     * @var null|string
     */
    protected $takeOnStockDateTime;

    /**
     * Код груза.
     *
     * @var null|string
     */
    protected $code;

    /**
     * Статус груза.
     */
    public function getCargoStatus(): ?int
    {
        return $this->cargoStatus;
    }

    /**
     * Статус груза.
     */
    public function setCargoStatus(?int $cargoStatus): self
    {
        $this->cargoStatus = $cargoStatus;

        return $this;
    }

    /**
     * Наименование груза.
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Наименование груза.
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Плановая дата забора груза Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     */
    public function getIntakePlanDateTime(): ?string
    {
        return $this->intakePlanDateTime;
    }

    /**
     * Плановая дата забора груза Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     */
    public function setIntakePlanDateTime(?string $intakePlanDateTime): self
    {
        $this->intakePlanDateTime = $intakePlanDateTime;

        return $this;
    }

    /**
     * Вид перевозки.
     */
    public function getKindOfTransportationType(): ?string
    {
        return $this->kindOfTransportationType;
    }

    /**
     * Вид перевозки.
     */
    public function setKindOfTransportationType(?string $kindOfTransportationType): self
    {
        $this->kindOfTransportationType = $kindOfTransportationType;

        return $this;
    }

    /**
     * Дата и время создания заявки.
     */
    public function getOrderDate(): ?string
    {
        return $this->orderDate;
    }

    /**
     * Дата и время создания заявки.
     */
    public function setOrderDate(?string $orderDate): self
    {
        $this->orderDate = $orderDate;

        return $this;
    }

    /**
     * Номер заказа клиента.
     */
    public function getOrderNumber(): ?string
    {
        return $this->orderNumber;
    }

    /**
     * Номер заказа клиента.
     */
    public function setOrderNumber(?string $orderNumber): self
    {
        $this->orderNumber = $orderNumber;

        return $this;
    }

    /**
     * Получатель.
     */
    public function getReceiver(): ?ListAllOrderReceiver
    {
        return $this->receiver;
    }

    /**
     * Получатель.
     */
    public function setReceiver(?ListAllOrderReceiver $receiver): self
    {
        $this->receiver = $receiver;

        return $this;
    }

    /**
     * Отправитель.
     */
    public function getSender(): ?ListAllOrderSender
    {
        return $this->sender;
    }

    /**
     * Отправитель.
     */
    public function setSender(?ListAllOrderSender $sender): self
    {
        $this->sender = $sender;

        return $this;
    }

    /**
     * Тип перевозки.
     */
    public function getShippingType(): ?string
    {
        return $this->shippingType;
    }

    /**
     * Тип перевозки.
     */
    public function setShippingType(?string $shippingType): self
    {
        $this->shippingType = $shippingType;

        return $this;
    }

    /**
     * Дата и время сдачи груза Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     */
    public function getTakeOnStockDateTime(): ?string
    {
        return $this->takeOnStockDateTime;
    }

    /**
     * Дата и время сдачи груза Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     */
    public function setTakeOnStockDateTime(?string $takeOnStockDateTime): self
    {
        $this->takeOnStockDateTime = $takeOnStockDateTime;

        return $this;
    }

    /**
     * Код груза.
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * Код груза.
     */
    public function setCode(?string $code): self
    {
        $this->code = $code;

        return $this;
    }
}
