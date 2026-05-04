<?php

namespace glook\PecomSdk\Generated\Model;

class PreregistrationCommon
{
    /**
     * Звонить отправителю для подтверждения Забора. Необязательный, имеет смысл для только orderType=3. По-умолчанию true. Признак необходимости звонка отправителю для согласования/уточнения деталей Забора груза до планирования машины. true - оператор будет звонить для согласования, false - оператор не будет звонить. Машина будет запланирована автоматически.
     *
     * @var bool|null
     */
    protected $callToScheduleCar;
    /**
     * Номер карты клиента
     *
     * @var string|null
     */
    protected $counterpartClientCard;
    /**
     * Способ передачи груза в ПЭК. 0 - Самопривоз на склад ПЭК (по умолчанию), 3 - Забор от отправителя (Заказ «На машину и перевозку»), 4 - Заказ «На перевозку (с отдельным Заказом на машину)», 14 - Сетевая заявка на забор груза. Для type = 7 «ДТС Автоперевозка» допустимо указание orderType 0 (по умолчанию) или 14.
     *
     * @var int
     */
    protected $orderType;
    /**
     * Планируемая дата передачи груза в ПЭК. Обязательный для orderType 3, 4 и 14. Обязательно для orderType 0, 14 при type = 7 «ДТС Автоперевозка».
     *
     * @var \DateTime|null
     */
    protected $plannedDate;
    /**
     * Звонить отправителю для подтверждения Забора. Необязательный, имеет смысл для только orderType=3. По-умолчанию true. Признак необходимости звонка отправителю для согласования/уточнения деталей Забора груза до планирования машины. true - оператор будет звонить для согласования, false - оператор не будет звонить. Машина будет запланирована автоматически.
     *
     * @return bool|null
     */
    public function getCallToScheduleCar() : ?bool
    {
        return $this->callToScheduleCar;
    }
    /**
     * Звонить отправителю для подтверждения Забора. Необязательный, имеет смысл для только orderType=3. По-умолчанию true. Признак необходимости звонка отправителю для согласования/уточнения деталей Забора груза до планирования машины. true - оператор будет звонить для согласования, false - оператор не будет звонить. Машина будет запланирована автоматически.
     *
     * @param bool|null $callToScheduleCar
     *
     * @return self
     */
    public function setCallToScheduleCar(?bool $callToScheduleCar) : self
    {
        $this->callToScheduleCar = $callToScheduleCar;
        return $this;
    }
    /**
     * Номер карты клиента
     *
     * @return string|null
     */
    public function getCounterpartClientCard() : ?string
    {
        return $this->counterpartClientCard;
    }
    /**
     * Номер карты клиента
     *
     * @param string|null $counterpartClientCard
     *
     * @return self
     */
    public function setCounterpartClientCard(?string $counterpartClientCard) : self
    {
        $this->counterpartClientCard = $counterpartClientCard;
        return $this;
    }
    /**
     * Способ передачи груза в ПЭК. 0 - Самопривоз на склад ПЭК (по умолчанию), 3 - Забор от отправителя (Заказ «На машину и перевозку»), 4 - Заказ «На перевозку (с отдельным Заказом на машину)», 14 - Сетевая заявка на забор груза. Для type = 7 «ДТС Автоперевозка» допустимо указание orderType 0 (по умолчанию) или 14.
     *
     * @return int
     */
    public function getOrderType() : int
    {
        return $this->orderType;
    }
    /**
     * Способ передачи груза в ПЭК. 0 - Самопривоз на склад ПЭК (по умолчанию), 3 - Забор от отправителя (Заказ «На машину и перевозку»), 4 - Заказ «На перевозку (с отдельным Заказом на машину)», 14 - Сетевая заявка на забор груза. Для type = 7 «ДТС Автоперевозка» допустимо указание orderType 0 (по умолчанию) или 14.
     *
     * @param int $orderType
     *
     * @return self
     */
    public function setOrderType(int $orderType) : self
    {
        $this->orderType = $orderType;
        return $this;
    }
    /**
     * Планируемая дата передачи груза в ПЭК. Обязательный для orderType 3, 4 и 14. Обязательно для orderType 0, 14 при type = 7 «ДТС Автоперевозка».
     *
     * @return \DateTime|null
     */
    public function getPlannedDate() : ?\DateTime
    {
        return $this->plannedDate;
    }
    /**
     * Планируемая дата передачи груза в ПЭК. Обязательный для orderType 3, 4 и 14. Обязательно для orderType 0, 14 при type = 7 «ДТС Автоперевозка».
     *
     * @param \DateTime|null $plannedDate
     *
     * @return self
     */
    public function setPlannedDate(?\DateTime $plannedDate) : self
    {
        $this->plannedDate = $plannedDate;
        return $this;
    }
}