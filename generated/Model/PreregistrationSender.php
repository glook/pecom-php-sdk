<?php

namespace glook\PecomSdk\Generated\Model;

class PreregistrationSender
{
    /**
     * Адрес, по которому необходимо забрать груз. Обязателен для orderType 3, 4 и 14. Для успешного определения координат адреса забора, передавайте все составляющие адреса в такой последовательности: страна, регион, район, населенный пункт, улица, дом, квартира и разделяйте их запятыми. Запрещено в данной строке указывать данные, не являющиеся частью адреса.
     *
     * @var string|null
     */
    protected $addressStock;
    /**
     * Код страны регистрации по классификатору. Необязательно, рекомендуется к заполнению. По умолчанию: 643 - Россия. Для type = 7 «ДТС Автоперевозка» возможные значения: 643 - Россия и 112 - Беларусь
     *
     * @var string|null
     */
    protected $countryOfRegistrationCode;
    /**
     * E-mail
     *
     * @var string|null
     */
    protected $email;
    /**
     * Сокращенная форма собственности юр.лица/индивидуального предпринимателя (из списка ПЭК). Необязательно.
     *
     * @var string|null
     */
    protected $fs;
    /**
     * 
     *
     * @var PreregistrationIdentityCard|null
     */
    protected $identityCard;
    /**
     * 
     *
     * @var Individual|null
     */
    protected $individual;
    /**
     * ИНН, поле обязательно для Юридических лиц.
     *
     * @var string|null
     */
    protected $inn;
    /**
     * КПП, поле необязательно. Если передан ИНН, но не передан КПП, то для юр.лиц будет использован КПП головной организации.
     *
     * @var string|null
     */
    protected $kpp;
    /**
     * Тип контрагента. Обязательно. Значения: 1 - Юридическое лицо, 2 - Индивидуальный предприниматель, 3 - Физическое лицо.
     *
     * @var int
     */
    protected $legalForm;
    /**
     * Контактное лицо. Обязательно
     *
     * @var string
     */
    protected $person;
    /**
     * Список телефонов контактного лица для связи по вопросам забора груза. Обязательно. Список должен содержать не менее 1, но не более 3-х номеров телефонов.
     *
     * @var PersonPhone[]
     */
    protected $personPhones;
    /**
     * Наименование юр.лица/ИП или ФИО физ.лица. Обязательно
     *
     * @var string
     */
    protected $title;
    /**
     * Идентификатор склада, куда будет привезен груз. Обязателен для orderType 0. Игнорируется для orderType 3, 4 и 14 — см. комментарии
     *
     * @var string|null
     */
    protected $warehouseId;
    /**
     * Адрес, по которому необходимо забрать груз. Обязателен для orderType 3, 4 и 14. Для успешного определения координат адреса забора, передавайте все составляющие адреса в такой последовательности: страна, регион, район, населенный пункт, улица, дом, квартира и разделяйте их запятыми. Запрещено в данной строке указывать данные, не являющиеся частью адреса.
     *
     * @return string|null
     */
    public function getAddressStock() : ?string
    {
        return $this->addressStock;
    }
    /**
     * Адрес, по которому необходимо забрать груз. Обязателен для orderType 3, 4 и 14. Для успешного определения координат адреса забора, передавайте все составляющие адреса в такой последовательности: страна, регион, район, населенный пункт, улица, дом, квартира и разделяйте их запятыми. Запрещено в данной строке указывать данные, не являющиеся частью адреса.
     *
     * @param string|null $addressStock
     *
     * @return self
     */
    public function setAddressStock(?string $addressStock) : self
    {
        $this->addressStock = $addressStock;
        return $this;
    }
    /**
     * Код страны регистрации по классификатору. Необязательно, рекомендуется к заполнению. По умолчанию: 643 - Россия. Для type = 7 «ДТС Автоперевозка» возможные значения: 643 - Россия и 112 - Беларусь
     *
     * @return string|null
     */
    public function getCountryOfRegistrationCode() : ?string
    {
        return $this->countryOfRegistrationCode;
    }
    /**
     * Код страны регистрации по классификатору. Необязательно, рекомендуется к заполнению. По умолчанию: 643 - Россия. Для type = 7 «ДТС Автоперевозка» возможные значения: 643 - Россия и 112 - Беларусь
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
     * E-mail
     *
     * @return string|null
     */
    public function getEmail() : ?string
    {
        return $this->email;
    }
    /**
     * E-mail
     *
     * @param string|null $email
     *
     * @return self
     */
    public function setEmail(?string $email) : self
    {
        $this->email = $email;
        return $this;
    }
    /**
     * Сокращенная форма собственности юр.лица/индивидуального предпринимателя (из списка ПЭК). Необязательно.
     *
     * @return string|null
     */
    public function getFs() : ?string
    {
        return $this->fs;
    }
    /**
     * Сокращенная форма собственности юр.лица/индивидуального предпринимателя (из списка ПЭК). Необязательно.
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
     * @return PreregistrationIdentityCard|null
     */
    public function getIdentityCard() : ?PreregistrationIdentityCard
    {
        return $this->identityCard;
    }
    /**
     * 
     *
     * @param PreregistrationIdentityCard|null $identityCard
     *
     * @return self
     */
    public function setIdentityCard(?PreregistrationIdentityCard $identityCard) : self
    {
        $this->identityCard = $identityCard;
        return $this;
    }
    /**
     * 
     *
     * @return Individual|null
     */
    public function getIndividual() : ?Individual
    {
        return $this->individual;
    }
    /**
     * 
     *
     * @param Individual|null $individual
     *
     * @return self
     */
    public function setIndividual(?Individual $individual) : self
    {
        $this->individual = $individual;
        return $this;
    }
    /**
     * ИНН, поле обязательно для Юридических лиц.
     *
     * @return string|null
     */
    public function getInn() : ?string
    {
        return $this->inn;
    }
    /**
     * ИНН, поле обязательно для Юридических лиц.
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
     * КПП, поле необязательно. Если передан ИНН, но не передан КПП, то для юр.лиц будет использован КПП головной организации.
     *
     * @return string|null
     */
    public function getKpp() : ?string
    {
        return $this->kpp;
    }
    /**
     * КПП, поле необязательно. Если передан ИНН, но не передан КПП, то для юр.лиц будет использован КПП головной организации.
     *
     * @param string|null $kpp
     *
     * @return self
     */
    public function setKpp(?string $kpp) : self
    {
        $this->kpp = $kpp;
        return $this;
    }
    /**
     * Тип контрагента. Обязательно. Значения: 1 - Юридическое лицо, 2 - Индивидуальный предприниматель, 3 - Физическое лицо.
     *
     * @return int
     */
    public function getLegalForm() : int
    {
        return $this->legalForm;
    }
    /**
     * Тип контрагента. Обязательно. Значения: 1 - Юридическое лицо, 2 - Индивидуальный предприниматель, 3 - Физическое лицо.
     *
     * @param int $legalForm
     *
     * @return self
     */
    public function setLegalForm(int $legalForm) : self
    {
        $this->legalForm = $legalForm;
        return $this;
    }
    /**
     * Контактное лицо. Обязательно
     *
     * @return string
     */
    public function getPerson() : string
    {
        return $this->person;
    }
    /**
     * Контактное лицо. Обязательно
     *
     * @param string $person
     *
     * @return self
     */
    public function setPerson(string $person) : self
    {
        $this->person = $person;
        return $this;
    }
    /**
     * Список телефонов контактного лица для связи по вопросам забора груза. Обязательно. Список должен содержать не менее 1, но не более 3-х номеров телефонов.
     *
     * @return PersonPhone[]
     */
    public function getPersonPhones() : array
    {
        return $this->personPhones;
    }
    /**
     * Список телефонов контактного лица для связи по вопросам забора груза. Обязательно. Список должен содержать не менее 1, но не более 3-х номеров телефонов.
     *
     * @param PersonPhone[] $personPhones
     *
     * @return self
     */
    public function setPersonPhones(array $personPhones) : self
    {
        $this->personPhones = $personPhones;
        return $this;
    }
    /**
     * Наименование юр.лица/ИП или ФИО физ.лица. Обязательно
     *
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title;
    }
    /**
     * Наименование юр.лица/ИП или ФИО физ.лица. Обязательно
     *
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title) : self
    {
        $this->title = $title;
        return $this;
    }
    /**
     * Идентификатор склада, куда будет привезен груз. Обязателен для orderType 0. Игнорируется для orderType 3, 4 и 14 — см. комментарии
     *
     * @return string|null
     */
    public function getWarehouseId() : ?string
    {
        return $this->warehouseId;
    }
    /**
     * Идентификатор склада, куда будет привезен груз. Обязателен для orderType 0. Игнорируется для orderType 3, 4 и 14 — см. комментарии
     *
     * @param string|null $warehouseId
     *
     * @return self
     */
    public function setWarehouseId(?string $warehouseId) : self
    {
        $this->warehouseId = $warehouseId;
        return $this;
    }
}