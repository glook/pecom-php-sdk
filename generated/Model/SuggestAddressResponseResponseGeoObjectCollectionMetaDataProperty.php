<?php

namespace glook\PecomSdk\Generated\Model;

class SuggestAddressResponseResponseGeoObjectCollectionMetaDataProperty
{
    /**
     * 
     *
     * @var GeocoderResponseMetaData
     */
    protected $geocoderResponseMetaData;
    /**
     * 
     *
     * @return GeocoderResponseMetaData
     */
    public function getGeocoderResponseMetaData() : GeocoderResponseMetaData
    {
        return $this->geocoderResponseMetaData;
    }
    /**
     * 
     *
     * @param GeocoderResponseMetaData $geocoderResponseMetaData
     *
     * @return self
     */
    public function setGeocoderResponseMetaData(GeocoderResponseMetaData $geocoderResponseMetaData) : self
    {
        $this->geocoderResponseMetaData = $geocoderResponseMetaData;
        return $this;
    }
}