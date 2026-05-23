<?php

namespace glook\PecomSdk\Generated\Model;

class RouteMapCounterpartPrivatePerson
{
    /**
     * Документ удостоверяющий личность.
     *
     * @var null|RouteMapCounterpartIdentityCard
     */
    protected $identityCard;

    /**
     * Документ удостоверяющий личность.
     */
    public function getIdentityCard(): ?RouteMapCounterpartIdentityCard
    {
        return $this->identityCard;
    }

    /**
     * Документ удостоверяющий личность.
     */
    public function setIdentityCard(?RouteMapCounterpartIdentityCard $identityCard): self
    {
        $this->identityCard = $identityCard;

        return $this;
    }
}
