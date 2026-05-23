<?php

namespace glook\PecomSdk\Generated\Model;

class PreregistrationSubmitResponseSender
{
    /**
     * Адрес склада отправления.
     *
     * @var null|string
     */
    protected $addressNormal;

    /**
     * @var null|PreregistrationSubmitResponseCoordinates
     */
    protected $coordinates;

    /**
     * Идентификатор склада отправления. Значение Null, если заказана услуга забора груза от отправителя.
     *
     * @var null|string
     */
    protected $warehouseID;

    /**
     * Адрес склада отправления.
     */
    public function getAddressNormal(): ?string
    {
        return $this->addressNormal;
    }

    /**
     * Адрес склада отправления.
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
     * Идентификатор склада отправления. Значение Null, если заказана услуга забора груза от отправителя.
     */
    public function getWarehouseID(): ?string
    {
        return $this->warehouseID;
    }

    /**
     * Идентификатор склада отправления. Значение Null, если заказана услуга забора груза от отправителя.
     */
    public function setWarehouseID(?string $warehouseID): self
    {
        $this->warehouseID = $warehouseID;

        return $this;
    }
}
