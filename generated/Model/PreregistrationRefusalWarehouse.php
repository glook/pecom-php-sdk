<?php

namespace glook\PecomSdk\Generated\Model;

class PreregistrationRefusalWarehouse
{
    /**
     * Поле не обязательно. Заполняется, если в RefusalWarehouse / Type указано 1 (доставка до Вашего адреса) и адрес возврата отличается от адреса с которого забирается заказ/груз. Адрес возврата обязательно должен относится к тому же филиалу, в котором будет передача заказа в ПЭК.
     *
     * @var string|null
     */
    protected $address;
    /**
     * Блок для указания получателя возвратного груза. Необязателен. Заполняется если возвратный груз будет получать не Отправитель
     *
     * @var PreregistrationRefusalWarehouseRecipient|null
     */
    protected $recipient;
    /**
     * Способ возврата отказных грузов 0 - самовывоз, 1 - доставим до Вашего склада. Обязательный, если передается блок
     *
     * @var int
     */
    protected $type;
    /**
     * Поле не обязательно. Заполняется, если в RefusalWarehouse / Type указано 1 (доставка до Вашего адреса) и адрес возврата отличается от адреса с которого забирается заказ/груз. Адрес возврата обязательно должен относится к тому же филиалу, в котором будет передача заказа в ПЭК.
     *
     * @return string|null
     */
    public function getAddress() : ?string
    {
        return $this->address;
    }
    /**
     * Поле не обязательно. Заполняется, если в RefusalWarehouse / Type указано 1 (доставка до Вашего адреса) и адрес возврата отличается от адреса с которого забирается заказ/груз. Адрес возврата обязательно должен относится к тому же филиалу, в котором будет передача заказа в ПЭК.
     *
     * @param string|null $address
     *
     * @return self
     */
    public function setAddress(?string $address) : self
    {
        $this->address = $address;
        return $this;
    }
    /**
     * Блок для указания получателя возвратного груза. Необязателен. Заполняется если возвратный груз будет получать не Отправитель
     *
     * @return PreregistrationRefusalWarehouseRecipient|null
     */
    public function getRecipient() : ?PreregistrationRefusalWarehouseRecipient
    {
        return $this->recipient;
    }
    /**
     * Блок для указания получателя возвратного груза. Необязателен. Заполняется если возвратный груз будет получать не Отправитель
     *
     * @param PreregistrationRefusalWarehouseRecipient|null $recipient
     *
     * @return self
     */
    public function setRecipient(?PreregistrationRefusalWarehouseRecipient $recipient) : self
    {
        $this->recipient = $recipient;
        return $this;
    }
    /**
     * Способ возврата отказных грузов 0 - самовывоз, 1 - доставим до Вашего склада. Обязательный, если передается блок
     *
     * @return int
     */
    public function getType() : int
    {
        return $this->type;
    }
    /**
     * Способ возврата отказных грузов 0 - самовывоз, 1 - доставим до Вашего склада. Обязательный, если передается блок
     *
     * @param int $type
     *
     * @return self
     */
    public function setType(int $type) : self
    {
        $this->type = $type;
        return $this;
    }
}