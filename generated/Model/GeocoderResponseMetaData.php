<?php

namespace glook\PecomSdk\Generated\Model;

class GeocoderResponseMetaData
{
    /**
     * Количество найденных вариантов адресов по строке запроса
     *
     * @var string
     */
    protected $found;
    /**
     * Часть адреса, по которому подбирались варианты
     *
     * @var string
     */
    protected $request;
    /**
     * Максимальное количество результатов
     *
     * @var string
     */
    protected $results;
    /**
     * Количество найденных вариантов адресов по строке запроса
     *
     * @return string
     */
    public function getFound() : string
    {
        return $this->found;
    }
    /**
     * Количество найденных вариантов адресов по строке запроса
     *
     * @param string $found
     *
     * @return self
     */
    public function setFound(string $found) : self
    {
        $this->found = $found;
        return $this;
    }
    /**
     * Часть адреса, по которому подбирались варианты
     *
     * @return string
     */
    public function getRequest() : string
    {
        return $this->request;
    }
    /**
     * Часть адреса, по которому подбирались варианты
     *
     * @param string $request
     *
     * @return self
     */
    public function setRequest(string $request) : self
    {
        $this->request = $request;
        return $this;
    }
    /**
     * Максимальное количество результатов
     *
     * @return string
     */
    public function getResults() : string
    {
        return $this->results;
    }
    /**
     * Максимальное количество результатов
     *
     * @param string $results
     *
     * @return self
     */
    public function setResults(string $results) : self
    {
        $this->results = $results;
        return $this;
    }
}