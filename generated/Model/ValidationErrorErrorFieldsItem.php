<?php

namespace glook\PecomSdk\Generated\Model;

class ValidationErrorErrorFieldsItem
{
    /**
     * Имя поля, для которого возникла ошибка
     *
     * @var string|null
     */
    protected $key;
    /**
     * Сообщения об ошибке по полю
     *
     * @var string[]|null
     */
    protected $value;
    /**
     * Имя поля, для которого возникла ошибка
     *
     * @return string|null
     */
    public function getKey() : ?string
    {
        return $this->key;
    }
    /**
     * Имя поля, для которого возникла ошибка
     *
     * @param string|null $key
     *
     * @return self
     */
    public function setKey(?string $key) : self
    {
        $this->key = $key;
        return $this;
    }
    /**
     * Сообщения об ошибке по полю
     *
     * @return string[]|null
     */
    public function getValue() : ?array
    {
        return $this->value;
    }
    /**
     * Сообщения об ошибке по полю
     *
     * @param string[]|null $value
     *
     * @return self
     */
    public function setValue(?array $value) : self
    {
        $this->value = $value;
        return $this;
    }
}