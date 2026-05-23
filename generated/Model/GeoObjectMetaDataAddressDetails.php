<?php

namespace glook\PecomSdk\Generated\Model;

class GeoObjectMetaDataAddressDetails
{
    /**
     * @var GeoObjectMetaDataAddressDetailsCountry
     */
    protected $country;

    public function getCountry(): GeoObjectMetaDataAddressDetailsCountry
    {
        return $this->country;
    }

    public function setCountry(GeoObjectMetaDataAddressDetailsCountry $country): self
    {
        $this->country = $country;

        return $this;
    }
}
