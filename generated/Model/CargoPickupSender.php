<?php

namespace glook\PecomSdk\Generated\Model;

class CargoPickupSender
{
    /**
     * Адрес, по которому находятся документы на получения груза. Имеет смысл заполнять только при указании в поле `addressStockComment` комментария по забору документов по другому адресу. Услуга оказывается за дополнительную плату.
     *
     * @var null|string
     */
    protected $addressOffice;

    /**
     * @var null|string
     */
    protected $addressOfficeComment;

    /**
     * Адрес, по которому необходимо забрать груз. Обязателен для `pickupType` 1 и 4. Для успешного определения координат адреса забора передавайте все составляющие адреса в такой последовательности: страна, регион, район, населенный пункт, улица, дом, квартира и разделяйте их запятыми. Запрещено в данной строке указывать данные, не являющиеся частью адреса.
     *
     * @var string
     */
    protected $addressStock;

    /**
     * Произвольная пометка для операции. Если для получения груза нужно предварительно получить документы по другому адресу, то в данном поле дополнительно необходимо указать: «Требует забор документов на другом адресе.».
     *
     * @var null|string
     */
    protected $addressStockComment;

    /**
     * Номер счета на оплату груза накладной или номер заказа клиента или номер другого документа на груз. Максимальная длина поля 50 символов.
     *
     * @var null|string
     */
    protected $cargoDocumentNumber;

    /**
     * Код страны регистрации. По умолчанию 643.
     *
     * @var null|string
     */
    protected $countryOfRegistrationCode;

    /**
     * @var null|string
     */
    protected $email;

    /**
     * Сокращенная форма собственности.
     *
     * @var null|string
     */
    protected $fs;

    /**
     * @var null|CargopickupIdentityCard
     */
    protected $identityCard;

    /**
     * ИНН отправителя. Обязателен для юридических лиц.
     *
     * @var null|string
     */
    protected $inn;

    /**
     * Для получения груза необходима доверенность «ПЭК» (иначе, доверенность клиента).
     *
     * @var null|bool
     */
    protected $isAuthorityNeeded;

    /**
     * КПП. Если передан ИНН, но не передан КПП, то для юр.лиц будет использован КПП головной организации.
     *
     * @var null|string
     */
    protected $kpp;

    /**
     * Географическая широта.
     *
     * @var null|float
     */
    protected $latitudeForCar;

    /**
     * Тип контрагента. 1 — Юридическое лицо, 2 — Индивидуальный предприниматель, 3 — Физическое лицо.
     *
     * @var int
     */
    protected $legalForm;

    /**
     * Географическая долгота.
     *
     * @var null|float
     */
    protected $longitudeForCar;

    /**
     * Время начала обеденного перерыва.
     *
     * @var null|string
     */
    protected $lunchBreakFrom;

    /**
     * Время окончания обеденного перерыва.
     *
     * @var null|string
     */
    protected $lunchBreakTo;

    /**
     * Контактное лицо.
     *
     * @var string
     */
    protected $person;

    /**
     * Телефоны контактного лица. От 1 до 3 номеров.
     *
     * @var Phone[]
     */
    protected $personPhones;

    /**
     * Наименование / ФИО.
     *
     * @var string
     */
    protected $title;

    /**
     * Время начала рабочего дня.
     *
     * @var null|string
     */
    protected $workTimeFrom;

    /**
     * Время окончания рабочего дня.
     *
     * @var null|string
     */
    protected $workTimeTo;

    /**
     * Адрес, по которому находятся документы на получения груза. Имеет смысл заполнять только при указании в поле `addressStockComment` комментария по забору документов по другому адресу. Услуга оказывается за дополнительную плату.
     */
    public function getAddressOffice(): ?string
    {
        return $this->addressOffice;
    }

