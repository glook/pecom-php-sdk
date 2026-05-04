<?php

namespace glook\PecomSdk\Generated\Model;

class CargosdocumentsGetcontentErrorResponseError
{
    /**
     * Детали ошибки. Может быть null
     *
     * @var mixed|null
     */
    protected $error;
    /**
     * Сообщение ошибки
     *
     * @var string|null
     */
    protected $message;
    /**
     * HTTP/сервисный статус
     *
     * @var int
     */
    protected $status;
    /**
     * Заголовок ошибки
     *
     * @var string
     */
    protected $title;
    /**
     * Детали ошибки. Может быть null
     *
     * @return mixed
     */
    public function getError()
    {
        return $this->error;
    }
    /**
     * Детали ошибки. Может быть null
     *
     * @param mixed $error
     *
     * @return self
     */
    public function setError($error) : self
    {
        $this->error = $error;
        return $this;
    }
    /**
     * Сообщение ошибки
     *
     * @return string|null
     */
    public function getMessage() : ?string
    {
        return $this->message;
    }
    /**
     * Сообщение ошибки
     *
     * @param string|null $message
     *
     * @return self
     */
    public function setMessage(?string $message) : self
    {
        $this->message = $message;
        return $this;
    }
    /**
     * HTTP/сервисный статус
     *
     * @return int
     */
    public function getStatus() : int
    {
        return $this->status;
    }
    /**
     * HTTP/сервисный статус
     *
     * @param int $status
     *
     * @return self
     */
    public function setStatus(int $status) : self
    {
        $this->status = $status;
        return $this;
    }
    /**
     * Заголовок ошибки
     *
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title;
    }
    /**
     * Заголовок ошибки
     *
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title) : self
    {
        $this->title = $title;
        return $this;
    }
}