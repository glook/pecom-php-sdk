<?php

namespace glook\PecomSdk\Generated\Model;

class CargopickupnetworkPayer
{
    /**
     * Данные о плательщике-третьем лице. Обязательно при type = 3
     *
     * @var null|CargopickupnetworkPayerOther
     */
    protected $other;

    /**
     * 1 — отправитель, 2 — получатель, 3 — третье лицо
     *
     * @var int
     */
    protected $type;

    /**
     * Данные о плательщике-третьем лице. Обязательно при type = 3
     */
    public function getOther(): ?CargopickupnetworkPayerOther
    {
        return $this->other;
    }

    /**
     * Данные о плательщике-третьем лице. Обязательно при type = 3
     */
    public function setOther(?CargopickupnetworkPayerOther $other): self
    {
        $this->other = $other;

        return $this;
    }

    /**
     * 1 — отправитель, 2 — получатель, 3 — третье лицо
     */
    public function getType(): int
    {
        return $this->type;
    }

    /**
     * 1 — отправитель, 2 — получатель, 3 — третье лицо
     */
    public function setType(int $type): self
    {
        $this->type = $type;

        return $this;
    }
}
