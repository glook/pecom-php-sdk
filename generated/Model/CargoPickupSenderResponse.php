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
     * @var CoordinateNumbers
     */
    protected $coordinates;

    /**
     * @var null|string
     */
    protected $warehouseID;

    /**
     * Нормализованный адрес как он был идентифицирован системами ПЭК
     */
    public function getAddressNormal(): string
    {
        return $this->addressNormal;
    }

    /**
     * Нормализованный адрес как он был идентифицирован системами ПЭК
     */
    public function setAddressNormal(string $addressNormal): self
    {
        $this->addressNormal = $addressNormal;

        return $this;
    }

    public function getCoordinates(): CoordinateNumbers
    {
        return $this->coordinates;
    }

    public function setCoordinates(CoordinateNumbers $coordinates): self
    {
        $this->coordinates = $coordinates;

        return $this;
    }

    public function getWarehouseID(): ?string
    {
        return $this->warehouseID;
    }

    public function setWarehouseID(?string $warehouseID): self
    {
        $this->warehouseID = $warehouseID;

        return $this;
    }
}
