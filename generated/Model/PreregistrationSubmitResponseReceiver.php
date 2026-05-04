<?php

namespace glook\PecomSdk\Generated\Model;

class PreregistrationSubmitResponseReceiver
{
    /**
     * Адрес склада получения или нормализованный адрес доставки (что заказано)
     *
     * @var string|null
     */
    protected $addressNormal;
    /**
     * 
     *
     * @var PreregistrationSubmitResponseReceiverCoordinates|null
     */
    protected $coordinates;
    /**
     * Идентификатор склада получения груза (если заказана доставка до адреса, то null)
     *
     * @var string|null
     */
    protected $warehouseId;
    /**
     * Адрес склада получения или нормализованный адрес доставки (что заказано)
     *
     * @return string|null
     */
    public function getAddressNormal() : ?string
    {
        return $this->addressNormal;
    }
    /**
     * Адрес склада получения или нормализованный адрес доставки (что заказано)
     *
     * @param string|null $addressNormal
     *
     * @return self
     */
    public function setAddressNormal(?string $addressNormal) : self
    {
        $this->addressNormal = $addressNormal;
        return $this;
    }
    /**
     * 
     *
     * @return PreregistrationSubmitResponseReceiverCoordinates|null
     */
    public function getCoordinates() : ?PreregistrationSubmitResponseReceiverCoordinates
    {
        return $this->coordinates;
    }
    /**
     * 
     *
     * @param PreregistrationSubmitResponseReceiverCoordinates|null $coordinates
     *
     * @return self
     */
    public function setCoordinates(?PreregistrationSubmitResponseReceiverCoordinates $coordinates) : self
    {
        $this->coordinates = $coordinates;
        return $this;
    }
    /**
     * Идентификатор склада получения груза (если заказана доставка до адреса, то null)
     *
     * @return string|null
     */
    public function getWarehouseId() : ?string
    {
        return $this->warehouseId;
    }
    /**
     * Идентификатор склада получения груза (если заказана доставка до адреса, то null)
     *
     * @param string|null $warehouseId
     *
     * @return self
     */
    public function setWarehouseId(?string $warehouseId) : self
    {
        $this->warehouseId = $warehouseId;
        return $this;
    }
}