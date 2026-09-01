<?php

namespace glook\PecomSdk\Generated\Model;

class CargopickupnetworkServicePayer
{
    /**
     * Плательщик
     *
     * @var null|CargopickupnetworkPayer
     */
    protected $payer;

    /**
     * Плательщик
     */
    public function getPayer(): ?CargopickupnetworkPayer
    {
        return $this->payer;
    }

    /**
     * Плательщик
     */
    public function setPayer(?CargopickupnetworkPayer $payer): self
    {
        $this->payer = $payer;

        return $this;
    }
}
