<?php

namespace glook\PecomSdk\Generated\Model;

class BasicStatusInfo
{
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
     * Дата получения груза грузополучателем (с учетом перенаправок) Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     *
     * @var null|string
     */
    protected $receivedByClientDateTime;

    /**
     * Дата и время отправки груза Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     *
     * @var null|string
     */
    protected $sendingDateTime;

    /**
     * Дата и время сдачи груза Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     *
     * @var null|string
     */
    protected $takeOnStockDateTime;

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
}
