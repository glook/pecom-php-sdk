<?php

namespace glook\PecomSdk\Generated\Model;

class BranchesDepartmentslimitPostResponse200
{
    /**
     * Идентификатор филиала получателя
     *
     * @var string
     */
    protected $recipientBranchId;
    /**
     * Идентификатор склада получателя. Выводится, если был передан в запросе
     *
     * @var string|null
     */
    protected $recipientWarehouseId;
    /**
     * Идентификатор филиала отправителя
     *
     * @var string
     */
    protected $senderBranchId;
    /**
     * Идентификатор склада отправителя. Выводится, если был передан в запросе
     *
     * @var string|null
     */
    protected $senderWarehouseId;
    /**
     * Идентификатор продукта/тарифа Express Автоперевозка
     *
     * @var int
     */
    protected $type;
    /**
     * 
     *
     * @var WdcLimits
     */
    protected $wdcLimits;
    /**
     * Идентификатор филиала получателя
     *
     * @return string
     */
    public function getRecipientBranchId() : string
    {
        return $this->recipientBranchId;
    }
    /**
     * Идентификатор филиала получателя
     *
     * @param string $recipientBranchId
     *
     * @return self
     */
    public function setRecipientBranchId(string $recipientBranchId) : self
    {
        $this->recipientBranchId = $recipientBranchId;
        return $this;
    }
    /**
     * Идентификатор склада получателя. Выводится, если был передан в запросе
     *
     * @return string|null
     */
    public function getRecipientWarehouseId() : ?string
    {
        return $this->recipientWarehouseId;
    }
    /**
     * Идентификатор склада получателя. Выводится, если был передан в запросе
     *
     * @param string|null $recipientWarehouseId
     *
     * @return self
     */
    public function setRecipientWarehouseId(?string $recipientWarehouseId) : self
    {
        $this->recipientWarehouseId = $recipientWarehouseId;
        return $this;
    }
    /**
     * Идентификатор филиала отправителя
     *
     * @return string
     */
    public function getSenderBranchId() : string
    {
        return $this->senderBranchId;
    }
    /**
     * Идентификатор филиала отправителя
     *
     * @param string $senderBranchId
     *
     * @return self
     */
    public function setSenderBranchId(string $senderBranchId) : self
    {
        $this->senderBranchId = $senderBranchId;
        return $this;
    }
    /**
     * Идентификатор склада отправителя. Выводится, если был передан в запросе
     *
     * @return string|null
     */
    public function getSenderWarehouseId() : ?string
    {
        return $this->senderWarehouseId;
    }
    /**
     * Идентификатор склада отправителя. Выводится, если был передан в запросе
     *
     * @param string|null $senderWarehouseId
     *
     * @return self
     */
    public function setSenderWarehouseId(?string $senderWarehouseId) : self
    {
        $this->senderWarehouseId = $senderWarehouseId;
        return $this;
    }
    /**
     * Идентификатор продукта/тарифа Express Автоперевозка
     *
     * @return int
     */
    public function getType() : int
    {
        return $this->type;
    }
    /**
     * Идентификатор продукта/тарифа Express Автоперевозка
     *
     * @param int $type
     *
     * @return self
     */
    public function setType(int $type) : self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * 
     *
     * @return WdcLimits
     */
    public function getWdcLimits() : WdcLimits
    {
        return $this->wdcLimits;
    }
    /**
     * 
     *
     * @param WdcLimits $wdcLimits
     *
     * @return self
     */
    public function setWdcLimits(WdcLimits $wdcLimits) : self
    {
        $this->wdcLimits = $wdcLimits;
        return $this;
    }
}