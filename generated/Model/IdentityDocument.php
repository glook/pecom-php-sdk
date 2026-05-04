<?php

namespace glook\PecomSdk\Generated\Model;

class IdentityDocument
{
    /**
     * Уникальный идентификатор типа документа
     *
     * @var string
     */
    protected $guid;
    /**
     * 
     *
     * @var DocumentMask
     */
    protected $mask;
    /**
     * Наименование документа
     *
     * @var string
     */
    protected $name;
    /**
     * Уникальный идентификатор типа документа
     *
     * @return string
     */
    public function getGuid() : string
    {
        return $this->guid;
    }
    /**
     * Уникальный идентификатор типа документа
     *
     * @param string $guid
     *
     * @return self
     */
    public function setGuid(string $guid) : self
    {
        $this->guid = $guid;
        return $this;
    }
    /**
     * 
     *
     * @return DocumentMask
     */
    public function getMask() : DocumentMask
    {
        return $this->mask;
    }
    /**
     * 
     *
     * @param DocumentMask $mask
     *
     * @return self
     */
    public function setMask(DocumentMask $mask) : self
    {
        $this->mask = $mask;
        return $this;
    }
    /**
     * Наименование документа
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * Наименование документа
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
}