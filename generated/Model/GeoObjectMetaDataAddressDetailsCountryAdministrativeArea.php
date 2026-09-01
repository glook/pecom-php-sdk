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
     * @var GeoObjectMetaDataAddressDetailsCountryAdministrativeAreaSubAdministrativeArea
     */
    protected $subAdministrativeArea;

    /**
     * Название административной области
     */
    public function getAdministrativeAreaName(): string
    {
        return $this->administrativeAreaName;
    }

    /**
     * Название административной области
     */
    public function setAdministrativeAreaName(string $administrativeAreaName): self
    {
        $this->administrativeAreaName = $administrativeAreaName;

        return $this;
    }

    public function getSubAdministrativeArea(): GeoObjectMetaDataAddressDetailsCountryAdministrativeAreaSubAdministrativeArea
    {
        return $this->subAdministrativeArea;
    }

    public function setSubAdministrativeArea(GeoObjectMetaDataAddressDetailsCountryAdministrativeAreaSubAdministrativeArea $subAdministrativeArea): self
    {
        $this->subAdministrativeArea = $subAdministrativeArea;

        return $this;
    }
}
