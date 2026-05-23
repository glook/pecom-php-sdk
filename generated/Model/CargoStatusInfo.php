<?php

namespace glook\PecomSdk\Generated\Model;

class CargoStatusInfo
{
    /**
     * Дата и время крайнего срока прибытия в отделение выдачи клиенту/передачи на доставку Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     *
     * @var null|string
     */
    protected $arrivalContractDateTime;

    /**
     * Дата и время прибытия Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     *
     * @var null|string
     */
    protected $arrivalDateTime;

    /**
     * Дата и время прибытия в отделение назначения, т.е. окончание межтерминальной перевозки внутри ПЭК Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     *
     * @var null|string
     */
    protected $arrivalPlanDateTime;

    /**
     * Статус груза. Возможные значения: `Аннулировано до приемки груза`, `Заявка на забор зарегистрирована`, `Ожидается передача груза от отправителя`, `Принят к перевозке`, `Принят на ПВЗ`, `Возвращен отправителю`, `Оформлен`, `В пути`, `В пути на терминал`, `Прибыл`, `Прибыл частично`, `Разгружается. Ожидайте оповещения`, `Выполняется адресная доставка`, `Выдан получателю`, `Доставлен получателю`, `Отправлен на возврат`, `Утилизирован`, `Изъят на таможне`, `Возвращен отправителю` , `Выдан ( мест { количество_мест } из { количество_мест } )`.
     *
     * @var null|string
     */
    protected $cargoStatus;

    /**
     * `id` статуса груза. Справочник доступен через метод [`/cargos/statustables/`](#cargos_statustables).
     *
     * @var null|int
     */
    protected $cargoStatusId;

    /**
     * Дата и время плановой доставки до двери, т.е. дата и время, на которые назначена последняя миля.
     *
     * @var null|string
     */
    protected $deliveryPlanDate;

    /**
     * Дата и время выдачи с основного отделения филиала получения (на доставку, клиенту) Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     *
     * @var null|string
     */
    protected $giveOutDateTime;

    /**
     * Плановая дата и время забора груза Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     *
     * @var null|string
     */
    protected $intakePlanDateTime;

    /**
     * Приблизительные координаты.
     *
     * @var null|string
     */
    protected $position;

    /**
     * Дата получения груза грузополучателем (с учетом перенаправок) Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     *
     * @var null|string
     */
    protected $receivedByClientDateTime;

    /**
     * Получение возможно после предъявление документа подтверждающего личность, указанного отправителем, иначе по коду СМС (`true` — если получение по документу возможно, `false` — в противном случае) (только в [`/statusbypositionbarcodes/`](#tag/cargos/POST/cargos/statusbypositionbarcodes/)).
     *
     * @var null|bool
     */
    protected $receivingByDocument;

    /**
     * Возможно получение по СМС коду (`true` — если возможно, `false` — если невозможно) (только в [`/statusbypositionbarcodes/`](#tag/cargos/POST/cargos/statusbypositionbarcodes/)).
     *
     * @var null|bool
     */
    protected $receivingBySMSCode;

    /**
     * Дата и время отправки груза Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     *
     * @var null|string
     */
    protected $sendingDateTime;

    /**
     * В актуальной версии протокола не используется. Для получения истории используйте метод [`/statusfullhistory/`](#cargos_statusfullhistory).
     *
     * @var null|mixed[][]
     */
    protected $statuses;

    /**
     * Дата начала платного хранения.
     *
     * @var null|string
     */
    protected $storageStartPlanDate;

    /**
     * Дата и время сдачи груза Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     *
     * @var null|string
     */
    protected $takeOnStockDateTime;

    /**
     * Состояние упаковки при сдаче груза.
     *
     * @var null|string
     */
    protected $takeOnStockPackageState;

    /**
     * Плановая дата и время сдачи груза на склад Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     *
     * @var null|string
     */
    protected $takeOnStockPlanDateTime;

    /**
     * Статус по оповещению.
     *
     * @var null|string
     */
    protected $callStatus;

    /**
     * Дата статуса по оповещению Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     *
     * @var null|string
     */
    protected $callStatusDateTime;

    /**
     * Дата и время крайнего срока прибытия в отделение выдачи клиенту/передачи на доставку Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     */
    public function getArrivalContractDateTime(): ?string
    {
        return $this->arrivalContractDateTime;
    }

    /**
     * Дата и время крайнего срока прибытия в отделение выдачи клиенту/передачи на доставку Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     */
    public function setArrivalContractDateTime(?string $arrivalContractDateTime): self
    {
        $this->arrivalContractDateTime = $arrivalContractDateTime;

        return $this;
    }

    /**
     * Дата и время прибытия Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     */
    public function getArrivalDateTime(): ?string
    {
        return $this->arrivalDateTime;
    }

