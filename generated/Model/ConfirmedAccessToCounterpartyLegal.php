<?php

namespace glook\PecomSdk\Generated\Model;

class ConfirmedAccessToCounterpartyLegal
{
    /**
     * ИНН
     *
     * @var null|string
     */
    protected $inn;

    /**
     * КПП
     *
     * @var null|string
     */
    protected $kpp;

    /**
     * ИНН
     */
    public function getInn(): ?string
    {
        return $this->inn;
    }

    /**
     * ИНН
     */
    public function setInn(?string $inn): self
    {
        $this->inn = $inn;

        return $this;
    }

    /**
     * КПП
     */
    public function getKpp(): ?string
    {
        return $this->kpp;
    }

    /**
     * КПП
     */
    public function setKpp(?string $kpp): self
    {
        $this->kpp = $kpp;

        return $this;
    }
}
