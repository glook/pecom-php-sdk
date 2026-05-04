<?php

namespace glook\PecomSdk\Generated\Model;

class NetshopCargoPosition
{
    /**
     * Значение для штрих-кода в формате CODE-128/EAN-128
     *
     * @var string
     */
    protected $barcode;
    /**
     * Значение для штрих-кода в формате CODE-128/EAN-128
     *
     * @return string
     */
    public function getBarcode() : string
    {
        return $this->barcode;
    }
    /**
     * Значение для штрих-кода в формате CODE-128/EAN-128
     *
     * @param string $barcode
     *
     * @return self
     */
    public function setBarcode(string $barcode) : self
    {
        $this->barcode = $barcode;
        return $this;
    }
}