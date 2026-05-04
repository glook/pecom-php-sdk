<?php

namespace glook\PecomSdk\Generated\Model;

class NetshopPayer
{
    /**
     * 
     *
     * @var NetshopPayerOther|null
     */
    protected $other;
    /**
     * Плательщик (1 - отправитель, 2 - получатель, 3 - третье лицо)
     *
     * @var int
     */
    protected $type;
    /**
     * 
     *
     * @return NetshopPayerOther|null
     */
    public function getOther() : ?NetshopPayerOther
    {
        return $this->other;
    }
    /**
     * 
     *
     * @param NetshopPayerOther|null $other
     *
     * @return self
     */
    public function setOther(?NetshopPayerOther $other) : self
    {
        $this->other = $other;
        return $this;
    }
    /**
     * Плательщик (1 - отправитель, 2 - получатель, 3 - третье лицо)
     *
     * @return int
     */
    public function getType() : int
    {
        return $this->type;
    }
    /**
     * Плательщик (1 - отправитель, 2 - получатель, 3 - третье лицо)
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