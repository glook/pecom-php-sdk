<?php

namespace glook\PecomSdk\Generated\Model;

class BasicCargoInfo
{
    /**
     * Штрих-код груза
     *
     * @var null|string
     */
    protected $cargoBarCode;

    /**
     * Код груза
     *
     * @var null|string
     */
    protected $code;

    /**
     * Штрих-коды грузомест
     *
     * @var null|string[]
     */
    protected $positionBarCodes;

    /**
     * Штрих-код груза
     */
    public function getCargoBarCode(): ?string
    {
        return $this->cargoBarCode;
    }

    /**
     * Штрих-код груза
     */
    public function setCargoBarCode(?string $cargoBarCode): self
    {
        $this->cargoBarCode = $cargoBarCode;

        return $this;
    }

    /**
     * Код груза
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * Код груза
     */
    public function setCode(?string $code): self
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Штрих-коды грузомест
     *
     * @return null|string[]
     */
    public function getPositionBarCodes(): ?array
    {
        return $this->positionBarCodes;
    }

    /**
     * Штрих-коды грузомест
     *
     * @param null|string[] $positionBarCodes
     */
    public function setPositionBarCodes(?array $positionBarCodes): self
    {
        $this->positionBarCodes = $positionBarCodes;

        return $this;
    }
}