    /**
     * Дата и время прибытия Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     */
    public function setArrivalDateTime(?string $arrivalDateTime): self
    {
        $this->arrivalDateTime = $arrivalDateTime;

        return $this;
    }

    /**
     * Дата и время прибытия в отделение назначения, т.е. окончание межтерминальной перевозки внутри ПЭК Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     */
    public function getArrivalPlanDateTime(): ?string
    {
        return $this->arrivalPlanDateTime;
    }

    /**
     * Дата и время прибытия в отделение назначения, т.е. окончание межтерминальной перевозки внутри ПЭК Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     */
    public function setArrivalPlanDateTime(?string $arrivalPlanDateTime): self
    {
        $this->arrivalPlanDateTime = $arrivalPlanDateTime;

        return $this;
    }

    /**
     * Статус груза. Возможные значения: `Аннулировано до приемки груза`, `Заявка на забор зарегистрирована`, `Ожидается передача груза от отправителя`, `Принят к перевозке`, `Принят на ПВЗ`, `Возвращен отправителю`, `Оформлен`, `В пути`, `В пути на терминал`, `Прибыл`, `Прибыл частично`, `Разгружается. Ожидайте оповещения`, `Выполняется адресная доставка`, `Выдан получателю`, `Доставлен получателю`, `Отправлен на возврат`, `Утилизирован`, `Изъят на таможне`, `Возвращен отправителю` , `Выдан ( мест { количество_мест } из { количество_мест } )`.
     */
    public function getCargoStatus(): ?string
    {
        return $this->cargoStatus;
    }

    /**
     * Статус груза. Возможные значения: `Аннулировано до приемки груза`, `Заявка на забор зарегистрирована`, `Ожидается передача груза от отправителя`, `Принят к перевозке`, `Принят на ПВЗ`, `Возвращен отправителю`, `Оформлен`, `В пути`, `В пути на терминал`, `Прибыл`, `Прибыл частично`, `Разгружается. Ожидайте оповещения`, `Выполняется адресная доставка`, `Выдан получателю`, `Доставлен получателю`, `Отправлен на возврат`, `Утилизирован`, `Изъят на таможне`, `Возвращен отправителю` , `Выдан ( мест { количество_мест } из { количество_мест } )`.
     */
    public function setCargoStatus(?string $cargoStatus): self
    {
        $this->cargoStatus = $cargoStatus;

        return $this;
    }

    /**
     * `id` статуса груза. Справочник доступен через метод [`/cargos/statustables/`](#cargos_statustables).
     */
    public function getCargoStatusId(): ?int
    {
        return $this->cargoStatusId;
    }

    /**
     * `id` статуса груза. Справочник доступен через метод [`/cargos/statustables/`](#cargos_statustables).
     */
    public function setCargoStatusId(?int $cargoStatusId): self
    {
        $this->cargoStatusId = $cargoStatusId;

        return $this;
    }

    /**
     * Дата и время плановой доставки до двери, т.е. дата и время, на которые назначена последняя миля.
     */
    public function getDeliveryPlanDate(): ?string
    {
        return $this->deliveryPlanDate;
    }

    /**
     * Дата и время плановой доставки до двери, т.е. дата и время, на которые назначена последняя миля.
     */
    public function setDeliveryPlanDate(?string $deliveryPlanDate): self
    {
        $this->deliveryPlanDate = $deliveryPlanDate;

        return $this;
    }

    /**
     * Дата и время выдачи с основного отделения филиала получения (на доставку, клиенту) Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     */
    public function getGiveOutDateTime(): ?string
    {
        return $this->giveOutDateTime;
    }

    /**
     * Дата и время выдачи с основного отделения филиала получения (на доставку, клиенту) Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     */
    public function setGiveOutDateTime(?string $giveOutDateTime): self
    {
        $this->giveOutDateTime = $giveOutDateTime;

        return $this;
    }

    /**
     * Плановая дата и время забора груза Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     */
    public function getIntakePlanDateTime(): ?string
    {
        return $this->intakePlanDateTime;
    }

    /**
     * Плановая дата и время забора груза Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     */
    public function setIntakePlanDateTime(?string $intakePlanDateTime): self
    {
        $this->intakePlanDateTime = $intakePlanDateTime;

        return $this;
    }

    /**
     * Приблизительные координаты.
     */
    public function getPosition(): ?string
    {
        return $this->position;
    }

    /**
     * Приблизительные координаты.
     */
    public function setPosition(?string $position): self
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Дата получения груза грузополучателем (с учетом перенаправок) Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     */
    public function getReceivedByClientDateTime(): ?string
    {
        return $this->receivedByClientDateTime;
    }

    /**
     * Дата получения груза грузополучателем (с учетом перенаправок) Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     */
    public function setReceivedByClientDateTime(?string $receivedByClientDateTime): self
    {
        $this->receivedByClientDateTime = $receivedByClientDateTime;

        return $this;
    }

