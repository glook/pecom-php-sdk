<?php

namespace glook\PecomSdk\Generated\Model;

class BranchesNearestdepartmentsPostResponse200
{
    /**
     * Массив с собственными отделениями ПЭК, подходящие в выборку
     *
     * @var NearestDepartment[]
     */
    protected $freeDepartments;
    /**
     * Массив с ПВЗ (структура элемента массива такая же как для собственных отделений)
     *
     * @var NearestDepartment[]
     */
    protected $paidDepartments;
    /**
     * Массив с собственными отделениями ПЭК, подходящие в выборку
     *
     * @return NearestDepartment[]
     */
    public function getFreeDepartments() : array
    {
        return $this->freeDepartments;
    }
    /**
     * Массив с собственными отделениями ПЭК, подходящие в выборку
     *
     * @param NearestDepartment[] $freeDepartments
     *
     * @return self
     */
    public function setFreeDepartments(array $freeDepartments) : self
    {
        $this->freeDepartments = $freeDepartments;
        return $this;
    }
    /**
     * Массив с ПВЗ (структура элемента массива такая же как для собственных отделений)
     *
     * @return NearestDepartment[]
     */
    public function getPaidDepartments() : array
    {
        return $this->paidDepartments;
    }
    /**
     * Массив с ПВЗ (структура элемента массива такая же как для собственных отделений)
     *
     * @param NearestDepartment[] $paidDepartments
     *
     * @return self
     */
    public function setPaidDepartments(array $paidDepartments) : self
    {
        $this->paidDepartments = $paidDepartments;
        return $this;
    }
}