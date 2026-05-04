<?php

namespace glook\PecomSdk\Generated\Model;

class ServicePickUp
{
    /**
     * 
     *
     * @var PreregistrationPayer
     */
    protected $payer;
    /**
     * 
     *
     * @return PreregistrationPayer
     */
    public function getPayer() : PreregistrationPayer
    {
        return $this->payer;
    }
    /**
     * 
     *
     * @param PreregistrationPayer $payer
     *
     * @return self
     */
    public function setPayer(PreregistrationPayer $payer) : self
    {
        $this->payer = $payer;
        return $this;
    }
}