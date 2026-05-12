<?php

namespace glook\PecomSdk\Generated\Model;

class RouteMapCounterpartPrivatePerson
{
    /**
     * Документ удостоверяющий личность
     *
     * @var RouteMapCounterpartIdentityCard|null
     */
    protected $identityCard;
    /**
     * Документ удостоверяющий личность
     *
     * @return RouteMapCounterpartIdentityCard|null
     */
    public function getIdentityCard() : ?RouteMapCounterpartIdentityCard
    {
        return $this->identityCard;
    }
    /**
     * Документ удостоверяющий личность
     *
     * @param RouteMapCounterpartIdentityCard|null $identityCard
     *
     * @return self
     */
    public function setIdentityCard(?RouteMapCounterpartIdentityCard $identityCard) : self
    {
        $this->identityCard = $identityCard;
        return $this;
    }
}