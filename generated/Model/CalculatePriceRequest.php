<?php

namespace glook\PecomSdk\Generated\Model;

class CalculatePriceRequest
{
    /**
     * Данные о грузе/грузоместах груза (см. комментарии). Для корректного расчёта передавайте не более двух знаков после запятой, на нашей стороне округление выполняется до сотых в большую сторону. Например, 0.00041 будет 0.01; 1.871001 будет 1.88
     *
     * @var Cargo[]|null
     */
    protected $cargos;
    /**
     * Данные контрагента для расчета с учетом спецусловий
     *
     * @var Counterpart|null
     */
    protected $counterpart;
    /**
     * Код валюты. Необязательно. По умолчанию 643 — российский рубль. Допустимые валюты см. в ответе метода [`/currency/all/`](#tag/currency/POST/currency/all/)
     *
     * @var string|null
     */
    protected $currencyCode = '643';
    /**
     * Параметры адреса доставки груза
     *
     * @var AddressBlock|null
     */
    protected $delivery;
    /**
     * Погрузочно-разгрузочные работы при доставке
     *
     * @var LoadingServices|null
     */
    protected $deliveryServices;
    /**
     * Нужна доставка
     *
     * @var bool|null
     */
    protected $isDelivery;
    /**
     * Признак гипермаркета
     *
     * @var bool|null
     */
    protected $isHyperMarket;
    /**
     * Страхование
     *
     * @var bool|null
     */
    protected $isInsurance;
    /**
     * Стоимость груза (сумма, на которую будет застрахован груз), руб.
     *
     * @var float|null
     */
    protected $isInsurancePrice;
    /**
     * Растентовка получателя
     *
     * @var bool|null
     */
    protected $isOpenCarReceiver;
    /**
     * Растентовка отправителя
     *
     * @var bool|null
     */
    protected $isOpenCarSender;
    /**
     * Нужен забор
     *
     * @var bool|null
     */
    protected $isPickUp;
    /**
     * Организация перевозки сопроводительных документов (см. комментарии)
     *
     * @var bool|null
     */
    protected $needArrangeTransportationDocuments;
    /**
     * Возврат документов (см. комментарии)
     *
     * @var bool|null
     */
    protected $needReturnDocuments;
    /**
     * Параметры адреса забора груза
     *
     * @var AddressBlock|null
     */
    protected $pickup;
    /**
     * Погрузочно-разгрузочные работы при заборе
     *
     * @var LoadingServices|null
     */
    protected $pickupServices;
    /**
     * Дата и время планируемой передачи груза в ПЭК (по часовому поясу филиала отправления): при заказанном заборе — дата и время начала интервала забора груза (не позднее 4-х часов до окончания работы филиала), при самопривозе — дата и время плановой сдачи груза на склад ПЭК Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     *
     * @var string|null
     */
    protected $plannedDateTime;
    /**
     * В актуальной версии протокола не используется.
     *
     * @var int|null
     */
    protected $receiverDistanceType;
    /**
     * Идентификатор склада получателя (см. комментарии)
     *
     * @var string|null
     */
    protected $receiverWarehouseId;
    /**
     * В актуальной версии протокола не используется.
     *
     * @var int|null
     */
    protected $senderDistanceType;
    /**
     * Идентификатор склада отправителя (см. комментарии)
     *
     * @var string|null
     */
    protected $senderWarehouseId;
    /**
     * Массив идентификаторов продуктов/тарифов ПЭК для расчета. Обязательно. Полный список доступных в API продуктов/тарифов можно получить методом [`/typesOfDelivery/all/`](#tag/typesofdelivery/GET/typesOfDelivery/all/). ВНИМАНИЕ! В настоящее время метод не позволяет рассчитывать стоимость по продукту/тарифу 5 — ПЭК:Express Авто
     *
     * @var float[]
     */
    protected $types;
    /**
     * Данные о грузе/грузоместах груза (см. комментарии). Для корректного расчёта передавайте не более двух знаков после запятой, на нашей стороне округление выполняется до сотых в большую сторону. Например, 0.00041 будет 0.01; 1.871001 будет 1.88
     *
     * @return Cargo[]|null
     */
    public function getCargos() : ?array
    {
        return $this->cargos;
    }
    /**
     * Данные о грузе/грузоместах груза (см. комментарии). Для корректного расчёта передавайте не более двух знаков после запятой, на нашей стороне округление выполняется до сотых в большую сторону. Например, 0.00041 будет 0.01; 1.871001 будет 1.88
     *
     * @param Cargo[]|null $cargos
     *
     * @return self
     */
    public function setCargos(?array $cargos) : self
    {
        $this->cargos = $cargos;
        return $this;
    }
    /**
     * Данные контрагента для расчета с учетом спецусловий
     *
     * @return Counterpart|null
     */
    public function getCounterpart() : ?Counterpart
    {
        return $this->counterpart;
    }
    /**
     * Данные контрагента для расчета с учетом спецусловий
     *
     * @param Counterpart|null $counterpart
     *
     * @return self
     */
    public function setCounterpart(?Counterpart $counterpart) : self
    {
        $this->counterpart = $counterpart;
        return $this;
    }
    /**
     * Код валюты. Необязательно. По умолчанию 643 — российский рубль. Допустимые валюты см. в ответе метода [`/currency/all/`](#tag/currency/POST/currency/all/)
     *
     * @return string|null
     */
    public function getCurrencyCode() : ?string
    {
        return $this->currencyCode;
    }
    /**
     * Код валюты. Необязательно. По умолчанию 643 — российский рубль. Допустимые валюты см. в ответе метода [`/currency/all/`](#tag/currency/POST/currency/all/)
     *
     * @param string|null $currencyCode
     *
     * @return self
     */
    public function setCurrencyCode(?string $currencyCode) : self
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }
    /**
     * Параметры адреса доставки груза
     *
     * @return AddressBlock|null
     */
    public function getDelivery() : ?AddressBlock
    {
        return $this->delivery;
    }
    /**
     * Параметры адреса доставки груза
     *
     * @param AddressBlock|null $delivery
     *
     * @return self
     */
    public function setDelivery(?AddressBlock $delivery) : self
    {
        $this->delivery = $delivery;
        return $this;
    }
    /**
     * Погрузочно-разгрузочные работы при доставке
     *
     * @return LoadingServices|null
     */
    public function getDeliveryServices() : ?LoadingServices
    {
        return $this->deliveryServices;
    }
    /**
     * Погрузочно-разгрузочные работы при доставке
     *
     * @param LoadingServices|null $deliveryServices
     *
     * @return self
     */
    public function setDeliveryServices(?LoadingServices $deliveryServices) : self
    {
        $this->deliveryServices = $deliveryServices;
        return $this;
    }
    /**
     * Нужна доставка
     *
     * @return bool|null
     */
    public function getIsDelivery() : ?bool
    {
        return $this->isDelivery;
    }
    /**
     * Нужна доставка
     *
     * @param bool|null $isDelivery
     *
     * @return self
     */
    public function setIsDelivery(?bool $isDelivery) : self
    {
        $this->isDelivery = $isDelivery;
        return $this;
    }
    /**
     * Признак гипермаркета
     *
     * @return bool|null
     */
    public function getIsHyperMarket() : ?bool
    {
        return $this->isHyperMarket;
    }
    /**
     * Признак гипермаркета
     *
     * @param bool|null $isHyperMarket
     *
     * @return self
     */
    public function setIsHyperMarket(?bool $isHyperMarket) : self
    {
        $this->isHyperMarket = $isHyperMarket;
        return $this;
    }
    /**
     * Страхование
     *
     * @return bool|null
     */
    public function getIsInsurance() : ?bool
    {
        return $this->isInsurance;
    }
    /**
     * Страхование
     *
     * @param bool|null $isInsurance
     *
     * @return self
     */
    public function setIsInsurance(?bool $isInsurance) : self
    {
        $this->isInsurance = $isInsurance;
        return $this;
    }
    /**
     * Стоимость груза (сумма, на которую будет застрахован груз), руб.
     *
     * @return float|null
     */
    public function getIsInsurancePrice() : ?float
    {
        return $this->isInsurancePrice;
    }
    /**
     * Стоимость груза (сумма, на которую будет застрахован груз), руб.
     *
     * @param float|null $isInsurancePrice
     *
     * @return self
     */
    public function setIsInsurancePrice(?float $isInsurancePrice) : self
    {
        $this->isInsurancePrice = $isInsurancePrice;
        return $this;
    }
    /**
     * Растентовка получателя
     *
     * @return bool|null
     */
    public function getIsOpenCarReceiver() : ?bool
    {
        return $this->isOpenCarReceiver;
    }
    /**
     * Растентовка получателя
     *
     * @param bool|null $isOpenCarReceiver
     *
     * @return self
     */
    public function setIsOpenCarReceiver(?bool $isOpenCarReceiver) : self
    {
        $this->isOpenCarReceiver = $isOpenCarReceiver;
        return $this;
    }
    /**
     * Растентовка отправителя
     *
     * @return bool|null
     */
    public function getIsOpenCarSender() : ?bool
    {
        return $this->isOpenCarSender;
    }
    /**
     * Растентовка отправителя
     *
     * @param bool|null $isOpenCarSender
     *
     * @return self
     */
    public function setIsOpenCarSender(?bool $isOpenCarSender) : self
    {
        $this->isOpenCarSender = $isOpenCarSender;
        return $this;
    }
    /**
     * Нужен забор
     *
     * @return bool|null
     */
    public function getIsPickUp() : ?bool
    {
        return $this->isPickUp;
    }
    /**
     * Нужен забор
     *
     * @param bool|null $isPickUp
     *
     * @return self
     */
    public function setIsPickUp(?bool $isPickUp) : self
    {
        $this->isPickUp = $isPickUp;
        return $this;
    }
    /**
     * Организация перевозки сопроводительных документов (см. комментарии)
     *
     * @return bool|null
     */
    public function getNeedArrangeTransportationDocuments() : ?bool
    {
        return $this->needArrangeTransportationDocuments;
    }
    /**
     * Организация перевозки сопроводительных документов (см. комментарии)
     *
     * @param bool|null $needArrangeTransportationDocuments
     *
     * @return self
     */
    public function setNeedArrangeTransportationDocuments(?bool $needArrangeTransportationDocuments) : self
    {
        $this->needArrangeTransportationDocuments = $needArrangeTransportationDocuments;
        return $this;
    }
    /**
     * Возврат документов (см. комментарии)
     *
     * @return bool|null
     */
    public function getNeedReturnDocuments() : ?bool
    {
        return $this->needReturnDocuments;
    }
    /**
     * Возврат документов (см. комментарии)
     *
     * @param bool|null $needReturnDocuments
     *
     * @return self
     */
    public function setNeedReturnDocuments(?bool $needReturnDocuments) : self
    {
        $this->needReturnDocuments = $needReturnDocuments;
        return $this;
    }
    /**
     * Параметры адреса забора груза
     *
     * @return AddressBlock|null
     */
    public function getPickup() : ?AddressBlock
    {
        return $this->pickup;
    }
    /**
     * Параметры адреса забора груза
     *
     * @param AddressBlock|null $pickup
     *
     * @return self
     */
    public function setPickup(?AddressBlock $pickup) : self
    {
        $this->pickup = $pickup;
        return $this;
    }
    /**
     * Погрузочно-разгрузочные работы при заборе
     *
     * @return LoadingServices|null
     */
    public function getPickupServices() : ?LoadingServices
    {
        return $this->pickupServices;
    }
    /**
     * Погрузочно-разгрузочные работы при заборе
     *
     * @param LoadingServices|null $pickupServices
     *
     * @return self
     */
    public function setPickupServices(?LoadingServices $pickupServices) : self
    {
        $this->pickupServices = $pickupServices;
        return $this;
    }
    /**
     * Дата и время планируемой передачи груза в ПЭК (по часовому поясу филиала отправления): при заказанном заборе — дата и время начала интервала забора груза (не позднее 4-х часов до окончания работы филиала), при самопривозе — дата и время плановой сдачи груза на склад ПЭК Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     *
     * @return string|null
     */
    public function getPlannedDateTime() : ?string
    {
        return $this->plannedDateTime;
    }
    /**
     * Дата и время планируемой передачи груза в ПЭК (по часовому поясу филиала отправления): при заказанном заборе — дата и время начала интервала забора груза (не позднее 4-х часов до окончания работы филиала), при самопривозе — дата и время плановой сдачи груза на склад ПЭК Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     *
     * @param string|null $plannedDateTime
     *
     * @return self
     */
    public function setPlannedDateTime(?string $plannedDateTime) : self
    {
        $this->plannedDateTime = $plannedDateTime;
        return $this;
    }
    /**
     * В актуальной версии протокола не используется.
     *
     * @return int|null
     */
    public function getReceiverDistanceType() : ?int
    {
        return $this->receiverDistanceType;
    }
    /**
     * В актуальной версии протокола не используется.
     *
     * @param int|null $receiverDistanceType
     *
     * @return self
     */
    public function setReceiverDistanceType(?int $receiverDistanceType) : self
    {
        $this->receiverDistanceType = $receiverDistanceType;
        return $this;
    }
    /**
     * Идентификатор склада получателя (см. комментарии)
     *
     * @return string|null
     */
    public function getReceiverWarehouseId() : ?string
    {
        return $this->receiverWarehouseId;
    }
    /**
     * Идентификатор склада получателя (см. комментарии)
     *
     * @param string|null $receiverWarehouseId
     *
     * @return self
     */
    public function setReceiverWarehouseId(?string $receiverWarehouseId) : self
    {
        $this->receiverWarehouseId = $receiverWarehouseId;
        return $this;
    }
    /**
     * В актуальной версии протокола не используется.
     *
     * @return int|null
     */
    public function getSenderDistanceType() : ?int
    {
        return $this->senderDistanceType;
    }
    /**
     * В актуальной версии протокола не используется.
     *
     * @param int|null $senderDistanceType
     *
     * @return self
     */
    public function setSenderDistanceType(?int $senderDistanceType) : self
    {
        $this->senderDistanceType = $senderDistanceType;
        return $this;
    }
    /**
     * Идентификатор склада отправителя (см. комментарии)
     *
     * @return string|null
     */
    public function getSenderWarehouseId() : ?string
    {
        return $this->senderWarehouseId;
    }
    /**
     * Идентификатор склада отправителя (см. комментарии)
     *
     * @param string|null $senderWarehouseId
     *
     * @return self
     */
    public function setSenderWarehouseId(?string $senderWarehouseId) : self
    {
        $this->senderWarehouseId = $senderWarehouseId;
        return $this;
    }
    /**
     * Массив идентификаторов продуктов/тарифов ПЭК для расчета. Обязательно. Полный список доступных в API продуктов/тарифов можно получить методом [`/typesOfDelivery/all/`](#tag/typesofdelivery/GET/typesOfDelivery/all/). ВНИМАНИЕ! В настоящее время метод не позволяет рассчитывать стоимость по продукту/тарифу 5 — ПЭК:Express Авто
     *
     * @return float[]
     */
    public function getTypes() : array
    {
        return $this->types;
    }
    /**
     * Массив идентификаторов продуктов/тарифов ПЭК для расчета. Обязательно. Полный список доступных в API продуктов/тарифов можно получить методом [`/typesOfDelivery/all/`](#tag/typesofdelivery/GET/typesOfDelivery/all/). ВНИМАНИЕ! В настоящее время метод не позволяет рассчитывать стоимость по продукту/тарифу 5 — ПЭК:Express Авто
     *
     * @param float[] $types
     *
     * @return self
     */
    public function setTypes(array $types) : self
    {
        $this->types = $types;
        return $this;
    }
}