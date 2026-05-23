<?php

namespace glook\PecomSdk\Generated\Model;

class DeliveryDateResult
{
    /**
     * Ближайший день забора/доставки от переданной даты в запросе.
     *
     * @var null|string
     */
    protected $date;

    /**
     * В этот день действует льготный тариф на забор/доставку по запрошенному адресу.
     *
     * @var null|bool
     */
    protected $isPreferential;

    /**
     * Минимальные временные интервалы на забор/доставку груза.
     *
     * @var null|Period[]
     */
    protected $periods;

    /**
     * Ближайший день забора/доставки от переданной даты в запросе.
     */
    public function getDate(): ?string
    {
        return $this->date;
    }

    /**
     * Ближайший день забора/доставки от переданной даты в запросе.
     */
    public function setDate(?string $date): self
    {
        $this->date = $date;

        return $this;
    }

    /**
     * В этот день действует льготный тариф на забор/доставку по запрошенному адресу.
     */
    public function getIsPreferential(): ?bool
    {
        return $this->isPreferential;
    }

    /**
     * В этот день действует льготный тариф на забор/доставку по запрошенному адресу.
     */
    public function setIsPreferential(?bool $isPreferential): self
    {
        $this->isPreferential = $isPreferential;

        return $this;
    }

    /**
     * Минимальные временные интервалы на забор/доставку груза.
     *
     * @return null|Period[]
     */
    public function getPeriods(): ?array
    {
        return $this->periods;
    }

    /**
     * Минимальные временные интервалы на забор/доставку груза.
     *
     * @param null|Period[] $periods
     */
    public function setPeriods(?array $periods): self
    {
        $this->periods = $periods;

        return $this;
    }
}
