<?php

namespace glook\PecomSdk\Generated\Model;

class CargosCargoReceiver
{
    /**
     * 
     *
     * @var AbbreviatedReceiver
     */
    protected $abbreviated;
    /**
     * 
     *
     * @var BranchInfo
     */
    protected $branch;
    /**
     * Тип договора с клиентом. 0 — Прочие договоры, 1 — Предоплата, 2 — Отсрочка платежа (тип 1), 3 — Отсрочка платежа (тип 2), 4 — Договор с интернет магазином, 5 — Оферта или стандартный договор (оплата до выдачи груза)
     *
     * @var int|null
     */
    protected $counterpartPaymentType;
    /**
     * Данные по получателю и способу получения груза в ответе метода достоверны (в редких случаях информация в API может быть не достоверной) (`true` — данные достоверны, `false` — под данным получателя необходима консультация сотрудника ПЭК)
     *
     * @var bool|null
     */
    protected $isCorrect;
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
    protected $receiver;
    /**
     * Груз можно получить предъявив документ удостоверяющий личность и доверенность (при получении по доверенности) (`true` — если получение по документу возможно, `false` — в противном случае)
     *
     * @var bool|null
     */
    protected $receivingByDocument;
    /**
     * Груз можно получить по СМС коду (`true` — если возможно, `false` — если невозможно)
     *
     * @var bool|null
     */
    protected $receivingBySMSCode;
    /**
     * 
     *
     * @return AbbreviatedReceiver
     */
    public function getAbbreviated() : AbbreviatedReceiver
    {
        return $this->abbreviated;
    }
    /**
     * 
     *
     * @param AbbreviatedReceiver $abbreviated
     *
     * @return self
     */
    public function setAbbreviated(AbbreviatedReceiver $abbreviated) : self
    {
        $this->abbreviated = $abbreviated;
        return $this;
    }
    /**
     * 
     *
     * @return BranchInfo
     */
    public function getBranch() : BranchInfo
    {
        return $this->branch;
    }
    /**
     * 
     *
     * @param BranchInfo $branch
     *
     * @return self
     */
    public function setBranch(BranchInfo $branch) : self
    {
        $this->branch = $branch;
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
     * Данные по получателю и способу получения груза в ответе метода достоверны (в редких случаях информация в API может быть не достоверной) (`true` — данные достоверны, `false` — под данным получателя необходима консультация сотрудника ПЭК)
     *
     * @return bool|null
     */
    public function getIsCorrect() : ?bool
    {
        return $this->isCorrect;
    }
    /**
     * Данные по получателю и способу получения груза в ответе метода достоверны (в редких случаях информация в API может быть не достоверной) (`true` — данные достоверны, `false` — под данным получателя необходима консультация сотрудника ПЭК)
     *
     * @param bool|null $isCorrect
     *
     * @return self
     */
    public function setIsCorrect(?bool $isCorrect) : self
    {
        $this->isCorrect = $isCorrect;
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
    public function getReceiver() : ?string
    {
        return $this->receiver;
    }
    /**
     * Наименование
     *
     * @param string|null $receiver
     *
     * @return self
     */
    public function setReceiver(?string $receiver) : self
    {
        $this->receiver = $receiver;
        return $this;
    }
    /**
     * Груз можно получить предъявив документ удостоверяющий личность и доверенность (при получении по доверенности) (`true` — если получение по документу возможно, `false` — в противном случае)
     *
     * @return bool|null
     */
    public function getReceivingByDocument() : ?bool
    {
        return $this->receivingByDocument;
    }
    /**
     * Груз можно получить предъявив документ удостоверяющий личность и доверенность (при получении по доверенности) (`true` — если получение по документу возможно, `false` — в противном случае)
     *
     * @param bool|null $receivingByDocument
     *
     * @return self
     */
    public function setReceivingByDocument(?bool $receivingByDocument) : self
    {
        $this->receivingByDocument = $receivingByDocument;
        return $this;
    }
    /**
     * Груз можно получить по СМС коду (`true` — если возможно, `false` — если невозможно)
     *
     * @return bool|null
     */
    public function getReceivingBySMSCode() : ?bool
    {
        return $this->receivingBySMSCode;
    }
    /**
     * Груз можно получить по СМС коду (`true` — если возможно, `false` — если невозможно)
     *
     * @param bool|null $receivingBySMSCode
     *
     * @return self
     */
    public function setReceivingBySMSCode(?bool $receivingBySMSCode) : self
    {
        $this->receivingBySMSCode = $receivingBySMSCode;
        return $this;
    }
}