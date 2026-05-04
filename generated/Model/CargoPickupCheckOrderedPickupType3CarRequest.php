<?php

namespace glook\PecomSdk\Generated\Model;

class CargoPickupCheckOrderedPickupType3CarRequest
{
    /**
     * Плановая дата выполнения. Дата забора груза, на которую проверяется наличие заказа машины.
     *
     * @var \DateTime
     */
    protected $intakePlanDateTime;
    /**
     * ИНН отправителя
     *
     * @var string|null
     */
    protected $senderInn;
    /**
     * Плановая дата выполнения. Дата забора груза, на которую проверяется наличие заказа машины.
     *
     * @return \DateTime
     */
    public function getIntakePlanDateTime() : \DateTime
    {
        return $this->intakePlanDateTime;
    }
    /**
     * Плановая дата выполнения. Дата забора груза, на которую проверяется наличие заказа машины.
     *
     * @param \DateTime $intakePlanDateTime
     *
     * @return self
     */
    public function setIntakePlanDateTime(\DateTime $intakePlanDateTime) : self
    {
        $this->intakePlanDateTime = $intakePlanDateTime;
        return $this;
    }
    /**
     * ИНН отправителя
     *
     * @return string|null
     */
    public function getSenderInn() : ?string
    {
        return $this->senderInn;
    }
    /**
     * ИНН отправителя
     *
     * @param string|null $senderInn
     *
     * @return self
     */
    public function setSenderInn(?string $senderInn) : self
    {
        $this->senderInn = $senderInn;
        return $this;
    }
}