<?php

namespace glook\PecomSdk\Generated\Model;

class GeoDataAddress
{
    /**
     * Массив составляющих частей адреса: страна, регион, населенный пункт, улица, дом
     *
     * @var GeoDataAddressComponent[]
     */
    protected $components;

    /**
     * Код страны, к которой относится адрес (выводится только если определен точный адрес)
     *
     * @var null|string
     */
    protected $countryCode;

    /**
     * Полное представление найденного адреса
     *
     * @var string
     */
    protected $formatted;

    /**
     * Массив составляющих частей адреса: страна, регион, населенный пункт, улица, дом
     *
     * @return GeoDataAddressComponent[]
     */
    public function getComponents(): array
    {
        return $this->components;
    }

    /**
     * Массив составляющих частей адреса: страна, регион, населенный пункт, улица, дом
     *
     * @param GeoDataAddressComponent[] $components
     */
    public function setComponents(array $components): self
    {
        $this->components = $components;

        return $this;
    }

    /**
     * Код страны, к которой относится адрес (выводится только если определен точный адрес)
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    /**
     * Код страны, к которой относится адрес (выводится только если определен точный адрес)
     */
    public function setCountryCode(?string $countryCode): self
    {
        $this->countryCode = $countryCode;

        return $this;
    }

    /**
     * Полное представление найденного адреса
     */
    public function getFormatted(): string
    {
        return $this->formatted;
    }

    /**
     * Полное представление найденного адреса
     */
    public function setFormatted(string $formatted): self
    {
        $this->formatted = $formatted;

        return $this;
    }
}
