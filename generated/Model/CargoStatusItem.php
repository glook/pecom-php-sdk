<?php

namespace glook\PecomSdk\Generated\Model;

class CargoStatusItem
{
    /**
     * Параметры груза
     *
     * @var null|CargoInfo
     */
    protected $cargo;

    /**
     * Общая информация о грузе
     *
     * @var null|CargoStatusInfo
     */
    protected $info;

    /**
     * Получатель
     *
     * @var null|CargosCargoReceiver
     */
    protected $receiver;

    /**
     * Отправитель
     *
     * @var null|CargoSender
     */
    protected $sender;

    /**
     * Услуги
     *
     * @var null|CargoServices
     */
    protected $services;

    /**
     * Параметры груза
     */
    public function getCargo(): ?CargoInfo
    {
        return $this->cargo;
    }

    /**
     * Параметры груза
     */
    public function setCargo(?CargoInfo $cargo): self
    {
        $this->cargo = $cargo;

        return $this;
    }

    /**
     * Общая информация о грузе
     */
    public function getInfo(): ?CargoStatusInfo
    {
        return $this->info;
    }

    /**
     * Общая информация о грузе
     */
    public function setInfo(?CargoStatusInfo $info): self
    {
        $this->info = $info;

        return $this;
    }

    /**
     * Получатель
     */
    public function getReceiver(): ?CargosCargoReceiver
    {
        return $this->receiver;
    }

    /**
     * Получатель
     */
    public function setReceiver(?CargosCargoReceiver $receiver): self
    {
        $this->receiver = $receiver;

        return $this;
    }

    /**
     * Отправитель
     */
    public function getSender(): ?CargoSender
    {
        return $this->sender;
    }

    /**
     * Отправитель
     */
    public function setSender(?CargoSender $sender): self
    {
        $this->sender = $sender;

        return $this;
    }

    /**
     * Услуги
     */
    public function getServices(): ?CargoServices
    {
        return $this->services;
    }

    /**
     * Услуги
     */
    public function setServices(?CargoServices $services): self
    {
        $this->services = $services;

        return $this;
    }
}
