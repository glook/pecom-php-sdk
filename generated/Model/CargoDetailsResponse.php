<?php

namespace glook\PecomSdk\Generated\Model;

class CargoDetailsResponse
{
    /**
     * Код груза
     *
     * @var string|null
     */
    protected $cargoCode;
    /**
     * Информация о составе груза
     *
     * @var CargoDetail[]|null
     */
    protected $details;
    /**
     * ИНН отправителя
     *
     * @var string|null
     */
    protected $senderInn;
    /**
     * Код груза
     *
     * @return string|null
     */
    public function getCargoCode() : ?string
    {
        return $this->cargoCode;
    }
    /**
     * Код груза
     *
     * @param string|null $cargoCode
     *
     * @return self
     */
    public function setCargoCode(?string $cargoCode) : self
    {
        $this->cargoCode = $cargoCode;
        return $this;
    }
    /**
     * Информация о составе груза
     *
     * @return CargoDetail[]|null
     */
    public function getDetails() : ?array
    {
        return $this->details;
    }
    /**
     * Информация о составе груза
     *
     * @param CargoDetail[]|null $details
     *
     * @return self
     */
    public function setDetails(?array $details) : self
    {
        $this->details = $details;
        return $this;
    }
    /**
     * ИНН отправителя
     *
     * @return string|null
     */
    public function getSenderInn() : ?string
    {
        return $this->senderInn;
    }
    /**
     * ИНН отправителя
     *
     * @param string|null $senderInn
     *
     * @return self
     */
    public function setSenderInn(?string $senderInn) : self
    {
        $this->senderInn = $senderInn;
        return $this;
    }
}