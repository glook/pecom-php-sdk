<?php

namespace glook\PecomSdk\Generated\Model;

class CounterpartInRouteMap
{
    /**
     * Количество грузов, запланированных к доставке
     *
     * @var float|null
     */
    protected $countCargosForDelivery;
    /**
     * Количество грузов, запланированных к забору
     *
     * @var float|null
     */
    protected $countCargosForIntake;
    /**
     * Контрагент, к информации которого у логина есть доступ (прочие контрагенты маршрутного листа не выводятся в ответе метода)
     *
     * @var RouteMapCounterpart|null
     */
    protected $counterpart;
    /**
     * Количество грузов, запланированных к доставке
     *
     * @return float|null
     */
    public function getCountCargosForDelivery() : ?float
    {
        return $this->countCargosForDelivery;
    }
    /**
     * Количество грузов, запланированных к доставке
     *
     * @param float|null $countCargosForDelivery
     *
     * @return self
     */
    public function setCountCargosForDelivery(?float $countCargosForDelivery) : self
    {
        $this->countCargosForDelivery = $countCargosForDelivery;
        return $this;
    }
    /**
     * Количество грузов, запланированных к забору
     *
     * @return float|null
     */
    public function getCountCargosForIntake() : ?float
    {
        return $this->countCargosForIntake;
    }
    /**
     * Количество грузов, запланированных к забору
     *
     * @param float|null $countCargosForIntake
     *
     * @return self
     */
    public function setCountCargosForIntake(?float $countCargosForIntake) : self
    {
        $this->countCargosForIntake = $countCargosForIntake;
        return $this;
    }
    /**
     * Контрагент, к информации которого у логина есть доступ (прочие контрагенты маршрутного листа не выводятся в ответе метода)
     *
     * @return RouteMapCounterpart|null
     */
    public function getCounterpart() : ?RouteMapCounterpart
    {
        return $this->counterpart;
    }
    /**
     * Контрагент, к информации которого у логина есть доступ (прочие контрагенты маршрутного листа не выводятся в ответе метода)
     *
     * @param RouteMapCounterpart|null $counterpart
     *
     * @return self
     */
    public function setCounterpart(?RouteMapCounterpart $counterpart) : self
    {
        $this->counterpart = $counterpart;
        return $this;
    }
}