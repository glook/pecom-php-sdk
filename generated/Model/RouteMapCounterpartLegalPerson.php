<?php

namespace glook\PecomSdk\Generated\Model;

class RouteMapCounterpartLegalPerson
{
    /**
     * ИНН контрагента
     *
     * @var string|null
     */
    protected $inn;
    /**
     * КПП контрагента
     *
     * @var string|null
     */
    protected $kpp;
    /**
     * ИНН контрагента
     *
     * @return string|null
     */
    public function getInn() : ?string
    {
        return $this->inn;
    }
    /**
     * ИНН контрагента
     *
     * @param string|null $inn
     *
     * @return self
     */
    public function setInn(?string $inn) : self
    {
        $this->inn = $inn;
        return $this;
    }
    /**
     * КПП контрагента
     *
     * @return string|null
     */
    public function getKpp() : ?string
    {
        return $this->kpp;
    }
    /**
     * КПП контрагента
     *
     * @param string|null $kpp
     *
     * @return self
     */
    public function setKpp(?string $kpp) : self
    {
        $this->kpp = $kpp;
        return $this;
    }
}