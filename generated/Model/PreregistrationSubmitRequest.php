<?php

namespace glook\PecomSdk\Generated\Model;

class PreregistrationSubmitRequest
{
    /**
     * @var PreregistrationCargo[]
     */
    protected $cargos;

    /**
     * @var PreregistrationCommon
     */
    protected $common;

    /**
     * @var null|PreregistrationPickUpDetails
     */
    protected $pickUpDetails;

    /**
     * @var PreregistrationSender
     */
    protected $sender;

    /**
     * @return PreregistrationCargo[]
     */
    public function getCargos(): array
    {
        return $this->cargos;
    }

    /**
     * @param PreregistrationCargo[] $cargos
     */
    public function setCargos(array $cargos): self
    {
        $this->cargos = $cargos;

        return $this;
    }

    public function getCommon(): PreregistrationCommon
    {
        return $this->common;
    }

    public function setCommon(PreregistrationCommon $common): self
    {
        $this->common = $common;

        return $this;
    }

    public function getPickUpDetails(): ?PreregistrationPickUpDetails
    {
        return $this->pickUpDetails;
    }

    public function setPickUpDetails(?PreregistrationPickUpDetails $pickUpDetails): self
    {
        $this->pickUpDetails = $pickUpDetails;

        return $this;
    }

    public function getSender(): PreregistrationSender
    {
        return $this->sender;
    }

    public function setSender(PreregistrationSender $sender): self
    {
        $this->sender = $sender;

        return $this;
    }
}
