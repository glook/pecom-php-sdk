<?php

namespace glook\PecomSdk\Generated\Model;

class PreregistrationReceiver
{
    /**
     * Адрес доставки груза. Обязательно при заказе услуги Доставка до адреса получателя. Для успешного определения координат адреса доставки, передавайте все составляющие адреса в такой последовательности: страна, регион, район, населенный пункт, улица, дом, квартира и разделяйте их запятыми. Запрещено в данной строке указывать данные, не являющиеся частью адреса. При отправке до отделения или ПВЗ и заполненном `warehouseId` данное поле необязательно для заполнения. При передаче кода GLN данный параметр имеет меньший приоритет.
     *
     * @var string|null
     */
    protected $addressStock;
    /**
     * Комментарий к доставке. Если заказывается доставка, то в поле указывается комментарий к доставке.
     *
     * @var string|null
     */
    protected $comment;
    /**
     * 
     *
     * @var PreregistrationCoordinates
     */
    protected $coordinates;
    /**
     * Код страны регистрации по классификатору. Необязательно, рекомендуется к заполнению. По умолчанию: 643 - Россия. Для type = 7 «ДТС Автоперевозка» возможные значения: 643 - Россия и 112 - Беларусь. При передаче кода GLN данный параметр имеет меньший приоритет.
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
     * Сокращенная форма собственности юр.лица/индивидуального предпринимателя (из списка ПЭК). При передаче кода GLN данный параметр имеет меньший приоритет.
     *
     * @var string|null
     */
    protected $fs;
    /**
     * Уникальный код идентификации Получателя и его местоположения, поле необязательно. Используется только для type = 7 «ДТС Автоперевозка». Переданный код GLN имеет приоритет над данными получателя и адресом получения
     *
     * @var string|null
     */
    protected $gLN;
    /**
     * 
     *
     * @var PreregistrationIdentityCard
     */
    protected $identityCard;
    /**
     * 
     *
     * @var Individual
     */
    protected $individual;
    /**
     * ИНН, обязательно для Юридических лиц и ИП (для физических лиц не передавать). При передаче кода GLN данный параметр имеет меньший приоритет.
     *
     * @var string|null
     */
    protected $inn;
    /**
     * КПП, поле необязательно. Если передан ИНН, но не передан КПП, то для юр.лиц будет использован КПП головной организации. При передаче кода GLN данный параметр имеет меньший приоритет.
     *
     * @var string|null
     */
    protected $kpp;
    /**
     * Тип контрагента. Обязательно. Значения: 1 - Юридическое лицо, 2 - Индивидуальный предприниматель, 3 - Физическое лицо. При передаче кода GLN данный параметр имеет меньший приоритет.
     *
     * @var int
     */
    protected $legalForm;
    /**
     * Контактное лицо. Обязательно.
     *
     * @var string
     */
    protected $person;
    /**
     * Список телефонов контактного лица для связи по вопросам доставки груза. Обязательно. Список должен содержать не менее 1, но не более 3-х номеров телефонов. ВАЖНО! При заказанной услуге "выдача по СМС физ.лицу" допускается передавать только ОДИН контактный номер телефона, который умеет принимать СМС. Указание добавочного не допускается.
     *
     * @var PersonPhone[]
     */
    protected $personPhones;
    /**
     * Наименование юр.лица/ИП или ФИО физ.лица. Обязательно. При передаче кода GLN данный параметр имеет меньший приоритет.
     *
     * @var string
     */
    protected $title;
    /**
     * Идентификатор конкретного склада получения груза. Необязательно — см. комментарии
     *
     * @var string|null
     */
    protected $warehouseId;
    /**
     * Адрес доставки груза. Обязательно при заказе услуги Доставка до адреса получателя. Для успешного определения координат адреса доставки, передавайте все составляющие адреса в такой последовательности: страна, регион, район, населенный пункт, улица, дом, квартира и разделяйте их запятыми. Запрещено в данной строке указывать данные, не являющиеся частью адреса. При отправке до отделения или ПВЗ и заполненном `warehouseId` данное поле необязательно для заполнения. При передаче кода GLN данный параметр имеет меньший приоритет.
     *
     * @return string|null
     */
    public function getAddressStock() : ?string
    {
        return $this->addressStock;
    }
    /**
     * Адрес доставки груза. Обязательно при заказе услуги Доставка до адреса получателя. Для успешного определения координат адреса доставки, передавайте все составляющие адреса в такой последовательности: страна, регион, район, населенный пункт, улица, дом, квартира и разделяйте их запятыми. Запрещено в данной строке указывать данные, не являющиеся частью адреса. При отправке до отделения или ПВЗ и заполненном `warehouseId` данное поле необязательно для заполнения. При передаче кода GLN данный параметр имеет меньший приоритет.
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
     * Комментарий к доставке. Если заказывается доставка, то в поле указывается комментарий к доставке.
     *
     * @return string|null
     */
    public function getComment() : ?string
    {
        return $this->comment;
    }
    /**
     * Комментарий к доставке. Если заказывается доставка, то в поле указывается комментарий к доставке.
     *
     * @param string|null $comment
     *
     * @return self
     */
    public function setComment(?string $comment) : self
    {
        $this->comment = $comment;
        return $this;
    }
    /**
     * 
     *
     * @return PreregistrationCoordinates
     */
    public function getCoordinates() : PreregistrationCoordinates
    {
        return $this->coordinates;
    }
    /**
     * 
     *
     * @param PreregistrationCoordinates $coordinates
     *
     * @return self
     */
    public function setCoordinates(PreregistrationCoordinates $coordinates) : self
    {
        $this->coordinates = $coordinates;
        return $this;
    }
    /**
     * Код страны регистрации по классификатору. Необязательно, рекомендуется к заполнению. По умолчанию: 643 - Россия. Для type = 7 «ДТС Автоперевозка» возможные значения: 643 - Россия и 112 - Беларусь. При передаче кода GLN данный параметр имеет меньший приоритет.
     *
     * @return string|null
     */
    public function getCountryOfRegistrationCode() : ?string
    {
        return $this->countryOfRegistrationCode;
    }
    /**
     * Код страны регистрации по классификатору. Необязательно, рекомендуется к заполнению. По умолчанию: 643 - Россия. Для type = 7 «ДТС Автоперевозка» возможные значения: 643 - Россия и 112 - Беларусь. При передаче кода GLN данный параметр имеет меньший приоритет.
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
     * Сокращенная форма собственности юр.лица/индивидуального предпринимателя (из списка ПЭК). При передаче кода GLN данный параметр имеет меньший приоритет.
     *
     * @return string|null
     */
    public function getFs() : ?string
    {
        return $this->fs;
    }
    /**
     * Сокращенная форма собственности юр.лица/индивидуального предпринимателя (из списка ПЭК). При передаче кода GLN данный параметр имеет меньший приоритет.
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
     * Уникальный код идентификации Получателя и его местоположения, поле необязательно. Используется только для type = 7 «ДТС Автоперевозка». Переданный код GLN имеет приоритет над данными получателя и адресом получения
     *
     * @return string|null
     */
    public function getGLN() : ?string
    {
        return $this->gLN;
    }
    /**
     * Уникальный код идентификации Получателя и его местоположения, поле необязательно. Используется только для type = 7 «ДТС Автоперевозка». Переданный код GLN имеет приоритет над данными получателя и адресом получения
     *
     * @param string|null $gLN
     *
     * @return self
     */
    public function setGLN(?string $gLN) : self
    {
        $this->gLN = $gLN;
        return $this;
    }
    /**
     * 
     *
     * @return PreregistrationIdentityCard
     */
    public function getIdentityCard() : PreregistrationIdentityCard
    {
        return $this->identityCard;
    }
    /**
     * 
     *
     * @param PreregistrationIdentityCard $identityCard
     *
     * @return self
     */
    public function setIdentityCard(PreregistrationIdentityCard $identityCard) : self
    {
        $this->identityCard = $identityCard;
        return $this;
    }
    /**
     * 
     *
     * @return Individual
     */
    public function getIndividual() : Individual
    {
        return $this->individual;
    }
    /**
     * 
     *
     * @param Individual $individual
     *
     * @return self
     */
    public function setIndividual(Individual $individual) : self
    {
        $this->individual = $individual;
        return $this;
    }
    /**
     * ИНН, обязательно для Юридических лиц и ИП (для физических лиц не передавать). При передаче кода GLN данный параметр имеет меньший приоритет.
     *
     * @return string|null
     */
    public function getInn() : ?string
    {
        return $this->inn;
    }
    /**
     * ИНН, обязательно для Юридических лиц и ИП (для физических лиц не передавать). При передаче кода GLN данный параметр имеет меньший приоритет.
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
     * КПП, поле необязательно. Если передан ИНН, но не передан КПП, то для юр.лиц будет использован КПП головной организации. При передаче кода GLN данный параметр имеет меньший приоритет.
     *
     * @return string|null
     */
    public function getKpp() : ?string
    {
        return $this->kpp;
    }
    /**
     * КПП, поле необязательно. Если передан ИНН, но не передан КПП, то для юр.лиц будет использован КПП головной организации. При передаче кода GLN данный параметр имеет меньший приоритет.
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
     * Тип контрагента. Обязательно. Значения: 1 - Юридическое лицо, 2 - Индивидуальный предприниматель, 3 - Физическое лицо. При передаче кода GLN данный параметр имеет меньший приоритет.
     *
     * @return int
     */
    public function getLegalForm() : int
    {
        return $this->legalForm;
    }
    /**
     * Тип контрагента. Обязательно. Значения: 1 - Юридическое лицо, 2 - Индивидуальный предприниматель, 3 - Физическое лицо. При передаче кода GLN данный параметр имеет меньший приоритет.
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
     * Контактное лицо. Обязательно.
     *
     * @return string
     */
    public function getPerson() : string
    {
        return $this->person;
    }
    /**
     * Контактное лицо. Обязательно.
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
     * Список телефонов контактного лица для связи по вопросам доставки груза. Обязательно. Список должен содержать не менее 1, но не более 3-х номеров телефонов. ВАЖНО! При заказанной услуге "выдача по СМС физ.лицу" допускается передавать только ОДИН контактный номер телефона, который умеет принимать СМС. Указание добавочного не допускается.
     *
     * @return PersonPhone[]
     */
    public function getPersonPhones() : array
    {
        return $this->personPhones;
    }
    /**
     * Список телефонов контактного лица для связи по вопросам доставки груза. Обязательно. Список должен содержать не менее 1, но не более 3-х номеров телефонов. ВАЖНО! При заказанной услуге "выдача по СМС физ.лицу" допускается передавать только ОДИН контактный номер телефона, который умеет принимать СМС. Указание добавочного не допускается.
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
     * Наименование юр.лица/ИП или ФИО физ.лица. Обязательно. При передаче кода GLN данный параметр имеет меньший приоритет.
     *
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title;
    }
    /**
     * Наименование юр.лица/ИП или ФИО физ.лица. Обязательно. При передаче кода GLN данный параметр имеет меньший приоритет.
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
     * Идентификатор конкретного склада получения груза. Необязательно — см. комментарии
     *
     * @return string|null
     */
    public function getWarehouseId() : ?string
    {
        return $this->warehouseId;
    }
    /**
     * Идентификатор конкретного склада получения груза. Необязательно — см. комментарии
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