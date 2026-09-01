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
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * Код груза
     */
    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Описание
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Описание
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Результат
     */
    public function getSuccess(): bool
    {
        return $this->success;
    }

    /**
     * Результат
     */
    public function setSuccess(bool $success): self
    {
        $this->success = $success;

        return $this;
    }
}
