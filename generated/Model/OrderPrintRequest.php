<?php

namespace glook\PecomSdk\Generated\Model;

class OrderPrintRequest
{
    /**
     * Код груза.
     *
     * @var string
     */
    protected $cargoIndex;

    /**
     * Тип файла.
     *
     * @var string
     */
    protected $type;

    /**
     * Код груза.
     */
    public function getCargoIndex(): string
    {
        return $this->cargoIndex;
    }

    /**
     * Код груза.
     */
    public function setCargoIndex(string $cargoIndex): self
    {
        $this->cargoIndex = $cargoIndex;

        return $this;
    }

    /**
     * Тип файла.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Тип файла.
     */
    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }
}
