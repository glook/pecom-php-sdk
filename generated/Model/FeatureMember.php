<?php

namespace glook\PecomSdk\Generated\Model;

class FeatureMember
{
    /**
     * 
     *
     * @var GeoObject
     */
    protected $geoObject;
    /**
     * 
     *
     * @return GeoObject
     */
    public function getGeoObject() : GeoObject
    {
        return $this->geoObject;
    }
    /**
     * 
     *
     * @param GeoObject $geoObject
     *
     * @return self
     */
    public function setGeoObject(GeoObject $geoObject) : self
    {
        $this->geoObject = $geoObject;
        return $this;
    }
}