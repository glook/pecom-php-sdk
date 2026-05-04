<?php

namespace glook\PecomSdk\Generated\Model;

class GeoObjectMetaDataAddressDetails
{
    /**
     * 
     *
     * @var GeoObjectMetaDataAddressDetailsCountry
     */
    protected $country;
    /**
     * 
     *
     * @return GeoObjectMetaDataAddressDetailsCountry
     */
    public function getCountry() : GeoObjectMetaDataAddressDetailsCountry
    {
        return $this->country;
    }
    /**
     * 
     *
     * @param GeoObjectMetaDataAddressDetailsCountry $country
     *
     * @return self
     */
    public function setCountry(GeoObjectMetaDataAddressDetailsCountry $country) : self
    {
        $this->country = $country;
        return $this;
    }
}