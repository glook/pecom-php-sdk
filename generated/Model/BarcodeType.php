<?php

namespace glook\PecomSdk\Generated\Model;

class BarcodeType
{
    /**
     * Тип штрих-кода
     *
     * @var string
     */
    protected $type;
    /**
     * Тип штрих-кода
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * Тип штрих-кода
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->type = $type;
        return $this;
    }
}