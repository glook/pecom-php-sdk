<?php

namespace glook\PecomSdk\Generated\Model;

class ServiceCashOnDelivery
{
    /**
     * Объявленная стоимость груза. При заказе сервиса «Наложенный платеж» объявленная стоимость груза для страхования берется из этого реквизита
     *
     * @var float|null
     */
    protected $actualCost;
    /**
     * Сумма наложенного платежа, руб. Обязательно. Указывается общая сумма, которую нужно взять с получателя груза в рамках сервиса «Наложенный платеж». ВАЖНО! Данная сумма должна была равна сумме всех Дополнительных услуг (sellerServices/sumIncludingVAT) и сумме средств, взимаемых с получателя в рамках наложенного платежа за каждый товар (specification/specifications/sumTotal). Данные по переданным услугам и товарам будут отражены в кассовом чеке в полном соответствии с законодательством РФ
     *
     * @var float
     */
    protected $cashOnDeliverySum;
    /**
     * Заказана услуга наложенного платежа, поле обязательно только для заказа сервиса «Наложенный платеж»
     *
     * @var bool|null
     */
    protected $enabled;
    /**
     * Стоимость транспортных услуг ПЭК оплачивается Отправителем. При заказе сервиса «Наложенный платеж» плательщики, указанные в блоках "payments" запроса, всегда игнорируются. При значении false - плательщиком за все услуги ПЭК при оформлении будет выставлен получатель груза. При значении true - плательщиком за все услуги ПЭК при оформлении будет выставлен отправитель груза.
     *
     * @var bool|null
     */
    protected $includeTES;
    /**
     * Телефон организации (интернет магазина), которая при доставке товара оказывает собственные  дополнительные услуги. Необходим для указания в кассовом чеке по требованиям законодательства РФ. Обязателен к заполнению в случае указания доп. услуг в блоке "sellerServices":[], в других случаях не требуется. Необходимо корректно ввести номер телефона в международном формате через «+», код страны и города обязательны, без пробелов и дополнительных символов ТОЛЬКО цифры, например, +74996651111. Максимум 19 символов
     *
     * @var string|null
     */
    protected $sellerPhone;
    /**
     * 
     *
     * @var PreregistrationSellerService[]|null
     */
    protected $sellerServices;
    /**
     * 
     *
     * @var PreregistrationSpecification|null
     */
    protected $specification;
    /**
     * Объявленная стоимость груза. При заказе сервиса «Наложенный платеж» объявленная стоимость груза для страхования берется из этого реквизита
     *
     * @return float|null
     */
    public function getActualCost() : ?float
    {
        return $this->actualCost;
    }
    /**
     * Объявленная стоимость груза. При заказе сервиса «Наложенный платеж» объявленная стоимость груза для страхования берется из этого реквизита
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
     * Сумма наложенного платежа, руб. Обязательно. Указывается общая сумма, которую нужно взять с получателя груза в рамках сервиса «Наложенный платеж». ВАЖНО! Данная сумма должна была равна сумме всех Дополнительных услуг (sellerServices/sumIncludingVAT) и сумме средств, взимаемых с получателя в рамках наложенного платежа за каждый товар (specification/specifications/sumTotal). Данные по переданным услугам и товарам будут отражены в кассовом чеке в полном соответствии с законодательством РФ
     *
     * @return float
     */
    public function getCashOnDeliverySum() : float
    {
        return $this->cashOnDeliverySum;
    }
    /**
     * Сумма наложенного платежа, руб. Обязательно. Указывается общая сумма, которую нужно взять с получателя груза в рамках сервиса «Наложенный платеж». ВАЖНО! Данная сумма должна была равна сумме всех Дополнительных услуг (sellerServices/sumIncludingVAT) и сумме средств, взимаемых с получателя в рамках наложенного платежа за каждый товар (specification/specifications/sumTotal). Данные по переданным услугам и товарам будут отражены в кассовом чеке в полном соответствии с законодательством РФ
     *
     * @param float $cashOnDeliverySum
     *
     * @return self
     */
    public function setCashOnDeliverySum(float $cashOnDeliverySum) : self
    {
        $this->cashOnDeliverySum = $cashOnDeliverySum;
        return $this;
    }
    /**
     * Заказана услуга наложенного платежа, поле обязательно только для заказа сервиса «Наложенный платеж»
     *
     * @return bool|null
     */
    public function getEnabled() : ?bool
    {
        return $this->enabled;
    }
    /**
     * Заказана услуга наложенного платежа, поле обязательно только для заказа сервиса «Наложенный платеж»
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
     * Стоимость транспортных услуг ПЭК оплачивается Отправителем. При заказе сервиса «Наложенный платеж» плательщики, указанные в блоках "payments" запроса, всегда игнорируются. При значении false - плательщиком за все услуги ПЭК при оформлении будет выставлен получатель груза. При значении true - плательщиком за все услуги ПЭК при оформлении будет выставлен отправитель груза.
     *
     * @return bool|null
     */
    public function getIncludeTES() : ?bool
    {
        return $this->includeTES;
    }
    /**
     * Стоимость транспортных услуг ПЭК оплачивается Отправителем. При заказе сервиса «Наложенный платеж» плательщики, указанные в блоках "payments" запроса, всегда игнорируются. При значении false - плательщиком за все услуги ПЭК при оформлении будет выставлен получатель груза. При значении true - плательщиком за все услуги ПЭК при оформлении будет выставлен отправитель груза.
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
     * Телефон организации (интернет магазина), которая при доставке товара оказывает собственные  дополнительные услуги. Необходим для указания в кассовом чеке по требованиям законодательства РФ. Обязателен к заполнению в случае указания доп. услуг в блоке "sellerServices":[], в других случаях не требуется. Необходимо корректно ввести номер телефона в международном формате через «+», код страны и города обязательны, без пробелов и дополнительных символов ТОЛЬКО цифры, например, +74996651111. Максимум 19 символов
     *
     * @return string|null
     */
    public function getSellerPhone() : ?string
    {
        return $this->sellerPhone;
    }
    /**
     * Телефон организации (интернет магазина), которая при доставке товара оказывает собственные  дополнительные услуги. Необходим для указания в кассовом чеке по требованиям законодательства РФ. Обязателен к заполнению в случае указания доп. услуг в блоке "sellerServices":[], в других случаях не требуется. Необходимо корректно ввести номер телефона в международном формате через «+», код страны и города обязательны, без пробелов и дополнительных символов ТОЛЬКО цифры, например, +74996651111. Максимум 19 символов
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
     * @return PreregistrationSellerService[]|null
     */
    public function getSellerServices() : ?array
    {
        return $this->sellerServices;
    }
    /**
     * 
     *
     * @param PreregistrationSellerService[]|null $sellerServices
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
     * @return PreregistrationSpecification|null
     */
    public function getSpecification() : ?PreregistrationSpecification
    {
        return $this->specification;
    }
    /**
     * 
     *
     * @param PreregistrationSpecification|null $specification
     *
     * @return self
     */
    public function setSpecification(?PreregistrationSpecification $specification) : self
    {
        $this->specification = $specification;
        return $this;
    }
}