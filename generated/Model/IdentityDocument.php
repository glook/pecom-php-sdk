<?php

namespace glook\PecomSdk\Generated\Model;

class IdentityDocument
{
    /**
     * Уникальный идентификатор типа документа.
     *
     * @var string
     */
    protected $guid;

    /**
     * Маска документа.
     *
     * @var DocumentMask
     */
    protected $mask;

    /**
     * Наименование документа.
     *
     * @var string
     */
    protected $name;

    /**
     * Уникальный идентификатор типа документа.
     */
    public function getGuid(): string
    {
        return $this->guid;
    }

    /**
     * Уникальный идентификатор типа документа.
     */
    public function setGuid(string $guid): self
    {
        $this->guid = $guid;

        return $this;
    }

    /**
     * Маска документа.
     */
    public function getMask(): DocumentMask
    {
        return $this->mask;
    }

    /**
     * Маска документа.
     */
    public function setMask(DocumentMask $mask): self
    {
        $this->mask = $mask;

        return $this;
    }

    /**
     * Наименование документа.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Наименование документа.
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }
}
