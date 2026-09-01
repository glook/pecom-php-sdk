<?php

namespace glook\PecomSdk\Generated\Model;

class ServiceDelivery
{
    /**
     * Дата и время  авизации, поле необязательно. По умолчанию передается  00:00:00, если время авизации не указанно, доставку будут осуществлять в любое время указанной даты. Указывается локальное время по адресу доставки. Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     *
     * @var null|string
     */
    protected $avisationDateTime;

    /**
     * Метры переноски груза, поле необязательно
     *
     * @var null|int
     */
    protected $carryingDistance;

    /**
     * Плановая дата доставки, поле необязательно
     *
     * @var null|\DateTime
     */
    protected $dateOfDelivery;

    /**
     * Требуется ли проверять передаваемую дату доставки на предмет ее выполнимости. По умолчанию дата доставки не проверяется. Поле необязательно.
     *
     * @var null|bool
     */
    protected $dateOfDeliveryCheck;

    /**
     * Заказана ли услуга. Заказ услуги обязателен при type = 7 «ДТС Автоперевозка».
     *
     * @var null|bool
     */
    protected $enabled;

    /**
     * Этаж, поле необязательно
     *
     * @var null|int
     */
    protected $floor;

    /**
     * Есть лифт, поле необязательно
     *
     * @var null|bool
     */
    protected $isElevator;

    /**
     * Необходима разгрузка силами «ПЭК», поле необязательно
     *
     * @var null|bool
     */
    protected $isLoading;

    /**
     * @var null|PreregistrationPayer
     */
    protected $payer;

    /**
     * Дата и время  авизации, поле необязательно. По умолчанию передается  00:00:00, если время авизации не указанно, доставку будут осуществлять в любое время указанной даты. Указывается локальное время по адресу доставки. Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     */
    public function getAvisationDateTime(): ?string
    {
        return $this->avisationDateTime;
    }

    /**
     * Дата и время  авизации, поле необязательно. По умолчанию передается  00:00:00, если время авизации не указанно, доставку будут осуществлять в любое время указанной даты. Указывается локальное время по адресу доставки. Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     */
    public function setAvisationDateTime(?string $avisationDateTime): self
    {
        $this->avisationDateTime = $avisationDateTime;

        return $this;
    }

    /**
     * Метры переноски груза, поле необязательно
     */
    public function getCarryingDistance(): ?int
    {
        return $this->carryingDistance;
    }

    /**
     * Метры переноски груза, поле необязательно
     */
    public function setCarryingDistance(?int $carryingDistance): self
    {
        $this->carryingDistance = $carryingDistance;

        return $this;
    }

    /**
     * Плановая дата доставки, поле необязательно
     */
    public function getDateOfDelivery(): ?\DateTime
    {
        return $this->dateOfDelivery;
    }

    /**
     * Плановая дата доставки, поле необязательно
     */
    public function setDateOfDelivery(?\DateTime $dateOfDelivery): self
    {
        $this->dateOfDelivery = $dateOfDelivery;

        return $this;
    }

    /**
     * Требуется ли проверять передаваемую дату доставки на предмет ее выполнимости. По умолчанию дата доставки не проверяется. Поле необязательно.
     */
    public function getDateOfDeliveryCheck(): ?bool
    {
        return $this->dateOfDeliveryCheck;
    }

    /**
     * Требуется ли проверять передаваемую дату доставки на предмет ее выполнимости. По умолчанию дата доставки не проверяется. Поле необязательно.
     */
    public function setDateOfDeliveryCheck(?bool $dateOfDeliveryCheck): self
    {
        $this->dateOfDeliveryCheck = $dateOfDeliveryCheck;

        return $this;
    }

    /**
     * Заказана ли услуга. Заказ услуги обязателен при type = 7 «ДТС Автоперевозка».
     */
    public function getEnabled(): ?bool
    {
        return $this->enabled;
    }

    /**
     * Заказана ли услуга. Заказ услуги обязателен при type = 7 «ДТС Автоперевозка».
     */
    public function setEnabled(?bool $enabled): self
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Этаж, поле необязательно
     */
    public function getFloor(): ?int
    {
        return $this->floor;
    }

    /**
     * Этаж, поле необязательно
     */
    public function setFloor(?int $floor): self
    {
        $this->floor = $floor;

        return $this;
    }

    /**
     * Есть лифт, поле необязательно
     */
    public function getIsElevator(): ?bool
    {
        return $this->isElevator;
    }

    /**
     * Есть лифт, поле необязательно
     */
    public function setIsElevator(?bool $isElevator): self
    {
        $this->isElevator = $isElevator;

        return $this;
    }

    /**
     * Необходима разгрузка силами «ПЭК», поле необязательно
     */
    public function getIsLoading(): ?bool
    {
        return $this->isLoading;
    }

    /**
     * Необходима разгрузка силами «ПЭК», поле необязательно
     */
    public function setIsLoading(?bool $isLoading): self
    {
        $this->isLoading = $isLoading;

        return $this;
    }

    public function getPayer(): ?PreregistrationPayer
    {
        return $this->payer;
    }

    public function setPayer(?PreregistrationPayer $payer): self
    {
        $this->payer = $payer;

        return $this;
    }
}
