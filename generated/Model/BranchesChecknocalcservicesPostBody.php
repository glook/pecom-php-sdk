<?php

namespace glook\PecomSdk\Generated\Model;

class BranchesChecknocalcservicesPostBody
{
    /**
     * ID филиала назначения груза, см. комментарии к методу
     *
     * @var string
     */
    protected $branchReceiverId;
    /**
     * ID филиала отправления груза, см. комментарии к методу
     *
     * @var string
     */
    protected $branchSenderId;
    /**
     * ID филиала назначения груза, см. комментарии к методу
     *
     * @return string
     */
    public function getBranchReceiverId() : string
    {
        return $this->branchReceiverId;
    }
    /**
     * ID филиала назначения груза, см. комментарии к методу
     *
     * @param string $branchReceiverId
     *
     * @return self
     */
    public function setBranchReceiverId(string $branchReceiverId) : self
    {
        $this->branchReceiverId = $branchReceiverId;
        return $this;
    }
    /**
     * ID филиала отправления груза, см. комментарии к методу
     *
     * @return string
     */
    public function getBranchSenderId() : string
    {
        return $this->branchSenderId;
    }
    /**
     * ID филиала отправления груза, см. комментарии к методу
     *
     * @param string $branchSenderId
     *
     * @return self
     */
    public function setBranchSenderId(string $branchSenderId) : self
    {
        $this->branchSenderId = $branchSenderId;
        return $this;
    }
}