<?php

namespace glook\PecomSdk\Generated\Model;

class NetshopPayer
{
    /**
     * @var null|NetshopPayerOther
     */
    protected $other;

    /**
     * Плательщик (1 - отправитель, 2 - получатель, 3 - третье лицо)
     *
     * @var int
     */
    protected $type;

    public function getOther(): ?NetshopPayerOther
    {
        return $this->other;
    }

    public function setOther(?NetshopPayerOther $other): self
    {
        $this->other = $other;

        return $this;
    }

    /**
     * Плательщик (1 - отправитель, 2 - получатель, 3 - третье лицо)
     */
    public function getType(): int
    {
        return $this->type;
    }

    /**
     * Плательщик (1 - отправитель, 2 - получатель, 3 - третье лицо)
     */
    public function setType(int $type): self
    {
        $this->type = $type;

        return $this;
    }
}
