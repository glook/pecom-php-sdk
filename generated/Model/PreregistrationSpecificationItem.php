<?php

namespace glook\PecomSdk\Generated\Model;

class PreregistrationSpecificationItem
{
    /**
     * Объявленная ценность за ед., в т.ч. НДС, руб. Обязательно. Цена 1 единицы товара для покупателя (не влияет на сумму наложенного платежа)
     *
     * @var float
     */
    protected $actualCostPerUnit;
    /**
     * Объявленная ценность всего, руб., в т.ч. НДС. Обязательно. Общая стоимость товаров в строке для покупателя (не влияет на сумму наложенного платежа)
     *
     * @var float
     */
    protected $actualCostTotal;
    /**
     * Количество. Обязательно. Для маркированных товаров всегда = 1
     *
     * @var int
     */
    protected $amount;
    /**
     * Признак Предмета Расчета. Обязательно. Обязательный реквизит кассового чека. Допустимые значения: 1 – Товар (по умолчанию), 33 – Товар маркированный. Для товаров с типом 33 обязательно заполнять реквизиты: MarkingСode и groupMarkedGood.
     *
     * @var int
     */
    protected $calculationSubject;
    /**
     * Товарная группа маркированного товара. Обязательно при calculationSubject = 33 (товар маркированный), в других случаях не заполняется. Допустимые значения: 1 -lp- Легпром, 2 -shoes– Обувь, 4 -perfumery– Парфюм, 5 -tires– Шины, 6 -electronics– Фото, 9 -bicycle– Велосипеды, 10 -wheelchairs- Медицинские изделия, 13 -water– Упак.вода, 14 -furs– Товары из натур.меха, 17 -bio– БАДЫ, 19 -antiseptic– Антисептики, 35 -chemistry– Косметика, быт.химия и товары личной гигиены.
     *
     * @var int|null
     */
    protected $groupMarkedGood;
    /**
     * Код маркировки (КМ). Обязательное поле, если "calculationSubject": 33, в других случаях не заполняется. Код маркировки передается целиком, включая "крипто-хвост" (коды проверки). Код маркировки следует преобразовать URL Кодированием.
     *
     * @var string|null
     */
    protected $markingCode;
    /**
     * Мера количества предмета расчета (всегда шт.). Необязательный реквизит. По умолчанию "0 (шт.)". Если "calculationSubject": 33, то всегда "measureOfQuantity": 0. Допустимые значения: 0 — шт, 10 — г(Грамм), 11 — кг(Килограмм), 12 — т(Тонна), 20 — см(Сантиметр), 21 — дм(Дециметр), 22 — м(Метр), 30 — кв.см(Квадратный сантиметр), 31 — кв.дм(Квадратный дециметр), 32 — кв.м(Квадратный метр), 40 — мл(Миллилитр), 41 — л(Литр), 42 — куб.м(Кубический метр), 255 — Применяется при использовании иных единиц измерения
     *
     * @var int|null
     */
    protected $measureOfQuantity;
    /**
     * Ставка НДС. Обязательно. Ожидаемые значения: "НДС22" - НДС 22%, "НДС10" - НДС 10%, "НДС7" - НДС 7%, "НДС5" - НДС 5% или "БезНДС" - Без НДС
     *
     * @var string
     */
    protected $rateVAT;
    /**
     * Цена 1 единицы товара, которую ПЭК должен взять с Грузополучателя/ Покупателя за каждую единицу товара (сумма с НДС), руб. Обязательно.
     *
     * @var float
     */
    protected $sumPerUnit;
    /**
     * Сумма, которую ПЭК должен взять с Грузополучателя/ Покупателя по данной строке товаров (сумма с НДС), руб. Обязательно. Данная сумма будет в кассовом чеке.
     *
     * @var float
     */
    protected $sumTotal;
    /**
     * Наименование товара для кассового чека. Обязательно
     *
     * @var string
     */
    protected $title;
    /**
     * Артикул товара для кассового чека. Обязательно
     *
     * @var string
     */
    protected $vendorCode;
    /**
     * ИНН владельца товара (с точки зрения бухгалтерского учёта) для указания в кассовом чеке. Обязательно. Ожидается 10 цифр для юридических лиц или 12 цифр для ИП.
     *
     * @var string
     */
    protected $vendorINN;
    /**
     * Наименование владельца товара (с точки зрения бух.учёта) для указания в кассовом чеке. Обязательно.
     *
     * @var string
     */
    protected $vendorName;
    /**
     * Телефон владельца товара (с точки зрения бух.учёта) для указания в кассовом чеке. Обязательно. Необходимо корректно ввести номер телефона в международном формате через «+», код страны и города обязательны, без пробелов и дополнительных символов ТОЛЬКО цифры, например, +74956651111. Максимум 19 символов
     *
     * @var string
     */
    protected $vendorPhone;
    /**
     * Объявленная ценность за ед., в т.ч. НДС, руб. Обязательно. Цена 1 единицы товара для покупателя (не влияет на сумму наложенного платежа)
     *
     * @return float
     */
    public function getActualCostPerUnit() : float
    {
        return $this->actualCostPerUnit;
    }
    /**
     * Объявленная ценность за ед., в т.ч. НДС, руб. Обязательно. Цена 1 единицы товара для покупателя (не влияет на сумму наложенного платежа)
     *
     * @param float $actualCostPerUnit
     *
     * @return self
     */
    public function setActualCostPerUnit(float $actualCostPerUnit) : self
    {
        $this->actualCostPerUnit = $actualCostPerUnit;
        return $this;
    }
    /**
     * Объявленная ценность всего, руб., в т.ч. НДС. Обязательно. Общая стоимость товаров в строке для покупателя (не влияет на сумму наложенного платежа)
     *
     * @return float
     */
    public function getActualCostTotal() : float
    {
        return $this->actualCostTotal;
    }
    /**
     * Объявленная ценность всего, руб., в т.ч. НДС. Обязательно. Общая стоимость товаров в строке для покупателя (не влияет на сумму наложенного платежа)
     *
     * @param float $actualCostTotal
     *
     * @return self
     */
    public function setActualCostTotal(float $actualCostTotal) : self
    {
        $this->actualCostTotal = $actualCostTotal;
        return $this;
    }
    /**
     * Количество. Обязательно. Для маркированных товаров всегда = 1
     *
     * @return int
     */
    public function getAmount() : int
    {
        return $this->amount;
    }
    /**
     * Количество. Обязательно. Для маркированных товаров всегда = 1
     *
     * @param int $amount
     *
     * @return self
     */
    public function setAmount(int $amount) : self
    {
        $this->amount = $amount;
        return $this;
    }
    /**
     * Признак Предмета Расчета. Обязательно. Обязательный реквизит кассового чека. Допустимые значения: 1 – Товар (по умолчанию), 33 – Товар маркированный. Для товаров с типом 33 обязательно заполнять реквизиты: MarkingСode и groupMarkedGood.
     *
     * @return int
     */
    public function getCalculationSubject() : int
    {
        return $this->calculationSubject;
    }
    /**
     * Признак Предмета Расчета. Обязательно. Обязательный реквизит кассового чека. Допустимые значения: 1 – Товар (по умолчанию), 33 – Товар маркированный. Для товаров с типом 33 обязательно заполнять реквизиты: MarkingСode и groupMarkedGood.
     *
     * @param int $calculationSubject
     *
     * @return self
     */
    public function setCalculationSubject(int $calculationSubject) : self
    {
        $this->calculationSubject = $calculationSubject;
        return $this;
    }
    /**
     * Товарная группа маркированного товара. Обязательно при calculationSubject = 33 (товар маркированный), в других случаях не заполняется. Допустимые значения: 1 -lp- Легпром, 2 -shoes– Обувь, 4 -perfumery– Парфюм, 5 -tires– Шины, 6 -electronics– Фото, 9 -bicycle– Велосипеды, 10 -wheelchairs- Медицинские изделия, 13 -water– Упак.вода, 14 -furs– Товары из натур.меха, 17 -bio– БАДЫ, 19 -antiseptic– Антисептики, 35 -chemistry– Косметика, быт.химия и товары личной гигиены.
     *
     * @return int|null
     */
    public function getGroupMarkedGood() : ?int
    {
        return $this->groupMarkedGood;
    }
    /**
     * Товарная группа маркированного товара. Обязательно при calculationSubject = 33 (товар маркированный), в других случаях не заполняется. Допустимые значения: 1 -lp- Легпром, 2 -shoes– Обувь, 4 -perfumery– Парфюм, 5 -tires– Шины, 6 -electronics– Фото, 9 -bicycle– Велосипеды, 10 -wheelchairs- Медицинские изделия, 13 -water– Упак.вода, 14 -furs– Товары из натур.меха, 17 -bio– БАДЫ, 19 -antiseptic– Антисептики, 35 -chemistry– Косметика, быт.химия и товары личной гигиены.
     *
     * @param int|null $groupMarkedGood
     *
     * @return self
     */
    public function setGroupMarkedGood(?int $groupMarkedGood) : self
    {
        $this->groupMarkedGood = $groupMarkedGood;
        return $this;
    }
    /**
     * Код маркировки (КМ). Обязательное поле, если "calculationSubject": 33, в других случаях не заполняется. Код маркировки передается целиком, включая "крипто-хвост" (коды проверки). Код маркировки следует преобразовать URL Кодированием.
     *
     * @return string|null
     */
    public function getMarkingCode() : ?string
    {
        return $this->markingCode;
    }
    /**
     * Код маркировки (КМ). Обязательное поле, если "calculationSubject": 33, в других случаях не заполняется. Код маркировки передается целиком, включая "крипто-хвост" (коды проверки). Код маркировки следует преобразовать URL Кодированием.
     *
     * @param string|null $markingCode
     *
     * @return self
     */
    public function setMarkingCode(?string $markingCode) : self
    {
        $this->markingCode = $markingCode;
        return $this;
    }
    /**
     * Мера количества предмета расчета (всегда шт.). Необязательный реквизит. По умолчанию "0 (шт.)". Если "calculationSubject": 33, то всегда "measureOfQuantity": 0. Допустимые значения: 0 — шт, 10 — г(Грамм), 11 — кг(Килограмм), 12 — т(Тонна), 20 — см(Сантиметр), 21 — дм(Дециметр), 22 — м(Метр), 30 — кв.см(Квадратный сантиметр), 31 — кв.дм(Квадратный дециметр), 32 — кв.м(Квадратный метр), 40 — мл(Миллилитр), 41 — л(Литр), 42 — куб.м(Кубический метр), 255 — Применяется при использовании иных единиц измерения
     *
     * @return int|null
     */
    public function getMeasureOfQuantity() : ?int
    {
        return $this->measureOfQuantity;
    }
    /**
     * Мера количества предмета расчета (всегда шт.). Необязательный реквизит. По умолчанию "0 (шт.)". Если "calculationSubject": 33, то всегда "measureOfQuantity": 0. Допустимые значения: 0 — шт, 10 — г(Грамм), 11 — кг(Килограмм), 12 — т(Тонна), 20 — см(Сантиметр), 21 — дм(Дециметр), 22 — м(Метр), 30 — кв.см(Квадратный сантиметр), 31 — кв.дм(Квадратный дециметр), 32 — кв.м(Квадратный метр), 40 — мл(Миллилитр), 41 — л(Литр), 42 — куб.м(Кубический метр), 255 — Применяется при использовании иных единиц измерения
     *
     * @param int|null $measureOfQuantity
     *
     * @return self
     */
    public function setMeasureOfQuantity(?int $measureOfQuantity) : self
    {
        $this->measureOfQuantity = $measureOfQuantity;
        return $this;
    }
    /**
     * Ставка НДС. Обязательно. Ожидаемые значения: "НДС22" - НДС 22%, "НДС10" - НДС 10%, "НДС7" - НДС 7%, "НДС5" - НДС 5% или "БезНДС" - Без НДС
     *
     * @return string
     */
    public function getRateVAT() : string
    {
        return $this->rateVAT;
    }
    /**
     * Ставка НДС. Обязательно. Ожидаемые значения: "НДС22" - НДС 22%, "НДС10" - НДС 10%, "НДС7" - НДС 7%, "НДС5" - НДС 5% или "БезНДС" - Без НДС
     *
     * @param string $rateVAT
     *
     * @return self
     */
    public function setRateVAT(string $rateVAT) : self
    {
        $this->rateVAT = $rateVAT;
        return $this;
    }
    /**
     * Цена 1 единицы товара, которую ПЭК должен взять с Грузополучателя/ Покупателя за каждую единицу товара (сумма с НДС), руб. Обязательно.
     *
     * @return float
     */
    public function getSumPerUnit() : float
    {
        return $this->sumPerUnit;
    }
    /**
     * Цена 1 единицы товара, которую ПЭК должен взять с Грузополучателя/ Покупателя за каждую единицу товара (сумма с НДС), руб. Обязательно.
     *
     * @param float $sumPerUnit
     *
     * @return self
     */
    public function setSumPerUnit(float $sumPerUnit) : self
    {
        $this->sumPerUnit = $sumPerUnit;
        return $this;
    }
    /**
     * Сумма, которую ПЭК должен взять с Грузополучателя/ Покупателя по данной строке товаров (сумма с НДС), руб. Обязательно. Данная сумма будет в кассовом чеке.
     *
     * @return float
     */
    public function getSumTotal() : float
    {
        return $this->sumTotal;
    }
    /**
     * Сумма, которую ПЭК должен взять с Грузополучателя/ Покупателя по данной строке товаров (сумма с НДС), руб. Обязательно. Данная сумма будет в кассовом чеке.
     *
     * @param float $sumTotal
     *
     * @return self
     */
    public function setSumTotal(float $sumTotal) : self
    {
        $this->sumTotal = $sumTotal;
        return $this;
    }
    /**
     * Наименование товара для кассового чека. Обязательно
     *
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title;
    }
    /**
     * Наименование товара для кассового чека. Обязательно
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
    /**
     * Артикул товара для кассового чека. Обязательно
     *
     * @return string
     */
    public function getVendorCode() : string
    {
        return $this->vendorCode;
    }
    /**
     * Артикул товара для кассового чека. Обязательно
     *
     * @param string $vendorCode
     *
     * @return self
     */
    public function setVendorCode(string $vendorCode) : self
    {
        $this->vendorCode = $vendorCode;
        return $this;
    }
    /**
     * ИНН владельца товара (с точки зрения бухгалтерского учёта) для указания в кассовом чеке. Обязательно. Ожидается 10 цифр для юридических лиц или 12 цифр для ИП.
     *
     * @return string
     */
    public function getVendorINN() : string
    {
        return $this->vendorINN;
    }
    /**
     * ИНН владельца товара (с точки зрения бухгалтерского учёта) для указания в кассовом чеке. Обязательно. Ожидается 10 цифр для юридических лиц или 12 цифр для ИП.
     *
     * @param string $vendorINN
     *
     * @return self
     */
    public function setVendorINN(string $vendorINN) : self
    {
        $this->vendorINN = $vendorINN;
        return $this;
    }
    /**
     * Наименование владельца товара (с точки зрения бух.учёта) для указания в кассовом чеке. Обязательно.
     *
     * @return string
     */
    public function getVendorName() : string
    {
        return $this->vendorName;
    }
    /**
     * Наименование владельца товара (с точки зрения бух.учёта) для указания в кассовом чеке. Обязательно.
     *
     * @param string $vendorName
     *
     * @return self
     */
    public function setVendorName(string $vendorName) : self
    {
        $this->vendorName = $vendorName;
        return $this;
    }
    /**
     * Телефон владельца товара (с точки зрения бух.учёта) для указания в кассовом чеке. Обязательно. Необходимо корректно ввести номер телефона в международном формате через «+», код страны и города обязательны, без пробелов и дополнительных символов ТОЛЬКО цифры, например, +74956651111. Максимум 19 символов
     *
     * @return string
     */
    public function getVendorPhone() : string
    {
        return $this->vendorPhone;
    }
    /**
     * Телефон владельца товара (с точки зрения бух.учёта) для указания в кассовом чеке. Обязательно. Необходимо корректно ввести номер телефона в международном формате через «+», код страны и города обязательны, без пробелов и дополнительных символов ТОЛЬКО цифры, например, +74956651111. Максимум 19 символов
     *
     * @param string $vendorPhone
     *
     * @return self
     */
    public function setVendorPhone(string $vendorPhone) : self
    {
        $this->vendorPhone = $vendorPhone;
        return $this;
    }
}