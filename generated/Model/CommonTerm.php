<?php

namespace glook\PecomSdk\Generated\Model;

class CommonTerm
{
    /**
     * Филиал-получатель
     *
     * @var string|null
     */
    protected $branchReceiver;
    /**
     * Филиал-отправитель
     *
     * @var string|null
     */
    protected $branchSender;
    /**
     * Дни льготной доставки. Значения соответствуют дню недели льготной доставки (понедельник — 1, воскресенье — 7)
     *
     * @var float[]|null
     */
    protected $discountedDeliveryWeekDays;
    /**
     * Указываются дни недели отправки груза из филиала отправления в филиал получения. 1 — ПН, 2 — ВТ и т.д.
     *
     * @var float[]|null
     */
    protected $senderShippingDays;
    /**
     * Ориентировочные сроки перевозки, суток. Из массива надо выбрать элемент в соответствии со временем сдачи груза на склад и массивом данных по времени приемки груза `transportingTimes`. Значения по срокам перевозки представлены в виде строки «КоличествоДнейПеревозки» или «МинимальноеКоличествоДнейПеревозки – МаксимальноеКоличествоДнейПеревозки»
     *
     * @var string[]|null
     */
    protected $transporting;
    /**
     * В актуальной версии протокола API не используется
     *
     * @var int|null
     */
    protected $transportingTypes;
    /**
     * Ориентировочные сроки перевозки с доставкой, суток. Из массива надо выбрать элемент в соответствии со временем сдачи груза на склад и массивом данных по времени приемки груза `transportingTimes`.
     *
     * @var string[]|null
     */
    protected $transportingWithDelivery;
    /**
     * Срок перевозки с забором и доставкой, суток
     *
     * @var string|null
     */
    protected $transportingWithDeliveryWithPickup;
    /**
     * Срок перевозки с забором, суток
     *
     * @var string|null
     */
    protected $transportingWithPickup;
    /**
     * Продукт/тариф, для которого выведены сроки
     *
     * @var int|null
     */
    protected $type;
    /**
     * Филиал-получатель
     *
     * @return string|null
     */
    public function getBranchReceiver() : ?string
    {
        return $this->branchReceiver;
    }
    /**
     * Филиал-получатель
     *
     * @param string|null $branchReceiver
     *
     * @return self
     */
    public function setBranchReceiver(?string $branchReceiver) : self
    {
        $this->branchReceiver = $branchReceiver;
        return $this;
    }
    /**
     * Филиал-отправитель
     *
     * @return string|null
     */
    public function getBranchSender() : ?string
    {
        return $this->branchSender;
    }
    /**
     * Филиал-отправитель
     *
     * @param string|null $branchSender
     *
     * @return self
     */
    public function setBranchSender(?string $branchSender) : self
    {
        $this->branchSender = $branchSender;
        return $this;
    }
    /**
     * Дни льготной доставки. Значения соответствуют дню недели льготной доставки (понедельник — 1, воскресенье — 7)
     *
     * @return float[]|null
     */
    public function getDiscountedDeliveryWeekDays() : ?array
    {
        return $this->discountedDeliveryWeekDays;
    }
    /**
     * Дни льготной доставки. Значения соответствуют дню недели льготной доставки (понедельник — 1, воскресенье — 7)
     *
     * @param float[]|null $discountedDeliveryWeekDays
     *
     * @return self
     */
    public function setDiscountedDeliveryWeekDays(?array $discountedDeliveryWeekDays) : self
    {
        $this->discountedDeliveryWeekDays = $discountedDeliveryWeekDays;
        return $this;
    }
    /**
     * Указываются дни недели отправки груза из филиала отправления в филиал получения. 1 — ПН, 2 — ВТ и т.д.
     *
     * @return float[]|null
     */
    public function getSenderShippingDays() : ?array
    {
        return $this->senderShippingDays;
    }
    /**
     * Указываются дни недели отправки груза из филиала отправления в филиал получения. 1 — ПН, 2 — ВТ и т.д.
     *
     * @param float[]|null $senderShippingDays
     *
     * @return self
     */
    public function setSenderShippingDays(?array $senderShippingDays) : self
    {
        $this->senderShippingDays = $senderShippingDays;
        return $this;
    }
    /**
     * Ориентировочные сроки перевозки, суток. Из массива надо выбрать элемент в соответствии со временем сдачи груза на склад и массивом данных по времени приемки груза `transportingTimes`. Значения по срокам перевозки представлены в виде строки «КоличествоДнейПеревозки» или «МинимальноеКоличествоДнейПеревозки – МаксимальноеКоличествоДнейПеревозки»
     *
     * @return string[]|null
     */
    public function getTransporting() : ?array
    {
        return $this->transporting;
    }
    /**
     * Ориентировочные сроки перевозки, суток. Из массива надо выбрать элемент в соответствии со временем сдачи груза на склад и массивом данных по времени приемки груза `transportingTimes`. Значения по срокам перевозки представлены в виде строки «КоличествоДнейПеревозки» или «МинимальноеКоличествоДнейПеревозки – МаксимальноеКоличествоДнейПеревозки»
     *
     * @param string[]|null $transporting
     *
     * @return self
     */
    public function setTransporting(?array $transporting) : self
    {
        $this->transporting = $transporting;
        return $this;
    }
    /**
     * В актуальной версии протокола API не используется
     *
     * @return int|null
     */
    public function getTransportingTypes() : ?int
    {
        return $this->transportingTypes;
    }
    /**
     * В актуальной версии протокола API не используется
     *
     * @param int|null $transportingTypes
     *
     * @return self
     */
    public function setTransportingTypes(?int $transportingTypes) : self
    {
        $this->transportingTypes = $transportingTypes;
        return $this;
    }
    /**
     * Ориентировочные сроки перевозки с доставкой, суток. Из массива надо выбрать элемент в соответствии со временем сдачи груза на склад и массивом данных по времени приемки груза `transportingTimes`.
     *
     * @return string[]|null
     */
    public function getTransportingWithDelivery() : ?array
    {
        return $this->transportingWithDelivery;
    }
    /**
     * Ориентировочные сроки перевозки с доставкой, суток. Из массива надо выбрать элемент в соответствии со временем сдачи груза на склад и массивом данных по времени приемки груза `transportingTimes`.
     *
     * @param string[]|null $transportingWithDelivery
     *
     * @return self
     */
    public function setTransportingWithDelivery(?array $transportingWithDelivery) : self
    {
        $this->transportingWithDelivery = $transportingWithDelivery;
        return $this;
    }
    /**
     * Срок перевозки с забором и доставкой, суток
     *
     * @return string|null
     */
    public function getTransportingWithDeliveryWithPickup() : ?string
    {
        return $this->transportingWithDeliveryWithPickup;
    }
    /**
     * Срок перевозки с забором и доставкой, суток
     *
     * @param string|null $transportingWithDeliveryWithPickup
     *
     * @return self
     */
    public function setTransportingWithDeliveryWithPickup(?string $transportingWithDeliveryWithPickup) : self
    {
        $this->transportingWithDeliveryWithPickup = $transportingWithDeliveryWithPickup;
        return $this;
    }
    /**
     * Срок перевозки с забором, суток
     *
     * @return string|null
     */
    public function getTransportingWithPickup() : ?string
    {
        return $this->transportingWithPickup;
    }
    /**
     * Срок перевозки с забором, суток
     *
     * @param string|null $transportingWithPickup
     *
     * @return self
     */
    public function setTransportingWithPickup(?string $transportingWithPickup) : self
    {
        $this->transportingWithPickup = $transportingWithPickup;
        return $this;
    }
    /**
     * Продукт/тариф, для которого выведены сроки
     *
     * @return int|null
     */
    public function getType() : ?int
    {
        return $this->type;
    }
    /**
     * Продукт/тариф, для которого выведены сроки
     *
     * @param int|null $type
     *
     * @return self
     */
    public function setType(?int $type) : self
    {
        $this->type = $type;
        return $this;
    }
}