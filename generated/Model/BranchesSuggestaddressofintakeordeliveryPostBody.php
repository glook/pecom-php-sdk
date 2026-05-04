<?php

namespace glook\PecomSdk\Generated\Model;

class BranchesSuggestaddressofintakeordeliveryPostBody
{
    /**
     * Часть адреса для получения вариантов наиболее похожих доступных адресов забора и доставки
     *
     * @var string
     */
    protected $address;
    /**
     * Часть адреса для получения вариантов наиболее похожих доступных адресов забора и доставки
     *
     * @return string
     */
    public function getAddress() : string
    {
        return $this->address;
    }
    /**
     * Часть адреса для получения вариантов наиболее похожих доступных адресов забора и доставки
     *
     * @param string $address
     *
     * @return self
     */
    public function setAddress(string $address) : self
    {
        $this->address = $address;
        return $this;
    }
}