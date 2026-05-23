<?php

namespace glook\PecomSdk\Generated\Model;

class ServicePickUp
{
    /**
     * @var null|PreregistrationPayer
     */
    protected $payer;

    public function getPayer(): ?PreregistrationPayer
    {
        return $this->payer;
    }

    public function setPayer(?PreregistrationPayer $payer): self
    {
        $this->payer = $payer;

        return $this;
    }
}
