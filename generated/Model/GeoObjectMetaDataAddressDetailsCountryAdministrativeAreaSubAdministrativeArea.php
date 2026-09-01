<?php

namespace glook\PecomSdk\Generated\Model;

class GeoObjectMetaDataAddressDetailsCountryAdministrativeAreaSubAdministrativeArea
{
    /**
     * @var GeoObjectMetaDataAddressDetailsCountryAdministrativeAreaSubAdministrativeAreaLocality
     */
    protected $locality;

    /**
     * Название района
     *
     * @var string
     */
    protected $subAdministrativeAreaName;

    public function getLocality(): GeoObjectMetaDataAddressDetailsCountryAdministrativeAreaSubAdministrativeAreaLocality
    {
        return $this->locality;
    }

    public function setLocality(GeoObjectMetaDataAddressDetailsCountryAdministrativeAreaSubAdministrativeAreaLocality $locality): self
    {
        $this->locality = $locality;

        return $this;
    }

    /**
     * Название района
     */
    public function getSubAdministrativeAreaName(): string
    {
        return $this->subAdministrativeAreaName;
    }

    /**
     * Название района
     */
    public function setSubAdministrativeAreaName(string $subAdministrativeAreaName): self
    {
        $this->subAdministrativeAreaName = $subAdministrativeAreaName;

        return $this;
    }
}
