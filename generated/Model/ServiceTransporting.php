<?php

namespace glook\PecomSdk\Generated\Model;

class ServiceTransporting
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
