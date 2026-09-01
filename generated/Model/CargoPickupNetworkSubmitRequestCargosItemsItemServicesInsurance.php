<?php

namespace glook\PecomSdk\Generated\Model;

class CargoPickupNetworkSubmitRequestCargosItemsItemServicesInsurance
{
    /**
     * Оценочная стоимость, руб. Поле обязательно, если `"enabled":true`
     *
     * @var null|float
     */
    protected $cost;

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
     * Оценочная стоимость, руб. Поле обязательно, если `"enabled":true`
     */
    public function getCost(): ?float
    {
        return $this->cost;
    }

    /**
     * Оценочная стоимость, руб. Поле обязательно, если `"enabled":true`
     */
    public function setCost(?float $cost): self
    {
        $this->cost = $cost;

        return $this;
    }

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
