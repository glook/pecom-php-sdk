<?php

namespace glook\PecomSdk\Generated\Model;

class GeoObjectMetaDataProperty
{
    /**
     * 
     *
     * @var GeoObjectMetaData
     */
    protected $geocoderMetaData;
    /**
     * 
     *
     * @return GeoObjectMetaData
     */
    public function getGeocoderMetaData() : GeoObjectMetaData
    {
        return $this->geocoderMetaData;
    }
    /**
     * 
     *
     * @param GeoObjectMetaData $geocoderMetaData
     *
     * @return self
     */
    public function setGeocoderMetaData(GeoObjectMetaData $geocoderMetaData) : self
    {
        $this->geocoderMetaData = $geocoderMetaData;
        return $this;
    }
}