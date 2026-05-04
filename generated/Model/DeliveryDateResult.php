<?php

namespace glook\PecomSdk\Generated\Model;

class DeliveryDateResult
{
    /**
     * Ближайший день забора/доставки от переданной даты в запросе
     *
     * @var string|null
     */
    protected $date;
    /**
     * В этот день действует льготный тариф на забор/доставку по запрошенному адресу
     *
     * @var bool|null
     */
    protected $isPreferential;
    /**
     * Минимальные временные интервалы на забор/доставку груза.
     *
     * @var Period[]|null
     */
    protected $periods;
    /**
     * Ближайший день забора/доставки от переданной даты в запросе
     *
     * @return string|null
     */
    public function getDate() : ?string
    {
        return $this->date;
    }
    /**
     * Ближайший день забора/доставки от переданной даты в запросе
     *
     * @param string|null $date
     *
     * @return self
     */
    public function setDate(?string $date) : self
    {
        $this->date = $date;
        return $this;
    }
    /**
     * В этот день действует льготный тариф на забор/доставку по запрошенному адресу
     *
     * @return bool|null
     */
    public function getIsPreferential() : ?bool
    {
        return $this->isPreferential;
    }
    /**
     * В этот день действует льготный тариф на забор/доставку по запрошенному адресу
     *
     * @param bool|null $isPreferential
     *
     * @return self
     */
    public function setIsPreferential(?bool $isPreferential) : self
    {
        $this->isPreferential = $isPreferential;
        return $this;
    }
    /**
     * Минимальные временные интервалы на забор/доставку груза.
     *
     * @return Period[]|null
     */
    public function getPeriods() : ?array
    {
        return $this->periods;
    }
    /**
     * Минимальные временные интервалы на забор/доставку груза.
     *
     * @param Period[]|null $periods
     *
     * @return self
     */
    public function setPeriods(?array $periods) : self
    {
        $this->periods = $periods;
        return $this;
    }
}