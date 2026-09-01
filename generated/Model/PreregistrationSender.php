<?php

namespace glook\PecomSdk\Generated\Model;

class PreregistrationSender
{
    /**
     * Адрес, по которому необходимо забрать груз. Обязателен для orderType 3, 4 и 14. Для успешного определения координат адреса забора, передавайте все составляющие адреса в такой последовательности: страна, регион, район, населенный пункт, улица, дом, квартира и разделяйте их запятыми. Запрещено в данной строке указывать данные, не являющиеся частью адреса.
     *
     * @var null|string
     */
    protected $addressStock;

    /**
     * Код страны регистрации по классификатору. Необязательно, рекомендуется к заполнению. По умолчанию: 643 - Россия. Для type = 7 «ДТС Автоперевозка» возможные значения: 643 - Россия и 112 - Беларусь
     *
     * @var null|string
     */
    protected $countryOfRegistrationCode;

    /**
     * E-mail
     *
     * @var null|string
     */
    protected $email;

    /**
     * Сокращенная форма собственности юр.лица/индивидуального предпринимателя (из списка ПЭК). Необязательно.
     *
     * @var null|string
     */
    protected $fs;

    /**
     * @var null|PreregistrationIdentityCard
     */
    protected $identityCard;

    /**
     * Обязательно для отправителя — физического лица. При `docflowType = FFS_EDI` также обязательно для отправителя-ИП. Для юридических лиц не передаётся.
     *
     * @var null|Individual
     */
    protected $individual;

    /**
     * ИНН, поле обязательно для Юридических лиц.
     *
     * @var null|string
     */
    protected $inn;

    /**
     * КПП, поле необязательно. Если передан ИНН, но не передан КПП, то для юр.лиц будет использован КПП головной организации.
     *
     * @var null|string
     */
    protected $kpp;

    /**
     * Тип контрагента. Обязательно. Значения: 1 - Юридическое лицо, 2 - Индивидуальный предприниматель, 3 - Физическое лицо.
     *
     * @var int
     */
    protected $legalForm;

    /**
     * Контактное лицо. Обязательно, в том числе при `docflowType = FFS_EDI`.
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
     * @var null|string
     */
    protected $warehouseId;

    /**
     * Адрес, по которому необходимо забрать груз. Обязателен для orderType 3, 4 и 14. Для успешного определения координат адреса забора, передавайте все составляющие адреса в такой последовательности: страна, регион, район, населенный пункт, улица, дом, квартира и разделяйте их запятыми. Запрещено в данной строке указывать данные, не являющиеся частью адреса.
     */
    public function getAddressStock(): ?string
    {
        return $this->addressStock;
    }

    /**
     * Адрес, по которому необходимо забрать груз. Обязателен для orderType 3, 4 и 14. Для успешного определения координат адреса забора, передавайте все составляющие адреса в такой последовательности: страна, регион, район, населенный пункт, улица, дом, квартира и разделяйте их запятыми. Запрещено в данной строке указывать данные, не являющиеся частью адреса.
     */
    public function setAddressStock(?string $addressStock): self
    {
        $this->addressStock = $addressStock;

        return $this;
    }

    /**
     * Код страны регистрации по классификатору. Необязательно, рекомендуется к заполнению. По умолчанию: 643 - Россия. Для type = 7 «ДТС Автоперевозка» возможные значения: 643 - Россия и 112 - Беларусь
     */
    public function getCountryOfRegistrationCode(): ?string
    {
        return $this->countryOfRegistrationCode;
    }

    /**
     * Код страны регистрации по классификатору. Необязательно, рекомендуется к заполнению. По умолчанию: 643 - Россия. Для type = 7 «ДТС Автоперевозка» возможные значения: 643 - Россия и 112 - Беларусь
     */
    public function setCountryOfRegistrationCode(?string $countryOfRegistrationCode): self
    {
        $this->countryOfRegistrationCode = $countryOfRegistrationCode;

        return $this;
    }

    /**
     * E-mail
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * E-mail
     */
    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Сокращенная форма собственности юр.лица/индивидуального предпринимателя (из списка ПЭК). Необязательно.
     */
    public function getFs(): ?string
    {
        return $this->fs;
    }

