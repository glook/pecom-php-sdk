<?php

namespace glook\PecomSdk\Generated\Model;

class CargosdocumentsGetcontentErrorResponseError
{
    /**
     * Детали ошибки. Может быть null.
     *
     * @var null|mixed
     */
    protected $error;

    /**
     * Сообщение ошибки.
     *
     * @var null|string
     */
    protected $message;

    /**
     * HTTP/сервисный статус
     *
     * @var int
     */
    protected $status;

    /**
     * Заголовок ошибки.
     *
     * @var string
     */
    protected $title;

    /**
     * Детали ошибки. Может быть null.
     *
     * @return mixed
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * Детали ошибки. Может быть null.
     *
     * @param mixed $error
     */
    public function setError($error): self
    {
        $this->error = $error;

        return $this;
    }

    /**
     * Сообщение ошибки.
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * Сообщение ошибки.
     */
    public function setMessage(?string $message): self
    {
        $this->message = $message;

        return $this;
    }

    /**
     * HTTP/сервисный статус
     */
    public function getStatus(): int
    {
        return $this->status;
    }

    /**
     * HTTP/сервисный статус
     */
    public function setStatus(int $status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Заголовок ошибки.
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Заголовок ошибки.
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }
}
