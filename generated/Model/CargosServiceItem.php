<?php

namespace glook\PecomSdk\Generated\Model;

class CargosServiceItem
{
    /**
     * Филиал
     *
     * @var null|string
     */
    protected $branch;

    /**
     * Валюта
     *
     * @var null|string
     */
    protected $currencyName;

    /**
     * Описание
     *
     * @var null|string
     */
    protected $description;

    /**
     * Оплаченная сумма, руб
     *
     * @var null|int
     */
    protected $paid;

    /**
     * Тип контрагента плательщика за услугу. 1 — юридическое лицо, 2 — ИП, 3 — физическое лицо
     *
     * @var null|int
     */
    protected $payerForm;

    /**
     * Описание
     *
     * @var null|string
     */
    protected $payerName;

    /**
     * Плательщик (1 - отправитель, 2 - получатель, 3 - третье лицо)
     *
     * @var null|int
     */
    protected $payerType;

    /**
     * Выбранный способ оплаты задолженности
     *
     * @var null|string
     */
    protected $paymentMethod;

    /**
     * Необходима оплата задолженности для получения груза
     *
     * @var null|bool
     */
    protected $payToReceive;

    /**
     * Стоимость, руб.
     *
     * @var null|float
     */
    protected $price;

    /**
     * Филиал
     */
    public function getBranch(): ?string
    {
        return $this->branch;
    }

    /**
     * Филиал
     */
    public function setBranch(?string $branch): self
    {
        $this->branch = $branch;

        return $this;
    }

    /**
     * Валюта
     */
    public function getCurrencyName(): ?string
    {
        return $this->currencyName;
    }

    /**
     * Валюта
     */
    public function setCurrencyName(?string $currencyName): self
    {
        $this->currencyName = $currencyName;

        return $this;
    }

    /**
     * Описание
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Описание
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Оплаченная сумма, руб
     */
    public function getPaid(): ?int
    {
        return $this->paid;
    }

    /**
     * Оплаченная сумма, руб
     */
    public function setPaid(?int $paid): self
    {
        $this->paid = $paid;

        return $this;
    }

    /**
     * Тип контрагента плательщика за услугу. 1 — юридическое лицо, 2 — ИП, 3 — физическое лицо
     */
    public function getPayerForm(): ?int
    {
        return $this->payerForm;
    }

    /**
     * Тип контрагента плательщика за услугу. 1 — юридическое лицо, 2 — ИП, 3 — физическое лицо
     */
    public function setPayerForm(?int $payerForm): self
    {
        $this->payerForm = $payerForm;

        return $this;
    }

    /**
     * Описание
     */
    public function getPayerName(): ?string
    {
        return $this->payerName;
    }

    /**
     * Описание
     */
    public function setPayerName(?string $payerName): self
    {
        $this->payerName = $payerName;

        return $this;
    }

    /**
     * Плательщик (1 - отправитель, 2 - получатель, 3 - третье лицо)
     */
    public function getPayerType(): ?int
    {
        return $this->payerType;
    }

    /**
     * Плательщик (1 - отправитель, 2 - получатель, 3 - третье лицо)
     */
    public function setPayerType(?int $payerType): self
    {
        $this->payerType = $payerType;

        return $this;
    }

    /**
     * Выбранный способ оплаты задолженности
     */
    public function getPaymentMethod(): ?string
    {
        return $this->paymentMethod;
    }

    /**
     * Выбранный способ оплаты задолженности
     */
    public function setPaymentMethod(?string $paymentMethod): self
    {
        $this->paymentMethod = $paymentMethod;

        return $this;
    }

    /**
     * Необходима оплата задолженности для получения груза
     */
    public function getPayToReceive(): ?bool
    {
        return $this->payToReceive;
    }

    /**
     * Необходима оплата задолженности для получения груза
     */
    public function setPayToReceive(?bool $payToReceive): self
    {
        $this->payToReceive = $payToReceive;

        return $this;
    }

    /**
     * Стоимость, руб.
     */
    public function getPrice(): ?float
    {
        return $this->price;
    }

    /**
     * Стоимость, руб.
     */
    public function setPrice(?float $price): self
    {
        $this->price = $price;

        return $this;
    }
}
