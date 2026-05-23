<?php

namespace glook\PecomSdk\Generated\Model;

class PaymentBlock
{
    /**
     * По умолчанию 643.
     *
     * @var null|string
     */
    protected $countryOfRegistrationCode;

    /**
     * @var null|string
     */
    protected $fs;

    /**
     * @var null|CargopickupIdentityCard
     */
    protected $identityCard;

    /**
     * ИНН третьего лица. Для юрлица/ИП при type = 3.
     *
     * @var null|string
     */
    protected $inn;

    /**
     * Тип контрагента. 1 — Юридическое лицо, 2 — Индивидуальный предприниматель, 3 — Физическое лицо.
     *
     * @var null|int
     */
    protected $legalForm;

    /**
     * Наименование филиала оплаты за услугу. Обязателен при указании плательщиком третьего лица (`type=3`).
     *
     * @var null|string
     */
    protected $paymentCity;

    /**
     * Телефон третьего лица. Обязательно при type = 3.
     *
     * @var null|string
     */
    protected $phone;

    /**
     * Наименование третьего лица. Обязательно при type = 3.
     *
     * @var null|string
     */
    protected $title;

    /**
     * Плательщик. 1 — отправитель, 2 — получатель, 3 — третье лицо.
     *
     * @var int
     */
    protected $type;

    /**
     * По умолчанию 643.
     */
    public function getCountryOfRegistrationCode(): ?string
    {
        return $this->countryOfRegistrationCode;
    }

    /**
     * По умолчанию 643.
     */
    public function setCountryOfRegistrationCode(?string $countryOfRegistrationCode): self
    {
        $this->countryOfRegistrationCode = $countryOfRegistrationCode;

        return $this;
    }

    public function getFs(): ?string
    {
        return $this->fs;
    }

    public function setFs(?string $fs): self
    {
        $this->fs = $fs;

        return $this;
    }

    public function getIdentityCard(): ?CargopickupIdentityCard
    {
        return $this->identityCard;
    }

    public function setIdentityCard(?CargopickupIdentityCard $identityCard): self
    {
        $this->identityCard = $identityCard;

        return $this;
    }

    /**
     * ИНН третьего лица. Для юрлица/ИП при type = 3.
     */
    public function getInn(): ?string
    {
        return $this->inn;
    }

    /**
     * ИНН третьего лица. Для юрлица/ИП при type = 3.
     */
    public function setInn(?string $inn): self
    {
        $this->inn = $inn;

        return $this;
    }

    /**
     * Тип контрагента. 1 — Юридическое лицо, 2 — Индивидуальный предприниматель, 3 — Физическое лицо.
     */
    public function getLegalForm(): ?int
    {
        return $this->legalForm;
    }

    /**
     * Тип контрагента. 1 — Юридическое лицо, 2 — Индивидуальный предприниматель, 3 — Физическое лицо.
     */
    public function setLegalForm(?int $legalForm): self
    {
        $this->legalForm = $legalForm;

        return $this;
    }

    /**
     * Наименование филиала оплаты за услугу. Обязателен при указании плательщиком третьего лица (`type=3`).
     */
    public function getPaymentCity(): ?string
    {
        return $this->paymentCity;
    }

    /**
     * Наименование филиала оплаты за услугу. Обязателен при указании плательщиком третьего лица (`type=3`).
     */
    public function setPaymentCity(?string $paymentCity): self
    {
        $this->paymentCity = $paymentCity;

        return $this;
    }

    /**
     * Телефон третьего лица. Обязательно при type = 3.
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * Телефон третьего лица. Обязательно при type = 3.
     */
    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Наименование третьего лица. Обязательно при type = 3.
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * Наименование третьего лица. Обязательно при type = 3.
     */
    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Плательщик. 1 — отправитель, 2 — получатель, 3 — третье лицо.
     */
    public function getType(): int
    {
        return $this->type;
    }

    /**
     * Плательщик. 1 — отправитель, 2 — получатель, 3 — третье лицо.
     */
    public function setType(int $type): self
    {
        $this->type = $type;

        return $this;
    }
}
