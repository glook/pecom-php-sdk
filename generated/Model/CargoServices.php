<?php

namespace glook\PecomSdk\Generated\Model;

class CargoServices
{
    /**
     * Задолженность, которую необходимо оплатить для получения груза, руб.
     *
     * @var float|null
     */
    protected $debt;
    /**
     * В актуальной версии протокола не используется
     *
     * @var mixed[][]|null
     */
    protected $debtList;
    /**
     * В актуальной версии протокола не используется
     *
     * @var bool|null
     */
    protected $freeService;
    /**
     * Защитная транспортировочная упаковка
     *
     * @var bool|null
     */
    protected $hardPack;
    /**
     * Страхование
     *
     * @var bool|null
     */
    protected $insurance;
    /**
     * Массив услуг
     *
     * @var CargosServiceItem[]|null
     */
    protected $items;
    /**
     * Груз является возвратными документами
     *
     * @var bool|null
     */
    protected $resendDocs;
    /**
     * Итого, руб.
     *
     * @var float|null
     */
    protected $sum;
    /**
     * Задолженность, которую необходимо оплатить для получения груза, руб.
     *
     * @return float|null
     */
    public function getDebt() : ?float
    {
        return $this->debt;
    }
    /**
     * Задолженность, которую необходимо оплатить для получения груза, руб.
     *
     * @param float|null $debt
     *
     * @return self
     */
    public function setDebt(?float $debt) : self
    {
        $this->debt = $debt;
        return $this;
    }
    /**
     * В актуальной версии протокола не используется
     *
     * @return mixed[][]|null
     */
    public function getDebtList() : ?array
    {
        return $this->debtList;
    }
    /**
     * В актуальной версии протокола не используется
     *
     * @param mixed[][]|null $debtList
     *
     * @return self
     */
    public function setDebtList(?array $debtList) : self
    {
        $this->debtList = $debtList;
        return $this;
    }
    /**
     * В актуальной версии протокола не используется
     *
     * @return bool|null
     */
    public function getFreeService() : ?bool
    {
        return $this->freeService;
    }
    /**
     * В актуальной версии протокола не используется
     *
     * @param bool|null $freeService
     *
     * @return self
     */
    public function setFreeService(?bool $freeService) : self
    {
        $this->freeService = $freeService;
        return $this;
    }
    /**
     * Защитная транспортировочная упаковка
     *
     * @return bool|null
     */
    public function getHardPack() : ?bool
    {
        return $this->hardPack;
    }
    /**
     * Защитная транспортировочная упаковка
     *
     * @param bool|null $hardPack
     *
     * @return self
     */
    public function setHardPack(?bool $hardPack) : self
    {
        $this->hardPack = $hardPack;
        return $this;
    }
    /**
     * Страхование
     *
     * @return bool|null
     */
    public function getInsurance() : ?bool
    {
        return $this->insurance;
    }
    /**
     * Страхование
     *
     * @param bool|null $insurance
     *
     * @return self
     */
    public function setInsurance(?bool $insurance) : self
    {
        $this->insurance = $insurance;
        return $this;
    }
    /**
     * Массив услуг
     *
     * @return CargosServiceItem[]|null
     */
    public function getItems() : ?array
    {
        return $this->items;
    }
    /**
     * Массив услуг
     *
     * @param CargosServiceItem[]|null $items
     *
     * @return self
     */
    public function setItems(?array $items) : self
    {
        $this->items = $items;
        return $this;
    }
    /**
     * Груз является возвратными документами
     *
     * @return bool|null
     */
    public function getResendDocs() : ?bool
    {
        return $this->resendDocs;
    }
    /**
     * Груз является возвратными документами
     *
     * @param bool|null $resendDocs
     *
     * @return self
     */
    public function setResendDocs(?bool $resendDocs) : self
    {
        $this->resendDocs = $resendDocs;
        return $this;
    }
    /**
     * Итого, руб.
     *
     * @return float|null
     */
    public function getSum() : ?float
    {
        return $this->sum;
    }
    /**
     * Итого, руб.
     *
     * @param float|null $sum
     *
     * @return self
     */
    public function setSum(?float $sum) : self
    {
        $this->sum = $sum;
        return $this;
    }
}