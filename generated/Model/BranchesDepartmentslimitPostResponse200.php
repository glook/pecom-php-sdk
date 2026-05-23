<?php

namespace glook\PecomSdk\Generated\Model;

class BranchesDepartmentslimitPostResponse200
{
    /**
     * Идентификатор филиала получателя.
     *
     * @var string
     */
    protected $recipientBranchId;

    /**
     * Идентификатор склада получателя. Выводится, если был передан в запросе.
     *
     * @var null|string
     */
    protected $recipientWarehouseId;

    /**
     * Идентификатор филиала отправителя.
     *
     * @var string
     */
    protected $senderBranchId;

    /**
     * Идентификатор склада отправителя. Выводится, если был передан в запросе.
     *
     * @var null|string
     */
    protected $senderWarehouseId;

    /**
     * Идентификатор продукта/тарифа Express Автоперевозка.
     *
     * @var int
     */
    protected $type;

    /**
     * Лимиты ВГХ.
     *
     * @var WdcLimits
     */
    protected $wdcLimits;

    /**
     * Идентификатор филиала получателя.
     */
    public function getRecipientBranchId(): string
    {
        return $this->recipientBranchId;
    }

    /**
     * Идентификатор филиала получателя.
     */
    public function setRecipientBranchId(string $recipientBranchId): self
    {
        $this->recipientBranchId = $recipientBranchId;

        return $this;
    }

    /**
     * Идентификатор склада получателя. Выводится, если был передан в запросе.
     */
    public function getRecipientWarehouseId(): ?string
    {
        return $this->recipientWarehouseId;
    }

    /**
     * Идентификатор склада получателя. Выводится, если был передан в запросе.
     */
    public function setRecipientWarehouseId(?string $recipientWarehouseId): self
    {
        $this->recipientWarehouseId = $recipientWarehouseId;

        return $this;
    }

    /**
     * Идентификатор филиала отправителя.
     */
    public function getSenderBranchId(): string
    {
        return $this->senderBranchId;
    }

    /**
     * Идентификатор филиала отправителя.
     */
    public function setSenderBranchId(string $senderBranchId): self
    {
        $this->senderBranchId = $senderBranchId;

        return $this;
    }

    /**
     * Идентификатор склада отправителя. Выводится, если был передан в запросе.
     */
    public function getSenderWarehouseId(): ?string
    {
        return $this->senderWarehouseId;
    }

    /**
     * Идентификатор склада отправителя. Выводится, если был передан в запросе.
     */
    public function setSenderWarehouseId(?string $senderWarehouseId): self
    {
        $this->senderWarehouseId = $senderWarehouseId;

        return $this;
    }

    /**
     * Идентификатор продукта/тарифа Express Автоперевозка.
     */
    public function getType(): int
    {
        return $this->type;
    }

    /**
     * Идентификатор продукта/тарифа Express Автоперевозка.
     */
    public function setType(int $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Лимиты ВГХ.
     */
    public function getWdcLimits(): WdcLimits
    {
        return $this->wdcLimits;
    }

    /**
     * Лимиты ВГХ.
     */
    public function setWdcLimits(WdcLimits $wdcLimits): self
    {
        $this->wdcLimits = $wdcLimits;

        return $this;
    }
}
