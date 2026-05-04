<?php

namespace glook\PecomSdk\Generated\Model;

class GeoObjectMetaDataAddressDetailsCountryAdministrativeArea
{
    /**
     * Название административной области
     *
     * @var string
     */
    protected $administrativeAreaName;
    /**
     * 
     *
     * @var GeoObjectMetaDataAddressDetailsCountryAdministrativeAreaSubAdministrativeArea
     */
    protected $subAdministrativeArea;
    /**
     * Название административной области
     *
     * @return string
     */
    public function getAdministrativeAreaName() : string
    {
        return $this->administrativeAreaName;
    }
    /**
     * Название административной области
     *
     * @param string $administrativeAreaName
     *
     * @return self
     */
    public function setAdministrativeAreaName(string $administrativeAreaName) : self
    {
        $this->administrativeAreaName = $administrativeAreaName;
        return $this;
    }
    /**
     * 
     *
     * @return GeoObjectMetaDataAddressDetailsCountryAdministrativeAreaSubAdministrativeArea
     */
    public function getSubAdministrativeArea() : GeoObjectMetaDataAddressDetailsCountryAdministrativeAreaSubAdministrativeArea
    {
        return $this->subAdministrativeArea;
    }
    /**
     * 
     *
     * @param GeoObjectMetaDataAddressDetailsCountryAdministrativeAreaSubAdministrativeArea $subAdministrativeArea
     *
     * @return self
     */
    public function setSubAdministrativeArea(GeoObjectMetaDataAddressDetailsCountryAdministrativeAreaSubAdministrativeArea $subAdministrativeArea) : self
    {
        $this->subAdministrativeArea = $subAdministrativeArea;
        return $this;
    }
}