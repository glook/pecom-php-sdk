<?php

namespace glook\PecomSdk\Generated\Model;

class CargoStatusByBarcodeItem
{
    /**
     * 
     *
     * @var CargoInfo
     */
    protected $cargo;
    /**
     * 
     *
     * @var CargoStatusInfo
     */
    protected $info;
    /**
     * Штрих-коды
     *
     * @var string[]|null
     */
    protected $positionBarCodes;
    /**
     * 
     *
     * @var CargosCargoReceiver
     */
    protected $receiver;
    /**
     * 
     *
     * @var CargoSender
     */
    protected $sender;
    /**
     * 
     *
     * @var CargoServices
     */
    protected $services;
    /**
     * 
     *
     * @return CargoInfo
     */
    public function getCargo() : CargoInfo
    {
        return $this->cargo;
    }
    /**
     * 
     *
     * @param CargoInfo $cargo
     *
     * @return self
     */
    public function setCargo(CargoInfo $cargo) : self
    {
        $this->cargo = $cargo;
        return $this;
    }
    /**
     * 
     *
     * @return CargoStatusInfo
     */
    public function getInfo() : CargoStatusInfo
    {
        return $this->info;
    }
    /**
     * 
     *
     * @param CargoStatusInfo $info
     *
     * @return self
     */
    public function setInfo(CargoStatusInfo $info) : self
    {
        $this->info = $info;
        return $this;
    }
    /**
     * Штрих-коды
     *
     * @return string[]|null
     */
    public function getPositionBarCodes() : ?array
    {
        return $this->positionBarCodes;
    }
    /**
     * Штрих-коды
     *
     * @param string[]|null $positionBarCodes
     *
     * @return self
     */
    public function setPositionBarCodes(?array $positionBarCodes) : self
    {
        $this->positionBarCodes = $positionBarCodes;
        return $this;
    }
    /**
     * 
     *
     * @return CargosCargoReceiver
     */
    public function getReceiver() : CargosCargoReceiver
    {
        return $this->receiver;
    }
    /**
     * 
     *
     * @param CargosCargoReceiver $receiver
     *
     * @return self
     */
    public function setReceiver(CargosCargoReceiver $receiver) : self
    {
        $this->receiver = $receiver;
        return $this;
    }
    /**
     * 
     *
     * @return CargoSender
     */
    public function getSender() : CargoSender
    {
        return $this->sender;
    }
    /**
     * 
     *
     * @param CargoSender $sender
     *
     * @return self
     */
    public function setSender(CargoSender $sender) : self
    {
        $this->sender = $sender;
        return $this;
    }
    /**
     * 
     *
     * @return CargoServices
     */
    public function getServices() : CargoServices
    {
        return $this->services;
    }
    /**
     * 
     *
     * @param CargoServices $services
     *
     * @return self
     */
    public function setServices(CargoServices $services) : self
    {
        $this->services = $services;
        return $this;
    }
}