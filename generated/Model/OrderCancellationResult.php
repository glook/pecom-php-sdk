<?php

namespace glook\PecomSdk\Generated\Model;

class OrderCancellationResult
{
    /**
     * Код груза
     *
     * @var string
     */
    protected $code;
    /**
     * Описание
     *
     * @var string
     */
    protected $description;
    /**
     * Результат
     *
     * @var bool
     */
    protected $success;
    /**
     * Код груза
     *
     * @return string
     */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
     * Код груза
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode(string $code) : self
    {
        $this->code = $code;
        return $this;
    }
    /**
     * Описание
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Описание
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description) : self
    {
        $this->description = $description;
        return $this;
    }
    /**
     * Результат
     *
     * @return bool
     */
    public function getSuccess() : bool
    {
        return $this->success;
    }
    /**
     * Результат
     *
     * @param bool $success
     *
     * @return self
     */
    public function setSuccess(bool $success) : self
    {
        $this->success = $success;
        return $this;
    }
}