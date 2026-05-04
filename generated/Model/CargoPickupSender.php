<?php

namespace glook\PecomSdk\Generated\Model;

class CargoPickupSender
{
    /**
     * Адрес, по которому находятся документы на получения груза. Имеет смысл заполнять только при указании в поле `addressStockComment` комментария по забору документов по другому адресу. Услуга оказывается за дополнительную плату.
     *
     * @var string|null
     */
    protected $addressOffice;
    /**
     * 
     *
     * @var string|null
     */
    protected $addressOfficeComment;
    /**
     * Адрес, по которому необходимо забрать груз. Обязателен для `pickupType` 1 и 4. Для успешного определения координат адреса забора передавайте все составляющие адреса в такой последовательности: страна, регион, район, населенный пункт, улица, дом, квартира и разделяйте их запятыми. Запрещено в данной строке указывать данные, не являющиеся частью адреса.
     *
     * @var string
     */
    protected $addressStock;
    /**
     * Произвольная пометка для операции. Если для получения груза нужно предварительно получить документы по другому адресу, то в данном поле дополнительно необходимо указать: «Требует забор документов на другом адресе.»
     *
     * @var string|null
     */
    protected $addressStockComment;
    /**
     * Номер счета на оплату груза накладной или номер заказа клиента или номер другого документа на груз. Максимальная длина поля 50 символов
     *
     * @var string|null
     */
    protected $cargoDocumentNumber;
    /**
     * Код страны регистрации. По умолчанию 643
     *
     * @var string|null
     */
    protected $countryOfRegistrationCode;
    /**
     * 
     *
     * @var string|null
     */
    protected $email;
    /**
     * Сокращенная форма собственности
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
     * ИНН отправителя. Обязателен для юридических лиц
     *
     * @var string|null
     */
    protected $inn;
    /**
     * Для получения груза необходима доверенность «ПЭК» (иначе, доверенность клиента)
     *
     * @var bool|null
     */
    protected $isAuthorityNeeded;
    /**
     * КПП. Если передан ИНН, но не передан КПП, то для юр.лиц будет использован КПП головной организации
     *
     * @var string|null
     */
    protected $kpp;
    /**
     * Географическая широта
     *
     * @var float|null
     */
    protected $latitudeForCar;
    /**
     * Тип контрагента. 1 — Юридическое лицо, 2 — Индивидуальный предприниматель, 3 — Физическое лицо
     *
     * @var int
     */
    protected $legalForm;
    /**
     * Географическая долгота
     *
     * @var float|null
     */
    protected $longitudeForCar;
    /**
     * Время начала обеденного перерыва
     *
     * @var string|null
     */
    protected $lunchBreakFrom;
    /**
     * Время окончания обеденного перерыва
     *
     * @var string|null
     */
    protected $lunchBreakTo;
    /**
     * Контактное лицо
     *
     * @var string
     */
    protected $person;
    /**
     * Телефоны контактного лица. От 1 до 3 номеров
     *
     * @var Phone[]
     */
    protected $personPhones;
    /**
     * Наименование / ФИО
     *
     * @var string
     */
    protected $title;
    /**
     * Время начала рабочего дня
     *
     * @var string|null
     */
    protected $workTimeFrom;
    /**
     * Время окончания рабочего дня
     *
     * @var string|null
     */
    protected $workTimeTo;
    /**
     * Адрес, по которому находятся документы на получения груза. Имеет смысл заполнять только при указании в поле `addressStockComment` комментария по забору документов по другому адресу. Услуга оказывается за дополнительную плату.
     *
     * @return string|null
     */
    public function getAddressOffice() : ?string
    {
        return $this->addressOffice;
    }
    /**
     * Адрес, по которому находятся документы на получения груза. Имеет смысл заполнять только при указании в поле `addressStockComment` комментария по забору документов по другому адресу. Услуга оказывается за дополнительную плату.
     *
     * @param string|null $addressOffice
     *
     * @return self
     */
    public function setAddressOffice(?string $addressOffice) : self
    {
        $this->addressOffice = $addressOffice;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getAddressOfficeComment() : ?string
    {
        return $this->addressOfficeComment;
    }
    /**
     * 
     *
     * @param string|null $addressOfficeComment
     *
     * @return self
     */
    public function setAddressOfficeComment(?string $addressOfficeComment) : self
    {
        $this->addressOfficeComment = $addressOfficeComment;
        return $this;
    }
    /**
     * Адрес, по которому необходимо забрать груз. Обязателен для `pickupType` 1 и 4. Для успешного определения координат адреса забора передавайте все составляющие адреса в такой последовательности: страна, регион, район, населенный пункт, улица, дом, квартира и разделяйте их запятыми. Запрещено в данной строке указывать данные, не являющиеся частью адреса.
     *
     * @return string
     */
    public function getAddressStock() : string
    {
        return $this->addressStock;
    }
    /**
     * Адрес, по которому необходимо забрать груз. Обязателен для `pickupType` 1 и 4. Для успешного определения координат адреса забора передавайте все составляющие адреса в такой последовательности: страна, регион, район, населенный пункт, улица, дом, квартира и разделяйте их запятыми. Запрещено в данной строке указывать данные, не являющиеся частью адреса.
     *
     * @param string $addressStock
     *
     * @return self
     */
    public function setAddressStock(string $addressStock) : self
    {
        $this->addressStock = $addressStock;
        return $this;
    }
    /**
     * Произвольная пометка для операции. Если для получения груза нужно предварительно получить документы по другому адресу, то в данном поле дополнительно необходимо указать: «Требует забор документов на другом адресе.»
     *
     * @return string|null
     */
    public function getAddressStockComment() : ?string
    {
        return $this->addressStockComment;
    }
    /**
     * Произвольная пометка для операции. Если для получения груза нужно предварительно получить документы по другому адресу, то в данном поле дополнительно необходимо указать: «Требует забор документов на другом адресе.»
     *
     * @param string|null $addressStockComment
     *
     * @return self
     */
    public function setAddressStockComment(?string $addressStockComment) : self
    {
        $this->addressStockComment = $addressStockComment;
        return $this;
    }
    /**
     * Номер счета на оплату груза накладной или номер заказа клиента или номер другого документа на груз. Максимальная длина поля 50 символов
     *
     * @return string|null
     */
    public function getCargoDocumentNumber() : ?string
    {
        return $this->cargoDocumentNumber;
    }
    /**
     * Номер счета на оплату груза накладной или номер заказа клиента или номер другого документа на груз. Максимальная длина поля 50 символов
     *
     * @param string|null $cargoDocumentNumber
     *
     * @return self
     */
    public function setCargoDocumentNumber(?string $cargoDocumentNumber) : self
    {
        $this->cargoDocumentNumber = $cargoDocumentNumber;
        return $this;
    }
    /**
     * Код страны регистрации. По умолчанию 643
     *
     * @return string|null
     */
    public function getCountryOfRegistrationCode() : ?string
    {
        return $this->countryOfRegistrationCode;
    }
    /**
     * Код страны регистрации. По умолчанию 643
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
    public function getEmail() : ?string
    {
        return $this->email;
    }
    /**
     * 
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
     * Сокращенная форма собственности
     *
     * @return string|null
     */
    public function getFs() : ?string
    {
        return $this->fs;
    }
    /**
     * Сокращенная форма собственности
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
     * ИНН отправителя. Обязателен для юридических лиц
     *
     * @return string|null
     */
    public function getInn() : ?string
    {
        return $this->inn;
    }
    /**
     * ИНН отправителя. Обязателен для юридических лиц
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
     * Для получения груза необходима доверенность «ПЭК» (иначе, доверенность клиента)
     *
     * @return bool|null
     */
    public function getIsAuthorityNeeded() : ?bool
    {
        return $this->isAuthorityNeeded;
    }
    /**
     * Для получения груза необходима доверенность «ПЭК» (иначе, доверенность клиента)
     *
     * @param bool|null $isAuthorityNeeded
     *
     * @return self
     */
    public function setIsAuthorityNeeded(?bool $isAuthorityNeeded) : self
    {
        $this->isAuthorityNeeded = $isAuthorityNeeded;
        return $this;
    }
    /**
     * КПП. Если передан ИНН, но не передан КПП, то для юр.лиц будет использован КПП головной организации
     *
     * @return string|null
     */
    public function getKpp() : ?string
    {
        return $this->kpp;
    }
    /**
     * КПП. Если передан ИНН, но не передан КПП, то для юр.лиц будет использован КПП головной организации
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
     * Географическая широта
     *
     * @return float|null
     */
    public function getLatitudeForCar() : ?float
    {
        return $this->latitudeForCar;
    }
    /**
     * Географическая широта
     *
     * @param float|null $latitudeForCar
     *
     * @return self
     */
    public function setLatitudeForCar(?float $latitudeForCar) : self
    {
        $this->latitudeForCar = $latitudeForCar;
        return $this;
    }
    /**
     * Тип контрагента. 1 — Юридическое лицо, 2 — Индивидуальный предприниматель, 3 — Физическое лицо
     *
     * @return int
     */
    public function getLegalForm() : int
    {
        return $this->legalForm;
    }
    /**
     * Тип контрагента. 1 — Юридическое лицо, 2 — Индивидуальный предприниматель, 3 — Физическое лицо
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
     * Географическая долгота
     *
     * @return float|null
     */
    public function getLongitudeForCar() : ?float
    {
        return $this->longitudeForCar;
    }
    /**
     * Географическая долгота
     *
     * @param float|null $longitudeForCar
     *
     * @return self
     */
    public function setLongitudeForCar(?float $longitudeForCar) : self
    {
        $this->longitudeForCar = $longitudeForCar;
        return $this;
    }
    /**
     * Время начала обеденного перерыва
     *
     * @return string|null
     */
    public function getLunchBreakFrom() : ?string
    {
        return $this->lunchBreakFrom;
    }
    /**
     * Время начала обеденного перерыва
     *
     * @param string|null $lunchBreakFrom
     *
     * @return self
     */
    public function setLunchBreakFrom(?string $lunchBreakFrom) : self
    {
        $this->lunchBreakFrom = $lunchBreakFrom;
        return $this;
    }
    /**
     * Время окончания обеденного перерыва
     *
     * @return string|null
     */
    public function getLunchBreakTo() : ?string
    {
        return $this->lunchBreakTo;
    }
    /**
     * Время окончания обеденного перерыва
     *
     * @param string|null $lunchBreakTo
     *
     * @return self
     */
    public function setLunchBreakTo(?string $lunchBreakTo) : self
    {
        $this->lunchBreakTo = $lunchBreakTo;
        return $this;
    }
    /**
     * Контактное лицо
     *
     * @return string
     */
    public function getPerson() : string
    {
        return $this->person;
    }
    /**
     * Контактное лицо
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
     * Телефоны контактного лица. От 1 до 3 номеров
     *
     * @return Phone[]
     */
    public function getPersonPhones() : array
    {
        return $this->personPhones;
    }
    /**
     * Телефоны контактного лица. От 1 до 3 номеров
     *
     * @param Phone[] $personPhones
     *
     * @return self
     */
    public function setPersonPhones(array $personPhones) : self
    {
        $this->personPhones = $personPhones;
        return $this;
    }
    /**
     * Наименование / ФИО
     *
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title;
    }
    /**
     * Наименование / ФИО
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
     * Время начала рабочего дня
     *
     * @return string|null
     */
    public function getWorkTimeFrom() : ?string
    {
        return $this->workTimeFrom;
    }
    /**
     * Время начала рабочего дня
     *
     * @param string|null $workTimeFrom
     *
     * @return self
     */
    public function setWorkTimeFrom(?string $workTimeFrom) : self
    {
        $this->workTimeFrom = $workTimeFrom;
        return $this;
    }
    /**
     * Время окончания рабочего дня
     *
     * @return string|null
     */
    public function getWorkTimeTo() : ?string
    {
        return $this->workTimeTo;
    }
    /**
     * Время окончания рабочего дня
     *
     * @param string|null $workTimeTo
     *
     * @return self
     */
    public function setWorkTimeTo(?string $workTimeTo) : self
    {
        $this->workTimeTo = $workTimeTo;
        return $this;
    }
}