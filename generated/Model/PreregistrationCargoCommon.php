<?php

namespace glook\PecomSdk\Generated\Model;

class PreregistrationCargoCommon
{
    /**
     * Есть комплект сопроводительных документов
     *
     * @var null|bool
     */
    protected $accompanyingDocuments;

    /**
     * Дата документа
     *
     * @var null|\DateTime
     */
    protected $accompanyingDocumentsDate;

    /**
     * Тип документа, необязательно. Возможные значения: 1 - УПД,  2 - ТОРГ12
     *
     * @var null|int
     */
    protected $accompanyingDocumentsName;

    /**
     * Номер документа
     *
     * @var null|string
     */
    protected $accompanyingDocumentsNumber;

    /**
     * Номер ТТН
     *
     * @var null|string
     */
    protected $accompanyingDocumentsNumberTTN;

    /**
     * Массив кодов стран происхождения груза. Обязателен при `docflowType = FFS_EDI`.
     *
     * @var null|string[]
     */
    protected $countryCargocode;

    /**
     * Массив с габаритами каждого грузоместа клиента. Необязательно. Имеет смысл при подключенной услуге "Доверительная приемка". Для продукта EasyWay (type 12) услуга подключена по умолчанию (передача данных так же не обязательна). Если передан массив с габаритами каждого грузоместа, то проводим проверку на сравнение общих Веса и Объёма груза, переданных в массиве "cargos", с суммарными Весом и Объёмом, рассчитанными в массиве грузомест "cargoPlaceList". Должны совпадать.
     *
     * @var null|PreregistrationCargoPlace[]
     */
    protected $cargoPlaceList;

    /**
     * Ваши штрих-коды мест груза. Применимо при подключенной услуге "Приемка по штрих-кодам клиента" и для продукта EasyWay (type 12)
     *
     * @var null|string[]
     */
    protected $clientPositionsBarcode;

    /**
     * Произвольное значение для синхронизации на стороне клиента
     *
     * @var null|string
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
     * @var null|float
     */
    protected $height;

    /**
     * Признак наличия в грузе товара, подлежащего учёту в ГИС, для `docflowType = FFS_EDI`. Необязательно, по умолчанию false. Если значение равно true, в поручении экспедитору будет указано, что подлежащий учёту товар в грузе есть, но его идентификационные сведения отсутствуют. Коды товаров можно добавить в кабинете ЭДО после загрузки подготовленного ПЭК черновика поручения экспедитору.
     *
     * @var null|bool
     */
    protected $isRegisteredGoogs = false;

    /**
     * Примерная наибольшая длина из всех мест, м. Обязательно для orderType 3, 4, 14. Игнорируется при type = 7 «ДТС Автоперевозка».
     *
     * @var null|float
     */
    protected $length;

    /**
     * Номер заказа клиента, поле необязательно, максимальная длина поля 50 символов
     *
     * @var null|string
     */
    protected $orderNumber;

    /**
     * Количество паллет, поле обязательно для type = 7 «ДТС Автоперевозка»
     *
     * @var null|int
     */
    protected $palletCount;

    /**
     * Тип паллета, поле используется и обязательно только для type = 7 «ДТС Автоперевозка» для orderType 0 и 14. Возможные значения:  1-120х80, 2-100х100, 3-120х120, 4-100х120
     *
     * @var null|int
     */
    protected $palletType;

    /**
     * Форма оплаты (1 - Банк, 2 - Касса), поле необязательно, если значение не указано, равно «Банк» по умолчанию
     *
     * @var null|int
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
     * @var null|string
     */
    protected $typeClientBarcode;

    /**
     * Общий объём груза, м3. Обязательно для orderType 3, 4, 14. Обязательно для orderType 0, 14 при type = 7 «ДТС Автоперевозка».
     *
     * @var null|float
     */
    protected $volume;

    /**
     * Общий вес груза, кг. Обязательно для orderType 3, 4, 14. Обязательно для orderType 0, 14 при type = 7 «ДТС Автоперевозка».
     *
     * @var null|float
     */
    protected $weight;

    /**
     * Примерная наибольшая ширина из всех мест, м. Обязательно для orderType 3, 4, 14. Игнорируется при type = 7 «ДТС Автоперевозка».
     *
     * @var null|float
     */
    protected $width;

    /**
     * Есть комплект сопроводительных документов
     */
    public function getAccompanyingDocuments(): ?bool
    {
        return $this->accompanyingDocuments;
    }

    /**
     * Есть комплект сопроводительных документов
     */
    public function setAccompanyingDocuments(?bool $accompanyingDocuments): self
    {
        $this->accompanyingDocuments = $accompanyingDocuments;

        return $this;
    }

