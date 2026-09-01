<?php

namespace glook\PecomSdk\Generated\Model;

class PreregistrationCoordinates
{
    /**
     * Географическая широта
     *
     * @var null|string
     */
    protected $latitude;

    /**
     * Географическая долгота
     *
     * @var null|string
     */
    protected $longitude;

    /**
     * Географическая широта
     */
    public function getLatitude(): ?string
    {
        return $this->latitude;
    }

    /**
     * Географическая широта
     */
    public function setLatitude(?string $latitude): self
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Географическая долгота
     */
    public function getLongitude(): ?string
    {
        return $this->longitude;
    }

    /**
     * Географическая долгота
     */
    public function setLongitude(?string $longitude): self
    {
        $this->longitude = $longitude;

        return $this;
    }
}
