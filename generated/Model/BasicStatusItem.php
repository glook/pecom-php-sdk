<?php

namespace glook\PecomSdk\Generated\Model;

class BasicStatusItem
{
    /**
     * 
     *
     * @var BasicCargoInfo
     */
    protected $cargo;
    /**
     * 
     *
     * @var BasicStatusInfo
     */
    protected $info;
    /**
     * 
     *
     * @return BasicCargoInfo
     */
    public function getCargo() : BasicCargoInfo
    {
        return $this->cargo;
    }
    /**
     * 
     *
     * @param BasicCargoInfo $cargo
     *
     * @return self
     */
    public function setCargo(BasicCargoInfo $cargo) : self
    {
        $this->cargo = $cargo;
        return $this;
    }
    /**
     * 
     *
     * @return BasicStatusInfo
     */
    public function getInfo() : BasicStatusInfo
    {
        return $this->info;
    }
    /**
     * 
     *
     * @param BasicStatusInfo $info
     *
     * @return self
     */
    public function setInfo(BasicStatusInfo $info) : self
    {
        $this->info = $info;
        return $this;
    }
}