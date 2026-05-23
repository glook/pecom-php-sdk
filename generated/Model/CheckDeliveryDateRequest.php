<?php

namespace glook\PecomSdk\Generated\Model;

class CheckDeliveryDateRequest
{
    /**
     * Адрес забора/доставки груза. Необязательный параметр, если переданы координаты.
     *
     * @var null|string
     */
    protected $address;

    /**
     * Количество дней для расчета забора/доставки от даты запроса, расчет не более 7 дней. Если не заполнен, значение по умолчанию равно 1. Необязательный параметр.
     *
     * @var null|int
     */
    protected $calculateDays = 1;

    /**
     * Координаты адреса забора/доставки (используется для точности вычислений), если переданы координаты, то значение в поле `address` игнорируется. Необязательный параметр.
     *
     * @var null|CoordinatesNumber
     */
    protected $coordinates;

    /**
     * Дата запроса, необязательный параметр, если не заполнен считается от текущей даты.
     *
     * @var null|\DateTime
     */
    protected $requestDateTime;

    /**
     * Адрес забора/доставки груза. Необязательный параметр, если переданы координаты.
     */
    public function getAddress(): ?string
    {
        return $this->address;
    }

    /**
     * Адрес забора/доставки груза. Необязательный параметр, если переданы координаты.
     */
    public function setAddress(?string $address): self
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Количество дней для расчета забора/доставки от даты запроса, расчет не более 7 дней. Если не заполнен, значение по умолчанию равно 1. Необязательный параметр.
     */
    public function getCalculateDays(): ?int
    {
        return $this->calculateDays;
    }

    /**
     * Количество дней для расчета забора/доставки от даты запроса, расчет не более 7 дней. Если не заполнен, значение по умолчанию равно 1. Необязательный параметр.
     */
    public function setCalculateDays(?int $calculateDays): self
    {
        $this->calculateDays = $calculateDays;

        return $this;
    }

    /**
     * Координаты адреса забора/доставки (используется для точности вычислений), если переданы координаты, то значение в поле `address` игнорируется. Необязательный параметр.
     */
    public function getCoordinates(): ?CoordinatesNumber
    {
        return $this->coordinates;
    }

    /**
     * Координаты адреса забора/доставки (используется для точности вычислений), если переданы координаты, то значение в поле `address` игнорируется. Необязательный параметр.
     */
    public function setCoordinates(?CoordinatesNumber $coordinates): self
    {
        $this->coordinates = $coordinates;

        return $this;
    }

    /**
     * Дата запроса, необязательный параметр, если не заполнен считается от текущей даты.
     */
    public function getRequestDateTime(): ?\DateTime
    {
        return $this->requestDateTime;
    }

    /**
     * Дата запроса, необязательный параметр, если не заполнен считается от текущей даты.
     */
    public function setRequestDateTime(?\DateTime $requestDateTime): self
    {
        $this->requestDateTime = $requestDateTime;

        return $this;
    }
}
