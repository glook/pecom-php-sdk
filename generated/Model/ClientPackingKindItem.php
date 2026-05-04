<?php

namespace glook\PecomSdk\Generated\Model;

class ClientPackingKindItem
{
    /**
     * Идентификатор упаковки
     *
     * @var string
     */
    protected $code;
    /**
     * Наименование упаковки
     *
     * @var string
     */
    protected $name;
    /**
     * Идентификатор упаковки
     *
     * @return string
     */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
     * Идентификатор упаковки
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
     * Наименование упаковки
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * Наименование упаковки
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