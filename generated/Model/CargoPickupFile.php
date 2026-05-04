<?php

namespace glook\PecomSdk\Generated\Model;

class CargoPickupFile
{
    /**
     * Base64-содержимое файла
     *
     * @var string|null
     */
    protected $data;
    /**
     * 
     *
     * @var string|null
     */
    protected $description;
    /**
     * 
     *
     * @var string|null
     */
    protected $filename;
    /**
     * 
     *
     * @var string|null
     */
    protected $mimeType;
    /**
     * Base64-содержимое файла
     *
     * @return string|null
     */
    public function getData() : ?string
    {
        return $this->data;
    }
    /**
     * Base64-содержимое файла
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
     * 
     *
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description) : self
    {
        $this->description = $description;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getFilename() : ?string
    {
        return $this->filename;
    }
    /**
     * 
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
     * 
     *
     * @return string|null
     */
    public function getMimeType() : ?string
    {
        return $this->mimeType;
    }
    /**
     * 
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