<?php

namespace glook\PecomSdk\Generated\Model;

class Branch
{
    /**
     * Адрес основного отделения филиала
     *
     * @var string
     */
    protected $address;
    /**
     * Код филиала. В актуальной версии протокола не используется
     *
     * @var string
     */
    protected $bitrixId;
    /**
     * Буквенный уникальный код филиала
     *
     * @var string
     */
    protected $branchCode;
    /**
     * Список городов филиала
     *
     * @var BranchCity[]
     */
    protected $cities;
    /**
     * Координаты GPS основного отделения филиала (устаревший формат строки)
     *
     * @var string|null
     */
    protected $coordinates;
    /**
     * Координаты GPS основного отделения филиала
     *
     * @var BranchesCoordinates|null
     */
    protected $coordinatesobj;
    /**
     * Страна
     *
     * @var string
     */
    protected $country;
    /**
     * Код страны регистрации по классификатору
     *
     * @var string
     */
    protected $countryOfRegistrationCode;
    /**
     * Список отделений
     *
     * @var BranchDivision[]
     */
    protected $divisions;
    /**
     * Идентификатор филиала. НЕ ИСПОЛЬЗОВАТЬ в методах расчёта стоимости и подачи заявок
     *
     * @var string
     */
    protected $id;
    /**
     * Почтовый индекс основного отделения филиала
     *
     * @var string
     */
    protected $postalCode;
    /**
     * Часовой пояс основного отделения филиала
     *
     * @var string
     */
    protected $timezone;
    /**
     * Наименование филиала
     *
     * @var string
     */
    protected $title;
    /**
     * Адрес основного отделения филиала
     *
     * @return string
     */
    public function getAddress() : string
    {
        return $this->address;
    }
    /**
     * Адрес основного отделения филиала
     *
     * @param string $address
     *
     * @return self
     */
    public function setAddress(string $address) : self
    {
        $this->address = $address;
        return $this;
    }
    /**
     * Код филиала. В актуальной версии протокола не используется
     *
     * @return string
     */
    public function getBitrixId() : string
    {
        return $this->bitrixId;
    }
    /**
     * Код филиала. В актуальной версии протокола не используется
     *
     * @param string $bitrixId
     *
     * @return self
     */
    public function setBitrixId(string $bitrixId) : self
    {
        $this->bitrixId = $bitrixId;
        return $this;
    }
    /**
     * Буквенный уникальный код филиала
     *
     * @return string
     */
    public function getBranchCode() : string
    {
        return $this->branchCode;
    }
    /**
     * Буквенный уникальный код филиала
     *
     * @param string $branchCode
     *
     * @return self
     */
    public function setBranchCode(string $branchCode) : self
    {
        $this->branchCode = $branchCode;
        return $this;
    }
    /**
     * Список городов филиала
     *
     * @return BranchCity[]
     */
    public function getCities() : array
    {
        return $this->cities;
    }
    /**
     * Список городов филиала
     *
     * @param BranchCity[] $cities
     *
     * @return self
     */
    public function setCities(array $cities) : self
    {
        $this->cities = $cities;
        return $this;
    }
    /**
     * Координаты GPS основного отделения филиала (устаревший формат строки)
     *
     * @return string|null
     */
    public function getCoordinates() : ?string
    {
        return $this->coordinates;
    }
    /**
     * Координаты GPS основного отделения филиала (устаревший формат строки)
     *
     * @param string|null $coordinates
     *
     * @return self
     */
    public function setCoordinates(?string $coordinates) : self
    {
        $this->coordinates = $coordinates;
        return $this;
    }
    /**
     * Координаты GPS основного отделения филиала
     *
     * @return BranchesCoordinates|null
     */
    public function getCoordinatesobj() : ?BranchesCoordinates
    {
        return $this->coordinatesobj;
    }
    /**
     * Координаты GPS основного отделения филиала
     *
     * @param BranchesCoordinates|null $coordinatesobj
     *
     * @return self
     */
    public function setCoordinatesobj(?BranchesCoordinates $coordinatesobj) : self
    {
        $this->coordinatesobj = $coordinatesobj;
        return $this;
    }
    /**
     * Страна
     *
     * @return string
     */
    public function getCountry() : string
    {
        return $this->country;
    }
    /**
     * Страна
     *
     * @param string $country
     *
     * @return self
     */
    public function setCountry(string $country) : self
    {
        $this->country = $country;
        return $this;
    }
    /**
     * Код страны регистрации по классификатору
     *
     * @return string
     */
    public function getCountryOfRegistrationCode() : string
    {
        return $this->countryOfRegistrationCode;
    }
    /**
     * Код страны регистрации по классификатору
     *
     * @param string $countryOfRegistrationCode
     *
     * @return self
     */
    public function setCountryOfRegistrationCode(string $countryOfRegistrationCode) : self
    {
        $this->countryOfRegistrationCode = $countryOfRegistrationCode;
        return $this;
    }
    /**
     * Список отделений
     *
     * @return BranchDivision[]
     */
    public function getDivisions() : array
    {
        return $this->divisions;
    }
    /**
     * Список отделений
     *
     * @param BranchDivision[] $divisions
     *
     * @return self
     */
    public function setDivisions(array $divisions) : self
    {
        $this->divisions = $divisions;
        return $this;
    }
    /**
     * Идентификатор филиала. НЕ ИСПОЛЬЗОВАТЬ в методах расчёта стоимости и подачи заявок
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * Идентификатор филиала. НЕ ИСПОЛЬЗОВАТЬ в методах расчёта стоимости и подачи заявок
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Почтовый индекс основного отделения филиала
     *
     * @return string
     */
    public function getPostalCode() : string
    {
        return $this->postalCode;
    }
    /**
     * Почтовый индекс основного отделения филиала
     *
     * @param string $postalCode
     *
     * @return self
     */
    public function setPostalCode(string $postalCode) : self
    {
        $this->postalCode = $postalCode;
        return $this;
    }
    /**
     * Часовой пояс основного отделения филиала
     *
     * @return string
     */
    public function getTimezone() : string
    {
        return $this->timezone;
    }
    /**
     * Часовой пояс основного отделения филиала
     *
     * @param string $timezone
     *
     * @return self
     */
    public function setTimezone(string $timezone) : self
    {
        $this->timezone = $timezone;
        return $this;
    }
    /**
     * Наименование филиала
     *
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title;
    }
    /**
     * Наименование филиала
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
}