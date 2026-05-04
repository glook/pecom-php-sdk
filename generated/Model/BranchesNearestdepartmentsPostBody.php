<?php

namespace glook\PecomSdk\Generated\Model;

class BranchesNearestdepartmentsPostBody
{
    /**
     * Если переданы координаты в реквизите «coordinates», то указанный здесь адрес игнорируется
     *
     * @var string|null
     */
    protected $address;
    /**
     * 
     *
     * @var BranchesNearestdepartmentsPostBodyCoordinates|null
     */
    protected $coordinates;
    /**
     * 2 – есть приемка грузов, 3 – есть выдача грузов. Обязательно.
     *
     * @var int
     */
    protected $departmentOperation;
    /**
     * Сколько подходящих отделений возвращать в каждом массиве. Обязательно.
     *
     * @var int
     */
    protected $limit;
    /**
     * Максимальный габарит груза, для которого нужно подобрать отделение. Необязательно
     *
     * @var float|null
     */
    protected $maxDimension;
    /**
     * Самое тяжелое место из всех грузомест груза. Необязательно
     *
     * @var float|null
     */
    protected $maxWeightPerPlace;
    /**
     * Километры. На каком расстоянии по прямой от точки переданных координат или адреса до предлагаемых Отделений/Складов. Обязательно.
     *
     * @var int
     */
    protected $searchRadius;
    /**
    * Идентификатор продукта/тарифа ПЭК, с которым должно работать отделение. Обязательно.
    Полный список доступных в API продуктов/тарифов можно получить методом [`/typesOfDelivery/all/`](#tag/typesofdelivery/GET/typesOfDelivery/all/)
    *
    * @var int
    */
    protected $type;
    /**
     * Общий объем груза, для которого нужно подобрать отделение. Необязательно
     *
     * @var float|null
     */
    protected $volume;
    /**
     * Вес груза, для которого необходимо подобрать подходящее отделение. Необязательно
     *
     * @var float|null
     */
    protected $weight;
    /**
     * Если переданы координаты в реквизите «coordinates», то указанный здесь адрес игнорируется
     *
     * @return string|null
     */
    public function getAddress() : ?string
    {
        return $this->address;
    }
    /**
     * Если переданы координаты в реквизите «coordinates», то указанный здесь адрес игнорируется
     *
     * @param string|null $address
     *
     * @return self
     */
    public function setAddress(?string $address) : self
    {
        $this->address = $address;
        return $this;
    }
    /**
     * 
     *
     * @return BranchesNearestdepartmentsPostBodyCoordinates|null
     */
    public function getCoordinates() : ?BranchesNearestdepartmentsPostBodyCoordinates
    {
        return $this->coordinates;
    }
    /**
     * 
     *
     * @param BranchesNearestdepartmentsPostBodyCoordinates|null $coordinates
     *
     * @return self
     */
    public function setCoordinates(?BranchesNearestdepartmentsPostBodyCoordinates $coordinates) : self
    {
        $this->coordinates = $coordinates;
        return $this;
    }
    /**
     * 2 – есть приемка грузов, 3 – есть выдача грузов. Обязательно.
     *
     * @return int
     */
    public function getDepartmentOperation() : int
    {
        return $this->departmentOperation;
    }
    /**
     * 2 – есть приемка грузов, 3 – есть выдача грузов. Обязательно.
     *
     * @param int $departmentOperation
     *
     * @return self
     */
    public function setDepartmentOperation(int $departmentOperation) : self
    {
        $this->departmentOperation = $departmentOperation;
        return $this;
    }
    /**
     * Сколько подходящих отделений возвращать в каждом массиве. Обязательно.
     *
     * @return int
     */
    public function getLimit() : int
    {
        return $this->limit;
    }
    /**
     * Сколько подходящих отделений возвращать в каждом массиве. Обязательно.
     *
     * @param int $limit
     *
     * @return self
     */
    public function setLimit(int $limit) : self
    {
        $this->limit = $limit;
        return $this;
    }
    /**
     * Максимальный габарит груза, для которого нужно подобрать отделение. Необязательно
     *
     * @return float|null
     */
    public function getMaxDimension() : ?float
    {
        return $this->maxDimension;
    }
    /**
     * Максимальный габарит груза, для которого нужно подобрать отделение. Необязательно
     *
     * @param float|null $maxDimension
     *
     * @return self
     */
    public function setMaxDimension(?float $maxDimension) : self
    {
        $this->maxDimension = $maxDimension;
        return $this;
    }
    /**
     * Самое тяжелое место из всех грузомест груза. Необязательно
     *
     * @return float|null
     */
    public function getMaxWeightPerPlace() : ?float
    {
        return $this->maxWeightPerPlace;
    }
    /**
     * Самое тяжелое место из всех грузомест груза. Необязательно
     *
     * @param float|null $maxWeightPerPlace
     *
     * @return self
     */
    public function setMaxWeightPerPlace(?float $maxWeightPerPlace) : self
    {
        $this->maxWeightPerPlace = $maxWeightPerPlace;
        return $this;
    }
    /**
     * Километры. На каком расстоянии по прямой от точки переданных координат или адреса до предлагаемых Отделений/Складов. Обязательно.
     *
     * @return int
     */
    public function getSearchRadius() : int
    {
        return $this->searchRadius;
    }
    /**
     * Километры. На каком расстоянии по прямой от точки переданных координат или адреса до предлагаемых Отделений/Складов. Обязательно.
     *
     * @param int $searchRadius
     *
     * @return self
     */
    public function setSearchRadius(int $searchRadius) : self
    {
        $this->searchRadius = $searchRadius;
        return $this;
    }
    /**
    * Идентификатор продукта/тарифа ПЭК, с которым должно работать отделение. Обязательно.
    Полный список доступных в API продуктов/тарифов можно получить методом [`/typesOfDelivery/all/`](#tag/typesofdelivery/GET/typesOfDelivery/all/)
    *
    * @return int
    */
    public function getType() : int
    {
        return $this->type;
    }
    /**
    * Идентификатор продукта/тарифа ПЭК, с которым должно работать отделение. Обязательно.
    Полный список доступных в API продуктов/тарифов можно получить методом [`/typesOfDelivery/all/`](#tag/typesofdelivery/GET/typesOfDelivery/all/)
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
     * Общий объем груза, для которого нужно подобрать отделение. Необязательно
     *
     * @return float|null
     */
    public function getVolume() : ?float
    {
        return $this->volume;
    }
    /**
     * Общий объем груза, для которого нужно подобрать отделение. Необязательно
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
     * Вес груза, для которого необходимо подобрать подходящее отделение. Необязательно
     *
     * @return float|null
     */
    public function getWeight() : ?float
    {
        return $this->weight;
    }
    /**
     * Вес груза, для которого необходимо подобрать подходящее отделение. Необязательно
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