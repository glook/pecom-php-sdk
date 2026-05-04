<?php

namespace glook\PecomSdk\Generated\Model;

class ServiceDelivery
{
    /**
     * Дата и время  авизации, поле необязательно. По умолчанию передается  00:00:00, если время авизации не указанно, доставку будут осуществлять в любое время указанной даты. Указывается локальное время по адресу доставки. Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     *
     * @var string|null
     */
    protected $avisationDateTime;
    /**
     * Метры переноски груза, поле необязательно
     *
     * @var int|null
     */
    protected $carryingDistance;
    /**
     * Плановая дата доставки, поле необязательно
     *
     * @var \DateTime|null
     */
    protected $dateOfDelivery;
    /**
     * Требуется ли проверять передаваемую дату доставки на предмет ее выполнимости. По умолчанию дата доставки не проверяется. Поле необязательно.
     *
     * @var bool|null
     */
    protected $dateOfDeliveryCheck;
    /**
     * Заказана ли услуга. Заказ услуги обязателен при type = 7 «ДТС Автоперевозка».
     *
     * @var bool|null
     */
    protected $enabled;
    /**
     * Этаж, поле необязательно
     *
     * @var int|null
     */
    protected $floor;
    /**
     * Есть лифт, поле необязательно
     *
     * @var bool|null
     */
    protected $isElevator;
    /**
     * Необходима разгрузка силами «ПЭК», поле необязательно
     *
     * @var bool|null
     */
    protected $isLoading;
    /**
     * 
     *
     * @var PreregistrationPayer
     */
    protected $payer;
    /**
     * Дата и время  авизации, поле необязательно. По умолчанию передается  00:00:00, если время авизации не указанно, доставку будут осуществлять в любое время указанной даты. Указывается локальное время по адресу доставки. Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     *
     * @return string|null
     */
    public function getAvisationDateTime() : ?string
    {
        return $this->avisationDateTime;
    }
    /**
     * Дата и время  авизации, поле необязательно. По умолчанию передается  00:00:00, если время авизации не указанно, доставку будут осуществлять в любое время указанной даты. Указывается локальное время по адресу доставки. Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     *
     * @param string|null $avisationDateTime
     *
     * @return self
     */
    public function setAvisationDateTime(?string $avisationDateTime) : self
    {
        $this->avisationDateTime = $avisationDateTime;
        return $this;
    }
    /**
     * Метры переноски груза, поле необязательно
     *
     * @return int|null
     */
    public function getCarryingDistance() : ?int
    {
        return $this->carryingDistance;
    }
    /**
     * Метры переноски груза, поле необязательно
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
     * Плановая дата доставки, поле необязательно
     *
     * @return \DateTime|null
     */
    public function getDateOfDelivery() : ?\DateTime
    {
        return $this->dateOfDelivery;
    }
    /**
     * Плановая дата доставки, поле необязательно
     *
     * @param \DateTime|null $dateOfDelivery
     *
     * @return self
     */
    public function setDateOfDelivery(?\DateTime $dateOfDelivery) : self
    {
        $this->dateOfDelivery = $dateOfDelivery;
        return $this;
    }
    /**
     * Требуется ли проверять передаваемую дату доставки на предмет ее выполнимости. По умолчанию дата доставки не проверяется. Поле необязательно.
     *
     * @return bool|null
     */
    public function getDateOfDeliveryCheck() : ?bool
    {
        return $this->dateOfDeliveryCheck;
    }
    /**
     * Требуется ли проверять передаваемую дату доставки на предмет ее выполнимости. По умолчанию дата доставки не проверяется. Поле необязательно.
     *
     * @param bool|null $dateOfDeliveryCheck
     *
     * @return self
     */
    public function setDateOfDeliveryCheck(?bool $dateOfDeliveryCheck) : self
    {
        $this->dateOfDeliveryCheck = $dateOfDeliveryCheck;
        return $this;
    }
    /**
     * Заказана ли услуга. Заказ услуги обязателен при type = 7 «ДТС Автоперевозка».
     *
     * @return bool|null
     */
    public function getEnabled() : ?bool
    {
        return $this->enabled;
    }
    /**
     * Заказана ли услуга. Заказ услуги обязателен при type = 7 «ДТС Автоперевозка».
     *
     * @param bool|null $enabled
     *
     * @return self
     */
    public function setEnabled(?bool $enabled) : self
    {
        $this->enabled = $enabled;
        return $this;
    }
    /**
     * Этаж, поле необязательно
     *
     * @return int|null
     */
    public function getFloor() : ?int
    {
        return $this->floor;
    }
    /**
     * Этаж, поле необязательно
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
     * Есть лифт, поле необязательно
     *
     * @return bool|null
     */
    public function getIsElevator() : ?bool
    {
        return $this->isElevator;
    }
    /**
     * Есть лифт, поле необязательно
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
     * Необходима разгрузка силами «ПЭК», поле необязательно
     *
     * @return bool|null
     */
    public function getIsLoading() : ?bool
    {
        return $this->isLoading;
    }
    /**
     * Необходима разгрузка силами «ПЭК», поле необязательно
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
    /**
     * 
     *
     * @return PreregistrationPayer
     */
    public function getPayer() : PreregistrationPayer
    {
        return $this->payer;
    }
    /**
     * 
     *
     * @param PreregistrationPayer $payer
     *
     * @return self
     */
    public function setPayer(PreregistrationPayer $payer) : self
    {
        $this->payer = $payer;
        return $this;
    }
}