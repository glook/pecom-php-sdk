<?php

namespace glook\PecomSdk\Generated\Model;

class GeoObjectMetaDataAddressDetailsCountryAdministrativeAreaSubAdministrativeAreaLocality
{
    /**
     * Название населенного пункта.
     *
     * @var string
     */
    protected $localityName;

    /**
     * Название населенного пункта.
     */
    public function getLocalityName(): string
    {
        return $this->localityName;
    }

    /**
     * Название населенного пункта.
     */
    public function setLocalityName(string $localityName): self
    {
        $this->localityName = $localityName;

        return $this;
    }
}
