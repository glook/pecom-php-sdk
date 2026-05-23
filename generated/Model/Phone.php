<?php

namespace glook\PecomSdk\Generated\Model;

class Phone
{
    /**
     * Добавочный номер. Не более 10 цифр
     *
     * @var null|string
     */
    protected $additional;

    /**
     * Контактный номер телефона. Необходимо передавать номер телефона в международном формате через «+», код страны и города обязательны, без пробелов и дополнительных символов ТОЛЬКО цифры, например, +74956601111. Максимум 19 символов.
     *
     * @var string
     */
    protected $phone;

    /**
     * Добавочный номер. Не более 10 цифр
     */
    public function getAdditional(): ?string
    {
        return $this->additional;
    }

    /**
     * Добавочный номер. Не более 10 цифр
     */
    public function setAdditional(?string $additional): self
    {
        $this->additional = $additional;

        return $this;
    }

    /**
     * Контактный номер телефона. Необходимо передавать номер телефона в международном формате через «+», код страны и города обязательны, без пробелов и дополнительных символов ТОЛЬКО цифры, например, +74956601111. Максимум 19 символов.
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * Контактный номер телефона. Необходимо передавать номер телефона в международном формате через «+», код страны и города обязательны, без пробелов и дополнительных символов ТОЛЬКО цифры, например, +74956601111. Максимум 19 символов.
     */
    public function setPhone(string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }
}
