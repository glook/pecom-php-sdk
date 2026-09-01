<?php

namespace glook\PecomSdk\Generated\Model;

class ValidationErrorField
{
    /**
     * Имя поля, в котором возникла ошибка
     *
     * @var null|string
     */
    protected $key;

    /**
     * Сообщения об ошибках для поля
     *
     * @var null|string[]
     */
    protected $value;

    /**
     * Имя поля, в котором возникла ошибка
     */
    public function getKey(): ?string
    {
        return $this->key;
    }

    /**
     * Имя поля, в котором возникла ошибка
     */
    public function setKey(?string $key): self
    {
        $this->key = $key;

        return $this;
    }

    /**
     * Сообщения об ошибках для поля
     *
     * @return null|string[]
     */
    public function getValue(): ?array
    {
        return $this->value;
    }

    /**
     * Сообщения об ошибках для поля
     *
     * @param null|string[] $value
     */
    public function setValue(?array $value): self
    {
        $this->value = $value;

        return $this;
    }
}
