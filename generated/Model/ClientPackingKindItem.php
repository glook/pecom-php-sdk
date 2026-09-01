<?php

namespace glook\PecomSdk\Generated\Model;

class ClientPackingKindItem
{
    /**
     * Идентификатор упаковки
     *
     * @var string
     */
    protected $code;

    /**
     * Наименование упаковки
     *
     * @var string
     */
    protected $name;

    /**
     * Идентификатор упаковки
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * Идентификатор упаковки
     */
    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Наименование упаковки
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Наименование упаковки
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }
}
