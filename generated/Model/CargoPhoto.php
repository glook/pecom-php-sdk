<?php

namespace glook\PecomSdk\Generated\Model;

class CargoPhoto
{
    /**
     * Содержимое файла
     *
     * @var string|null
     */
    protected $data;
    /**
     * Имя файла
     *
     * @var string|null
     */
    protected $filename;
    /**
     * MIME-тип
     *
     * @var string|null
     */
    protected $mimeType;
    /**
     * Содержимое файла
     *
     * @return string|null
     */
    public function getData() : ?string
    {
        return $this->data;
    }
    /**
     * Содержимое файла
     *
     * @param string|null $data
     *
     * @return self
     */
    public function setData(?string $data) : self
    {
        $this->data = $data;
        return $this;
    }
    /**
     * Имя файла
     *
     * @return string|null
     */
    public function getFilename() : ?string
    {
        return $this->filename;
    }
    /**
     * Имя файла
     *
     * @param string|null $filename
     *
     * @return self
     */
    public function setFilename(?string $filename) : self
    {
        $this->filename = $filename;
        return $this;
    }
    /**
     * MIME-тип
     *
     * @return string|null
     */
    public function getMimeType() : ?string
    {
        return $this->mimeType;
    }
    /**
     * MIME-тип
     *
     * @param string|null $mimeType
     *
     * @return self
     */
    public function setMimeType(?string $mimeType) : self
    {
        $this->mimeType = $mimeType;
        return $this;
    }
}