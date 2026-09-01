<?php

namespace glook\PecomSdk\Generated\Model;

class CargoPickupFile
{
    /**
     * Base64-содержимое файла
     *
     * @var null|string
     */
    protected $data;

    /**
     * @var null|string
     */
    protected $description;

    /**
     * @var null|string
     */
    protected $filename;

    /**
     * @var null|string
     */
    protected $mimeType;

    /**
     * Base64-содержимое файла
     */
    public function getData(): ?string
    {
        return $this->data;
    }

    /**
     * Base64-содержимое файла
     */
    public function setData(?string $data): self
    {
        $this->data = $data;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getFilename(): ?string
    {
        return $this->filename;
    }

    public function setFilename(?string $filename): self
    {
        $this->filename = $filename;

        return $this;
    }

    public function getMimeType(): ?string
    {
        return $this->mimeType;
    }

    public function setMimeType(?string $mimeType): self
    {
        $this->mimeType = $mimeType;

        return $this;
    }
}
