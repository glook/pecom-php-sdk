<?php

namespace glook\PecomSdk\Generated\Model;

class GeoObjectBoundedBy
{
    /**
     * @var GeoObjectBoundedByEnvelope
     */
    protected $envelope;

    public function getEnvelope(): GeoObjectBoundedByEnvelope
    {
        return $this->envelope;
    }

    public function setEnvelope(GeoObjectBoundedByEnvelope $envelope): self
    {
        $this->envelope = $envelope;

        return $this;
    }
}
