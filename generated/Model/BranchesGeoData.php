<?php

namespace glook\PecomSdk\Generated\Model;

class BranchesGeoData
{
    /**
     * Адресные данные.
     *
     * @var GeoDataAddress
     */
    protected $address;

    /**
     * Название компоненты адреса, до которой определен адрес в ответе.
     *
     * @var string
     */
    protected $kind;

    /**
     * Критерий точности распознавания координат адреса. exact — точно; bad — заявка по такому адресу не будет принята; near — поняли адрес приблизительно (до улицы, соседнего дома и т.п.), заявка будет принята, но потребуется уточнение адреса при оформлении груза.
     *
     * @var string
     */
    protected $precision;

    /**
     * Адресные данные.
     */
    public function getAddress(): GeoDataAddress
    {
        return $this->address;
    }

    /**
     * Адресные данные.
     */
    public function setAddress(GeoDataAddress $address): self
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Название компоненты адреса, до которой определен адрес в ответе.
     */
    public function getKind(): string
    {
        return $this->kind;
    }

    /**
     * Название компоненты адреса, до которой определен адрес в ответе.
     */
    public function setKind(string $kind): self
    {
        $this->kind = $kind;

        return $this;
    }

    /**
     * Критерий точности распознавания координат адреса. exact — точно; bad — заявка по такому адресу не будет принята; near — поняли адрес приблизительно (до улицы, соседнего дома и т.п.), заявка будет принята, но потребуется уточнение адреса при оформлении груза.
     */
    public function getPrecision(): string
    {
        return $this->precision;
    }

    /**
     * Критерий точности распознавания координат адреса. exact — точно; bad — заявка по такому адресу не будет принята; near — поняли адрес приблизительно (до улицы, соседнего дома и т.п.), заявка будет принята, но потребуется уточнение адреса при оформлении груза.
     */
    public function setPrecision(string $precision): self
    {
        $this->precision = $precision;

        return $this;
    }
}
