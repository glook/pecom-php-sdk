<?php

namespace glook\PecomSdk\Generated\Model;

class CargosCancelAndReturnRequest
{
    /**
     * Код груза.
     *
     * @var string
     */
    protected $code;

    /**
     * Код груза.
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * Код груза.
     */
    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }
}
