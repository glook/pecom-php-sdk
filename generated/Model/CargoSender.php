<?php

namespace glook\PecomSdk\Generated\Model;

class CargoSender
{
    /**
     * Филиал.
     *
     * @var null|string
     */
    protected $branch;

    /**
     * Филиал отправителя.
     *
     * @var null|BranchInfo
     */
    protected $branchInfo;

    /**
     * Тип договора с клиентом. 0 — Прочие договоры, 1 — Предоплата, 2 — Отсрочка платежа (тип 1), 3 — Отсрочка платежа (тип 2), 4 — Договор с интернет магазином, 5 — Оферта или стандартный договор (оплата до выдачи груза).
     *
     * @var null|int
     */
    protected $counterpartPaymentType;

    /**
     * Адрес забора груза, если заказана услуга забора. Требуются права на получение информации.
     *
     * @var null|string
     */
    protected $intakeAddress;

    /**
     * Ответственное лицо.
     *
     * @var null|string
     */
    protected $person;

    /**
     * Телефоны.
     *
     * @var null|string
     */
    protected $phone;

    /**
     * Наименование.
     *
     * @var null|string
     */
    protected $sender;

    /**
     * Филиал.
     */
    public function getBranch(): ?string
    {
        return $this->branch;
    }

    /**
     * Филиал.
     */
    public function setBranch(?string $branch): self
    {
        $this->branch = $branch;

        return $this;
    }

    /**
     * Филиал отправителя.
     */
    public function getBranchInfo(): ?BranchInfo
    {
        return $this->branchInfo;
    }

    /**
     * Филиал отправителя.
     */
    public function setBranchInfo(?BranchInfo $branchInfo): self
    {
        $this->branchInfo = $branchInfo;

        return $this;
    }

    /**
     * Тип договора с клиентом. 0 — Прочие договоры, 1 — Предоплата, 2 — Отсрочка платежа (тип 1), 3 — Отсрочка платежа (тип 2), 4 — Договор с интернет магазином, 5 — Оферта или стандартный договор (оплата до выдачи груза).
     */
    public function getCounterpartPaymentType(): ?int
    {
        return $this->counterpartPaymentType;
    }

    /**
     * Тип договора с клиентом. 0 — Прочие договоры, 1 — Предоплата, 2 — Отсрочка платежа (тип 1), 3 — Отсрочка платежа (тип 2), 4 — Договор с интернет магазином, 5 — Оферта или стандартный договор (оплата до выдачи груза).
     */
    public function setCounterpartPaymentType(?int $counterpartPaymentType): self
    {
        $this->counterpartPaymentType = $counterpartPaymentType;

        return $this;
    }

    /**
     * Адрес забора груза, если заказана услуга забора. Требуются права на получение информации.
     */
    public function getIntakeAddress(): ?string
    {
        return $this->intakeAddress;
    }

    /**
     * Адрес забора груза, если заказана услуга забора. Требуются права на получение информации.
     */
    public function setIntakeAddress(?string $intakeAddress): self
    {
        $this->intakeAddress = $intakeAddress;

        return $this;
    }

    /**
     * Ответственное лицо.
     */
    public function getPerson(): ?string
    {
        return $this->person;
    }

    /**
     * Ответственное лицо.
     */
    public function setPerson(?string $person): self
    {
        $this->person = $person;

        return $this;
    }

    /**
     * Телефоны.
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * Телефоны.
     */
    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Наименование.
     */
    public function getSender(): ?string
    {
        return $this->sender;
    }

    /**
     * Наименование.
     */
    public function setSender(?string $sender): self
    {
        $this->sender = $sender;

        return $this;
    }
}
