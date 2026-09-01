<?php

namespace glook\PecomSdk\Generated\Model;

class BranchesDepartmentslimitPostBody
{
    /**
     * Идентификатор филиала получателя. Обязателен.
     * Можно получить методом  [`/branches/nearestdepartments/`](#tag/branches/POST/branches/nearestdepartments/) по адресу доставки `freeDepartments.branchId`
     *
     * @var string
     */
    protected $recipientBranchId;

    /**
     * Идентификатор склада получателя. Не обязателен.
     * Можно получить методом  [`/branches/nearestdepartments/`](#tag/branches/POST/branches/nearestdepartments/) по адресу доставки `freeDepartments.warehouseId`
     *
     * @var null|string
     */
    protected $recipientWarehouseId;

    /**
     * Идентификатор филиала отправителя. Обязателен.
     * Можно получить методом [`/branches/nearestdepartments/`](#tag/branches/POST/branches/nearestdepartments/) по адресу забора `freeDepartments.branchId`
     *
     * @var string
     */
    protected $senderBranchId;

    /**
     * Идентификатор склада отправителя. Не обязателен.
     * Можно получить методом  [`/branches/nearestdepartments/`](#tag/branches/POST/branches/nearestdepartments/) по адресу забора `freeDepartments.warehouseId`
     *
     * @var null|string
     */
    protected $senderWarehouseId;

    /**
     * Идентификатор продукта/тарифа Express Автоперевозка. Обязателен
     *
     * @var int
     */
    protected $type;

    /**
     * Идентификатор филиала получателя. Обязателен.
     * Можно получить методом  [`/branches/nearestdepartments/`](#tag/branches/POST/branches/nearestdepartments/) по адресу доставки `freeDepartments.branchId`
     */
    public function getRecipientBranchId(): string
    {
        return $this->recipientBranchId;
    }

    /**
     * Идентификатор филиала получателя. Обязателен.
     * Можно получить методом  [`/branches/nearestdepartments/`](#tag/branches/POST/branches/nearestdepartments/) по адресу доставки `freeDepartments.branchId`
     */
    public function setRecipientBranchId(string $recipientBranchId): self
    {
        $this->recipientBranchId = $recipientBranchId;

        return $this;
    }

    /**
     * Идентификатор склада получателя. Не обязателен.
     * Можно получить методом  [`/branches/nearestdepartments/`](#tag/branches/POST/branches/nearestdepartments/) по адресу доставки `freeDepartments.warehouseId`
     */
    public function getRecipientWarehouseId(): ?string
    {
        return $this->recipientWarehouseId;
    }

    /**
     * Идентификатор склада получателя. Не обязателен.
     * Можно получить методом  [`/branches/nearestdepartments/`](#tag/branches/POST/branches/nearestdepartments/) по адресу доставки `freeDepartments.warehouseId`
     */
    public function setRecipientWarehouseId(?string $recipientWarehouseId): self
    {
        $this->recipientWarehouseId = $recipientWarehouseId;

        return $this;
    }

    /**
     * Идентификатор филиала отправителя. Обязателен.
     * Можно получить методом [`/branches/nearestdepartments/`](#tag/branches/POST/branches/nearestdepartments/) по адресу забора `freeDepartments.branchId`
     */
    public function getSenderBranchId(): string
    {
        return $this->senderBranchId;
    }

    /**
     * Идентификатор филиала отправителя. Обязателен.
     * Можно получить методом [`/branches/nearestdepartments/`](#tag/branches/POST/branches/nearestdepartments/) по адресу забора `freeDepartments.branchId`
     */
    public function setSenderBranchId(string $senderBranchId): self
    {
        $this->senderBranchId = $senderBranchId;

        return $this;
    }

    /**
     * Идентификатор склада отправителя. Не обязателен.
     * Можно получить методом  [`/branches/nearestdepartments/`](#tag/branches/POST/branches/nearestdepartments/) по адресу забора `freeDepartments.warehouseId`
     */
    public function getSenderWarehouseId(): ?string
    {
        return $this->senderWarehouseId;
    }

    /**
     * Идентификатор склада отправителя. Не обязателен.
     * Можно получить методом  [`/branches/nearestdepartments/`](#tag/branches/POST/branches/nearestdepartments/) по адресу забора `freeDepartments.warehouseId`
     */
    public function setSenderWarehouseId(?string $senderWarehouseId): self
    {
        $this->senderWarehouseId = $senderWarehouseId;

        return $this;
    }

    /**
     * Идентификатор продукта/тарифа Express Автоперевозка. Обязателен
     */
    public function getType(): int
    {
        return $this->type;
    }

    /**
     * Идентификатор продукта/тарифа Express Автоперевозка. Обязателен
     */
    public function setType(int $type): self
    {
        $this->type = $type;

        return $this;
    }
}
