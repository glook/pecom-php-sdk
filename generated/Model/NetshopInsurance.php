<?php

namespace glook\PecomSdk\Generated\Model;

class NetshopInsurance
{
    /**
     * @var null|float
     */
    protected $cost;

    /**
     * @var bool
     */
    protected $enabled;

    /**
     * @var null|NetshopPayer
     */
    protected $payer;

    public function getCost(): ?float
    {
        return $this->cost;
    }

    public function setCost(?float $cost): self
    {
        $this->cost = $cost;

        return $this;
    }

    public function getEnabled(): bool
    {
        return $this->enabled;
    }

    public function setEnabled(bool $enabled): self
    {
        $this->enabled = $enabled;

        return $this;
    }

    public function getPayer(): ?NetshopPayer
    {
        return $this->payer;
    }

    public function setPayer(?NetshopPayer $payer): self
    {
        $this->payer = $payer;

        return $this;
    }
}
