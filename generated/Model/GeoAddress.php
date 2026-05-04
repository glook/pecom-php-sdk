<?php

namespace glook\PecomSdk\Generated\Model;

class GeoAddress
{
    /**
     * Компоненты адреса
     *
     * @var GeoAddressComponent[]|null
     */
    protected $components;
    /**
     * Код страны
     *
     * @var string|null
     */
    protected $countryCode;
    /**
     * Форматированный адрес
     *
     * @var string|null
     */
    protected $formatted;
    /**
     * Компоненты адреса
     *
     * @return GeoAddressComponent[]|null
     */
    public function getComponents() : ?array
    {
        return $this->components;
    }
    /**
     * Компоненты адреса
     *
     * @param GeoAddressComponent[]|null $components
     *
     * @return self
     */
    public function setComponents(?array $components) : self
    {
        $this->components = $components;
        return $this;
    }
    /**
     * Код страны
     *
     * @return string|null
     */
    public function getCountryCode() : ?string
    {
        return $this->countryCode;
    }
    /**
     * Код страны
     *
     * @param string|null $countryCode
     *
     * @return self
     */
    public function setCountryCode(?string $countryCode) : self
    {
        $this->countryCode = $countryCode;
        return $this;
    }
    /**
     * Форматированный адрес
     *
     * @return string|null
     */
    public function getFormatted() : ?string
    {
        return $this->formatted;
    }
    /**
     * Форматированный адрес
     *
     * @param string|null $formatted
     *
     * @return self
     */
    public function setFormatted(?string $formatted) : self
    {
        $this->formatted = $formatted;
        return $this;
    }
}