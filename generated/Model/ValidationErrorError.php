<?php

namespace glook\PecomSdk\Generated\Model;

class ValidationErrorError
{
    /**
     * Дополнительная ошибка
     *
     * @var string|null
     */
    protected $error;
    /**
     * 
     *
     * @var ValidationErrorErrorFieldsItem[]|null
     */
    protected $fields;
    /**
     * Общее описание ошибки
     *
     * @var string|null
     */
    protected $message;
    /**
     * HTTP-статус ошибки
     *
     * @var int|null
     */
    protected $status;
    /**
     * Краткий заголовок ошибки
     *
     * @var string|null
     */
    protected $title;
    /**
     * Дополнительная ошибка
     *
     * @return string|null
     */
    public function getError() : ?string
    {
        return $this->error;
    }
    /**
     * Дополнительная ошибка
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
     * 
     *
     * @return ValidationErrorErrorFieldsItem[]|null
     */
    public function getFields() : ?array
    {
        return $this->fields;
    }
    /**
     * 
     *
     * @param ValidationErrorErrorFieldsItem[]|null $fields
     *
     * @return self
     */
    public function setFields(?array $fields) : self
    {
        $this->fields = $fields;
        return $this;
    }
    /**
     * Общее описание ошибки
     *
     * @return string|null
     */
    public function getMessage() : ?string
    {
        return $this->message;
    }
    /**
     * Общее описание ошибки
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
     * HTTP-статус ошибки
     *
     * @return int|null
     */
    public function getStatus() : ?int
    {
        return $this->status;
    }
    /**
     * HTTP-статус ошибки
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
     * Краткий заголовок ошибки
     *
     * @return string|null
     */
    public function getTitle() : ?string
    {
        return $this->title;
    }
    /**
     * Краткий заголовок ошибки
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