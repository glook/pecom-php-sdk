<?php

namespace glook\PecomSdk\Generated\Model;

class DeliveryStatusItem
{
    /**
     * Наименование автомобиля
     *
     * @var null|string
     */
    protected $carBrand;

    /**
     * Водитель
     *
     * @var null|string
     */
    protected $carDriver;

    /**
     * Телефон водителя
     *
     * @var null|string
     */
    protected $carDriverPhone;

    /**
     * Индекс груза
     *
     * @var null|string
     */
    protected $cargoCode;

    /**
     * Номер автомобиля
     *
     * @var null|string
     */
    protected $carNumber;

    /**
     * Адрес доставки. Для получения требуются права доступа
     *
     * @var null|string
     */
    protected $deliveryAddress;

    /**
     * Согласованная дата доставки
     *
     * @var null|string
     */
    protected $deliveryAgreedDate;

    /**
     * Дата и время плановой доставки до двери
     *
     * @var null|string
     */
    protected $deliveryPlanDate;

    /**
     * Статус доставки. Возможные значения: Другое, Новая, Отложено, Перенесено, Запланировано, Выполняется, Выполнено, Аннулировано
     *
     * @var null|string
     */
    protected $deliveryStatus;

    /**
     * Код статуса доставки. Возможные значения: 3000 — Другое; 3010 — Новая; 3030 — Отложено; 3050 — Перенесено; 3070 — Запланировано; 3090 — Выполняется; 3200 — Выполнено; 3500 — Аннулировано
     *
     * @var null|int
     */
    protected $deliveryStatusCode;

    /**
     * Доставка до гипермаркета. `true` — доставка до гипермаркета, `false` — получатель не гипермаркет.
     *
     * @var null|bool
     */
    protected $delivieryHypermarket;

    /**
     * Время, с
     *
     * @var null|string
     */
    protected $intervalFrom;

    /**
     * Перерыв, с
     *
     * @var null|string
     */
    protected $intervallunchBreakFrom;

    /**
     * Перерыв, до
     *
     * @var null|string
     */
    protected $intervallunchBreakTo;

    /**
     * Время, до
     *
     * @var null|string
     */
    protected $intervalTo;

    /**
     * Заказана разгрузка «до двери» силами «ПЭК»
     *
     * @var null|bool
     */
    protected $isLoading;

    /**
     * Наименование автомобиля
     */
    public function getCarBrand(): ?string
    {
        return $this->carBrand;
    }

    /**
     * Наименование автомобиля
     */
    public function setCarBrand(?string $carBrand): self
    {
        $this->carBrand = $carBrand;

        return $this;
    }

    /**
     * Водитель
     */
    public function getCarDriver(): ?string
    {
        return $this->carDriver;
    }

    /**
     * Водитель
     */
    public function setCarDriver(?string $carDriver): self
    {
        $this->carDriver = $carDriver;

        return $this;
    }

    /**
     * Телефон водителя
     */
    public function getCarDriverPhone(): ?string
    {
        return $this->carDriverPhone;
    }

    /**
     * Телефон водителя
     */
    public function setCarDriverPhone(?string $carDriverPhone): self
    {
        $this->carDriverPhone = $carDriverPhone;

        return $this;
    }

    /**
     * Индекс груза
     */
    public function getCargoCode(): ?string
    {
        return $this->cargoCode;
    }

    /**
     * Индекс груза
     */
    public function setCargoCode(?string $cargoCode): self
    {
        $this->cargoCode = $cargoCode;

        return $this;
    }

    /**
     * Номер автомобиля
     */
    public function getCarNumber(): ?string
    {
        return $this->carNumber;
    }

    /**
     * Номер автомобиля
     */
    public function setCarNumber(?string $carNumber): self
    {
        $this->carNumber = $carNumber;

        return $this;
    }

    /**
     * Адрес доставки. Для получения требуются права доступа
     */
    public function getDeliveryAddress(): ?string
    {
        return $this->deliveryAddress;
    }

    /**
     * Адрес доставки. Для получения требуются права доступа
     */
    public function setDeliveryAddress(?string $deliveryAddress): self
    {
        $this->deliveryAddress = $deliveryAddress;

        return $this;
    }

    /**
     * Согласованная дата доставки
     */
    public function getDeliveryAgreedDate(): ?string
    {
        return $this->deliveryAgreedDate;
    }

