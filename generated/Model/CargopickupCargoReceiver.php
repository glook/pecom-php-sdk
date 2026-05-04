<?php

namespace glook\PecomSdk\Generated\Model;

class CargopickupCargoReceiver
{
    /**
     * 
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
    protected $warehouseId;
    /**
     * 
     *
     * @return string
     */
    public function getAddressNormal() : string
    {
        return $this->addressNormal;
    }
    /**
     * 
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
    public function getWarehouseId() : ?string
    {
        return $this->warehouseId;
    }
    /**
     * 
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