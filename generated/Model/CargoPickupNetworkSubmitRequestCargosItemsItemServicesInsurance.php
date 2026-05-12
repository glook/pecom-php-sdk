<?php

namespace glook\PecomSdk\Generated\Model;

class CargoPickupNetworkSubmitRequestCargosItemsItemServicesInsurance
{
    /**
     * Оценочная стоимость, руб. Поле обязательно, если `"enabled":true`
     *
     * @var float|null
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
     * @var CargopickupnetworkPayer|null
     */
    protected $payer;
    /**
     * Оценочная стоимость, руб. Поле обязательно, если `"enabled":true`
     *
     * @return float|null
     */
    public function getCost() : ?float
    {
        return $this->cost;
    }
    /**
     * Оценочная стоимость, руб. Поле обязательно, если `"enabled":true`
     *
     * @param float|null $cost
     *
     * @return self
     */
    public function setCost(?float $cost) : self
    {
        $this->cost = $cost;
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