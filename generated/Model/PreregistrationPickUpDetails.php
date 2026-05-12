<?php

namespace glook\PecomSdk\Generated\Model;

class PreregistrationPickUpDetails
{
    /**
     * Адрес, по которому находятся документы на получение груза. Имеет смысл заполнять только при указании в поле `addressStockComment` комментария по забору документов по другому адресу. Услуга оказывается за дополнительную плату, поле необязательно
     *
     * @var string|null
     */
    protected $addressForDocuments;
    /**
     * Комментарий к забору документов по другому адресу
     *
     * @var string|null
     */
    protected $addressForDocumentsComment;
    /**
     * Произвольная пометка для операции забора, поле необязательно. Если для получения груза нужно предварительно получить документы по другому адресу, то в данном поле дополнительно необходимо указать: "Требуется забор документов на другом адресе".
     *
     * @var string|null
     */
    protected $addressStockComment;
    /**
     * Метры переноски груза
     *
     * @var int|null
     */
    protected $carryingDistance;
    /**
     * 
     *
     * @var PreregistrationCoordinates|null
     */
    protected $coordinates;
    /**
     * Время начала  перерыва, поле необязательно
     *
     * @var string|null
     */
    protected $dinnerFrom;
    /**
     * Время окончания перерыва, поле необязательно
     *
     * @var string|null
     */
    protected $dinnerTo;
    /**
     * Этаж, с которого необходимо забрать груз, поле необязательно.
     *
     * @var int|null
     */
    protected $floor;
    /**
     * Для получения груза необходима доверенность «ПЭК». True - необходима доверенность ПЭК, false - необходима доверенность клиента
     *
     * @var bool|null
     */
    protected $isAuthorityNeeded;
    /**
     * Есть лифт
     *
     * @var bool|null
     */
    protected $isElevator;
    /**
     * Необходима погрузка с использованием Гидролифта  силами «ПЭК», поле необязательно. По умолчанию false. Услуга предоставляется только в городах Москва, Санкт-Петербург и Калининград.
     *
     * @var bool|null
     */
    protected $isHydrolift;
    /**
     * Необходима погрузка силами «ПЭК», поле необязательно. По умолчанию false.
     *
     * @var bool|null
     */
    protected $isLoading;
    /**
     * Необходима открытая машина, поле необязательно, если не указано считается равным false
     *
     * @var bool|null
     */
    protected $isOpenCar;
    /**
     * Необходима боковая погрузка, поле необязательно, если не указано считается равным false
     *
     * @var bool|null
     */
    protected $isSideLoad;
    /**
     * Необходима машина со специальным оборудованием, поле необязательно, если не указано считается равным false
     *
     * @var bool|null
     */
    protected $isSpecialEquipment;
    /**
     * Необходима растентовка, поле необязательно, если не указано считается равным false
     *
     * @var bool|null
     */
    protected $isUncovered;
    /**
     * Время начала интервала забора груза, поле необязательно. Обязательно для type = 7 «ДТС Автоперевозка»
     *
     * @var string|null
     */
    protected $periodTimeFrom;
    /**
     * Время окончания интервала забора груза, поле необязательно. Обязательно для type = 7 «ДТС Автоперевозка»
     *
     * @var string|null
     */
    protected $periodTimeTo;
    /**
     * Адрес, по которому находятся документы на получение груза. Имеет смысл заполнять только при указании в поле `addressStockComment` комментария по забору документов по другому адресу. Услуга оказывается за дополнительную плату, поле необязательно
     *
     * @return string|null
     */
    public function getAddressForDocuments() : ?string
    {
        return $this->addressForDocuments;
    }
    /**
     * Адрес, по которому находятся документы на получение груза. Имеет смысл заполнять только при указании в поле `addressStockComment` комментария по забору документов по другому адресу. Услуга оказывается за дополнительную плату, поле необязательно
     *
     * @param string|null $addressForDocuments
     *
     * @return self
     */
    public function setAddressForDocuments(?string $addressForDocuments) : self
    {
        $this->addressForDocuments = $addressForDocuments;
        return $this;
    }
    /**
     * Комментарий к забору документов по другому адресу
     *
     * @return string|null
     */
    public function getAddressForDocumentsComment() : ?string
    {
        return $this->addressForDocumentsComment;
    }
    /**
     * Комментарий к забору документов по другому адресу
     *
     * @param string|null $addressForDocumentsComment
     *
     * @return self
     */
    public function setAddressForDocumentsComment(?string $addressForDocumentsComment) : self
    {
        $this->addressForDocumentsComment = $addressForDocumentsComment;
        return $this;
    }
    /**
     * Произвольная пометка для операции забора, поле необязательно. Если для получения груза нужно предварительно получить документы по другому адресу, то в данном поле дополнительно необходимо указать: "Требуется забор документов на другом адресе".
     *
     * @return string|null
     */
    public function getAddressStockComment() : ?string
    {
        return $this->addressStockComment;
    }
    /**
     * Произвольная пометка для операции забора, поле необязательно. Если для получения груза нужно предварительно получить документы по другому адресу, то в данном поле дополнительно необходимо указать: "Требуется забор документов на другом адресе".
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
     * Метры переноски груза
     *
     * @return int|null
     */
    public function getCarryingDistance() : ?int
    {
        return $this->carryingDistance;
    }
    /**
     * Метры переноски груза
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
     * @return PreregistrationCoordinates|null
     */
    public function getCoordinates() : ?PreregistrationCoordinates
    {
        return $this->coordinates;
    }
    /**
     * 
     *
     * @param PreregistrationCoordinates|null $coordinates
     *
     * @return self
     */
    public function setCoordinates(?PreregistrationCoordinates $coordinates) : self
    {
        $this->coordinates = $coordinates;
        return $this;
    }
    /**
     * Время начала  перерыва, поле необязательно
     *
     * @return string|null
     */
    public function getDinnerFrom() : ?string
    {
        return $this->dinnerFrom;
    }
    /**
     * Время начала  перерыва, поле необязательно
     *
     * @param string|null $dinnerFrom
     *
     * @return self
     */
    public function setDinnerFrom(?string $dinnerFrom) : self
    {
        $this->dinnerFrom = $dinnerFrom;
        return $this;
    }
    /**
     * Время окончания перерыва, поле необязательно
     *
     * @return string|null
     */
    public function getDinnerTo() : ?string
    {
        return $this->dinnerTo;
    }
    /**
     * Время окончания перерыва, поле необязательно
     *
     * @param string|null $dinnerTo
     *
     * @return self
     */
    public function setDinnerTo(?string $dinnerTo) : self
    {
        $this->dinnerTo = $dinnerTo;
        return $this;
    }
    /**
     * Этаж, с которого необходимо забрать груз, поле необязательно.
     *
     * @return int|null
     */
    public function getFloor() : ?int
    {
        return $this->floor;
    }
    /**
     * Этаж, с которого необходимо забрать груз, поле необязательно.
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
     * Для получения груза необходима доверенность «ПЭК». True - необходима доверенность ПЭК, false - необходима доверенность клиента
     *
     * @return bool|null
     */
    public function getIsAuthorityNeeded() : ?bool
    {
        return $this->isAuthorityNeeded;
    }
    /**
     * Для получения груза необходима доверенность «ПЭК». True - необходима доверенность ПЭК, false - необходима доверенность клиента
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
     * Есть лифт
     *
     * @return bool|null
     */
    public function getIsElevator() : ?bool
    {
        return $this->isElevator;
    }
    /**
     * Есть лифт
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
     * Необходима погрузка с использованием Гидролифта  силами «ПЭК», поле необязательно. По умолчанию false. Услуга предоставляется только в городах Москва, Санкт-Петербург и Калининград.
     *
     * @return bool|null
     */
    public function getIsHydrolift() : ?bool
    {
        return $this->isHydrolift;
    }
    /**
     * Необходима погрузка с использованием Гидролифта  силами «ПЭК», поле необязательно. По умолчанию false. Услуга предоставляется только в городах Москва, Санкт-Петербург и Калининград.
     *
     * @param bool|null $isHydrolift
     *
     * @return self
     */
    public function setIsHydrolift(?bool $isHydrolift) : self
    {
        $this->isHydrolift = $isHydrolift;
        return $this;
    }
    /**
     * Необходима погрузка силами «ПЭК», поле необязательно. По умолчанию false.
     *
     * @return bool|null
     */
    public function getIsLoading() : ?bool
    {
        return $this->isLoading;
    }
    /**
     * Необходима погрузка силами «ПЭК», поле необязательно. По умолчанию false.
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
     * Необходима открытая машина, поле необязательно, если не указано считается равным false
     *
     * @return bool|null
     */
    public function getIsOpenCar() : ?bool
    {
        return $this->isOpenCar;
    }
    /**
     * Необходима открытая машина, поле необязательно, если не указано считается равным false
     *
     * @param bool|null $isOpenCar
     *
     * @return self
     */
    public function setIsOpenCar(?bool $isOpenCar) : self
    {
        $this->isOpenCar = $isOpenCar;
        return $this;
    }
    /**
     * Необходима боковая погрузка, поле необязательно, если не указано считается равным false
     *
     * @return bool|null
     */
    public function getIsSideLoad() : ?bool
    {
        return $this->isSideLoad;
    }
    /**
     * Необходима боковая погрузка, поле необязательно, если не указано считается равным false
     *
     * @param bool|null $isSideLoad
     *
     * @return self
     */
    public function setIsSideLoad(?bool $isSideLoad) : self
    {
        $this->isSideLoad = $isSideLoad;
        return $this;
    }
    /**
     * Необходима машина со специальным оборудованием, поле необязательно, если не указано считается равным false
     *
     * @return bool|null
     */
    public function getIsSpecialEquipment() : ?bool
    {
        return $this->isSpecialEquipment;
    }
    /**
     * Необходима машина со специальным оборудованием, поле необязательно, если не указано считается равным false
     *
     * @param bool|null $isSpecialEquipment
     *
     * @return self
     */
    public function setIsSpecialEquipment(?bool $isSpecialEquipment) : self
    {
        $this->isSpecialEquipment = $isSpecialEquipment;
        return $this;
    }
    /**
     * Необходима растентовка, поле необязательно, если не указано считается равным false
     *
     * @return bool|null
     */
    public function getIsUncovered() : ?bool
    {
        return $this->isUncovered;
    }
    /**
     * Необходима растентовка, поле необязательно, если не указано считается равным false
     *
     * @param bool|null $isUncovered
     *
     * @return self
     */
    public function setIsUncovered(?bool $isUncovered) : self
    {
        $this->isUncovered = $isUncovered;
        return $this;
    }
    /**
     * Время начала интервала забора груза, поле необязательно. Обязательно для type = 7 «ДТС Автоперевозка»
     *
     * @return string|null
     */
    public function getPeriodTimeFrom() : ?string
    {
        return $this->periodTimeFrom;
    }
    /**
     * Время начала интервала забора груза, поле необязательно. Обязательно для type = 7 «ДТС Автоперевозка»
     *
     * @param string|null $periodTimeFrom
     *
     * @return self
     */
    public function setPeriodTimeFrom(?string $periodTimeFrom) : self
    {
        $this->periodTimeFrom = $periodTimeFrom;
        return $this;
    }
    /**
     * Время окончания интервала забора груза, поле необязательно. Обязательно для type = 7 «ДТС Автоперевозка»
     *
     * @return string|null
     */
    public function getPeriodTimeTo() : ?string
    {
        return $this->periodTimeTo;
    }
    /**
     * Время окончания интервала забора груза, поле необязательно. Обязательно для type = 7 «ДТС Автоперевозка»
     *
     * @param string|null $periodTimeTo
     *
     * @return self
     */
    public function setPeriodTimeTo(?string $periodTimeTo) : self
    {
        $this->periodTimeTo = $periodTimeTo;
        return $this;
    }
}