<?php

namespace glook\PecomSdk\Generated\Model;

class CargoPickupNetworkSubmitRequestCargosItemsItemServicesDelivery
{
    /**
     * Адрес доставки. Поле обязательно, если `"enabled":true`.
     *
     * @var null|string
     */
    protected $address;

    /**
     * Дата авизации.
     *
     * @var null|\DateTime
     */
    protected $avisationDateTime;

    /**
     * Заказана ли услуга.
     *
     * @var bool
     */
    protected $enabled;

    /**
     * Плательщик.
     *
     * @var null|CargopickupnetworkPayer
     */
    protected $payer;

    /**
     * Адрес доставки. Поле обязательно, если `"enabled":true`.
     */
    public function getAddress(): ?string
    {
        return $this->address;
    }

    /**
     * Адрес доставки. Поле обязательно, если `"enabled":true`.
     */
    public function setAddress(?string $address): self
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Дата авизации.
     */
    public function getAvisationDateTime(): ?\DateTime
    {
        return $this->avisationDateTime;
    }

    /**
     * Дата авизации.
     */
    public function setAvisationDateTime(?\DateTime $avisationDateTime): self
    {
        $this->avisationDateTime = $avisationDateTime;

        return $this;
    }

    /**
     * Заказана ли услуга.
     */
    public function getEnabled(): bool
    {
        return $this->enabled;
    }

    /**
     * Заказана ли услуга.
     */
    public function setEnabled(bool $enabled): self
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Плательщик.
     */
    public function getPayer(): ?CargopickupnetworkPayer
    {
        return $this->payer;
    }

    /**
     * Плательщик.
     */
    public function setPayer(?CargopickupnetworkPayer $payer): self
    {
        $this->payer = $payer;

        return $this;
    }
}
