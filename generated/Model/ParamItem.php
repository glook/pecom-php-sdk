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
     * @var mixed
     */
    protected $values;

    /**
     * Идентификатор параметра
     */
    public function getKey(): string
    {
        return $this->key;
    }

    /**
     * Идентификатор параметра
     */
    public function setKey(string $key): self
    {
        $this->key = $key;

        return $this;
    }

    /**
     * Название параметра
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Название параметра
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Тип значения (Numeric, String, UNIQUEIDENTIFIER, Money, Boolean)
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Тип значения (Numeric, String, UNIQUEIDENTIFIER, Money, Boolean)
     */
    public function setType(string $type): self
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
     */
    public function setValues($values): self
    {
        $this->values = $values;

        return $this;
    }
}
