<?php

namespace glook\PecomSdk\Generated\Model;

class ValidationErrorError
{
    /**
     * Дополнительная ошибка.
     *
     * @var null|string
     */
    protected $error;

    /**
     * @var null|ValidationErrorErrorFieldsItem[]
     */
    protected $fields;

    /**
     * Общее описание ошибки.
     *
     * @var null|string
     */
    protected $message;

    /**
     * HTTP-статус ошибки.
     *
     * @var null|int
     */
    protected $status;

    /**
     * Краткий заголовок ошибки.
     *
     * @var null|string
     */
    protected $title;

    /**
     * Дополнительная ошибка.
     */
    public function getError(): ?string
    {
        return $this->error;
    }

    /**
     * Дополнительная ошибка.
     */
    public function setError(?string $error): self
    {
        $this->error = $error;

        return $this;
    }

    /**
     * @return null|ValidationErrorErrorFieldsItem[]
     */
    public function getFields(): ?array
    {
        return $this->fields;
    }

    /**
     * @param null|ValidationErrorErrorFieldsItem[] $fields
     */
    public function setFields(?array $fields): self
    {
        $this->fields = $fields;

        return $this;
    }

    /**
     * Общее описание ошибки.
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * Общее описание ошибки.
     */
    public function setMessage(?string $message): self
    {
        $this->message = $message;

        return $this;
    }

    /**
     * HTTP-статус ошибки.
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }

    /**
     * HTTP-статус ошибки.
     */
    public function setStatus(?int $status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Краткий заголовок ошибки.
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * Краткий заголовок ошибки.
     */
    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }
}
