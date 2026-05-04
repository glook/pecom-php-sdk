<?php

namespace glook\PecomSdk\Generated\Model;

class CargoPickupSenderResponse
{
    /**
     * Нормализованный адрес как он был идентифицирован системами ПЭК
     *
     * @var string
     */
    protected $addressNormal;
    /**
     * 
     *
     * @var CoordinateNumbers
     */
    protected $coordinates;
    /**
     * 
     *
     * @var string|null
     */
    protected $warehouseID;
    /**
     * Нормализованный адрес как он был идентифицирован системами ПЭК
     *
     * @return string
     */
    public function getAddressNormal() : string
    {
        return $this->addressNormal;
    }
    /**
     * Нормализованный адрес как он был идентифицирован системами ПЭК
     *
     * @param string $addressNormal
     *
     * @return self
     */
    public function setAddressNormal(string $addressNormal) : self
    {
        $this->addressNormal = $addressNormal;
        return $this;
    }
    /**
     * 
     *
     * @return CoordinateNumbers
     */
    public function getCoordinates() : CoordinateNumbers
    {
        return $this->coordinates;
    }
    /**
     * 
     *
     * @param CoordinateNumbers $coordinates
     *
     * @return self
     */
    public function setCoordinates(CoordinateNumbers $coordinates) : self
    {
        $this->coordinates = $coordinates;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getWarehouseID() : ?string
    {
        return $this->warehouseID;
    }
    /**
     * 
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