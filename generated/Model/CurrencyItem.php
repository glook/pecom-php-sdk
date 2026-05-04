<?php

namespace glook\PecomSdk\Generated\Model;

class CurrencyItem
{
    /**
     * Код валюты по общероссийскому классификатору валют
     *
     * @var string
     */
    protected $code;
    /**
     * Полное наименование валюты
     *
     * @var string
     */
    protected $fullName;
    /**
     * Краткое наименование валюты
     *
     * @var string
     */
    protected $name;
    /**
     * Код валюты по общероссийскому классификатору валют
     *
     * @return string
     */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
     * Код валюты по общероссийскому классификатору валют
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
     * Полное наименование валюты
     *
     * @return string
     */
    public function getFullName() : string
    {
        return $this->fullName;
    }
    /**
     * Полное наименование валюты
     *
     * @param string $fullName
     *
     * @return self
     */
    public function setFullName(string $fullName) : self
    {
        $this->fullName = $fullName;
        return $this;
    }
    /**
     * Краткое наименование валюты
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * Краткое наименование валюты
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