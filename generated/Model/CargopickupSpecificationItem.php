<?php

namespace glook\PecomSdk\Generated\Model;

class CargopickupSpecificationItem
{
    /**
     * Объявленная ценность за единицу, руб.
     *
     * @var float
     */
    protected $actualCostPerUnit;

    /**
     * Объявленная ценность всего, руб.
     *
     * @var float
     */
    protected $actualCostTotal;

    /**
     * Количество. Для маркированных товаров всегда 1
     *
     * @var int
     */
    protected $amount;

    /**
     * Предмет расчета. 1 — Товар, 33 — Товар маркированный
     *
     * @var int
     */
    protected $calculationSubject;

    /**
     * Группа маркированного товара. 1 — Легпром, 2 — Обувь, 4 — Парфюм, 5 — Шины, 6 — Фото, 9 — Велосипеды, 10 — Медицинские изделия, 13 — Упак.вода, 14 — Товары из натур.меха, 17 — БАДЫ, 19 — Антисептики, 35 — Косметика, быт.химия и товары личной гигиены
     *
     * @var null|int
     */
    protected $groupMarkedGood;

    /**
     * Код маркировки. Обязателен при calculationSubject = 33
     *
     * @var null|string
     */
    protected $markingCode;

    /**
     * Единица измерения. 0 — шт, 10 — г, 11 — кг, 12 — т, 20 — см, 21 — дм, 22 — м, 30 — кв.см, 31 — кв.дм, 32 — кв.м, 40 — мл, 41 — л, 42 — куб.м, 255 — иные единицы
     *
     * @var null|int
     */
    protected $measureOfQuantity;

    /**
     * Ставка НДС. Возможные значения: НДС22, НДС10, НДС7, НДС5, БезНДС
     *
     * @var string
     */
    protected $rateVAT;

    /**
     * Цена единицы для получателя, руб.
     *
     * @var float
     */
    protected $sumPerUnit;

    /**
     * Сумма по строке, руб.
     *
     * @var float
     */
    protected $sumTotal;

    /**
     * Наименование товара
     *
     * @var string
     */
    protected $title;

    /**
     * Артикул товара
     *
     * @var string
     */
    protected $vendorCode;

    /**
     * ИНН владельца товара
     *
     * @var string
     */
    protected $vendorINN;

    /**
     * Наименование владельца товара
     *
     * @var string
     */
    protected $vendorName;

    /**
     * Телефон владельца товара
     *
     * @var string
     */
    protected $vendorPhone;

    /**
     * Объявленная ценность за единицу, руб.
     */
    public function getActualCostPerUnit(): float
    {
        return $this->actualCostPerUnit;
    }

    /**
     * Объявленная ценность за единицу, руб.
     */
    public function setActualCostPerUnit(float $actualCostPerUnit): self
    {
        $this->actualCostPerUnit = $actualCostPerUnit;

        return $this;
    }

    /**
     * Объявленная ценность всего, руб.
     */
    public function getActualCostTotal(): float
    {
        return $this->actualCostTotal;
    }

    /**
     * Объявленная ценность всего, руб.
     */
    public function setActualCostTotal(float $actualCostTotal): self
    {
        $this->actualCostTotal = $actualCostTotal;

        return $this;
    }

    /**
     * Количество. Для маркированных товаров всегда 1
     */
    public function getAmount(): int
    {
        return $this->amount;
    }

