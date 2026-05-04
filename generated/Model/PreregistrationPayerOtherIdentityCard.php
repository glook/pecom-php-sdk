<?php

namespace glook\PecomSdk\Generated\Model;

class PreregistrationPayerOtherIdentityCard
{
    /**
     * Дата выдачи документа, удостоверяющего личность
     *
     * @var \DateTime|null
     */
    protected $date;
    /**
     * служебное поле для других документов
     *
     * @var string|null
     */
    protected $note;
    /**
     * Номер
     *
     * @var string|null
     */
    protected $number;
    /**
     * Серия
     *
     * @var string|null
     */
    protected $series;
    /**
     * тип документа. Возможные значения: 1 - Паспорт (прочие страны), 2 - Разрешение на временное проживание, 3 - Водительское удостоверение, 4 - Вид на жительство, 6 - Удостоверение беженца, 10 - Паспорт гражданина РФ
     *
     * @var int|null
     */
    protected $type;
    /**
     * Дата выдачи документа, удостоверяющего личность
     *
     * @return \DateTime|null
     */
    public function getDate() : ?\DateTime
    {
        return $this->date;
    }
    /**
     * Дата выдачи документа, удостоверяющего личность
     *
     * @param \DateTime|null $date
     *
     * @return self
     */
    public function setDate(?\DateTime $date) : self
    {
        $this->date = $date;
        return $this;
    }
    /**
     * служебное поле для других документов
     *
     * @return string|null
     */
    public function getNote() : ?string
    {
        return $this->note;
    }
    /**
     * служебное поле для других документов
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
     * @return string|null
     */
    public function getNumber() : ?string
    {
        return $this->number;
    }
    /**
     * Номер
     *
     * @param string|null $number
     *
     * @return self
     */
    public function setNumber(?string $number) : self
    {
        $this->number = $number;
        return $this;
    }
    /**
     * Серия
     *
     * @return string|null
     */
    public function getSeries() : ?string
    {
        return $this->series;
    }
    /**
     * Серия
     *
     * @param string|null $series
     *
     * @return self
     */
    public function setSeries(?string $series) : self
    {
        $this->series = $series;
        return $this;
    }
    /**
     * тип документа. Возможные значения: 1 - Паспорт (прочие страны), 2 - Разрешение на временное проживание, 3 - Водительское удостоверение, 4 - Вид на жительство, 6 - Удостоверение беженца, 10 - Паспорт гражданина РФ
     *
     * @return int|null
     */
    public function getType() : ?int
    {
        return $this->type;
    }
    /**
     * тип документа. Возможные значения: 1 - Паспорт (прочие страны), 2 - Разрешение на временное проживание, 3 - Водительское удостоверение, 4 - Вид на жительство, 6 - Удостоверение беженца, 10 - Паспорт гражданина РФ
     *
     * @param int|null $type
     *
     * @return self
     */
    public function setType(?int $type) : self
    {
        $this->type = $type;
        return $this;
    }
}