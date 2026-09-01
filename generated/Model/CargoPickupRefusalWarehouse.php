<?php

namespace glook\PecomSdk\Generated\Model;

class CargoPickupRefusalWarehouse
{
    /**
     * Адрес возврата. Обязателен при type = 1, если адрес отличается от адреса забора
     *
     * @var null|string
     */
    protected $address;

    /**
     * @var null|RefusalRecipient
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
     */
    public function getAddress(): ?string
    {
        return $this->address;
    }

    /**
     * Адрес возврата. Обязателен при type = 1, если адрес отличается от адреса забора
     */
    public function setAddress(?string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getRecipient(): ?RefusalRecipient
    {
        return $this->recipient;
    }

    public function setRecipient(?RefusalRecipient $recipient): self
    {
        $this->recipient = $recipient;

        return $this;
    }

    /**
     * Способ возврата отказных грузов. 0 — самовывоз, 1 — доставим до Вашего склада
     */
    public function getType(): int
    {
        return $this->type;
    }

    /**
     * Способ возврата отказных грузов. 0 — самовывоз, 1 — доставим до Вашего склада
     */
    public function setType(int $type): self
    {
        $this->type = $type;

        return $this;
    }
}
