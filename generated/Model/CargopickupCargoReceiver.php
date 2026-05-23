<?php

namespace glook\PecomSdk\Generated\Model;

class CargopickupCargoReceiver
{
    /**
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
    protected $warehouseId;

    public function getAddressNormal(): string
    {
        return $this->addressNormal;
    }

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

    public function getWarehouseId(): ?string
    {
        return $this->warehouseId;
    }

    public function setWarehouseId(?string $warehouseId): self
    {
        $this->warehouseId = $warehouseId;

        return $this;
    }
}
