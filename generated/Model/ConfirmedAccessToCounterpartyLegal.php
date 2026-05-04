<?php

namespace glook\PecomSdk\Generated\Model;

class ConfirmedAccessToCounterpartyLegal
{
    /**
     * ИНН
     *
     * @var string|null
     */
    protected $inn;
    /**
     * КПП
     *
     * @var string|null
     */
    protected $kpp;
    /**
     * ИНН
     *
     * @return string|null
     */
    public function getInn() : ?string
    {
        return $this->inn;
    }
    /**
     * ИНН
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
     * КПП
     *
     * @return string|null
     */
    public function getKpp() : ?string
    {
        return $this->kpp;
    }
    /**
     * КПП
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