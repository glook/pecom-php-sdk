<?php

namespace glook\PecomSdk\Generated\Model;

class CargosGeoData
{
    /**
     * 
     *
     * @var GeoAddress
     */
    protected $address;
    /**
     * Тип адреса
     *
     * @var string|null
     */
    protected $kind;
    /**
     * 
     *
     * @return GeoAddress
     */
    public function getAddress() : GeoAddress
    {
        return $this->address;
    }
    /**
     * 
     *
     * @param GeoAddress $address
     *
     * @return self
     */
    public function setAddress(GeoAddress $address) : self
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