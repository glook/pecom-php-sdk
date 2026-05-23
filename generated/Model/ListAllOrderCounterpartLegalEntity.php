<?php

namespace glook\PecomSdk\Generated\Model;

class ListAllOrderCounterpartLegalEntity
{
    /**
     * ИНН.
     *
     * @var null|string
     */
    protected $iNN;

    /**
     * КПП
     *
     * @var null|string
     */
    protected $kPP;

    /**
     * ИНН.
     */
    public function getINN(): ?string
    {
        return $this->iNN;
    }

    /**
     * ИНН.
     */
    public function setINN(?string $iNN): self
    {
        $this->iNN = $iNN;

        return $this;
    }

    /**
     * КПП
     */
    public function getKPP(): ?string
    {
        return $this->kPP;
    }

    /**
     * КПП
     */
    public function setKPP(?string $kPP): self
    {
        $this->kPP = $kPP;

        return $this;
    }
}
