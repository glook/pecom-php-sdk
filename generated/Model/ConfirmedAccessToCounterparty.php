<?php

namespace glook\PecomSdk\Generated\Model;

class ConfirmedAccessToCounterparty
{
    /**
     * Номер карты клиента
     *
     * @var null|string
     */
    protected $counterpartClientCard;

    /**
     * Данные документа, удостоверяющего личность физ.лица
     *
     * @var null|CounterpartyDocument[]
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
     * @var null|ConfirmedAccessToCounterpartyLegal
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
     */
    public function getCounterpartClientCard(): ?string
    {
        return $this->counterpartClientCard;
    }

    /**
     * Номер карты клиента
     */
    public function setCounterpartClientCard(?string $counterpartClientCard): self
    {
        $this->counterpartClientCard = $counterpartClientCard;

        return $this;
    }

    /**
     * Данные документа, удостоверяющего личность физ.лица
     *
     * @return null|CounterpartyDocument[]
     */
    public function getDocuments(): ?array
    {
        return $this->documents;
    }

    /**
     * Данные документа, удостоверяющего личность физ.лица
     *
     * @param null|CounterpartyDocument[] $documents
     */
    public function setDocuments(?array $documents): self
    {
        $this->documents = $documents;

        return $this;
    }

    /**
     * Уникальный идентификатор (GUID) контрагента в системах ПЭК. Используется в ряде методов API
     */
    public function getGuid(): string
    {
        return $this->guid;
    }

    /**
     * Уникальный идентификатор (GUID) контрагента в системах ПЭК. Используется в ряде методов API
     */
    public function setGuid(string $guid): self
    {
        $this->guid = $guid;

        return $this;
    }

    /**
     * Идентификаторы юридических лиц и индивидуальных предпринимателей
     */
    public function getLegal(): ?ConfirmedAccessToCounterpartyLegal
    {
        return $this->legal;
    }

    /**
     * Идентификаторы юридических лиц и индивидуальных предпринимателей
     */
    public function setLegal(?ConfirmedAccessToCounterpartyLegal $legal): self
    {
        $this->legal = $legal;

        return $this;
    }

    /**
     * Тип контрагента. Значения: `1` - Юридическое лицо, `2` - Индивидуальный предприниматель, `3` - Физическое лицо
     */
    public function getLegalForm(): int
    {
        return $this->legalForm;
    }

    /**
     * Тип контрагента. Значения: `1` - Юридическое лицо, `2` - Индивидуальный предприниматель, `3` - Физическое лицо
     */
    public function setLegalForm(int $legalForm): self
    {
        $this->legalForm = $legalForm;

        return $this;
    }

    /**
     * Наименование контрагента / ФИО
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Наименование контрагента / ФИО
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }
}
