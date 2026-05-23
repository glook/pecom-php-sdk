<?php

namespace glook\PecomSdk\Generated\Model;

class CommonErrorObject
{
    /**
     * Краткий заголовок ошибки.
     *
     * @var string
     */
    protected $title;

    /**
     * Подробное сообщение об ошибке.
     *
     * @var string
     */
    protected $message;

    /**
     * Дополнительные данные об ошибке, если они возвращены сервисом
     *
     * @var null|mixed
     */
    protected $error;

    /**
     * HTTP-статус или сервисный статус, если он присутствует в теле ответа.
     *
     * @var null|int
     */
    protected $status;

    /**
     * Список полей с ошибками валидации (присутствует при ошибках валидации запроса).
     *
     * @var null|ValidationErrorField[]
     */
    protected $fields;

    /**
     * Краткий заголовок ошибки.
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Краткий заголовок ошибки.
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Подробное сообщение об ошибке.
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * Подробное сообщение об ошибке.
     */
    public function setMessage(string $message): self
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Дополнительные данные об ошибке, если они возвращены сервисом
     *
     * @return mixed
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * Дополнительные данные об ошибке, если они возвращены сервисом
     *
     * @param mixed $error
     */
    public function setError($error): self
    {
        $this->error = $error;

        return $this;
    }

    /**
     * HTTP-статус или сервисный статус, если он присутствует в теле ответа.
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }

    /**
     * HTTP-статус или сервисный статус, если он присутствует в теле ответа.
     */
    public function setStatus(?int $status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Список полей с ошибками валидации (присутствует при ошибках валидации запроса).
     *
     * @return null|ValidationErrorField[]
     */
    public function getFields(): ?array
    {
        return $this->fields;
    }

    /**
     * Список полей с ошибками валидации (присутствует при ошибках валидации запроса).
     *
     * @param null|ValidationErrorField[] $fields
     */
    public function setFields(?array $fields): self
    {
        $this->fields = $fields;

        return $this;
    }
}
