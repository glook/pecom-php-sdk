<?php

namespace glook\PecomSdk\Generated\Model;

class CargoPickupNetworkSubmitRequestCargosItemsItemServicesSealing
{
    /**
     * Заказана ли услуга (обязательна только до 3 кг)
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
     * Количество мест для пломбировки
     *
     * @var int|null
     */
    protected $positionsCount;
    /**
     * Заказана ли услуга (обязательна только до 3 кг)
     *
     * @return bool
     */
    public function getEnabled() : bool
    {
        return $this->enabled;
    }
    /**
     * Заказана ли услуга (обязательна только до 3 кг)
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
    /**
     * Количество мест для пломбировки
     *
     * @return int|null
     */
    public function getPositionsCount() : ?int
    {
        return $this->positionsCount;
    }
    /**
     * Количество мест для пломбировки
     *
     * @param int|null $positionsCount
     *
     * @return self
     */
    public function setPositionsCount(?int $positionsCount) : self
    {
        $this->positionsCount = $positionsCount;
        return $this;
    }
}