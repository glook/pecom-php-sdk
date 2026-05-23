<?php

namespace glook\PecomSdk\Generated\Model;

class ValidationErrorErrorFieldsItem
{
    /**
     * Имя поля, для которого возникла ошибка.
     *
     * @var null|string
     */
    protected $key;

    /**
     * Сообщения об ошибке по полю.
     *
     * @var null|string[]
     */
    protected $value;

    /**
     * Имя поля, для которого возникла ошибка.
     */
    public function getKey(): ?string
    {
        return $this->key;
    }

    /**
     * Имя поля, для которого возникла ошибка.
     */
    public function setKey(?string $key): self
    {
        $this->key = $key;

        return $this;
    }

    /**
     * Сообщения об ошибке по полю.
     *
     * @return null|string[]
     */
    public function getValue(): ?array
    {
        return $this->value;
    }

    /**
     * Сообщения об ошибке по полю.
     *
     * @param null|string[] $value
     */
    public function setValue(?array $value): self
    {
        $this->value = $value;

        return $this;
    }
}
