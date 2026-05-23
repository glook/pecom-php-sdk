<?php

namespace glook\PecomSdk\Generated\Model;

class CounterpartInRouteMap
{
    /**
     * Количество грузов, запланированных к доставке.
     *
     * @var null|float
     */
    protected $countCargosForDelivery;

    /**
     * Количество грузов, запланированных к забору.
     *
     * @var null|float
     */
    protected $countCargosForIntake;

    /**
     * Контрагент, к информации которого у логина есть доступ (прочие контрагенты маршрутного листа не выводятся в ответе метода).
     *
     * @var null|RouteMapCounterpart
     */
    protected $counterpart;

    /**
     * Количество грузов, запланированных к доставке.
     */
    public function getCountCargosForDelivery(): ?float
    {
        return $this->countCargosForDelivery;
    }

    /**
     * Количество грузов, запланированных к доставке.
     */
    public function setCountCargosForDelivery(?float $countCargosForDelivery): self
    {
        $this->countCargosForDelivery = $countCargosForDelivery;

        return $this;
    }

    /**
     * Количество грузов, запланированных к забору.
     */
    public function getCountCargosForIntake(): ?float
    {
        return $this->countCargosForIntake;
    }

    /**
     * Количество грузов, запланированных к забору.
     */
    public function setCountCargosForIntake(?float $countCargosForIntake): self
    {
        $this->countCargosForIntake = $countCargosForIntake;

        return $this;
    }

    /**
     * Контрагент, к информации которого у логина есть доступ (прочие контрагенты маршрутного листа не выводятся в ответе метода).
     */
    public function getCounterpart(): ?RouteMapCounterpart
    {
        return $this->counterpart;
    }

    /**
     * Контрагент, к информации которого у логина есть доступ (прочие контрагенты маршрутного листа не выводятся в ответе метода).
     */
    public function setCounterpart(?RouteMapCounterpart $counterpart): self
    {
        $this->counterpart = $counterpart;

        return $this;
    }
}
