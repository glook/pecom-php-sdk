<?php

namespace glook\PecomSdk\Generated\Model;

class ServiceWithPayer
{
    /**
     * Заказана ли услуга
     *
     * @var null|bool
     */
    protected $enabled;

    /**
     * @var null|PreregistrationPayer
     */
    protected $payer;

    /**
     * Заказана ли услуга
     */
    public function getEnabled(): ?bool
    {
        return $this->enabled;
    }

    /**
     * Заказана ли услуга
     */
    public function setEnabled(?bool $enabled): self
    {
        $this->enabled = $enabled;

        return $this;
    }

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
