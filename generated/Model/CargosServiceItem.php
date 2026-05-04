<?php

namespace glook\PecomSdk\Generated\Model;

class CargosServiceItem
{
    /**
     * Филиал
     *
     * @var string|null
     */
    protected $branch;
    /**
     * Валюта
     *
     * @var string|null
     */
    protected $currencyName;
    /**
     * Описание
     *
     * @var string|null
     */
    protected $description;
    /**
     * Оплаченная сумма, руб
     *
     * @var int|null
     */
    protected $paid;
    /**
     * Тип контрагента плательщика за услугу. 1 — юридическое лицо, 2 — ИП, 3 — физическое лицо
     *
     * @var int|null
     */
    protected $payerForm;
    /**
     * Описание
     *
     * @var string|null
     */
    protected $payerName;
    /**
     * Плательщик (1 - отправитель, 2 - получатель, 3 - третье лицо)
     *
     * @var int|null
     */
    protected $payerType;
    /**
     * Выбранный способ оплаты задолженности
     *
     * @var string|null
     */
    protected $paymentMethod;
    /**
     * Необходима оплата задолженности для получения груза
     *
     * @var bool|null
     */
    protected $payToReceive;
    /**
     * Стоимость, руб.
     *
     * @var float|null
     */
    protected $price;
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
     * Валюта
     *
     * @return string|null
     */
    public function getCurrencyName() : ?string
    {
        return $this->currencyName;
    }
    /**
     * Валюта
     *
     * @param string|null $currencyName
     *
     * @return self
     */
    public function setCurrencyName(?string $currencyName) : self
    {
        $this->currencyName = $currencyName;
        return $this;
    }
    /**
     * Описание
     *
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * Описание
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description) : self
    {
        $this->description = $description;
        return $this;
    }
    /**
     * Оплаченная сумма, руб
     *
     * @return int|null
     */
    public function getPaid() : ?int
    {
        return $this->paid;
    }
    /**
     * Оплаченная сумма, руб
     *
     * @param int|null $paid
     *
     * @return self
     */
    public function setPaid(?int $paid) : self
    {
        $this->paid = $paid;
        return $this;
    }
    /**
     * Тип контрагента плательщика за услугу. 1 — юридическое лицо, 2 — ИП, 3 — физическое лицо
     *
     * @return int|null
     */
    public function getPayerForm() : ?int
    {
        return $this->payerForm;
    }
    /**
     * Тип контрагента плательщика за услугу. 1 — юридическое лицо, 2 — ИП, 3 — физическое лицо
     *
     * @param int|null $payerForm
     *
     * @return self
     */
    public function setPayerForm(?int $payerForm) : self
    {
        $this->payerForm = $payerForm;
        return $this;
    }
    /**
     * Описание
     *
     * @return string|null
     */
    public function getPayerName() : ?string
    {
        return $this->payerName;
    }
    /**
     * Описание
     *
     * @param string|null $payerName
     *
     * @return self
     */
    public function setPayerName(?string $payerName) : self
    {
        $this->payerName = $payerName;
        return $this;
    }
    /**
     * Плательщик (1 - отправитель, 2 - получатель, 3 - третье лицо)
     *
     * @return int|null
     */
    public function getPayerType() : ?int
    {
        return $this->payerType;
    }
    /**
     * Плательщик (1 - отправитель, 2 - получатель, 3 - третье лицо)
     *
     * @param int|null $payerType
     *
     * @return self
     */
    public function setPayerType(?int $payerType) : self
    {
        $this->payerType = $payerType;
        return $this;
    }
    /**
     * Выбранный способ оплаты задолженности
     *
     * @return string|null
     */
    public function getPaymentMethod() : ?string
    {
        return $this->paymentMethod;
    }
    /**
     * Выбранный способ оплаты задолженности
     *
     * @param string|null $paymentMethod
     *
     * @return self
     */
    public function setPaymentMethod(?string $paymentMethod) : self
    {
        $this->paymentMethod = $paymentMethod;
        return $this;
    }
    /**
     * Необходима оплата задолженности для получения груза
     *
     * @return bool|null
     */
    public function getPayToReceive() : ?bool
    {
        return $this->payToReceive;
    }
    /**
     * Необходима оплата задолженности для получения груза
     *
     * @param bool|null $payToReceive
     *
     * @return self
     */
    public function setPayToReceive(?bool $payToReceive) : self
    {
        $this->payToReceive = $payToReceive;
        return $this;
    }
    /**
     * Стоимость, руб.
     *
     * @return float|null
     */
    public function getPrice() : ?float
    {
        return $this->price;
    }
    /**
     * Стоимость, руб.
     *
     * @param float|null $price
     *
     * @return self
     */
    public function setPrice(?float $price) : self
    {
        $this->price = $price;
        return $this;
    }
}