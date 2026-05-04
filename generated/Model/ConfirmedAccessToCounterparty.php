<?php

namespace glook\PecomSdk\Generated\Model;

class ConfirmedAccessToCounterparty
{
    /**
     * Номер карты клиента
     *
     * @var string|null
     */
    protected $counterpartClientCard;
    /**
     * Данные документа, удостоверяющего личность физ.лица
     *
     * @var CounterpartyDocument[]|null
     */
    protected $documents;
    /**
     * Уникальный идентификатор (GUID) контрагента в системах ПЭК. Используется в ряде методов API
     *
     * @var string
     */
    protected $guid;
    /**
     * Идентификаторы юридических лиц и индивидуальных предпринимателей
     *
     * @var ConfirmedAccessToCounterpartyLegal|null
     */
    protected $legal;
    /**
     * Тип контрагента. Значения: `1` - Юридическое лицо, `2` - Индивидуальный предприниматель, `3` - Физическое лицо
     *
     * @var int
     */
    protected $legalForm;
    /**
     * Наименование контрагента / ФИО
     *
     * @var string
     */
    protected $title;
    /**
     * Номер карты клиента
     *
     * @return string|null
     */
    public function getCounterpartClientCard() : ?string
    {
        return $this->counterpartClientCard;
    }
    /**
     * Номер карты клиента
     *
     * @param string|null $counterpartClientCard
     *
     * @return self
     */
    public function setCounterpartClientCard(?string $counterpartClientCard) : self
    {
        $this->counterpartClientCard = $counterpartClientCard;
        return $this;
    }
    /**
     * Данные документа, удостоверяющего личность физ.лица
     *
     * @return CounterpartyDocument[]|null
     */
    public function getDocuments() : ?array
    {
        return $this->documents;
    }
    /**
     * Данные документа, удостоверяющего личность физ.лица
     *
     * @param CounterpartyDocument[]|null $documents
     *
     * @return self
     */
    public function setDocuments(?array $documents) : self
    {
        $this->documents = $documents;
        return $this;
    }
    /**
     * Уникальный идентификатор (GUID) контрагента в системах ПЭК. Используется в ряде методов API
     *
     * @return string
     */
    public function getGuid() : string
    {
        return $this->guid;
    }
    /**
     * Уникальный идентификатор (GUID) контрагента в системах ПЭК. Используется в ряде методов API
     *
     * @param string $guid
     *
     * @return self
     */
    public function setGuid(string $guid) : self
    {
        $this->guid = $guid;
        return $this;
    }
    /**
     * Идентификаторы юридических лиц и индивидуальных предпринимателей
     *
     * @return ConfirmedAccessToCounterpartyLegal|null
     */
    public function getLegal() : ?ConfirmedAccessToCounterpartyLegal
    {
        return $this->legal;
    }
    /**
     * Идентификаторы юридических лиц и индивидуальных предпринимателей
     *
     * @param ConfirmedAccessToCounterpartyLegal|null $legal
     *
     * @return self
     */
    public function setLegal(?ConfirmedAccessToCounterpartyLegal $legal) : self
    {
        $this->legal = $legal;
        return $this;
    }
    /**
     * Тип контрагента. Значения: `1` - Юридическое лицо, `2` - Индивидуальный предприниматель, `3` - Физическое лицо
     *
     * @return int
     */
    public function getLegalForm() : int
    {
        return $this->legalForm;
    }
    /**
     * Тип контрагента. Значения: `1` - Юридическое лицо, `2` - Индивидуальный предприниматель, `3` - Физическое лицо
     *
     * @param int $legalForm
     *
     * @return self
     */
    public function setLegalForm(int $legalForm) : self
    {
        $this->legalForm = $legalForm;
        return $this;
    }
    /**
     * Наименование контрагента / ФИО
     *
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title;
    }
    /**
     * Наименование контрагента / ФИО
     *
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title) : self
    {
        $this->title = $title;
        return $this;
    }
}