<?php

namespace glook\PecomSdk\Generated\Model;

class GeoAddress
{
    /**
     * Компоненты адреса
     *
     * @var null|GeoAddressComponent[]
     */
    protected $components;

    /**
     * Код страны
     *
     * @var null|string
     */
    protected $countryCode;

    /**
     * Форматированный адрес
     *
     * @var null|string
     */
    protected $formatted;

    /**
     * Компоненты адреса
     *
     * @return null|GeoAddressComponent[]
     */
    public function getComponents(): ?array
    {
        return $this->components;
    }

    /**
     * Компоненты адреса
     *
     * @param null|GeoAddressComponent[] $components
     */
    public function setComponents(?array $components): self
    {
        $this->components = $components;

        return $this;
    }

    /**
     * Код страны
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    /**
     * Код страны
     */
    public function setCountryCode(?string $countryCode): self
    {
        $this->countryCode = $countryCode;

        return $this;
    }

    /**
     * Форматированный адрес
     */
    public function getFormatted(): ?string
    {
        return $this->formatted;
    }

    /**
     * Форматированный адрес
     */
    public function setFormatted(?string $formatted): self
    {
        $this->formatted = $formatted;

        return $this;
    }
}
