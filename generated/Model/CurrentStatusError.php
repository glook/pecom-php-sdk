<?php

namespace glook\PecomSdk\Generated\Model;

class CurrentStatusError
{
    /**
     * Детали ошибки
     *
     * @var string|null
     */
    protected $error;
    /**
     * Сообщение об ошибке
     *
     * @var string|null
     */
    protected $message;
    /**
     * HTTP статус код
     *
     * @var int|null
     */
    protected $status;
    /**
     * Заголовок ошибки
     *
     * @var string|null
     */
    protected $title;
    /**
     * Детали ошибки
     *
     * @return string|null
     */
    public function getError() : ?string
    {
        return $this->error;
    }
    /**
     * Детали ошибки
     *
     * @param string|null $error
     *
     * @return self
     */
    public function setError(?string $error) : self
    {
        $this->error = $error;
        return $this;
    }
    /**
     * Сообщение об ошибке
     *
     * @return string|null
     */
    public function getMessage() : ?string
    {
        return $this->message;
    }
    /**
     * Сообщение об ошибке
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
     * HTTP статус код
     *
     * @return int|null
     */
    public function getStatus() : ?int
    {
        return $this->status;
    }
    /**
     * HTTP статус код
     *
     * @param int|null $status
     *
     * @return self
     */
    public function setStatus(?int $status) : self
    {
        $this->status = $status;
        return $this;
    }
    /**
     * Заголовок ошибки
     *
     * @return string|null
     */
    public function getTitle() : ?string
    {
        return $this->title;
    }
    /**
     * Заголовок ошибки
     *
     * @param string|null $title
     *
     * @return self
     */
    public function setTitle(?string $title) : self
    {
        $this->title = $title;
        return $this;
    }
}