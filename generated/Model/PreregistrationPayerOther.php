<?php

namespace glook\PecomSdk\Generated\Model;

class PreregistrationPayerOther
{
    /**
     * Код страны регистрации по классификатору строка. Необязательно, рекомендуется к заполнению. По умолчанию: 643 - Россия.
     *
     * @var null|string
     */
    protected $countryOfRegistrationCode;

    /**
     * сокращенная форма собственности юр.лица/индивидуального предпринимателя (из списка ПЭК). Необзательно.
     *
     * @var null|string
     */
    protected $fs;

    /**
     * @var null|PreregistrationPayerOtherIdentityCard
     */
    protected $identityCard;

    /**
     * ИНН третьего лица, обязательно для Юридических лиц и ИП (для физических лиц не передавать).
     *
     * @var null|string
     */
    protected $inn;

    /**
     * Тип контрагента. Необязательно, если не передан реквизит `countryOfRegistrationCode`. Рекомендуется к заполнению. Значения: 1 - Юридическое лицо, 2 - Индивидуальный предприниматель, 3 - Физическое лицо. Указание значения 3 недоступно при type = 7 «ДТС Автоперевозка».
     *
     * @var null|int
     */
    protected $legalForm;

    /**
     * Телефон, обязательно.
     *
     * @var null|string
     */
    protected $phone;

    /**
     * Наименование, обязательно.
     *
     * @var null|string
     */
    protected $title;

    /**
     * Код страны регистрации по классификатору строка. Необязательно, рекомендуется к заполнению. По умолчанию: 643 - Россия.
     */
    public function getCountryOfRegistrationCode(): ?string
    {
        return $this->countryOfRegistrationCode;
    }

    /**
     * Код страны регистрации по классификатору строка. Необязательно, рекомендуется к заполнению. По умолчанию: 643 - Россия.
     */
    public function setCountryOfRegistrationCode(?string $countryOfRegistrationCode): self
    {
        $this->countryOfRegistrationCode = $countryOfRegistrationCode;

        return $this;
    }

    /**
     * сокращенная форма собственности юр.лица/индивидуального предпринимателя (из списка ПЭК). Необзательно.
     */
    public function getFs(): ?string
    {
        return $this->fs;
    }

    /**
     * сокращенная форма собственности юр.лица/индивидуального предпринимателя (из списка ПЭК). Необзательно.
     */
    public function setFs(?string $fs): self
    {
        $this->fs = $fs;

        return $this;
    }

    public function getIdentityCard(): ?PreregistrationPayerOtherIdentityCard
    {
        return $this->identityCard;
    }

    public function setIdentityCard(?PreregistrationPayerOtherIdentityCard $identityCard): self
    {
        $this->identityCard = $identityCard;

        return $this;
    }

    /**
     * ИНН третьего лица, обязательно для Юридических лиц и ИП (для физических лиц не передавать).
     */
    public function getInn(): ?string
    {
        return $this->inn;
    }

    /**
     * ИНН третьего лица, обязательно для Юридических лиц и ИП (для физических лиц не передавать).
     */
    public function setInn(?string $inn): self
    {
        $this->inn = $inn;

        return $this;
    }

    /**
     * Тип контрагента. Необязательно, если не передан реквизит `countryOfRegistrationCode`. Рекомендуется к заполнению. Значения: 1 - Юридическое лицо, 2 - Индивидуальный предприниматель, 3 - Физическое лицо. Указание значения 3 недоступно при type = 7 «ДТС Автоперевозка».
     */
    public function getLegalForm(): ?int
    {
        return $this->legalForm;
    }

    /**
     * Тип контрагента. Необязательно, если не передан реквизит `countryOfRegistrationCode`. Рекомендуется к заполнению. Значения: 1 - Юридическое лицо, 2 - Индивидуальный предприниматель, 3 - Физическое лицо. Указание значения 3 недоступно при type = 7 «ДТС Автоперевозка».
     */
    public function setLegalForm(?int $legalForm): self
    {
        $this->legalForm = $legalForm;

        return $this;
    }

    /**
     * Телефон, обязательно.
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * Телефон, обязательно.
     */
    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Наименование, обязательно.
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * Наименование, обязательно.
     */
    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }
}
