<?php

namespace glook\PecomSdk\Generated\Model;

class PreregistrationPickUpDetails
{
    /**
     * Адрес, по которому находятся документы на получение груза. Имеет смысл заполнять только при указании в поле `addressStockComment` комментария по забору документов по другому адресу. Услуга оказывается за дополнительную плату, поле необязательно.
     *
     * @var null|string
     */
    protected $addressForDocuments;

    /**
     * Комментарий к забору документов по другому адресу.
     *
     * @var null|string
     */
    protected $addressForDocumentsComment;

    /**
     * Произвольная пометка для операции забора, поле необязательно. Если для получения груза нужно предварительно получить документы по другому адресу, то в данном поле дополнительно необходимо указать: "Требуется забор документов на другом адресе".
     *
     * @var null|string
     */
    protected $addressStockComment;

    /**
     * Метры переноски груза.
     *
     * @var null|int
     */
    protected $carryingDistance;

    /**
     * @var null|PreregistrationCoordinates
     */
    protected $coordinates;

    /**
     * Время начала  перерыва, поле необязательно.
     *
     * @var null|string
     */
    protected $dinnerFrom;

    /**
     * Время окончания перерыва, поле необязательно.
     *
     * @var null|string
     */
    protected $dinnerTo;

    /**
     * Этаж, с которого необходимо забрать груз, поле необязательно.
     *
     * @var null|int
     */
    protected $floor;

    /**
     * Для получения груза необходима доверенность «ПЭК». True - необходима доверенность ПЭК, false - необходима доверенность клиента.
     *
     * @var null|bool
     */
    protected $isAuthorityNeeded;

    /**
     * Есть лифт
     *
     * @var null|bool
     */
    protected $isElevator;

    /**
     * Необходима погрузка с использованием Гидролифта  силами «ПЭК», поле необязательно. По умолчанию false. Услуга предоставляется только в городах Москва, Санкт-Петербург и Калининград.
     *
     * @var null|bool
     */
    protected $isHydrolift;

    /**
     * Необходима погрузка силами «ПЭК», поле необязательно. По умолчанию false.
     *
     * @var null|bool
     */
    protected $isLoading;

    /**
     * Необходима открытая машина, поле необязательно, если не указано считается равным false.
     *
     * @var null|bool
     */
    protected $isOpenCar;

    /**
     * Необходима боковая погрузка, поле необязательно, если не указано считается равным false.
     *
     * @var null|bool
     */
    protected $isSideLoad;

    /**
     * Необходима машина со специальным оборудованием, поле необязательно, если не указано считается равным false.
     *
     * @var null|bool
     */
    protected $isSpecialEquipment;

    /**
     * Необходима растентовка, поле необязательно, если не указано считается равным false.
     *
     * @var null|bool
     */
    protected $isUncovered;

    /**
     * Время начала интервала забора груза, поле необязательно. Обязательно для type = 7 «ДТС Автоперевозка».
     *
     * @var null|string
     */
    protected $periodTimeFrom;

    /**
     * Время окончания интервала забора груза, поле необязательно. Обязательно для type = 7 «ДТС Автоперевозка».
     *
     * @var null|string
     */
    protected $periodTimeTo;

    /**
     * Адрес, по которому находятся документы на получение груза. Имеет смысл заполнять только при указании в поле `addressStockComment` комментария по забору документов по другому адресу. Услуга оказывается за дополнительную плату, поле необязательно.
     */
    public function getAddressForDocuments(): ?string
    {
        return $this->addressForDocuments;
    }

    /**
     * Адрес, по которому находятся документы на получение груза. Имеет смысл заполнять только при указании в поле `addressStockComment` комментария по забору документов по другому адресу. Услуга оказывается за дополнительную плату, поле необязательно.
     */
    public function setAddressForDocuments(?string $addressForDocuments): self
    {
        $this->addressForDocuments = $addressForDocuments;

        return $this;
    }

    /**
     * Комментарий к забору документов по другому адресу.
     */
    public function getAddressForDocumentsComment(): ?string
    {
        return $this->addressForDocumentsComment;
    }

    /**
     * Комментарий к забору документов по другому адресу.
     */
    public function setAddressForDocumentsComment(?string $addressForDocumentsComment): self
    {
        $this->addressForDocumentsComment = $addressForDocumentsComment;

        return $this;
    }

    /**
     * Произвольная пометка для операции забора, поле необязательно. Если для получения груза нужно предварительно получить документы по другому адресу, то в данном поле дополнительно необходимо указать: "Требуется забор документов на другом адресе".
     */
    public function getAddressStockComment(): ?string
    {
        return $this->addressStockComment;
    }

    /**
     * Произвольная пометка для операции забора, поле необязательно. Если для получения груза нужно предварительно получить документы по другому адресу, то в данном поле дополнительно необходимо указать: "Требуется забор документов на другом адресе".
     */
    public function setAddressStockComment(?string $addressStockComment): self
    {
        $this->addressStockComment = $addressStockComment;

        return $this;
    }

    /**
     * Метры переноски груза.
     */
    public function getCarryingDistance(): ?int
    {
        return $this->carryingDistance;
    }

    /**
     * Метры переноски груза.
     */
    public function setCarryingDistance(?int $carryingDistance): self
    {
        $this->carryingDistance = $carryingDistance;

        return $this;
    }

    public function getCoordinates(): ?PreregistrationCoordinates
    {
        return $this->coordinates;
    }

    public function setCoordinates(?PreregistrationCoordinates $coordinates): self
    {
        $this->coordinates = $coordinates;

        return $this;
    }

    /**
     * Время начала  перерыва, поле необязательно.
     */
    public function getDinnerFrom(): ?string
    {
        return $this->dinnerFrom;
    }

