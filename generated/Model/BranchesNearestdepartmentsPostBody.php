<?php

namespace glook\PecomSdk\Generated\Model;

class BranchesNearestdepartmentsPostBody
{
    /**
     * Если переданы координаты в реквизите «coordinates», то указанный здесь адрес игнорируется
     *
     * @var null|string
     */
    protected $address;

    /**
     * @var null|BranchesNearestdepartmentsPostBodyCoordinates
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
     * @var null|float
     */
    protected $maxDimension;

    /**
     * Самое тяжелое место из всех грузомест груза. Необязательно
     *
     * @var null|float
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
     * Полный список доступных в API продуктов/тарифов можно получить методом [`/typesOfDelivery/all/`](#tag/typesofdelivery/GET/typesOfDelivery/all/)
     *
     * @var int
     */
    protected $type;

    /**
     * Общий объем груза, для которого нужно подобрать отделение. Необязательно
     *
     * @var null|float
     */
    protected $volume;

    /**
     * Вес груза, для которого необходимо подобрать подходящее отделение. Необязательно
     *
     * @var null|float
     */
    protected $weight;

    /**
     * Если переданы координаты в реквизите «coordinates», то указанный здесь адрес игнорируется
     */
    public function getAddress(): ?string
    {
        return $this->address;
    }

    /**
     * Если переданы координаты в реквизите «coordinates», то указанный здесь адрес игнорируется
     */
    public function setAddress(?string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getCoordinates(): ?BranchesNearestdepartmentsPostBodyCoordinates
    {
        return $this->coordinates;
    }

    public function setCoordinates(?BranchesNearestdepartmentsPostBodyCoordinates $coordinates): self
    {
        $this->coordinates = $coordinates;

        return $this;
    }

    /**
     * 2 – есть приемка грузов, 3 – есть выдача грузов. Обязательно.
     */
    public function getDepartmentOperation(): int
    {
        return $this->departmentOperation;
    }

    /**
     * 2 – есть приемка грузов, 3 – есть выдача грузов. Обязательно.
     */
    public function setDepartmentOperation(int $departmentOperation): self
    {
        $this->departmentOperation = $departmentOperation;

        return $this;
    }

    /**
     * Сколько подходящих отделений возвращать в каждом массиве. Обязательно.
     */
    public function getLimit(): int
    {
        return $this->limit;
    }

    /**
     * Сколько подходящих отделений возвращать в каждом массиве. Обязательно.
     */
    public function setLimit(int $limit): self
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * Максимальный габарит груза, для которого нужно подобрать отделение. Необязательно
     */
    public function getMaxDimension(): ?float
    {
        return $this->maxDimension;
    }

    /**
     * Максимальный габарит груза, для которого нужно подобрать отделение. Необязательно
     */
    public function setMaxDimension(?float $maxDimension): self
    {
        $this->maxDimension = $maxDimension;

        return $this;
    }

    /**
     * Самое тяжелое место из всех грузомест груза. Необязательно
     */
    public function getMaxWeightPerPlace(): ?float
    {
        return $this->maxWeightPerPlace;
    }

    /**
     * Самое тяжелое место из всех грузомест груза. Необязательно
     */
    public function setMaxWeightPerPlace(?float $maxWeightPerPlace): self
    {
        $this->maxWeightPerPlace = $maxWeightPerPlace;

        return $this;
    }

    /**
     * Километры. На каком расстоянии по прямой от точки переданных координат или адреса до предлагаемых Отделений/Складов. Обязательно.
     */
    public function getSearchRadius(): int
    {
        return $this->searchRadius;
    }

    /**
     * Километры. На каком расстоянии по прямой от точки переданных координат или адреса до предлагаемых Отделений/Складов. Обязательно.
     */
    public function setSearchRadius(int $searchRadius): self
    {
        $this->searchRadius = $searchRadius;

        return $this;
    }

    /**
     * Идентификатор продукта/тарифа ПЭК, с которым должно работать отделение. Обязательно.
     * Полный список доступных в API продуктов/тарифов можно получить методом [`/typesOfDelivery/all/`](#tag/typesofdelivery/GET/typesOfDelivery/all/)
     */
    public function getType(): int
    {
        return $this->type;
    }

    /**
     * Идентификатор продукта/тарифа ПЭК, с которым должно работать отделение. Обязательно.
     * Полный список доступных в API продуктов/тарифов можно получить методом [`/typesOfDelivery/all/`](#tag/typesofdelivery/GET/typesOfDelivery/all/)
     */
    public function setType(int $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Общий объем груза, для которого нужно подобрать отделение. Необязательно
     */
    public function getVolume(): ?float
    {
        return $this->volume;
    }

    /**
     * Общий объем груза, для которого нужно подобрать отделение. Необязательно
     */
    public function setVolume(?float $volume): self
    {
        $this->volume = $volume;

        return $this;
    }

    /**
     * Вес груза, для которого необходимо подобрать подходящее отделение. Необязательно
     */
    public function getWeight(): ?float
    {
        return $this->weight;
    }

    /**
     * Вес груза, для которого необходимо подобрать подходящее отделение. Необязательно
     */
    public function setWeight(?float $weight): self
    {
        $this->weight = $weight;

        return $this;
    }
}
