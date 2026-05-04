<?php

namespace glook\PecomSdk\Generated\Model;

class NetshopIdentityCard
{
    /**
     * Дата
     *
     * @var \DateTime|null
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
     * @var string|null
     */
    protected $number;
    /**
     * 
     *
     * @var string|null
     */
    protected $series;
    /**
     * Тип документа: 1 - ПАСПОРТ ИНОСТРАННОГО ГРАЖДАНИНА, 2 - РАЗРЕШЕНИЕ НА ВРЕМЕННОЕ ПРОЖИВАНИЕ, 3 - ВОДИТЕЛЬСКОЕ УДОСТОВЕРЕНИЕ, 4 - ВИД НА ЖИТЕЛЬСТВО, 5 - ЗАГРАНИЧНЫЙ ПАСПОРТ, 6 - УДОСТОВЕРЕНИЕ БЕЖЕНЦА, 7 - ВРЕМЕННОЕ УДОСТОВЕРЕНИЕ ЛИЧНОСТИ ГРАЖДАНИНА РФ, 8 - СВИДЕТЕЛЬСТВО О ПРЕДОСТАВЛЕНИИ ВРЕМЕННОГО УБЕЖИЩА НА ТЕРРИТОРИИ РФ, 9 - ПАСПОРТ МОРЯКА, 10 - ПАСПОРТ ГРАЖДАНИНА РФ, 11 - СВИДЕТЕЛЬСТВО О РАССМОТРЕНИИ ХОДАТАЙСТВА О ПРИЗНАНИИ БЕЖЕНЦЕМ, 12 - ВОЕННЫЙ БИЛЕТ
     *
     * @var int|null
     */
    protected $type;
    /**
     * Дата
     *
     * @return \DateTime|null
     */
    public function getDate() : ?\DateTime
    {
        return $this->date;
    }
    /**
     * Дата
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
     * @return string|null
     */
    public function getNumber() : ?string
    {
        return $this->number;
    }
    /**
     * 
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
     * 
     *
     * @return string|null
     */
    public function getSeries() : ?string
    {
        return $this->series;
    }
    /**
     * 
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
     * Тип документа: 1 - ПАСПОРТ ИНОСТРАННОГО ГРАЖДАНИНА, 2 - РАЗРЕШЕНИЕ НА ВРЕМЕННОЕ ПРОЖИВАНИЕ, 3 - ВОДИТЕЛЬСКОЕ УДОСТОВЕРЕНИЕ, 4 - ВИД НА ЖИТЕЛЬСТВО, 5 - ЗАГРАНИЧНЫЙ ПАСПОРТ, 6 - УДОСТОВЕРЕНИЕ БЕЖЕНЦА, 7 - ВРЕМЕННОЕ УДОСТОВЕРЕНИЕ ЛИЧНОСТИ ГРАЖДАНИНА РФ, 8 - СВИДЕТЕЛЬСТВО О ПРЕДОСТАВЛЕНИИ ВРЕМЕННОГО УБЕЖИЩА НА ТЕРРИТОРИИ РФ, 9 - ПАСПОРТ МОРЯКА, 10 - ПАСПОРТ ГРАЖДАНИНА РФ, 11 - СВИДЕТЕЛЬСТВО О РАССМОТРЕНИИ ХОДАТАЙСТВА О ПРИЗНАНИИ БЕЖЕНЦЕМ, 12 - ВОЕННЫЙ БИЛЕТ
     *
     * @return int|null
     */
    public function getType() : ?int
    {
        return $this->type;
    }
    /**
     * Тип документа: 1 - ПАСПОРТ ИНОСТРАННОГО ГРАЖДАНИНА, 2 - РАЗРЕШЕНИЕ НА ВРЕМЕННОЕ ПРОЖИВАНИЕ, 3 - ВОДИТЕЛЬСКОЕ УДОСТОВЕРЕНИЕ, 4 - ВИД НА ЖИТЕЛЬСТВО, 5 - ЗАГРАНИЧНЫЙ ПАСПОРТ, 6 - УДОСТОВЕРЕНИЕ БЕЖЕНЦА, 7 - ВРЕМЕННОЕ УДОСТОВЕРЕНИЕ ЛИЧНОСТИ ГРАЖДАНИНА РФ, 8 - СВИДЕТЕЛЬСТВО О ПРЕДОСТАВЛЕНИИ ВРЕМЕННОГО УБЕЖИЩА НА ТЕРРИТОРИИ РФ, 9 - ПАСПОРТ МОРЯКА, 10 - ПАСПОРТ ГРАЖДАНИНА РФ, 11 - СВИДЕТЕЛЬСТВО О РАССМОТРЕНИИ ХОДАТАЙСТВА О ПРИЗНАНИИ БЕЖЕНЦЕМ, 12 - ВОЕННЫЙ БИЛЕТ
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