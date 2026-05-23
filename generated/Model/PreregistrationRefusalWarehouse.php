<?php

namespace glook\PecomSdk\Generated\Model;

class PreregistrationRefusalWarehouse
{
    /**
     * Поле не обязательно. Заполняется, если в RefusalWarehouse / Type указано 1 (доставка до Вашего адреса) и адрес возврата отличается от адреса с которого забирается заказ/груз. Адрес возврата обязательно должен относится к тому же филиалу, в котором будет передача заказа в ПЭК.
     *
     * @var null|string
     */
    protected $address;

    /**
     * Блок для указания получателя возвратного груза. Необязателен. Заполняется если возвратный груз будет получать не Отправитель.
     *
     * @var null|PreregistrationRefusalWarehouseRecipient
     */
    protected $recipient;

    /**
     * Способ возврата отказных грузов 0 - самовывоз, 1 - доставим до Вашего склада. Обязательный, если передается блок.
     *
     * @var int
     */
    protected $type;

    /**
     * Поле не обязательно. Заполняется, если в RefusalWarehouse / Type указано 1 (доставка до Вашего адреса) и адрес возврата отличается от адреса с которого забирается заказ/груз. Адрес возврата обязательно должен относится к тому же филиалу, в котором будет передача заказа в ПЭК.
     */
    public function getAddress(): ?string
    {
        return $this->address;
    }

    /**
     * Поле не обязательно. Заполняется, если в RefusalWarehouse / Type указано 1 (доставка до Вашего адреса) и адрес возврата отличается от адреса с которого забирается заказ/груз. Адрес возврата обязательно должен относится к тому же филиалу, в котором будет передача заказа в ПЭК.
     */
    public function setAddress(?string $address): self
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Блок для указания получателя возвратного груза. Необязателен. Заполняется если возвратный груз будет получать не Отправитель.
     */
    public function getRecipient(): ?PreregistrationRefusalWarehouseRecipient
    {
        return $this->recipient;
    }

    /**
     * Блок для указания получателя возвратного груза. Необязателен. Заполняется если возвратный груз будет получать не Отправитель.
     */
    public function setRecipient(?PreregistrationRefusalWarehouseRecipient $recipient): self
    {
        $this->recipient = $recipient;

        return $this;
    }

    /**
     * Способ возврата отказных грузов 0 - самовывоз, 1 - доставим до Вашего склада. Обязательный, если передается блок.
     */
    public function getType(): int
    {
        return $this->type;
    }

    /**
     * Способ возврата отказных грузов 0 - самовывоз, 1 - доставим до Вашего склада. Обязательный, если передается блок.
     */
    public function setType(int $type): self
    {
        $this->type = $type;

        return $this;
    }
}
