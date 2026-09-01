<?php

namespace glook\PecomSdk\Generated\Model;

class NetshopCargoReceiver
{
    /**
     * @var null|NetshopIdentityCard
     */
    protected $identityCard;

    /**
     * @var null|string
     */
    protected $inn;

    /**
     * @var null|string
     */
    protected $phone;

    /**
     * код адреса получателя
     *
     * @var string
     */
    protected $receiverAddrCode;

    public function getIdentityCard(): ?NetshopIdentityCard
    {
        return $this->identityCard;
    }

    public function setIdentityCard(?NetshopIdentityCard $identityCard): self
    {
        $this->identityCard = $identityCard;

        return $this;
    }

    public function getInn(): ?string
    {
        return $this->inn;
    }

    public function setInn(?string $inn): self
    {
        $this->inn = $inn;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * код адреса получателя
     */
    public function getReceiverAddrCode(): string
    {
        return $this->receiverAddrCode;
    }

    /**
     * код адреса получателя
     */
    public function setReceiverAddrCode(string $receiverAddrCode): self
    {
        $this->receiverAddrCode = $receiverAddrCode;

        return $this;
    }
}
