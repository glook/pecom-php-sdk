<?php

namespace glook\PecomSdk\Generated\Model;

class CargoPickupNetworkSubmitRequestCargosItemsItemServicesDelivery
{
    /**
     * Адрес доставки. Поле обязательно, если `"enabled":true`
     *
     * @var string|null
     */
    protected $address;
    /**
     * Дата авизации
     *
     * @var \DateTime|null
     */
    protected $avisationDateTime;
    /**
     * Заказана ли услуга
     *
     * @var bool
     */
    protected $enabled;
    /**
     * Плательщик
     *
     * @var CargopickupnetworkPayer|null
     */
    protected $payer;
    /**
     * Адрес доставки. Поле обязательно, если `"enabled":true`
     *
     * @return string|null
     */
    public function getAddress() : ?string
    {
        return $this->address;
    }
    /**
     * Адрес доставки. Поле обязательно, если `"enabled":true`
     *
     * @param string|null $address
     *
     * @return self
     */
    public function setAddress(?string $address) : self
    {
        $this->address = $address;
        return $this;
    }
    /**
     * Дата авизации
     *
     * @return \DateTime|null
     */
    public function getAvisationDateTime() : ?\DateTime
    {
        return $this->avisationDateTime;
    }
    /**
     * Дата авизации
     *
     * @param \DateTime|null $avisationDateTime
     *
     * @return self
     */
    public function setAvisationDateTime(?\DateTime $avisationDateTime) : self
    {
        $this->avisationDateTime = $avisationDateTime;
        return $this;
    }
    /**
     * Заказана ли услуга
     *
     * @return bool
     */
    public function getEnabled() : bool
    {
        return $this->enabled;
    }
    /**
     * Заказана ли услуга
     *
     * @param bool $enabled
     *
     * @return self
     */
    public function setEnabled(bool $enabled) : self
    {
        $this->enabled = $enabled;
        return $this;
    }
    /**
     * Плательщик
     *
     * @return CargopickupnetworkPayer|null
     */
    public function getPayer() : ?CargopickupnetworkPayer
    {
        return $this->payer;
    }
    /**
     * Плательщик
     *
     * @param CargopickupnetworkPayer|null $payer
     *
     * @return self
     */
    public function setPayer(?CargopickupnetworkPayer $payer) : self
    {
        $this->payer = $payer;
        return $this;
    }
}