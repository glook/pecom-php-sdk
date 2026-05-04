<?php

namespace glook\PecomSdk\Generated\Model;

class CargoPickupNetworkSubmitRequestCargosItemsItemConditions
{
    /**
     * Необходима скоростная перевозка. В актуальной версии протокола не используется
     *
     * @var bool|null
     */
    protected $isFast;
    /**
     * Необходима разгрузка силами «ПЭК» при доставке получателю
     *
     * @var bool|null
     */
    protected $isLoading;
    /**
     * Необходима открытая машина при заборе у отправителя
     *
     * @var bool|null
     */
    protected $isOpenCar;
    /**
     * Необходима боковая погрузка при заборе у отправителя
     *
     * @var bool|null
     */
    protected $isSideLoad;
    /**
     * Необходима машина со специальным оборудованием при заборе у отправителя
     *
     * @var bool|null
     */
    protected $isSpecialEquipment;
    /**
     * Необходима растентовка при заборе у отправителя. В актуальной версии протокола не используется
     *
     * @var bool|null
     */
    protected $isUncovered;
    /**
     * Необходима скоростная перевозка. В актуальной версии протокола не используется
     *
     * @return bool|null
     */
    public function getIsFast() : ?bool
    {
        return $this->isFast;
    }
    /**
     * Необходима скоростная перевозка. В актуальной версии протокола не используется
     *
     * @param bool|null $isFast
     *
     * @return self
     */
    public function setIsFast(?bool $isFast) : self
    {
        $this->isFast = $isFast;
        return $this;
    }
    /**
     * Необходима разгрузка силами «ПЭК» при доставке получателю
     *
     * @return bool|null
     */
    public function getIsLoading() : ?bool
    {
        return $this->isLoading;
    }
    /**
     * Необходима разгрузка силами «ПЭК» при доставке получателю
     *
     * @param bool|null $isLoading
     *
     * @return self
     */
    public function setIsLoading(?bool $isLoading) : self
    {
        $this->isLoading = $isLoading;
        return $this;
    }
    /**
     * Необходима открытая машина при заборе у отправителя
     *
     * @return bool|null
     */
    public function getIsOpenCar() : ?bool
    {
        return $this->isOpenCar;
    }
    /**
     * Необходима открытая машина при заборе у отправителя
     *
     * @param bool|null $isOpenCar
     *
     * @return self
     */
    public function setIsOpenCar(?bool $isOpenCar) : self
    {
        $this->isOpenCar = $isOpenCar;
        return $this;
    }
    /**
     * Необходима боковая погрузка при заборе у отправителя
     *
     * @return bool|null
     */
    public function getIsSideLoad() : ?bool
    {
        return $this->isSideLoad;
    }
    /**
     * Необходима боковая погрузка при заборе у отправителя
     *
     * @param bool|null $isSideLoad
     *
     * @return self
     */
    public function setIsSideLoad(?bool $isSideLoad) : self
    {
        $this->isSideLoad = $isSideLoad;
        return $this;
    }
    /**
     * Необходима машина со специальным оборудованием при заборе у отправителя
     *
     * @return bool|null
     */
    public function getIsSpecialEquipment() : ?bool
    {
        return $this->isSpecialEquipment;
    }
    /**
     * Необходима машина со специальным оборудованием при заборе у отправителя
     *
     * @param bool|null $isSpecialEquipment
     *
     * @return self
     */
    public function setIsSpecialEquipment(?bool $isSpecialEquipment) : self
    {
        $this->isSpecialEquipment = $isSpecialEquipment;
        return $this;
    }
    /**
     * Необходима растентовка при заборе у отправителя. В актуальной версии протокола не используется
     *
     * @return bool|null
     */
    public function getIsUncovered() : ?bool
    {
        return $this->isUncovered;
    }
    /**
     * Необходима растентовка при заборе у отправителя. В актуальной версии протокола не используется
     *
     * @param bool|null $isUncovered
     *
     * @return self
     */
    public function setIsUncovered(?bool $isUncovered) : self
    {
        $this->isUncovered = $isUncovered;
        return $this;
    }
}