    /**
     * Адрес, по которому находятся документы на получения груза. Имеет смысл заполнять только при указании в поле `addressStockComment` комментария по забору документов по другому адресу. Услуга оказывается за дополнительную плату.
     */
    public function setAddressOffice(?string $addressOffice): self
    {
        $this->addressOffice = $addressOffice;

        return $this;
    }

    public function getAddressOfficeComment(): ?string
    {
        return $this->addressOfficeComment;
    }

    public function setAddressOfficeComment(?string $addressOfficeComment): self
    {
        $this->addressOfficeComment = $addressOfficeComment;

        return $this;
    }

    /**
     * Адрес, по которому необходимо забрать груз. Обязателен для `pickupType` 1 и 4. Для успешного определения координат адреса забора передавайте все составляющие адреса в такой последовательности: страна, регион, район, населенный пункт, улица, дом, квартира и разделяйте их запятыми. Запрещено в данной строке указывать данные, не являющиеся частью адреса.
     */
    public function getAddressStock(): string
    {
        return $this->addressStock;
    }

    /**
     * Адрес, по которому необходимо забрать груз. Обязателен для `pickupType` 1 и 4. Для успешного определения координат адреса забора передавайте все составляющие адреса в такой последовательности: страна, регион, район, населенный пункт, улица, дом, квартира и разделяйте их запятыми. Запрещено в данной строке указывать данные, не являющиеся частью адреса.
     */
    public function setAddressStock(string $addressStock): self
    {
        $this->addressStock = $addressStock;

        return $this;
    }

    /**
     * Произвольная пометка для операции. Если для получения груза нужно предварительно получить документы по другому адресу, то в данном поле дополнительно необходимо указать: «Требует забор документов на другом адресе.».
     */
    public function getAddressStockComment(): ?string
    {
        return $this->addressStockComment;
    }

    /**
     * Произвольная пометка для операции. Если для получения груза нужно предварительно получить документы по другому адресу, то в данном поле дополнительно необходимо указать: «Требует забор документов на другом адресе.».
     */
    public function setAddressStockComment(?string $addressStockComment): self
    {
        $this->addressStockComment = $addressStockComment;

        return $this;
    }

    /**
     * Номер счета на оплату груза накладной или номер заказа клиента или номер другого документа на груз. Максимальная длина поля 50 символов.
     */
    public function getCargoDocumentNumber(): ?string
    {
        return $this->cargoDocumentNumber;
    }

    /**
     * Номер счета на оплату груза накладной или номер заказа клиента или номер другого документа на груз. Максимальная длина поля 50 символов.
     */
    public function setCargoDocumentNumber(?string $cargoDocumentNumber): self
    {
        $this->cargoDocumentNumber = $cargoDocumentNumber;

        return $this;
    }

    /**
     * Код страны регистрации. По умолчанию 643.
     */
    public function getCountryOfRegistrationCode(): ?string
    {
        return $this->countryOfRegistrationCode;
    }

