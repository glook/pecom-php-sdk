<?php

namespace glook\PecomSdk\Generated\Model;

class GeoObjectMetaDataProperty
{
    /**
     * @var GeoObjectMetaData
     */
    protected $geocoderMetaData;

    public function getGeocoderMetaData(): GeoObjectMetaData
    {
        return $this->geocoderMetaData;
    }

    public function setGeocoderMetaData(GeoObjectMetaData $geocoderMetaData): self
    {
        $this->geocoderMetaData = $geocoderMetaData;

        return $this;
    }
}
