<?php

namespace glook\PecomSdk\Generated\Model;

class BasicCargoInfo
{
    /**
     * Штрих-код груза
     *
     * @var string|null
     */
    protected $cargoBarCode;
    /**
     * Код груза
     *
     * @var string|null
     */
    protected $code;
    /**
     * Штрих-коды грузомест
     *
     * @var string[]|null
     */
    protected $positionBarCodes;
    /**
     * Штрих-код груза
     *
     * @return string|null
     */
    public function getCargoBarCode() : ?string
    {
        return $this->cargoBarCode;
    }
    /**
     * Штрих-код груза
     *
     * @param string|null $cargoBarCode
     *
     * @return self
     */
    public function setCargoBarCode(?string $cargoBarCode) : self
    {
        $this->cargoBarCode = $cargoBarCode;
        return $this;
    }
    /**
     * Код груза
     *
     * @return string|null
     */
    public function getCode() : ?string
    {
        return $this->code;
    }
    /**
     * Код груза
     *
     * @param string|null $code
     *
     * @return self
     */
    public function setCode(?string $code) : self
    {
        $this->code = $code;
        return $this;
    }
    /**
     * Штрих-коды грузомест
     *
     * @return string[]|null
     */
    public function getPositionBarCodes() : ?array
    {
        return $this->positionBarCodes;
    }
    /**
     * Штрих-коды грузомест
     *
     * @param string[]|null $positionBarCodes
     *
     * @return self
     */
    public function setPositionBarCodes(?array $positionBarCodes) : self
    {
        $this->positionBarCodes = $positionBarCodes;
        return $this;
    }
}