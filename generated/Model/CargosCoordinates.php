<?php

namespace glook\PecomSdk\Generated\Model;

class CargosCoordinates
{
    /**
     * Координата широты.
     *
     * @var null|string
     */
    protected $latitude;

    /**
     * Координата долготы.
     *
     * @var null|string
     */
    protected $longitude;

    /**
     * Координата широты.
     */
    public function getLatitude(): ?string
    {
        return $this->latitude;
    }

    /**
     * Координата широты.
     */
    public function setLatitude(?string $latitude): self
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Координата долготы.
     */
    public function getLongitude(): ?string
    {
        return $this->longitude;
    }

    /**
     * Координата долготы.
     */
    public function setLongitude(?string $longitude): self
    {
        $this->longitude = $longitude;

        return $this;
    }
}
