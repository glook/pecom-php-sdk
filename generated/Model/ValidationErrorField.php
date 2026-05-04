<?php

namespace glook\PecomSdk\Generated\Model;

class ValidationErrorField
{
    /**
     * Имя поля, в котором возникла ошибка
     *
     * @var string|null
     */
    protected $key;
    /**
     * Сообщения об ошибках для поля
     *
     * @var string[]|null
     */
    protected $value;
    /**
     * Имя поля, в котором возникла ошибка
     *
     * @return string|null
     */
    public function getKey() : ?string
    {
        return $this->key;
    }
    /**
     * Имя поля, в котором возникла ошибка
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
     * Сообщения об ошибках для поля
     *
     * @return string[]|null
     */
    public function getValue() : ?array
    {
        return $this->value;
    }
    /**
     * Сообщения об ошибках для поля
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