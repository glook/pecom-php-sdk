<?php

namespace glook\PecomSdk\Generated\Model;

class CargosGeoData
{
    /**
     * Адрес
     *
     * @var GeoAddress|null
     */
    protected $address;
    /**
     * Тип адреса
     *
     * @var string|null
     */
    protected $kind;
    /**
     * Адрес
     *
     * @return GeoAddress|null
     */
    public function getAddress() : ?GeoAddress
    {
        return $this->address;
    }
    /**
     * Адрес
     *
     * @param GeoAddress|null $address
     *
     * @return self
     */
    public function setAddress(?GeoAddress $address) : self
    {
        $this->address = $address;
        return $this;
    }
    /**
     * Тип адреса
     *
     * @return string|null
     */
    public function getKind() : ?string
    {
        return $this->kind;
    }
    /**
     * Тип адреса
     *
     * @param string|null $kind
     *
     * @return self
     */
    public function setKind(?string $kind) : self
    {
        $this->kind = $kind;
        return $this;
    }
}