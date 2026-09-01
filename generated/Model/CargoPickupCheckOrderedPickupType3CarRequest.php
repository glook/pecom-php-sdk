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
     * @var null|string
     */
    protected $senderInn;

    /**
     * Плановая дата выполнения. Дата забора груза, на которую проверяется наличие заказа машины.
     */
    public function getIntakePlanDateTime(): \DateTime
    {
        return $this->intakePlanDateTime;
    }

    /**
     * Плановая дата выполнения. Дата забора груза, на которую проверяется наличие заказа машины.
     */
    public function setIntakePlanDateTime(\DateTime $intakePlanDateTime): self
    {
        $this->intakePlanDateTime = $intakePlanDateTime;

        return $this;
    }

    /**
     * ИНН отправителя
     */
    public function getSenderInn(): ?string
    {
        return $this->senderInn;
    }

    /**
     * ИНН отправителя
     */
    public function setSenderInn(?string $senderInn): self
    {
        $this->senderInn = $senderInn;

        return $this;
    }
}