    /**
     * Согласованная дата доставки
     */
    public function setDeliveryAgreedDate(?string $deliveryAgreedDate): self
    {
        $this->deliveryAgreedDate = $deliveryAgreedDate;

        return $this;
    }

    /**
     * Дата и время плановой доставки до двери
     */
    public function getDeliveryPlanDate(): ?string
    {
        return $this->deliveryPlanDate;
    }

    /**
     * Дата и время плановой доставки до двери
     */
    public function setDeliveryPlanDate(?string $deliveryPlanDate): self
    {
        $this->deliveryPlanDate = $deliveryPlanDate;

        return $this;
    }

    /**
     * Статус доставки. Возможные значения: Другое, Новая, Отложено, Перенесено, Запланировано, Выполняется, Выполнено, Аннулировано
     */
    public function getDeliveryStatus(): ?string
    {
        return $this->deliveryStatus;
    }

    /**
     * Статус доставки. Возможные значения: Другое, Новая, Отложено, Перенесено, Запланировано, Выполняется, Выполнено, Аннулировано
     */
    public function setDeliveryStatus(?string $deliveryStatus): self
    {
        $this->deliveryStatus = $deliveryStatus;

        return $this;
    }

    /**
     * Код статуса доставки. Возможные значения: 3000 — Другое; 3010 — Новая; 3030 — Отложено; 3050 — Перенесено; 3070 — Запланировано; 3090 — Выполняется; 3200 — Выполнено; 3500 — Аннулировано
     */
    public function getDeliveryStatusCode(): ?int
    {
        return $this->deliveryStatusCode;
    }

    /**
     * Код статуса доставки. Возможные значения: 3000 — Другое; 3010 — Новая; 3030 — Отложено; 3050 — Перенесено; 3070 — Запланировано; 3090 — Выполняется; 3200 — Выполнено; 3500 — Аннулировано
     */
    public function setDeliveryStatusCode(?int $deliveryStatusCode): self
    {
        $this->deliveryStatusCode = $deliveryStatusCode;

        return $this;
    }

    /**
     * Доставка до гипермаркета. `true` — доставка до гипермаркета, `false` — получатель не гипермаркет.
     */
    public function getDelivieryHypermarket(): ?bool
    {
        return $this->delivieryHypermarket;
    }

    /**
     * Доставка до гипермаркета. `true` — доставка до гипермаркета, `false` — получатель не гипермаркет.
     */
    public function setDelivieryHypermarket(?bool $delivieryHypermarket): self
    {
        $this->delivieryHypermarket = $delivieryHypermarket;

        return $this;
    }

    /**
     * Время, с
     */
    public function getIntervalFrom(): ?string
    {
        return $this->intervalFrom;
    }

    /**
     * Время, с
     */
    public function setIntervalFrom(?string $intervalFrom): self
    {
        $this->intervalFrom = $intervalFrom;

        return $this;
    }

    /**
     * Перерыв, с
     */
    public function getIntervallunchBreakFrom(): ?string
    {
        return $this->intervallunchBreakFrom;
    }

    /**
     * Перерыв, с
     */
    public function setIntervallunchBreakFrom(?string $intervallunchBreakFrom): self
    {
        $this->intervallunchBreakFrom = $intervallunchBreakFrom;

        return $this;
    }

    /**
     * Перерыв, до
     */
    public function getIntervallunchBreakTo(): ?string
    {
        return $this->intervallunchBreakTo;
    }

    /**
     * Перерыв, до
     */
    public function setIntervallunchBreakTo(?string $intervallunchBreakTo): self
    {
        $this->intervallunchBreakTo = $intervallunchBreakTo;

        return $this;
    }

    /**
     * Время, до
     */
    public function getIntervalTo(): ?string
    {
        return $this->intervalTo;
    }

    /**
     * Время, до
     */
    public function setIntervalTo(?string $intervalTo): self
    {
        $this->intervalTo = $intervalTo;

        return $this;
    }

    /**
     * Заказана разгрузка «до двери» силами «ПЭК»
     */
    public function getIsLoading(): ?bool
    {
        return $this->isLoading;
    }

    /**
     * Заказана разгрузка «до двери» силами «ПЭК»
     */
    public function setIsLoading(?bool $isLoading): self
    {
        $this->isLoading = $isLoading;

        return $this;
    }
}
