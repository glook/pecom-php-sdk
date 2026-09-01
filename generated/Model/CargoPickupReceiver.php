<?php

namespace glook\PecomSdk\Generated\Model;

class CargoPickupReceiver
{
    /**
     * @var null|\DateTime
     */
    protected $avisationDateTime;

    /**
     * Дистанция переноски, м
     *
     * @var null|int
     */
    protected $carryingDistance;

    /**
     * @var null|CargopickupCoordinates
     */
    protected $coordinates;

    /**
     * По умолчанию 643
     *
     * @var null|string
     */
    protected $countryOfRegistrationCode;

    /**
     * @var null|\DateTime
     */
    protected $dateOfDelivery;

    /**
     * @var null|bool
     */
    protected $dateOfDeliveryCheck;

    /**
     * @var null|string
     */
    protected $email;

    /**
     * Этаж на который необходимо занести груз
     *
     * @var null|int
     */
    protected $floor;

    /**
     * @var null|string
     */
    protected $fs;

    /**
     * @var null|CargopickupIdentityCard
     */
    protected $identityCard;

    /**
     * ИНН получателя. Обязателен для юрлиц и ИП
     *
     * @var null|string
     */
    protected $inn;

    /**
     * Необходима доставка по городу получателя
     *
     * @var null|bool
     */
    protected $isCityDeliveryNeeded;

    /**
     * Адрес доставки груза. Обязателен при `isCityDeliveryNeeded` = true. Для успешного определения координат адреса доставки передавайте все составляющие адреса в такой последовательности: страна, регион, район, населенный пункт, улица, дом, квартира и разделяйте их запятыми. Запрещено в данной строке указывать данные, не являющиеся частью адреса.
     *
     * @var null|string
     */
    protected $isCityDeliveryNeededAddress;

    /**
     * @var null|string
     */
    protected $isCityDeliveryNeededAddressComment;

    /**
     * @var null|bool
     */
    protected $isElevator;

    /**
     * Необходима разгрузка силами «ПЭК»
     *
     * @var null|bool
     */
    protected $isLoading;

    /**
     * @var null|string
     */
    protected $kpp;

    /**
     * Тип контрагента. 1 — Юридическое лицо, 2 — Индивидуальный предприниматель, 3 — Физическое лицо
     *
     * @var int
     */
    protected $legalForm;

    /**
     * @var string
     */
    protected $person;

    /**
     * @var Phone[]
     */
    protected $personPhones;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var null|string
     */
    protected $warehouseId;

    public function getAvisationDateTime(): ?\DateTime
    {
        return $this->avisationDateTime;
    }

    public function setAvisationDateTime(?\DateTime $avisationDateTime): self
    {
        $this->avisationDateTime = $avisationDateTime;

        return $this;
    }

    /**
     * Дистанция переноски, м
     */
    public function getCarryingDistance(): ?int
    {
        return $this->carryingDistance;
    }

    /**
     * Дистанция переноски, м
     */
    public function setCarryingDistance(?int $carryingDistance): self
    {
        $this->carryingDistance = $carryingDistance;

        return $this;
    }

    public function getCoordinates(): ?CargopickupCoordinates
    {
        return $this->coordinates;
    }

    public function setCoordinates(?CargopickupCoordinates $coordinates): self
    {
        $this->coordinates = $coordinates;

        return $this;
    }

    /**
     * По умолчанию 643
     */
    public function getCountryOfRegistrationCode(): ?string
    {
        return $this->countryOfRegistrationCode;
    }

    /**
     * По умолчанию 643
     */
    public function setCountryOfRegistrationCode(?string $countryOfRegistrationCode): self
    {
        $this->countryOfRegistrationCode = $countryOfRegistrationCode;

        return $this;
    }

    public function getDateOfDelivery(): ?\DateTime
    {
        return $this->dateOfDelivery;
    }

    public function setDateOfDelivery(?\DateTime $dateOfDelivery): self
    {
        $this->dateOfDelivery = $dateOfDelivery;

        return $this;
    }

    public function getDateOfDeliveryCheck(): ?bool
    {
        return $this->dateOfDeliveryCheck;
    }

