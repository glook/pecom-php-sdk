<?php

namespace glook\PecomSdk\Generated\Model;

class CalculatePriceRequest
{
    /**
     * Данные о грузе/грузоместах груза (см. комментарии). Для корректного расчёта передавайте не более двух знаков после запятой, на нашей стороне округление выполняется до сотых в большую сторону. Например, 0.00041 будет 0.01; 1.871001 будет 1.88.
     *
     * @var null|Cargo[]
     */
    protected $cargos;

    /**
     * Данные контрагента для расчета с учетом спецусловий.
     *
     * @var null|Counterpart
     */
    protected $counterpart;

    /**
     * Код валюты. Необязательно. По умолчанию 643 — российский рубль. Допустимые валюты см. в ответе метода [`/currency/all/`](#tag/currency/POST/currency/all/).
     *
     * @var null|string
     */
    protected $currencyCode = '643';

    /**
     * Параметры адреса доставки груза.
     *
     * @var null|AddressBlock
     */
    protected $delivery;

    /**
     * Погрузочно-разгрузочные работы при доставке.
     *
     * @var null|LoadingServices
     */
    protected $deliveryServices;

    /**
     * Нужна доставка.
     *
     * @var null|bool
     */
    protected $isDelivery;

    /**
     * Признак гипермаркета.
     *
     * @var null|bool
     */
    protected $isHyperMarket;

    /**
     * Страхование.
     *
     * @var null|bool
     */
    protected $isInsurance;

    /**
     * Стоимость груза (сумма, на которую будет застрахован груз), руб.
     *
     * @var null|float
     */
    protected $isInsurancePrice;

    /**
     * Растентовка получателя.
     *
     * @var null|bool
     */
    protected $isOpenCarReceiver;

    /**
     * Растентовка отправителя.
     *
     * @var null|bool
     */
    protected $isOpenCarSender;

    /**
     * Нужен забор
     *
     * @var null|bool
     */
    protected $isPickUp;

    /**
     * Организация перевозки сопроводительных документов (см. комментарии).
     *
     * @var null|bool
     */
    protected $needArrangeTransportationDocuments;

    /**
     * Возврат документов (см. комментарии).
     *
     * @var null|bool
     */
    protected $needReturnDocuments;

    /**
     * Параметры адреса забора груза.
     *
     * @var null|AddressBlock
     */
    protected $pickup;

    /**
     * Погрузочно-разгрузочные работы при заборе.
     *
     * @var null|LoadingServices
     */
    protected $pickupServices;

    /**
     * Дата и время планируемой передачи груза в ПЭК (по часовому поясу филиала отправления): при заказанном заборе — дата и время начала интервала забора груза (не позднее 4-х часов до окончания работы филиала), при самопривозе — дата и время плановой сдачи груза на склад ПЭК Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     *
     * @var null|string
     */
    protected $plannedDateTime;

    /**
     * В актуальной версии протокола не используется.
     *
     * @var null|int
     */
    protected $receiverDistanceType;

    /**
     * Идентификатор склада получателя (см. комментарии).
     *
     * @var null|string
     */
    protected $receiverWarehouseId;

    /**
     * В актуальной версии протокола не используется.
     *
     * @var null|int
     */
    protected $senderDistanceType;

    /**
     * Идентификатор склада отправителя (см. комментарии).
     *
     * @var null|string
     */
    protected $senderWarehouseId;

    /**
     * Массив идентификаторов продуктов/тарифов ПЭК для расчета. Обязательно. Полный список доступных в API продуктов/тарифов можно получить методом [`/typesOfDelivery/all/`](#tag/typesofdelivery/GET/typesOfDelivery/all/). ВНИМАНИЕ! В настоящее время метод не позволяет рассчитывать стоимость по продукту/тарифу 5 — ПЭК:Express Авто.
     *
     * @var float[]
     */
    protected $types;

    /**
     * Данные о грузе/грузоместах груза (см. комментарии). Для корректного расчёта передавайте не более двух знаков после запятой, на нашей стороне округление выполняется до сотых в большую сторону. Например, 0.00041 будет 0.01; 1.871001 будет 1.88.
     *
     * @return null|Cargo[]
     */
    public function getCargos(): ?array
    {
        return $this->cargos;
    }

    /**
     * Данные о грузе/грузоместах груза (см. комментарии). Для корректного расчёта передавайте не более двух знаков после запятой, на нашей стороне округление выполняется до сотых в большую сторону. Например, 0.00041 будет 0.01; 1.871001 будет 1.88.
     *
     * @param null|Cargo[] $cargos
     */
    public function setCargos(?array $cargos): self
    {
        $this->cargos = $cargos;

        return $this;
    }

