<?php

namespace glook\PecomSdk\Generated\Model;

class PreregistrationSubmitResponseSender
{
    /**
     * Адрес склада отправления
     *
     * @var string|null
     */
    protected $addressNormal;
    /**
     * 
     *
     * @var PreregistrationSubmitResponseSenderCoordinates|null
     */
    protected $coordinates;
    /**
     * Идентификатор склада отправления. Значение Null, если заказана услуга забора груза от отправителя
     *
     * @var string|null
     */
    protected $warehouseID;
    /**
     * Адрес склада отправления
     *
     * @return string|null
     */
    public function getAddressNormal() : ?string
    {
        return $this->addressNormal;
    }
    /**
     * Адрес склада отправления
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
     * @return PreregistrationSubmitResponseSenderCoordinates|null
     */
    public function getCoordinates() : ?PreregistrationSubmitResponseSenderCoordinates
    {
        return $this->coordinates;
    }
    /**
     * 
     *
     * @param PreregistrationSubmitResponseSenderCoordinates|null $coordinates
     *
     * @return self
     */
    public function setCoordinates(?PreregistrationSubmitResponseSenderCoordinates $coordinates) : self
    {
        $this->coordinates = $coordinates;
        return $this;
    }
    /**
     * Идентификатор склада отправления. Значение Null, если заказана услуга забора груза от отправителя
     *
     * @return string|null
     */
    public function getWarehouseID() : ?string
    {
        return $this->warehouseID;
    }
    /**
     * Идентификатор склада отправления. Значение Null, если заказана услуга забора груза от отправителя
     *
     * @param string|null $warehouseID
     *
     * @return self
     */
    public function setWarehouseID(?string $warehouseID) : self
    {
        $this->warehouseID = $warehouseID;
        return $this;
    }
}