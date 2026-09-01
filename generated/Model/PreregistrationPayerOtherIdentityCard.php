<?php

namespace glook\PecomSdk\Generated\Model;

class PreregistrationPayerOtherIdentityCard
{
    /**
     * Дата выдачи документа, удостоверяющего личность
     *
     * @var null|\DateTime
     */
    protected $date;

    /**
     * служебное поле для других документов
     *
     * @var null|string
     */
    protected $note;

    /**
     * Номер
     *
     * @var null|string
     */
    protected $number;

    /**
     * Серия
     *
     * @var null|string
     */
    protected $series;

    /**
     * тип документа. Возможные значения: 1 - Паспорт (прочие страны), 2 - Разрешение на временное проживание, 3 - Водительское удостоверение, 4 - Вид на жительство, 6 - Удостоверение беженца, 10 - Паспорт гражданина РФ
     *
     * @var null|int
     */
    protected $type;

    /**
     * Дата выдачи документа, удостоверяющего личность
     */
    public function getDate(): ?\DateTime
    {
        return $this->date;
    }

    /**
     * Дата выдачи документа, удостоверяющего личность
     */
    public function setDate(?\DateTime $date): self
    {
        $this->date = $date;

        return $this;
    }

    /**
     * служебное поле для других документов
     */
    public function getNote(): ?string
    {
        return $this->note;
    }

    /**
     * служебное поле для других документов
     */
    public function setNote(?string $note): self
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Номер
     */
    public function getNumber(): ?string
    {
        return $this->number;
    }

    /**
     * Номер
     */
    public function setNumber(?string $number): self
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Серия
     */
    public function getSeries(): ?string
    {
        return $this->series;
    }

    /**
     * Серия
     */
    public function setSeries(?string $series): self
    {
        $this->series = $series;

        return $this;
    }

    /**
     * тип документа. Возможные значения: 1 - Паспорт (прочие страны), 2 - Разрешение на временное проживание, 3 - Водительское удостоверение, 4 - Вид на жительство, 6 - Удостоверение беженца, 10 - Паспорт гражданина РФ
     */
    public function getType(): ?int
    {
        return $this->type;
    }

    /**
     * тип документа. Возможные значения: 1 - Паспорт (прочие страны), 2 - Разрешение на временное проживание, 3 - Водительское удостоверение, 4 - Вид на жительство, 6 - Удостоверение беженца, 10 - Паспорт гражданина РФ
     */
    public function setType(?int $type): self
    {
        $this->type = $type;

        return $this;
    }
}
