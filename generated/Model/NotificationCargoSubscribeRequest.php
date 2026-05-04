<?php

namespace glook\PecomSdk\Generated\Model;

class NotificationCargoSubscribeRequest
{
    /**
     * Коды грузов
     *
     * @var string[]
     */
    protected $cargoCodes;
    /**
     * email для уведомления, поле необязательно, если указано значение поля `phone`
     *
     * @var string|null
     */
    protected $email;
    /**
     * номер телефона для SMS-уведомления, поле необязательно, если указано значение поля `email`
     *
     * @var string|null
     */
    protected $phone;
    /**
     * Коды грузов
     *
     * @return string[]
     */
    public function getCargoCodes() : array
    {
        return $this->cargoCodes;
    }
    /**
     * Коды грузов
     *
     * @param string[] $cargoCodes
     *
     * @return self
     */
    public function setCargoCodes(array $cargoCodes) : self
    {
        $this->cargoCodes = $cargoCodes;
        return $this;
    }
    /**
     * email для уведомления, поле необязательно, если указано значение поля `phone`
     *
     * @return string|null
     */
    public function getEmail() : ?string
    {
        return $this->email;
    }
    /**
     * email для уведомления, поле необязательно, если указано значение поля `phone`
     *
     * @param string|null $email
     *
     * @return self
     */
    public function setEmail(?string $email) : self
    {
        $this->email = $email;
        return $this;
    }
    /**
     * номер телефона для SMS-уведомления, поле необязательно, если указано значение поля `email`
     *
     * @return string|null
     */
    public function getPhone() : ?string
    {
        return $this->phone;
    }
    /**
     * номер телефона для SMS-уведомления, поле необязательно, если указано значение поля `email`
     *
     * @param string|null $phone
     *
     * @return self
     */
    public function setPhone(?string $phone) : self
    {
        $this->phone = $phone;
        return $this;
    }
}