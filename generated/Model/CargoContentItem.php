<?php

namespace glook\PecomSdk\Generated\Model;

class CargoContentItem
{
    /**
     * Код наименования груза
     *
     * @var string
     */
    protected $code;
    /**
     * признак хрупкости груза. Если стоит `true`, то для перевозки груза данной категории необходимо заказывать Защитную транспортировочную упаковку
     *
     * @var bool
     */
    protected $isFragile;
    /**
     * Наименование груза
     *
     * @var string
     */
    protected $name;
    /**
     * Код наименования груза
     *
     * @return string
     */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
     * Код наименования груза
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode(string $code) : self
    {
        $this->code = $code;
        return $this;
    }
    /**
     * признак хрупкости груза. Если стоит `true`, то для перевозки груза данной категории необходимо заказывать Защитную транспортировочную упаковку
     *
     * @return bool
     */
    public function getIsFragile() : bool
    {
        return $this->isFragile;
    }
    /**
     * признак хрупкости груза. Если стоит `true`, то для перевозки груза данной категории необходимо заказывать Защитную транспортировочную упаковку
     *
     * @param bool $isFragile
     *
     * @return self
     */
    public function setIsFragile(bool $isFragile) : self
    {
        $this->isFragile = $isFragile;
        return $this;
    }
    /**
     * Наименование груза
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * Наименование груза
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
}