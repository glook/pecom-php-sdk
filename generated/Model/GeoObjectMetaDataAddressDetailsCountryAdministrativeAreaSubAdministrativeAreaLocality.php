<?php

namespace glook\PecomSdk\Generated\Model;

class GeoObjectMetaDataAddressDetailsCountryAdministrativeAreaSubAdministrativeAreaLocality
{
    /**
     * Название населенного пункта
     *
     * @var string
     */
    protected $localityName;
    /**
     * Название населенного пункта
     *
     * @return string
     */
    public function getLocalityName() : string
    {
        return $this->localityName;
    }
    /**
     * Название населенного пункта
     *
     * @param string $localityName
     *
     * @return self
     */
    public function setLocalityName(string $localityName) : self
    {
        $this->localityName = $localityName;
        return $this;
    }
}