    public function setDateOfDeliveryCheck(?bool $dateOfDeliveryCheck): self
    {
        $this->dateOfDeliveryCheck = $dateOfDeliveryCheck;

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
     * Этаж на который необходимо занести груз
     */
    public function getFloor(): ?int
    {
        return $this->floor;
    }

    /**
     * Этаж на который необходимо занести груз
     */
    public function setFloor(?int $floor): self
    {
        $this->floor = $floor;

        return $this;
    }

    public function getFs(): ?string
    {
        return $this->fs;
    }

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
     * ИНН получателя. Обязателен для юрлиц и ИП
     */
    public function getInn(): ?string
    {
        return $this->inn;
    }

    /**
     * ИНН получателя. Обязателен для юрлиц и ИП
     */
    public function setInn(?string $inn): self
    {
        $this->inn = $inn;

        return $this;
    }

    /**
     * Необходима доставка по городу получателя
     */
    public function getIsCityDeliveryNeeded(): ?bool
    {
        return $this->isCityDeliveryNeeded;
    }

    /**
     * Необходима доставка по городу получателя
     */
    public function setIsCityDeliveryNeeded(?bool $isCityDeliveryNeeded): self
    {
        $this->isCityDeliveryNeeded = $isCityDeliveryNeeded;

        return $this;
    }

    /**
     * Адрес доставки груза. Обязателен при `isCityDeliveryNeeded` = true. Для успешного определения координат адреса доставки передавайте все составляющие адреса в такой последовательности: страна, регион, район, населенный пункт, улица, дом, квартира и разделяйте их запятыми. Запрещено в данной строке указывать данные, не являющиеся частью адреса.
     */
    public function getIsCityDeliveryNeededAddress(): ?string
    {
        return $this->isCityDeliveryNeededAddress;
    }

    /**
     * Адрес доставки груза. Обязателен при `isCityDeliveryNeeded` = true. Для успешного определения координат адреса доставки передавайте все составляющие адреса в такой последовательности: страна, регион, район, населенный пункт, улица, дом, квартира и разделяйте их запятыми. Запрещено в данной строке указывать данные, не являющиеся частью адреса.
     */
    public function setIsCityDeliveryNeededAddress(?string $isCityDeliveryNeededAddress): self
    {
        $this->isCityDeliveryNeededAddress = $isCityDeliveryNeededAddress;

        return $this;
    }

    public function getIsCityDeliveryNeededAddressComment(): ?string
    {
        return $this->isCityDeliveryNeededAddressComment;
    }

    public function setIsCityDeliveryNeededAddressComment(?string $isCityDeliveryNeededAddressComment): self
    {
        $this->isCityDeliveryNeededAddressComment = $isCityDeliveryNeededAddressComment;

        return $this;
    }

    public function getIsElevator(): ?bool
    {
        return $this->isElevator;
    }

    public function setIsElevator(?bool $isElevator): self
    {
        $this->isElevator = $isElevator;

        return $this;
    }

    /**
     * Необходима разгрузка силами «ПЭК»
     */
    public function getIsLoading(): ?bool
    {
        return $this->isLoading;
    }

    /**
     * Необходима разгрузка силами «ПЭК»
     */
    public function setIsLoading(?bool $isLoading): self
    {
        $this->isLoading = $isLoading;

        return $this;
    }

    public function getKpp(): ?string
    {
        return $this->kpp;
    }

    public function setKpp(?string $kpp): self
    {
        $this->kpp = $kpp;

        return $this;
    }

    /**
     * Тип контрагента. 1 — Юридическое лицо, 2 — Индивидуальный предприниматель, 3 — Физическое лицо
     */
    public function getLegalForm(): int
    {
        return $this->legalForm;
    }

    /**
     * Тип контрагента. 1 — Юридическое лицо, 2 — Индивидуальный предприниматель, 3 — Физическое лицо
     */
    public function setLegalForm(int $legalForm): self
    {
        $this->legalForm = $legalForm;

        return $this;
    }

    public function getPerson(): string
    {
        return $this->person;
    }

    public function setPerson(string $person): self
    {
        $this->person = $person;

        return $this;
    }

    /**
     * @return Phone[]
     */
    public function getPersonPhones(): array
    {
        return $this->personPhones;
    }

    /**
     * @param Phone[] $personPhones
     */
    public function setPersonPhones(array $personPhones): self
    {
        $this->personPhones = $personPhones;

        return $this;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getWarehouseId(): ?string
    {
        return $this->warehouseId;
    }

    public function setWarehouseId(?string $warehouseId): self
    {
        $this->warehouseId = $warehouseId;

        return $this;
    }
}
