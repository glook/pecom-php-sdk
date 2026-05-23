<?php

namespace glook\PecomSdk\Generated\Model;

class RouteMapCounterpartLegalPerson
{
    /**
     * ИНН контрагента.
     *
     * @var null|string
     */
    protected $inn;

    /**
     * КПП контрагента.
     *
     * @var null|string
     */
    protected $kpp;

    /**
     * ИНН контрагента.
     */
    public function getInn(): ?string
    {
        return $this->inn;
    }

    /**
     * ИНН контрагента.
     */
    public function setInn(?string $inn): self
    {
        $this->inn = $inn;

        return $this;
    }

    /**
     * КПП контрагента.
     */
    public function getKpp(): ?string
    {
        return $this->kpp;
    }

    /**
     * КПП контрагента.
     */
    public function setKpp(?string $kpp): self
    {
        $this->kpp = $kpp;

        return $this;
    }
}
