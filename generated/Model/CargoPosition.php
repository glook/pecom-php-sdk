<?php

namespace glook\PecomSdk\Generated\Model;

class CargoPosition
{
    /**
     * Штрих-код места в формате CODE-128 / EAN-128
     *
     * @var string
     */
    protected $barcode;
    /**
     * Штрих-код места в формате CODE-128 / EAN-128
     *
     * @return string
     */
    public function getBarcode() : string
    {
        return $this->barcode;
    }
    /**
     * Штрих-код места в формате CODE-128 / EAN-128
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