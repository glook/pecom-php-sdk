<?php

namespace glook\PecomSdk\Generated\Model;

class CargoPickupNetworkSubmitRequestCargosCommonServices
{
    /**
     * Плательщик за услугу доставки
     *
     * @var null|CargopickupnetworkServicePayer
     */
    protected $delivery;

    /**
     * Плательщик за услугу страхования
     *
     * @var null|CargopickupnetworkServicePayer
     */
    protected $insurance;

    /**
     * Плательщик за услугу забора груза
     *
     * @var null|CargopickupnetworkServicePayer
     */
    protected $pickUp;

    /**
     * Плательщик за услугу перевозки
     *
     * @var null|CargopickupnetworkServicePayer
     */
    protected $transporting;

    /**
     * Плательщик за услугу доставки
     */
    public function getDelivery(): ?CargopickupnetworkServicePayer
    {
        return $this->delivery;
    }

    /**
     * Плательщик за услугу доставки
     */
    public function setDelivery(?CargopickupnetworkServicePayer $delivery): self
    {
        $this->delivery = $delivery;

        return $this;
    }

    /**
     * Плательщик за услугу страхования
     */
    public function getInsurance(): ?CargopickupnetworkServicePayer
    {
        return $this->insurance;
    }

    /**
     * Плательщик за услугу страхования
     */
    public function setInsurance(?CargopickupnetworkServicePayer $insurance): self
    {
        $this->insurance = $insurance;

        return $this;
    }

    /**
     * Плательщик за услугу забора груза
     */
    public function getPickUp(): ?CargopickupnetworkServicePayer
    {
        return $this->pickUp;
    }

    /**
     * Плательщик за услугу забора груза
     */
    public function setPickUp(?CargopickupnetworkServicePayer $pickUp): self
    {
        $this->pickUp = $pickUp;

        return $this;
    }

    /**
     * Плательщик за услугу перевозки
     */
    public function getTransporting(): ?CargopickupnetworkServicePayer
    {
        return $this->transporting;
    }

    /**
     * Плательщик за услугу перевозки
     */
    public function setTransporting(?CargopickupnetworkServicePayer $transporting): self
    {
        $this->transporting = $transporting;

        return $this;
    }
}
