<?php

namespace glook\PecomSdk\Generated\Model;

class CargosGeoData
{
    /**
     * Адрес
     *
     * @var null|GeoAddress
     */
    protected $address;

    /**
     * Тип адреса
     *
     * @var null|string
     */
    protected $kind;

    /**
     * Адрес
     */
    public function getAddress(): ?GeoAddress
    {
        return $this->address;
    }

    /**
     * Адрес
     */
    public function setAddress(?GeoAddress $address): self
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Тип адреса
     */
    public function getKind(): ?string
    {
        return $this->kind;
    }

    /**
     * Тип адреса
     */
    public function setKind(?string $kind): self
    {
        $this->kind = $kind;

        return $this;
    }
}