    /**
     * Получение возможно после предъявление документа подтверждающего личность, указанного отправителем, иначе по коду СМС (`true` — если получение по документу возможно, `false` — в противном случае) (только в [`/statusbypositionbarcodes/`](#tag/cargos/POST/cargos/statusbypositionbarcodes/)).
     */
    public function getReceivingByDocument(): ?bool
    {
        return $this->receivingByDocument;
    }

    /**
     * Получение возможно после предъявление документа подтверждающего личность, указанного отправителем, иначе по коду СМС (`true` — если получение по документу возможно, `false` — в противном случае) (только в [`/statusbypositionbarcodes/`](#tag/cargos/POST/cargos/statusbypositionbarcodes/)).
     */
    public function setReceivingByDocument(?bool $receivingByDocument): self
    {
        $this->receivingByDocument = $receivingByDocument;

        return $this;
    }

    /**
     * Возможно получение по СМС коду (`true` — если возможно, `false` — если невозможно) (только в [`/statusbypositionbarcodes/`](#tag/cargos/POST/cargos/statusbypositionbarcodes/)).
     */
    public function getReceivingBySMSCode(): ?bool
    {
        return $this->receivingBySMSCode;
    }

    /**
     * Возможно получение по СМС коду (`true` — если возможно, `false` — если невозможно) (только в [`/statusbypositionbarcodes/`](#tag/cargos/POST/cargos/statusbypositionbarcodes/)).
     */
    public function setReceivingBySMSCode(?bool $receivingBySMSCode): self
    {
        $this->receivingBySMSCode = $receivingBySMSCode;

        return $this;
    }

    /**
     * Дата и время отправки груза Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     */
    public function getSendingDateTime(): ?string
    {
        return $this->sendingDateTime;
    }

    /**
     * Дата и время отправки груза Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     */
    public function setSendingDateTime(?string $sendingDateTime): self
    {
        $this->sendingDateTime = $sendingDateTime;

        return $this;
    }

    /**
     * В актуальной версии протокола не используется. Для получения истории используйте метод [`/statusfullhistory/`](#cargos_statusfullhistory).
     *
     * @return null|mixed[][]
     */
    public function getStatuses(): ?array
    {
        return $this->statuses;
    }

    /**
     * В актуальной версии протокола не используется. Для получения истории используйте метод [`/statusfullhistory/`](#cargos_statusfullhistory).
     *
     * @param null|mixed[][] $statuses
     */
    public function setStatuses(?array $statuses): self
    {
        $this->statuses = $statuses;

        return $this;
    }

    /**
     * Дата начала платного хранения.
     */
    public function getStorageStartPlanDate(): ?string
    {
        return $this->storageStartPlanDate;
    }

    /**
     * Дата начала платного хранения.
     */
    public function setStorageStartPlanDate(?string $storageStartPlanDate): self
    {
        $this->storageStartPlanDate = $storageStartPlanDate;

        return $this;
    }

    /**
     * Дата и время сдачи груза Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     */
    public function getTakeOnStockDateTime(): ?string
    {
        return $this->takeOnStockDateTime;
    }

    /**
     * Дата и время сдачи груза Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     */
    public function setTakeOnStockDateTime(?string $takeOnStockDateTime): self
    {
        $this->takeOnStockDateTime = $takeOnStockDateTime;

        return $this;
    }

    /**
     * Состояние упаковки при сдаче груза.
     */
    public function getTakeOnStockPackageState(): ?string
    {
        return $this->takeOnStockPackageState;
    }

    /**
     * Состояние упаковки при сдаче груза.
     */
    public function setTakeOnStockPackageState(?string $takeOnStockPackageState): self
    {
        $this->takeOnStockPackageState = $takeOnStockPackageState;

        return $this;
    }

    /**
     * Плановая дата и время сдачи груза на склад Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     */
    public function getTakeOnStockPlanDateTime(): ?string
    {
        return $this->takeOnStockPlanDateTime;
    }

    /**
     * Плановая дата и время сдачи груза на склад Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     */
    public function setTakeOnStockPlanDateTime(?string $takeOnStockPlanDateTime): self
    {
        $this->takeOnStockPlanDateTime = $takeOnStockPlanDateTime;

        return $this;
    }

    /**
     * Статус по оповещению.
     */
    public function getCallStatus(): ?string
    {
        return $this->callStatus;
    }

    /**
     * Статус по оповещению.
     */
    public function setCallStatus(?string $callStatus): self
    {
        $this->callStatus = $callStatus;

        return $this;
    }

    /**
     * Дата статуса по оповещению Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     */
    public function getCallStatusDateTime(): ?string
    {
        return $this->callStatusDateTime;
    }

    /**
     * Дата статуса по оповещению Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     */
    public function setCallStatusDateTime(?string $callStatusDateTime): self
    {
        $this->callStatusDateTime = $callStatusDateTime;

        return $this;
    }
}
