<?php

namespace glook\PecomSdk\Generated\Model;

class CargoPickupNetworkSubmitRequestCargosItemsItemReceiverIdentityCard
{
    /**
     * Дата выдачи документа, удостоверяющего личность
     *
     * @var \DateTime
     */
    protected $date;
    /**
     * Служебное поле
     *
     * @var string|null
     */
    protected $note;
    /**
     * Номер
     *
     * @var string
     */
    protected $number;
    /**
     * Серия
     *
     * @var string
     */
    protected $series;
    /**
     * Тип документа (0 — без предоставления документа, 1–12)
     *
     * @var int
     */
    protected $type;
    /**
     * Дата выдачи документа, удостоверяющего личность
     *
     * @return \DateTime
     */
    public function getDate() : \DateTime
    {
        return $this->date;
    }
    /**
     * Дата выдачи документа, удостоверяющего личность
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
     * Служебное поле
     *
     * @return string|null
     */
    public function getNote() : ?string
    {
        return $this->note;
    }
    /**
     * Служебное поле
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
     * Номер
     *
     * @return string
     */
    public function getNumber() : string
    {
        return $this->number;
    }
    /**
     * Номер
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
     * Серия
     *
     * @return string
     */
    public function getSeries() : string
    {
        return $this->series;
    }
    /**
     * Серия
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
     * Тип документа (0 — без предоставления документа, 1–12)
     *
     * @return int
     */
    public function getType() : int
    {
        return $this->type;
    }
    /**
     * Тип документа (0 — без предоставления документа, 1–12)
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