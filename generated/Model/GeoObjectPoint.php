<?php

namespace glook\PecomSdk\Generated\Model;

class GeoObjectPoint
{
    /**
     * Координаты центральной точки, найденного объекта (долгота широта)
     *
     * @var string
     */
    protected $pos;
    /**
     * Координаты центральной точки, найденного объекта (долгота широта)
     *
     * @return string
     */
    public function getPos() : string
    {
        return $this->pos;
    }
    /**
     * Координаты центральной точки, найденного объекта (долгота широта)
     *
     * @param string $pos
     *
     * @return self
     */
    public function setPos(string $pos) : self
    {
        $this->pos = $pos;
        return $this;
    }
}