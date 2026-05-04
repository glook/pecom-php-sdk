<?php

namespace glook\PecomSdk\Generated\Model;

class BasicStatusInfo
{
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
     * Дата получения груза грузополучателем (с учетом перенаправок) Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     *
     * @var string|null
     */
    protected $receivedByClientDateTime;
    /**
     * Дата и время отправки груза Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     *
     * @var string|null
     */
    protected $sendingDateTime;
    /**
     * Дата и время сдачи груза Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     *
     * @var string|null
     */
    protected $takeOnStockDateTime;
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
}