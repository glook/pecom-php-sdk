<?php

namespace glook\PecomSdk\Generated\Model;

class BranchCity
{
    /**
     * Код города. В актуальной версии протокола не используется
     *
     * @var string|null
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
     *
     * @return string|null
     */
    public function getBitrixId() : ?string
    {
        return $this->bitrixId;
    }
    /**
     * Код города. В актуальной версии протокола не используется
     *
     * @param string|null $bitrixId
     *
     * @return self
     */
    public function setBitrixId(?string $bitrixId) : self
    {
        $this->bitrixId = $bitrixId;
        return $this;
    }
    /**
     * Идентификатор города. НЕ ИСПОЛЬЗОВАТЬ в методах расчёта стоимости и подачи заявок
     *
     * @return string
     */
    public function getCityId() : string
    {
        return $this->cityId;
    }
    /**
     * Идентификатор города. НЕ ИСПОЛЬЗОВАТЬ в методах расчёта стоимости и подачи заявок
     *
     * @param string $cityId
     *
     * @return self
     */
    public function setCityId(string $cityId) : self
    {
        $this->cityId = $cityId;
        return $this;
    }
    /**
     * Тип населенного пункта (0 - километраж, 1 - филиал, 2 - отделение, 3 - сателлит). В актуальной версии протокола не используется
     *
     * @return int
     */
    public function getCityStatus() : int
    {
        return $this->cityStatus;
    }
    /**
     * Тип населенного пункта (0 - километраж, 1 - филиал, 2 - отделение, 3 - сателлит). В актуальной версии протокола не используется
     *
     * @param int $cityStatus
     *
     * @return self
     */
    public function setCityStatus(int $cityStatus) : self
    {
        $this->cityStatus = $cityStatus;
        return $this;
    }
    /**
     * Ссылки на отделения, доступные в этом городе
     *
     * @return string[]
     */
    public function getDivisions() : array
    {
        return $this->divisions;
    }
    /**
     * Ссылки на отделения, доступные в этом городе
     *
     * @param string[] $divisions
     *
     * @return self
     */
    public function setDivisions(array $divisions) : self
    {
        $this->divisions = $divisions;
        return $this;
    }
    /**
     * Наименование города. Наименование из справочника ПЭК
     *
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title;
    }
    /**
     * Наименование города. Наименование из справочника ПЭК
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