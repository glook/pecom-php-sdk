<?php

namespace glook\PecomSdk\Generated\Model;

class CargoPickupReceiver
{
    /**
     * 
     *
     * @var \DateTime|null
     */
    protected $avisationDateTime;
    /**
     * Дистанция переноски, м
     *
     * @var int|null
     */
    protected $carryingDistance;
    /**
     * 
     *
     * @var CargopickupCoordinates|null
     */
    protected $coordinates;
    /**
     * По умолчанию 643
     *
     * @var string|null
     */
    protected $countryOfRegistrationCode;
    /**
     * 
     *
     * @var \DateTime|null
     */
    protected $dateOfDelivery;
    /**
     * 
     *
     * @var bool|null
     */
    protected $dateOfDeliveryCheck;
    /**
     * 
     *
     * @var string|null
     */
    protected $email;
    /**
     * Этаж на который необходимо занести груз
     *
     * @var int|null
     */
    protected $floor;
    /**
     * 
     *
     * @var string|null
     */
    protected $fs;
    /**
     * 
     *
     * @var CargopickupIdentityCard|null
     */
    protected $identityCard;
    /**
     * ИНН получателя. Обязателен для юрлиц и ИП
     *
     * @var string|null
     */
    protected $inn;
    /**
     * Необходима доставка по городу получателя
     *
     * @var bool|null
     */
    protected $isCityDeliveryNeeded;
    /**
     * Адрес доставки груза. Обязателен при `isCityDeliveryNeeded` = true. Для успешного определения координат адреса доставки передавайте все составляющие адреса в такой последовательности: страна, регион, район, населенный пункт, улица, дом, квартира и разделяйте их запятыми. Запрещено в данной строке указывать данные, не являющиеся частью адреса.
     *
     * @var string|null
     */
    protected $isCityDeliveryNeededAddress;
    /**
     * 
     *
     * @var string|null
     */
    protected $isCityDeliveryNeededAddressComment;
    /**
     * 
     *
     * @var bool|null
     */
    protected $isElevator;
    /**
     * Необходима разгрузка силами «ПЭК»
     *
     * @var bool|null
     */
    protected $isLoading;
    /**
     * 
     *
     * @var string|null
     */
    protected $kpp;
    /**
     * Тип контрагента. 1 — Юридическое лицо, 2 — Индивидуальный предприниматель, 3 — Физическое лицо
     *
     * @var int
     */
    protected $legalForm;
    /**
     * 
     *
     * @var string
     */
    protected $person;
    /**
     * 
     *
     * @var Phone[]
     */
    protected $personPhones;
    /**
     * 
     *
     * @var string
     */
    protected $title;
    /**
     * 
     *
     * @var string|null
     */
    protected $warehouseId;
    /**
     * 
     *
     * @return \DateTime|null
     */
    public function getAvisationDateTime() : ?\DateTime
    {
        return $this->avisationDateTime;
    }
    /**
     * 
     *
     * @param \DateTime|null $avisationDateTime
     *
     * @return self
     */
    public function setAvisationDateTime(?\DateTime $avisationDateTime) : self
    {
        $this->avisationDateTime = $avisationDateTime;
        return $this;
    }
    /**
     * Дистанция переноски, м
     *
     * @return int|null
     */
    public function getCarryingDistance() : ?int
    {
        return $this->carryingDistance;
    }
    /**
     * Дистанция переноски, м
     *
     * @param int|null $carryingDistance
     *
     * @return self
     */
    public function setCarryingDistance(?int $carryingDistance) : self
    {
        $this->carryingDistance = $carryingDistance;
        return $this;
    }
    /**
     * 
     *
     * @return CargopickupCoordinates|null
     */
    public function getCoordinates() : ?CargopickupCoordinates
    {
        return $this->coordinates;
    }
    /**
     * 
     *
     * @param CargopickupCoordinates|null $coordinates
     *
     * @return self
     */
    public function setCoordinates(?CargopickupCoordinates $coordinates) : self
    {
        $this->coordinates = $coordinates;
        return $this;
    }
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
     * @return \DateTime|null
     */
    public function getDateOfDelivery() : ?\DateTime
    {
        return $this->dateOfDelivery;
    }
    /**
     * 
     *
     * @param \DateTime|null $dateOfDelivery
     *
     * @return self
     */
    public function setDateOfDelivery(?\DateTime $dateOfDelivery) : self
    {
        $this->dateOfDelivery = $dateOfDelivery;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getDateOfDeliveryCheck() : ?bool
    {
        return $this->dateOfDeliveryCheck;
    }
    /**
     * 
     *
     * @param bool|null $dateOfDeliveryCheck
     *
     * @return self
     */
    public function setDateOfDeliveryCheck(?bool $dateOfDeliveryCheck) : self
    {
        $this->dateOfDeliveryCheck = $dateOfDeliveryCheck;
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
     * Этаж на который необходимо занести груз
     *
     * @return int|null
     */
    public function getFloor() : ?int
    {
        return $this->floor;
    }
    /**
     * Этаж на который необходимо занести груз
     *
     * @param int|null $floor
     *
     * @return self
     */
    public function setFloor(?int $floor) : self
    {
        $this->floor = $floor;
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
     * @return CargopickupIdentityCard|null
     */
    public function getIdentityCard() : ?CargopickupIdentityCard
    {
        return $this->identityCard;
    }
    /**
     * 
     *
     * @param CargopickupIdentityCard|null $identityCard
     *
     * @return self
     */
    public function setIdentityCard(?CargopickupIdentityCard $identityCard) : self
    {
        $this->identityCard = $identityCard;
        return $this;
    }
    /**
     * ИНН получателя. Обязателен для юрлиц и ИП
     *
     * @return string|null
     */
    public function getInn() : ?string
    {
        return $this->inn;
    }
    /**
     * ИНН получателя. Обязателен для юрлиц и ИП
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
     * Необходима доставка по городу получателя
     *
     * @return bool|null
     */
    public function getIsCityDeliveryNeeded() : ?bool
    {
        return $this->isCityDeliveryNeeded;
    }
    /**
     * Необходима доставка по городу получателя
     *
     * @param bool|null $isCityDeliveryNeeded
     *
     * @return self
     */
    public function setIsCityDeliveryNeeded(?bool $isCityDeliveryNeeded) : self
    {
        $this->isCityDeliveryNeeded = $isCityDeliveryNeeded;
        return $this;
    }
    /**
     * Адрес доставки груза. Обязателен при `isCityDeliveryNeeded` = true. Для успешного определения координат адреса доставки передавайте все составляющие адреса в такой последовательности: страна, регион, район, населенный пункт, улица, дом, квартира и разделяйте их запятыми. Запрещено в данной строке указывать данные, не являющиеся частью адреса.
     *
     * @return string|null
     */
    public function getIsCityDeliveryNeededAddress() : ?string
    {
        return $this->isCityDeliveryNeededAddress;
    }
    /**
     * Адрес доставки груза. Обязателен при `isCityDeliveryNeeded` = true. Для успешного определения координат адреса доставки передавайте все составляющие адреса в такой последовательности: страна, регион, район, населенный пункт, улица, дом, квартира и разделяйте их запятыми. Запрещено в данной строке указывать данные, не являющиеся частью адреса.
     *
     * @param string|null $isCityDeliveryNeededAddress
     *
     * @return self
     */
    public function setIsCityDeliveryNeededAddress(?string $isCityDeliveryNeededAddress) : self
    {
        $this->isCityDeliveryNeededAddress = $isCityDeliveryNeededAddress;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getIsCityDeliveryNeededAddressComment() : ?string
    {
        return $this->isCityDeliveryNeededAddressComment;
    }
    /**
     * 
     *
     * @param string|null $isCityDeliveryNeededAddressComment
     *
     * @return self
     */
    public function setIsCityDeliveryNeededAddressComment(?string $isCityDeliveryNeededAddressComment) : self
    {
        $this->isCityDeliveryNeededAddressComment = $isCityDeliveryNeededAddressComment;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getIsElevator() : ?bool
    {
        return $this->isElevator;
    }
    /**
     * 
     *
     * @param bool|null $isElevator
     *
     * @return self
     */
    public function setIsElevator(?bool $isElevator) : self
    {
        $this->isElevator = $isElevator;
        return $this;
    }
    /**
     * Необходима разгрузка силами «ПЭК»
     *
     * @return bool|null
     */
    public function getIsLoading() : ?bool
    {
        return $this->isLoading;
    }
    /**
     * Необходима разгрузка силами «ПЭК»
     *
     * @param bool|null $isLoading
     *
     * @return self
     */
    public function setIsLoading(?bool $isLoading) : self
    {
        $this->isLoading = $isLoading;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getKpp() : ?string
    {
        return $this->kpp;
    }
    /**
     * 
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
     * 
     *
     * @return string
     */
    public function getPerson() : string
    {
        return $this->person;
    }
    /**
     * 
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
     * 
     *
     * @return Phone[]
     */
    public function getPersonPhones() : array
    {
        return $this->personPhones;
    }
    /**
     * 
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
     * 
     *
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title;
    }
    /**
     * 
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
     * 
     *
     * @return string|null
     */
    public function getWarehouseId() : ?string
    {
        return $this->warehouseId;
    }
    /**
     * 
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