    /**
     * Дата документа
     */
    public function getAccompanyingDocumentsDate(): ?\DateTime
    {
        return $this->accompanyingDocumentsDate;
    }

    /**
     * Дата документа
     */
    public function setAccompanyingDocumentsDate(?\DateTime $accompanyingDocumentsDate): self
    {
        $this->accompanyingDocumentsDate = $accompanyingDocumentsDate;

        return $this;
    }

    /**
     * Тип документа, необязательно. Возможные значения: 1 - УПД,  2 - ТОРГ12
     */
    public function getAccompanyingDocumentsName(): ?int
    {
        return $this->accompanyingDocumentsName;
    }

    /**
     * Тип документа, необязательно. Возможные значения: 1 - УПД,  2 - ТОРГ12
     */
    public function setAccompanyingDocumentsName(?int $accompanyingDocumentsName): self
    {
        $this->accompanyingDocumentsName = $accompanyingDocumentsName;

        return $this;
    }

    /**
     * Номер документа
     */
    public function getAccompanyingDocumentsNumber(): ?string
    {
        return $this->accompanyingDocumentsNumber;
    }

    /**
     * Номер документа
     */
    public function setAccompanyingDocumentsNumber(?string $accompanyingDocumentsNumber): self
    {
        $this->accompanyingDocumentsNumber = $accompanyingDocumentsNumber;

        return $this;
    }

    /**
     * Номер ТТН
     */
    public function getAccompanyingDocumentsNumberTTN(): ?string
    {
        return $this->accompanyingDocumentsNumberTTN;
    }

    /**
     * Номер ТТН
     */
    public function setAccompanyingDocumentsNumberTTN(?string $accompanyingDocumentsNumberTTN): self
    {
        $this->accompanyingDocumentsNumberTTN = $accompanyingDocumentsNumberTTN;

        return $this;
    }

    /**
     * Массив кодов стран происхождения груза. Обязателен при `docflowType = FFS_EDI`.
     *
     * @return null|string[]
     */
    public function getCountryCargocode(): ?array
    {
        return $this->countryCargocode;
    }

    /**
     * Массив кодов стран происхождения груза. Обязателен при `docflowType = FFS_EDI`.
     *
     * @param null|string[] $countryCargocode
     */
    public function setCountryCargocode(?array $countryCargocode): self
    {
        $this->countryCargocode = $countryCargocode;

        return $this;
    }

    /**
     * Массив с габаритами каждого грузоместа клиента. Необязательно. Имеет смысл при подключенной услуге "Доверительная приемка". Для продукта EasyWay (type 12) услуга подключена по умолчанию (передача данных так же не обязательна). Если передан массив с габаритами каждого грузоместа, то проводим проверку на сравнение общих Веса и Объёма груза, переданных в массиве "cargos", с суммарными Весом и Объёмом, рассчитанными в массиве грузомест "cargoPlaceList". Должны совпадать.
     *
     * @return null|PreregistrationCargoPlace[]
     */
    public function getCargoPlaceList(): ?array
    {
        return $this->cargoPlaceList;
    }

    /**
     * Массив с габаритами каждого грузоместа клиента. Необязательно. Имеет смысл при подключенной услуге "Доверительная приемка". Для продукта EasyWay (type 12) услуга подключена по умолчанию (передача данных так же не обязательна). Если передан массив с габаритами каждого грузоместа, то проводим проверку на сравнение общих Веса и Объёма груза, переданных в массиве "cargos", с суммарными Весом и Объёмом, рассчитанными в массиве грузомест "cargoPlaceList". Должны совпадать.
     *
     * @param null|PreregistrationCargoPlace[] $cargoPlaceList
     */
    public function setCargoPlaceList(?array $cargoPlaceList): self
    {
        $this->cargoPlaceList = $cargoPlaceList;

        return $this;
    }

    /**
     * Ваши штрих-коды мест груза. Применимо при подключенной услуге "Приемка по штрих-кодам клиента" и для продукта EasyWay (type 12)
     *
     * @return null|string[]
     */
    public function getClientPositionsBarcode(): ?array
    {
        return $this->clientPositionsBarcode;
    }

    /**
     * Ваши штрих-коды мест груза. Применимо при подключенной услуге "Приемка по штрих-кодам клиента" и для продукта EasyWay (type 12)
     *
     * @param null|string[] $clientPositionsBarcode
     */
    public function setClientPositionsBarcode(?array $clientPositionsBarcode): self
    {
        $this->clientPositionsBarcode = $clientPositionsBarcode;

        return $this;
    }

