<?php

namespace glook\PecomSdk\Generated\Model;

class CargoPickupStatusErrorError
{
    /**
     * 
     *
     * @var mixed|null
     */
    protected $error;
    /**
     * 
     *
     * @var string
     */
    protected $message;
    /**
     * 
     *
     * @var int
     */
    protected $status;
    /**
     * 
     *
     * @var string
     */
    protected $title;
    /**
     * 
     *
     * @return mixed
     */
    public function getError()
    {
        return $this->error;
    }
    /**
     * 
     *
     * @param mixed $error
     *
     * @return self
     */
    public function setError($error) : self
    {
        $this->error = $error;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getMessage() : string
    {
        return $this->message;
    }
    /**
     * 
     *
     * @param string $message
     *
     * @return self
     */
    public function setMessage(string $message) : self
    {
        $this->message = $message;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getStatus() : int
    {
        return $this->status;
    }
    /**
     * 
     *
     * @param int $status
     *
     * @return self
     */
    public function setStatus(int $status) : self
    {
        $this->status = $status;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title;
    }
    /**
     * 
     *
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title) : self
    {
        $this->title = $title;
        return $this;
    }
}