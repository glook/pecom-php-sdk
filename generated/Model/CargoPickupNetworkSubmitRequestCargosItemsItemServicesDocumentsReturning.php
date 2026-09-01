<?php

namespace glook\PecomSdk\Generated\Model;

class CargoPickupNetworkSubmitRequestCargosItemsItemServicesDocumentsReturning
{
    /**
     * Заказана ли услуга
     *
     * @var bool
     */
    protected $enabled;

    /**
     * Плательщик
     *
     * @var null|CargopickupnetworkPayer
     */
    protected $payer;

    /**
     * Заказана ли услуга
     */
    public function getEnabled(): bool
    {
        return $this->enabled;
    }

    /**
     * Заказана ли услуга
     */
    public function setEnabled(bool $enabled): self
    {
        $this->enabled = $enabled;

        return $this;
    }

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