    /**
     * Код страны регистрации. По умолчанию 643.
     */
    public function setCountryOfRegistrationCode(?string $countryOfRegistrationCode): self
    {
        $this->countryOfRegistrationCode = $countryOfRegistrationCode;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Сокращенная форма собственности.
     */
    public function getFs(): ?string
    {
        return $this->fs;
    }

    /**
     * Сокращенная форма собственности.
     */
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
     * ИНН отправителя. Обязателен для юридических лиц.
     */
    public function getInn(): ?string
    {
        return $this->inn;
    }

    /**
     * ИНН отправителя. Обязателен для юридических лиц.
     */
    public function setInn(?string $inn): self
    {
        $this->inn = $inn;

        return $this;
    }

    /**
     * Для получения груза необходима доверенность «ПЭК» (иначе, доверенность клиента).
     */
    public function getIsAuthorityNeeded(): ?bool
    {
        return $this->isAuthorityNeeded;
    }

    /**
     * Для получения груза необходима доверенность «ПЭК» (иначе, доверенность клиента).
     */
    public function setIsAuthorityNeeded(?bool $isAuthorityNeeded): self
    {
        $this->isAuthorityNeeded = $isAuthorityNeeded;

        return $this;
    }

    /**
     * КПП. Если передан ИНН, но не передан КПП, то для юр.лиц будет использован КПП головной организации.
     */
    public function getKpp(): ?string
    {
        return $this->kpp;
    }

    /**
     * КПП. Если передан ИНН, но не передан КПП, то для юр.лиц будет использован КПП головной организации.
     */
    public function setKpp(?string $kpp): self
    {
        $this->kpp = $kpp;

        return $this;
    }

    /**
     * Географическая широта.
     */
    public function getLatitudeForCar(): ?float
    {
        return $this->latitudeForCar;
    }

    /**
     * Географическая широта.
     */
    public function setLatitudeForCar(?float $latitudeForCar): self
    {
        $this->latitudeForCar = $latitudeForCar;

        return $this;
    }

    /**
     * Тип контрагента. 1 — Юридическое лицо, 2 — Индивидуальный предприниматель, 3 — Физическое лицо.
     */
    public function getLegalForm(): int
    {
        return $this->legalForm;
    }

    /**
     * Тип контрагента. 1 — Юридическое лицо, 2 — Индивидуальный предприниматель, 3 — Физическое лицо.
     */
    public function setLegalForm(int $legalForm): self
    {
        $this->legalForm = $legalForm;

        return $this;
    }

    /**
     * Географическая долгота.
     */
    public function getLongitudeForCar(): ?float
    {
        return $this->longitudeForCar;
    }

    /**
     * Географическая долгота.
     */
    public function setLongitudeForCar(?float $longitudeForCar): self
    {
        $this->longitudeForCar = $longitudeForCar;

        return $this;
    }

    /**
     * Время начала обеденного перерыва.
     */
    public function getLunchBreakFrom(): ?string
    {
        return $this->lunchBreakFrom;
    }

    /**
     * Время начала обеденного перерыва.
     */
    public function setLunchBreakFrom(?string $lunchBreakFrom): self
    {
        $this->lunchBreakFrom = $lunchBreakFrom;

        return $this;
    }

    /**
     * Время окончания обеденного перерыва.
     */
    public function getLunchBreakTo(): ?string
    {
        return $this->lunchBreakTo;
    }

    /**
     * Время окончания обеденного перерыва.
     */
    public function setLunchBreakTo(?string $lunchBreakTo): self
    {
        $this->lunchBreakTo = $lunchBreakTo;

        return $this;
    }

    /**
     * Контактное лицо.
     */
    public function getPerson(): string
    {
        return $this->person;
    }

    /**
     * Контактное лицо.
     */
    public function setPerson(string $person): self
    {
        $this->person = $person;

        return $this;
    }

    /**
     * Телефоны контактного лица. От 1 до 3 номеров.
     *
     * @return Phone[]
     */
    public function getPersonPhones(): array
    {
        return $this->personPhones;
    }

    /**
     * Телефоны контактного лица. От 1 до 3 номеров.
     *
     * @param Phone[] $personPhones
     */
    public function setPersonPhones(array $personPhones): self
    {
        $this->personPhones = $personPhones;

        return $this;
    }

    /**
     * Наименование / ФИО.
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Наименование / ФИО.
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Время начала рабочего дня.
     */
    public function getWorkTimeFrom(): ?string
    {
        return $this->workTimeFrom;
    }

    /**
     * Время начала рабочего дня.
     */
    public function setWorkTimeFrom(?string $workTimeFrom): self
    {
        $this->workTimeFrom = $workTimeFrom;

        return $this;
    }

    /**
     * Время окончания рабочего дня.
     */
    public function getWorkTimeTo(): ?string
    {
        return $this->workTimeTo;
    }

    /**
     * Время окончания рабочего дня.
     */
    public function setWorkTimeTo(?string $workTimeTo): self
    {
        $this->workTimeTo = $workTimeTo;

        return $this;
    }
}
