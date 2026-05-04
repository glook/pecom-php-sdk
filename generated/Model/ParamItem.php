<?php

namespace glook\PecomSdk\Generated\Model;

class ParamItem
{
    /**
     * Идентификатор параметра
     *
     * @var string
     */
    protected $key;
    /**
     * Название параметра
     *
     * @var string
     */
    protected $name;
    /**
     * Тип значения (Numeric, String, UNIQUEIDENTIFIER, Money, Boolean)
     *
     * @var string
     */
    protected $type;
    /**
     * Значение параметра
     *
     * @var mixed|null
     */
    protected $values;
    /**
     * Идентификатор параметра
     *
     * @return string
     */
    public function getKey() : string
    {
        return $this->key;
    }
    /**
     * Идентификатор параметра
     *
     * @param string $key
     *
     * @return self
     */
    public function setKey(string $key) : self
    {
        $this->key = $key;
        return $this;
    }
    /**
     * Название параметра
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * Название параметра
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
    /**
     * Тип значения (Numeric, String, UNIQUEIDENTIFIER, Money, Boolean)
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * Тип значения (Numeric, String, UNIQUEIDENTIFIER, Money, Boolean)
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * Значение параметра
     *
     * @return mixed
     */
    public function getValues()
    {
        return $this->values;
    }
    /**
     * Значение параметра
     *
     * @param mixed $values
     *
     * @return self
     */
    public function setValues($values) : self
    {
        $this->values = $values;
        return $this;
    }
}