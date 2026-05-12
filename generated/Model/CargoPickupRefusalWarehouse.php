<?php

namespace glook\PecomSdk\Generated\Model;

class CargoPickupRefusalWarehouse
{
    /**
     * Адрес возврата. Обязателен при type = 1, если адрес отличается от адреса забора
     *
     * @var string|null
     */
    protected $address;
    /**
     * 
     *
     * @var RefusalRecipient|null
     */
    protected $recipient;
    /**
     * Способ возврата отказных грузов. 0 — самовывоз, 1 — доставим до Вашего склада
     *
     * @var int
     */
    protected $type;
    /**
     * Адрес возврата. Обязателен при type = 1, если адрес отличается от адреса забора
     *
     * @return string|null
     */
    public function getAddress() : ?string
    {
        return $this->address;
    }
    /**
     * Адрес возврата. Обязателен при type = 1, если адрес отличается от адреса забора
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
     * 
     *
     * @return RefusalRecipient|null
     */
    public function getRecipient() : ?RefusalRecipient
    {
        return $this->recipient;
    }
    /**
     * 
     *
     * @param RefusalRecipient|null $recipient
     *
     * @return self
     */
    public function setRecipient(?RefusalRecipient $recipient) : self
    {
        $this->recipient = $recipient;
        return $this;
    }
    /**
     * Способ возврата отказных грузов. 0 — самовывоз, 1 — доставим до Вашего склада
     *
     * @return int
     */
    public function getType() : int
    {
        return $this->type;
    }
    /**
     * Способ возврата отказных грузов. 0 — самовывоз, 1 — доставим до Вашего склада
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