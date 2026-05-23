<?php

namespace glook\PecomSdk\Generated\Model;

class CargopickupIdentityCard
{
    /**
     * @var \DateTime
     */
    protected $date;

    /**
     * @var null|string
     */
    protected $note;

    /**
     * @var string
     */
    protected $number;

    /**
     * @var string
     */
    protected $series;

    /**
     * Тип документа. 1 — паспорт другой страны, 2 — РВП, 3 — водительское удостоверение, 4 — ВНЖ, 6 — удостоверение беженца, 10 — паспорт гражданина РФ.
     *
     * @var int
     */
    protected $type;

    public function getDate(): \DateTime
    {
        return $this->date;
    }

    public function setDate(\DateTime $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getNote(): ?string
    {
        return $this->note;
    }

    public function setNote(?string $note): self
    {
        $this->note = $note;

        return $this;
    }

    public function getNumber(): string
    {
        return $this->number;
    }

    public function setNumber(string $number): self
    {
        $this->number = $number;

        return $this;
    }

    public function getSeries(): string
    {
        return $this->series;
    }

    public function setSeries(string $series): self
    {
        $this->series = $series;

        return $this;
    }

    /**
     * Тип документа. 1 — паспорт другой страны, 2 — РВП, 3 — водительское удостоверение, 4 — ВНЖ, 6 — удостоверение беженца, 10 — паспорт гражданина РФ.
     */
    public function getType(): int
    {
        return $this->type;
    }

    /**
     * Тип документа. 1 — паспорт другой страны, 2 — РВП, 3 — водительское удостоверение, 4 — ВНЖ, 6 — удостоверение беженца, 10 — паспорт гражданина РФ.
     */
    public function setType(int $type): self
    {
        $this->type = $type;

        return $this;
    }
}
