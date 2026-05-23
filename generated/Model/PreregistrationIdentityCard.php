<?php

namespace glook\PecomSdk\Generated\Model;

class PreregistrationIdentityCard
{
    /**
     * Дата выдачи документа, удостоверяющего личность.
     *
     * @var null|\DateTime
     */
    protected $date;

    /**
     * служебное поле для других документов.
     *
     * @var null|string
     */
    protected $note;

    /**
     * Номер.
     *
     * @var null|string
     */
    protected $number;

    /**
     * Серия.
     *
     * @var null|string
     */
    protected $series;

    /**
     * Код страны, выдавшей налоговый номер. Обязателен для международных перевозок, но необязателен, если отправление из РФ. По умолчанию 643.
     *
     * @var null|string
     */
    protected $taxpayerCountryCode;

    /**
     * Налоговый номер отправителя: ПИН (Кыргызстан), ИИН (Казахстан), УПН (Беларусь) и т.п. Обязательно для международных перевозок, но необязателен, если отправление из РФ.
     *
     * @var null|string
     */
    protected $taxpayerID;

    /**
     * Уникальный идентификатор типа документа, который разрешено использовать для страны отправления, можно получить методом [`/branches/countrytypeidentitydocument/`](#tag/branches/POST/branches/countrytypeidentitydocument/).
     *
     * @var null|string
     */
    protected $typeGuid;

    /**
     * Дата выдачи документа, удостоверяющего личность.
     */
    public function getDate(): ?\DateTime
    {
        return $this->date;
    }

    /**
     * Дата выдачи документа, удостоверяющего личность.
     */
    public function setDate(?\DateTime $date): self
    {
        $this->date = $date;

        return $this;
    }

    /**
     * служебное поле для других документов.
     */
    public function getNote(): ?string
    {
        return $this->note;
    }

    /**
     * служебное поле для других документов.
     */
    public function setNote(?string $note): self
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Номер.
     */
    public function getNumber(): ?string
    {
        return $this->number;
    }

    /**
     * Номер.
     */
    public function setNumber(?string $number): self
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Серия.
     */
    public function getSeries(): ?string
    {
        return $this->series;
    }

    /**
     * Серия.
     */
    public function setSeries(?string $series): self
    {
        $this->series = $series;

        return $this;
    }

    /**
     * Код страны, выдавшей налоговый номер. Обязателен для международных перевозок, но необязателен, если отправление из РФ. По умолчанию 643.
     */
    public function getTaxpayerCountryCode(): ?string
    {
        return $this->taxpayerCountryCode;
    }

    /**
     * Код страны, выдавшей налоговый номер. Обязателен для международных перевозок, но необязателен, если отправление из РФ. По умолчанию 643.
     */
    public function setTaxpayerCountryCode(?string $taxpayerCountryCode): self
    {
        $this->taxpayerCountryCode = $taxpayerCountryCode;

        return $this;
    }

    /**
     * Налоговый номер отправителя: ПИН (Кыргызстан), ИИН (Казахстан), УПН (Беларусь) и т.п. Обязательно для международных перевозок, но необязателен, если отправление из РФ.
     */
    public function getTaxpayerID(): ?string
    {
        return $this->taxpayerID;
    }

    /**
     * Налоговый номер отправителя: ПИН (Кыргызстан), ИИН (Казахстан), УПН (Беларусь) и т.п. Обязательно для международных перевозок, но необязателен, если отправление из РФ.
     */
    public function setTaxpayerID(?string $taxpayerID): self
    {
        $this->taxpayerID = $taxpayerID;

        return $this;
    }

    /**
     * Уникальный идентификатор типа документа, который разрешено использовать для страны отправления, можно получить методом [`/branches/countrytypeidentitydocument/`](#tag/branches/POST/branches/countrytypeidentitydocument/).
     */
    public function getTypeGuid(): ?string
    {
        return $this->typeGuid;
    }

    /**
     * Уникальный идентификатор типа документа, который разрешено использовать для страны отправления, можно получить методом [`/branches/countrytypeidentitydocument/`](#tag/branches/POST/branches/countrytypeidentitydocument/).
     */
    public function setTypeGuid(?string $typeGuid): self
    {
        $this->typeGuid = $typeGuid;

        return $this;
    }
}
