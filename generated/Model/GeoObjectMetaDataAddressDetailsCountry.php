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
     * 
     *
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
     *
     * @return string
     */
    public function getAddressLine() : string
    {
        return $this->addressLine;
    }
    /**
     * Адрес одной строкой
     *
     * @param string $addressLine
     *
     * @return self
     */
    public function setAddressLine(string $addressLine) : self
    {
        $this->addressLine = $addressLine;
        return $this;
    }
    /**
     * 
     *
     * @return GeoObjectMetaDataAddressDetailsCountryAdministrativeArea
     */
    public function getAdministrativeArea() : GeoObjectMetaDataAddressDetailsCountryAdministrativeArea
    {
        return $this->administrativeArea;
    }
    /**
     * 
     *
     * @param GeoObjectMetaDataAddressDetailsCountryAdministrativeArea $administrativeArea
     *
     * @return self
     */
    public function setAdministrativeArea(GeoObjectMetaDataAddressDetailsCountryAdministrativeArea $administrativeArea) : self
    {
        $this->administrativeArea = $administrativeArea;
        return $this;
    }
    /**
     * Название страны
     *
     * @return string
     */
    public function getCountryName() : string
    {
        return $this->countryName;
    }
    /**
     * Название страны
     *
     * @param string $countryName
     *
     * @return self
     */
    public function setCountryName(string $countryName) : self
    {
        $this->countryName = $countryName;
        return $this;
    }
    /**
     * Код страны
     *
     * @return string
     */
    public function getCountryNameCode() : string
    {
        return $this->countryNameCode;
    }
    /**
     * Код страны
     *
     * @param string $countryNameCode
     *
     * @return self
     */
    public function setCountryNameCode(string $countryNameCode) : self
    {
        $this->countryNameCode = $countryNameCode;
        return $this;
    }
}