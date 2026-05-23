<?php

namespace glook\PecomSdk\Generated\Model;

class NetshopSubmitRequest
{
    /**
     * @var NetshopCargo[]
     */
    protected $cargos;

    /**
     * @var null|NetshopPickup
     */
    protected $pickup;

    /**
     * @var NetshopSender
     */
    protected $sender;

    /**
     * @return NetshopCargo[]
     */
    public function getCargos(): array
    {
        return $this->cargos;
    }

    /**
     * @param NetshopCargo[] $cargos
     */
    public function setCargos(array $cargos): self
    {
        $this->cargos = $cargos;

        return $this;
    }

    public function getPickup(): ?NetshopPickup
    {
        return $this->pickup;
    }

    public function setPickup(?NetshopPickup $pickup): self
    {
        $this->pickup = $pickup;

        return $this;
    }

    public function getSender(): NetshopSender
    {
        return $this->sender;
    }

    public function setSender(NetshopSender $sender): self
    {
        $this->sender = $sender;

        return $this;
    }
}