    /**
     * Данные контрагента для расчета с учетом спецусловий.
     */
    public function getCounterpart(): ?Counterpart
    {
        return $this->counterpart;
    }

    /**
     * Данные контрагента для расчета с учетом спецусловий.
     */
    public function setCounterpart(?Counterpart $counterpart): self
    {
        $this->counterpart = $counterpart;

        return $this;
    }

    /**
     * Код валюты. Необязательно. По умолчанию 643 — российский рубль. Допустимые валюты см. в ответе метода [`/currency/all/`](#tag/currency/POST/currency/all/).
     */
    public function getCurrencyCode(): ?string
    {
        return $this->currencyCode;
    }

    /**
     * Код валюты. Необязательно. По умолчанию 643 — российский рубль. Допустимые валюты см. в ответе метода [`/currency/all/`](#tag/currency/POST/currency/all/).
     */
    public function setCurrencyCode(?string $currencyCode): self
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }

    /**
     * Параметры адреса доставки груза.
     */
    public function getDelivery(): ?AddressBlock
    {
        return $this->delivery;
    }

    /**
     * Параметры адреса доставки груза.
     */
    public function setDelivery(?AddressBlock $delivery): self
    {
        $this->delivery = $delivery;

        return $this;
    }

    /**
     * Погрузочно-разгрузочные работы при доставке.
     */
    public function getDeliveryServices(): ?LoadingServices
    {
        return $this->deliveryServices;
    }

    /**
     * Погрузочно-разгрузочные работы при доставке.
     */
    public function setDeliveryServices(?LoadingServices $deliveryServices): self
    {
        $this->deliveryServices = $deliveryServices;

        return $this;
    }

    /**
     * Нужна доставка.
     */
    public function getIsDelivery(): ?bool
    {
        return $this->isDelivery;
    }

    /**
     * Нужна доставка.
     */
    public function setIsDelivery(?bool $isDelivery): self
    {
        $this->isDelivery = $isDelivery;

        return $this;
    }

    /**
     * Признак гипермаркета.
     */
    public function getIsHyperMarket(): ?bool
    {
        return $this->isHyperMarket;
    }

    /**
     * Признак гипермаркета.
     */
    public function setIsHyperMarket(?bool $isHyperMarket): self
    {
        $this->isHyperMarket = $isHyperMarket;

        return $this;
    }

    /**
     * Страхование.
     */
    public function getIsInsurance(): ?bool
    {
        return $this->isInsurance;
    }

    /**
     * Страхование.
     */
    public function setIsInsurance(?bool $isInsurance): self
    {
        $this->isInsurance = $isInsurance;

        return $this;
    }

    /**
     * Стоимость груза (сумма, на которую будет застрахован груз), руб.
     */
    public function getIsInsurancePrice(): ?float
    {
        return $this->isInsurancePrice;
    }

    /**
     * Стоимость груза (сумма, на которую будет застрахован груз), руб.
     */
    public function setIsInsurancePrice(?float $isInsurancePrice): self
    {
        $this->isInsurancePrice = $isInsurancePrice;

        return $this;
    }

    /**
     * Растентовка получателя.
     */
    public function getIsOpenCarReceiver(): ?bool
    {
        return $this->isOpenCarReceiver;
    }

    /**
     * Растентовка получателя.
     */
    public function setIsOpenCarReceiver(?bool $isOpenCarReceiver): self
    {
        $this->isOpenCarReceiver = $isOpenCarReceiver;

        return $this;
    }

    /**
     * Растентовка отправителя.
     */
    public function getIsOpenCarSender(): ?bool
    {
        return $this->isOpenCarSender;
    }

    /**
     * Растентовка отправителя.
     */
    public function setIsOpenCarSender(?bool $isOpenCarSender): self
    {
        $this->isOpenCarSender = $isOpenCarSender;

        return $this;
    }

    /**
     * Нужен забор
     */
    public function getIsPickUp(): ?bool
    {
        return $this->isPickUp;
    }

    /**
     * Нужен забор
     */
    public function setIsPickUp(?bool $isPickUp): self
    {
        $this->isPickUp = $isPickUp;

        return $this;
    }

    /**
     * Организация перевозки сопроводительных документов (см. комментарии).
     */
    public function getNeedArrangeTransportationDocuments(): ?bool
    {
        return $this->needArrangeTransportationDocuments;
    }

    /**
     * Организация перевозки сопроводительных документов (см. комментарии).
     */
    public function setNeedArrangeTransportationDocuments(?bool $needArrangeTransportationDocuments): self
    {
        $this->needArrangeTransportationDocuments = $needArrangeTransportationDocuments;

        return $this;
    }

    /**
     * Возврат документов (см. комментарии).
     */
    public function getNeedReturnDocuments(): ?bool
    {
        return $this->needReturnDocuments;
    }

    /**
     * Возврат документов (см. комментарии).
     */
    public function setNeedReturnDocuments(?bool $needReturnDocuments): self
    {
        $this->needReturnDocuments = $needReturnDocuments;

        return $this;
    }

    /**
     * Параметры адреса забора груза.
     */
    public function getPickup(): ?AddressBlock
    {
        return $this->pickup;
    }

    /**
     * Параметры адреса забора груза.
     */
    public function setPickup(?AddressBlock $pickup): self
    {
        $this->pickup = $pickup;

        return $this;
    }

    /**
     * Погрузочно-разгрузочные работы при заборе.
     */
    public function getPickupServices(): ?LoadingServices
    {
        return $this->pickupServices;
    }

    /**
     * Погрузочно-разгрузочные работы при заборе.
     */
    public function setPickupServices(?LoadingServices $pickupServices): self
    {
        $this->pickupServices = $pickupServices;

        return $this;
    }

    /**
     * Дата и время планируемой передачи груза в ПЭК (по часовому поясу филиала отправления): при заказанном заборе — дата и время начала интервала забора груза (не позднее 4-х часов до окончания работы филиала), при самопривозе — дата и время плановой сдачи груза на склад ПЭК Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     */
    public function getPlannedDateTime(): ?string
    {
        return $this->plannedDateTime;
    }

    /**
     * Дата и время планируемой передачи груза в ПЭК (по часовому поясу филиала отправления): при заказанном заборе — дата и время начала интервала забора груза (не позднее 4-х часов до окончания работы филиала), при самопривозе — дата и время плановой сдачи груза на склад ПЭК Формат даты/времени указан как строка, так как API может возвращать локальное время без timezone.
     */
    public function setPlannedDateTime(?string $plannedDateTime): self
    {
        $this->plannedDateTime = $plannedDateTime;

        return $this;
    }

    /**
     * В актуальной версии протокола не используется.
     */
    public function getReceiverDistanceType(): ?int
    {
        return $this->receiverDistanceType;
    }

    /**
     * В актуальной версии протокола не используется.
     */
    public function setReceiverDistanceType(?int $receiverDistanceType): self
    {
        $this->receiverDistanceType = $receiverDistanceType;

        return $this;
    }

    /**
     * Идентификатор склада получателя (см. комментарии).
     */
    public function getReceiverWarehouseId(): ?string
    {
        return $this->receiverWarehouseId;
    }

    /**
     * Идентификатор склада получателя (см. комментарии).
     */
    public function setReceiverWarehouseId(?string $receiverWarehouseId): self
    {
        $this->receiverWarehouseId = $receiverWarehouseId;

        return $this;
    }

    /**
     * В актуальной версии протокола не используется.
     */
    public function getSenderDistanceType(): ?int
    {
        return $this->senderDistanceType;
    }

    /**
     * В актуальной версии протокола не используется.
     */
    public function setSenderDistanceType(?int $senderDistanceType): self
    {
        $this->senderDistanceType = $senderDistanceType;

        return $this;
    }

    /**
     * Идентификатор склада отправителя (см. комментарии).
     */
    public function getSenderWarehouseId(): ?string
    {
        return $this->senderWarehouseId;
    }

    /**
     * Идентификатор склада отправителя (см. комментарии).
     */
    public function setSenderWarehouseId(?string $senderWarehouseId): self
    {
        $this->senderWarehouseId = $senderWarehouseId;

        return $this;
    }

    /**
     * Массив идентификаторов продуктов/тарифов ПЭК для расчета. Обязательно. Полный список доступных в API продуктов/тарифов можно получить методом [`/typesOfDelivery/all/`](#tag/typesofdelivery/GET/typesOfDelivery/all/). ВНИМАНИЕ! В настоящее время метод не позволяет рассчитывать стоимость по продукту/тарифу 5 — ПЭК:Express Авто.
     *
     * @return float[]
     */
    public function getTypes(): array
    {
        return $this->types;
    }

    /**
     * Массив идентификаторов продуктов/тарифов ПЭК для расчета. Обязательно. Полный список доступных в API продуктов/тарифов можно получить методом [`/typesOfDelivery/all/`](#tag/typesofdelivery/GET/typesOfDelivery/all/). ВНИМАНИЕ! В настоящее время метод не позволяет рассчитывать стоимость по продукту/тарифу 5 — ПЭК:Express Авто.
     *
     * @param float[] $types
     */
    public function setTypes(array $types): self
    {
        $this->types = $types;

        return $this;
    }
}
