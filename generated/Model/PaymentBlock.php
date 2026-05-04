<?php

namespace glook\PecomSdk\Generated\Model;

class PaymentBlock
{
    /**
     * По умолчанию 643
     *
     * @var string|null
     */
    protected $countryOfRegistrationCode;
    /**
     * 
     *
     * @var string|null
     */
    protected $fs;
    /**
     * 
     *
     * @var CargopickupIdentityCard
     */
    protected $identityCard;
    /**
     * ИНН третьего лица. Для юрлица/ИП при type = 3
     *
     * @var string|null
     */
    protected $inn;
    /**
     * Тип контрагента. 1 — Юридическое лицо, 2 — Индивидуальный предприниматель, 3 — Физическое лицо
     *
     * @var int|null
     */
    protected $legalForm;
    /**
     * Наименование филиала оплаты за услугу. Обязателен при указании плательщиком третьего лица (`type=3`)
     *
     * @var string|null
     */
    protected $paymentCity;
    /**
     * Телефон третьего лица. Обязательно при type = 3
     *
     * @var string|null
     */
    protected $phone;
    /**
     * Наименование третьего лица. Обязательно при type = 3
     *
     * @var string|null
     */
    protected $title;
    /**
     * Плательщик. 1 — отправитель, 2 — получатель, 3 — третье лицо
     *
     * @var int
     */
    protected $type;
    /**
     * По умолчанию 643
     *
     * @return string|null
     */
    public function getCountryOfRegistrationCode() : ?string
    {
        return $this->countryOfRegistrationCode;
    }
    /**
     * По умолчанию 643
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
     * 
     *
     * @return string|null
     */
    public function getFs() : ?string
    {
        return $this->fs;
    }
    /**
     * 
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
     * @return CargopickupIdentityCard
     */
    public function getIdentityCard() : CargopickupIdentityCard
    {
        return $this->identityCard;
    }
    /**
     * 
     *
     * @param CargopickupIdentityCard $identityCard
     *
     * @return self
     */
    public function setIdentityCard(CargopickupIdentityCard $identityCard) : self
    {
        $this->identityCard = $identityCard;
        return $this;
    }
    /**
     * ИНН третьего лица. Для юрлица/ИП при type = 3
     *
     * @return string|null
     */
    public function getInn() : ?string
    {
        return $this->inn;
    }
    /**
     * ИНН третьего лица. Для юрлица/ИП при type = 3
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
     * Тип контрагента. 1 — Юридическое лицо, 2 — Индивидуальный предприниматель, 3 — Физическое лицо
     *
     * @return int|null
     */
    public function getLegalForm() : ?int
    {
        return $this->legalForm;
    }
    /**
     * Тип контрагента. 1 — Юридическое лицо, 2 — Индивидуальный предприниматель, 3 — Физическое лицо
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
     * Наименование филиала оплаты за услугу. Обязателен при указании плательщиком третьего лица (`type=3`)
     *
     * @return string|null
     */
    public function getPaymentCity() : ?string
    {
        return $this->paymentCity;
    }
    /**
     * Наименование филиала оплаты за услугу. Обязателен при указании плательщиком третьего лица (`type=3`)
     *
     * @param string|null $paymentCity
     *
     * @return self
     */
    public function setPaymentCity(?string $paymentCity) : self
    {
        $this->paymentCity = $paymentCity;
        return $this;
    }
    /**
     * Телефон третьего лица. Обязательно при type = 3
     *
     * @return string|null
     */
    public function getPhone() : ?string
    {
        return $this->phone;
    }
    /**
     * Телефон третьего лица. Обязательно при type = 3
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
     * Наименование третьего лица. Обязательно при type = 3
     *
     * @return string|null
     */
    public function getTitle() : ?string
    {
        return $this->title;
    }
    /**
     * Наименование третьего лица. Обязательно при type = 3
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
    /**
     * Плательщик. 1 — отправитель, 2 — получатель, 3 — третье лицо
     *
     * @return int
     */
    public function getType() : int
    {
        return $this->type;
    }
    /**
     * Плательщик. 1 — отправитель, 2 — получатель, 3 — третье лицо
     *
     * @param int $type
     *
     * @return self
     */
    public function setType(int $type) : self
    {
        $this->type = $type;
        return $this;
    }
}