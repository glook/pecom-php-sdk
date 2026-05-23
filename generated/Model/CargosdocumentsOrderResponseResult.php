<?php

namespace glook\PecomSdk\Generated\Model;

class CargosdocumentsOrderResponseResult
{
    /**
     * Описание статуса.
     *
     * @var string
     */
    protected $description;

    /**
     * Статус документа. 0 - запрошен; 1 - готов к выдаче; -1 - ошибка; 2 - документ не может быть предоставлен.
     *
     * @var int
     */
    protected $docStatus;

    /**
     * Описание статуса.
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Описание статуса.
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Статус документа. 0 - запрошен; 1 - готов к выдаче; -1 - ошибка; 2 - документ не может быть предоставлен.
     */
    public function getDocStatus(): int
    {
        return $this->docStatus;
    }

    /**
     * Статус документа. 0 - запрошен; 1 - готов к выдаче; -1 - ошибка; 2 - документ не может быть предоставлен.
     */
    public function setDocStatus(int $docStatus): self
    {
        $this->docStatus = $docStatus;

        return $this;
    }
}
