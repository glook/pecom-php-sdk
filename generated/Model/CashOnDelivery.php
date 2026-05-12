<?php

namespace glook\PecomSdk\Generated\Model;

class CashOnDelivery
{
    /**
     * Объявленная стоимость груза
     *
     * @var float|null
     */
    protected $actualCost;
    /**
     * Сумма наложенного платежа, руб.
     *
     * @var float|null
     */
    protected $cashOnDeliverySum;
    /**
     * Заказана услуга наложенного платежа. Обязательно при заказе сервиса
     *
     * @var bool|null
     */
    protected $enabled;
    /**
     * Стоимость транспортных услуг ПЭК оплачивается Отправителем. При значении false — плательщиком за все услуги ПЭК при оформлении будет выставлен получатель груза. При значении true — плательщиком за все услуги ПЭК при оформлении будет выставлен отправитель груза.
     *
     * @var bool|null
     */
    protected $includeTES;
    /**
     * Телефон организации (интернет магазина), которая при доставке товара оказывает собственные дополнительные услуги. Необходим для указания в кассовом чеке по требованиям законодательства РФ. Обязателен к заполнению в случае указания доп. услуг в блоке `sellerServices`. Необходимо корректно ввести номер телефона в международном формате через «+», код страны и города обязательны, без пробелов и дополнительных символов ТОЛЬКО цифры, например, +74996651111. Максимум 19 символов
     *
     * @var string|null
     */
    protected $sellerPhone;
    /**
     * 
     *
     * @var CargopickupSellerService[]|null
     */
    protected $sellerServices;
    /**
     * 
     *
     * @var CargopickupSpecification|null
     */
    protected $specification;
    /**
     * Объявленная стоимость груза
     *
     * @return float|null
     */
    public function getActualCost() : ?float
    {
        return $this->actualCost;
    }
    /**
     * Объявленная стоимость груза
     *
     * @param float|null $actualCost
     *
     * @return self
     */
    public function setActualCost(?float $actualCost) : self
    {
        $this->actualCost = $actualCost;
        return $this;
    }
    /**
     * Сумма наложенного платежа, руб.
     *
     * @return float|null
     */
    public function getCashOnDeliverySum() : ?float
    {
        return $this->cashOnDeliverySum;
    }
    /**
     * Сумма наложенного платежа, руб.
     *
     * @param float|null $cashOnDeliverySum
     *
     * @return self
     */
    public function setCashOnDeliverySum(?float $cashOnDeliverySum) : self
    {
        $this->cashOnDeliverySum = $cashOnDeliverySum;
        return $this;
    }
    /**
     * Заказана услуга наложенного платежа. Обязательно при заказе сервиса
     *
     * @return bool|null
     */
    public function getEnabled() : ?bool
    {
        return $this->enabled;
    }
    /**
     * Заказана услуга наложенного платежа. Обязательно при заказе сервиса
     *
     * @param bool|null $enabled
     *
     * @return self
     */
    public function setEnabled(?bool $enabled) : self
    {
        $this->enabled = $enabled;
        return $this;
    }
    /**
     * Стоимость транспортных услуг ПЭК оплачивается Отправителем. При значении false — плательщиком за все услуги ПЭК при оформлении будет выставлен получатель груза. При значении true — плательщиком за все услуги ПЭК при оформлении будет выставлен отправитель груза.
     *
     * @return bool|null
     */
    public function getIncludeTES() : ?bool
    {
        return $this->includeTES;
    }
    /**
     * Стоимость транспортных услуг ПЭК оплачивается Отправителем. При значении false — плательщиком за все услуги ПЭК при оформлении будет выставлен получатель груза. При значении true — плательщиком за все услуги ПЭК при оформлении будет выставлен отправитель груза.
     *
     * @param bool|null $includeTES
     *
     * @return self
     */
    public function setIncludeTES(?bool $includeTES) : self
    {
        $this->includeTES = $includeTES;
        return $this;
    }
    /**
     * Телефон организации (интернет магазина), которая при доставке товара оказывает собственные дополнительные услуги. Необходим для указания в кассовом чеке по требованиям законодательства РФ. Обязателен к заполнению в случае указания доп. услуг в блоке `sellerServices`. Необходимо корректно ввести номер телефона в международном формате через «+», код страны и города обязательны, без пробелов и дополнительных символов ТОЛЬКО цифры, например, +74996651111. Максимум 19 символов
     *
     * @return string|null
     */
    public function getSellerPhone() : ?string
    {
        return $this->sellerPhone;
    }
    /**
     * Телефон организации (интернет магазина), которая при доставке товара оказывает собственные дополнительные услуги. Необходим для указания в кассовом чеке по требованиям законодательства РФ. Обязателен к заполнению в случае указания доп. услуг в блоке `sellerServices`. Необходимо корректно ввести номер телефона в международном формате через «+», код страны и города обязательны, без пробелов и дополнительных символов ТОЛЬКО цифры, например, +74996651111. Максимум 19 символов
     *
     * @param string|null $sellerPhone
     *
     * @return self
     */
    public function setSellerPhone(?string $sellerPhone) : self
    {
        $this->sellerPhone = $sellerPhone;
        return $this;
    }
    /**
     * 
     *
     * @return CargopickupSellerService[]|null
     */
    public function getSellerServices() : ?array
    {
        return $this->sellerServices;
    }
    /**
     * 
     *
     * @param CargopickupSellerService[]|null $sellerServices
     *
     * @return self
     */
    public function setSellerServices(?array $sellerServices) : self
    {
        $this->sellerServices = $sellerServices;
        return $this;
    }
    /**
     * 
     *
     * @return CargopickupSpecification|null
     */
    public function getSpecification() : ?CargopickupSpecification
    {
        return $this->specification;
    }
    /**
     * 
     *
     * @param CargopickupSpecification|null $specification
     *
     * @return self
     */
    public function setSpecification(?CargopickupSpecification $specification) : self
    {
        $this->specification = $specification;
        return $this;
    }
}