    /**
     * Количество. Для маркированных товаров всегда 1
     */
    public function setAmount(int $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Предмет расчета. 1 — Товар, 33 — Товар маркированный
     */
    public function getCalculationSubject(): int
    {
        return $this->calculationSubject;
    }

    /**
     * Предмет расчета. 1 — Товар, 33 — Товар маркированный
     */
    public function setCalculationSubject(int $calculationSubject): self
    {
        $this->calculationSubject = $calculationSubject;

        return $this;
    }

    /**
     * Группа маркированного товара. 1 — Легпром, 2 — Обувь, 4 — Парфюм, 5 — Шины, 6 — Фото, 9 — Велосипеды, 10 — Медицинские изделия, 13 — Упак.вода, 14 — Товары из натур.меха, 17 — БАДЫ, 19 — Антисептики, 35 — Косметика, быт.химия и товары личной гигиены
     */
    public function getGroupMarkedGood(): ?int
    {
        return $this->groupMarkedGood;
    }

    /**
     * Группа маркированного товара. 1 — Легпром, 2 — Обувь, 4 — Парфюм, 5 — Шины, 6 — Фото, 9 — Велосипеды, 10 — Медицинские изделия, 13 — Упак.вода, 14 — Товары из натур.меха, 17 — БАДЫ, 19 — Антисептики, 35 — Косметика, быт.химия и товары личной гигиены
     */
    public function setGroupMarkedGood(?int $groupMarkedGood): self
    {
        $this->groupMarkedGood = $groupMarkedGood;

        return $this;
    }

    /**
     * Код маркировки. Обязателен при calculationSubject = 33
     */
    public function getMarkingCode(): ?string
    {
        return $this->markingCode;
    }

    /**
     * Код маркировки. Обязателен при calculationSubject = 33
     */
    public function setMarkingCode(?string $markingCode): self
    {
        $this->markingCode = $markingCode;

        return $this;
    }

    /**
     * Единица измерения. 0 — шт, 10 — г, 11 — кг, 12 — т, 20 — см, 21 — дм, 22 — м, 30 — кв.см, 31 — кв.дм, 32 — кв.м, 40 — мл, 41 — л, 42 — куб.м, 255 — иные единицы
     */
    public function getMeasureOfQuantity(): ?int
    {
        return $this->measureOfQuantity;
    }

    /**
     * Единица измерения. 0 — шт, 10 — г, 11 — кг, 12 — т, 20 — см, 21 — дм, 22 — м, 30 — кв.см, 31 — кв.дм, 32 — кв.м, 40 — мл, 41 — л, 42 — куб.м, 255 — иные единицы
     */
    public function setMeasureOfQuantity(?int $measureOfQuantity): self
    {
        $this->measureOfQuantity = $measureOfQuantity;

        return $this;
    }

    /**
     * Ставка НДС. Возможные значения: НДС22, НДС10, НДС7, НДС5, БезНДС
     */
    public function getRateVAT(): string
    {
        return $this->rateVAT;
    }

    /**
     * Ставка НДС. Возможные значения: НДС22, НДС10, НДС7, НДС5, БезНДС
     */
    public function setRateVAT(string $rateVAT): self
    {
        $this->rateVAT = $rateVAT;

        return $this;
    }

    /**
     * Цена единицы для получателя, руб.
     */
    public function getSumPerUnit(): float
    {
        return $this->sumPerUnit;
    }

    /**
     * Цена единицы для получателя, руб.
     */
    public function setSumPerUnit(float $sumPerUnit): self
    {
        $this->sumPerUnit = $sumPerUnit;

        return $this;
    }

    /**
     * Сумма по строке, руб.
     */
    public function getSumTotal(): float
    {
        return $this->sumTotal;
    }

    /**
     * Сумма по строке, руб.
     */
    public function setSumTotal(float $sumTotal): self
    {
        $this->sumTotal = $sumTotal;

        return $this;
    }

    /**
     * Наименование товара
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Наименование товара
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Артикул товара
     */
    public function getVendorCode(): string
    {
        return $this->vendorCode;
    }

    /**
     * Артикул товара
     */
    public function setVendorCode(string $vendorCode): self
    {
        $this->vendorCode = $vendorCode;

        return $this;
    }

    /**
     * ИНН владельца товара
     */
    public function getVendorINN(): string
    {
        return $this->vendorINN;
    }

    /**
     * ИНН владельца товара
     */
    public function setVendorINN(string $vendorINN): self
    {
        $this->vendorINN = $vendorINN;

        return $this;
    }

    /**
     * Наименование владельца товара
     */
    public function getVendorName(): string
    {
        return $this->vendorName;
    }

    /**
     * Наименование владельца товара
     */
    public function setVendorName(string $vendorName): self
    {
        $this->vendorName = $vendorName;

        return $this;
    }

    /**
     * Телефон владельца товара
     */
    public function getVendorPhone(): string
    {
        return $this->vendorPhone;
    }

    /**
     * Телефон владельца товара
     */
    public function setVendorPhone(string $vendorPhone): self
    {
        $this->vendorPhone = $vendorPhone;

        return $this;
    }
}
