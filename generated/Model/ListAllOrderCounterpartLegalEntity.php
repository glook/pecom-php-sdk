<?php

namespace glook\PecomSdk\Generated\Model;

class ListAllOrderCounterpartLegalEntity
{
    /**
     * ИНН
     *
     * @var string|null
     */
    protected $iNN;
    /**
     * КПП
     *
     * @var string|null
     */
    protected $kPP;
    /**
     * ИНН
     *
     * @return string|null
     */
    public function getINN() : ?string
    {
        return $this->iNN;
    }
    /**
     * ИНН
     *
     * @param string|null $iNN
     *
     * @return self
     */
    public function setINN(?string $iNN) : self
    {
        $this->iNN = $iNN;
        return $this;
    }
    /**
     * КПП
     *
     * @return string|null
     */
    public function getKPP() : ?string
    {
        return $this->kPP;
    }
    /**
     * КПП
     *
     * @param string|null $kPP
     *
     * @return self
     */
    public function setKPP(?string $kPP) : self
    {
        $this->kPP = $kPP;
        return $this;
    }
}