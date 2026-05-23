<?php

namespace glook\PecomSdk\Generated\Model;

class CoordinatesString
{
    /**
     * Широта.
     *
     * @var null|string
     */
    protected $latitude;

    /**
     * Долгота.
     *
     * @var null|string
     */
    protected $longitude;

    /**
     * Широта.
     */
    public function getLatitude(): ?string
    {
        return $this->latitude;
    }

    /**
     * Широта.
     */
    public function setLatitude(?string $latitude): self
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Долгота.
     */
    public function getLongitude(): ?string
    {
        return $this->longitude;
    }

    /**
     * Долгота.
     */
    public function setLongitude(?string $longitude): self
    {
        $this->longitude = $longitude;

        return $this;
    }
}
