<?php

namespace glook\PecomSdk\Generated\Model;

class DeliveryStatusItem
{
    /**
     * Наименование автомобиля
     *
     * @var string|null
     */
    protected $carBrand;
    /**
     * Водитель
     *
     * @var string|null
     */
    protected $carDriver;
    /**
     * Телефон водителя
     *
     * @var string|null
     */
    protected $carDriverPhone;
    /**
     * Индекс груза
     *
     * @var string|null
     */
    protected $cargoCode;
    /**
     * Номер автомобиля
     *
     * @var string|null
     */
    protected $carNumber;
    /**
     * Адрес доставки. Для получения требуются права доступа
     *
     * @var string|null
     */
    protected $deliveryAddress;
    /**
     * Согласованная дата доставки
     *
     * @var string|null
     */
    protected $deliveryAgreedDate;
    /**
     * Дата и время плановой доставки до двери
     *
     * @var string|null
     */
    protected $deliveryPlanDate;
    /**
     * Статус доставки. Возможные значения: Другое, Новая, Отложено, Перенесено, Запланировано, Выполняется, Выполнено, Аннулировано
     *
     * @var string|null
     */
    protected $deliveryStatus;
    /**
     * Код статуса доставки. Возможные значения: 3000 — Другое; 3010 — Новая; 3030 — Отложено; 3050 — Перенесено; 3070 — Запланировано; 3090 — Выполняется; 3200 — Выполнено; 3500 — Аннулировано
     *
     * @var int|null
     */
    protected $deliveryStatusCode;
    /**
     * Доставка до гипермаркета. `true` — доставка до гипермаркета, `false` — получатель не гипермаркет.
     *
     * @var bool|null
     */
    protected $delivieryHypermarket;
    /**
     * Время, с
     *
     * @var string|null
     */
    protected $intervalFrom;
    /**
     * Перерыв, с
     *
     * @var string|null
     */
    protected $intervallunchBreakFrom;
    /**
     * Перерыв, до
     *
     * @var string|null
     */
    protected $intervallunchBreakTo;
    /**
     * Время, до
     *
     * @var string|null
     */
    protected $intervalTo;
    /**
     * Заказана разгрузка «до двери» силами «ПЭК»
     *
     * @var bool|null
     */
    protected $isLoading;
    /**
     * Наименование автомобиля
     *
     * @return string|null
     */
    public function getCarBrand() : ?string
    {
        return $this->carBrand;
    }
    /**
     * Наименование автомобиля
     *
     * @param string|null $carBrand
     *
     * @return self
     */
    public function setCarBrand(?string $carBrand) : self
    {
        $this->carBrand = $carBrand;
        return $this;
    }
    /**
     * Водитель
     *
     * @return string|null
     */
    public function getCarDriver() : ?string
    {
        return $this->carDriver;
    }
    /**
     * Водитель
     *
     * @param string|null $carDriver
     *
     * @return self
     */
    public function setCarDriver(?string $carDriver) : self
    {
        $this->carDriver = $carDriver;
        return $this;
    }
    /**
     * Телефон водителя
     *
     * @return string|null
     */
    public function getCarDriverPhone() : ?string
    {
        return $this->carDriverPhone;
    }
    /**
     * Телефон водителя
     *
     * @param string|null $carDriverPhone
     *
     * @return self
     */
    public function setCarDriverPhone(?string $carDriverPhone) : self
    {
        $this->carDriverPhone = $carDriverPhone;
        return $this;
    }
    /**
     * Индекс груза
     *
     * @return string|null
     */
    public function getCargoCode() : ?string
    {
        return $this->cargoCode;
    }
    /**
     * Индекс груза
     *
     * @param string|null $cargoCode
     *
     * @return self
     */
    public function setCargoCode(?string $cargoCode) : self
    {
        $this->cargoCode = $cargoCode;
        return $this;
    }
    /**
     * Номер автомобиля
     *
     * @return string|null
     */
    public function getCarNumber() : ?string
    {
        return $this->carNumber;
    }
    /**
     * Номер автомобиля
     *
     * @param string|null $carNumber
     *
     * @return self
     */
    public function setCarNumber(?string $carNumber) : self
    {
        $this->carNumber = $carNumber;
        return $this;
    }
    /**
     * Адрес доставки. Для получения требуются права доступа
     *
     * @return string|null
     */
    public function getDeliveryAddress() : ?string
    {
        return $this->deliveryAddress;
    }
    /**
     * Адрес доставки. Для получения требуются права доступа
     *
     * @param string|null $deliveryAddress
     *
     * @return self
     */
    public function setDeliveryAddress(?string $deliveryAddress) : self
    {
        $this->deliveryAddress = $deliveryAddress;
        return $this;
    }
    /**
     * Согласованная дата доставки
     *
     * @return string|null
     */
    public function getDeliveryAgreedDate() : ?string
    {
        return $this->deliveryAgreedDate;
    }
    /**
     * Согласованная дата доставки
     *
     * @param string|null $deliveryAgreedDate
     *
     * @return self
     */
    public function setDeliveryAgreedDate(?string $deliveryAgreedDate) : self
    {
        $this->deliveryAgreedDate = $deliveryAgreedDate;
        return $this;
    }
    /**
     * Дата и время плановой доставки до двери
     *
     * @return string|null
     */
    public function getDeliveryPlanDate() : ?string
    {
        return $this->deliveryPlanDate;
    }
    /**
     * Дата и время плановой доставки до двери
     *
     * @param string|null $deliveryPlanDate
     *
     * @return self
     */
    public function setDeliveryPlanDate(?string $deliveryPlanDate) : self
    {
        $this->deliveryPlanDate = $deliveryPlanDate;
        return $this;
    }
    /**
     * Статус доставки. Возможные значения: Другое, Новая, Отложено, Перенесено, Запланировано, Выполняется, Выполнено, Аннулировано
     *
     * @return string|null
     */
    public function getDeliveryStatus() : ?string
    {
        return $this->deliveryStatus;
    }
    /**
     * Статус доставки. Возможные значения: Другое, Новая, Отложено, Перенесено, Запланировано, Выполняется, Выполнено, Аннулировано
     *
     * @param string|null $deliveryStatus
     *
     * @return self
     */
    public function setDeliveryStatus(?string $deliveryStatus) : self
    {
        $this->deliveryStatus = $deliveryStatus;
        return $this;
    }
    /**
     * Код статуса доставки. Возможные значения: 3000 — Другое; 3010 — Новая; 3030 — Отложено; 3050 — Перенесено; 3070 — Запланировано; 3090 — Выполняется; 3200 — Выполнено; 3500 — Аннулировано
     *
     * @return int|null
     */
    public function getDeliveryStatusCode() : ?int
    {
        return $this->deliveryStatusCode;
    }
    /**
     * Код статуса доставки. Возможные значения: 3000 — Другое; 3010 — Новая; 3030 — Отложено; 3050 — Перенесено; 3070 — Запланировано; 3090 — Выполняется; 3200 — Выполнено; 3500 — Аннулировано
     *
     * @param int|null $deliveryStatusCode
     *
     * @return self
     */
    public function setDeliveryStatusCode(?int $deliveryStatusCode) : self
    {
        $this->deliveryStatusCode = $deliveryStatusCode;
        return $this;
    }
    /**
     * Доставка до гипермаркета. `true` — доставка до гипермаркета, `false` — получатель не гипермаркет.
     *
     * @return bool|null
     */
    public function getDelivieryHypermarket() : ?bool
    {
        return $this->delivieryHypermarket;
    }
    /**
     * Доставка до гипермаркета. `true` — доставка до гипермаркета, `false` — получатель не гипермаркет.
     *
     * @param bool|null $delivieryHypermarket
     *
     * @return self
     */
    public function setDelivieryHypermarket(?bool $delivieryHypermarket) : self
    {
        $this->delivieryHypermarket = $delivieryHypermarket;
        return $this;
    }
    /**
     * Время, с
     *
     * @return string|null
     */
    public function getIntervalFrom() : ?string
    {
        return $this->intervalFrom;
    }
    /**
     * Время, с
     *
     * @param string|null $intervalFrom
     *
     * @return self
     */
    public function setIntervalFrom(?string $intervalFrom) : self
    {
        $this->intervalFrom = $intervalFrom;
        return $this;
    }
    /**
     * Перерыв, с
     *
     * @return string|null
     */
    public function getIntervallunchBreakFrom() : ?string
    {
        return $this->intervallunchBreakFrom;
    }
    /**
     * Перерыв, с
     *
     * @param string|null $intervallunchBreakFrom
     *
     * @return self
     */
    public function setIntervallunchBreakFrom(?string $intervallunchBreakFrom) : self
    {
        $this->intervallunchBreakFrom = $intervallunchBreakFrom;
        return $this;
    }
    /**
     * Перерыв, до
     *
     * @return string|null
     */
    public function getIntervallunchBreakTo() : ?string
    {
        return $this->intervallunchBreakTo;
    }
    /**
     * Перерыв, до
     *
     * @param string|null $intervallunchBreakTo
     *
     * @return self
     */
    public function setIntervallunchBreakTo(?string $intervallunchBreakTo) : self
    {
        $this->intervallunchBreakTo = $intervallunchBreakTo;
        return $this;
    }
    /**
     * Время, до
     *
     * @return string|null
     */
    public function getIntervalTo() : ?string
    {
        return $this->intervalTo;
    }
    /**
     * Время, до
     *
     * @param string|null $intervalTo
     *
     * @return self
     */
    public function setIntervalTo(?string $intervalTo) : self
    {
        $this->intervalTo = $intervalTo;
        return $this;
    }
    /**
     * Заказана разгрузка «до двери» силами «ПЭК»
     *
     * @return bool|null
     */
    public function getIsLoading() : ?bool
    {
        return $this->isLoading;
    }
    /**
     * Заказана разгрузка «до двери» силами «ПЭК»
     *
     * @param bool|null $isLoading
     *
     * @return self
     */
    public function setIsLoading(?bool $isLoading) : self
    {
        $this->isLoading = $isLoading;
        return $this;
    }
}