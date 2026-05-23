<?php

namespace glook\PecomSdk\Generated\Model;

class CargoDetailsResponse
{
    /**
     * Код груза.
     *
     * @var null|string
     */
    protected $cargoCode;

    /**
     * Информация о составе груза.
     *
     * @var null|CargoDetail[]
     */
    protected $details;

    /**
     * ИНН отправителя.
     *
     * @var null|string
     */
    protected $senderInn;

    /**
     * Код груза.
     */
    public function getCargoCode(): ?string
    {
        return $this->cargoCode;
    }

    /**
     * Код груза.
     */
    public function setCargoCode(?string $cargoCode): self
    {
        $this->cargoCode = $cargoCode;

        return $this;
    }

    /**
     * Информация о составе груза.
     *
     * @return null|CargoDetail[]
     */
    public function getDetails(): ?array
    {
        return $this->details;
    }

    /**
     * Информация о составе груза.
     *
     * @param null|CargoDetail[] $details
     */
    public function setDetails(?array $details): self
    {
        $this->details = $details;

        return $this;
    }

    /**
     * ИНН отправителя.
     */
    public function getSenderInn(): ?string
    {
        return $this->senderInn;
    }

    /**
     * ИНН отправителя.
     */
    public function setSenderInn(?string $senderInn): self
    {
        $this->senderInn = $senderInn;

        return $this;
    }
}
