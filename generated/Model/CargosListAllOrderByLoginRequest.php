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
     */
    public function getDateBegin(): \DateTime
    {
        return $this->dateBegin;
    }

    /**
     * Дата, от
     */
    public function setDateBegin(\DateTime $dateBegin): self
    {
        $this->dateBegin = $dateBegin;

        return $this;
    }

    /**
     * Дата, до
     */
    public function getDateEnd(): \DateTime
    {
        return $this->dateEnd;
    }

    /**
     * Дата, до
     */
    public function setDateEnd(\DateTime $dateEnd): self
    {
        $this->dateEnd = $dateEnd;

        return $this;
    }

    /**
     * По какой дате делать выборку грузов. 0 — по дате приемки груза на склад ПЭК, 1 — по дате подачи заявки, 2 — по дате забора груза
     */
    public function getSelectBy(): int
    {
        return $this->selectBy;
    }

    /**
     * По какой дате делать выборку грузов. 0 — по дате приемки груза на склад ПЭК, 1 — по дате подачи заявки, 2 — по дате забора груза
     */
    public function setSelectBy(int $selectBy): self
    {
        $this->selectBy = $selectBy;

        return $this;
    }
}
