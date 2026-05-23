<?php

namespace glook\PecomSdk\Generated\Model;

class SuggestAddressResponseResponse
{
    /**
     * @var SuggestAddressResponseResponseGeoObjectCollection
     */
    protected $geoObjectCollection;

    public function getGeoObjectCollection(): SuggestAddressResponseResponseGeoObjectCollection
    {
        return $this->geoObjectCollection;
    }

    public function setGeoObjectCollection(SuggestAddressResponseResponseGeoObjectCollection $geoObjectCollection): self
    {
        $this->geoObjectCollection = $geoObjectCollection;

        return $this;
    }
}
