<?php

namespace glook\PecomSdk\Generated\Model;

class CargoServices
{
    /**
     * Задолженность, которую необходимо оплатить для получения груза, руб.
     *
     * @var null|float
     */
    protected $debt;

    /**
     * В актуальной версии протокола не используется
     *
     * @var null|mixed[][]
     */
    protected $debtList;

    /**
     * В актуальной версии протокола не используется
     *
     * @var null|bool
     */
    protected $freeService;

    /**
     * Защитная транспортировочная упаковка
     *
     * @var null|bool
     */
    protected $hardPack;

    /**
     * Страхование
     *
     * @var null|bool
     */
    protected $insurance;

    /**
     * Массив услуг
     *
     * @var null|CargosServiceItem[]
     */
    protected $items;

    /**
     * Груз является возвратными документами
     *
     * @var null|bool
     */
    protected $resendDocs;

    /**
     * Итого, руб.
     *
     * @var null|float
     */
    protected $sum;

    /**
     * Задолженность, которую необходимо оплатить для получения груза, руб.
     */
    public function getDebt(): ?float
    {
        return $this->debt;
    }

    /**
     * Задолженность, которую необходимо оплатить для получения груза, руб.
     */
    public function setDebt(?float $debt): self
    {
        $this->debt = $debt;

        return $this;
    }

    /**
     * В актуальной версии протокола не используется
     *
     * @return null|mixed[][]
     */
    public function getDebtList(): ?array
    {
        return $this->debtList;
    }

    /**
     * В актуальной версии протокола не используется
     *
     * @param null|mixed[][] $debtList
     */
    public function setDebtList(?array $debtList): self
    {
        $this->debtList = $debtList;

        return $this;
    }

    /**
     * В актуальной версии протокола не используется
     */
    public function getFreeService(): ?bool
    {
        return $this->freeService;
    }

    /**
     * В актуальной версии протокола не используется
     */
    public function setFreeService(?bool $freeService): self
    {
        $this->freeService = $freeService;

        return $this;
    }

    /**
     * Защитная транспортировочная упаковка
     */
    public function getHardPack(): ?bool
    {
        return $this->hardPack;
    }

    /**
     * Защитная транспортировочная упаковка
     */
    public function setHardPack(?bool $hardPack): self
    {
        $this->hardPack = $hardPack;

        return $this;
    }

    /**
     * Страхование
     */
    public function getInsurance(): ?bool
    {
        return $this->insurance;
    }

    /**
     * Страхование
     */
    public function setInsurance(?bool $insurance): self
    {
        $this->insurance = $insurance;

        return $this;
    }

    /**
     * Массив услуг
     *
     * @return null|CargosServiceItem[]
     */
    public function getItems(): ?array
    {
        return $this->items;
    }

    /**
     * Массив услуг
     *
     * @param null|CargosServiceItem[] $items
     */
    public function setItems(?array $items): self
    {
        $this->items = $items;

        return $this;
    }

    /**
     * Груз является возвратными документами
     */
    public function getResendDocs(): ?bool
    {
        return $this->resendDocs;
    }

    /**
     * Груз является возвратными документами
     */
    public function setResendDocs(?bool $resendDocs): self
    {
        $this->resendDocs = $resendDocs;

        return $this;
    }

    /**
     * Итого, руб.
     */
    public function getSum(): ?float
    {
        return $this->sum;
    }

    /**
     * Итого, руб.
     */
    public function setSum(?float $sum): self
    {
        $this->sum = $sum;

        return $this;
    }
}
