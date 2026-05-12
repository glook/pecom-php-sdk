<?php

namespace glook\PecomSdk\Generated\Model;

class CargoStatusItem
{
    /**
     * Параметры груза
     *
     * @var CargoInfo|null
     */
    protected $cargo;
    /**
     * Общая информация о грузе
     *
     * @var CargoStatusInfo|null
     */
    protected $info;
    /**
     * Получатель
     *
     * @var CargosCargoReceiver|null
     */
    protected $receiver;
    /**
     * Отправитель
     *
     * @var CargoSender|null
     */
    protected $sender;
    /**
     * Услуги
     *
     * @var CargoServices|null
     */
    protected $services;
    /**
     * Параметры груза
     *
     * @return CargoInfo|null
     */
    public function getCargo() : ?CargoInfo
    {
        return $this->cargo;
    }
    /**
     * Параметры груза
     *
     * @param CargoInfo|null $cargo
     *
     * @return self
     */
    public function setCargo(?CargoInfo $cargo) : self
    {
        $this->cargo = $cargo;
        return $this;
    }
    /**
     * Общая информация о грузе
     *
     * @return CargoStatusInfo|null
     */
    public function getInfo() : ?CargoStatusInfo
    {
        return $this->info;
    }
    /**
     * Общая информация о грузе
     *
     * @param CargoStatusInfo|null $info
     *
     * @return self
     */
    public function setInfo(?CargoStatusInfo $info) : self
    {
        $this->info = $info;
        return $this;
    }
    /**
     * Получатель
     *
     * @return CargosCargoReceiver|null
     */
    public function getReceiver() : ?CargosCargoReceiver
    {
        return $this->receiver;
    }
    /**
     * Получатель
     *
     * @param CargosCargoReceiver|null $receiver
     *
     * @return self
     */
    public function setReceiver(?CargosCargoReceiver $receiver) : self
    {
        $this->receiver = $receiver;
        return $this;
    }
    /**
     * Отправитель
     *
     * @return CargoSender|null
     */
    public function getSender() : ?CargoSender
    {
        return $this->sender;
    }
    /**
     * Отправитель
     *
     * @param CargoSender|null $sender
     *
     * @return self
     */
    public function setSender(?CargoSender $sender) : self
    {
        $this->sender = $sender;
        return $this;
    }
    /**
     * Услуги
     *
     * @return CargoServices|null
     */
    public function getServices() : ?CargoServices
    {
        return $this->services;
    }
    /**
     * Услуги
     *
     * @param CargoServices|null $services
     *
     * @return self
     */
    public function setServices(?CargoServices $services) : self
    {
        $this->services = $services;
        return $this;
    }
}