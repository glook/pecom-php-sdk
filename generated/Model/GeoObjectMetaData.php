<?php

namespace glook\PecomSdk\Generated\Model;

class GeoObjectMetaData
{
    /**
     * 
     *
     * @var GeoDataAddress
     */
    protected $address;
    /**
     * Детализированные адресные данные
     *
     * @var GeoObjectMetaDataAddressDetails
     */
    protected $addressDetails;
    /**
     * Название компоненты адреса, до которой определен адрес в ответе
     *
     * @var string
     */
    protected $kind;
    /**
     * Точность определения координат. exact — точно, bad — заявка по такому адресу не будет принята, near — приблизительно
     *
     * @var string
     */
    protected $precision;
    /**
     * Полный адрес, предлагаемый как вариант искомого по запросу
     *
     * @var string
     */
    protected $text;
    /**
     * 
     *
     * @return GeoDataAddress
     */
    public function getAddress() : GeoDataAddress
    {
        return $this->address;
    }
    /**
     * 
     *
     * @param GeoDataAddress $address
     *
     * @return self
     */
    public function setAddress(GeoDataAddress $address) : self
    {
        $this->address = $address;
        return $this;
    }
    /**
     * Детализированные адресные данные
     *
     * @return GeoObjectMetaDataAddressDetails
     */
    public function getAddressDetails() : GeoObjectMetaDataAddressDetails
    {
        return $this->addressDetails;
    }
    /**
     * Детализированные адресные данные
     *
     * @param GeoObjectMetaDataAddressDetails $addressDetails
     *
     * @return self
     */
    public function setAddressDetails(GeoObjectMetaDataAddressDetails $addressDetails) : self
    {
        $this->addressDetails = $addressDetails;
        return $this;
    }
    /**
     * Название компоненты адреса, до которой определен адрес в ответе
     *
     * @return string
     */
    public function getKind() : string
    {
        return $this->kind;
    }
    /**
     * Название компоненты адреса, до которой определен адрес в ответе
     *
     * @param string $kind
     *
     * @return self
     */
    public function setKind(string $kind) : self
    {
        $this->kind = $kind;
        return $this;
    }
    /**
     * Точность определения координат. exact — точно, bad — заявка по такому адресу не будет принята, near — приблизительно
     *
     * @return string
     */
    public function getPrecision() : string
    {
        return $this->precision;
    }
    /**
     * Точность определения координат. exact — точно, bad — заявка по такому адресу не будет принята, near — приблизительно
     *
     * @param string $precision
     *
     * @return self
     */
    public function setPrecision(string $precision) : self
    {
        $this->precision = $precision;
        return $this;
    }
    /**
     * Полный адрес, предлагаемый как вариант искомого по запросу
     *
     * @return string
     */
    public function getText() : string
    {
        return $this->text;
    }
    /**
     * Полный адрес, предлагаемый как вариант искомого по запросу
     *
     * @param string $text
     *
     * @return self
     */
    public function setText(string $text) : self
    {
        $this->text = $text;
        return $this;
    }
}