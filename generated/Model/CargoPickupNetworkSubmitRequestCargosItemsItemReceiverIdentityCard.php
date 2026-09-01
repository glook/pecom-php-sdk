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
     * @var null|string
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
     */
    public function getDate(): \DateTime
    {
        return $this->date;
    }

    /**
     * Дата выдачи документа, удостоверяющего личность
     */
    public function setDate(\DateTime $date): self
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Служебное поле
     */
    public function getNote(): ?string
    {
        return $this->note;
    }

    /**
     * Служебное поле
     */
    public function setNote(?string $note): self
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Номер
     */
    public function getNumber(): string
    {
        return $this->number;
    }

    /**
     * Номер
     */
    public function setNumber(string $number): self
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Серия
     */
    public function getSeries(): string
    {
        return $this->series;
    }

    /**
     * Серия
     */
    public function setSeries(string $series): self
    {
        $this->series = $series;

        return $this;
    }

    /**
     * Тип документа (0 — без предоставления документа, 1–12)
     */
    public function getType(): int
    {
        return $this->type;
    }

    /**
     * Тип документа (0 — без предоставления документа, 1–12)
     */
    public function setType(int $type): self
    {
        $this->type = $type;

        return $this;
    }
}
