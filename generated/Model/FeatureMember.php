<?php

namespace glook\PecomSdk\Generated\Model;

class FeatureMember
{
    /**
     * Найденный географический объект
     *
     * @var GeoObject
     */
    protected $geoObject;
    /**
     * Найденный географический объект
     *
     * @return GeoObject
     */
    public function getGeoObject() : GeoObject
    {
        return $this->geoObject;
    }
    /**
     * Найденный географический объект
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