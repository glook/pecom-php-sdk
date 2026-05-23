<?php

namespace glook\PecomSdk\Generated\Model;

class CargoPickupNetworkSubmitRequestCargosItemsItemConditions
{
    /**
     * Необходима скоростная перевозка. В актуальной версии протокола не используется.
     *
     * @var null|bool
     */
    protected $isFast;

    /**
     * Необходима разгрузка силами «ПЭК» при доставке получателю.
     *
     * @var null|bool
     */
    protected $isLoading;

    /**
     * Необходима открытая машина при заборе у отправителя.
     *
     * @var null|bool
     */
    protected $isOpenCar;

    /**
     * Необходима боковая погрузка при заборе у отправителя.
     *
     * @var null|bool
     */
    protected $isSideLoad;

    /**
     * Необходима машина со специальным оборудованием при заборе у отправителя.
     *
     * @var null|bool
     */
    protected $isSpecialEquipment;

    /**
     * Необходима растентовка при заборе у отправителя. В актуальной версии протокола не используется.
     *
     * @var null|bool
     */
    protected $isUncovered;

    /**
     * Необходима скоростная перевозка. В актуальной версии протокола не используется.
     */
    public function getIsFast(): ?bool
    {
        return $this->isFast;
    }

    /**
     * Необходима скоростная перевозка. В актуальной версии протокола не используется.
     */
    public function setIsFast(?bool $isFast): self
    {
        $this->isFast = $isFast;

        return $this;
    }

    /**
     * Необходима разгрузка силами «ПЭК» при доставке получателю.
     */
    public function getIsLoading(): ?bool
    {
        return $this->isLoading;
    }

    /**
     * Необходима разгрузка силами «ПЭК» при доставке получателю.
     */
    public function setIsLoading(?bool $isLoading): self
    {
        $this->isLoading = $isLoading;

        return $this;
    }

    /**
     * Необходима открытая машина при заборе у отправителя.
     */
    public function getIsOpenCar(): ?bool
    {
        return $this->isOpenCar;
    }

    /**
     * Необходима открытая машина при заборе у отправителя.
     */
    public function setIsOpenCar(?bool $isOpenCar): self
    {
        $this->isOpenCar = $isOpenCar;

        return $this;
    }

    /**
     * Необходима боковая погрузка при заборе у отправителя.
     */
    public function getIsSideLoad(): ?bool
    {
        return $this->isSideLoad;
    }

    /**
     * Необходима боковая погрузка при заборе у отправителя.
     */
    public function setIsSideLoad(?bool $isSideLoad): self
    {
        $this->isSideLoad = $isSideLoad;

        return $this;
    }

    /**
     * Необходима машина со специальным оборудованием при заборе у отправителя.
     */
    public function getIsSpecialEquipment(): ?bool
    {
        return $this->isSpecialEquipment;
    }

    /**
     * Необходима машина со специальным оборудованием при заборе у отправителя.
     */
    public function setIsSpecialEquipment(?bool $isSpecialEquipment): self
    {
        $this->isSpecialEquipment = $isSpecialEquipment;

        return $this;
    }

    /**
     * Необходима растентовка при заборе у отправителя. В актуальной версии протокола не используется.
     */
    public function getIsUncovered(): ?bool
    {
        return $this->isUncovered;
    }

    /**
     * Необходима растентовка при заборе у отправителя. В актуальной версии протокола не используется.
     */
    public function setIsUncovered(?bool $isUncovered): self
    {
        $this->isUncovered = $isUncovered;

        return $this;
    }
}
