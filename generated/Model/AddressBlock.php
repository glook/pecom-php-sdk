<?php

namespace glook\PecomSdk\Generated\Model;

class AddressBlock
{
    /**
     * Обязательный параметр для расчёта забора/доставки груза. Для успешного определения координат адреса, передавайте все составляющие адреса в такой последовательности: страна, регион, район, населенный пункт, улица, дом, квартира и разделяйте их запятыми. Запрещено в данной строке указывать данные, не являющиеся частью адреса.
     *
     * @var string|null
     */
    protected $address;
    /**
     * Координаты адреса (в виде строк для calculateprice)
     *
     * @var CoordinatesString
     */
    protected $coordinates;
    /**
     * Обязательный параметр для расчёта забора/доставки груза. Для успешного определения координат адреса, передавайте все составляющие адреса в такой последовательности: страна, регион, район, населенный пункт, улица, дом, квартира и разделяйте их запятыми. Запрещено в данной строке указывать данные, не являющиеся частью адреса.
     *
     * @return string|null
     */
    public function getAddress() : ?string
    {
        return $this->address;
    }
    /**
     * Обязательный параметр для расчёта забора/доставки груза. Для успешного определения координат адреса, передавайте все составляющие адреса в такой последовательности: страна, регион, район, населенный пункт, улица, дом, квартира и разделяйте их запятыми. Запрещено в данной строке указывать данные, не являющиеся частью адреса.
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
     * Координаты адреса (в виде строк для calculateprice)
     *
     * @return CoordinatesString
     */
    public function getCoordinates() : CoordinatesString
    {
        return $this->coordinates;
    }
    /**
     * Координаты адреса (в виде строк для calculateprice)
     *
     * @param CoordinatesString $coordinates
     *
     * @return self
     */
    public function setCoordinates(CoordinatesString $coordinates) : self
    {
        $this->coordinates = $coordinates;
        return $this;
    }
}