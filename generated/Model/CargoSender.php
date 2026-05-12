<?php

namespace glook\PecomSdk\Generated\Model;

class CargoSender
{
    /**
     * Филиал
     *
     * @var string|null
     */
    protected $branch;
    /**
     * Филиал отправителя
     *
     * @var BranchInfo|null
     */
    protected $branchInfo;
    /**
     * Тип договора с клиентом. 0 — Прочие договоры, 1 — Предоплата, 2 — Отсрочка платежа (тип 1), 3 — Отсрочка платежа (тип 2), 4 — Договор с интернет магазином, 5 — Оферта или стандартный договор (оплата до выдачи груза)
     *
     * @var int|null
     */
    protected $counterpartPaymentType;
    /**
     * Адрес забора груза, если заказана услуга забора. Требуются права на получение информации.
     *
     * @var string|null
     */
    protected $intakeAddress;
    /**
     * Ответственное лицо
     *
     * @var string|null
     */
    protected $person;
    /**
     * Телефоны
     *
     * @var string|null
     */
    protected $phone;
    /**
     * Наименование
     *
     * @var string|null
     */
    protected $sender;
    /**
     * Филиал
     *
     * @return string|null
     */
    public function getBranch() : ?string
    {
        return $this->branch;
    }
    /**
     * Филиал
     *
     * @param string|null $branch
     *
     * @return self
     */
    public function setBranch(?string $branch) : self
    {
        $this->branch = $branch;
        return $this;
    }
    /**
     * Филиал отправителя
     *
     * @return BranchInfo|null
     */
    public function getBranchInfo() : ?BranchInfo
    {
        return $this->branchInfo;
    }
    /**
     * Филиал отправителя
     *
     * @param BranchInfo|null $branchInfo
     *
     * @return self
     */
    public function setBranchInfo(?BranchInfo $branchInfo) : self
    {
        $this->branchInfo = $branchInfo;
        return $this;
    }
    /**
     * Тип договора с клиентом. 0 — Прочие договоры, 1 — Предоплата, 2 — Отсрочка платежа (тип 1), 3 — Отсрочка платежа (тип 2), 4 — Договор с интернет магазином, 5 — Оферта или стандартный договор (оплата до выдачи груза)
     *
     * @return int|null
     */
    public function getCounterpartPaymentType() : ?int
    {
        return $this->counterpartPaymentType;
    }
    /**
     * Тип договора с клиентом. 0 — Прочие договоры, 1 — Предоплата, 2 — Отсрочка платежа (тип 1), 3 — Отсрочка платежа (тип 2), 4 — Договор с интернет магазином, 5 — Оферта или стандартный договор (оплата до выдачи груза)
     *
     * @param int|null $counterpartPaymentType
     *
     * @return self
     */
    public function setCounterpartPaymentType(?int $counterpartPaymentType) : self
    {
        $this->counterpartPaymentType = $counterpartPaymentType;
        return $this;
    }
    /**
     * Адрес забора груза, если заказана услуга забора. Требуются права на получение информации.
     *
     * @return string|null
     */
    public function getIntakeAddress() : ?string
    {
        return $this->intakeAddress;
    }
    /**
     * Адрес забора груза, если заказана услуга забора. Требуются права на получение информации.
     *
     * @param string|null $intakeAddress
     *
     * @return self
     */
    public function setIntakeAddress(?string $intakeAddress) : self
    {
        $this->intakeAddress = $intakeAddress;
        return $this;
    }
    /**
     * Ответственное лицо
     *
     * @return string|null
     */
    public function getPerson() : ?string
    {
        return $this->person;
    }
    /**
     * Ответственное лицо
     *
     * @param string|null $person
     *
     * @return self
     */
    public function setPerson(?string $person) : self
    {
        $this->person = $person;
        return $this;
    }
    /**
     * Телефоны
     *
     * @return string|null
     */
    public function getPhone() : ?string
    {
        return $this->phone;
    }
    /**
     * Телефоны
     *
     * @param string|null $phone
     *
     * @return self
     */
    public function setPhone(?string $phone) : self
    {
        $this->phone = $phone;
        return $this;
    }
    /**
     * Наименование
     *
     * @return string|null
     */
    public function getSender() : ?string
    {
        return $this->sender;
    }
    /**
     * Наименование
     *
     * @param string|null $sender
     *
     * @return self
     */
    public function setSender(?string $sender) : self
    {
        $this->sender = $sender;
        return $this;
    }
}