    /**
     * Время начала  перерыва, поле необязательно.
     */
    public function setDinnerFrom(?string $dinnerFrom): self
    {
        $this->dinnerFrom = $dinnerFrom;

        return $this;
    }

    /**
     * Время окончания перерыва, поле необязательно.
     */
    public function getDinnerTo(): ?string
    {
        return $this->dinnerTo;
    }

    /**
     * Время окончания перерыва, поле необязательно.
     */
    public function setDinnerTo(?string $dinnerTo): self
    {
        $this->dinnerTo = $dinnerTo;

        return $this;
    }

    /**
     * Этаж, с которого необходимо забрать груз, поле необязательно.
     */
    public function getFloor(): ?int
    {
        return $this->floor;
    }

    /**
     * Этаж, с которого необходимо забрать груз, поле необязательно.
     */
    public function setFloor(?int $floor): self
    {
        $this->floor = $floor;

        return $this;
    }

    /**
     * Для получения груза необходима доверенность «ПЭК». True - необходима доверенность ПЭК, false - необходима доверенность клиента.
     */
    public function getIsAuthorityNeeded(): ?bool
    {
        return $this->isAuthorityNeeded;
    }

    /**
     * Для получения груза необходима доверенность «ПЭК». True - необходима доверенность ПЭК, false - необходима доверенность клиента.
     */
    public function setIsAuthorityNeeded(?bool $isAuthorityNeeded): self
    {
        $this->isAuthorityNeeded = $isAuthorityNeeded;

        return $this;
    }

    /**
     * Есть лифт
     */
    public function getIsElevator(): ?bool
    {
        return $this->isElevator;
    }

    /**
     * Есть лифт
     */
    public function setIsElevator(?bool $isElevator): self
    {
        $this->isElevator = $isElevator;

        return $this;
    }

    /**
     * Необходима погрузка с использованием Гидролифта  силами «ПЭК», поле необязательно. По умолчанию false. Услуга предоставляется только в городах Москва, Санкт-Петербург и Калининград.
     */
    public function getIsHydrolift(): ?bool
    {
        return $this->isHydrolift;
    }

    /**
     * Необходима погрузка с использованием Гидролифта  силами «ПЭК», поле необязательно. По умолчанию false. Услуга предоставляется только в городах Москва, Санкт-Петербург и Калининград.
     */
    public function setIsHydrolift(?bool $isHydrolift): self
    {
        $this->isHydrolift = $isHydrolift;

        return $this;
    }

    /**
     * Необходима погрузка силами «ПЭК», поле необязательно. По умолчанию false.
     */
    public function getIsLoading(): ?bool
    {
        return $this->isLoading;
    }

    /**
     * Необходима погрузка силами «ПЭК», поле необязательно. По умолчанию false.
     */
    public function setIsLoading(?bool $isLoading): self
    {
        $this->isLoading = $isLoading;

        return $this;
    }

    /**
     * Необходима открытая машина, поле необязательно, если не указано считается равным false.
     */
    public function getIsOpenCar(): ?bool
    {
        return $this->isOpenCar;
    }

    /**
     * Необходима открытая машина, поле необязательно, если не указано считается равным false.
     */
    public function setIsOpenCar(?bool $isOpenCar): self
    {
        $this->isOpenCar = $isOpenCar;

        return $this;
    }

    /**
     * Необходима боковая погрузка, поле необязательно, если не указано считается равным false.
     */
    public function getIsSideLoad(): ?bool
    {
        return $this->isSideLoad;
    }

    /**
     * Необходима боковая погрузка, поле необязательно, если не указано считается равным false.
     */
    public function setIsSideLoad(?bool $isSideLoad): self
    {
        $this->isSideLoad = $isSideLoad;

        return $this;
    }

    /**
     * Необходима машина со специальным оборудованием, поле необязательно, если не указано считается равным false.
     */
    public function getIsSpecialEquipment(): ?bool
    {
        return $this->isSpecialEquipment;
    }

    /**
     * Необходима машина со специальным оборудованием, поле необязательно, если не указано считается равным false.
     */
    public function setIsSpecialEquipment(?bool $isSpecialEquipment): self
    {
        $this->isSpecialEquipment = $isSpecialEquipment;

        return $this;
    }

    /**
     * Необходима растентовка, поле необязательно, если не указано считается равным false.
     */
    public function getIsUncovered(): ?bool
    {
        return $this->isUncovered;
    }

    /**
     * Необходима растентовка, поле необязательно, если не указано считается равным false.
     */
    public function setIsUncovered(?bool $isUncovered): self
    {
        $this->isUncovered = $isUncovered;

        return $this;
    }

    /**
     * Время начала интервала забора груза, поле необязательно. Обязательно для type = 7 «ДТС Автоперевозка».
     */
    public function getPeriodTimeFrom(): ?string
    {
        return $this->periodTimeFrom;
    }

    /**
     * Время начала интервала забора груза, поле необязательно. Обязательно для type = 7 «ДТС Автоперевозка».
     */
    public function setPeriodTimeFrom(?string $periodTimeFrom): self
    {
        $this->periodTimeFrom = $periodTimeFrom;

        return $this;
    }

    /**
     * Время окончания интервала забора груза, поле необязательно. Обязательно для type = 7 «ДТС Автоперевозка».
     */
    public function getPeriodTimeTo(): ?string
    {
        return $this->periodTimeTo;
    }

    /**
     * Время окончания интервала забора груза, поле необязательно. Обязательно для type = 7 «ДТС Автоперевозка».
     */
    public function setPeriodTimeTo(?string $periodTimeTo): self
    {
        $this->periodTimeTo = $periodTimeTo;

        return $this;
    }
}
