<?php

namespace glook\PecomSdk\Generated\Model;

class CargoPhoto
{
    /**
     * Содержимое файла.
     *
     * @var null|string
     */
    protected $data;

    /**
     * Имя файла.
     *
     * @var null|string
     */
    protected $filename;

    /**
     * MIME-тип
     *
     * @var null|string
     */
    protected $mimeType;

    /**
     * Содержимое файла.
     */
    public function getData(): ?string
    {
        return $this->data;
    }

    /**
     * Содержимое файла.
     */
    public function setData(?string $data): self
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Имя файла.
     */
    public function getFilename(): ?string
    {
        return $this->filename;
    }

    /**
     * Имя файла.
     */
    public function setFilename(?string $filename): self
    {
        $this->filename = $filename;

        return $this;
    }

    /**
     * MIME-тип
     */
    public function getMimeType(): ?string
    {
        return $this->mimeType;
    }

    /**
     * MIME-тип
     */
    public function setMimeType(?string $mimeType): self
    {
        $this->mimeType = $mimeType;

        return $this;
    }
}
