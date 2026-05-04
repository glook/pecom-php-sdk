<?php

namespace glook\PecomSdk\Generated\Model;

class ListAllOrderSenderCounterpartPhysicalPerson
{
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
     * Тип документа, удостоверяющего личность. 1 — ПАСПОРТ ИНОСТРАННОГО ГРАЖДАНИНА, 2 — РАЗРЕШЕНИЕ НА ВРЕМЕННОЕ ПРОЖИВАНИЕ, 3 — ВОДИТЕЛЬСКОЕ УДОСТОВЕРЕНИЕ, 4 — ВИД НА ЖИТЕЛЬСТВО, 5 — ЗАГРАНИЧНЫЙ ПАСПОРТ, 6 — УДОСТОВЕРЕНИЕ БЕЖЕНЦА, 7 — ВРЕМЕННОЕ УДОСТОВЕРЕНИЕ ЛИЧНОСТИ ГРАЖДАНИНА РФ, 8 — СВИДЕТЕЛЬСТВО О ПРЕДОСТАВЛЕНИИ ВРЕМЕННОГО УБЕЖИЩА НА ТЕРРИТОРИИ РФ, 9 — ПАСПОРТ МОРЯКА, 10 — ПАСПОРТ ГРАЖДАНИНА РФ, 11 — СВИДЕТЕЛЬСТВО О РАССМОТРЕНИИ ХОДАТАЙСТВА О ПРИЗНАНИИ БЕЖЕНЦЕМ, 12 — ВОЕННЫЙ БИЛЕТ
     *
     * @var int|null
     */
    protected $typeDocumet;
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
     * Тип документа, удостоверяющего личность. 1 — ПАСПОРТ ИНОСТРАННОГО ГРАЖДАНИНА, 2 — РАЗРЕШЕНИЕ НА ВРЕМЕННОЕ ПРОЖИВАНИЕ, 3 — ВОДИТЕЛЬСКОЕ УДОСТОВЕРЕНИЕ, 4 — ВИД НА ЖИТЕЛЬСТВО, 5 — ЗАГРАНИЧНЫЙ ПАСПОРТ, 6 — УДОСТОВЕРЕНИЕ БЕЖЕНЦА, 7 — ВРЕМЕННОЕ УДОСТОВЕРЕНИЕ ЛИЧНОСТИ ГРАЖДАНИНА РФ, 8 — СВИДЕТЕЛЬСТВО О ПРЕДОСТАВЛЕНИИ ВРЕМЕННОГО УБЕЖИЩА НА ТЕРРИТОРИИ РФ, 9 — ПАСПОРТ МОРЯКА, 10 — ПАСПОРТ ГРАЖДАНИНА РФ, 11 — СВИДЕТЕЛЬСТВО О РАССМОТРЕНИИ ХОДАТАЙСТВА О ПРИЗНАНИИ БЕЖЕНЦЕМ, 12 — ВОЕННЫЙ БИЛЕТ
     *
     * @return int|null
     */
    public function getTypeDocumet() : ?int
    {
        return $this->typeDocumet;
    }
    /**
     * Тип документа, удостоверяющего личность. 1 — ПАСПОРТ ИНОСТРАННОГО ГРАЖДАНИНА, 2 — РАЗРЕШЕНИЕ НА ВРЕМЕННОЕ ПРОЖИВАНИЕ, 3 — ВОДИТЕЛЬСКОЕ УДОСТОВЕРЕНИЕ, 4 — ВИД НА ЖИТЕЛЬСТВО, 5 — ЗАГРАНИЧНЫЙ ПАСПОРТ, 6 — УДОСТОВЕРЕНИЕ БЕЖЕНЦА, 7 — ВРЕМЕННОЕ УДОСТОВЕРЕНИЕ ЛИЧНОСТИ ГРАЖДАНИНА РФ, 8 — СВИДЕТЕЛЬСТВО О ПРЕДОСТАВЛЕНИИ ВРЕМЕННОГО УБЕЖИЩА НА ТЕРРИТОРИИ РФ, 9 — ПАСПОРТ МОРЯКА, 10 — ПАСПОРТ ГРАЖДАНИНА РФ, 11 — СВИДЕТЕЛЬСТВО О РАССМОТРЕНИИ ХОДАТАЙСТВА О ПРИЗНАНИИ БЕЖЕНЦЕМ, 12 — ВОЕННЫЙ БИЛЕТ
     *
     * @param int|null $typeDocumet
     *
     * @return self
     */
    public function setTypeDocumet(?int $typeDocumet) : self
    {
        $this->typeDocumet = $typeDocumet;
        return $this;
    }
}