<?php

namespace glook\PecomSdk\Generated\Model;

class CargosListAllOrderByLoginRequest
{
    /**
     * Дата, от
     *
     * @var \DateTime
     */
    protected $dateBegin;
    /**
     * Дата, до
     *
     * @var \DateTime
     */
    protected $dateEnd;
    /**
     * По какой дате делать выборку грузов. 0 — по дате приемки груза на склад ПЭК, 1 — по дате подачи заявки, 2 — по дате забора груза
     *
     * @var int
     */
    protected $selectBy;
    /**
     * Дата, от
     *
     * @return \DateTime
     */
    public function getDateBegin() : \DateTime
    {
        return $this->dateBegin;
    }
    /**
     * Дата, от
     *
     * @param \DateTime $dateBegin
     *
     * @return self
     */
    public function setDateBegin(\DateTime $dateBegin) : self
    {
        $this->dateBegin = $dateBegin;
        return $this;
    }
    /**
     * Дата, до
     *
     * @return \DateTime
     */
    public function getDateEnd() : \DateTime
    {
        return $this->dateEnd;
    }
    /**
     * Дата, до
     *
     * @param \DateTime $dateEnd
     *
     * @return self
     */
    public function setDateEnd(\DateTime $dateEnd) : self
    {
        $this->dateEnd = $dateEnd;
        return $this;
    }
    /**
     * По какой дате делать выборку грузов. 0 — по дате приемки груза на склад ПЭК, 1 — по дате подачи заявки, 2 — по дате забора груза
     *
     * @return int
     */
    public function getSelectBy() : int
    {
        return $this->selectBy;
    }
    /**
     * По какой дате делать выборку грузов. 0 — по дате приемки груза на склад ПЭК, 1 — по дате подачи заявки, 2 — по дате забора груза
     *
     * @param int $selectBy
     *
     * @return self
     */
    public function setSelectBy(int $selectBy) : self
    {
        $this->selectBy = $selectBy;
        return $this;
    }
}