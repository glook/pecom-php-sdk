<?php

namespace glook\PecomSdk\Generated\Model;

class CargoInfo
{
    /**
     * Количество мест
     *
     * @var float|null
     */
    protected $amount;
    /**
     * Количество прибывших мест
     *
     * @var float|null
     */
    protected $amountProcessed;
    /**
     * Штрих-код груза
     *
     * @var string|null
     */
    protected $cargoBarCode;
    /**
     * Код груза
     *
     * @var string|null
     */
    protected $code;
    /**
     * Наименование груза
     *
     * @var string|null
     */
    protected $description;
    /**
     * Максимальный габарит
     *
     * @var float|null
     */
    protected $maxSize;
    /**
     * Номер заказа клиента
     *
     * @var string|null
     */
    protected $orderNumber;
    /**
     * Возврат документов по грузу
     *
     * @var string|null
     */
    protected $parentCargoCode;
    /**
     * Штрих-коды грузомест
     *
     * @var string[]|null
     */
    protected $positionBarCodes;
    /**
     * Тип тарифа / продукта (только в /statusbypositionbarcodes/)
     *
     * @var int|null
     */
    protected $type;
    /**
     * Объем, м3
     *
     * @var float|null
     */
    protected $volume;
    /**
     * Вес, кг
     *
     * @var float|null
     */
    protected $weight;
    /**
     * Количество мест
     *
     * @return float|null
     */
    public function getAmount() : ?float
    {
        return $this->amount;
    }
    /**
     * Количество мест
     *
     * @param float|null $amount
     *
     * @return self
     */
    public function setAmount(?float $amount) : self
    {
        $this->amount = $amount;
        return $this;
    }
    /**
     * Количество прибывших мест
     *
     * @return float|null
     */
    public function getAmountProcessed() : ?float
    {
        return $this->amountProcessed;
    }
    /**
     * Количество прибывших мест
     *
     * @param float|null $amountProcessed
     *
     * @return self
     */
    public function setAmountProcessed(?float $amountProcessed) : self
    {
        $this->amountProcessed = $amountProcessed;
        return $this;
    }
    /**
     * Штрих-код груза
     *
     * @return string|null
     */
    public function getCargoBarCode() : ?string
    {
        return $this->cargoBarCode;
    }
    /**
     * Штрих-код груза
     *
     * @param string|null $cargoBarCode
     *
     * @return self
     */
    public function setCargoBarCode(?string $cargoBarCode) : self
    {
        $this->cargoBarCode = $cargoBarCode;
        return $this;
    }
    /**
     * Код груза
     *
     * @return string|null
     */
    public function getCode() : ?string
    {
        return $this->code;
    }
    /**
     * Код груза
     *
     * @param string|null $code
     *
     * @return self
     */
    public function setCode(?string $code) : self
    {
        $this->code = $code;
        return $this;
    }
    /**
     * Наименование груза
     *
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * Наименование груза
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description) : self
    {
        $this->description = $description;
        return $this;
    }
    /**
     * Максимальный габарит
     *
     * @return float|null
     */
    public function getMaxSize() : ?float
    {
        return $this->maxSize;
    }
    /**
     * Максимальный габарит
     *
     * @param float|null $maxSize
     *
     * @return self
     */
    public function setMaxSize(?float $maxSize) : self
    {
        $this->maxSize = $maxSize;
        return $this;
    }
    /**
     * Номер заказа клиента
     *
     * @return string|null
     */
    public function getOrderNumber() : ?string
    {
        return $this->orderNumber;
    }
    /**
     * Номер заказа клиента
     *
     * @param string|null $orderNumber
     *
     * @return self
     */
    public function setOrderNumber(?string $orderNumber) : self
    {
        $this->orderNumber = $orderNumber;
        return $this;
    }
    /**
     * Возврат документов по грузу
     *
     * @return string|null
     */
    public function getParentCargoCode() : ?string
    {
        return $this->parentCargoCode;
    }
    /**
     * Возврат документов по грузу
     *
     * @param string|null $parentCargoCode
     *
     * @return self
     */
    public function setParentCargoCode(?string $parentCargoCode) : self
    {
        $this->parentCargoCode = $parentCargoCode;
        return $this;
    }
    /**
     * Штрих-коды грузомест
     *
     * @return string[]|null
     */
    public function getPositionBarCodes() : ?array
    {
        return $this->positionBarCodes;
    }
    /**
     * Штрих-коды грузомест
     *
     * @param string[]|null $positionBarCodes
     *
     * @return self
     */
    public function setPositionBarCodes(?array $positionBarCodes) : self
    {
        $this->positionBarCodes = $positionBarCodes;
        return $this;
    }
    /**
     * Тип тарифа / продукта (только в /statusbypositionbarcodes/)
     *
     * @return int|null
     */
    public function getType() : ?int
    {
        return $this->type;
    }
    /**
     * Тип тарифа / продукта (только в /statusbypositionbarcodes/)
     *
     * @param int|null $type
     *
     * @return self
     */
    public function setType(?int $type) : self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * Объем, м3
     *
     * @return float|null
     */
    public function getVolume() : ?float
    {
        return $this->volume;
    }
    /**
     * Объем, м3
     *
     * @param float|null $volume
     *
     * @return self
     */
    public function setVolume(?float $volume) : self
    {
        $this->volume = $volume;
        return $this;
    }
    /**
     * Вес, кг
     *
     * @return float|null
     */
    public function getWeight() : ?float
    {
        return $this->weight;
    }
    /**
     * Вес, кг
     *
     * @param float|null $weight
     *
     * @return self
     */
    public function setWeight(?float $weight) : self
    {
        $this->weight = $weight;
        return $this;
    }
}