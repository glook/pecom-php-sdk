<?php

namespace glook\PecomSdk\Generated\Model;

class PreregistrationEdiCounterpartOther
{
    /**
     * Код страны регистрации по классификатору. Необязательно, рекомендуется к заполнению. По умолчанию 643 — Россия.
     *
     * @var null|string
     */
    protected $countryOfRegistrationCode = '643';

    /**
     * Сокращённая форма собственности юридического лица или ИП из списка ПЭК.
     *
     * @var null|string
     */
    protected $fs;

    /**
     * Данные подписанта-ИП. Обязательны при `legalForm = 2`; при `legalForm = 1` не передаются.
     *
     * @var null|Individual
     */
    protected $individual;

    /**
     * ИНН третьего лица. Обязателен для юридических лиц и ИП.
     *
     * @var string
     */
    protected $inn;

    /**
     * КПП третьего лица.
     *
     * @var null|string
     */
    protected $kpp;

    /**
     * Тип контрагента: 1 — юридическое лицо, 2 — индивидуальный предприниматель.
     *
     * @var int
     */
    protected $legalForm;

    /**
     * Наименование третьего лица. Обязательно для юридического лица.
     *
     * @var null|string
     */
    protected $title;

    /**
     * Код страны регистрации по классификатору. Необязательно, рекомендуется к заполнению. По умолчанию 643 — Россия.
     */
    public function getCountryOfRegistrationCode(): ?string
    {
        return $this->countryOfRegistrationCode;
    }

    /**
     * Код страны регистрации по классификатору. Необязательно, рекомендуется к заполнению. По умолчанию 643 — Россия.
     */
    public function setCountryOfRegistrationCode(?string $countryOfRegistrationCode): self
    {
        $this->countryOfRegistrationCode = $countryOfRegistrationCode;

        return $this;
    }

    /**
     * Сокращённая форма собственности юридического лица или ИП из списка ПЭК.
     */
    public function getFs(): ?string
    {
        return $this->fs;
    }

    /**
     * Сокращённая форма собственности юридического лица или ИП из списка ПЭК.
     */
    public function setFs(?string $fs): self
    {
        $this->fs = $fs;

        return $this;
    }

    /**
     * Данные подписанта-ИП. Обязательны при `legalForm = 2`; при `legalForm = 1` не передаются.
     */
    public function getIndividual(): ?Individual
    {
        return $this->individual;
    }

    /**
     * Данные подписанта-ИП. Обязательны при `legalForm = 2`; при `legalForm = 1` не передаются.
     */
    public function setIndividual(?Individual $individual): self
    {
        $this->individual = $individual;

        return $this;
    }

    /**
     * ИНН третьего лица. Обязателен для юридических лиц и ИП.
     */
    public function getInn(): string
    {
        return $this->inn;
    }

    /**
     * ИНН третьего лица. Обязателен для юридических лиц и ИП.
     */
    public function setInn(string $inn): self
    {
        $this->inn = $inn;

        return $this;
    }

    /**
     * КПП третьего лица.
     */
    public function getKpp(): ?string
    {
        return $this->kpp;
    }

    /**
     * КПП третьего лица.
     */
    public function setKpp(?string $kpp): self
    {
        $this->kpp = $kpp;

        return $this;
    }

    /**
     * Тип контрагента: 1 — юридическое лицо, 2 — индивидуальный предприниматель.
     */
    public function getLegalForm(): int
    {
        return $this->legalForm;
    }

    /**
     * Тип контрагента: 1 — юридическое лицо, 2 — индивидуальный предприниматель.
     */
    public function setLegalForm(int $legalForm): self
    {
        $this->legalForm = $legalForm;

        return $this;
    }

    /**
     * Наименование третьего лица. Обязательно для юридического лица.
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * Наименование третьего лица. Обязательно для юридического лица.
     */
    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }
}
