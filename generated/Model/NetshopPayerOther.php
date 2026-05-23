<?php

namespace glook\PecomSdk\Generated\Model;

class NetshopPayerOther
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
     * @var string
     */
    protected $phone;

    /**
     * @var string
     */
    protected $title;

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

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }
}