    /**
     * Сокращенная форма собственности юр.лица/индивидуального предпринимателя (из списка ПЭК). Необязательно.
     */
    public function setFs(?string $fs): self
    {
        $this->fs = $fs;

        return $this;
    }

    public function getIdentityCard(): ?PreregistrationIdentityCard
    {
        return $this->identityCard;
    }

    public function setIdentityCard(?PreregistrationIdentityCard $identityCard): self
    {
        $this->identityCard = $identityCard;

        return $this;
    }

    /**
     * Обязательно для отправителя — физического лица. При `docflowType = FFS_EDI` также обязательно для отправителя-ИП. Для юридических лиц не передаётся.
     */
    public function getIndividual(): ?Individual
    {
        return $this->individual;
    }

    /**
     * Обязательно для отправителя — физического лица. При `docflowType = FFS_EDI` также обязательно для отправителя-ИП. Для юридических лиц не передаётся.
     */
    public function setIndividual(?Individual $individual): self
    {
        $this->individual = $individual;

        return $this;
    }

    /**
     * ИНН, поле обязательно для Юридических лиц.
     */
    public function getInn(): ?string
    {
        return $this->inn;
    }

    /**
     * ИНН, поле обязательно для Юридических лиц.
     */
    public function setInn(?string $inn): self
    {
        $this->inn = $inn;

        return $this;
    }

    /**
     * КПП, поле необязательно. Если передан ИНН, но не передан КПП, то для юр.лиц будет использован КПП головной организации.
     */
    public function getKpp(): ?string
    {
        return $this->kpp;
    }

    /**
     * КПП, поле необязательно. Если передан ИНН, но не передан КПП, то для юр.лиц будет использован КПП головной организации.
     */
    public function setKpp(?string $kpp): self
    {
        $this->kpp = $kpp;

        return $this;
    }

    /**
     * Тип контрагента. Обязательно. Значения: 1 - Юридическое лицо, 2 - Индивидуальный предприниматель, 3 - Физическое лицо.
     */
    public function getLegalForm(): int
    {
        return $this->legalForm;
    }

    /**
     * Тип контрагента. Обязательно. Значения: 1 - Юридическое лицо, 2 - Индивидуальный предприниматель, 3 - Физическое лицо.
     */
    public function setLegalForm(int $legalForm): self
    {
        $this->legalForm = $legalForm;

        return $this;
    }

    /**
     * Контактное лицо. Обязательно, в том числе при `docflowType = FFS_EDI`.
     */
    public function getPerson(): string
    {
        return $this->person;
    }

    /**
     * Контактное лицо. Обязательно, в том числе при `docflowType = FFS_EDI`.
     */
    public function setPerson(string $person): self
    {
        $this->person = $person;

        return $this;
    }

    /**
     * Список телефонов контактного лица для связи по вопросам забора груза. Обязательно. Список должен содержать не менее 1, но не более 3-х номеров телефонов.
     *
     * @return PersonPhone[]
     */
    public function getPersonPhones(): array
    {
        return $this->personPhones;
    }

    /**
     * Список телефонов контактного лица для связи по вопросам забора груза. Обязательно. Список должен содержать не менее 1, но не более 3-х номеров телефонов.
     *
     * @param PersonPhone[] $personPhones
     */
    public function setPersonPhones(array $personPhones): self
    {
        $this->personPhones = $personPhones;

        return $this;
    }

    /**
     * Наименование юр.лица/ИП или ФИО физ.лица. Обязательно
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Наименование юр.лица/ИП или ФИО физ.лица. Обязательно
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Идентификатор склада, куда будет привезен груз. Обязателен для orderType 0. Игнорируется для orderType 3, 4 и 14 — см. комментарии
     */
    public function getWarehouseId(): ?string
    {
        return $this->warehouseId;
    }

    /**
     * Идентификатор склада, куда будет привезен груз. Обязателен для orderType 0. Игнорируется для orderType 3, 4 и 14 — см. комментарии
     */
    public function setWarehouseId(?string $warehouseId): self
    {
        $this->warehouseId = $warehouseId;

        return $this;
    }
}
