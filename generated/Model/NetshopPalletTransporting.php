<?php

namespace glook\PecomSdk\Generated\Model;

class NetshopPalletTransporting
{
    /**
     * @var NetshopPayer
     */
    protected $payer;

    public function getPayer(): NetshopPayer
    {
        return $this->payer;
    }

    public function setPayer(NetshopPayer $payer): self
    {
        $this->payer = $payer;

        return $this;
    }
}
