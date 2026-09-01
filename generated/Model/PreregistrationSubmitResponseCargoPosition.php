<?php

namespace glook\PecomSdk\Generated\Model;

class PreregistrationSubmitResponseCargoPosition
{
    /**
     * Значение для штрих-кода в формате CODE-128/EAN-128
     *
     * @var null|string
     */
    protected $barcode;

    /**
     * Значение для штрих-кода в формате CODE-128/EAN-128
     */
    public function getBarcode(): ?string
    {
        return $this->barcode;
    }

    /**
     * Значение для штрих-кода в формате CODE-128/EAN-128
     */
    public function setBarcode(?string $barcode): self
    {
        $this->barcode = $barcode;

        return $this;
    }
}