    /**
     * Произвольное значение для синхронизации на стороне клиента
     */
    public function getCustomerCorrelation(): ?string
    {
        return $this->customerCorrelation;
    }

    /**
     * Произвольное значение для синхронизации на стороне клиента
     */
    public function setCustomerCorrelation(?string $customerCorrelation): self
    {
        $this->customerCorrelation = $customerCorrelation;

        return $this;
    }

    /**
     * Общее название содержания груза/заказа. Обязательно. Список наименований груза можно получить, используя метод [`/cargocontent/all/`](#tag/cargocontent/POST/cargocontent/all/)
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Общее название содержания груза/заказа. Обязательно. Список наименований груза можно получить, используя метод [`/cargocontent/all/`](#tag/cargocontent/POST/cargocontent/all/)
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Примерная наибольшая высота из всех мест, м. Обязательно для orderType 3, 4, 14. Обязательно для orderType 0, 14 при type = 7 «ДТС Автоперевозка».
     */
    public function getHeight(): ?float
    {
        return $this->height;
    }

    /**
     * Примерная наибольшая высота из всех мест, м. Обязательно для orderType 3, 4, 14. Обязательно для orderType 0, 14 при type = 7 «ДТС Автоперевозка».
     */
    public function setHeight(?float $height): self
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Признак наличия в грузе товара, подлежащего учёту в ГИС, для `docflowType = FFS_EDI`. Необязательно, по умолчанию false. Если значение равно true, в поручении экспедитору будет указано, что подлежащий учёту товар в грузе есть, но его идентификационные сведения отсутствуют. Коды товаров можно добавить в кабинете ЭДО после загрузки подготовленного ПЭК черновика поручения экспедитору.
     */
    public function getIsRegisteredGoogs(): ?bool
    {
        return $this->isRegisteredGoogs;
    }

    /**
     * Признак наличия в грузе товара, подлежащего учёту в ГИС, для `docflowType = FFS_EDI`. Необязательно, по умолчанию false. Если значение равно true, в поручении экспедитору будет указано, что подлежащий учёту товар в грузе есть, но его идентификационные сведения отсутствуют. Коды товаров можно добавить в кабинете ЭДО после загрузки подготовленного ПЭК черновика поручения экспедитору.
     */
    public function setIsRegisteredGoogs(?bool $isRegisteredGoogs): self
    {
        $this->isRegisteredGoogs = $isRegisteredGoogs;

        return $this;
    }

    /**
     * Примерная наибольшая длина из всех мест, м. Обязательно для orderType 3, 4, 14. Игнорируется при type = 7 «ДТС Автоперевозка».
     */
    public function getLength(): ?float
    {
        return $this->length;
    }

    /**
     * Примерная наибольшая длина из всех мест, м. Обязательно для orderType 3, 4, 14. Игнорируется при type = 7 «ДТС Автоперевозка».
     */
    public function setLength(?float $length): self
    {
        $this->length = $length;

        return $this;
    }

    /**
     * Номер заказа клиента, поле необязательно, максимальная длина поля 50 символов
     */
    public function getOrderNumber(): ?string
    {
        return $this->orderNumber;
    }

    /**
     * Номер заказа клиента, поле необязательно, максимальная длина поля 50 символов
     */
    public function setOrderNumber(?string $orderNumber): self
    {
        $this->orderNumber = $orderNumber;

        return $this;
    }

    /**
     * Количество паллет, поле обязательно для type = 7 «ДТС Автоперевозка»
     */
    public function getPalletCount(): ?int
    {
        return $this->palletCount;
    }

    /**
     * Количество паллет, поле обязательно для type = 7 «ДТС Автоперевозка»
     */
    public function setPalletCount(?int $palletCount): self
    {
        $this->palletCount = $palletCount;

        return $this;
    }

    /**
     * Тип паллета, поле используется и обязательно только для type = 7 «ДТС Автоперевозка» для orderType 0 и 14. Возможные значения:  1-120х80, 2-100х100, 3-120х120, 4-100х120
     */
    public function getPalletType(): ?int
    {
        return $this->palletType;
    }

    /**
     * Тип паллета, поле используется и обязательно только для type = 7 «ДТС Автоперевозка» для orderType 0 и 14. Возможные значения:  1-120х80, 2-100х100, 3-120х120, 4-100х120
     */
    public function setPalletType(?int $palletType): self
    {
        $this->palletType = $palletType;

        return $this;
    }

