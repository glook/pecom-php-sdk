<?php

namespace glook\PecomSdk\Generated\Model;

class CargoPickupNetworkSubmitRequestCargosItemsItemServicesHardPacking
{
    /**
     * Заказана ли услуга
     *
     * @var bool
     */
    protected $enabled;
    /**
     * 
     *
     * @var CargopickupnetworkPayer
     */
    protected $payer;
    /**
     * Количество мест в ЗТУ
     *
     * @var int|null
     */
    protected $positionsCount;
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
     * 
     *
     * @return CargopickupnetworkPayer
     */
    public function getPayer() : CargopickupnetworkPayer
    {
        return $this->payer;
    }
    /**
     * 
     *
     * @param CargopickupnetworkPayer $payer
     *
     * @return self
     */
    public function setPayer(CargopickupnetworkPayer $payer) : self
    {
        $this->payer = $payer;
        return $this;
    }
    /**
     * Количество мест в ЗТУ
     *
     * @return int|null
     */
    public function getPositionsCount() : ?int
    {
        return $this->positionsCount;
    }
    /**
     * Количество мест в ЗТУ
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