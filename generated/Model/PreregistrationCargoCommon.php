<?php

namespace glook\PecomSdk\Generated\Model;

class PreregistrationCargoCommon
{
    /**
     * Есть комплект сопроводительных документов
     *
     * @var bool|null
     */
    protected $accompanyingDocuments;
    /**
     * Дата документа
     *
     * @var \DateTime|null
     */
    protected $accompanyingDocumentsDate;
    /**
     * Тип документа, необязательно. Возможные значения: 1 - УПД,  2 - ТОРГ12
     *
     * @var int|null
     */
    protected $accompanyingDocumentsName;
    /**
     * Номер документа
     *
     * @var string|null
     */
    protected $accompanyingDocumentsNumber;
    /**
     * Номер ТТН
     *
     * @var string|null
     */
    protected $accompanyingDocumentsNumberTTN;
    /**
     * Массив с габаритами каждого грузоместа клиента. Необязательно. Имеет смысл при подключенной услуге "Доверительная приемка". Для продукта EasyWay (type 12) услуга подключена по умолчанию (передача данных так же не обязательна). Если передан массив с габаритами каждого грузоместа, то проводим проверку на сравнение общих Веса и Объёма груза, переданных в массиве "cargos", с суммарными Весом и Объёмом, рассчитанными в массиве грузомест "cargoPlaceList". Должны совпадать.
     *
     * @var PreregistrationCargoPlace[]|null
     */
    protected $cargoPlaceList;
    /**
     * Ваши штрих-коды мест груза. Применимо при подключенной услуге "Приемка по штрих-кодам клиента" и для продукта EasyWay (type 12)
     *
     * @var string[]|null
     */
    protected $clientPositionsBarcode;
    /**
     * Произвольное значение для синхронизации на стороне клиента
     *
     * @var string|null
     */
    protected $customerCorrelation;
    /**
     * Общее название содержания груза/заказа. Обязательно. Список наименований груза можно получить, используя метод [`/cargocontent/all/`](#tag/cargocontent/POST/cargocontent/all/)
     *
     * @var string
     */
    protected $description;
    /**
     * Примерная наибольшая высота из всех мест, м. Обязательно для orderType 3, 4, 14. Обязательно для orderType 0, 14 при type = 7 «ДТС Автоперевозка».
     *
     * @var float|null
     */
    protected $height;
    /**
     * Примерная наибольшая длина из всех мест, м. Обязательно для orderType 3, 4, 14. Игнорируется при type = 7 «ДТС Автоперевозка».
     *
     * @var float|null
     */
    protected $length;
    /**
     * Номер заказа клиента, поле необязательно, максимальная длина поля 50 символов
     *
     * @var string|null
     */
    protected $orderNumber;
    /**
     * Количество паллет, поле обязательно для type = 7 «ДТС Автоперевозка»
     *
     * @var int|null
     */
    protected $palletCount;
    /**
     * Тип паллета, поле используется и обязательно только для type = 7 «ДТС Автоперевозка» для orderType 0 и 14. Возможные значения:  1-120х80, 2-100х100, 3-120х120, 4-100х120
     *
     * @var int|null
     */
    protected $palletType;
    /**
     * Форма оплаты (1 - Банк, 2 - Касса), поле необязательно, если значение не указано, равно «Банк» по умолчанию
     *
     * @var int|null
     */
    protected $paymentForm;
    /**
     * Количество мест
     *
     * @var int
     */
    protected $positionsCount;
    /**
     * Идентификатор продукта/тарифа. Обязательно. Возможные значения: 3 - LTL (сборный груз),  1 - Express Авиаперевозка, 12 - EasyWay, 5 - Express Автоперевозка, 7 - ДТС Автоперевозка. Полный список доступных в API продуктов/тарифов можно получить методом [`/typesOfDelivery/all/`](#tag/typesofdelivery/GET/typesOfDelivery/all/). ВАЖНО! Сетевая заявка на забор orderType: 14 поддерживает только три продукта type = 3 «LTL (Сборный груз)», type = 1 «Express Авиаперевозка» и type = 7 «ДТС Автоперевозка»
     *
     * @var int
     */
    protected $type;
    /**
     * Тип штрих-кодов, указанных для мест грузов заявки. Список допустимых типов штрих-кодов можно получить с помощью метода [`availabletypebarcode`](#tag/cargopickupnetwork/POST/cargopickupnetwork/availabletypebarcode/). Тип штрих-кода можно набирать символами любого регистра
     *
     * @var string|null
     */
    protected $typeClientBarcode;
    /**
     * Общий объём груза, м3. Обязательно для orderType 3, 4, 14. Обязательно для orderType 0, 14 при type = 7 «ДТС Автоперевозка».
     *
     * @var float|null
     */
    protected $volume;
    /**
     * Общий вес груза, кг. Обязательно для orderType 3, 4, 14. Обязательно для orderType 0, 14 при type = 7 «ДТС Автоперевозка».
     *
     * @var float|null
     */
    protected $weight;
    /**
     * Примерная наибольшая ширина из всех мест, м. Обязательно для orderType 3, 4, 14. Игнорируется при type = 7 «ДТС Автоперевозка».
     *
     * @var float|null
     */
    protected $width;
    /**
     * Есть комплект сопроводительных документов
     *
     * @return bool|null
     */
    public function getAccompanyingDocuments() : ?bool
    {
        return $this->accompanyingDocuments;
    }
    /**
     * Есть комплект сопроводительных документов
     *
     * @param bool|null $accompanyingDocuments
     *
     * @return self
     */
    public function setAccompanyingDocuments(?bool $accompanyingDocuments) : self
    {
        $this->accompanyingDocuments = $accompanyingDocuments;
        return $this;
    }
    /**
     * Дата документа
     *
     * @return \DateTime|null
     */
    public function getAccompanyingDocumentsDate() : ?\DateTime
    {
        return $this->accompanyingDocumentsDate;
    }
    /**
     * Дата документа
     *
     * @param \DateTime|null $accompanyingDocumentsDate
     *
     * @return self
     */
    public function setAccompanyingDocumentsDate(?\DateTime $accompanyingDocumentsDate) : self
    {
        $this->accompanyingDocumentsDate = $accompanyingDocumentsDate;
        return $this;
    }
    /**
     * Тип документа, необязательно. Возможные значения: 1 - УПД,  2 - ТОРГ12
     *
     * @return int|null
     */
    public function getAccompanyingDocumentsName() : ?int
    {
        return $this->accompanyingDocumentsName;
    }
    /**
     * Тип документа, необязательно. Возможные значения: 1 - УПД,  2 - ТОРГ12
     *
     * @param int|null $accompanyingDocumentsName
     *
     * @return self
     */
    public function setAccompanyingDocumentsName(?int $accompanyingDocumentsName) : self
    {
        $this->accompanyingDocumentsName = $accompanyingDocumentsName;
        return $this;
    }
    /**
     * Номер документа
     *
     * @return string|null
     */
    public function getAccompanyingDocumentsNumber() : ?string
    {
        return $this->accompanyingDocumentsNumber;
    }
    /**
     * Номер документа
     *
     * @param string|null $accompanyingDocumentsNumber
     *
     * @return self
     */
    public function setAccompanyingDocumentsNumber(?string $accompanyingDocumentsNumber) : self
    {
        $this->accompanyingDocumentsNumber = $accompanyingDocumentsNumber;
        return $this;
    }
    /**
     * Номер ТТН
     *
     * @return string|null
     */
    public function getAccompanyingDocumentsNumberTTN() : ?string
    {
        return $this->accompanyingDocumentsNumberTTN;
    }
    /**
     * Номер ТТН
     *
     * @param string|null $accompanyingDocumentsNumberTTN
     *
     * @return self
     */
    public function setAccompanyingDocumentsNumberTTN(?string $accompanyingDocumentsNumberTTN) : self
    {
        $this->accompanyingDocumentsNumberTTN = $accompanyingDocumentsNumberTTN;
        return $this;
    }
    /**
     * Массив с габаритами каждого грузоместа клиента. Необязательно. Имеет смысл при подключенной услуге "Доверительная приемка". Для продукта EasyWay (type 12) услуга подключена по умолчанию (передача данных так же не обязательна). Если передан массив с габаритами каждого грузоместа, то проводим проверку на сравнение общих Веса и Объёма груза, переданных в массиве "cargos", с суммарными Весом и Объёмом, рассчитанными в массиве грузомест "cargoPlaceList". Должны совпадать.
     *
     * @return PreregistrationCargoPlace[]|null
     */
    public function getCargoPlaceList() : ?array
    {
        return $this->cargoPlaceList;
    }
    /**
     * Массив с габаритами каждого грузоместа клиента. Необязательно. Имеет смысл при подключенной услуге "Доверительная приемка". Для продукта EasyWay (type 12) услуга подключена по умолчанию (передача данных так же не обязательна). Если передан массив с габаритами каждого грузоместа, то проводим проверку на сравнение общих Веса и Объёма груза, переданных в массиве "cargos", с суммарными Весом и Объёмом, рассчитанными в массиве грузомест "cargoPlaceList". Должны совпадать.
     *
     * @param PreregistrationCargoPlace[]|null $cargoPlaceList
     *
     * @return self
     */
    public function setCargoPlaceList(?array $cargoPlaceList) : self
    {
        $this->cargoPlaceList = $cargoPlaceList;
        return $this;
    }
    /**
     * Ваши штрих-коды мест груза. Применимо при подключенной услуге "Приемка по штрих-кодам клиента" и для продукта EasyWay (type 12)
     *
     * @return string[]|null
     */
    public function getClientPositionsBarcode() : ?array
    {
        return $this->clientPositionsBarcode;
    }
    /**
     * Ваши штрих-коды мест груза. Применимо при подключенной услуге "Приемка по штрих-кодам клиента" и для продукта EasyWay (type 12)
     *
     * @param string[]|null $clientPositionsBarcode
     *
     * @return self
     */
    public function setClientPositionsBarcode(?array $clientPositionsBarcode) : self
    {
        $this->clientPositionsBarcode = $clientPositionsBarcode;
        return $this;
    }
    /**
     * Произвольное значение для синхронизации на стороне клиента
     *
     * @return string|null
     */
    public function getCustomerCorrelation() : ?string
    {
        return $this->customerCorrelation;
    }
    /**
     * Произвольное значение для синхронизации на стороне клиента
     *
     * @param string|null $customerCorrelation
     *
     * @return self
     */
    public function setCustomerCorrelation(?string $customerCorrelation) : self
    {
        $this->customerCorrelation = $customerCorrelation;
        return $this;
    }
    /**
     * Общее название содержания груза/заказа. Обязательно. Список наименований груза можно получить, используя метод [`/cargocontent/all/`](#tag/cargocontent/POST/cargocontent/all/)
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Общее название содержания груза/заказа. Обязательно. Список наименований груза можно получить, используя метод [`/cargocontent/all/`](#tag/cargocontent/POST/cargocontent/all/)
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description) : self
    {
        $this->description = $description;
        return $this;
    }
    /**
     * Примерная наибольшая высота из всех мест, м. Обязательно для orderType 3, 4, 14. Обязательно для orderType 0, 14 при type = 7 «ДТС Автоперевозка».
     *
     * @return float|null
     */
    public function getHeight() : ?float
    {
        return $this->height;
    }
    /**
     * Примерная наибольшая высота из всех мест, м. Обязательно для orderType 3, 4, 14. Обязательно для orderType 0, 14 при type = 7 «ДТС Автоперевозка».
     *
     * @param float|null $height
     *
     * @return self
     */
    public function setHeight(?float $height) : self
    {
        $this->height = $height;
        return $this;
    }
    /**
     * Примерная наибольшая длина из всех мест, м. Обязательно для orderType 3, 4, 14. Игнорируется при type = 7 «ДТС Автоперевозка».
     *
     * @return float|null
     */
    public function getLength() : ?float
    {
        return $this->length;
    }
    /**
     * Примерная наибольшая длина из всех мест, м. Обязательно для orderType 3, 4, 14. Игнорируется при type = 7 «ДТС Автоперевозка».
     *
     * @param float|null $length
     *
     * @return self
     */
    public function setLength(?float $length) : self
    {
        $this->length = $length;
        return $this;
    }
    /**
     * Номер заказа клиента, поле необязательно, максимальная длина поля 50 символов
     *
     * @return string|null
     */
    public function getOrderNumber() : ?string
    {
        return $this->orderNumber;
    }
    /**
     * Номер заказа клиента, поле необязательно, максимальная длина поля 50 символов
     *
     * @param string|null $orderNumber
     *
     * @return self
     */
    public function setOrderNumber(?string $orderNumber) : self
    {
        $this->orderNumber = $orderNumber;
        return $this;
    }
    /**
     * Количество паллет, поле обязательно для type = 7 «ДТС Автоперевозка»
     *
     * @return int|null
     */
    public function getPalletCount() : ?int
    {
        return $this->palletCount;
    }
    /**
     * Количество паллет, поле обязательно для type = 7 «ДТС Автоперевозка»
     *
     * @param int|null $palletCount
     *
     * @return self
     */
    public function setPalletCount(?int $palletCount) : self
    {
        $this->palletCount = $palletCount;
        return $this;
    }
    /**
     * Тип паллета, поле используется и обязательно только для type = 7 «ДТС Автоперевозка» для orderType 0 и 14. Возможные значения:  1-120х80, 2-100х100, 3-120х120, 4-100х120
     *
     * @return int|null
     */
    public function getPalletType() : ?int
    {
        return $this->palletType;
    }
    /**
     * Тип паллета, поле используется и обязательно только для type = 7 «ДТС Автоперевозка» для orderType 0 и 14. Возможные значения:  1-120х80, 2-100х100, 3-120х120, 4-100х120
     *
     * @param int|null $palletType
     *
     * @return self
     */
    public function setPalletType(?int $palletType) : self
    {
        $this->palletType = $palletType;
        return $this;
    }
    /**
     * Форма оплаты (1 - Банк, 2 - Касса), поле необязательно, если значение не указано, равно «Банк» по умолчанию
     *
     * @return int|null
     */
    public function getPaymentForm() : ?int
    {
        return $this->paymentForm;
    }
    /**
     * Форма оплаты (1 - Банк, 2 - Касса), поле необязательно, если значение не указано, равно «Банк» по умолчанию
     *
     * @param int|null $paymentForm
     *
     * @return self
     */
    public function setPaymentForm(?int $paymentForm) : self
    {
        $this->paymentForm = $paymentForm;
        return $this;
    }
    /**
     * Количество мест
     *
     * @return int
     */
    public function getPositionsCount() : int
    {
        return $this->positionsCount;
    }
    /**
     * Количество мест
     *
     * @param int $positionsCount
     *
     * @return self
     */
    public function setPositionsCount(int $positionsCount) : self
    {
        $this->positionsCount = $positionsCount;
        return $this;
    }
    /**
     * Идентификатор продукта/тарифа. Обязательно. Возможные значения: 3 - LTL (сборный груз),  1 - Express Авиаперевозка, 12 - EasyWay, 5 - Express Автоперевозка, 7 - ДТС Автоперевозка. Полный список доступных в API продуктов/тарифов можно получить методом [`/typesOfDelivery/all/`](#tag/typesofdelivery/GET/typesOfDelivery/all/). ВАЖНО! Сетевая заявка на забор orderType: 14 поддерживает только три продукта type = 3 «LTL (Сборный груз)», type = 1 «Express Авиаперевозка» и type = 7 «ДТС Автоперевозка»
     *
     * @return int
     */
    public function getType() : int
    {
        return $this->type;
    }
    /**
     * Идентификатор продукта/тарифа. Обязательно. Возможные значения: 3 - LTL (сборный груз),  1 - Express Авиаперевозка, 12 - EasyWay, 5 - Express Автоперевозка, 7 - ДТС Автоперевозка. Полный список доступных в API продуктов/тарифов можно получить методом [`/typesOfDelivery/all/`](#tag/typesofdelivery/GET/typesOfDelivery/all/). ВАЖНО! Сетевая заявка на забор orderType: 14 поддерживает только три продукта type = 3 «LTL (Сборный груз)», type = 1 «Express Авиаперевозка» и type = 7 «ДТС Автоперевозка»
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
     * Тип штрих-кодов, указанных для мест грузов заявки. Список допустимых типов штрих-кодов можно получить с помощью метода [`availabletypebarcode`](#tag/cargopickupnetwork/POST/cargopickupnetwork/availabletypebarcode/). Тип штрих-кода можно набирать символами любого регистра
     *
     * @return string|null
     */
    public function getTypeClientBarcode() : ?string
    {
        return $this->typeClientBarcode;
    }
    /**
     * Тип штрих-кодов, указанных для мест грузов заявки. Список допустимых типов штрих-кодов можно получить с помощью метода [`availabletypebarcode`](#tag/cargopickupnetwork/POST/cargopickupnetwork/availabletypebarcode/). Тип штрих-кода можно набирать символами любого регистра
     *
     * @param string|null $typeClientBarcode
     *
     * @return self
     */
    public function setTypeClientBarcode(?string $typeClientBarcode) : self
    {
        $this->typeClientBarcode = $typeClientBarcode;
        return $this;
    }
    /**
     * Общий объём груза, м3. Обязательно для orderType 3, 4, 14. Обязательно для orderType 0, 14 при type = 7 «ДТС Автоперевозка».
     *
     * @return float|null
     */
    public function getVolume() : ?float
    {
        return $this->volume;
    }
    /**
     * Общий объём груза, м3. Обязательно для orderType 3, 4, 14. Обязательно для orderType 0, 14 при type = 7 «ДТС Автоперевозка».
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
     * Общий вес груза, кг. Обязательно для orderType 3, 4, 14. Обязательно для orderType 0, 14 при type = 7 «ДТС Автоперевозка».
     *
     * @return float|null
     */
    public function getWeight() : ?float
    {
        return $this->weight;
    }
    /**
     * Общий вес груза, кг. Обязательно для orderType 3, 4, 14. Обязательно для orderType 0, 14 при type = 7 «ДТС Автоперевозка».
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
    /**
     * Примерная наибольшая ширина из всех мест, м. Обязательно для orderType 3, 4, 14. Игнорируется при type = 7 «ДТС Автоперевозка».
     *
     * @return float|null
     */
    public function getWidth() : ?float
    {
        return $this->width;
    }
    /**
     * Примерная наибольшая ширина из всех мест, м. Обязательно для orderType 3, 4, 14. Игнорируется при type = 7 «ДТС Автоперевозка».
     *
     * @param float|null $width
     *
     * @return self
     */
    public function setWidth(?float $width) : self
    {
        $this->width = $width;
        return $this;
    }
}