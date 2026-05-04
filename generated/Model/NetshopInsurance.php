<?php

namespace glook\PecomSdk\Generated\Model;

class NetshopInsurance
{
    /**
     * 
     *
     * @var float|null
     */
    protected $cost;
    /**
     * 
     *
     * @var bool
     */
    protected $enabled;
    /**
     * 
     *
     * @var NetshopPayer
     */
    protected $payer;
    /**
     * 
     *
     * @return float|null
     */
    public function getCost() : ?float
    {
        return $this->cost;
    }
    /**
     * 
     *
     * @param float|null $cost
     *
     * @return self
     */
    public function setCost(?float $cost) : self
    {
        $this->cost = $cost;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getEnabled() : bool
    {
        return $this->enabled;
    }
    /**
     * 
     *
     * @param bool $enabled
     *
     * @return self
     */
    public function setEnabled(bool $enabled) : self
    {
        $this->enabled = $enabled;
        return $this;
    }
    /**
     * 
     *
     * @return NetshopPayer
     */
    public function getPayer() : NetshopPayer
    {
        return $this->payer;
    }
    /**
     * 
     *
     * @param NetshopPayer $payer
     *
     * @return self
     */
    public function setPayer(NetshopPayer $payer) : self
    {
        $this->payer = $payer;
        return $this;
    }
}