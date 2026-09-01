<?php

namespace glook\PecomSdk\Generated\Model;

class GeoObjectMetaDataAddressDetailsCountry
{
    /**
     * Адрес одной строкой
     *
     * @var string
     */
    protected $addressLine;

    /**
     * @var GeoObjectMetaDataAddressDetailsCountryAdministrativeArea
     */
    protected $administrativeArea;

    /**
     * Название страны
     *
     * @var string
     */
    protected $countryName;

    /**
     * Код страны
     *
     * @var string
     */
    protected $countryNameCode;

    /**
     * Адрес одной строкой
     */
    public function getAddressLine(): string
    {
        return $this->addressLine;
    }

    /**
     * Адрес одной строкой
     */
    public function setAddressLine(string $addressLine): self
    {
        $this->addressLine = $addressLine;

        return $this;
    }

    public function getAdministrativeArea(): GeoObjectMetaDataAddressDetailsCountryAdministrativeArea
    {
        return $this->administrativeArea;
    }

    public function setAdministrativeArea(GeoObjectMetaDataAddressDetailsCountryAdministrativeArea $administrativeArea): self
    {
        $this->administrativeArea = $administrativeArea;

        return $this;
    }

    /**
     * Название страны
     */
    public function getCountryName(): string
    {
        return $this->countryName;
    }

    /**
     * Название страны
     */
    public function setCountryName(string $countryName): self
    {
        $this->countryName = $countryName;

        return $this;
    }

    /**
     * Код страны
     */
    public function getCountryNameCode(): string
    {
        return $this->countryNameCode;
    }

    /**
     * Код страны
     */
    public function setCountryNameCode(string $countryNameCode): self
    {
        $this->countryNameCode = $countryNameCode;

        return $this;
    }
}
