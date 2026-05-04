<?php

namespace glook\PecomSdk\Generated\Model;

class NetshopPalletTransporting
{
    /**
     * 
     *
     * @var NetshopPayer
     */
    protected $payer;
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