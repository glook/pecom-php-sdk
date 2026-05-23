<?php

namespace glook\PecomSdk\Generated\Model;

class PreregistrationSubmitResponseReceiver
{
    /**
     * Адрес склада получения или нормализованный адрес доставки (что заказано).
     *
     * @var null|string
     */
    protected $addressNormal;

    /**
     * @var null|PreregistrationSubmitResponseCoordinates
     */
    protected $coordinates;

    /**
     * Идентификатор склада получения груза (если заказана доставка до адреса, то null).
     *
     * @var null|string
     */
    protected $warehouseId;

    /**
     * Адрес склада получения или нормализованный адрес доставки (что заказано).
     */
    public function getAddressNormal(): ?string
    {
        return $this->addressNormal;
    }

    /**
     * Адрес склада получения или нормализованный адрес доставки (что заказано).
     */
    public function setAddressNormal(?string $addressNormal): self
    {
        $this->addressNormal = $addressNormal;

        return $this;
    }

    public function getCoordinates(): ?PreregistrationSubmitResponseCoordinates
    {
        return $this->coordinates;
    }

    public function setCoordinates(?PreregistrationSubmitResponseCoordinates $coordinates): self
    {
        $this->coordinates = $coordinates;

        return $this;
    }

    /**
     * Идентификатор склада получения груза (если заказана доставка до адреса, то null).
     */
    public function getWarehouseId(): ?string
    {
        return $this->warehouseId;
    }

    /**
     * Идентификатор склада получения груза (если заказана доставка до адреса, то null).
     */
    public function setWarehouseId(?string $warehouseId): self
    {
        $this->warehouseId = $warehouseId;

        return $this;
    }
}
