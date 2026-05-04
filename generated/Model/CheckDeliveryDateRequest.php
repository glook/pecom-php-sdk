<?php

namespace glook\PecomSdk\Generated\Model;

class CheckDeliveryDateRequest
{
    /**
     * Адрес забора/доставки груза. Необязательный параметр, если переданы координаты.
     *
     * @var string|null
     */
    protected $address;
    /**
     * Количество дней для расчета забора/доставки от даты запроса, расчет не более 7 дней. Если не заполнен, значение по умолчанию равно 1. Необязательный параметр.
     *
     * @var int|null
     */
    protected $calculateDays = 1;
    /**
     * Координаты адреса (в виде чисел для checkdeliverydate)
     *
     * @var CoordinatesNumber
     */
    protected $coordinates;
    /**
     * Дата запроса, необязательный параметр, если не заполнен считается от текущей даты.
     *
     * @var \DateTime|null
     */
    protected $requestDateTime;
    /**
     * Адрес забора/доставки груза. Необязательный параметр, если переданы координаты.
     *
     * @return string|null
     */
    public function getAddress() : ?string
    {
        return $this->address;
    }
    /**
     * Адрес забора/доставки груза. Необязательный параметр, если переданы координаты.
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
     * Количество дней для расчета забора/доставки от даты запроса, расчет не более 7 дней. Если не заполнен, значение по умолчанию равно 1. Необязательный параметр.
     *
     * @return int|null
     */
    public function getCalculateDays() : ?int
    {
        return $this->calculateDays;
    }
    /**
     * Количество дней для расчета забора/доставки от даты запроса, расчет не более 7 дней. Если не заполнен, значение по умолчанию равно 1. Необязательный параметр.
     *
     * @param int|null $calculateDays
     *
     * @return self
     */
    public function setCalculateDays(?int $calculateDays) : self
    {
        $this->calculateDays = $calculateDays;
        return $this;
    }
    /**
     * Координаты адреса (в виде чисел для checkdeliverydate)
     *
     * @return CoordinatesNumber
     */
    public function getCoordinates() : CoordinatesNumber
    {
        return $this->coordinates;
    }
    /**
     * Координаты адреса (в виде чисел для checkdeliverydate)
     *
     * @param CoordinatesNumber $coordinates
     *
     * @return self
     */
    public function setCoordinates(CoordinatesNumber $coordinates) : self
    {
        $this->coordinates = $coordinates;
        return $this;
    }
    /**
     * Дата запроса, необязательный параметр, если не заполнен считается от текущей даты.
     *
     * @return \DateTime|null
     */
    public function getRequestDateTime() : ?\DateTime
    {
        return $this->requestDateTime;
    }
    /**
     * Дата запроса, необязательный параметр, если не заполнен считается от текущей даты.
     *
     * @param \DateTime|null $requestDateTime
     *
     * @return self
     */
    public function setRequestDateTime(?\DateTime $requestDateTime) : self
    {
        $this->requestDateTime = $requestDateTime;
        return $this;
    }
}