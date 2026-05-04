<?php

namespace glook\PecomSdk\Generated\Model;

class GeoObjectBoundedBy
{
    /**
     * 
     *
     * @var GeoObjectBoundedByEnvelope
     */
    protected $envelope;
    /**
     * 
     *
     * @return GeoObjectBoundedByEnvelope
     */
    public function getEnvelope() : GeoObjectBoundedByEnvelope
    {
        return $this->envelope;
    }
    /**
     * 
     *
     * @param GeoObjectBoundedByEnvelope $envelope
     *
     * @return self
     */
    public function setEnvelope(GeoObjectBoundedByEnvelope $envelope) : self
    {
        $this->envelope = $envelope;
        return $this;
    }
}