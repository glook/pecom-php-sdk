<?php

namespace glook\PecomSdk\Generated\Model;

class CargosdocumentsGetcontentSuccessResponse
{
    /**
     * Тело документа в стандарте - base64
     *
     * @var string
     */
    protected $docBody;
    /**
     * Если был указан входящий параметр `docFormat`
     *
     * @var string|null
     */
    protected $docFormat;
    /**
     * Наименование документа
     *
     * @var string
     */
    protected $docName;
    /**
     * Тело документа в стандарте - base64
     *
     * @return string
     */
    public function getDocBody() : string
    {
        return $this->docBody;
    }
    /**
     * Тело документа в стандарте - base64
     *
     * @param string $docBody
     *
     * @return self
     */
    public function setDocBody(string $docBody) : self
    {
        $this->docBody = $docBody;
        return $this;
    }
    /**
     * Если был указан входящий параметр `docFormat`
     *
     * @return string|null
     */
    public function getDocFormat() : ?string
    {
        return $this->docFormat;
    }
    /**
     * Если был указан входящий параметр `docFormat`
     *
     * @param string|null $docFormat
     *
     * @return self
     */
    public function setDocFormat(?string $docFormat) : self
    {
        $this->docFormat = $docFormat;
        return $this;
    }
    /**
     * Наименование документа
     *
     * @return string
     */
    public function getDocName() : string
    {
        return $this->docName;
    }
    /**
     * Наименование документа
     *
     * @param string $docName
     *
     * @return self
     */
    public function setDocName(string $docName) : self
    {
        $this->docName = $docName;
        return $this;
    }
}