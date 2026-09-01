<?php

namespace glook\PecomSdk\Generated\Model;

class BranchCity
{
    /**
     * Код города. В актуальной версии протокола не используется
     *
     * @var null|string
     */
    protected $bitrixId;

    /**
     * Идентификатор города. НЕ ИСПОЛЬЗОВАТЬ в методах расчёта стоимости и подачи заявок
     *
     * @var string
     */
    protected $cityId;

    /**
     * Тип населенного пункта (0 - километраж, 1 - филиал, 2 - отделение, 3 - сателлит). В актуальной версии протокола не используется
     *
     * @var int
     */
    protected $cityStatus;

    /**
     * Ссылки на отделения, доступные в этом городе
     *
     * @var string[]
     */
    protected $divisions;

    /**
     * Наименование города. Наименование из справочника ПЭК
     *
     * @var string
     */
    protected $title;

    /**
     * Код города. В актуальной версии протокола не используется
     */
    public function getBitrixId(): ?string
    {
        return $this->bitrixId;
    }

    /**
     * Код города. В актуальной версии протокола не используется
     */
    public function setBitrixId(?string $bitrixId): self
    {
        $this->bitrixId = $bitrixId;

        return $this;
    }

    /**
     * Идентификатор города. НЕ ИСПОЛЬЗОВАТЬ в методах расчёта стоимости и подачи заявок
     */
    public function getCityId(): string
    {
        return $this->cityId;
    }

    /**
     * Идентификатор города. НЕ ИСПОЛЬЗОВАТЬ в методах расчёта стоимости и подачи заявок
     */
    public function setCityId(string $cityId): self
    {
        $this->cityId = $cityId;

        return $this;
    }

    /**
     * Тип населенного пункта (0 - километраж, 1 - филиал, 2 - отделение, 3 - сателлит). В актуальной версии протокола не используется
     */
    public function getCityStatus(): int
    {
        return $this->cityStatus;
    }

    /**
     * Тип населенного пункта (0 - километраж, 1 - филиал, 2 - отделение, 3 - сателлит). В актуальной версии протокола не используется
     */
    public function setCityStatus(int $cityStatus): self
    {
        $this->cityStatus = $cityStatus;

        return $this;
    }

    /**
     * Ссылки на отделения, доступные в этом городе
     *
     * @return string[]
     */
    public function getDivisions(): array
    {
        return $this->divisions;
    }

    /**
     * Ссылки на отделения, доступные в этом городе
     *
     * @param string[] $divisions
     */
    public function setDivisions(array $divisions): self
    {
        $this->divisions = $divisions;

        return $this;
    }

    /**
     * Наименование города. Наименование из справочника ПЭК
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Наименование города. Наименование из справочника ПЭК
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }
}
