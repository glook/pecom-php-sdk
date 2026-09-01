<?php

namespace glook\PecomSdk\Generated\Model;

class CurrentStatusError
{
    /**
     * Детали ошибки
     *
     * @var null|string
     */
    protected $error;

    /**
     * Сообщение об ошибке
     *
     * @var null|string
     */
    protected $message;

    /**
     * HTTP статус код
     *
     * @var null|int
     */
    protected $status;

    /**
     * Заголовок ошибки
     *
     * @var null|string
     */
    protected $title;

    /**
     * Детали ошибки
     */
    public function getError(): ?string
    {
        return $this->error;
    }

    /**
     * Детали ошибки
     */
    public function setError(?string $error): self
    {
        $this->error = $error;

        return $this;
    }

    /**
     * Сообщение об ошибке
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * Сообщение об ошибке
     */
    public function setMessage(?string $message): self
    {
        $this->message = $message;

        return $this;
    }

    /**
     * HTTP статус код
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }

    /**
     * HTTP статус код
     */
    public function setStatus(?int $status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Заголовок ошибки
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * Заголовок ошибки
     */
    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }
}
