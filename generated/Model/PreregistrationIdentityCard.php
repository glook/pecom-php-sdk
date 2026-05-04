<?php

namespace glook\PecomSdk\Generated\Model;

class PreregistrationIdentityCard
{
    /**
     * Дата выдачи документа, удостоверяющего личность.
     *
     * @var \DateTime|null
     */
    protected $date;
    /**
     * служебное поле для других документов.
     *
     * @var string|null
     */
    protected $note;
    /**
     * Номер.
     *
     * @var string|null
     */
    protected $number;
    /**
     * Серия.
     *
     * @var string|null
     */
    protected $series;
    /**
     * Код страны, выдавшей налоговый номер. Обязателен для международных перевозок, но необязателен, если отправление из РФ. По умолчанию 643.
     *
     * @var string|null
     */
    protected $taxpayerCountryCode;
    /**
     * Налоговый номер отправителя: ПИН (Кыргызстан), ИИН (Казахстан), УПН (Беларусь) и т.п. Обязательно для международных перевозок, но необязателен, если отправление из РФ.
     *
     * @var string|null
     */
    protected $taxpayerID;
    /**
     * Уникальный идентификатор типа документа, который разрешено использовать для страны отправления, можно получить методом [`/branches/countrytypeidentitydocument/`](#tag/branches/POST/branches/countrytypeidentitydocument/).
     *
     * @var string|null
     */
    protected $typeGuid;
    /**
     * Дата выдачи документа, удостоверяющего личность.
     *
     * @return \DateTime|null
     */
    public function getDate() : ?\DateTime
    {
        return $this->date;
    }
    /**
     * Дата выдачи документа, удостоверяющего личность.
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
     * служебное поле для других документов.
     *
     * @return string|null
     */
    public function getNote() : ?string
    {
        return $this->note;
    }
    /**
     * служебное поле для других документов.
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
     * Номер.
     *
     * @return string|null
     */
    public function getNumber() : ?string
    {
        return $this->number;
    }
    /**
     * Номер.
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
     * Серия.
     *
     * @return string|null
     */
    public function getSeries() : ?string
    {
        return $this->series;
    }
    /**
     * Серия.
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
     * Код страны, выдавшей налоговый номер. Обязателен для международных перевозок, но необязателен, если отправление из РФ. По умолчанию 643.
     *
     * @return string|null
     */
    public function getTaxpayerCountryCode() : ?string
    {
        return $this->taxpayerCountryCode;
    }
    /**
     * Код страны, выдавшей налоговый номер. Обязателен для международных перевозок, но необязателен, если отправление из РФ. По умолчанию 643.
     *
     * @param string|null $taxpayerCountryCode
     *
     * @return self
     */
    public function setTaxpayerCountryCode(?string $taxpayerCountryCode) : self
    {
        $this->taxpayerCountryCode = $taxpayerCountryCode;
        return $this;
    }
    /**
     * Налоговый номер отправителя: ПИН (Кыргызстан), ИИН (Казахстан), УПН (Беларусь) и т.п. Обязательно для международных перевозок, но необязателен, если отправление из РФ.
     *
     * @return string|null
     */
    public function getTaxpayerID() : ?string
    {
        return $this->taxpayerID;
    }
    /**
     * Налоговый номер отправителя: ПИН (Кыргызстан), ИИН (Казахстан), УПН (Беларусь) и т.п. Обязательно для международных перевозок, но необязателен, если отправление из РФ.
     *
     * @param string|null $taxpayerID
     *
     * @return self
     */
    public function setTaxpayerID(?string $taxpayerID) : self
    {
        $this->taxpayerID = $taxpayerID;
        return $this;
    }
    /**
     * Уникальный идентификатор типа документа, который разрешено использовать для страны отправления, можно получить методом [`/branches/countrytypeidentitydocument/`](#tag/branches/POST/branches/countrytypeidentitydocument/).
     *
     * @return string|null
     */
    public function getTypeGuid() : ?string
    {
        return $this->typeGuid;
    }
    /**
     * Уникальный идентификатор типа документа, который разрешено использовать для страны отправления, можно получить методом [`/branches/countrytypeidentitydocument/`](#tag/branches/POST/branches/countrytypeidentitydocument/).
     *
     * @param string|null $typeGuid
     *
     * @return self
     */
    public function setTypeGuid(?string $typeGuid) : self
    {
        $this->typeGuid = $typeGuid;
        return $this;
    }
}