<?php

namespace glook\PecomSdk\Generated\Model;

class OrderPrintRequest
{
    /**
     * Код груза
     *
     * @var string
     */
    protected $cargoIndex;
    /**
     * Тип файла
     *
     * @var string
     */
    protected $type;
    /**
     * Код груза
     *
     * @return string
     */
    public function getCargoIndex() : string
    {
        return $this->cargoIndex;
    }
    /**
     * Код груза
     *
     * @param string $cargoIndex
     *
     * @return self
     */
    public function setCargoIndex(string $cargoIndex) : self
    {
        $this->cargoIndex = $cargoIndex;
        return $this;
    }
    /**
     * Тип файла
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * Тип файла
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