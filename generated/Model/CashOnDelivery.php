<?php

namespace glook\PecomSdk\Generated\Model;

class CashOnDelivery
{
    /**
     * Объявленная стоимость груза
     *
     * @var null|float
     */
    protected $actualCost;

    /**
     * Сумма наложенного платежа, руб.
     *
     * @var null|float
     */
    protected $cashOnDeliverySum;

    /**
     * Заказана услуга наложенного платежа. Обязательно при заказе сервиса
     *
     * @var null|bool
     */
    protected $enabled;

    /**
     * Стоимость транспортных услуг ПЭК оплачивается Отправителем. При значении false — плательщиком за все услуги ПЭК при оформлении будет выставлен получатель груза. При значении true — плательщиком за все услуги ПЭК при оформлении будет выставлен отправитель груза.
     *
     * @var null|bool
     */
    protected $includeTES;

    /**
     * Телефон организации (интернет магазина), которая при доставке товара оказывает собственные дополнительные услуги. Необходим для указания в кассовом чеке по требованиям законодательства РФ. Обязателен к заполнению в случае указания доп. услуг в блоке `sellerServices`. Необходимо корректно ввести номер телефона в международном формате через «+», код страны и города обязательны, без пробелов и дополнительных символов ТОЛЬКО цифры, например, +74996651111. Максимум 19 символов
     *
     * @var null|string
     */
    protected $sellerPhone;

    /**
     * @var null|CargopickupSellerService[]
     */
    protected $sellerServices;

    /**
     * @var null|CargopickupSpecification
     */
    protected $specification;

    /**
     * Объявленная стоимость груза
     */
    public function getActualCost(): ?float
    {
        return $this->actualCost;
    }

    /**
     * Объявленная стоимость груза
     */
    public function setActualCost(?float $actualCost): self
    {
        $this->actualCost = $actualCost;

        return $this;
    }

    /**
     * Сумма наложенного платежа, руб.
     */
    public function getCashOnDeliverySum(): ?float
    {
        return $this->cashOnDeliverySum;
    }

    /**
     * Сумма наложенного платежа, руб.
     */
    public function setCashOnDeliverySum(?float $cashOnDeliverySum): self
    {
        $this->cashOnDeliverySum = $cashOnDeliverySum;

        return $this;
    }

    /**
     * Заказана услуга наложенного платежа. Обязательно при заказе сервиса
     */
    public function getEnabled(): ?bool
    {
        return $this->enabled;
    }

    /**
     * Заказана услуга наложенного платежа. Обязательно при заказе сервиса
     */
    public function setEnabled(?bool $enabled): self
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Стоимость транспортных услуг ПЭК оплачивается Отправителем. При значении false — плательщиком за все услуги ПЭК при оформлении будет выставлен получатель груза. При значении true — плательщиком за все услуги ПЭК при оформлении будет выставлен отправитель груза.
     */
    public function getIncludeTES(): ?bool
    {
        return $this->includeTES;
    }

    /**
     * Стоимость транспортных услуг ПЭК оплачивается Отправителем. При значении false — плательщиком за все услуги ПЭК при оформлении будет выставлен получатель груза. При значении true — плательщиком за все услуги ПЭК при оформлении будет выставлен отправитель груза.
     */
    public function setIncludeTES(?bool $includeTES): self
    {
        $this->includeTES = $includeTES;

        return $this;
    }

    /**
     * Телефон организации (интернет магазина), которая при доставке товара оказывает собственные дополнительные услуги. Необходим для указания в кассовом чеке по требованиям законодательства РФ. Обязателен к заполнению в случае указания доп. услуг в блоке `sellerServices`. Необходимо корректно ввести номер телефона в международном формате через «+», код страны и города обязательны, без пробелов и дополнительных символов ТОЛЬКО цифры, например, +74996651111. Максимум 19 символов
     */
    public function getSellerPhone(): ?string
    {
        return $this->sellerPhone;
    }

    /**
     * Телефон организации (интернет магазина), которая при доставке товара оказывает собственные дополнительные услуги. Необходим для указания в кассовом чеке по требованиям законодательства РФ. Обязателен к заполнению в случае указания доп. услуг в блоке `sellerServices`. Необходимо корректно ввести номер телефона в международном формате через «+», код страны и города обязательны, без пробелов и дополнительных символов ТОЛЬКО цифры, например, +74996651111. Максимум 19 символов
     */
    public function setSellerPhone(?string $sellerPhone): self
    {
        $this->sellerPhone = $sellerPhone;

        return $this;
    }

    /**
     * @return null|CargopickupSellerService[]
     */
    public function getSellerServices(): ?array
    {
        return $this->sellerServices;
    }

    /**
     * @param null|CargopickupSellerService[] $sellerServices
     */
    public function setSellerServices(?array $sellerServices): self
    {
        $this->sellerServices = $sellerServices;

        return $this;
    }

    public function getSpecification(): ?CargopickupSpecification
    {
        return $this->specification;
    }

    public function setSpecification(?CargopickupSpecification $specification): self
    {
        $this->specification = $specification;

        return $this;
    }
}
