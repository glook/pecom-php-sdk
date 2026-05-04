<?php

namespace glook\PecomSdk\Generated\Model;

class CargoPickupNetworkSubmitRequest
{
    /**
     * Данные о позициях
     *
     * @var CargoPickupNetworkSubmitRequestCargos
     */
    protected $cargos;
    /**
     * Общие данные по заявке
     *
     * @var CargoPickupNetworkSubmitRequestCommon
     */
    protected $common;
    /**
     * Данные об отправителе
     *
     * @var CargoPickupNetworkSubmitRequestSender
     */
    protected $sender;
    /**
     * Данные о позициях
     *
     * @return CargoPickupNetworkSubmitRequestCargos
     */
    public function getCargos() : CargoPickupNetworkSubmitRequestCargos
    {
        return $this->cargos;
    }
    /**
     * Данные о позициях
     *
     * @param CargoPickupNetworkSubmitRequestCargos $cargos
     *
     * @return self
     */
    public function setCargos(CargoPickupNetworkSubmitRequestCargos $cargos) : self
    {
        $this->cargos = $cargos;
        return $this;
    }
    /**
     * Общие данные по заявке
     *
     * @return CargoPickupNetworkSubmitRequestCommon
     */
    public function getCommon() : CargoPickupNetworkSubmitRequestCommon
    {
        return $this->common;
    }
    /**
     * Общие данные по заявке
     *
     * @param CargoPickupNetworkSubmitRequestCommon $common
     *
     * @return self
     */
    public function setCommon(CargoPickupNetworkSubmitRequestCommon $common) : self
    {
        $this->common = $common;
        return $this;
    }
    /**
     * Данные об отправителе
     *
     * @return CargoPickupNetworkSubmitRequestSender
     */
    public function getSender() : CargoPickupNetworkSubmitRequestSender
    {
        return $this->sender;
    }
    /**
     * Данные об отправителе
     *
     * @param CargoPickupNetworkSubmitRequestSender $sender
     *
     * @return self
     */
    public function setSender(CargoPickupNetworkSubmitRequestSender $sender) : self
    {
        $this->sender = $sender;
        return $this;
    }
}