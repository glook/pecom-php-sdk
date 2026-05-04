<?php

namespace glook\PecomSdk\Generated\Model;

class CargopickupnetworkPayer
{
    /**
     * Данные о плательщике-третьем лице. Обязательно при type = 3
     *
     * @var CargopickupnetworkPayerOther|null
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
     *
     * @return CargopickupnetworkPayerOther|null
     */
    public function getOther() : ?CargopickupnetworkPayerOther
    {
        return $this->other;
    }
    /**
     * Данные о плательщике-третьем лице. Обязательно при type = 3
     *
     * @param CargopickupnetworkPayerOther|null $other
     *
     * @return self
     */
    public function setOther(?CargopickupnetworkPayerOther $other) : self
    {
        $this->other = $other;
        return $this;
    }
    /**
     * 1 — отправитель, 2 — получатель, 3 — третье лицо
     *
     * @return int
     */
    public function getType() : int
    {
        return $this->type;
    }
    /**
     * 1 — отправитель, 2 — получатель, 3 — третье лицо
     *
     * @param int $type
     *
     * @return self
     */
    public function setType(int $type) : self
    {
        $this->type = $type;
        return $this;
    }
}