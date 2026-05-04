<?php

namespace glook\PecomSdk\Generated\Model;

class PreregistrationSubmitRequest
{
    /**
     * 
     *
     * @var PreregistrationCargo[]
     */
    protected $cargos;
    /**
     * 
     *
     * @var PreregistrationCommon
     */
    protected $common;
    /**
     * 
     *
     * @var PreregistrationPickUpDetails
     */
    protected $pickUpDetails;
    /**
     * 
     *
     * @var PreregistrationSender
     */
    protected $sender;
    /**
     * 
     *
     * @return PreregistrationCargo[]
     */
    public function getCargos() : array
    {
        return $this->cargos;
    }
    /**
     * 
     *
     * @param PreregistrationCargo[] $cargos
     *
     * @return self
     */
    public function setCargos(array $cargos) : self
    {
        $this->cargos = $cargos;
        return $this;
    }
    /**
     * 
     *
     * @return PreregistrationCommon
     */
    public function getCommon() : PreregistrationCommon
    {
        return $this->common;
    }
    /**
     * 
     *
     * @param PreregistrationCommon $common
     *
     * @return self
     */
    public function setCommon(PreregistrationCommon $common) : self
    {
        $this->common = $common;
        return $this;
    }
    /**
     * 
     *
     * @return PreregistrationPickUpDetails
     */
    public function getPickUpDetails() : PreregistrationPickUpDetails
    {
        return $this->pickUpDetails;
    }
    /**
     * 
     *
     * @param PreregistrationPickUpDetails $pickUpDetails
     *
     * @return self
     */
    public function setPickUpDetails(PreregistrationPickUpDetails $pickUpDetails) : self
    {
        $this->pickUpDetails = $pickUpDetails;
        return $this;
    }
    /**
     * 
     *
     * @return PreregistrationSender
     */
    public function getSender() : PreregistrationSender
    {
        return $this->sender;
    }
    /**
     * 
     *
     * @param PreregistrationSender $sender
     *
     * @return self
     */
    public function setSender(PreregistrationSender $sender) : self
    {
        $this->sender = $sender;
        return $this;
    }
}