<?php

namespace glook\PecomSdk\Generated\Model;

class SuggestAddressResponseResponse
{
    /**
     * 
     *
     * @var SuggestAddressResponseResponseGeoObjectCollection
     */
    protected $geoObjectCollection;
    /**
     * 
     *
     * @return SuggestAddressResponseResponseGeoObjectCollection
     */
    public function getGeoObjectCollection() : SuggestAddressResponseResponseGeoObjectCollection
    {
        return $this->geoObjectCollection;
    }
    /**
     * 
     *
     * @param SuggestAddressResponseResponseGeoObjectCollection $geoObjectCollection
     *
     * @return self
     */
    public function setGeoObjectCollection(SuggestAddressResponseResponseGeoObjectCollection $geoObjectCollection) : self
    {
        $this->geoObjectCollection = $geoObjectCollection;
        return $this;
    }
}