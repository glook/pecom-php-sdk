<?php

namespace glook\PecomSdk\Generated\Model;

class ServiceTransporting
{
    /**
     * 
     *
     * @var PreregistrationPayer|null
     */
    protected $payer;
    /**
     * 
     *
     * @return PreregistrationPayer|null
     */
    public function getPayer() : ?PreregistrationPayer
    {
        return $this->payer;
    }
    /**
     * 
     *
     * @param PreregistrationPayer|null $payer
     *
     * @return self
     */
    public function setPayer(?PreregistrationPayer $payer) : self
    {
        $this->payer = $payer;
        return $this;
    }
}