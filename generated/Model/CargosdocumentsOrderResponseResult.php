<?php

namespace glook\PecomSdk\Generated\Model;

class CargosdocumentsOrderResponseResult
{
    /**
     * Описание статуса
     *
     * @var string
     */
    protected $description;
    /**
     * Статус документа. 0 - запрошен; 1 - готов к выдаче; -1 - ошибка; 2 - документ не может быть предоставлен
     *
     * @var int
     */
    protected $docStatus;
    /**
     * Описание статуса
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Описание статуса
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
     * Статус документа. 0 - запрошен; 1 - готов к выдаче; -1 - ошибка; 2 - документ не может быть предоставлен
     *
     * @return int
     */
    public function getDocStatus() : int
    {
        return $this->docStatus;
    }
    /**
     * Статус документа. 0 - запрошен; 1 - готов к выдаче; -1 - ошибка; 2 - документ не может быть предоставлен
     *
     * @param int $docStatus
     *
     * @return self
     */
    public function setDocStatus(int $docStatus) : self
    {
        $this->docStatus = $docStatus;
        return $this;
    }
}