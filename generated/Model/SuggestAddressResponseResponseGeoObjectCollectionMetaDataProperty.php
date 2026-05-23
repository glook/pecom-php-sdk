<?php

namespace glook\PecomSdk\Generated\Model;

class SuggestAddressResponseResponseGeoObjectCollectionMetaDataProperty
{
    /**
     * @var GeocoderResponseMetaData
     */
    protected $geocoderResponseMetaData;

    public function getGeocoderResponseMetaData(): GeocoderResponseMetaData
    {
        return $this->geocoderResponseMetaData;
    }

    public function setGeocoderResponseMetaData(GeocoderResponseMetaData $geocoderResponseMetaData): self
    {
        $this->geocoderResponseMetaData = $geocoderResponseMetaData;

        return $this;
    }
}
