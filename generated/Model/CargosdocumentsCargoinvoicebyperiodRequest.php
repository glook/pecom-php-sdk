<?php

namespace glook\PecomSdk\Generated\Model;

class CargosdocumentsCargoinvoicebyperiodRequest
{
    /**
     * Идентификатор контрагента-плательщика в системах ПЭК, связанный с ЛК. Получается методом [`/COUNTERPARTS/CONFIRMEDACCESSTOCOUNTERPARTIES/`](#tag/counterparts/POST/counterparts/confirmedaccesstocounterparties/)
     *
     * @var string
     */
    protected $counterpartGuid;
    /**
     * Начальная дата периода запроса, дата берется по оформлению груза
     *
     * @var \DateTime
     */
    protected $dateFrom;
    /**
     * Конечная дата периода запроса, дата берется по оформлению груза
     *
     * @var \DateTime
     */
    protected $dateTo;
    /**
     * Идентификатор контрагента-плательщика в системах ПЭК, связанный с ЛК. Получается методом [`/COUNTERPARTS/CONFIRMEDACCESSTOCOUNTERPARTIES/`](#tag/counterparts/POST/counterparts/confirmedaccesstocounterparties/)
     *
     * @return string
     */
    public function getCounterpartGuid() : string
    {
        return $this->counterpartGuid;
    }
    /**
     * Идентификатор контрагента-плательщика в системах ПЭК, связанный с ЛК. Получается методом [`/COUNTERPARTS/CONFIRMEDACCESSTOCOUNTERPARTIES/`](#tag/counterparts/POST/counterparts/confirmedaccesstocounterparties/)
     *
     * @param string $counterpartGuid
     *
     * @return self
     */
    public function setCounterpartGuid(string $counterpartGuid) : self
    {
        $this->counterpartGuid = $counterpartGuid;
        return $this;
    }
    /**
     * Начальная дата периода запроса, дата берется по оформлению груза
     *
     * @return \DateTime
     */
    public function getDateFrom() : \DateTime
    {
        return $this->dateFrom;
    }
    /**
     * Начальная дата периода запроса, дата берется по оформлению груза
     *
     * @param \DateTime $dateFrom
     *
     * @return self
     */
    public function setDateFrom(\DateTime $dateFrom) : self
    {
        $this->dateFrom = $dateFrom;
        return $this;
    }
    /**
     * Конечная дата периода запроса, дата берется по оформлению груза
     *
     * @return \DateTime
     */
    public function getDateTo() : \DateTime
    {
        return $this->dateTo;
    }
    /**
     * Конечная дата периода запроса, дата берется по оформлению груза
     *
     * @param \DateTime $dateTo
     *
     * @return self
     */
    public function setDateTo(\DateTime $dateTo) : self
    {
        $this->dateTo = $dateTo;
        return $this;
    }
}