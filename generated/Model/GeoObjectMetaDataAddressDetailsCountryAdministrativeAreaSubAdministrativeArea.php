<?php

namespace glook\PecomSdk\Generated\Model;

class GeoObjectMetaDataAddressDetailsCountryAdministrativeAreaSubAdministrativeArea
{
    /**
     * 
     *
     * @var GeoObjectMetaDataAddressDetailsCountryAdministrativeAreaSubAdministrativeAreaLocality
     */
    protected $locality;
    /**
     * Название района
     *
     * @var string
     */
    protected $subAdministrativeAreaName;
    /**
     * 
     *
     * @return GeoObjectMetaDataAddressDetailsCountryAdministrativeAreaSubAdministrativeAreaLocality
     */
    public function getLocality() : GeoObjectMetaDataAddressDetailsCountryAdministrativeAreaSubAdministrativeAreaLocality
    {
        return $this->locality;
    }
    /**
     * 
     *
     * @param GeoObjectMetaDataAddressDetailsCountryAdministrativeAreaSubAdministrativeAreaLocality $locality
     *
     * @return self
     */
    public function setLocality(GeoObjectMetaDataAddressDetailsCountryAdministrativeAreaSubAdministrativeAreaLocality $locality) : self
    {
        $this->locality = $locality;
        return $this;
    }
    /**
     * Название района
     *
     * @return string
     */
    public function getSubAdministrativeAreaName() : string
    {
        return $this->subAdministrativeAreaName;
    }
    /**
     * Название района
     *
     * @param string $subAdministrativeAreaName
     *
     * @return self
     */
    public function setSubAdministrativeAreaName(string $subAdministrativeAreaName) : self
    {
        $this->subAdministrativeAreaName = $subAdministrativeAreaName;
        return $this;
    }
}