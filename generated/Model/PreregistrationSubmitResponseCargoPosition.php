<?php

namespace glook\PecomSdk\Generated\Model;

class PreregistrationSubmitResponseCargoPosition
{
    /**
     * Значение для штрих-кода в формате CODE-128/EAN-128
     *
     * @var string|null
     */
    protected $barcode;
    /**
     * Значение для штрих-кода в формате CODE-128/EAN-128
     *
     * @return string|null
     */
    public function getBarcode() : ?string
    {
        return $this->barcode;
    }
    /**
     * Значение для штрих-кода в формате CODE-128/EAN-128
     *
     * @param string|null $barcode
     *
     * @return self
     */
    public function setBarcode(?string $barcode) : self
    {
        $this->barcode = $barcode;
        return $this;
    }
}