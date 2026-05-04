<?php

namespace glook\PecomSdk\Generated\Model;

class CargopickupIdentityCard
{
    /**
     * 
     *
     * @var \DateTime
     */
    protected $date;
    /**
     * 
     *
     * @var string|null
     */
    protected $note;
    /**
     * 
     *
     * @var string
     */
    protected $number;
    /**
     * 
     *
     * @var string
     */
    protected $series;
    /**
     * Тип документа. 1 — паспорт другой страны, 2 — РВП, 3 — водительское удостоверение, 4 — ВНЖ, 6 — удостоверение беженца, 10 — паспорт гражданина РФ
     *
     * @var int
     */
    protected $type;
    /**
     * 
     *
     * @return \DateTime
     */
    public function getDate() : \DateTime
    {
        return $this->date;
    }
    /**
     * 
     *
     * @param \DateTime $date
     *
     * @return self
     */
    public function setDate(\DateTime $date) : self
    {
        $this->date = $date;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getNote() : ?string
    {
        return $this->note;
    }
    /**
     * 
     *
     * @param string|null $note
     *
     * @return self
     */
    public function setNote(?string $note) : self
    {
        $this->note = $note;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getNumber() : string
    {
        return $this->number;
    }
    /**
     * 
     *
     * @param string $number
     *
     * @return self
     */
    public function setNumber(string $number) : self
    {
        $this->number = $number;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSeries() : string
    {
        return $this->series;
    }
    /**
     * 
     *
     * @param string $series
     *
     * @return self
     */
    public function setSeries(string $series) : self
    {
        $this->series = $series;
        return $this;
    }
    /**
     * Тип документа. 1 — паспорт другой страны, 2 — РВП, 3 — водительское удостоверение, 4 — ВНЖ, 6 — удостоверение беженца, 10 — паспорт гражданина РФ
     *
     * @return int
     */
    public function getType() : int
    {
        return $this->type;
    }
    /**
     * Тип документа. 1 — паспорт другой страны, 2 — РВП, 3 — водительское удостоверение, 4 — ВНЖ, 6 — удостоверение беженца, 10 — паспорт гражданина РФ
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