    /**
     * Форма оплаты (1 - Банк, 2 - Касса), поле необязательно, если значение не указано, равно «Банк» по умолчанию
     */
    public function getPaymentForm(): ?int
    {
        return $this->paymentForm;
    }

    /**
     * Форма оплаты (1 - Банк, 2 - Касса), поле необязательно, если значение не указано, равно «Банк» по умолчанию
     */
    public function setPaymentForm(?int $paymentForm): self
    {
        $this->paymentForm = $paymentForm;

        return $this;
    }

    /**
     * Количество мест
     */
    public function getPositionsCount(): int
    {
        return $this->positionsCount;
    }

    /**
     * Количество мест
     */
    public function setPositionsCount(int $positionsCount): self
    {
        $this->positionsCount = $positionsCount;

        return $this;
    }

    /**
     * Идентификатор продукта/тарифа. Обязательно. Возможные значения: 3 - LTL (сборный груз),  1 - Express Авиаперевозка, 12 - EasyWay, 5 - Express Автоперевозка, 7 - ДТС Автоперевозка. Полный список доступных в API продуктов/тарифов можно получить методом [`/typesOfDelivery/all/`](#tag/typesofdelivery/GET/typesOfDelivery/all/). ВАЖНО! Сетевая заявка на забор orderType: 14 поддерживает только три продукта type = 3 «LTL (Сборный груз)», type = 1 «Express Авиаперевозка» и type = 7 «ДТС Автоперевозка»
     */
    public function getType(): int
    {
        return $this->type;
    }

    /**
     * Идентификатор продукта/тарифа. Обязательно. Возможные значения: 3 - LTL (сборный груз),  1 - Express Авиаперевозка, 12 - EasyWay, 5 - Express Автоперевозка, 7 - ДТС Автоперевозка. Полный список доступных в API продуктов/тарифов можно получить методом [`/typesOfDelivery/all/`](#tag/typesofdelivery/GET/typesOfDelivery/all/). ВАЖНО! Сетевая заявка на забор orderType: 14 поддерживает только три продукта type = 3 «LTL (Сборный груз)», type = 1 «Express Авиаперевозка» и type = 7 «ДТС Автоперевозка»
     */
    public function setType(int $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Тип штрих-кодов, указанных для мест грузов заявки. Список допустимых типов штрих-кодов можно получить с помощью метода [`availabletypebarcode`](#tag/cargopickupnetwork/POST/cargopickupnetwork/availabletypebarcode/). Тип штрих-кода можно набирать символами любого регистра
     */
    public function getTypeClientBarcode(): ?string
    {
        return $this->typeClientBarcode;
    }

    /**
     * Тип штрих-кодов, указанных для мест грузов заявки. Список допустимых типов штрих-кодов можно получить с помощью метода [`availabletypebarcode`](#tag/cargopickupnetwork/POST/cargopickupnetwork/availabletypebarcode/). Тип штрих-кода можно набирать символами любого регистра
     */
    public function setTypeClientBarcode(?string $typeClientBarcode): self
    {
        $this->typeClientBarcode = $typeClientBarcode;

        return $this;
    }

    /**
     * Общий объём груза, м3. Обязательно для orderType 3, 4, 14. Обязательно для orderType 0, 14 при type = 7 «ДТС Автоперевозка».
     */
    public function getVolume(): ?float
    {
        return $this->volume;
    }

    /**
     * Общий объём груза, м3. Обязательно для orderType 3, 4, 14. Обязательно для orderType 0, 14 при type = 7 «ДТС Автоперевозка».
     */
    public function setVolume(?float $volume): self
    {
        $this->volume = $volume;

        return $this;
    }

    /**
     * Общий вес груза, кг. Обязательно для orderType 3, 4, 14. Обязательно для orderType 0, 14 при type = 7 «ДТС Автоперевозка».
     */
    public function getWeight(): ?float
    {
        return $this->weight;
    }

    /**
     * Общий вес груза, кг. Обязательно для orderType 3, 4, 14. Обязательно для orderType 0, 14 при type = 7 «ДТС Автоперевозка».
     */
    public function setWeight(?float $weight): self
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Примерная наибольшая ширина из всех мест, м. Обязательно для orderType 3, 4, 14. Игнорируется при type = 7 «ДТС Автоперевозка».
     */
    public function getWidth(): ?float
    {
        return $this->width;
    }

    /**
     * Примерная наибольшая ширина из всех мест, м. Обязательно для orderType 3, 4, 14. Игнорируется при type = 7 «ДТС Автоперевозка».
     */
    public function setWidth(?float $width): self
    {
        $this->width = $width;

        return $this;
    }
}
