<?php

namespace glook\PecomSdk\Generated\Model;

class CargoStatusInfo
{
    /**
     * Дата и время крайнего срока прибытия в отделение выдачи клиенту/передачи на доставку Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     *
     * @var string|null
     */
    protected $arrivalContractDateTime;
    /**
     * Дата и время прибытия Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     *
     * @var string|null
     */
    protected $arrivalDateTime;
    /**
     * Дата и время прибытия в отделение назначения, т.е. окончание межтерминальной перевозки внутри ПЭК Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     *
     * @var string|null
     */
    protected $arrivalPlanDateTime;
    /**
     * Статус груза. Возможные значения: `Аннулировано до приемки груза`, `Заявка на забор зарегистрирована`, `Ожидается передача груза от отправителя`, `Принят к перевозке`, `Принят на ПВЗ`, `Возвращен отправителю`, `Оформлен`, `В пути`, `В пути на терминал`, `Прибыл`, `Прибыл частично`, `Разгружается. Ожидайте оповещения`, `Выполняется адресная доставка`, `Выдан получателю`, `Доставлен получателю`, `Отправлен на возврат`, `Утилизирован`, `Изъят на таможне`, `Возвращен отправителю` , `Выдан ( мест { количество_мест } из { количество_мест } )`
     *
     * @var string|null
     */
    protected $cargoStatus;
    /**
     * `id` статуса груза. Справочник доступен через метод [`/cargos/statustables/`](#cargos_statustables)
     *
     * @var int|null
     */
    protected $cargoStatusId;
    /**
     * Дата и время плановой доставки до двери, т.е. дата и время, на которые назначена последняя миля
     *
     * @var string|null
     */
    protected $deliveryPlanDate;
    /**
     * Дата и время выдачи с основного отделения филиала получения (на доставку, клиенту) Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     *
     * @var string|null
     */
    protected $giveOutDateTime;
    /**
     * Плановая дата и время забора груза Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     *
     * @var string|null
     */
    protected $intakePlanDateTime;
    /**
     * Приблизительные координаты
     *
     * @var string|null
     */
    protected $position;
    /**
     * Дата получения груза грузополучателем (с учетом перенаправок) Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     *
     * @var string|null
     */
    protected $receivedByClientDateTime;
    /**
     * Получение возможно после предъявление документа подтверждающего личность, указанного отправителем, иначе по коду СМС (`true` — если получение по документу возможно, `false` — в противном случае) (только в [`/statusbypositionbarcodes/`](#tag/cargos/POST/cargos/statusbypositionbarcodes/))
     *
     * @var bool|null
     */
    protected $receivingByDocument;
    /**
     * Возможно получение по СМС коду (`true` — если возможно, `false` — если невозможно) (только в [`/statusbypositionbarcodes/`](#tag/cargos/POST/cargos/statusbypositionbarcodes/))
     *
     * @var bool|null
     */
    protected $receivingBySMSCode;
    /**
     * Дата и время отправки груза Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     *
     * @var string|null
     */
    protected $sendingDateTime;
    /**
     * В актуальной версии протокола не используется. Для получения истории используйте метод [`/statusfullhistory/`](#cargos_statusfullhistory)
     *
     * @var mixed[][]|null
     */
    protected $statuses;
    /**
     * Дата начала платного хранения
     *
     * @var string|null
     */
    protected $storageStartPlanDate;
    /**
     * Дата и время сдачи груза Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     *
     * @var string|null
     */
    protected $takeOnStockDateTime;
    /**
     * Состояние упаковки при сдаче груза
     *
     * @var string|null
     */
    protected $takeOnStockPackageState;
    /**
     * Плановая дата и время сдачи груза на склад Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     *
     * @var string|null
     */
    protected $takeOnStockPlanDateTime;
    /**
     * Статус по оповещению
     *
     * @var string|null
     */
    protected $callStatus;
    /**
     * Дата статуса по оповещению Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     *
     * @var string|null
     */
    protected $callStatusDateTime;
    /**
     * Дата и время крайнего срока прибытия в отделение выдачи клиенту/передачи на доставку Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     *
     * @return string|null
     */
    public function getArrivalContractDateTime() : ?string
    {
        return $this->arrivalContractDateTime;
    }
    /**
     * Дата и время крайнего срока прибытия в отделение выдачи клиенту/передачи на доставку Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     *
     * @param string|null $arrivalContractDateTime
     *
     * @return self
     */
    public function setArrivalContractDateTime(?string $arrivalContractDateTime) : self
    {
        $this->arrivalContractDateTime = $arrivalContractDateTime;
        return $this;
    }
    /**
     * Дата и время прибытия Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     *
     * @return string|null
     */
    public function getArrivalDateTime() : ?string
    {
        return $this->arrivalDateTime;
    }
    /**
     * Дата и время прибытия Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     *
     * @param string|null $arrivalDateTime
     *
     * @return self
     */
    public function setArrivalDateTime(?string $arrivalDateTime) : self
    {
        $this->arrivalDateTime = $arrivalDateTime;
        return $this;
    }
    /**
     * Дата и время прибытия в отделение назначения, т.е. окончание межтерминальной перевозки внутри ПЭК Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     *
     * @return string|null
     */
    public function getArrivalPlanDateTime() : ?string
    {
        return $this->arrivalPlanDateTime;
    }
    /**
     * Дата и время прибытия в отделение назначения, т.е. окончание межтерминальной перевозки внутри ПЭК Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     *
     * @param string|null $arrivalPlanDateTime
     *
     * @return self
     */
    public function setArrivalPlanDateTime(?string $arrivalPlanDateTime) : self
    {
        $this->arrivalPlanDateTime = $arrivalPlanDateTime;
        return $this;
    }
    /**
     * Статус груза. Возможные значения: `Аннулировано до приемки груза`, `Заявка на забор зарегистрирована`, `Ожидается передача груза от отправителя`, `Принят к перевозке`, `Принят на ПВЗ`, `Возвращен отправителю`, `Оформлен`, `В пути`, `В пути на терминал`, `Прибыл`, `Прибыл частично`, `Разгружается. Ожидайте оповещения`, `Выполняется адресная доставка`, `Выдан получателю`, `Доставлен получателю`, `Отправлен на возврат`, `Утилизирован`, `Изъят на таможне`, `Возвращен отправителю` , `Выдан ( мест { количество_мест } из { количество_мест } )`
     *
     * @return string|null
     */
    public function getCargoStatus() : ?string
    {
        return $this->cargoStatus;
    }
    /**
     * Статус груза. Возможные значения: `Аннулировано до приемки груза`, `Заявка на забор зарегистрирована`, `Ожидается передача груза от отправителя`, `Принят к перевозке`, `Принят на ПВЗ`, `Возвращен отправителю`, `Оформлен`, `В пути`, `В пути на терминал`, `Прибыл`, `Прибыл частично`, `Разгружается. Ожидайте оповещения`, `Выполняется адресная доставка`, `Выдан получателю`, `Доставлен получателю`, `Отправлен на возврат`, `Утилизирован`, `Изъят на таможне`, `Возвращен отправителю` , `Выдан ( мест { количество_мест } из { количество_мест } )`
     *
     * @param string|null $cargoStatus
     *
     * @return self
     */
    public function setCargoStatus(?string $cargoStatus) : self
    {
        $this->cargoStatus = $cargoStatus;
        return $this;
    }
    /**
     * `id` статуса груза. Справочник доступен через метод [`/cargos/statustables/`](#cargos_statustables)
     *
     * @return int|null
     */
    public function getCargoStatusId() : ?int
    {
        return $this->cargoStatusId;
    }
    /**
     * `id` статуса груза. Справочник доступен через метод [`/cargos/statustables/`](#cargos_statustables)
     *
     * @param int|null $cargoStatusId
     *
     * @return self
     */
    public function setCargoStatusId(?int $cargoStatusId) : self
    {
        $this->cargoStatusId = $cargoStatusId;
        return $this;
    }
    /**
     * Дата и время плановой доставки до двери, т.е. дата и время, на которые назначена последняя миля
     *
     * @return string|null
     */
    public function getDeliveryPlanDate() : ?string
    {
        return $this->deliveryPlanDate;
    }
    /**
     * Дата и время плановой доставки до двери, т.е. дата и время, на которые назначена последняя миля
     *
     * @param string|null $deliveryPlanDate
     *
     * @return self
     */
    public function setDeliveryPlanDate(?string $deliveryPlanDate) : self
    {
        $this->deliveryPlanDate = $deliveryPlanDate;
        return $this;
    }
    /**
     * Дата и время выдачи с основного отделения филиала получения (на доставку, клиенту) Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     *
     * @return string|null
     */
    public function getGiveOutDateTime() : ?string
    {
        return $this->giveOutDateTime;
    }
    /**
     * Дата и время выдачи с основного отделения филиала получения (на доставку, клиенту) Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     *
     * @param string|null $giveOutDateTime
     *
     * @return self
     */
    public function setGiveOutDateTime(?string $giveOutDateTime) : self
    {
        $this->giveOutDateTime = $giveOutDateTime;
        return $this;
    }
    /**
     * Плановая дата и время забора груза Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     *
     * @return string|null
     */
    public function getIntakePlanDateTime() : ?string
    {
        return $this->intakePlanDateTime;
    }
    /**
     * Плановая дата и время забора груза Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     *
     * @param string|null $intakePlanDateTime
     *
     * @return self
     */
    public function setIntakePlanDateTime(?string $intakePlanDateTime) : self
    {
        $this->intakePlanDateTime = $intakePlanDateTime;
        return $this;
    }
    /**
     * Приблизительные координаты
     *
     * @return string|null
     */
    public function getPosition() : ?string
    {
        return $this->position;
    }
    /**
     * Приблизительные координаты
     *
     * @param string|null $position
     *
     * @return self
     */
    public function setPosition(?string $position) : self
    {
        $this->position = $position;
        return $this;
    }
    /**
     * Дата получения груза грузополучателем (с учетом перенаправок) Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     *
     * @return string|null
     */
    public function getReceivedByClientDateTime() : ?string
    {
        return $this->receivedByClientDateTime;
    }
    /**
     * Дата получения груза грузополучателем (с учетом перенаправок) Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     *
     * @param string|null $receivedByClientDateTime
     *
     * @return self
     */
    public function setReceivedByClientDateTime(?string $receivedByClientDateTime) : self
    {
        $this->receivedByClientDateTime = $receivedByClientDateTime;
        return $this;
    }
    /**
     * Получение возможно после предъявление документа подтверждающего личность, указанного отправителем, иначе по коду СМС (`true` — если получение по документу возможно, `false` — в противном случае) (только в [`/statusbypositionbarcodes/`](#tag/cargos/POST/cargos/statusbypositionbarcodes/))
     *
     * @return bool|null
     */
    public function getReceivingByDocument() : ?bool
    {
        return $this->receivingByDocument;
    }
    /**
     * Получение возможно после предъявление документа подтверждающего личность, указанного отправителем, иначе по коду СМС (`true` — если получение по документу возможно, `false` — в противном случае) (только в [`/statusbypositionbarcodes/`](#tag/cargos/POST/cargos/statusbypositionbarcodes/))
     *
     * @param bool|null $receivingByDocument
     *
     * @return self
     */
    public function setReceivingByDocument(?bool $receivingByDocument) : self
    {
        $this->receivingByDocument = $receivingByDocument;
        return $this;
    }
    /**
     * Возможно получение по СМС коду (`true` — если возможно, `false` — если невозможно) (только в [`/statusbypositionbarcodes/`](#tag/cargos/POST/cargos/statusbypositionbarcodes/))
     *
     * @return bool|null
     */
    public function getReceivingBySMSCode() : ?bool
    {
        return $this->receivingBySMSCode;
    }
    /**
     * Возможно получение по СМС коду (`true` — если возможно, `false` — если невозможно) (только в [`/statusbypositionbarcodes/`](#tag/cargos/POST/cargos/statusbypositionbarcodes/))
     *
     * @param bool|null $receivingBySMSCode
     *
     * @return self
     */
    public function setReceivingBySMSCode(?bool $receivingBySMSCode) : self
    {
        $this->receivingBySMSCode = $receivingBySMSCode;
        return $this;
    }
    /**
     * Дата и время отправки груза Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     *
     * @return string|null
     */
    public function getSendingDateTime() : ?string
    {
        return $this->sendingDateTime;
    }
    /**
     * Дата и время отправки груза Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     *
     * @param string|null $sendingDateTime
     *
     * @return self
     */
    public function setSendingDateTime(?string $sendingDateTime) : self
    {
        $this->sendingDateTime = $sendingDateTime;
        return $this;
    }
    /**
     * В актуальной версии протокола не используется. Для получения истории используйте метод [`/statusfullhistory/`](#cargos_statusfullhistory)
     *
     * @return mixed[][]|null
     */
    public function getStatuses() : ?array
    {
        return $this->statuses;
    }
    /**
     * В актуальной версии протокола не используется. Для получения истории используйте метод [`/statusfullhistory/`](#cargos_statusfullhistory)
     *
     * @param mixed[][]|null $statuses
     *
     * @return self
     */
    public function setStatuses(?array $statuses) : self
    {
        $this->statuses = $statuses;
        return $this;
    }
    /**
     * Дата начала платного хранения
     *
     * @return string|null
     */
    public function getStorageStartPlanDate() : ?string
    {
        return $this->storageStartPlanDate;
    }
    /**
     * Дата начала платного хранения
     *
     * @param string|null $storageStartPlanDate
     *
     * @return self
     */
    public function setStorageStartPlanDate(?string $storageStartPlanDate) : self
    {
        $this->storageStartPlanDate = $storageStartPlanDate;
        return $this;
    }
    /**
     * Дата и время сдачи груза Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     *
     * @return string|null
     */
    public function getTakeOnStockDateTime() : ?string
    {
        return $this->takeOnStockDateTime;
    }
    /**
     * Дата и время сдачи груза Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     *
     * @param string|null $takeOnStockDateTime
     *
     * @return self
     */
    public function setTakeOnStockDateTime(?string $takeOnStockDateTime) : self
    {
        $this->takeOnStockDateTime = $takeOnStockDateTime;
        return $this;
    }
    /**
     * Состояние упаковки при сдаче груза
     *
     * @return string|null
     */
    public function getTakeOnStockPackageState() : ?string
    {
        return $this->takeOnStockPackageState;
    }
    /**
     * Состояние упаковки при сдаче груза
     *
     * @param string|null $takeOnStockPackageState
     *
     * @return self
     */
    public function setTakeOnStockPackageState(?string $takeOnStockPackageState) : self
    {
        $this->takeOnStockPackageState = $takeOnStockPackageState;
        return $this;
    }
    /**
     * Плановая дата и время сдачи груза на склад Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     *
     * @return string|null
     */
    public function getTakeOnStockPlanDateTime() : ?string
    {
        return $this->takeOnStockPlanDateTime;
    }
    /**
     * Плановая дата и время сдачи груза на склад Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     *
     * @param string|null $takeOnStockPlanDateTime
     *
     * @return self
     */
    public function setTakeOnStockPlanDateTime(?string $takeOnStockPlanDateTime) : self
    {
        $this->takeOnStockPlanDateTime = $takeOnStockPlanDateTime;
        return $this;
    }
    /**
     * Статус по оповещению
     *
     * @return string|null
     */
    public function getCallStatus() : ?string
    {
        return $this->callStatus;
    }
    /**
     * Статус по оповещению
     *
     * @param string|null $callStatus
     *
     * @return self
     */
    public function setCallStatus(?string $callStatus) : self
    {
        $this->callStatus = $callStatus;
        return $this;
    }
    /**
     * Дата статуса по оповещению Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     *
     * @return string|null
     */
    public function getCallStatusDateTime() : ?string
    {
        return $this->callStatusDateTime;
    }
    /**
     * Дата статуса по оповещению Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     *
     * @param string|null $callStatusDateTime
     *
     * @return self
     */
    public function setCallStatusDateTime(?string $callStatusDateTime) : self
    {
        $this->callStatusDateTime = $callStatusDateTime;
        return $this;
    }
}