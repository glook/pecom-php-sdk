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
     */
    public function getGeoObject(): GeoObject
    {
        return $this->geoObject;
    }

    /**
     * Найденный географический объект
     */
    public function setGeoObject(GeoObject $geoObject): self
    {
        $this->geoObject = $geoObject;

        return $this;
    }
}
