<?php

namespace glook\PecomSdk\Generated\Model;

class CargoPickupNetworkSubmitRequestCargosItemsItemServicesStrapping
{
    /**
     * Заказана ли услуга
     *
     * @var bool
     */
    protected $enabled;
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
}