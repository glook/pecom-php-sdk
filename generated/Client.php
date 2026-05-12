<?php

namespace glook\PecomSdk\Generated;

class Client extends \glook\PecomSdk\Generated\Runtime\Client\Client
{
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \glook\PecomSdk\Generated\Exception\AuthCreatetokentoaccessprivatedataBadRequestException
     * @throws \glook\PecomSdk\Generated\Exception\AuthCreatetokentoaccessprivatedataForbiddenException
     * @throws \glook\PecomSdk\Generated\Exception\AuthCreatetokentoaccessprivatedataInternalServerErrorException
     * @throws \glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\glook\PecomSdk\Generated\Model\AuthTokenResponse|\Psr\Http\Message\ResponseInterface
     */
    public function authCreatetokentoaccessprivatedata(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \glook\PecomSdk\Generated\Endpoint\AuthCreatetokentoaccessprivatedata(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \glook\PecomSdk\Generated\Exception\AuthProfiledataBadRequestException
     * @throws \glook\PecomSdk\Generated\Exception\AuthProfiledataForbiddenException
     * @throws \glook\PecomSdk\Generated\Exception\AuthProfiledataInternalServerErrorException
     * @throws \glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\glook\PecomSdk\Generated\Model\AuthProfileDataResponse|\Psr\Http\Message\ResponseInterface
     */
    public function authProfiledata(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \glook\PecomSdk\Generated\Endpoint\AuthProfiledata(), $fetch);
    }
    /**
    * Метод позволяет получить список бухгалтерских документов за указанный период по контрагенту из своего ЛК ПЭК и по указанному филиалу оплаты
    - Максимальная длительность периода для запроса — **60** календарных дней
    *
    * @param \glook\PecomSdk\Generated\Model\AccountingdocumentsListforcounterpartyPostBody $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \glook\PecomSdk\Generated\Exception\AccountingdocumentsListforcounterpartyBadRequestException
    * @throws \glook\PecomSdk\Generated\Exception\AccountingdocumentsListforcounterpartyForbiddenException
    * @throws \glook\PecomSdk\Generated\Exception\AccountingdocumentsListforcounterpartyInternalServerErrorException
    * @throws \glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return null|\glook\PecomSdk\Generated\Model\AccountingDocumentListResponse|\Psr\Http\Message\ResponseInterface
    */
    public function accountingdocumentsListforcounterparty(\glook\PecomSdk\Generated\Model\AccountingdocumentsListforcounterpartyPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \glook\PecomSdk\Generated\Endpoint\AccountingdocumentsListforcounterparty($requestBody), $fetch);
    }
    /**
    * ID склада отправления/назначения в методе расчёта стоимости [`/calculator/calculateprice/`](#tag/calculator/POST/calculator/calculateprice/) (параметр `senderWarehouseId` / `receiverWarehouseId`) и в методах подачи заявок (параметр `WarehouseId`) можно получить из ответа метода в поле `branches[].divisions[].warehouses[].id`.
    НЕ ПЕРЕДАВАЙТЕ ДРУГИХ ID. При подаче любого другого ID из ответа этого метода, запрос будет отклонён.
    - ОБЯЗАТЕЛЬНО учитывайте доступность подбираемых складов по габаритам и разрешенных для них операций. Ограничения по габаритам конкретного склада можно получить из ответа метода в полях `branches[].divisions[].warehouses[].maxWeight`, `maxVolume`, `maxWeightPerPlace`, `maxDimension`. Разрешённые операции можно получить из ответа метода в поле `branches[].divisions[].kindsOfTransportation[]`.
    - Обращаем Ваше внимание, что географическая структура отделений ПЭК (города и отделения в них, обслуживаемые конкретным филиалом), отличается от структуры финансовой подчинённости.
    
      * Географическая структура — это какой филиал обслуживает какие города (`branches[].cities[]`) и отделения (`branches[].cities[].divisions[]`). При этом в структуре приведены основные крупные населенные пункты, в то время как доставка до адреса может осуществлена и в мелкие населенные пункты, не указанные в ответе метода. Для определения полной географии перевозки ПЭК рекомендуется использовать методы [`/branches/findzonebyaddress/`](#tag/branches/POST/branches/findzonebyaddress/), [`/branches/findzonebycoordinates/`](#tag/branches/POST/branches/findzonebycoordinates/). Ближайшие к адресу подходящие склады можно выбрать методом: [`/branches/nearestdepartments/`](#tag/branches/POST/branches/nearestdepartments/).
     * Финансовая структура — внутренняя организационная структура ПЭК, используемая для выбора филиала оплаты услуги в методах подачи заявок (реквизит `"paymentCity"`)."."Филиал оплаты" — филиал ПЭК, в котором плательщик за услугу ПЭК будет получать оригиналы закрывающих бухгалтерских документов: УПД, отчёт по страхованию и т.п. Указанные документы можно получить в любом собственном отделении ПЭК (не ПВЗ, см. описание реквизита `"departmentTypeId"`), относящемуся к указанному филиалу оплаты (`branches[].divisions[].warehouses[]`). Филиал оплаты также определяет возможность применения к грузу некоторых назначенных контрагенту скидок и сервисов.
    Таким образом, у одного филиала могут быть различными списки обслуживаемых отделений по географической структуре: `branches[].cities[].divisions[]` и относящихся к нему отделений по финансовой структуре: `branches[].divisions[]`.
    *
    * @param null|\glook\PecomSdk\Generated\Model\BranchesAllPostBody $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \glook\PecomSdk\Generated\Exception\BranchesAllBadRequestException
    * @throws \glook\PecomSdk\Generated\Exception\BranchesAllForbiddenException
    * @throws \glook\PecomSdk\Generated\Exception\BranchesAllInternalServerErrorException
    * @throws \glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return null|\glook\PecomSdk\Generated\Model\BranchesAllPostResponse200|\Psr\Http\Message\ResponseInterface
    */
    public function branchesAll(?\glook\PecomSdk\Generated\Model\BranchesAllPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \glook\PecomSdk\Generated\Endpoint\BranchesAll($requestBody), $fetch);
    }
    /**
    * Метод на текущий момент позволяет проверить только услуги Наложенный платеж: GUID = 739293fd-edc7-495d-9e56-6f61ad39bb8c и Выдача по СМС (упрощенная выдача): GUID = ffb40421-4761-11e8-80c9-00155d668927 по конкретному направлению перевозки.
    - Обращаем ваше внимание, что метод проверяет доступность услуг только по географии. Для проверки возможности использования данных услуг конкретными отправителями и их условия необходимо использовать метод [`/connecteddiscountsservicesagreements/`](#tag/counterparts/POST/counterparts/connecteddiscountsservicesagreements/).
    - На вход данного метода ожидается ID филиалов отправления и назначения, которые можно получить из метода расчета стоимости или из методов получения географии, при этом для отделений филиал необходимо брать из организационной структуры.
    *
    * @param \glook\PecomSdk\Generated\Model\BranchesChecknocalcservicesPostBody $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \glook\PecomSdk\Generated\Exception\BranchesChecknocalcservicesBadRequestException
    * @throws \glook\PecomSdk\Generated\Exception\BranchesChecknocalcservicesForbiddenException
    * @throws \glook\PecomSdk\Generated\Exception\BranchesChecknocalcservicesInternalServerErrorException
    * @throws \glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return null|\glook\PecomSdk\Generated\Model\BranchesChecknocalcservicesPostResponse200Item[]|\Psr\Http\Message\ResponseInterface
    */
    public function branchesChecknocalcservices(\glook\PecomSdk\Generated\Model\BranchesChecknocalcservicesPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \glook\PecomSdk\Generated\Endpoint\BranchesChecknocalcservices($requestBody), $fetch);
    }
    /**
    * Метод позволяет определить только возможность забора груза в указанную дату и выводит массив доступных дат до и после указанной даты.
    - Если необходимо проверить, действует ли льготный тариф на забор по запрошенному адресу в указанную дату, рекомендуем использовать метод [`/calculator/checkdeliverydate/.`](#tag/calculator/POST/calculator/checkdeliverydate/)
    *
    * @param \glook\PecomSdk\Generated\Model\BranchesCheckpickupdatePostBody $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \glook\PecomSdk\Generated\Exception\BranchesCheckpickupdateBadRequestException
    * @throws \glook\PecomSdk\Generated\Exception\BranchesCheckpickupdateForbiddenException
    * @throws \glook\PecomSdk\Generated\Exception\BranchesCheckpickupdateInternalServerErrorException
    * @throws \glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return null|\glook\PecomSdk\Generated\Model\BranchesCheckpickupdatePostResponse200|\Psr\Http\Message\ResponseInterface
    */
    public function branchesCheckpickupdate(\glook\PecomSdk\Generated\Model\BranchesCheckpickupdatePostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \glook\PecomSdk\Generated\Endpoint\BranchesCheckpickupdate($requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \glook\PecomSdk\Generated\Exception\BranchesCountryBadRequestException
     * @throws \glook\PecomSdk\Generated\Exception\BranchesCountryForbiddenException
     * @throws \glook\PecomSdk\Generated\Exception\BranchesCountryInternalServerErrorException
     * @throws \glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\glook\PecomSdk\Generated\Model\Country[]|\Psr\Http\Message\ResponseInterface
     */
    public function branchesCountry(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \glook\PecomSdk\Generated\Endpoint\BranchesCountry(), $fetch);
    }
    /**
     * Возвращает допустимые документы, удостоверяющие личность, для страны отправления/получения.
     *
     * @param \glook\PecomSdk\Generated\Model\BranchesCountrytypeidentitydocumentPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \glook\PecomSdk\Generated\Exception\BranchesCountrytypeidentitydocumentBadRequestException
     * @throws \glook\PecomSdk\Generated\Exception\BranchesCountrytypeidentitydocumentForbiddenException
     * @throws \glook\PecomSdk\Generated\Exception\BranchesCountrytypeidentitydocumentInternalServerErrorException
     * @throws \glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\glook\PecomSdk\Generated\Model\BranchesCountrytypeidentitydocumentPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function branchesCountrytypeidentitydocument(\glook\PecomSdk\Generated\Model\BranchesCountrytypeidentitydocumentPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \glook\PecomSdk\Generated\Endpoint\BranchesCountrytypeidentitydocument($requestBody), $fetch);
    }
    /**
    * Метод возвращает максимально-допустимые значения ВГХ груза для тарифа "Express Автоперевозка" между указанными филиалами или складами. Результат возвращается в виде структуры.
    - Метод не проверяет наличие маршрута перевозки между филиалами.
    - Если возвращается пустой ответ — значит для тарифа "Express Автоперевозка" нет возможности перевозить груз между указанными филиалами (складами).
    - Идентификаторы филиалов и складов отправителя/ получателя можно получить методом [`/branches/nearestdepartments/`](#tag/branches/POST/branches/nearestdepartments/) (в ответе метода `freeDepartments.branchId` и `freeDepartments.warehouseId`)
    *
    * @param \glook\PecomSdk\Generated\Model\BranchesDepartmentslimitPostBody $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \glook\PecomSdk\Generated\Exception\BranchesDepartmentslimitBadRequestException
    * @throws \glook\PecomSdk\Generated\Exception\BranchesDepartmentslimitForbiddenException
    * @throws \glook\PecomSdk\Generated\Exception\BranchesDepartmentslimitInternalServerErrorException
    * @throws \glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return null|\glook\PecomSdk\Generated\Model\BranchesDepartmentslimitPostResponse200|\Psr\Http\Message\ResponseInterface
    */
    public function branchesDepartmentslimit(\glook\PecomSdk\Generated\Model\BranchesDepartmentslimitPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \glook\PecomSdk\Generated\Endpoint\BranchesDepartmentslimit($requestBody), $fetch);
    }
    /**
     * Метод по строке адреса выводит филиал, к которому относится указанный адрес, наименование тарифной зоны, ID склада основного отделения филиала. Составляющие части адреса возвращаются в виде массива: страна, регион, населенный пункт, улица, дом. Если возвращается пустой ответ — значит зона адреса не обслуживается ПЭК.
     *
     * @param \glook\PecomSdk\Generated\Model\BranchesFindzonebyaddressPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \glook\PecomSdk\Generated\Exception\BranchesFindzonebyaddressBadRequestException
     * @throws \glook\PecomSdk\Generated\Exception\BranchesFindzonebyaddressForbiddenException
     * @throws \glook\PecomSdk\Generated\Exception\BranchesFindzonebyaddressInternalServerErrorException
     * @throws \glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\glook\PecomSdk\Generated\Model\BranchesFindzonebyaddressPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function branchesFindzonebyaddress(\glook\PecomSdk\Generated\Model\BranchesFindzonebyaddressPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \glook\PecomSdk\Generated\Endpoint\BranchesFindzonebyaddress($requestBody), $fetch);
    }
    /**
     * Метод по координатам ищет филиал и наименование тарифной зоны, к которой он привязан. Результат возвращается в виде массива. Если возвращается пустой ответ — значит зона адреса не обслуживается ПЭК.
     *
     * @param \glook\PecomSdk\Generated\Model\BranchesFindzonebycoordinatesPostBodyItem[] $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \glook\PecomSdk\Generated\Exception\BranchesFindzonebycoordinatesBadRequestException
     * @throws \glook\PecomSdk\Generated\Exception\BranchesFindzonebycoordinatesForbiddenException
     * @throws \glook\PecomSdk\Generated\Exception\BranchesFindzonebycoordinatesInternalServerErrorException
     * @throws \glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\glook\PecomSdk\Generated\Model\ZoneByCoordinate[]|\Psr\Http\Message\ResponseInterface
     */
    public function branchesFindzonebycoordinates(array $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \glook\PecomSdk\Generated\Endpoint\BranchesFindzonebycoordinates($requestBody), $fetch);
    }
    /**
     * Метод предназначен для организации подбора ближайших к клиенту (адресу клиента) отделений для приема/выдачи грузов, которые подойдут для конкретного груза. Или подбора отделений в конкретном городе.
     *
     * @param \glook\PecomSdk\Generated\Model\BranchesNearestdepartmentsPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \glook\PecomSdk\Generated\Exception\BranchesNearestdepartmentsBadRequestException
     * @throws \glook\PecomSdk\Generated\Exception\BranchesNearestdepartmentsForbiddenException
     * @throws \glook\PecomSdk\Generated\Exception\BranchesNearestdepartmentsInternalServerErrorException
     * @throws \glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\glook\PecomSdk\Generated\Model\BranchesNearestdepartmentsPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function branchesNearestdepartments(\glook\PecomSdk\Generated\Model\BranchesNearestdepartmentsPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \glook\PecomSdk\Generated\Endpoint\BranchesNearestdepartments($requestBody), $fetch);
    }
    /**
    * Метод позволяет в ИТ системе реализовать быстрый подбор адреса забора/ доставки по аналогии с тем, как это сделано на сайте pecom.ru при подаче заявки. На вход дается строка с частью адреса, в ответе выводятся наиболее похожие варианты. При этом перечень вариантов содержит только адреса зоны доставки/ забора ПЭК.
    В некоторых случаях отсутствие вариантов адресов может говорить только о том, что адреса еще нет в базе, но забор/ доставка по адресу возможны, если есть забор/ доставка на соседние улицы/ дома.
    - Не используйте данный метод для проверки доступности адреса, т.к. есть ограничения по числу запросов для всех пользователей в сутки.
    - Для проверки доступности адреса Забора и Доставки используйте метод [/BRANCHES/FINDZONEBYADDRESS/](#tag/branches/POST/branches/findzonebyaddress/). Правильность адреса можно смотреть в ответе метода /FINDZONEBYADDRESS/ в блоке GeoData. Address. formatted
    *
    * @param \glook\PecomSdk\Generated\Model\BranchesSuggestaddressofintakeordeliveryPostBody $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \glook\PecomSdk\Generated\Exception\BranchesSuggestaddressofintakeordeliveryBadRequestException
    * @throws \glook\PecomSdk\Generated\Exception\BranchesSuggestaddressofintakeordeliveryForbiddenException
    * @throws \glook\PecomSdk\Generated\Exception\BranchesSuggestaddressofintakeordeliveryInternalServerErrorException
    * @throws \glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return null|\glook\PecomSdk\Generated\Model\SuggestAddressResponse|\Psr\Http\Message\ResponseInterface
    */
    public function branchesSuggestaddressofintakeordelivery(\glook\PecomSdk\Generated\Model\BranchesSuggestaddressofintakeordeliveryPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \glook\PecomSdk\Generated\Endpoint\BranchesSuggestaddressofintakeordelivery($requestBody), $fetch);
    }
    /**
    * - [Общие рекомендации по передаче адреса забора/доставки в запрос при интеграции с транспортной компанией](https://kabinet.pecom.ru/UserData/Api/%D0%9E%D0%B1%D1%89%D0%B8%D0%B5%20%D1%80%D0%B5%D0%BA%D0%BE%D0%BC%D0%B5%D0%BD%D0%B4%D0%B0%D1%86%D0%B8%D0%B8%20%D0%BF%D0%BE%20%D0%BF%D0%B5%D1%80%D0%B5%D0%B4%D0%B0%D1%87%D0%B5%20%D0%B0%D0%B4%D1%80%D0%B5%D1%81%D0%B0%20%D0%B2%20%D0%B7%D0%B0%D0%BF%D1%80%D0%BE%D1%81%20%D0%BF%D1%80%D0%B8%20%D0%B8%D0%BD%D1%82%D0%B5%D0%B3%D1%80%D0%B0%D1%86%D0%B8%D0%B8.docx)
    - Выбор адреса отправления и адреса получения осуществляется по следующей логике: если заказана услуга забора/доставки, то расчет стоимости ведется по координатам напрямую переданным в запрос (параметр `"coordinates"` блоков `pickup` / `delivery`), или координатам, полученным по переданной строке адреса (параметр `"address"` блоков `pickup` / `delivery`). Все прочие параметры определяющие адреса будут проигнорированы.
    - Если услуга забора/доставки не заказана, то необходимо передавать ID склада отправления/назначения (параметр `senderWarehouseId` / `receiverWarehouseId`).
    - ID склада населенного пункта (с отбором по разрешенным габаритам можно получить методом [`/branches/nearestdepartments`](#tag/branches/POST/branches/nearestdepartments/), возвращающим ближайшие отделения к переданному в запрос адресу. Или самостоятельно выбирать удобное отделение/склад из ответа метода [`/branches/all`](#tag/branches/POST/branches/all/) (поле `branches[].divisions[].warehouses[].id`), при этом необходимо учитывать доступность складов по габаритам и разрешенных для них операций.
    - Быстро получить ID склада основного отделения любого филиала можно используя метод [`/branches/findzonebyaddress`](#tag/branches/POST/branches/findzonebyaddress/). в ответе метода реквизит `mainWarehouseId`. Основное отделение является центральным складом конкретного филиала, из которого можно дозаказать доставку до адреса или ПВЗ, который относится к зоне обслуживаемого филиала.  
    Например, по адресу «Самарская область, город Отрадный», основным является отделение филиала «Самара» по адресу: ул. Земеца, д. 32 литера 354, так как город Отрадный обслуживает филиал «Самара».
    - Объекты со стоимостью услуг для разных видов перевозки возвращаются отдельно в массиве `transfers`.
    Тип перевозки указывается в поле объекта `transfers[].type`; 3 соответствует автоперевозке, 1 — авиа.
    - Сроки авиаперевозки могут указываться несколькими значениями, для разных вариантов времени сдачи груза на склад отправителем.
    В ответе метод возвращает массив данных по времени приемки груза — `transportingTimes`.
    Количество элементов в массивах сроков перевозки `commonTerms[].transporting` и
    перевозки с доставкой `commonTerms[].transportingWithDelivery` равно количеству элементов в данном массиве `transportingTimes`.
    Чтобы определить ориентировочный срок доставки, нужно сначала выбрать элемент массива данных по времени приемки груза `transportingTimes` со временем, ранее которого груз был сдан на склад.
    После этого ориентировочный срок доставки можно смотреть в соответствующих элементах массивов `commonTerms[].transporting` и `commonTerms[].transportingWithDelivery`.
    - В массиве `cargos` нужно передавать информацию по каждому грузоместу груза, заполняя несколько элементов массива.
    Каждый элемент массива будет восприниматься, как отдельное грузоместо одного груза.
    Если Вам известны габариты и вес каждого грузоместа, то передавайте Длину, Ширину, Высоту и Вес.
    Если Вам известны только общие габариты всего груза (Объём, Вес, Максимальный габарит и количество мест) и не известны вес и габариты каждого грузоместа, то передавайте на вход столько элементов массива - сколько мест.
    В каждом элементе массива указывайте средние Вес и Объём грузоместа (разделите общий вес груза и общий объём груза на кол-во мест) и Максимальный габарит грузоместа.
    Важно! Признак `isHP` в калькуляторе рассчитывается всегда по грузу в целом - если хотя бы у одного грузоместа значение будет true, то защитная транспортировочная упаковка будет рассчитана для всего груза.
    - Параметр `needReturnDocuments` необязательный. Выберите, если необходим возврат документов с подписью и печатью получателя, подтверждающих, что груз им получен. [Подробнее](https://pecom.ru/services/additional-features/vozvrat-dokumentov/).
    - Параметр `needArrangeTransportationDocuments` необязательный. Выберите, чтобы расчитать передачу вместе с грузом комплекта сопроводительных документов, которые будут выданы грузополучателю вместе с грузом. [Подробнее](https://pecom.ru/services/additional-features/perevozka-soprovoditelnykh-dokumentov/).
    - Если по направлению, продукту и прочим параметрам по грузу будут застрахованы сроки перевозки и сам груз, то в ответе будет услуга с названием в поле info: "Страхование груза и срока", если будет застрахован только груз, то будет название "Страхование".
    - [Архив с примерами минимальных запросов CalculatePrice (.zip, 2Кб)](https://kabinet.pecom.ru/UserData/Api/%D0%90%D1%80%D1%85%D0%B8%D0%B2%20%D1%81%20%D0%BF%D1%80%D0%B8%D0%BC%D0%B5%D1%80%D0%B0%D0%BC%D0%B8%20%D0%BC%D0%B8%D0%BD%D0%B8%D0%BC%D0%B0%D0%BB%D1%8C%D0%BD%D1%8B%D1%85%20%D0%B7%D0%B0%D0%BF%D1%80%D0%BE%D1%81%D0%BE%D0%B2%20CalculatePrice.zip?v=134222797029825469).
    *
    * @param \glook\PecomSdk\Generated\Model\CalculatePriceRequest $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \glook\PecomSdk\Generated\Exception\CalculatorCalculatepriceBadRequestException
    * @throws \glook\PecomSdk\Generated\Exception\CalculatorCalculatepriceForbiddenException
    * @throws \glook\PecomSdk\Generated\Exception\CalculatorCalculatepriceInternalServerErrorException
    * @throws \glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return null|\glook\PecomSdk\Generated\Model\CalculatePriceResponse|\Psr\Http\Message\ResponseInterface
    */
    public function calculatorCalculateprice(\glook\PecomSdk\Generated\Model\CalculatePriceRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \glook\PecomSdk\Generated\Endpoint\CalculatorCalculateprice($requestBody), $fetch);
    }
    /**
     * Возвращает ближайшие даты и интервалы времени по дате забора/доставки от даты запроса `requestDateTime`.
     *
     * @param \glook\PecomSdk\Generated\Model\CheckDeliveryDateRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \glook\PecomSdk\Generated\Exception\CalculatorCheckdeliverydateBadRequestException
     * @throws \glook\PecomSdk\Generated\Exception\CalculatorCheckdeliverydateForbiddenException
     * @throws \glook\PecomSdk\Generated\Exception\CalculatorCheckdeliverydateInternalServerErrorException
     * @throws \glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\glook\PecomSdk\Generated\Model\DeliveryDateResult[]|\Psr\Http\Message\ResponseInterface
     */
    public function calculatorCheckdeliverydate(\glook\PecomSdk\Generated\Model\CheckDeliveryDateRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \glook\PecomSdk\Generated\Endpoint\CalculatorCheckdeliverydate($requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \glook\PecomSdk\Generated\Exception\CargocontentAllBadRequestException
     * @throws \glook\PecomSdk\Generated\Exception\CargocontentAllForbiddenException
     * @throws \glook\PecomSdk\Generated\Exception\CargocontentAllInternalServerErrorException
     * @throws \glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\glook\PecomSdk\Generated\Model\CargoContentItem[]|\Psr\Http\Message\ResponseInterface
     */
    public function cargocontentAll(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \glook\PecomSdk\Generated\Endpoint\CargocontentAll(), $fetch);
    }
    /**
     * Метод работает при подключеной услуге "Упрощенный заказ машины" и возвращает ранее отправленные методом [`/cargopickup/submit/`](#tag/cargopickup/POST/cargopickup/submit/) заказы на машины (со значением параметра "pickupType": 3). Может использоваться для проверки ранее поданного заказа на машину и получения его статуса.
     *
     * @param \glook\PecomSdk\Generated\Model\CargoPickupCheckOrderedPickupType3CarRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \glook\PecomSdk\Generated\Exception\CargopickupCheckOrderedPickupType3CarBadRequestException
     * @throws \glook\PecomSdk\Generated\Exception\CargopickupCheckOrderedPickupType3CarForbiddenException
     * @throws \glook\PecomSdk\Generated\Exception\CargopickupCheckOrderedPickupType3CarInternalServerErrorException
     * @throws \glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\glook\PecomSdk\Generated\Model\CargoPickupCheckOrderedPickupType3CarResponse|\Psr\Http\Message\ResponseInterface
     */
    public function cargopickupCheckOrderedPickupType3Car(\glook\PecomSdk\Generated\Model\CargoPickupCheckOrderedPickupType3CarRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \glook\PecomSdk\Generated\Endpoint\CargopickupCheckOrderedPickupType3Car($requestBody), $fetch);
    }
    /**
     * 
     *
     * @param \glook\PecomSdk\Generated\Model\CargoPickupStatusRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \glook\PecomSdk\Generated\Exception\CargopickupStatusBadRequestException
     * @throws \glook\PecomSdk\Generated\Exception\CargopickupStatusForbiddenException
     * @throws \glook\PecomSdk\Generated\Exception\CargopickupStatusInternalServerErrorException
     * @throws \glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function cargopickupStatus(\glook\PecomSdk\Generated\Model\CargoPickupStatusRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \glook\PecomSdk\Generated\Endpoint\CargopickupStatus($requestBody), $fetch);
    }
    /**
    * - [Общие рекомендации по передаче адреса забора/доставки в запрос при интеграции с транспортной компанией](https://kabinet.pecom.ru/UserData/Api/%D0%9E%D0%B1%D1%89%D0%B8%D0%B5%20%D1%80%D0%B5%D0%BA%D0%BE%D0%BC%D0%B5%D0%BD%D0%B4%D0%B0%D1%86%D0%B8%D0%B8%20%D0%BF%D0%BE%20%D0%BF%D0%B5%D1%80%D0%B5%D0%B4%D0%B0%D1%87%D0%B5%20%D0%B0%D0%B4%D1%80%D0%B5%D1%81%D0%B0%20%D0%B2%20%D0%B7%D0%B0%D0%BF%D1%80%D0%BE%D1%81%20%D0%BF%D1%80%D0%B8%20%D0%B8%D0%BD%D1%82%D0%B5%D0%B3%D1%80%D0%B0%D1%86%D0%B8%D0%B8.docx)
    - **ВАЖНО!** Использование технологии "Упрощенный забор": раздельной подачи "Заказа на машину" и "Заказа на перевозку" (pickupType = 4), возможно, только после подключения услуги менеджером со стороны ПЭК. Вызов машины по этой технологии осуществляется только после подачи отдельного "Заказа на машину".
    - При подаче "Заказа на перевозку" (pickupType = 4) реквизиты с требованиями к машине забора заполнять необходимо, но они будут проигнорированы, требования к машине имеет смысл передавать при подаче "Заказа на машину". Адрес забора в "Заказе на перевозку" и "Заказе на машину" должны в точности совпадать.
    - Возможность забора груза "день в день" в соответствии с Вашим договором уточняйте у своего закрепленного менеджера или в филиале отправления. Есть ограничения по времени забора и по габаритам, которые зависят от конкретных филиалов. Подача заявок по API на забор груза "день в день" за административными чертами города, а также на праздничные и выходные дни невозможна.
    - Максимальный размер одного файла вложения: **2,00 Мб**, максимальный размер всех файлов: **10,00 Мб**, максимальное количество файлов: **10**
    - Услуга наложенного платежа `services.cashOnDelivery` может быть доступна при заключении договора на оказание данной услуги и для тарифа/продукта EasyWay.
    - Для работы с тарифом EasyWay требуется заключение дополнительного соглашения.
    - Установка соответствующего значения в поле `includeTES` позволяет настраивать включение транспортно-экспедиционных услуг (ТЭУ) в сумму наложенного платежа (НП) для каждого груза или исключение ТЭУ из суммы НП: `true`— за услуги платит отправитель из суммы НП, `false`— за услуги платит получатель сверх суммы НП
    - ID склада населенного пункта (с отбором по разрешенным габаритам можно получить методом [`/branches/nearestdepartments/`](#tag/branches/POST/branches/nearestdepartments/), возвращающим ближайшие отделения к переданному в запрос адресу. Или самостоятельно выбирать удобное отделение/склад из ответа метода [`/branches/all/`](#tag/branches/POST/branches/all/) (поле `branches[].divisions[].warehouses[].id`). Обращайте внимание на разрешенные типы операций складов и ограничения по габаритам (поле `branches[].divisions[].warehouses[].kindsOfTransportation[].description`, `type`, `operations[]`)
    - Быстро получить ID склада основного отделения любого филиала можно используя метод [`/branches/findzonebyaddress/`](#tag/branches/POST/branches/findzonebyaddress/). В ответе метода реквизит `mainWarehouseId`. Основное отделение является центральным складом конкретного филиала, из которого можно заказать доставку до адреса или ПВЗ, который относится к зоне обслуживаемого филиала.
    - При указании идентификатора склада `receiver.warehouseId` следует помнить, что он будет проигнорирован, если заказана услуга доставки
    - `isDocumentsReturn`— при заказанной услуге "Возврат документов" создается отдельный груз "Возвратные документы", который направляется в отделение-отправитель. При необходимости клиент может отдельно заказать доставку этого груза по нужному адресу
    - `common.applicationDate, receiver.avisationDateTime, receiver.dateOfDelivery` При передаче выполняется проверка на возможность выполнения заявок в указанные даты по процессам компании
    - `receiver.identityCard.type` в значении 0 (Без предоставления документа) подразумевает, что идентификация получателя (доступна по договору оферты) будет произведена с использованием кода СМС. Ограничения на использование данного способа идентификации описаны [здесь](https://pecom.ru/services/additional-features/upr-vidacha/)
    - Реквизит `"paymentCity"` рекомендуется передавать только в некоторых случаях, описанных ниже. При передаче `"paymentCity"` в нём ожидается указание наименования филиала оплаты. "Филиал оплаты" - филиал ПЭК, в котором плательщик за услугу ПЭК будет получать оригиналы закрывающих бухгалтерских документов: УПД, отчёт по страхованию и т.п. Филиал оплаты также определяет возможность применения к грузу некоторых назначенных контрагенту скидок и сервисов.
    
    `"paymentCity"` обязателен только при указании плательщиком "третьего лица" (`type=3`)!
    
    Если плательщиками указаны Отправитель (`type=1`) или Получатель (`type=2`), то `"paymentCity"` следует передавать ТОЛЬКО в следующих случаях:
     * плательщиком за услугу указан Отправитель (`type=1`) и Филиал оплаты, отличается от филиала отправления,
     * плательщиком за услугу указан Получатель (`type=2`) и Филиал оплаты, отличается от филиала получения.
    По умолчанию, если Плательщик - отправитель, то Филиалом оплаты будет указан Филиал отправления; если Плательщик - получатель, то Филиал получения.
    
    Наименование филиала можно получить в ответе методов [`/branches/all/`](#tag/branches/POST/branches/all/) в поле `branches[].title` или [`/branches/findzonebyaddress`](#tag/branches/POST/branches/findzonebyaddress/) в поле `branchTitle`
    - [Архив с примерами минимальных запросов CargoPickup (.zip, 6Кб)](https://kabinet.pecom.ru/UserData/Api/%D0%90%D1%80%D1%85%D0%B8%D0%B2%20%D1%81%20%D0%BF%D1%80%D0%B8%D0%BC%D0%B5%D1%80%D0%B0%D0%BC%D0%B8%20%D0%BC%D0%B8%D0%BD%D0%B8%D0%BC%D0%B0%D0%BB%D1%8C%D0%BD%D1%8B%D1%85%20%D0%B7%D0%B0%D0%BF%D1%80%D0%BE%D1%81%D0%BE%D0%B2%20CARGOPICKUP.zip?v=134222797038175447)
    *
    * @param \glook\PecomSdk\Generated\Model\CargoPickupSubmitRequest $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \glook\PecomSdk\Generated\Exception\CargopickupSubmitBadRequestException
    * @throws \glook\PecomSdk\Generated\Exception\CargopickupSubmitForbiddenException
    * @throws \glook\PecomSdk\Generated\Exception\CargopickupSubmitInternalServerErrorException
    * @throws \glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return null|\glook\PecomSdk\Generated\Model\CargoPickupSubmitResponse|\Psr\Http\Message\ResponseInterface
    */
    public function cargopickupSubmit(\glook\PecomSdk\Generated\Model\CargoPickupSubmitRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \glook\PecomSdk\Generated\Endpoint\CargopickupSubmit($requestBody), $fetch);
    }
    /**
    * Метод не рекомендуется к использованию, корректная работа метода не гарантируется.
    
    - Максимальное количество грузов в одной заявке (и объектов с информацией о грузах в ответе) — **50**
    - [Общие рекомендации по передаче адреса забора/доставки в запрос при интеграции с транспортной компанией](https://kabinet.pecom.ru/UserData/Api/%D0%9E%D0%B1%D1%89%D0%B8%D0%B5%20%D1%80%D0%B5%D0%BA%D0%BE%D0%BC%D0%B5%D0%BD%D0%B4%D0%B0%D1%86%D0%B8%D0%B8%20%D0%BF%D0%BE%20%D0%BF%D0%B5%D1%80%D0%B5%D0%B4%D0%B0%D1%87%D0%B5%20%D0%B0%D0%B4%D1%80%D0%B5%D1%81%D0%B0%20%D0%B2%20%D0%B7%D0%B0%D0%BF%D1%80%D0%BE%D1%81%20%D0%BF%D1%80%D0%B8%20%D0%B8%D0%BD%D1%82%D0%B5%D0%B3%D1%80%D0%B0%D1%86%D0%B8%D0%B8.docx)
    - В элементах массива `cargos.items[]` с данными о грузах необходимо указывать данные получателя в объекте `cargos.items[].receiver`.
    - У объекта `cargos.items[].services.(услуга).payer.other` для услуг pickUp (забор), transporting (перевозка), delivery (доставка), insurance (страховка) добавилось поле `paymentCity`.
    - Реквизит `"paymentCity"` рекомендуется передавать только в некоторых случаях, описанных ниже. При передаче `"paymentCity"` в нём ожидается указание наименования филиала оплаты. "Филиал оплаты" - филиал ПЭК, в котором плательщик за услугу ПЭК будет получать оригиналы закрывающих бухгалтерских документов: УПД, отчёт по страхованию и т.п. Филиал оплаты также определяет возможность применения к грузу некоторых назначенных контрагенту скидок и сервисов.
    
    `"paymentCity"` обязателен только при указании плательщиком "третьего лица" (`type=3`)!
    
    Если плательщиками указаны Отправитель (`type=1`) или Получатель (`type=2`), то `"paymentCity"` следует передавать ТОЛЬКО в следующих случаях:
     * плательщиком за услугу указан Отправитель (`type=1`) и Филиал оплаты, отличается от филиала отправления,
     * плательщиком за услугу указан Получатель (`type=2`) и Филиал оплаты, отличается от филиала получения.
    По умолчанию, если Плательщик - отправитель, то Филиалом оплаты будет указан Филиал отправления; если Плательщик - получатель, то Филиал получения.
    
    Наименование филиала можно получить в ответе методов [`/branches/all/`](#tag/branches/POST/branches/all/) в поле `branches[].title` или [`/branches/findzonebyaddress/`](#tag/branches/POST/branches/findzonebyaddress/) в поле `branchTitle`
    - Можно указать штрих-коды для позиций грузов. Для этого надо во-первых для всей заявки в поле `cargos.common.typeClientBarcode` указать тип штрих-кода, регистр при указании типа штрих-кода не важен.
    Список допустимых типов штрих-кодов можно получить с помощью метода [/cargopickupnetwork/availabletypebarcode](#tag/cargopickupnetwork/POST/cargopickupnetwork/availabletypebarcode/).
    Для каждого груза нужно указать массив со штрих-кодами позиций груза в поле `cargos.items[].cargo.clientPositionsBarcode`.
    Штрих-кодов не должно быть указано больше, чем позиций груза (`cargos.items[].cargo.positionsCount`).
    - Для подачи заявки с наложенным платежом, следует использовать другие методы API. Свяжитесь с нами, если у Вас есть такая потребность.
    - `cargos.items[].receiver.identityCard.type` в значении 0 (Без предоставления документа) подразумевает, что идентификация получателя (доступна по договору оферты) будет произведена с использованием кода СМС. Ограничения на использование данного способа идентификации описаны [здесь](https://pecom.ru/services/additional-features/upr-vidacha/)
    - Данные по наименованию филиала отправления и получения для реквизитов `sender.city` и `receiver.city` можно получить используя метод [`/branches/findzonebyaddress/`](#tag/branches/POST/branches/findzonebyaddress/). На вход в метод передавать адрес забора и/или доставки, в ответе метода брать значение реквизита `branchTitle` и подставлять в реквизит `city` соответствующего блока.
    - Возможность забора груза "день в день" в соответствии с Вашим договором уточняйте у своего закрепленного менеджера или в филиале отправления. Есть ограничения по времени забора и по габаритам, которые зависят от конкретных филиалов. Подача заявок по API на забор груза "день в день" за административными чертами города, а также на праздничные и выходные дни невозможна.
    *
    * @param \glook\PecomSdk\Generated\Model\CargoPickupNetworkSubmitRequest $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \glook\PecomSdk\Generated\Exception\CargopickupnetworkSubmitBadRequestException
    * @throws \glook\PecomSdk\Generated\Exception\CargopickupnetworkSubmitForbiddenException
    * @throws \glook\PecomSdk\Generated\Exception\CargopickupnetworkSubmitInternalServerErrorException
    * @throws \glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return null|\glook\PecomSdk\Generated\Model\CargoPickupNetworkSubmitResponse|\Psr\Http\Message\ResponseInterface
    */
    public function cargopickupnetworkSubmit(\glook\PecomSdk\Generated\Model\CargoPickupNetworkSubmitRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \glook\PecomSdk\Generated\Endpoint\CargopickupnetworkSubmit($requestBody), $fetch);
    }
    /**
    * - Максимальное количество кодов грузов в одном запросе: **50**
    - В качестве кода груза можно указывать предварительный или фактический код груза.
    - Возможные значения поля `cargos[].info.cargoStatus` (статус груза): `Аннулировано до приемки груза`, `Заявка на забор зарегистрирована`, `Ожидается передача груза от отправителя`, `Принят к перевозке`, `Принят на ПВЗ`, `Возвращен отправителю`, `Оформлен`, `В пути`, `В пути на терминал`, `Прибыл`, `Прибыл частично`, `Разгружается. Ожидайте оповещения`, `Выполняется адресная доставка`, `Выдан получателю`, `Доставлен получателю`, `Отправлен на возврат`, `Утилизирован`, `Изъят на таможне`, `Возвращен отправителю` , `Выдан ( мест { количество_мест } из { количество_мест } )`
    *
    * @param \glook\PecomSdk\Generated\Model\CargosBasicStatusRequest $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \glook\PecomSdk\Generated\Exception\CargosBasicstatusBadRequestException
    * @throws \glook\PecomSdk\Generated\Exception\CargosBasicstatusForbiddenException
    * @throws \glook\PecomSdk\Generated\Exception\CargosBasicstatusInternalServerErrorException
    * @throws \glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return null|\glook\PecomSdk\Generated\Model\BasicStatusResponse|\Psr\Http\Message\ResponseInterface
    */
    public function cargosBasicstatus(\glook\PecomSdk\Generated\Model\CargosBasicStatusRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \glook\PecomSdk\Generated\Endpoint\CargosBasicstatus($requestBody), $fetch);
    }
    /**
    * - Метод позволяет автоматически перенаправить груз отправителю с момента оформления груза на складе в городе отправления и до момента выдачи получателю
    - Выполняется по одному конкретному грузу
    - В процессе движения груза в ПЭК существуют интервалы времени, когда возврат отправителю оформить не возможно. Например: до того как груз принят на склад ПЭК и оформлен к перевозке или если груз уже на последней миле при доставке получателю, в этом случае метод будет сообщать о неуспешной попытке оформления возврата
    *
    * @param \glook\PecomSdk\Generated\Model\CargosCancelAndReturnRequest $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \glook\PecomSdk\Generated\Exception\CargosCancelandreturncargoBadRequestException
    * @throws \glook\PecomSdk\Generated\Exception\CargosCancelandreturncargoForbiddenException
    * @throws \glook\PecomSdk\Generated\Exception\CargosCancelandreturncargoInternalServerErrorException
    * @throws \glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return null|\glook\PecomSdk\Generated\Model\CancelAndReturnResponse|\Psr\Http\Message\ResponseInterface
    */
    public function cargosCancelandreturncargo(\glook\PecomSdk\Generated\Model\CargosCancelAndReturnRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \glook\PecomSdk\Generated\Endpoint\CargosCancelandreturncargo($requestBody), $fetch);
    }
    /**
     * - Максимальное количество кодов грузов в одном запросе: **15**
     *
     * @param \glook\PecomSdk\Generated\Model\CargosCurrentStatusRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \glook\PecomSdk\Generated\Exception\CargosCurrentstatusBadRequestException
     * @throws \glook\PecomSdk\Generated\Exception\CargosCurrentstatusForbiddenException
     * @throws \glook\PecomSdk\Generated\Exception\CargosCurrentstatusInternalServerErrorException
     * @throws \glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\glook\PecomSdk\Generated\Model\CurrentStatusResponse|\Psr\Http\Message\ResponseInterface
     */
    public function cargosCurrentstatus(\glook\PecomSdk\Generated\Model\CargosCurrentStatusRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \glook\PecomSdk\Generated\Endpoint\CargosCurrentstatus($requestBody), $fetch);
    }
    /**
     * 
     *
     * @param \glook\PecomSdk\Generated\Model\CargosDeliveryStatusRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \glook\PecomSdk\Generated\Exception\CargosDeliverystatusBadRequestException
     * @throws \glook\PecomSdk\Generated\Exception\CargosDeliverystatusForbiddenException
     * @throws \glook\PecomSdk\Generated\Exception\CargosDeliverystatusInternalServerErrorException
     * @throws \glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\glook\PecomSdk\Generated\Model\DeliveryStatusItem[]|\Psr\Http\Message\ResponseInterface
     */
    public function cargosDeliverystatus(\glook\PecomSdk\Generated\Model\CargosDeliveryStatusRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \glook\PecomSdk\Generated\Endpoint\CargosDeliverystatus($requestBody), $fetch);
    }
    /**
     * - Фотографии доступны только для грузов, отправленных из филиала Москва Восток.
     *
     * @param \glook\PecomSdk\Generated\Model\CargosDetailsRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \glook\PecomSdk\Generated\Exception\CargosDetailsBadRequestException
     * @throws \glook\PecomSdk\Generated\Exception\CargosDetailsForbiddenException
     * @throws \glook\PecomSdk\Generated\Exception\CargosDetailsInternalServerErrorException
     * @throws \glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\glook\PecomSdk\Generated\Model\CargoDetailsResponse|\Psr\Http\Message\ResponseInterface
     */
    public function cargosDetails(\glook\PecomSdk\Generated\Model\CargosDetailsRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \glook\PecomSdk\Generated\Endpoint\CargosDetails($requestBody), $fetch);
    }
    /**
     * 
     *
     * @param \glook\PecomSdk\Generated\Model\CargosForcedStorageRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \glook\PecomSdk\Generated\Exception\CargosGetinfoforcedstorageBadRequestException
     * @throws \glook\PecomSdk\Generated\Exception\CargosGetinfoforcedstorageForbiddenException
     * @throws \glook\PecomSdk\Generated\Exception\CargosGetinfoforcedstorageInternalServerErrorException
     * @throws \glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\glook\PecomSdk\Generated\Model\ForcedStorageItem[]|\Psr\Http\Message\ResponseInterface
     */
    public function cargosGetinfoforcedstorage(\glook\PecomSdk\Generated\Model\CargosForcedStorageRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \glook\PecomSdk\Generated\Endpoint\CargosGetinfoforcedstorage($requestBody), $fetch);
    }
    /**
     * 
     *
     * @param \glook\PecomSdk\Generated\Model\CargosListAllOrderByLoginRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \glook\PecomSdk\Generated\Exception\CargosListallorderbyloginBadRequestException
     * @throws \glook\PecomSdk\Generated\Exception\CargosListallorderbyloginForbiddenException
     * @throws \glook\PecomSdk\Generated\Exception\CargosListallorderbyloginInternalServerErrorException
     * @throws \glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\glook\PecomSdk\Generated\Model\ListAllOrderResponse|\Psr\Http\Message\ResponseInterface
     */
    public function cargosListallorderbylogin(\glook\PecomSdk\Generated\Model\CargosListAllOrderByLoginRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \glook\PecomSdk\Generated\Endpoint\CargosListallorderbylogin($requestBody), $fetch);
    }
    /**
     * - Метод выводит персональные данные водителей, осуществляющих забор/доставку груза для возможности использования их данных для заказа пропусков. Данные по водителям забора доступны только логину, которые имеет доступ к отправителю груза. Данные по водителям доставки доступны только получателям грузам. Метод работает только по маршрутным листам текущей или будущих дат
     *
     * @param \glook\PecomSdk\Generated\Model\CargosRoutesAndDriverInfoRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \glook\PecomSdk\Generated\Exception\CargosRoutesanddriverinfoBadRequestException
     * @throws \glook\PecomSdk\Generated\Exception\CargosRoutesanddriverinfoForbiddenException
     * @throws \glook\PecomSdk\Generated\Exception\CargosRoutesanddriverinfoInternalServerErrorException
     * @throws \glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\glook\PecomSdk\Generated\Model\RouteMapAddress[]|\Psr\Http\Message\ResponseInterface
     */
    public function cargosRoutesanddriverinfo(\glook\PecomSdk\Generated\Model\CargosRoutesAndDriverInfoRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \glook\PecomSdk\Generated\Endpoint\CargosRoutesanddriverinfo($requestBody), $fetch);
    }
    /**
    * - Максимальное количество кодов грузов в одном запросе: **15**
    - Возможные значения поля `cargos[].info.cargoStatus` (статус груза): `Аннулировано до приемки груза`, `Заявка на забор зарегистрирована`, `Ожидается передача груза от отправителя`, `Принят к перевозке`, `Принят на ПВЗ`, `Возвращен отправителю`, `Оформлен`, `В пути`, `В пути на терминал`, `Прибыл`, `Прибыл частично`, `Разгружается. Ожидайте оповещения`, `Выполняется адресная доставка`, `Выдан получателю`, `Доставлен получателю`, `Отправлен на возврат`, `Утилизирован`, `Изъят на таможне`, `Возвращен отправителю` , `Выдан ( мест { количество_мест } из { количество_мест } )`
    - Для груза, который является возвратом документов по другому грузу, в ответе возвращается поле `cargos[].cargo.parentCargoCode` с кодом исходного груза.
    - Возможные значения поля `cargos[].info.cargoStatus` (id статуса груза): [`/cargos/statustables/`](#cargos_statustables)
    - Поле `intakeAddress` будет заполнено только для грузов с забором.
    *
    * @param \glook\PecomSdk\Generated\Model\CargosStatusRequest $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \glook\PecomSdk\Generated\Exception\CargosStatusBadRequestException
    * @throws \glook\PecomSdk\Generated\Exception\CargosStatusForbiddenException
    * @throws \glook\PecomSdk\Generated\Exception\CargosStatusInternalServerErrorException
    * @throws \glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return null|\glook\PecomSdk\Generated\Model\CargosStatusResponse|\Psr\Http\Message\ResponseInterface
    */
    public function cargosStatus(\glook\PecomSdk\Generated\Model\CargosStatusRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \glook\PecomSdk\Generated\Endpoint\CargosStatus($requestBody), $fetch);
    }
    /**
    * - Максимальное количество штрих-кодов в одном запросе: **15**
    - Возможные значения поля `cargos[].info.cargoStatus` (статус груза): `Аннулировано до приемки груза`, `Заявка на забор зарегистрирована`, `Ожидается передача груза от отправителя`, `Принят к перевозке`, `Принят на ПВЗ`, `Возвращен отправителю`, `Оформлен`, `В пути`, `В пути на терминал`, `Прибыл`, `Прибыл частично`, `Разгружается. Ожидайте оповещения`, `Выполняется адресная доставка`, `Выдан получателю`, `Доставлен получателю`, `Отправлен на возврат`, `Утилизирован`, `Изъят на таможне`, `Возвращен отправителю` , `Выдан ( мест { количество_мест } из { количество_мест } )`
    - Для груза, который является возвратом документов по другому грузу, в ответе возвращается поле `cargos[].cargo.parentCargoCode` с кодом исходного груза.
    - Возможные значения поля `cargos[].info.cargoStatus` (id статуса груза): [`/cargos/statustable/`](#cargos_statustables)
    - Поле `intakeAddress` будет заполнено только для грузов с забором.
    *
    * @param \glook\PecomSdk\Generated\Model\CargosStatusByPositionBarcodesRequest $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \glook\PecomSdk\Generated\Exception\CargosStatusbypositionbarcodesBadRequestException
    * @throws \glook\PecomSdk\Generated\Exception\CargosStatusbypositionbarcodesForbiddenException
    * @throws \glook\PecomSdk\Generated\Exception\CargosStatusbypositionbarcodesInternalServerErrorException
    * @throws \glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return null|\glook\PecomSdk\Generated\Model\StatusByBarcodeResponse|\Psr\Http\Message\ResponseInterface
    */
    public function cargosStatusbypositionbarcodes(\glook\PecomSdk\Generated\Model\CargosStatusByPositionBarcodesRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \glook\PecomSdk\Generated\Endpoint\CargosStatusbypositionbarcodes($requestBody), $fetch);
    }
    /**
     * - Метод выводит дату и время установки статусов.
     *
     * @param \glook\PecomSdk\Generated\Model\CargosStatusFullHistoryRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \glook\PecomSdk\Generated\Exception\CargosStatusfullhistoryBadRequestException
     * @throws \glook\PecomSdk\Generated\Exception\CargosStatusfullhistoryForbiddenException
     * @throws \glook\PecomSdk\Generated\Exception\CargosStatusfullhistoryInternalServerErrorException
     * @throws \glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\glook\PecomSdk\Generated\Model\StatusHistoryItem[]|\Psr\Http\Message\ResponseInterface
     */
    public function cargosStatusfullhistory(\glook\PecomSdk\Generated\Model\CargosStatusFullHistoryRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \glook\PecomSdk\Generated\Endpoint\CargosStatusfullhistory($requestBody), $fetch);
    }
    /**
    * - Значения `statusId` используются в поле `cargoStatusId` (id статуса груза) в ответе метода [`/cargos/status/`](#cargos_status)
    - Значения `name` используются в поле `cargoStatus` (статуса груза) в ответе метода [`/cargos/status/`](#cargos_status)
    *
    * @param null|\stdClass $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \glook\PecomSdk\Generated\Exception\CargosStatustablesBadRequestException
    * @throws \glook\PecomSdk\Generated\Exception\CargosStatustablesForbiddenException
    * @throws \glook\PecomSdk\Generated\Exception\CargosStatustablesInternalServerErrorException
    * @throws \glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return null|\glook\PecomSdk\Generated\Model\StatusTableItem[]|\Psr\Http\Message\ResponseInterface
    */
    public function cargosStatustables(?\stdClass $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \glook\PecomSdk\Generated\Endpoint\CargosStatustables($requestBody), $fetch);
    }
    /**
    * Для получения неоплаченных идентификаторов грузов необходимо передать идентификатор плательщика `counterpartGuid`. `counterpartGuid` можно получить методом [`/COUNTERPARTS/CONFIRMEDACCESSTOCOUNTERPARTIES/`](#tag/counterparts/POST/counterparts/confirmedaccesstocounterparties/)
    - Запрошенный период не может превышать 31 день.
    - По полученным идентификаторам грузов можно запросить Счет на оплату методом [`/CARGOSDOCUMENTS/ORDER/`](#tag/cargosdocuments/POST/cargosdocuments/order/)
    *
    * @param \glook\PecomSdk\Generated\Model\CargosdocumentsCargoinvoicebyperiodRequest $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \glook\PecomSdk\Generated\Exception\CargosdocumentsCargoinvoicebyperiodBadRequestException
    * @throws \glook\PecomSdk\Generated\Exception\CargosdocumentsCargoinvoicebyperiodForbiddenException
    * @throws \glook\PecomSdk\Generated\Exception\CargosdocumentsCargoinvoicebyperiodInternalServerErrorException
    * @throws \glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function cargosdocumentsCargoinvoicebyperiod(\glook\PecomSdk\Generated\Model\CargosdocumentsCargoinvoicebyperiodRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \glook\PecomSdk\Generated\Endpoint\CargosdocumentsCargoinvoicebyperiod($requestBody), $fetch);
    }
    /**
    * Метод на данный момент позволяет получить документы "Поручение экспедитора/ Экспедиторская расписка" и "Счет на оплату" по оформленным грузам.
    - Сначала необходимо запросить документ методом [`/CARGOSDOCUMENTS/ORDER/`](#tag/cargosdocuments/POST/cargosdocuments/order/) и дождаться готовности документа
    - Для получения "Счета на оплату" необходимо передать идентификатор контрагента-плательщика `counterpartGuid` в системах ПЭК, связанный с ЛК. `counterpartGuid` можно получить методом [`/COUNTERPARTS/CONFIRMEDACCESSTOCOUNTERPARTIES/`](#tag/counterparts/POST/counterparts/confirmedaccesstocounterparties/).
    - Для получения "Счета на оплату" в формате `"xml"`, необходимо передать уточняющий параметр `docFormat` в запросе.
    Данные счета вернутся в формате CommerseML редакции 2.
    - Счета на оплату возвращаются в `"zip"` архиве (в архиве может быть несколько счетов по грузу)
    - [XSD схема Commerce ML 4.02](https://kabinet.pecom.ru/UserData/Api/CML402.zip)
    *
    * @param \glook\PecomSdk\Generated\Model\CargosdocumentsGetcontentRequest $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \glook\PecomSdk\Generated\Exception\CargosdocumentsGetcontentBadRequestException
    * @throws \glook\PecomSdk\Generated\Exception\CargosdocumentsGetcontentForbiddenException
    * @throws \glook\PecomSdk\Generated\Exception\CargosdocumentsGetcontentInternalServerErrorException
    * @throws \glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function cargosdocumentsGetcontent(\glook\PecomSdk\Generated\Model\CargosdocumentsGetcontentRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \glook\PecomSdk\Generated\Endpoint\CargosdocumentsGetcontent($requestBody), $fetch);
    }
    /**
    * Метод на данный момент позволяет запросить документы "Поручение экспедитора/ Экспедиторская расписка" и "Счет на оплату" по оформленным грузам.
    - При первом успешном вызове метода по конкретному грузу в ответе будет статус 0 - "Документ запрошен".
    При повторном вызове и после получения статуса 1 - "Документ готов к скачиванию", получите документ методом [`/CARGOSDOCUMENTS/GETCONTENT/`](#tag/cargosdocuments/POST/cargosdocuments/getcontent/)
    - Для получения "Счета на оплату" необходимо передать идентификатор контрагента-плательщика `"counterpartGuid"` в системах ПЭК, связанный с ЛК.
    По грузу должна быть задолженность для этого контрагента-плательщика. `"counterpartGuid"` можно получить методом [`/COUNTERPARTS/CONFIRMEDACCESSTOCOUNTERPARTIES/`](#tag/counterparts/POST/counterparts/confirmedaccesstocounterparties/).
    - Для получения "Счета на оплату" в формате `"xml"`, необходимо передать уточняющий параметр `"docFormat"` в запросе. Данные счета вернутся в формате **CommerseML** редакции 2.
    - Есть ограничение на число запросов в сутки для одного логина
    *
    * @param \glook\PecomSdk\Generated\Model\CargosdocumentsOrderRequest $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \glook\PecomSdk\Generated\Exception\CargosdocumentsOrderBadRequestException
    * @throws \glook\PecomSdk\Generated\Exception\CargosdocumentsOrderForbiddenException
    * @throws \glook\PecomSdk\Generated\Exception\CargosdocumentsOrderInternalServerErrorException
    * @throws \glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return null|\glook\PecomSdk\Generated\Model\CargosdocumentsOrderResponse|\Psr\Http\Message\ResponseInterface
    */
    public function cargosdocumentsOrder(\glook\PecomSdk\Generated\Model\CargosdocumentsOrderRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \glook\PecomSdk\Generated\Endpoint\CargosdocumentsOrder($requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \glook\PecomSdk\Generated\Exception\ClientpackingkindAllBadRequestException
     * @throws \glook\PecomSdk\Generated\Exception\ClientpackingkindAllForbiddenException
     * @throws \glook\PecomSdk\Generated\Exception\ClientpackingkindAllInternalServerErrorException
     * @throws \glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\glook\PecomSdk\Generated\Model\ClientPackingKindItem[]|\Psr\Http\Message\ResponseInterface
     */
    public function clientpackingkindAll(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \glook\PecomSdk\Generated\Endpoint\ClientpackingkindAll(), $fetch);
    }
    /**
     * Метод выводит список контрагентов, которые подтвердили доступ к своим данным в компании ПЭК для логина, под которым выполняется запрос по API.
     *
     * @param \glook\PecomSdk\Generated\Model\ConfirmedAccessToCounterpartiesRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \glook\PecomSdk\Generated\Exception\CounterpartsConfirmedaccesstocounterpartiesBadRequestException
     * @throws \glook\PecomSdk\Generated\Exception\CounterpartsConfirmedaccesstocounterpartiesForbiddenException
     * @throws \glook\PecomSdk\Generated\Exception\CounterpartsConfirmedaccesstocounterpartiesInternalServerErrorException
     * @throws \glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\glook\PecomSdk\Generated\Model\ConfirmedAccessToCounterparty[]|\Psr\Http\Message\ResponseInterface
     */
    public function counterpartsConfirmedaccesstocounterparties(\glook\PecomSdk\Generated\Model\ConfirmedAccessToCounterpartiesRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \glook\PecomSdk\Generated\Endpoint\CounterpartsConfirmedaccesstocounterparties($requestBody), $fetch);
    }
    /**
    * Метод выводит информацию по подключенным в ПЭК сервисам, скидкам и основным дополнительным соглашениям по конкретному контрагенту. Для работы метода контрагент должен подтвердить, что связан с логином, который указан при авторизации (см. вопрос "Как подтвердить личный кабинет на сайте pecom.ru?" внизу страницы: https://pecom.ru/business/integration/#ltl-ltl)
    
    Основные сервисы, доп. соглашения, которые могут повлиять на процесс интеграции с клиентами, и их важные параметры приведены в описании примера ответа метода с необходимыми пояснениями по правилам их использования.
    
    Если какая-то запись есть в ответе — значит сервис по контрагенту подключен и действует на момент вызова запроса. Данные по срокам действия необходимо уточнять у своего менеджера ПЭК
    
    Массив `params`, выводимый в массиве `specialConditionsWithParams`, в некоторых случаях содержит дополнительную информацию по особенностям применения скидок и сервисов. Пример основных параметров, которые там могут быть приведены, в описании формат ответа. В общем случае для пояснения логики работы тех или иных сервисов и скидок, прямо не представленных в примере ответа метода, необходимо обращаться к Вашему менеджеру ПЭК. API является "витриной" и специалисты по API не имеют достаточных компетенций в консультациях по особенностям всего объема скидок и сервисов.
    *
    * @param \glook\PecomSdk\Generated\Model\ConnectedDiscountsServicesAgreementsRequest $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \glook\PecomSdk\Generated\Exception\CounterpartsConnecteddiscountsservicesagreementsBadRequestException
    * @throws \glook\PecomSdk\Generated\Exception\CounterpartsConnecteddiscountsservicesagreementsForbiddenException
    * @throws \glook\PecomSdk\Generated\Exception\CounterpartsConnecteddiscountsservicesagreementsInternalServerErrorException
    * @throws \glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return null|\glook\PecomSdk\Generated\Model\ConnectedDiscountsServicesAgreementsResponse|\Psr\Http\Message\ResponseInterface
    */
    public function counterpartsConnecteddiscountsservicesagreements(\glook\PecomSdk\Generated\Model\ConnectedDiscountsServicesAgreementsRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \glook\PecomSdk\Generated\Endpoint\CounterpartsConnecteddiscountsservicesagreements($requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \glook\PecomSdk\Generated\Exception\CounterpartsLegalformtypesBadRequestException
     * @throws \glook\PecomSdk\Generated\Exception\CounterpartsLegalformtypesForbiddenException
     * @throws \glook\PecomSdk\Generated\Exception\CounterpartsLegalformtypesInternalServerErrorException
     * @throws \glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\glook\PecomSdk\Generated\Model\LegalFormType[]|\Psr\Http\Message\ResponseInterface
     */
    public function counterpartsLegalformtypes(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \glook\PecomSdk\Generated\Endpoint\CounterpartsLegalformtypes(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \glook\PecomSdk\Generated\Exception\CurrencyAllBadRequestException
     * @throws \glook\PecomSdk\Generated\Exception\CurrencyAllForbiddenException
     * @throws \glook\PecomSdk\Generated\Exception\CurrencyAllInternalServerErrorException
     * @throws \glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\glook\PecomSdk\Generated\Model\CurrencyItem[]|\Psr\Http\Message\ResponseInterface
     */
    public function currencyAll(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \glook\PecomSdk\Generated\Endpoint\CurrencyAll(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \glook\PecomSdk\Generated\Exception\NetshopListreceiveraddressesBadRequestException
     * @throws \glook\PecomSdk\Generated\Exception\NetshopListreceiveraddressesForbiddenException
     * @throws \glook\PecomSdk\Generated\Exception\NetshopListreceiveraddressesInternalServerErrorException
     * @throws \glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\glook\PecomSdk\Generated\Model\NetshopReceiver[]|\Psr\Http\Message\ResponseInterface
     */
    public function netshopListreceiveraddresses(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \glook\PecomSdk\Generated\Endpoint\NetshopListreceiveraddresses(), $fetch);
    }
    /**
    * Коды грузов и штрих-коды, возвращаемые этим методом являются **предварительными** и могут изменится при фактической приёмке груза
    - Для грузов нужно указывать код адреса получателя из [справочника](#tag/receivers/POST/receivers/listreceiveraddresses/) адресов получателей
    в поле `cargos[].receiver.receiverAddrCode`.
    *
    * @param \glook\PecomSdk\Generated\Model\NetshopSubmitRequest $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \glook\PecomSdk\Generated\Exception\NetshopSubmitBadRequestException
    * @throws \glook\PecomSdk\Generated\Exception\NetshopSubmitForbiddenException
    * @throws \glook\PecomSdk\Generated\Exception\NetshopSubmitInternalServerErrorException
    * @throws \glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return null|\glook\PecomSdk\Generated\Model\NetshopSubmitResponse|\Psr\Http\Message\ResponseInterface
    */
    public function netshopSubmit(\glook\PecomSdk\Generated\Model\NetshopSubmitRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \glook\PecomSdk\Generated\Endpoint\NetshopSubmit($requestBody), $fetch);
    }
    /**
     * 
     *
     * @param \glook\PecomSdk\Generated\Model\NotificationCargoSubscribeRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \glook\PecomSdk\Generated\Exception\NotificationCargosubscribeBadRequestException
     * @throws \glook\PecomSdk\Generated\Exception\NotificationCargosubscribeForbiddenException
     * @throws \glook\PecomSdk\Generated\Exception\NotificationCargosubscribeInternalServerErrorException
     * @throws \glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\glook\PecomSdk\Generated\Model\NotificationCargoSubscribeResponse|\Psr\Http\Message\ResponseInterface
     */
    public function notificationCargosubscribe(\glook\PecomSdk\Generated\Model\NotificationCargoSubscribeRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \glook\PecomSdk\Generated\Endpoint\NotificationCargosubscribe($requestBody), $fetch);
    }
    /**
    * Использовать метод нужно не ранее, чем через 5 – 10 минут после подачи заявки
    Заявка на забор может быть аннулирована до момента её планирования в маршрутном листе водителя
    Аннулирование заявок с самопривозом на склад ПЭК не требуется
    *
    * @param array[] $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \glook\PecomSdk\Generated\Exception\OrderCancellationBadRequestException
    * @throws \glook\PecomSdk\Generated\Exception\OrderCancellationForbiddenException
    * @throws \glook\PecomSdk\Generated\Exception\OrderCancellationInternalServerErrorException
    * @throws \glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return null|\glook\PecomSdk\Generated\Model\OrderCancellationResult[]|\Psr\Http\Message\ResponseInterface
    */
    public function orderCancellation(array $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \glook\PecomSdk\Generated\Endpoint\OrderCancellation($requestBody), $fetch);
    }
    /**
    * Метод позволяет получать файлы заявок и этикеток в формате PDF в кодировке base64
    В зависимости от значений параметра типа (`type` : `big`, `simple`, `multiple`), можно получить печатную форму заявки, этикетки конкретного груза или этикеток всех грузов заявки соответственно. Для типа `multiple`, если в заявке указано несколько грузополучателей (метод подачи заявки `preregistration/submit` `orderType` = `0` или `14`), то будут выведены на печать этикетки по всем грузам из заявки).
    *
    * @param \glook\PecomSdk\Generated\Model\OrderPrintRequest $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \glook\PecomSdk\Generated\Exception\OrderPrintBadRequestException
    * @throws \glook\PecomSdk\Generated\Exception\OrderPrintForbiddenException
    * @throws \glook\PecomSdk\Generated\Exception\OrderPrintInternalServerErrorException
    * @throws \glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function orderPrint(\glook\PecomSdk\Generated\Model\OrderPrintRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \glook\PecomSdk\Generated\Endpoint\OrderPrint($requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \glook\PecomSdk\Generated\Exception\PreregistrationAvailabletypebarcodeBadRequestException
     * @throws \glook\PecomSdk\Generated\Exception\PreregistrationAvailabletypebarcodeForbiddenException
     * @throws \glook\PecomSdk\Generated\Exception\PreregistrationAvailabletypebarcodeInternalServerErrorException
     * @throws \glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\glook\PecomSdk\Generated\Model\BarcodeType[]|\Psr\Http\Message\ResponseInterface
     */
    public function preregistrationAvailabletypebarcode(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \glook\PecomSdk\Generated\Endpoint\PreregistrationAvailabletypebarcode(), $fetch);
    }
    /**
    * - Максимальное количество грузов в одной заявке для orderType = 0 и 14 — **50**, для orderType = 3 и 4 - **1**.
    - [Общие рекомендации по передаче адреса забора/доставки в запрос при интеграции с транспортной компанией](https://kabinet.pecom.ru/UserData/Api/%D0%9E%D0%B1%D1%89%D0%B8%D0%B5%20%D1%80%D0%B5%D0%BA%D0%BE%D0%BC%D0%B5%D0%BD%D0%B4%D0%B0%D1%86%D0%B8%D0%B8%20%D0%BF%D0%BE%20%D0%BF%D0%B5%D1%80%D0%B5%D0%B4%D0%B0%D1%87%D0%B5%20%D0%B0%D0%B4%D1%80%D0%B5%D1%81%D0%B0%20%D0%B2%20%D0%B7%D0%B0%D0%BF%D1%80%D0%BE%D1%81%20%D0%BF%D1%80%D0%B8%20%D0%B8%D0%BD%D1%82%D0%B5%D0%B3%D1%80%D0%B0%D1%86%D0%B8%D0%B8.docx)
    - Возможность забора груза "день в день" в соответствии с Вашим договором уточняйте у своего закрепленного менеджера или в филиале отправления. Есть ограничения по времени забора и по габаритам, которые зависят от конкретных филиалов. Подача заявок по API на забор груза "день в день" за административными чертами города, а также на праздничные и выходные дни невозможна.
    - **ВАЖНО!** Использование технологии "Упрощенный забор": раздельной подачи "Заказа на машину" и "Заказа на перевозку" (orderType = 4), возможно, только после подключения услуги менеджером со стороны ПЭК. Вызов машины по этой технологии осуществляется только после подачи отдельного "Заказа на машину"
    - При подаче "Заказа на перевозку" (orderType = 4) реквизиты с требованиями к машине забора заполнять необходимо, но они будут проигнорированы, требования к машине имеет смысл передавать при подаче "Заказа на машину". Адрес забора в "Заказе на перевозку" и "Заказе на машину" должны в точности совпадать.
    - ID склада населенного пункта (с отбором по разрешенным габаритам можно получить методом [`/branches/nearestdepartments/`](#tag/branches/POST/branches/nearestdepartments/), возвращающим ближайшие отделения к переданному в запрос адресу. Или самостоятельно выбирать удобное отделение/склад из ответа метода [`/branches/all/`](#tag/branches/POST/branches/all/) (поле `branches[].divisions[].warehouses[].id`). Обращайте внимание на разрешенные типы операций складов и ограничения по габаритам (поле `branches[].divisions[].warehouses[].kindsOfTransportation[].description`, `type`, `operations[]`)
    - Быстро получить ID склада основного отделения любого филиала можно используя метод [`/branches/findzonebyaddress/`](#tag/branches/POST/branches/findzonebyaddress/). В ответе метода реквизит `mainWarehouseId`. Основное отделение является центральным складом конкретного филиала, из которого можно заказать доставку до адреса или ПВЗ, который относится к зоне обслуживаемого филиала.  
    Например, по адресу «Самарская область, город Отрадный», основным является отделение филиала «Самара» по адресу: ул. Земеца, д. 32 литера 354, так как город Отрадный обслуживает филиал «Самара».
    - Указать получателей для грузов можно в объекте `cargos[].receiver`.   - Услуга наложенного платежа `cargos[].services.cashOnDelivery` может быть доступна при заключении договора на оказание данной услуги и для тарифа/продукта EasyWay.
     - Для работы с продуктами/ тарифами EasyWay (12) и ДТС Автоперевозка (7) требуется заключение дополнительного соглашения на соответствующий продукт.
     - Реквизит `"paymentCity"` рекомендуется передавать только в некоторых случаях, описанных ниже. При передаче `"paymentCity"` в нём ожидается указание наименования филиала оплаты. "Филиал оплаты" - филиал ПЭК, в котором плательщик за услугу ПЭК будет получать оригиналы закрывающих бухгалтерских документов: УПД, отчёт по страхованию и т.п. Филиал оплаты также определяет возможность применения к грузу некоторых назначенных контрагенту скидок и сервисов.
    
    `"paymentCity"` обязателен только при указании плательщиком "третьего лица" (type=3)!
    
    Если плательщиками указаны Отправитель (type=1) или Получатель (type=2), то `"paymentCity"` следует передавать ТОЛЬКО в следующих случаях:
       * плательщиком за услугу указан Отправитель (type=1) и Филиал оплаты, отличается от филиала отправления,
       * плательщиком за услугу указан Получатель (type=2) и Филиал оплаты, отличается от филиала получения.
    По умолчанию, если Плательщик - отправитель, то Филиалом оплаты будет указан Филиал отправления; если Плательщик - получатель, то Филиал получения.
    
    Наименование филиала можно получить в ответе методов [`/branches/all/`](#tag/branches/POST/branches/all/) в поле `branches[].title` или [`/branches/findzonebyaddress/`](#tag/branches/POST/branches/findzonebyaddress/) в поле `branchTitle`
    - Замечания по валидации
     * При заказе услуги наложенного платежа `cargos[].services.cashOnDelivery` заявленная стоимость груза `cargos[].services.insurance.cost` устанавливается равной фактической стоимости товара `cargos[].services.cashOnDelivery.actualCost`.
     * Установка соответствующего значения в поле `includeTES` позволяет настраивать включение транспортно-экспедиционных услуг (ТЭУ) в сумму наложенного платежа (НП) для каждого груза или исключение ТЭУ из суммы НП: `true`— за услуги платит отправитель из суммы НП, `false`— за услуги платит получатель сверх суммы НП.
     * При указании идентификатора склада `sender.warehouseId` следует помнить, что он будет проигнорирован, если заказана услуга забор от адреса отправителя.
     * При указании идентификатора склада `cargos[].receiver.warehouseId` следует помнить, что он будет проигнорирован, если заказана услуга доставки.
    - `cargo.services.delivery.avisationDateTime, cargo.services.delivery.dateOfDelivery` При передаче выполняется проверка на возможность выполнения заявок в указанные даты по процессам компании
    - [Архив с примерами минимальных запросов Preregistration (.zip, 7Кб)](https://kabinet.pecom.ru/UserData/Api/%D0%90%D1%80%D1%85%D0%B8%D0%B2%20%D1%81%20%D0%BF%D1%80%D0%B8%D0%BC%D0%B5%D1%80%D0%B0%D0%BC%D0%B8%20%D0%BC%D0%B8%D0%BD%D0%B8%D0%BC%D0%B0%D0%BB%D1%8C%D0%BD%D1%8B%D1%85%20%D0%B7%D0%B0%D0%BF%D1%80%D0%BE%D1%81%D0%BE%D0%B2%20PREREGISTRATION.zip?v=134222797078245462)
    *
    * @param \glook\PecomSdk\Generated\Model\PreregistrationSubmitRequest $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \glook\PecomSdk\Generated\Exception\PreregistrationSubmitBadRequestException
    * @throws \glook\PecomSdk\Generated\Exception\PreregistrationSubmitForbiddenException
    * @throws \glook\PecomSdk\Generated\Exception\PreregistrationSubmitInternalServerErrorException
    * @throws \glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return null|\glook\PecomSdk\Generated\Model\PreregistrationSubmitResponse|\Psr\Http\Message\ResponseInterface
    */
    public function preregistrationSubmit(\glook\PecomSdk\Generated\Model\PreregistrationSubmitRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \glook\PecomSdk\Generated\Endpoint\PreregistrationSubmit($requestBody), $fetch);
    }
    /**
    * В поле `code` (код получателя) нужно сгенерировать `GUID` и передать его в строковом виде.
    Поля `code, title, city, phone` обязательны для заполнения.
    *
    * @param \glook\PecomSdk\Generated\Model\ReceiverAddRequest $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \glook\PecomSdk\Generated\Exception\ReceiversAddBadRequestException
    * @throws \glook\PecomSdk\Generated\Exception\ReceiversAddForbiddenException
    * @throws \glook\PecomSdk\Generated\Exception\ReceiversAddInternalServerErrorException
    * @throws \glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return null|\glook\PecomSdk\Generated\Model\ReceiversSuccessResponse|\Psr\Http\Message\ResponseInterface
    */
    public function receiversAdd(\glook\PecomSdk\Generated\Model\ReceiverAddRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \glook\PecomSdk\Generated\Endpoint\ReceiversAdd($requestBody), $fetch);
    }
    /**
     * 
     *
     * @param \glook\PecomSdk\Generated\Model\ReceiverDeleteRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \glook\PecomSdk\Generated\Exception\ReceiversDeleteBadRequestException
     * @throws \glook\PecomSdk\Generated\Exception\ReceiversDeleteForbiddenException
     * @throws \glook\PecomSdk\Generated\Exception\ReceiversDeleteInternalServerErrorException
     * @throws \glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\glook\PecomSdk\Generated\Model\ReceiversSuccessResponse|\Psr\Http\Message\ResponseInterface
     */
    public function receiversDelete(\glook\PecomSdk\Generated\Model\ReceiverDeleteRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \glook\PecomSdk\Generated\Endpoint\ReceiversDelete($requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \glook\PecomSdk\Generated\Exception\ReceiversListBadRequestException
     * @throws \glook\PecomSdk\Generated\Exception\ReceiversListForbiddenException
     * @throws \glook\PecomSdk\Generated\Exception\ReceiversListInternalServerErrorException
     * @throws \glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\glook\PecomSdk\Generated\Model\ReceiversListResponse|\Psr\Http\Message\ResponseInterface
     */
    public function receiversList(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \glook\PecomSdk\Generated\Endpoint\ReceiversList(), $fetch);
    }
    /**
    * Обязательно указывать в запросе код получателя в поле `code`
    Остальные поля необязательны, следует указывать только значения полей, которые нужно изменить
    Значения необязательных полей `inn, address, person` можно очистить с помощью запроса,
    для этого надо установить соответствующий признак очистки поля (один из: `clearInn, clearAddress, clearPerson`).
    При этом недопустимо в одном запросе указывать и новое значение, и признак очистки для одного и того же поля.
    *
    * @param \glook\PecomSdk\Generated\Model\ReceiverUpdateRequest $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \glook\PecomSdk\Generated\Exception\ReceiversUpdateBadRequestException
    * @throws \glook\PecomSdk\Generated\Exception\ReceiversUpdateForbiddenException
    * @throws \glook\PecomSdk\Generated\Exception\ReceiversUpdateInternalServerErrorException
    * @throws \glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return null|\glook\PecomSdk\Generated\Model\ReceiversSuccessResponse|\Psr\Http\Message\ResponseInterface
    */
    public function receiversUpdate(\glook\PecomSdk\Generated\Model\ReceiverUpdateRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \glook\PecomSdk\Generated\Endpoint\ReceiversUpdate($requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \glook\PecomSdk\Generated\Exception\TypesofdeliveryAllBadRequestException
     * @throws \glook\PecomSdk\Generated\Exception\TypesofdeliveryAllForbiddenException
     * @throws \glook\PecomSdk\Generated\Exception\TypesofdeliveryAllInternalServerErrorException
     * @throws \glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\glook\PecomSdk\Generated\Model\TypesOfDeliveryItem[]|\Psr\Http\Message\ResponseInterface
     */
    public function typesofdeliveryAll(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \glook\PecomSdk\Generated\Endpoint\TypesofdeliveryAll(), $fetch);
    }
    public static function create($httpClient = null, array $additionalPlugins = array())
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = array();
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUrlFactory()->createUri('https://kabinet.pecom.ru/api/v1');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            $plugins[] = new \Http\Client\Common\Plugin\AddPathPlugin($uri);
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $serializer = new \Symfony\Component\Serializer\Serializer(array(new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \glook\PecomSdk\Generated\Normalizer\JaneObjectNormalizer()), array(new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(array('json_decode_associative' => true)))));
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}