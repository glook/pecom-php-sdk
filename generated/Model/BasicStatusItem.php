<?php

namespace glook\PecomSdk\Generated\Model;

class BasicStatusItem
{
    /**
     * Параметры груза
     *
     * @var BasicCargoInfo|null
     */
    protected $cargo;
    /**
     * Общая информация о грузе
     *
     * @var BasicStatusInfo|null
     */
    protected $info;
    /**
     * Параметры груза
     *
     * @return BasicCargoInfo|null
     */
    public function getCargo() : ?BasicCargoInfo
    {
        return $this->cargo;
    }
    /**
     * Параметры груза
     *
     * @param BasicCargoInfo|null $cargo
     *
     * @return self
     */
    public function setCargo(?BasicCargoInfo $cargo) : self
    {
        $this->cargo = $cargo;
        return $this;
    }
    /**
     * Общая информация о грузе
     *
     * @return BasicStatusInfo|null
     */
    public function getInfo() : ?BasicStatusInfo
    {
        return $this->info;
    }
    /**
     * Общая информация о грузе
     *
     * @param BasicStatusInfo|null $info
     *
     * @return self
     */
    public function setInfo(?BasicStatusInfo $info) : self
    {
        $this->info = $info;
        return $this;
    }
}