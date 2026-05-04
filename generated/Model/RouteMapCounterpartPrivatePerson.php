<?php

namespace glook\PecomSdk\Generated\Model;

class RouteMapCounterpartPrivatePerson
{
    /**
     * 
     *
     * @var RouteMapCounterpartIdentityCard
     */
    protected $identityCard;
    /**
     * 
     *
     * @return RouteMapCounterpartIdentityCard
     */
    public function getIdentityCard() : RouteMapCounterpartIdentityCard
    {
        return $this->identityCard;
    }
    /**
     * 
     *
     * @param RouteMapCounterpartIdentityCard $identityCard
     *
     * @return self
     */
    public function setIdentityCard(RouteMapCounterpartIdentityCard $identityCard) : self
    {
        $this->identityCard = $identityCard;
        return $this;
    }
}