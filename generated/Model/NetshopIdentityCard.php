<?php

namespace glook\PecomSdk\Generated\Model;

class NetshopIdentityCard
{
    /**
     * Дата
     *
     * @var null|\DateTime
     */
    protected $date;

    /**
     * @var null|string
     */
    protected $note;

    /**
     * @var null|string
     */
    protected $number;

    /**
     * @var null|string
     */
    protected $series;

    /**
     * Тип документа: 1 - ПАСПОРТ ИНОСТРАННОГО ГРАЖДАНИНА, 2 - РАЗРЕШЕНИЕ НА ВРЕМЕННОЕ ПРОЖИВАНИЕ, 3 - ВОДИТЕЛЬСКОЕ УДОСТОВЕРЕНИЕ, 4 - ВИД НА ЖИТЕЛЬСТВО, 5 - ЗАГРАНИЧНЫЙ ПАСПОРТ, 6 - УДОСТОВЕРЕНИЕ БЕЖЕНЦА, 7 - ВРЕМЕННОЕ УДОСТОВЕРЕНИЕ ЛИЧНОСТИ ГРАЖДАНИНА РФ, 8 - СВИДЕТЕЛЬСТВО О ПРЕДОСТАВЛЕНИИ ВРЕМЕННОГО УБЕЖИЩА НА ТЕРРИТОРИИ РФ, 9 - ПАСПОРТ МОРЯКА, 10 - ПАСПОРТ ГРАЖДАНИНА РФ, 11 - СВИДЕТЕЛЬСТВО О РАССМОТРЕНИИ ХОДАТАЙСТВА О ПРИЗНАНИИ БЕЖЕНЦЕМ, 12 - ВОЕННЫЙ БИЛЕТ
     *
     * @var null|int
     */
    protected $type;

    /**
     * Дата
     */
    public function getDate(): ?\DateTime
    {
        return $this->date;
    }

    /**
     * Дата
     */
    public function setDate(?\DateTime $date): self
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

    public function getNumber(): ?string
    {
        return $this->number;
    }

    public function setNumber(?string $number): self
    {
        $this->number = $number;

        return $this;
    }

    public function getSeries(): ?string
    {
        return $this->series;
    }

    public function setSeries(?string $series): self
    {
        $this->series = $series;

        return $this;
    }

    /**
     * Тип документа: 1 - ПАСПОРТ ИНОСТРАННОГО ГРАЖДАНИНА, 2 - РАЗРЕШЕНИЕ НА ВРЕМЕННОЕ ПРОЖИВАНИЕ, 3 - ВОДИТЕЛЬСКОЕ УДОСТОВЕРЕНИЕ, 4 - ВИД НА ЖИТЕЛЬСТВО, 5 - ЗАГРАНИЧНЫЙ ПАСПОРТ, 6 - УДОСТОВЕРЕНИЕ БЕЖЕНЦА, 7 - ВРЕМЕННОЕ УДОСТОВЕРЕНИЕ ЛИЧНОСТИ ГРАЖДАНИНА РФ, 8 - СВИДЕТЕЛЬСТВО О ПРЕДОСТАВЛЕНИИ ВРЕМЕННОГО УБЕЖИЩА НА ТЕРРИТОРИИ РФ, 9 - ПАСПОРТ МОРЯКА, 10 - ПАСПОРТ ГРАЖДАНИНА РФ, 11 - СВИДЕТЕЛЬСТВО О РАССМОТРЕНИИ ХОДАТАЙСТВА О ПРИЗНАНИИ БЕЖЕНЦЕМ, 12 - ВОЕННЫЙ БИЛЕТ
     */
    public function getType(): ?int
    {
        return $this->type;
    }

    /**
     * Тип документа: 1 - ПАСПОРТ ИНОСТРАННОГО ГРАЖДАНИНА, 2 - РАЗРЕШЕНИЕ НА ВРЕМЕННОЕ ПРОЖИВАНИЕ, 3 - ВОДИТЕЛЬСКОЕ УДОСТОВЕРЕНИЕ, 4 - ВИД НА ЖИТЕЛЬСТВО, 5 - ЗАГРАНИЧНЫЙ ПАСПОРТ, 6 - УДОСТОВЕРЕНИЕ БЕЖЕНЦА, 7 - ВРЕМЕННОЕ УДОСТОВЕРЕНИЕ ЛИЧНОСТИ ГРАЖДАНИНА РФ, 8 - СВИДЕТЕЛЬСТВО О ПРЕДОСТАВЛЕНИИ ВРЕМЕННОГО УБЕЖИЩА НА ТЕРРИТОРИИ РФ, 9 - ПАСПОРТ МОРЯКА, 10 - ПАСПОРТ ГРАЖДАНИНА РФ, 11 - СВИДЕТЕЛЬСТВО О РАССМОТРЕНИИ ХОДАТАЙСТВА О ПРИЗНАНИИ БЕЖЕНЦЕМ, 12 - ВОЕННЫЙ БИЛЕТ
     */
    public function setType(?int $type): self
    {
        $this->type = $type;

        return $this;
    }
}
