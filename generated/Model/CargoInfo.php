<?php

namespace glook\PecomSdk\Generated\Model;

class CargoInfo
{
    /**
     * Количество мест
     *
     * @var null|float
     */
    protected $amount;

    /**
     * Количество прибывших мест
     *
     * @var null|float
     */
    protected $amountProcessed;

    /**
     * Штрих-код груза
     *
     * @var null|string
     */
    protected $cargoBarCode;

    /**
     * Код груза
     *
     * @var null|string
     */
    protected $code;

    /**
     * Наименование груза
     *
     * @var null|string
     */
    protected $description;

    /**
     * Максимальный габарит
     *
     * @var null|float
     */
    protected $maxSize;

    /**
     * Номер заказа клиента
     *
     * @var null|string
     */
    protected $orderNumber;

    /**
     * Возврат документов по грузу
     *
     * @var null|string
     */
    protected $parentCargoCode;

    /**
     * Штрих-коды грузомест
     *
     * @var null|string[]
     */
    protected $positionBarCodes;

    /**
     * Тип тарифа / продукта (только в /statusbypositionbarcodes/)
     *
     * @var null|int
     */
    protected $type;

    /**
     * Объем, м3
     *
     * @var null|float
     */
    protected $volume;

    /**
     * Вес, кг
     *
     * @var null|float
     */
    protected $weight;

    /**
     * Количество мест
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }

    /**
     * Количество мест
     */
    public function setAmount(?float $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Количество прибывших мест
     */
    public function getAmountProcessed(): ?float
    {
        return $this->amountProcessed;
    }

    /**
     * Количество прибывших мест
     */
    public function setAmountProcessed(?float $amountProcessed): self
    {
        $this->amountProcessed = $amountProcessed;

        return $this;
    }

    /**
     * Штрих-код груза
     */
    public function getCargoBarCode(): ?string
    {
        return $this->cargoBarCode;
    }

    /**
     * Штрих-код груза
     */
    public function setCargoBarCode(?string $cargoBarCode): self
    {
        $this->cargoBarCode = $cargoBarCode;

        return $this;
    }

    /**
     * Код груза
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * Код груза
     */
    public function setCode(?string $code): self
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Наименование груза
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Наименование груза
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Максимальный габарит
     */
    public function getMaxSize(): ?float
    {
        return $this->maxSize;
    }

    /**
     * Максимальный габарит
     */
    public function setMaxSize(?float $maxSize): self
    {
        $this->maxSize = $maxSize;

        return $this;
    }

    /**
     * Номер заказа клиента
     */
    public function getOrderNumber(): ?string
    {
        return $this->orderNumber;
    }

    /**
     * Номер заказа клиента
     */
    public function setOrderNumber(?string $orderNumber): self
    {
        $this->orderNumber = $orderNumber;

        return $this;
    }

    /**
     * Возврат документов по грузу
     */
    public function getParentCargoCode(): ?string
    {
        return $this->parentCargoCode;
    }

    /**
     * Возврат документов по грузу
     */
    public function setParentCargoCode(?string $parentCargoCode): self
    {
        $this->parentCargoCode = $parentCargoCode;

        return $this;
    }

    /**
     * Штрих-коды грузомест
     *
     * @return null|string[]
     */
    public function getPositionBarCodes(): ?array
    {
        return $this->positionBarCodes;
    }

    /**
     * Штрих-коды грузомест
     *
     * @param null|string[] $positionBarCodes
     */
    public function setPositionBarCodes(?array $positionBarCodes): self
    {
        $this->positionBarCodes = $positionBarCodes;

        return $this;
    }

    /**
     * Тип тарифа / продукта (только в /statusbypositionbarcodes/)
     */
    public function getType(): ?int
    {
        return $this->type;
    }

    /**
     * Тип тарифа / продукта (только в /statusbypositionbarcodes/)
     */
    public function setType(?int $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Объем, м3
     */
    public function getVolume(): ?float
    {
        return $this->volume;
    }

    /**
     * Объем, м3
     */
    public function setVolume(?float $volume): self
    {
        $this->volume = $volume;

        return $this;
    }

    /**
     * Вес, кг
     */
    public function getWeight(): ?float
    {
        return $this->weight;
    }

    /**
     * Вес, кг
     */
    public function setWeight(?float $weight): self
    {
        $this->weight = $weight;

        return $this;
    }
}
