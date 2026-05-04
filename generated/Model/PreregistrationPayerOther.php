<?php

namespace glook\PecomSdk\Generated\Model;

class PreregistrationPayerOther
{
    /**
     * Код страны регистрации по классификатору строка. Необязательно, рекомендуется к заполнению. По умолчанию: 643 - Россия
     *
     * @var string|null
     */
    protected $countryOfRegistrationCode;
    /**
     * сокращенная форма собственности юр.лица/индивидуального предпринимателя (из списка ПЭК). Необзательно.
     *
     * @var string|null
     */
    protected $fs;
    /**
     * 
     *
     * @var PreregistrationPayerOtherIdentityCard|null
     */
    protected $identityCard;
    /**
     * ИНН третьего лица, обязательно для Юридических лиц и ИП (для физических лиц не передавать)
     *
     * @var string|null
     */
    protected $inn;
    /**
     * Тип контрагента. Необязательно, если не передан реквизит `countryOfRegistrationCode`. Рекомендуется к заполнению. Значения: 1 - Юридическое лицо, 2 - Индивидуальный предприниматель, 3 - Физическое лицо. Указание значения 3 недоступно при type = 7 «ДТС Автоперевозка»
     *
     * @var int|null
     */
    protected $legalForm;
    /**
     * Телефон, обязательно
     *
     * @var string|null
     */
    protected $phone;
    /**
     * Наименование, обязательно
     *
     * @var string|null
     */
    protected $title;
    /**
     * Код страны регистрации по классификатору строка. Необязательно, рекомендуется к заполнению. По умолчанию: 643 - Россия
     *
     * @return string|null
     */
    public function getCountryOfRegistrationCode() : ?string
    {
        return $this->countryOfRegistrationCode;
    }
    /**
     * Код страны регистрации по классификатору строка. Необязательно, рекомендуется к заполнению. По умолчанию: 643 - Россия
     *
     * @param string|null $countryOfRegistrationCode
     *
     * @return self
     */
    public function setCountryOfRegistrationCode(?string $countryOfRegistrationCode) : self
    {
        $this->countryOfRegistrationCode = $countryOfRegistrationCode;
        return $this;
    }
    /**
     * сокращенная форма собственности юр.лица/индивидуального предпринимателя (из списка ПЭК). Необзательно.
     *
     * @return string|null
     */
    public function getFs() : ?string
    {
        return $this->fs;
    }
    /**
     * сокращенная форма собственности юр.лица/индивидуального предпринимателя (из списка ПЭК). Необзательно.
     *
     * @param string|null $fs
     *
     * @return self
     */
    public function setFs(?string $fs) : self
    {
        $this->fs = $fs;
        return $this;
    }
    /**
     * 
     *
     * @return PreregistrationPayerOtherIdentityCard|null
     */
    public function getIdentityCard() : ?PreregistrationPayerOtherIdentityCard
    {
        return $this->identityCard;
    }
    /**
     * 
     *
     * @param PreregistrationPayerOtherIdentityCard|null $identityCard
     *
     * @return self
     */
    public function setIdentityCard(?PreregistrationPayerOtherIdentityCard $identityCard) : self
    {
        $this->identityCard = $identityCard;
        return $this;
    }
    /**
     * ИНН третьего лица, обязательно для Юридических лиц и ИП (для физических лиц не передавать)
     *
     * @return string|null
     */
    public function getInn() : ?string
    {
        return $this->inn;
    }
    /**
     * ИНН третьего лица, обязательно для Юридических лиц и ИП (для физических лиц не передавать)
     *
     * @param string|null $inn
     *
     * @return self
     */
    public function setInn(?string $inn) : self
    {
        $this->inn = $inn;
        return $this;
    }
    /**
     * Тип контрагента. Необязательно, если не передан реквизит `countryOfRegistrationCode`. Рекомендуется к заполнению. Значения: 1 - Юридическое лицо, 2 - Индивидуальный предприниматель, 3 - Физическое лицо. Указание значения 3 недоступно при type = 7 «ДТС Автоперевозка»
     *
     * @return int|null
     */
    public function getLegalForm() : ?int
    {
        return $this->legalForm;
    }
    /**
     * Тип контрагента. Необязательно, если не передан реквизит `countryOfRegistrationCode`. Рекомендуется к заполнению. Значения: 1 - Юридическое лицо, 2 - Индивидуальный предприниматель, 3 - Физическое лицо. Указание значения 3 недоступно при type = 7 «ДТС Автоперевозка»
     *
     * @param int|null $legalForm
     *
     * @return self
     */
    public function setLegalForm(?int $legalForm) : self
    {
        $this->legalForm = $legalForm;
        return $this;
    }
    /**
     * Телефон, обязательно
     *
     * @return string|null
     */
    public function getPhone() : ?string
    {
        return $this->phone;
    }
    /**
     * Телефон, обязательно
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
     * Наименование, обязательно
     *
     * @return string|null
     */
    public function getTitle() : ?string
    {
        return $this->title;
    }
    /**
     * Наименование, обязательно
     *
     * @param string|null $title
     *
     * @return self
     */
    public function setTitle(?string $title) : self
    {
        $this->title = $title;
        return $this;
    }
}