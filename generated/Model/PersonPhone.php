<?php

namespace glook\PecomSdk\Generated\Model;

class PersonPhone
{
    /**
     * Добавочный номер телефона отправителя. Необязательно. Не более 10 цифр
     *
     * @var string|null
     */
    protected $additional;
    /**
     * Контактный номер телефона отправителя. Необходимо передавать номер телефона в международном формате через «+», код страны и города обязательны, без пробелов и дополнительных символов ТОЛЬКО цифры, например, +74956601111. Максимум 19 символов.
     *
     * @var string
     */
    protected $phone;
    /**
     * Добавочный номер телефона отправителя. Необязательно. Не более 10 цифр
     *
     * @return string|null
     */
    public function getAdditional() : ?string
    {
        return $this->additional;
    }
    /**
     * Добавочный номер телефона отправителя. Необязательно. Не более 10 цифр
     *
     * @param string|null $additional
     *
     * @return self
     */
    public function setAdditional(?string $additional) : self
    {
        $this->additional = $additional;
        return $this;
    }
    /**
     * Контактный номер телефона отправителя. Необходимо передавать номер телефона в международном формате через «+», код страны и города обязательны, без пробелов и дополнительных символов ТОЛЬКО цифры, например, +74956601111. Максимум 19 символов.
     *
     * @return string
     */
    public function getPhone() : string
    {
        return $this->phone;
    }
    /**
     * Контактный номер телефона отправителя. Необходимо передавать номер телефона в международном формате через «+», код страны и города обязательны, без пробелов и дополнительных символов ТОЛЬКО цифры, например, +74956601111. Максимум 19 символов.
     *
     * @param string $phone
     *
     * @return self
     */
    public function setPhone(string $phone) : self
    {
        $this->phone = $phone;
        return $this;
    }
}