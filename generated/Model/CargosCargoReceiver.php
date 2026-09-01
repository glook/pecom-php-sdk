<?php

namespace glook\PecomSdk\Generated\Model;

class CargosCargoReceiver
{
    /**
     * информация об актуальном получателе, не требующая специаальных прав доступа
     *
     * @var null|AbbreviatedReceiver
     */
    protected $abbreviated;

    /**
     * Филиал получателя
     *
     * @var null|BranchInfo
     */
    protected $branch;

    /**
     * Тип договора с клиентом. 0 — Прочие договоры, 1 — Предоплата, 2 — Отсрочка платежа (тип 1), 3 — Отсрочка платежа (тип 2), 4 — Договор с интернет магазином, 5 — Оферта или стандартный договор (оплата до выдачи груза)
     *
     * @var null|int
     */
    protected $counterpartPaymentType;

    /**
     * Данные по получателю и способу получения груза в ответе метода достоверны (в редких случаях информация в API может быть не достоверной) (`true` — данные достоверны, `false` — под данным получателя необходима консультация сотрудника ПЭК)
     *
     * @var null|bool
     */
    protected $isCorrect;

    /**
     * Ответственное лицо
     *
     * @var null|string
     */
    protected $person;

    /**
     * Телефоны
     *
     * @var null|string
     */
    protected $phone;

    /**
     * Наименование
     *
     * @var null|string
     */
    protected $receiver;

    /**
     * Груз можно получить предъявив документ удостоверяющий личность и доверенность (при получении по доверенности) (`true` — если получение по документу возможно, `false` — в противном случае)
     *
     * @var null|bool
     */
    protected $receivingByDocument;

    /**
     * Груз можно получить по СМС коду (`true` — если возможно, `false` — если невозможно)
     *
     * @var null|bool
     */
    protected $receivingBySMSCode;

    /**
     * информация об актуальном получателе, не требующая специаальных прав доступа
     */
    public function getAbbreviated(): ?AbbreviatedReceiver
    {
        return $this->abbreviated;
    }

    /**
     * информация об актуальном получателе, не требующая специаальных прав доступа
     */
    public function setAbbreviated(?AbbreviatedReceiver $abbreviated): self
    {
        $this->abbreviated = $abbreviated;

        return $this;
    }

    /**
     * Филиал получателя
     */
    public function getBranch(): ?BranchInfo
    {
        return $this->branch;
    }

    /**
     * Филиал получателя
     */
    public function setBranch(?BranchInfo $branch): self
    {
        $this->branch = $branch;

        return $this;
    }

    /**
     * Тип договора с клиентом. 0 — Прочие договоры, 1 — Предоплата, 2 — Отсрочка платежа (тип 1), 3 — Отсрочка платежа (тип 2), 4 — Договор с интернет магазином, 5 — Оферта или стандартный договор (оплата до выдачи груза)
     */
    public function getCounterpartPaymentType(): ?int
    {
        return $this->counterpartPaymentType;
    }

    /**
     * Тип договора с клиентом. 0 — Прочие договоры, 1 — Предоплата, 2 — Отсрочка платежа (тип 1), 3 — Отсрочка платежа (тип 2), 4 — Договор с интернет магазином, 5 — Оферта или стандартный договор (оплата до выдачи груза)
     */
    public function setCounterpartPaymentType(?int $counterpartPaymentType): self
    {
        $this->counterpartPaymentType = $counterpartPaymentType;

        return $this;
    }

    /**
     * Данные по получателю и способу получения груза в ответе метода достоверны (в редких случаях информация в API может быть не достоверной) (`true` — данные достоверны, `false` — под данным получателя необходима консультация сотрудника ПЭК)
     */
    public function getIsCorrect(): ?bool
    {
        return $this->isCorrect;
    }

    /**
     * Данные по получателю и способу получения груза в ответе метода достоверны (в редких случаях информация в API может быть не достоверной) (`true` — данные достоверны, `false` — под данным получателя необходима консультация сотрудника ПЭК)
     */
    public function setIsCorrect(?bool $isCorrect): self
    {
        $this->isCorrect = $isCorrect;

        return $this;
    }

    /**
     * Ответственное лицо
     */
    public function getPerson(): ?string
    {
        return $this->person;
    }

    /**
     * Ответственное лицо
     */
    public function setPerson(?string $person): self
    {
        $this->person = $person;

        return $this;
    }

    /**
     * Телефоны
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * Телефоны
     */
    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Наименование
     */
    public function getReceiver(): ?string
    {
        return $this->receiver;
    }

    /**
     * Наименование
     */
    public function setReceiver(?string $receiver): self
    {
        $this->receiver = $receiver;

        return $this;
    }

    /**
     * Груз можно получить предъявив документ удостоверяющий личность и доверенность (при получении по доверенности) (`true` — если получение по документу возможно, `false` — в противном случае)
     */
    public function getReceivingByDocument(): ?bool
    {
        return $this->receivingByDocument;
    }

    /**
     * Груз можно получить предъявив документ удостоверяющий личность и доверенность (при получении по доверенности) (`true` — если получение по документу возможно, `false` — в противном случае)
     */
    public function setReceivingByDocument(?bool $receivingByDocument): self
    {
        $this->receivingByDocument = $receivingByDocument;

        return $this;
    }

    /**
     * Груз можно получить по СМС коду (`true` — если возможно, `false` — если невозможно)
     */
    public function getReceivingBySMSCode(): ?bool
    {
        return $this->receivingBySMSCode;
    }

    /**
     * Груз можно получить по СМС коду (`true` — если возможно, `false` — если невозможно)
     */
    public function setReceivingBySMSCode(?bool $receivingBySMSCode): self
    {
        $this->receivingBySMSCode = $receivingBySMSCode;

        return $this;
    }
}
