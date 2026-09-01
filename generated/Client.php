<?php

namespace glook\PecomSdk\Generated;

use glook\PecomSdk\Generated\Endpoint\AccountingdocumentsListforcounterparty;
use glook\PecomSdk\Generated\Endpoint\AuthCreatetokentoaccessprivatedata;
use glook\PecomSdk\Generated\Endpoint\AuthProfiledata;
use glook\PecomSdk\Generated\Endpoint\BranchesAll;
use glook\PecomSdk\Generated\Endpoint\BranchesChecknocalcservices;
use glook\PecomSdk\Generated\Endpoint\BranchesCheckpickupdate;
use glook\PecomSdk\Generated\Endpoint\BranchesCountry;
use glook\PecomSdk\Generated\Endpoint\BranchesCountrytypeidentitydocument;
use glook\PecomSdk\Generated\Endpoint\BranchesDepartmentslimit;
use glook\PecomSdk\Generated\Endpoint\BranchesFindzonebyaddress;
use glook\PecomSdk\Generated\Endpoint\BranchesFindzonebycoordinates;
use glook\PecomSdk\Generated\Endpoint\BranchesNearestdepartments;
use glook\PecomSdk\Generated\Endpoint\BranchesSuggestaddressofintakeordelivery;
use glook\PecomSdk\Generated\Endpoint\CalculatorCalculateprice;
use glook\PecomSdk\Generated\Endpoint\CalculatorCheckdeliverydate;
use glook\PecomSdk\Generated\Endpoint\CargocontentAll;
use glook\PecomSdk\Generated\Endpoint\CargopickupCheckOrderedPickupType3Car;
use glook\PecomSdk\Generated\Endpoint\CargopickupnetworkSubmit;
use glook\PecomSdk\Generated\Endpoint\CargopickupStatus;
use glook\PecomSdk\Generated\Endpoint\CargopickupSubmit;
use glook\PecomSdk\Generated\Endpoint\CargosBasicstatus;
use glook\PecomSdk\Generated\Endpoint\CargosCancelandreturncargo;
use glook\PecomSdk\Generated\Endpoint\CargosCurrentstatus;
use glook\PecomSdk\Generated\Endpoint\CargosDeliverystatus;
use glook\PecomSdk\Generated\Endpoint\CargosDetails;
use glook\PecomSdk\Generated\Endpoint\CargosdocumentsCargoinvoicebyperiod;
use glook\PecomSdk\Generated\Endpoint\CargosdocumentsGetcontent;
use glook\PecomSdk\Generated\Endpoint\CargosdocumentsOrder;
use glook\PecomSdk\Generated\Endpoint\CargosGetinfoforcedstorage;
use glook\PecomSdk\Generated\Endpoint\CargosListallorderbylogin;
use glook\PecomSdk\Generated\Endpoint\CargosRoutesanddriverinfo;
use glook\PecomSdk\Generated\Endpoint\CargosStatus;
use glook\PecomSdk\Generated\Endpoint\CargosStatusbypositionbarcodes;
use glook\PecomSdk\Generated\Endpoint\CargosStatusfullhistory;
use glook\PecomSdk\Generated\Endpoint\CargosStatustables;
use glook\PecomSdk\Generated\Endpoint\ClientpackingkindAll;
use glook\PecomSdk\Generated\Endpoint\CounterpartsConfirmedaccesstocounterparties;
use glook\PecomSdk\Generated\Endpoint\CounterpartsConnecteddiscountsservicesagreements;
use glook\PecomSdk\Generated\Endpoint\CounterpartsLegalformtypes;
use glook\PecomSdk\Generated\Endpoint\CurrencyAll;
use glook\PecomSdk\Generated\Endpoint\NetshopListreceiveraddresses;
use glook\PecomSdk\Generated\Endpoint\NetshopSubmit;
use glook\PecomSdk\Generated\Endpoint\NotificationCargosubscribe;
use glook\PecomSdk\Generated\Endpoint\OrderCancellation;
use glook\PecomSdk\Generated\Endpoint\OrderPrint;
use glook\PecomSdk\Generated\Endpoint\PreregistrationAvailabletypebarcode;
use glook\PecomSdk\Generated\Endpoint\PreregistrationSubmit;
use glook\PecomSdk\Generated\Endpoint\ReceiversAdd;
use glook\PecomSdk\Generated\Endpoint\ReceiversDelete;
use glook\PecomSdk\Generated\Endpoint\ReceiversList;
use glook\PecomSdk\Generated\Endpoint\ReceiversUpdate;
use glook\PecomSdk\Generated\Endpoint\TypesofdeliveryAll;
use glook\PecomSdk\Generated\Exception\AccountingdocumentsListforcounterpartyBadRequestException;
use glook\PecomSdk\Generated\Exception\AccountingdocumentsListforcounterpartyForbiddenException;
use glook\PecomSdk\Generated\Exception\AccountingdocumentsListforcounterpartyInternalServerErrorException;
use glook\PecomSdk\Generated\Exception\AuthCreatetokentoaccessprivatedataBadRequestException;
use glook\PecomSdk\Generated\Exception\AuthCreatetokentoaccessprivatedataForbiddenException;
use glook\PecomSdk\Generated\Exception\AuthCreatetokentoaccessprivatedataInternalServerErrorException;
use glook\PecomSdk\Generated\Exception\AuthProfiledataBadRequestException;
use glook\PecomSdk\Generated\Exception\AuthProfiledataForbiddenException;
use glook\PecomSdk\Generated\Exception\AuthProfiledataInternalServerErrorException;
use glook\PecomSdk\Generated\Exception\BranchesAllBadRequestException;
use glook\PecomSdk\Generated\Exception\BranchesAllForbiddenException;
use glook\PecomSdk\Generated\Exception\BranchesAllInternalServerErrorException;
use glook\PecomSdk\Generated\Exception\BranchesChecknocalcservicesBadRequestException;
use glook\PecomSdk\Generated\Exception\BranchesChecknocalcservicesForbiddenException;
use glook\PecomSdk\Generated\Exception\BranchesChecknocalcservicesInternalServerErrorException;
use glook\PecomSdk\Generated\Exception\BranchesCheckpickupdateBadRequestException;
use glook\PecomSdk\Generated\Exception\BranchesCheckpickupdateForbiddenException;
use glook\PecomSdk\Generated\Exception\BranchesCheckpickupdateInternalServerErrorException;
use glook\PecomSdk\Generated\Exception\BranchesCountryBadRequestException;
use glook\PecomSdk\Generated\Exception\BranchesCountryForbiddenException;
use glook\PecomSdk\Generated\Exception\BranchesCountryInternalServerErrorException;
use glook\PecomSdk\Generated\Exception\BranchesCountrytypeidentitydocumentBadRequestException;
use glook\PecomSdk\Generated\Exception\BranchesCountrytypeidentitydocumentForbiddenException;
use glook\PecomSdk\Generated\Exception\BranchesCountrytypeidentitydocumentInternalServerErrorException;
use glook\PecomSdk\Generated\Exception\BranchesDepartmentslimitBadRequestException;
use glook\PecomSdk\Generated\Exception\BranchesDepartmentslimitForbiddenException;
use glook\PecomSdk\Generated\Exception\BranchesDepartmentslimitInternalServerErrorException;
use glook\PecomSdk\Generated\Exception\BranchesFindzonebyaddressBadRequestException;
use glook\PecomSdk\Generated\Exception\BranchesFindzonebyaddressForbiddenException;
use glook\PecomSdk\Generated\Exception\BranchesFindzonebyaddressInternalServerErrorException;
use glook\PecomSdk\Generated\Exception\BranchesFindzonebycoordinatesBadRequestException;
use glook\PecomSdk\Generated\Exception\BranchesFindzonebycoordinatesForbiddenException;
use glook\PecomSdk\Generated\Exception\BranchesFindzonebycoordinatesInternalServerErrorException;
use glook\PecomSdk\Generated\Exception\BranchesNearestdepartmentsBadRequestException;
use glook\PecomSdk\Generated\Exception\BranchesNearestdepartmentsForbiddenException;
use glook\PecomSdk\Generated\Exception\BranchesNearestdepartmentsInternalServerErrorException;
use glook\PecomSdk\Generated\Exception\BranchesSuggestaddressofintakeordeliveryBadRequestException;
use glook\PecomSdk\Generated\Exception\BranchesSuggestaddressofintakeordeliveryForbiddenException;
use glook\PecomSdk\Generated\Exception\BranchesSuggestaddressofintakeordeliveryInternalServerErrorException;
use glook\PecomSdk\Generated\Exception\CalculatorCalculatepriceBadRequestException;
use glook\PecomSdk\Generated\Exception\CalculatorCalculatepriceForbiddenException;
use glook\PecomSdk\Generated\Exception\CalculatorCalculatepriceInternalServerErrorException;
use glook\PecomSdk\Generated\Exception\CalculatorCheckdeliverydateBadRequestException;
use glook\PecomSdk\Generated\Exception\CalculatorCheckdeliverydateForbiddenException;
use glook\PecomSdk\Generated\Exception\CalculatorCheckdeliverydateInternalServerErrorException;
use glook\PecomSdk\Generated\Exception\CargocontentAllBadRequestException;
use glook\PecomSdk\Generated\Exception\CargocontentAllForbiddenException;
use glook\PecomSdk\Generated\Exception\CargocontentAllInternalServerErrorException;
use glook\PecomSdk\Generated\Exception\CargopickupCheckOrderedPickupType3CarBadRequestException;
use glook\PecomSdk\Generated\Exception\CargopickupCheckOrderedPickupType3CarForbiddenException;
use glook\PecomSdk\Generated\Exception\CargopickupCheckOrderedPickupType3CarInternalServerErrorException;
use glook\PecomSdk\Generated\Exception\CargopickupnetworkSubmitBadRequestException;
use glook\PecomSdk\Generated\Exception\CargopickupnetworkSubmitForbiddenException;
use glook\PecomSdk\Generated\Exception\CargopickupnetworkSubmitInternalServerErrorException;
use glook\PecomSdk\Generated\Exception\CargopickupStatusBadRequestException;
use glook\PecomSdk\Generated\Exception\CargopickupStatusForbiddenException;
use glook\PecomSdk\Generated\Exception\CargopickupStatusInternalServerErrorException;
use glook\PecomSdk\Generated\Exception\CargopickupSubmitBadRequestException;
use glook\PecomSdk\Generated\Exception\CargopickupSubmitForbiddenException;
use glook\PecomSdk\Generated\Exception\CargopickupSubmitInternalServerErrorException;
use glook\PecomSdk\Generated\Exception\CargosBasicstatusBadRequestException;
use glook\PecomSdk\Generated\Exception\CargosBasicstatusForbiddenException;
use glook\PecomSdk\Generated\Exception\CargosBasicstatusInternalServerErrorException;
use glook\PecomSdk\Generated\Exception\CargosCancelandreturncargoBadRequestException;
use glook\PecomSdk\Generated\Exception\CargosCancelandreturncargoForbiddenException;
use glook\PecomSdk\Generated\Exception\CargosCancelandreturncargoInternalServerErrorException;
use glook\PecomSdk\Generated\Exception\CargosCurrentstatusBadRequestException;
use glook\PecomSdk\Generated\Exception\CargosCurrentstatusForbiddenException;
use glook\PecomSdk\Generated\Exception\CargosCurrentstatusInternalServerErrorException;
use glook\PecomSdk\Generated\Exception\CargosDeliverystatusBadRequestException;
use glook\PecomSdk\Generated\Exception\CargosDeliverystatusForbiddenException;
use glook\PecomSdk\Generated\Exception\CargosDeliverystatusInternalServerErrorException;
use glook\PecomSdk\Generated\Exception\CargosDetailsBadRequestException;
use glook\PecomSdk\Generated\Exception\CargosDetailsForbiddenException;
use glook\PecomSdk\Generated\Exception\CargosDetailsInternalServerErrorException;
use glook\PecomSdk\Generated\Exception\CargosdocumentsCargoinvoicebyperiodBadRequestException;
use glook\PecomSdk\Generated\Exception\CargosdocumentsCargoinvoicebyperiodForbiddenException;
use glook\PecomSdk\Generated\Exception\CargosdocumentsCargoinvoicebyperiodInternalServerErrorException;
use glook\PecomSdk\Generated\Exception\CargosdocumentsGetcontentBadRequestException;
use glook\PecomSdk\Generated\Exception\CargosdocumentsGetcontentForbiddenException;
use glook\PecomSdk\Generated\Exception\CargosdocumentsGetcontentInternalServerErrorException;
use glook\PecomSdk\Generated\Exception\CargosdocumentsOrderBadRequestException;
use glook\PecomSdk\Generated\Exception\CargosdocumentsOrderForbiddenException;
use glook\PecomSdk\Generated\Exception\CargosdocumentsOrderInternalServerErrorException;
use glook\PecomSdk\Generated\Exception\CargosGetinfoforcedstorageBadRequestException;
use glook\PecomSdk\Generated\Exception\CargosGetinfoforcedstorageForbiddenException;
use glook\PecomSdk\Generated\Exception\CargosGetinfoforcedstorageInternalServerErrorException;
use glook\PecomSdk\Generated\Exception\CargosListallorderbyloginBadRequestException;
use glook\PecomSdk\Generated\Exception\CargosListallorderbyloginForbiddenException;
use glook\PecomSdk\Generated\Exception\CargosListallorderbyloginInternalServerErrorException;
use glook\PecomSdk\Generated\Exception\CargosRoutesanddriverinfoBadRequestException;
use glook\PecomSdk\Generated\Exception\CargosRoutesanddriverinfoForbiddenException;
use glook\PecomSdk\Generated\Exception\CargosRoutesanddriverinfoInternalServerErrorException;
use glook\PecomSdk\Generated\Exception\CargosStatusBadRequestException;
use glook\PecomSdk\Generated\Exception\CargosStatusbypositionbarcodesBadRequestException;
use glook\PecomSdk\Generated\Exception\CargosStatusbypositionbarcodesForbiddenException;
use glook\PecomSdk\Generated\Exception\CargosStatusbypositionbarcodesInternalServerErrorException;
use glook\PecomSdk\Generated\Exception\CargosStatusForbiddenException;
use glook\PecomSdk\Generated\Exception\CargosStatusfullhistoryBadRequestException;
use glook\PecomSdk\Generated\Exception\CargosStatusfullhistoryForbiddenException;
use glook\PecomSdk\Generated\Exception\CargosStatusfullhistoryInternalServerErrorException;
use glook\PecomSdk\Generated\Exception\CargosStatusInternalServerErrorException;
use glook\PecomSdk\Generated\Exception\CargosStatustablesBadRequestException;
use glook\PecomSdk\Generated\Exception\CargosStatustablesForbiddenException;
use glook\PecomSdk\Generated\Exception\CargosStatustablesInternalServerErrorException;
use glook\PecomSdk\Generated\Exception\ClientpackingkindAllBadRequestException;
use glook\PecomSdk\Generated\Exception\ClientpackingkindAllForbiddenException;
use glook\PecomSdk\Generated\Exception\ClientpackingkindAllInternalServerErrorException;
use glook\PecomSdk\Generated\Exception\CounterpartsConfirmedaccesstocounterpartiesBadRequestException;
use glook\PecomSdk\Generated\Exception\CounterpartsConfirmedaccesstocounterpartiesForbiddenException;
use glook\PecomSdk\Generated\Exception\CounterpartsConfirmedaccesstocounterpartiesInternalServerErrorException;
use glook\PecomSdk\Generated\Exception\CounterpartsConnecteddiscountsservicesagreementsBadRequestException;
use glook\PecomSdk\Generated\Exception\CounterpartsConnecteddiscountsservicesagreementsForbiddenException;
use glook\PecomSdk\Generated\Exception\CounterpartsConnecteddiscountsservicesagreementsInternalServerErrorException;
use glook\PecomSdk\Generated\Exception\CounterpartsLegalformtypesBadRequestException;
use glook\PecomSdk\Generated\Exception\CounterpartsLegalformtypesForbiddenException;
use glook\PecomSdk\Generated\Exception\CounterpartsLegalformtypesInternalServerErrorException;
use glook\PecomSdk\Generated\Exception\CurrencyAllBadRequestException;
use glook\PecomSdk\Generated\Exception\CurrencyAllForbiddenException;
use glook\PecomSdk\Generated\Exception\CurrencyAllInternalServerErrorException;
use glook\PecomSdk\Generated\Exception\NetshopListreceiveraddressesBadRequestException;
use glook\PecomSdk\Generated\Exception\NetshopListreceiveraddressesForbiddenException;
use glook\PecomSdk\Generated\Exception\NetshopListreceiveraddressesInternalServerErrorException;
use glook\PecomSdk\Generated\Exception\NetshopSubmitBadRequestException;
use glook\PecomSdk\Generated\Exception\NetshopSubmitForbiddenException;
use glook\PecomSdk\Generated\Exception\NetshopSubmitInternalServerErrorException;
use glook\PecomSdk\Generated\Exception\NotificationCargosubscribeBadRequestException;
use glook\PecomSdk\Generated\Exception\NotificationCargosubscribeForbiddenException;
use glook\PecomSdk\Generated\Exception\NotificationCargosubscribeInternalServerErrorException;
use glook\PecomSdk\Generated\Exception\OrderCancellationBadRequestException;
use glook\PecomSdk\Generated\Exception\OrderCancellationForbiddenException;
use glook\PecomSdk\Generated\Exception\OrderCancellationInternalServerErrorException;
use glook\PecomSdk\Generated\Exception\OrderPrintBadRequestException;
use glook\PecomSdk\Generated\Exception\OrderPrintForbiddenException;
use glook\PecomSdk\Generated\Exception\OrderPrintInternalServerErrorException;
use glook\PecomSdk\Generated\Exception\PreregistrationAvailabletypebarcodeBadRequestException;
use glook\PecomSdk\Generated\Exception\PreregistrationAvailabletypebarcodeForbiddenException;
use glook\PecomSdk\Generated\Exception\PreregistrationAvailabletypebarcodeInternalServerErrorException;
use glook\PecomSdk\Generated\Exception\PreregistrationSubmitBadRequestException;
use glook\PecomSdk\Generated\Exception\PreregistrationSubmitForbiddenException;
use glook\PecomSdk\Generated\Exception\PreregistrationSubmitInternalServerErrorException;
use glook\PecomSdk\Generated\Exception\ReceiversAddBadRequestException;
use glook\PecomSdk\Generated\Exception\ReceiversAddForbiddenException;
use glook\PecomSdk\Generated\Exception\ReceiversAddInternalServerErrorException;
use glook\PecomSdk\Generated\Exception\ReceiversDeleteBadRequestException;
use glook\PecomSdk\Generated\Exception\ReceiversDeleteForbiddenException;
use glook\PecomSdk\Generated\Exception\ReceiversDeleteInternalServerErrorException;
use glook\PecomSdk\Generated\Exception\ReceiversListBadRequestException;
use glook\PecomSdk\Generated\Exception\ReceiversListForbiddenException;
use glook\PecomSdk\Generated\Exception\ReceiversListInternalServerErrorException;
use glook\PecomSdk\Generated\Exception\ReceiversUpdateBadRequestException;
use glook\PecomSdk\Generated\Exception\ReceiversUpdateForbiddenException;
use glook\PecomSdk\Generated\Exception\ReceiversUpdateInternalServerErrorException;
use glook\PecomSdk\Generated\Exception\TypesofdeliveryAllBadRequestException;
use glook\PecomSdk\Generated\Exception\TypesofdeliveryAllForbiddenException;
use glook\PecomSdk\Generated\Exception\TypesofdeliveryAllInternalServerErrorException;
use glook\PecomSdk\Generated\Exception\UnexpectedStatusCodeException;
use glook\PecomSdk\Generated\Model\AccountingDocumentListResponse;
use glook\PecomSdk\Generated\Model\AccountingdocumentsListforcounterpartyPostBody;
use glook\PecomSdk\Generated\Model\AuthProfileDataResponse;
use glook\PecomSdk\Generated\Model\AuthTokenResponse;
use glook\PecomSdk\Generated\Model\BarcodeType;
use glook\PecomSdk\Generated\Model\BasicStatusResponse;
use glook\PecomSdk\Generated\Model\BranchesAddressRequest;
use glook\PecomSdk\Generated\Model\BranchesAllPostBody;
use glook\PecomSdk\Generated\Model\BranchesAllPostResponse200;
use glook\PecomSdk\Generated\Model\BranchesChecknocalcservicesPostBody;
use glook\PecomSdk\Generated\Model\BranchesChecknocalcservicesPostResponse200Item;
use glook\PecomSdk\Generated\Model\BranchesCheckpickupdatePostBody;
use glook\PecomSdk\Generated\Model\BranchesCheckpickupdatePostResponse200;
use glook\PecomSdk\Generated\Model\BranchesCountrytypeidentitydocumentPostBody;
use glook\PecomSdk\Generated\Model\BranchesCountrytypeidentitydocumentPostResponse200;
use glook\PecomSdk\Generated\Model\BranchesDepartmentslimitPostBody;
use glook\PecomSdk\Generated\Model\BranchesDepartmentslimitPostResponse200;
use glook\PecomSdk\Generated\Model\BranchesFindzonebyaddressPostResponse200;
use glook\PecomSdk\Generated\Model\BranchesFindzonebycoordinatesPostBodyItem;
use glook\PecomSdk\Generated\Model\BranchesNearestdepartmentsPostBody;
use glook\PecomSdk\Generated\Model\BranchesNearestdepartmentsPostResponse200;
use glook\PecomSdk\Generated\Model\CalculatePriceRequest;
use glook\PecomSdk\Generated\Model\CalculatePriceResponse;
use glook\PecomSdk\Generated\Model\CancelAndReturnResponse;
use glook\PecomSdk\Generated\Model\CargoContentItem;
use glook\PecomSdk\Generated\Model\CargoDetailsResponse;
use glook\PecomSdk\Generated\Model\CargoPickupCheckOrderedPickupType3CarRequest;
use glook\PecomSdk\Generated\Model\CargoPickupCheckOrderedPickupType3CarResponse;
use glook\PecomSdk\Generated\Model\CargoPickupNetworkSubmitRequest;
use glook\PecomSdk\Generated\Model\CargoPickupNetworkSubmitResponse;
use glook\PecomSdk\Generated\Model\CargoPickupStatusError;
use glook\PecomSdk\Generated\Model\CargoPickupStatusItem;
use glook\PecomSdk\Generated\Model\CargoPickupStatusRequest;
use glook\PecomSdk\Generated\Model\CargoPickupSubmitRequest;
use glook\PecomSdk\Generated\Model\CargoPickupSubmitResponse;
use glook\PecomSdk\Generated\Model\CargosBasicStatusRequest;
use glook\PecomSdk\Generated\Model\CargosCancelAndReturnRequest;
use glook\PecomSdk\Generated\Model\CargosCurrentStatusRequest;
use glook\PecomSdk\Generated\Model\CargosDeliveryStatusRequest;
use glook\PecomSdk\Generated\Model\CargosDetailsRequest;
use glook\PecomSdk\Generated\Model\CargosdocumentsCargoinvoicebyperiodRequest;
use glook\PecomSdk\Generated\Model\CargosdocumentsGetcontentErrorResponse;
use glook\PecomSdk\Generated\Model\CargosdocumentsGetcontentRequest;
use glook\PecomSdk\Generated\Model\CargosdocumentsGetcontentSuccessResponse;
use glook\PecomSdk\Generated\Model\CargosdocumentsOrderRequest;
use glook\PecomSdk\Generated\Model\CargosdocumentsOrderResponse;
use glook\PecomSdk\Generated\Model\CargosForcedStorageRequest;
use glook\PecomSdk\Generated\Model\CargosListAllOrderByLoginRequest;
use glook\PecomSdk\Generated\Model\CargosRoutesAndDriverInfoRequest;
use glook\PecomSdk\Generated\Model\CargosStatusByPositionBarcodesRequest;
use glook\PecomSdk\Generated\Model\CargosStatusFullHistoryRequest;
use glook\PecomSdk\Generated\Model\CargosStatusRequest;
use glook\PecomSdk\Generated\Model\CargosStatusResponse;
use glook\PecomSdk\Generated\Model\CheckDeliveryDateRequest;
use glook\PecomSdk\Generated\Model\ClientPackingKindItem;
use glook\PecomSdk\Generated\Model\ConfirmedAccessToCounterpartiesRequest;
use glook\PecomSdk\Generated\Model\ConfirmedAccessToCounterparty;
use glook\PecomSdk\Generated\Model\ConnectedDiscountsServicesAgreementsRequest;
use glook\PecomSdk\Generated\Model\ConnectedDiscountsServicesAgreementsResponse;
use glook\PecomSdk\Generated\Model\Country;
use glook\PecomSdk\Generated\Model\CurrencyItem;
use glook\PecomSdk\Generated\Model\CurrentStatusResponse;
use glook\PecomSdk\Generated\Model\DeliveryDateResult;
use glook\PecomSdk\Generated\Model\DeliveryStatusItem;
use glook\PecomSdk\Generated\Model\ForcedStorageItem;
use glook\PecomSdk\Generated\Model\LegalFormType;
use glook\PecomSdk\Generated\Model\ListAllOrderResponse;
use glook\PecomSdk\Generated\Model\NetshopReceiver;
use glook\PecomSdk\Generated\Model\NetshopSubmitRequest;
use glook\PecomSdk\Generated\Model\NetshopSubmitResponse;
use glook\PecomSdk\Generated\Model\NotificationCargoSubscribeRequest;
use glook\PecomSdk\Generated\Model\NotificationCargoSubscribeResponse;
use glook\PecomSdk\Generated\Model\OrderCancellationResult;
use glook\PecomSdk\Generated\Model\OrderPrintRequest;
use glook\PecomSdk\Generated\Model\PreregistrationSubmitRequest;
use glook\PecomSdk\Generated\Model\PreregistrationSubmitResponse;
use glook\PecomSdk\Generated\Model\ReceiverAddRequest;
use glook\PecomSdk\Generated\Model\ReceiverDeleteRequest;
use glook\PecomSdk\Generated\Model\ReceiversListResponse;
use glook\PecomSdk\Generated\Model\ReceiversSuccessResponse;
use glook\PecomSdk\Generated\Model\ReceiverUpdateRequest;
use glook\PecomSdk\Generated\Model\RouteMapAddress;
use glook\PecomSdk\Generated\Model\StatusByBarcodeResponse;
use glook\PecomSdk\Generated\Model\StatusHistoryItem;
use glook\PecomSdk\Generated\Model\StatusTableItem;
use glook\PecomSdk\Generated\Model\SuggestAddressResponse;
use glook\PecomSdk\Generated\Model\TypesOfDeliveryItem;
use glook\PecomSdk\Generated\Model\ZoneByCoordinate;
use glook\PecomSdk\Generated\Normalizer\JaneObjectNormalizer;
use Http\Client\Common\Plugin\AddHostPlugin;
use Http\Client\Common\Plugin\AddPathPlugin;
use Http\Client\Common\PluginClient;
use Http\Discovery\Psr17FactoryDiscovery;
use Http\Discovery\Psr18ClientDiscovery;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\Encoder\JsonDecode;
use Symfony\Component\Serializer\Encoder\JsonEncode;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Serializer;

class Client extends Runtime\Client\Client
{
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|AuthTokenResponse|ResponseInterface
     *
     * @throws AuthCreatetokentoaccessprivatedataBadRequestException
     * @throws AuthCreatetokentoaccessprivatedataForbiddenException
     * @throws AuthCreatetokentoaccessprivatedataInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    public function authCreatetokentoaccessprivatedata(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new AuthCreatetokentoaccessprivatedata(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|AuthProfileDataResponse|ResponseInterface
     *
     * @throws AuthProfiledataBadRequestException
     * @throws AuthProfiledataForbiddenException
     * @throws AuthProfiledataInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    public function authProfiledata(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new AuthProfiledata(), $fetch);
    }

    /**
     * Метод позволяет получить список бухгалтерских документов за указанный период по контрагенту из своего ЛК ПЭК и по указанному филиалу оплаты
     * - Максимальная длительность периода для запроса — **60** календарных дней.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|AccountingDocumentListResponse|ResponseInterface
     *
     * @throws AccountingdocumentsListforcounterpartyBadRequestException
     * @throws AccountingdocumentsListforcounterpartyForbiddenException
     * @throws AccountingdocumentsListforcounterpartyInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    public function accountingdocumentsListforcounterparty(AccountingdocumentsListforcounterpartyPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new AccountingdocumentsListforcounterparty($requestBody), $fetch);
    }

    /**
     * ID склада отправления/назначения в методе расчёта стоимости [`/calculator/calculateprice/`](#tag/calculator/POST/calculator/calculateprice/) (параметр `senderWarehouseId` / `receiverWarehouseId`) и в методах подачи заявок (параметр `WarehouseId`) можно получить из ответа метода в поле `branches[].divisions[].warehouses[].id`.
     * НЕ ПЕРЕДАВАЙТЕ ДРУГИХ ID. При подаче любого другого ID из ответа этого метода, запрос будет отклонён.
     * - ОБЯЗАТЕЛЬНО учитывайте доступность подбираемых складов по габаритам и разрешенных для них операций. Ограничения по габаритам конкретного склада можно получить из ответа метода в полях `branches[].divisions[].warehouses[].maxWeight`, `maxVolume`, `maxWeightPerPlace`, `maxDimension`. Разрешённые операции можно получить из ответа метода в поле `branches[].divisions[].kindsOfTransportation[]`.
     * - Обращаем Ваше внимание, что географическая структура отделений ПЭК (города и отделения в них, обслуживаемые конкретным филиалом), отличается от структуры финансовой подчинённости.
     *
     * Географическая структура — это какой филиал обслуживает какие города (`branches[].cities[]`) и отделения (`branches[].cities[].divisions[]`). При этом в структуре приведены основные крупные населенные пункты, в то время как доставка до адреса может осуществлена и в мелкие населенные пункты, не указанные в ответе метода. Для определения полной географии перевозки ПЭК рекомендуется использовать методы [`/branches/findzonebyaddress/`](#tag/branches/POST/branches/findzonebyaddress/), [`/branches/findzonebycoordinates/`](#tag/branches/POST/branches/findzonebycoordinates/). Ближайшие к адресу подходящие склады можно выбрать методом: [`/branches/nearestdepartments/`](#tag/branches/POST/branches/nearestdepartments/).
     * Финансовая структура — внутренняя организационная структура ПЭК, используемая для выбора филиала оплаты услуги в методах подачи заявок (реквизит `"paymentCity"`)."."Филиал оплаты" — филиал ПЭК, в котором плательщик за услугу ПЭК будет получать оригиналы закрывающих бухгалтерских документов: УПД, отчёт по страхованию и т.п. Указанные документы можно получить в любом собственном отделении ПЭК (не ПВЗ, см. описание реквизита `"departmentTypeId"`), относящемуся к указанному филиалу оплаты (`branches[].divisions[].warehouses[]`). Филиал оплаты также определяет возможность применения к грузу некоторых назначенных контрагенту скидок и сервисов.
     * Таким образом, у одного филиала могут быть различными списки обслуживаемых отделений по географической структуре: `branches[].cities[].divisions[]` и относящихся к нему отделений по финансовой структуре: `branches[].divisions[]`.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|BranchesAllPostResponse200|ResponseInterface
     *
     * @throws BranchesAllBadRequestException
     * @throws BranchesAllForbiddenException
     * @throws BranchesAllInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    public function branchesAll(BranchesAllPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new BranchesAll($requestBody), $fetch);
    }

    /**
     * Метод на текущий момент позволяет проверить только услуги Наложенный платеж: GUID = 739293fd-edc7-495d-9e56-6f61ad39bb8c и Выдача по СМС (упрощенная выдача): GUID = ffb40421-4761-11e8-80c9-00155d668927 по конкретному направлению перевозки.
     * - Обращаем ваше внимание, что метод проверяет доступность услуг только по географии. Для проверки возможности использования данных услуг конкретными отправителями и их условия необходимо использовать метод [`/connecteddiscountsservicesagreements/`](#tag/counterparts/POST/counterparts/connecteddiscountsservicesagreements/).
     * - На вход данного метода ожидается ID филиалов отправления и назначения, которые можно получить из метода расчета стоимости или из методов получения географии, при этом для отделений филиал необходимо брать из организационной структуры.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|BranchesChecknocalcservicesPostResponse200Item[]|ResponseInterface
     *
     * @throws BranchesChecknocalcservicesBadRequestException
     * @throws BranchesChecknocalcservicesForbiddenException
     * @throws BranchesChecknocalcservicesInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    public function branchesChecknocalcservices(BranchesChecknocalcservicesPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new BranchesChecknocalcservices($requestBody), $fetch);
    }

    /**
     * Метод позволяет определить только возможность забора груза в указанную дату и выводит массив доступных дат до и после указанной даты.
     * - Если необходимо проверить, действует ли льготный тариф на забор по запрошенному адресу в указанную дату, рекомендуем использовать метод [`/calculator/checkdeliverydate/.`](#tag/calculator/POST/calculator/checkdeliverydate/).
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|BranchesCheckpickupdatePostResponse200|ResponseInterface
     *
     * @throws BranchesCheckpickupdateBadRequestException
     * @throws BranchesCheckpickupdateForbiddenException
     * @throws BranchesCheckpickupdateInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    public function branchesCheckpickupdate(BranchesCheckpickupdatePostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new BranchesCheckpickupdate($requestBody), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Country[]|ResponseInterface
     *
     * @throws BranchesCountryBadRequestException
     * @throws BranchesCountryForbiddenException
     * @throws BranchesCountryInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    public function branchesCountry(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new BranchesCountry(), $fetch);
    }

    /**
     * Возвращает допустимые документы, удостоверяющие личность, для страны отправления/получения.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|BranchesCountrytypeidentitydocumentPostResponse200|ResponseInterface
     *
     * @throws BranchesCountrytypeidentitydocumentBadRequestException
     * @throws BranchesCountrytypeidentitydocumentForbiddenException
     * @throws BranchesCountrytypeidentitydocumentInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    public function branchesCountrytypeidentitydocument(BranchesCountrytypeidentitydocumentPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new BranchesCountrytypeidentitydocument($requestBody), $fetch);
    }

    /**
     * Метод возвращает максимально-допустимые значения ВГХ груза для тарифа "Express Автоперевозка" между указанными филиалами или складами. Результат возвращается в виде структуры.
     * - Метод не проверяет наличие маршрута перевозки между филиалами.
     * - Если возвращается пустой ответ — значит для тарифа "Express Автоперевозка" нет возможности перевозить груз между указанными филиалами (складами).
     * - Идентификаторы филиалов и складов отправителя/ получателя можно получить методом [`/branches/nearestdepartments/`](#tag/branches/POST/branches/nearestdepartments/) (в ответе метода `freeDepartments.branchId` и `freeDepartments.warehouseId`).
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|BranchesDepartmentslimitPostResponse200|ResponseInterface
     *
     * @throws BranchesDepartmentslimitBadRequestException
     * @throws BranchesDepartmentslimitForbiddenException
     * @throws BranchesDepartmentslimitInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    public function branchesDepartmentslimit(BranchesDepartmentslimitPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new BranchesDepartmentslimit($requestBody), $fetch);
    }

    /**
     * Метод по строке адреса выводит филиал, к которому относится указанный адрес, наименование тарифной зоны, ID склада основного отделения филиала. Составляющие части адреса возвращаются в виде массива: страна, регион, населенный пункт, улица, дом. Если возвращается пустой ответ — значит зона адреса не обслуживается ПЭК.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|BranchesFindzonebyaddressPostResponse200|ResponseInterface
     *
     * @throws BranchesFindzonebyaddressBadRequestException
     * @throws BranchesFindzonebyaddressForbiddenException
     * @throws BranchesFindzonebyaddressInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    public function branchesFindzonebyaddress(BranchesAddressRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new BranchesFindzonebyaddress($requestBody), $fetch);
    }

    /**
     * Метод по координатам ищет филиал и наименование тарифной зоны, к которой он привязан. Результат возвращается в виде массива. Если возвращается пустой ответ — значит зона адреса не обслуживается ПЭК.
     *
     * @param BranchesFindzonebycoordinatesPostBodyItem[] $requestBody
     * @param string                                      $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|ResponseInterface|ZoneByCoordinate[]
     *
     * @throws BranchesFindzonebycoordinatesBadRequestException
     * @throws BranchesFindzonebycoordinatesForbiddenException
     * @throws BranchesFindzonebycoordinatesInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    public function branchesFindzonebycoordinates(array $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new BranchesFindzonebycoordinates($requestBody), $fetch);
    }

    /**
     * Метод предназначен для организации подбора ближайших к клиенту (адресу клиента) отделений для приема/выдачи грузов, которые подойдут для конкретного груза. Или подбора отделений в конкретном городе.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|BranchesNearestdepartmentsPostResponse200|ResponseInterface
     *
     * @throws BranchesNearestdepartmentsBadRequestException
     * @throws BranchesNearestdepartmentsForbiddenException
     * @throws BranchesNearestdepartmentsInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    public function branchesNearestdepartments(BranchesNearestdepartmentsPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new BranchesNearestdepartments($requestBody), $fetch);
    }

    /**
     * Метод позволяет в ИТ системе реализовать быстрый подбор адреса забора/ доставки по аналогии с тем, как это сделано на сайте pecom.ru при подаче заявки. На вход дается строка с частью адреса, в ответе выводятся наиболее похожие варианты. При этом перечень вариантов содержит только адреса зоны доставки/ забора ПЭК.
     * В некоторых случаях отсутствие вариантов адресов может говорить только о том, что адреса еще нет в базе, но забор/ доставка по адресу возможны, если есть забор/ доставка на соседние улицы/ дома.
     * - Не используйте данный метод для проверки доступности адреса, т.к. есть ограничения по числу запросов для всех пользователей в сутки.
     * - Для проверки доступности адреса Забора и Доставки используйте метод [/BRANCHES/FINDZONEBYADDRESS/](#tag/branches/POST/branches/findzonebyaddress/). Правильность адреса можно смотреть в ответе метода /FINDZONEBYADDRESS/ в блоке GeoData. Address. formatted.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|ResponseInterface|SuggestAddressResponse
     *
     * @throws BranchesSuggestaddressofintakeordeliveryBadRequestException
     * @throws BranchesSuggestaddressofintakeordeliveryForbiddenException
     * @throws BranchesSuggestaddressofintakeordeliveryInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    public function branchesSuggestaddressofintakeordelivery(BranchesAddressRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new BranchesSuggestaddressofintakeordelivery($requestBody), $fetch);
    }

    /**
     * - [Общие рекомендации по передаче адреса забора/доставки в запрос при интеграции с транспортной компанией](https://kabinet.pecom.ru/UserData/Api/%D0%9E%D0%B1%D1%89%D0%B8%D0%B5%20%D1%80%D0%B5%D0%BA%D0%BE%D0%BC%D0%B5%D0%BD%D0%B4%D0%B0%D1%86%D0%B8%D0%B8%20%D0%BF%D0%BE%20%D0%BF%D0%B5%D1%80%D0%B5%D0%B4%D0%B0%D1%87%D0%B5%20%D0%B0%D0%B4%D1%80%D0%B5%D1%81%D0%B0%20%D0%B2%20%D0%B7%D0%B0%D0%BF%D1%80%D0%BE%D1%81%20%D0%BF%D1%80%D0%B8%20%D0%B8%D0%BD%D1%82%D0%B5%D0%B3%D1%80%D0%B0%D1%86%D0%B8%D0%B8.docx)
     * - Выбор адреса отправления и адреса получения осуществляется по следующей логике: если заказана услуга забора/доставки, то расчет стоимости ведется по координатам напрямую переданным в запрос (параметр `"coordinates"` блоков `pickup` / `delivery`), или координатам, полученным по переданной строке адреса (параметр `"address"` блоков `pickup` / `delivery`). Все прочие параметры определяющие адреса будут проигнорированы.
     * - Если услуга забора/доставки не заказана, то необходимо передавать ID склада отправления/назначения (параметр `senderWarehouseId` / `receiverWarehouseId`).
     * - ID склада населенного пункта (с отбором по разрешенным габаритам можно получить методом [`/branches/nearestdepartments`](#tag/branches/POST/branches/nearestdepartments/), возвращающим ближайшие отделения к переданному в запрос адресу. Или самостоятельно выбирать удобное отделение/склад из ответа метода [`/branches/all`](#tag/branches/POST/branches/all/) (поле `branches[].divisions[].warehouses[].id`), при этом необходимо учитывать доступность складов по габаритам и разрешенных для них операций.
     * - Быстро получить ID склада основного отделения любого филиала можно используя метод [`/branches/findzonebyaddress`](#tag/branches/POST/branches/findzonebyaddress/). в ответе метода реквизит `mainWarehouseId`. Основное отделение является центральным складом конкретного филиала, из которого можно дозаказать доставку до адреса или ПВЗ, который относится к зоне обслуживаемого филиала.
     * Например, по адресу «Самарская область, город Отрадный», основным является отделение филиала «Самара» по адресу: ул. Земеца, д. 32 литера 354, так как город Отрадный обслуживает филиал «Самара».
     * - Объекты со стоимостью услуг для разных видов перевозки возвращаются отдельно в массиве `transfers`.
     * Тип перевозки указывается в поле объекта `transfers[].type`; 3 соответствует автоперевозке, 1 — авиа.
     * - Сроки авиаперевозки могут указываться несколькими значениями, для разных вариантов времени сдачи груза на склад отправителем.
     * В ответе метод возвращает массив данных по времени приемки груза — `transportingTimes`.
     * Количество элементов в массивах сроков перевозки `commonTerms[].transporting` и
     * перевозки с доставкой `commonTerms[].transportingWithDelivery` равно количеству элементов в данном массиве `transportingTimes`.
     * Чтобы определить ориентировочный срок доставки, нужно сначала выбрать элемент массива данных по времени приемки груза `transportingTimes` со временем, ранее которого груз был сдан на склад.
     * После этого ориентировочный срок доставки можно смотреть в соответствующих элементах массивов `commonTerms[].transporting` и `commonTerms[].transportingWithDelivery`.
     * - В массиве `cargos` нужно передавать информацию по каждому грузоместу груза, заполняя несколько элементов массива.
     * Каждый элемент массива будет восприниматься, как отдельное грузоместо одного груза.
     * Если Вам известны габариты и вес каждого грузоместа, то передавайте Длину, Ширину, Высоту и Вес.
     * Если Вам известны только общие габариты всего груза (Объём, Вес, Максимальный габарит и количество мест) и не известны вес и габариты каждого грузоместа, то передавайте на вход столько элементов массива - сколько мест.
     * В каждом элементе массива указывайте средние Вес и Объём грузоместа (разделите общий вес груза и общий объём груза на кол-во мест) и Максимальный габарит грузоместа.
     * Важно! Признак `isHP` в калькуляторе рассчитывается всегда по грузу в целом - если хотя бы у одного грузоместа значение будет true, то защитная транспортировочная упаковка будет рассчитана для всего груза.
     * - Параметр `needReturnDocuments` необязательный. Выберите, если необходим возврат документов с подписью и печатью получателя, подтверждающих, что груз им получен. [Подробнее](https://pecom.ru/services/additional-features/vozvrat-dokumentov/).
     * - Параметр `needArrangeTransportationDocuments` необязательный. Выберите, чтобы расчитать передачу вместе с грузом комплекта сопроводительных документов, которые будут выданы грузополучателю вместе с грузом. [Подробнее](https://pecom.ru/services/additional-features/perevozka-soprovoditelnykh-dokumentov/).
     * - Если по направлению, продукту и прочим параметрам по грузу будут застрахованы сроки перевозки и сам груз, то в ответе будет услуга с названием в поле info: "Страхование груза и срока", если будет застрахован только груз, то будет название "Страхование".
     * - [Архив с примерами минимальных запросов CalculatePrice (.zip, 2Кб)](https://kabinet.pecom.ru/UserData/Api/%D0%90%D1%80%D1%85%D0%B8%D0%B2%20%D1%81%20%D0%BF%D1%80%D0%B8%D0%BC%D0%B5%D1%80%D0%B0%D0%BC%D0%B8%20%D0%BC%D0%B8%D0%BD%D0%B8%D0%BC%D0%B0%D0%BB%D1%8C%D0%BD%D1%8B%D1%85%20%D0%B7%D0%B0%D0%BF%D1%80%D0%BE%D1%81%D0%BE%D0%B2%20CalculatePrice.zip?v=134222797029825469).
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|CalculatePriceResponse|ResponseInterface
     *
     * @throws CalculatorCalculatepriceBadRequestException
     * @throws CalculatorCalculatepriceForbiddenException
     * @throws CalculatorCalculatepriceInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    public function calculatorCalculateprice(CalculatePriceRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new CalculatorCalculateprice($requestBody), $fetch);
    }

    /**
     * Возвращает ближайшие даты и интервалы времени по дате забора/доставки от даты запроса `requestDateTime`.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|DeliveryDateResult[]|ResponseInterface
     *
     * @throws CalculatorCheckdeliverydateBadRequestException
     * @throws CalculatorCheckdeliverydateForbiddenException
     * @throws CalculatorCheckdeliverydateInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    public function calculatorCheckdeliverydate(CheckDeliveryDateRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new CalculatorCheckdeliverydate($requestBody), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|CargoContentItem[]|ResponseInterface
     *
     * @throws CargocontentAllBadRequestException
     * @throws CargocontentAllForbiddenException
     * @throws CargocontentAllInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    public function cargocontentAll(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new CargocontentAll(), $fetch);
    }

    /**
     * Метод работает при подключеной услуге "Упрощенный заказ машины" и возвращает ранее отправленные методом [`/cargopickup/submit/`](#tag/cargopickup/POST/cargopickup/submit/) заказы на машины (со значением параметра "pickupType": 3). Может использоваться для проверки ранее поданного заказа на машину и получения его статуса.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|CargoPickupCheckOrderedPickupType3CarResponse|ResponseInterface
     *
     * @throws CargopickupCheckOrderedPickupType3CarBadRequestException
     * @throws CargopickupCheckOrderedPickupType3CarForbiddenException
     * @throws CargopickupCheckOrderedPickupType3CarInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    public function cargopickupCheckOrderedPickupType3Car(CargoPickupCheckOrderedPickupType3CarRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new CargopickupCheckOrderedPickupType3Car($requestBody), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return CargoPickupStatusError|CargoPickupStatusItem[]|ResponseInterface
     *
     * @throws CargopickupStatusBadRequestException
     * @throws CargopickupStatusForbiddenException
     * @throws CargopickupStatusInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    public function cargopickupStatus(CargoPickupStatusRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new CargopickupStatus($requestBody), $fetch);
    }

    /**
     * - [Общие рекомендации по передаче адреса забора/доставки в запрос при интеграции с транспортной компанией](https://kabinet.pecom.ru/UserData/Api/%D0%9E%D0%B1%D1%89%D0%B8%D0%B5%20%D1%80%D0%B5%D0%BA%D0%BE%D0%BC%D0%B5%D0%BD%D0%B4%D0%B0%D1%86%D0%B8%D0%B8%20%D0%BF%D0%BE%20%D0%BF%D0%B5%D1%80%D0%B5%D0%B4%D0%B0%D1%87%D0%B5%20%D0%B0%D0%B4%D1%80%D0%B5%D1%81%D0%B0%20%D0%B2%20%D0%B7%D0%B0%D0%BF%D1%80%D0%BE%D1%81%20%D0%BF%D1%80%D0%B8%20%D0%B8%D0%BD%D1%82%D0%B5%D0%B3%D1%80%D0%B0%D1%86%D0%B8%D0%B8.docx)
     * - **ВАЖНО!** Использование технологии "Упрощенный забор": раздельной подачи "Заказа на машину" и "Заказа на перевозку" (pickupType = 4), возможно, только после подключения услуги менеджером со стороны ПЭК. Вызов машины по этой технологии осуществляется только после подачи отдельного "Заказа на машину".
     * - При подаче "Заказа на перевозку" (pickupType = 4) реквизиты с требованиями к машине забора заполнять необходимо, но они будут проигнорированы, требования к машине имеет смысл передавать при подаче "Заказа на машину". Адрес забора в "Заказе на перевозку" и "Заказе на машину" должны в точности совпадать.
     * - Возможность забора груза "день в день" в соответствии с Вашим договором уточняйте у своего закрепленного менеджера или в филиале отправления. Есть ограничения по времени забора и по габаритам, которые зависят от конкретных филиалов. Подача заявок по API на забор груза "день в день" за административными чертами города, а также на праздничные и выходные дни невозможна.
     * - Максимальный размер одного файла вложения: **2,00 Мб**, максимальный размер всех файлов: **10,00 Мб**, максимальное количество файлов: **10**
     * - Услуга наложенного платежа `services.cashOnDelivery` может быть доступна при заключении договора на оказание данной услуги и для тарифа/продукта EasyWay.
     * - Для работы с тарифом EasyWay требуется заключение дополнительного соглашения.
     * - Установка соответствующего значения в поле `includeTES` позволяет настраивать включение транспортно-экспедиционных услуг (ТЭУ) в сумму наложенного платежа (НП) для каждого груза или исключение ТЭУ из суммы НП: `true`— за услуги платит отправитель из суммы НП, `false`— за услуги платит получатель сверх суммы НП
     * - ID склада населенного пункта (с отбором по разрешенным габаритам можно получить методом [`/branches/nearestdepartments/`](#tag/branches/POST/branches/nearestdepartments/), возвращающим ближайшие отделения к переданному в запрос адресу. Или самостоятельно выбирать удобное отделение/склад из ответа метода [`/branches/all/`](#tag/branches/POST/branches/all/) (поле `branches[].divisions[].warehouses[].id`). Обращайте внимание на разрешенные типы операций складов и ограничения по габаритам (поле `branches[].divisions[].warehouses[].kindsOfTransportation[].description`, `type`, `operations[]`)
     * - Быстро получить ID склада основного отделения любого филиала можно используя метод [`/branches/findzonebyaddress/`](#tag/branches/POST/branches/findzonebyaddress/). В ответе метода реквизит `mainWarehouseId`. Основное отделение является центральным складом конкретного филиала, из которого можно заказать доставку до адреса или ПВЗ, который относится к зоне обслуживаемого филиала.
     * - При указании идентификатора склада `receiver.warehouseId` следует помнить, что он будет проигнорирован, если заказана услуга доставки
     * - `isDocumentsReturn`— при заказанной услуге "Возврат документов" создается отдельный груз "Возвратные документы", который направляется в отделение-отправитель. При необходимости клиент может отдельно заказать доставку этого груза по нужному адресу
     * - `common.applicationDate, receiver.avisationDateTime, receiver.dateOfDelivery` При передаче выполняется проверка на возможность выполнения заявок в указанные даты по процессам компании
     * - `receiver.identityCard.type` в значении 0 (Без предоставления документа) подразумевает, что идентификация получателя (доступна по договору оферты) будет произведена с использованием кода СМС. Ограничения на использование данного способа идентификации описаны [здесь](https://pecom.ru/services/additional-features/upr-vidacha/)
     * - Реквизит `"paymentCity"` рекомендуется передавать только в некоторых случаях, описанных ниже. При передаче `"paymentCity"` в нём ожидается указание наименования филиала оплаты. "Филиал оплаты" - филиал ПЭК, в котором плательщик за услугу ПЭК будет получать оригиналы закрывающих бухгалтерских документов: УПД, отчёт по страхованию и т.п. Филиал оплаты также определяет возможность применения к грузу некоторых назначенных контрагенту скидок и сервисов.
     *
     * `"paymentCity"` обязателен только при указании плательщиком "третьего лица" (`type=3`)!
     *
     * Если плательщиками указаны Отправитель (`type=1`) или Получатель (`type=2`), то `"paymentCity"` следует передавать ТОЛЬКО в следующих случаях:
     * плательщиком за услугу указан Отправитель (`type=1`) и Филиал оплаты, отличается от филиала отправления,
     * плательщиком за услугу указан Получатель (`type=2`) и Филиал оплаты, отличается от филиала получения.
     * По умолчанию, если Плательщик - отправитель, то Филиалом оплаты будет указан Филиал отправления; если Плательщик - получатель, то Филиал получения.
     *
     * Наименование филиала можно получить в ответе методов [`/branches/all/`](#tag/branches/POST/branches/all/) в поле `branches[].title` или [`/branches/findzonebyaddress`](#tag/branches/POST/branches/findzonebyaddress/) в поле `branchTitle`
     * - [Архив с примерами минимальных запросов CargoPickup (.zip, 6Кб)](https://kabinet.pecom.ru/UserData/Api/%D0%90%D1%80%D1%85%D0%B8%D0%B2%20%D1%81%20%D0%BF%D1%80%D0%B8%D0%BC%D0%B5%D1%80%D0%B0%D0%BC%D0%B8%20%D0%BC%D0%B8%D0%BD%D0%B8%D0%BC%D0%B0%D0%BB%D1%8C%D0%BD%D1%8B%D1%85%20%D0%B7%D0%B0%D0%BF%D1%80%D0%BE%D1%81%D0%BE%D0%B2%20CARGOPICKUP.zip?v=134222797038175447)
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|CargoPickupSubmitResponse|ResponseInterface
     *
     * @throws CargopickupSubmitBadRequestException
     * @throws CargopickupSubmitForbiddenException
     * @throws CargopickupSubmitInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    public function cargopickupSubmit(CargoPickupSubmitRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new CargopickupSubmit($requestBody), $fetch);
    }

    /**
     * Метод не рекомендуется к использованию, корректная работа метода не гарантируется.
     *
     * - Максимальное количество грузов в одной заявке (и объектов с информацией о грузах в ответе) — **50**
     * - [Общие рекомендации по передаче адреса забора/доставки в запрос при интеграции с транспортной компанией](https://kabinet.pecom.ru/UserData/Api/%D0%9E%D0%B1%D1%89%D0%B8%D0%B5%20%D1%80%D0%B5%D0%BA%D0%BE%D0%BC%D0%B5%D0%BD%D0%B4%D0%B0%D1%86%D0%B8%D0%B8%20%D0%BF%D0%BE%20%D0%BF%D0%B5%D1%80%D0%B5%D0%B4%D0%B0%D1%87%D0%B5%20%D0%B0%D0%B4%D1%80%D0%B5%D1%81%D0%B0%20%D0%B2%20%D0%B7%D0%B0%D0%BF%D1%80%D0%BE%D1%81%20%D0%BF%D1%80%D0%B8%20%D0%B8%D0%BD%D1%82%D0%B5%D0%B3%D1%80%D0%B0%D1%86%D0%B8%D0%B8.docx)
     * - В элементах массива `cargos.items[]` с данными о грузах необходимо указывать данные получателя в объекте `cargos.items[].receiver`.
     * - У объекта `cargos.items[].services.(услуга).payer.other` для услуг pickUp (забор), transporting (перевозка), delivery (доставка), insurance (страховка) добавилось поле `paymentCity`.
     * - Реквизит `"paymentCity"` рекомендуется передавать только в некоторых случаях, описанных ниже. При передаче `"paymentCity"` в нём ожидается указание наименования филиала оплаты. "Филиал оплаты" - филиал ПЭК, в котором плательщик за услугу ПЭК будет получать оригиналы закрывающих бухгалтерских документов: УПД, отчёт по страхованию и т.п. Филиал оплаты также определяет возможность применения к грузу некоторых назначенных контрагенту скидок и сервисов.
     *
     * `"paymentCity"` обязателен только при указании плательщиком "третьего лица" (`type=3`)!
     *
     * Если плательщиками указаны Отправитель (`type=1`) или Получатель (`type=2`), то `"paymentCity"` следует передавать ТОЛЬКО в следующих случаях:
     * плательщиком за услугу указан Отправитель (`type=1`) и Филиал оплаты, отличается от филиала отправления,
     * плательщиком за услугу указан Получатель (`type=2`) и Филиал оплаты, отличается от филиала получения.
     * По умолчанию, если Плательщик - отправитель, то Филиалом оплаты будет указан Филиал отправления; если Плательщик - получатель, то Филиал получения.
     *
     * Наименование филиала можно получить в ответе методов [`/branches/all/`](#tag/branches/POST/branches/all/) в поле `branches[].title` или [`/branches/findzonebyaddress/`](#tag/branches/POST/branches/findzonebyaddress/) в поле `branchTitle`
     * - Можно указать штрих-коды для позиций грузов. Для этого надо во-первых для всей заявки в поле `cargos.common.typeClientBarcode` указать тип штрих-кода, регистр при указании типа штрих-кода не важен.
     * Список допустимых типов штрих-кодов можно получить с помощью метода [/cargopickupnetwork/availabletypebarcode](#tag/cargopickupnetwork/POST/cargopickupnetwork/availabletypebarcode/).
     * Для каждого груза нужно указать массив со штрих-кодами позиций груза в поле `cargos.items[].cargo.clientPositionsBarcode`.
     * Штрих-кодов не должно быть указано больше, чем позиций груза (`cargos.items[].cargo.positionsCount`).
     * - Для подачи заявки с наложенным платежом, следует использовать другие методы API. Свяжитесь с нами, если у Вас есть такая потребность.
     * - `cargos.items[].receiver.identityCard.type` в значении 0 (Без предоставления документа) подразумевает, что идентификация получателя (доступна по договору оферты) будет произведена с использованием кода СМС. Ограничения на использование данного способа идентификации описаны [здесь](https://pecom.ru/services/additional-features/upr-vidacha/)
     * - Данные по наименованию филиала отправления и получения для реквизитов `sender.city` и `receiver.city` можно получить используя метод [`/branches/findzonebyaddress/`](#tag/branches/POST/branches/findzonebyaddress/). На вход в метод передавать адрес забора и/или доставки, в ответе метода брать значение реквизита `branchTitle` и подставлять в реквизит `city` соответствующего блока.
     * - Возможность забора груза "день в день" в соответствии с Вашим договором уточняйте у своего закрепленного менеджера или в филиале отправления. Есть ограничения по времени забора и по габаритам, которые зависят от конкретных филиалов. Подача заявок по API на забор груза "день в день" за административными чертами города, а также на праздничные и выходные дни невозможна.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|CargoPickupNetworkSubmitResponse|ResponseInterface
     *
     * @throws CargopickupnetworkSubmitBadRequestException
     * @throws CargopickupnetworkSubmitForbiddenException
     * @throws CargopickupnetworkSubmitInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    public function cargopickupnetworkSubmit(CargoPickupNetworkSubmitRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new CargopickupnetworkSubmit($requestBody), $fetch);
    }

    /**
     * - Максимальное количество кодов грузов в одном запросе: **50**
     * - В качестве кода груза можно указывать предварительный или фактический код груза.
     * - Возможные значения поля `cargos[].info.cargoStatus` (статус груза): `Аннулировано до приемки груза`, `Заявка на забор зарегистрирована`, `Ожидается передача груза от отправителя`, `Принят к перевозке`, `Принят на ПВЗ`, `Возвращен отправителю`, `Оформлен`, `В пути`, `В пути на терминал`, `Прибыл`, `Прибыл частично`, `Разгружается. Ожидайте оповещения`, `Выполняется адресная доставка`, `Выдан получателю`, `Доставлен получателю`, `Отправлен на возврат`, `Утилизирован`, `Изъят на таможне`, `Возвращен отправителю` , `Выдан ( мест { количество_мест } из { количество_мест } )`.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|BasicStatusResponse|ResponseInterface
     *
     * @throws CargosBasicstatusBadRequestException
     * @throws CargosBasicstatusForbiddenException
     * @throws CargosBasicstatusInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    public function cargosBasicstatus(CargosBasicStatusRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new CargosBasicstatus($requestBody), $fetch);
    }

    /**
     * - Метод позволяет автоматически перенаправить груз отправителю с момента оформления груза на складе в городе отправления и до момента выдачи получателю
     * - Выполняется по одному конкретному грузу
     * - В процессе движения груза в ПЭК существуют интервалы времени, когда возврат отправителю оформить не возможно. Например: до того как груз принят на склад ПЭК и оформлен к перевозке или если груз уже на последней миле при доставке получателю, в этом случае метод будет сообщать о неуспешной попытке оформления возврата.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|CancelAndReturnResponse|ResponseInterface
     *
     * @throws CargosCancelandreturncargoBadRequestException
     * @throws CargosCancelandreturncargoForbiddenException
     * @throws CargosCancelandreturncargoInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    public function cargosCancelandreturncargo(CargosCancelAndReturnRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new CargosCancelandreturncargo($requestBody), $fetch);
    }

    /**
     * - Максимальное количество кодов грузов в одном запросе: **15**.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|CurrentStatusResponse|ResponseInterface
     *
     * @throws CargosCurrentstatusBadRequestException
     * @throws CargosCurrentstatusForbiddenException
     * @throws CargosCurrentstatusInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    public function cargosCurrentstatus(CargosCurrentStatusRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new CargosCurrentstatus($requestBody), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|DeliveryStatusItem[]|ResponseInterface
     *
     * @throws CargosDeliverystatusBadRequestException
     * @throws CargosDeliverystatusForbiddenException
     * @throws CargosDeliverystatusInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    public function cargosDeliverystatus(CargosDeliveryStatusRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new CargosDeliverystatus($requestBody), $fetch);
    }

    /**
     * - Фотографии доступны только для грузов, отправленных из филиала Москва Восток.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|CargoDetailsResponse|ResponseInterface
     *
     * @throws CargosDetailsBadRequestException
     * @throws CargosDetailsForbiddenException
     * @throws CargosDetailsInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    public function cargosDetails(CargosDetailsRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new CargosDetails($requestBody), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|ForcedStorageItem[]|ResponseInterface
     *
     * @throws CargosGetinfoforcedstorageBadRequestException
     * @throws CargosGetinfoforcedstorageForbiddenException
     * @throws CargosGetinfoforcedstorageInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    public function cargosGetinfoforcedstorage(CargosForcedStorageRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new CargosGetinfoforcedstorage($requestBody), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|ListAllOrderResponse|ResponseInterface
     *
     * @throws CargosListallorderbyloginBadRequestException
     * @throws CargosListallorderbyloginForbiddenException
     * @throws CargosListallorderbyloginInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    public function cargosListallorderbylogin(CargosListAllOrderByLoginRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new CargosListallorderbylogin($requestBody), $fetch);
    }

    /**
     * - Метод выводит персональные данные водителей, осуществляющих забор/доставку груза для возможности использования их данных для заказа пропусков. Данные по водителям забора доступны только логину, которые имеет доступ к отправителю груза. Данные по водителям доставки доступны только получателям грузам. Метод работает только по маршрутным листам текущей или будущих дат
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|ResponseInterface|RouteMapAddress[]
     *
     * @throws CargosRoutesanddriverinfoBadRequestException
     * @throws CargosRoutesanddriverinfoForbiddenException
     * @throws CargosRoutesanddriverinfoInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    public function cargosRoutesanddriverinfo(CargosRoutesAndDriverInfoRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new CargosRoutesanddriverinfo($requestBody), $fetch);
    }

    /**
     * - Максимальное количество кодов грузов в одном запросе: **15**
     * - Возможные значения поля `cargos[].info.cargoStatus` (статус груза): `Аннулировано до приемки груза`, `Заявка на забор зарегистрирована`, `Ожидается передача груза от отправителя`, `Принят к перевозке`, `Принят на ПВЗ`, `Возвращен отправителю`, `Оформлен`, `В пути`, `В пути на терминал`, `Прибыл`, `Прибыл частично`, `Разгружается. Ожидайте оповещения`, `Выполняется адресная доставка`, `Выдан получателю`, `Доставлен получателю`, `Отправлен на возврат`, `Утилизирован`, `Изъят на таможне`, `Возвращен отправителю` , `Выдан ( мест { количество_мест } из { количество_мест } )`
     * - Для груза, который является возвратом документов по другому грузу, в ответе возвращается поле `cargos[].cargo.parentCargoCode` с кодом исходного груза.
     * - Возможные значения поля `cargos[].info.cargoStatus` (id статуса груза): [`/cargos/statustables/`](#cargos_statustables)
     * - Поле `intakeAddress` будет заполнено только для грузов с забором.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|CargosStatusResponse|ResponseInterface
     *
     * @throws CargosStatusBadRequestException
     * @throws CargosStatusForbiddenException
     * @throws CargosStatusInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    public function cargosStatus(CargosStatusRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new CargosStatus($requestBody), $fetch);
    }

    /**
     * - Максимальное количество штрих-кодов в одном запросе: **15**
     * - Возможные значения поля `cargos[].info.cargoStatus` (статус груза): `Аннулировано до приемки груза`, `Заявка на забор зарегистрирована`, `Ожидается передача груза от отправителя`, `Принят к перевозке`, `Принят на ПВЗ`, `Возвращен отправителю`, `Оформлен`, `В пути`, `В пути на терминал`, `Прибыл`, `Прибыл частично`, `Разгружается. Ожидайте оповещения`, `Выполняется адресная доставка`, `Выдан получателю`, `Доставлен получателю`, `Отправлен на возврат`, `Утилизирован`, `Изъят на таможне`, `Возвращен отправителю` , `Выдан ( мест { количество_мест } из { количество_мест } )`
     * - Для груза, который является возвратом документов по другому грузу, в ответе возвращается поле `cargos[].cargo.parentCargoCode` с кодом исходного груза.
     * - Возможные значения поля `cargos[].info.cargoStatus` (id статуса груза): [`/cargos/statustable/`](#cargos_statustables)
     * - Поле `intakeAddress` будет заполнено только для грузов с забором.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|ResponseInterface|StatusByBarcodeResponse
     *
     * @throws CargosStatusbypositionbarcodesBadRequestException
     * @throws CargosStatusbypositionbarcodesForbiddenException
     * @throws CargosStatusbypositionbarcodesInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    public function cargosStatusbypositionbarcodes(CargosStatusByPositionBarcodesRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new CargosStatusbypositionbarcodes($requestBody), $fetch);
    }

    /**
     * - Метод выводит дату и время установки статусов.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|ResponseInterface|StatusHistoryItem[]
     *
     * @throws CargosStatusfullhistoryBadRequestException
     * @throws CargosStatusfullhistoryForbiddenException
     * @throws CargosStatusfullhistoryInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    public function cargosStatusfullhistory(CargosStatusFullHistoryRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new CargosStatusfullhistory($requestBody), $fetch);
    }

    /**
     * - Значения `statusId` используются в поле `cargoStatusId` (id статуса груза) в ответе метода [`/cargos/status/`](#cargos_status)
     * - Значения `name` используются в поле `cargoStatus` (статуса груза) в ответе метода [`/cargos/status/`](#cargos_status).
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|ResponseInterface|StatusTableItem[]
     *
     * @throws CargosStatustablesBadRequestException
     * @throws CargosStatustablesForbiddenException
     * @throws CargosStatustablesInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    public function cargosStatustables(\stdClass $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new CargosStatustables($requestBody), $fetch);
    }

    /**
     * Для получения неоплаченных идентификаторов грузов необходимо передать идентификатор плательщика `counterpartGuid`. `counterpartGuid` можно получить методом [`/COUNTERPARTS/CONFIRMEDACCESSTOCOUNTERPARTIES/`](#tag/counterparts/POST/counterparts/confirmedaccesstocounterparties/)
     * - Запрошенный период не может превышать 31 день.
     * - По полученным идентификаторам грузов можно запросить Счет на оплату методом [`/CARGOSDOCUMENTS/ORDER/`](#tag/cargosdocuments/POST/cargosdocuments/order/).
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ResponseInterface|string[]
     *
     * @throws CargosdocumentsCargoinvoicebyperiodBadRequestException
     * @throws CargosdocumentsCargoinvoicebyperiodForbiddenException
     * @throws CargosdocumentsCargoinvoicebyperiodInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    public function cargosdocumentsCargoinvoicebyperiod(CargosdocumentsCargoinvoicebyperiodRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new CargosdocumentsCargoinvoicebyperiod($requestBody), $fetch);
    }

    /**
     * Метод на данный момент позволяет получить документы "Поручение экспедитора/ Экспедиторская расписка" и "Счет на оплату" по оформленным грузам.
     * - Сначала необходимо запросить документ методом [`/CARGOSDOCUMENTS/ORDER/`](#tag/cargosdocuments/POST/cargosdocuments/order/) и дождаться готовности документа
     * - Для получения "Счета на оплату" необходимо передать идентификатор контрагента-плательщика `counterpartGuid` в системах ПЭК, связанный с ЛК. `counterpartGuid` можно получить методом [`/COUNTERPARTS/CONFIRMEDACCESSTOCOUNTERPARTIES/`](#tag/counterparts/POST/counterparts/confirmedaccesstocounterparties/).
     * - Для получения "Счета на оплату" в формате `"xml"`, необходимо передать уточняющий параметр `docFormat` в запросе.
     * Данные счета вернутся в формате CommerseML редакции 2.
     * - Счета на оплату возвращаются в `"zip"` архиве (в архиве может быть несколько счетов по грузу)
     * - [XSD схема Commerce ML 4.02](https://kabinet.pecom.ru/UserData/Api/CML402.zip).
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return CargosdocumentsGetcontentErrorResponse|CargosdocumentsGetcontentSuccessResponse|ResponseInterface
     *
     * @throws CargosdocumentsGetcontentBadRequestException
     * @throws CargosdocumentsGetcontentForbiddenException
     * @throws CargosdocumentsGetcontentInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    public function cargosdocumentsGetcontent(CargosdocumentsGetcontentRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new CargosdocumentsGetcontent($requestBody), $fetch);
    }

    /**
     * Метод на данный момент позволяет запросить документы "Поручение экспедитора/ Экспедиторская расписка" и "Счет на оплату" по оформленным грузам.
     * - При первом успешном вызове метода по конкретному грузу в ответе будет статус 0 - "Документ запрошен".
     * При повторном вызове и после получения статуса 1 - "Документ готов к скачиванию", получите документ методом [`/CARGOSDOCUMENTS/GETCONTENT/`](#tag/cargosdocuments/POST/cargosdocuments/getcontent/)
     * - Для получения "Счета на оплату" необходимо передать идентификатор контрагента-плательщика `"counterpartGuid"` в системах ПЭК, связанный с ЛК.
     * По грузу должна быть задолженность для этого контрагента-плательщика. `"counterpartGuid"` можно получить методом [`/COUNTERPARTS/CONFIRMEDACCESSTOCOUNTERPARTIES/`](#tag/counterparts/POST/counterparts/confirmedaccesstocounterparties/).
     * - Для получения "Счета на оплату" в формате `"xml"`, необходимо передать уточняющий параметр `"docFormat"` в запросе. Данные счета вернутся в формате **CommerseML** редакции 2.
     * - Есть ограничение на число запросов в сутки для одного логина.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|CargosdocumentsOrderResponse|ResponseInterface
     *
     * @throws CargosdocumentsOrderBadRequestException
     * @throws CargosdocumentsOrderForbiddenException
     * @throws CargosdocumentsOrderInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    public function cargosdocumentsOrder(CargosdocumentsOrderRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new CargosdocumentsOrder($requestBody), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|ClientPackingKindItem[]|ResponseInterface
     *
     * @throws ClientpackingkindAllBadRequestException
     * @throws ClientpackingkindAllForbiddenException
     * @throws ClientpackingkindAllInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    public function clientpackingkindAll(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new ClientpackingkindAll(), $fetch);
    }

    /**
     * Метод выводит список контрагентов, которые подтвердили доступ к своим данным в компании ПЭК для логина, под которым выполняется запрос по API.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|ConfirmedAccessToCounterparty[]|ResponseInterface
     *
     * @throws CounterpartsConfirmedaccesstocounterpartiesBadRequestException
     * @throws CounterpartsConfirmedaccesstocounterpartiesForbiddenException
     * @throws CounterpartsConfirmedaccesstocounterpartiesInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    public function counterpartsConfirmedaccesstocounterparties(ConfirmedAccessToCounterpartiesRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new CounterpartsConfirmedaccesstocounterparties($requestBody), $fetch);
    }

    /**
     * Метод выводит информацию по подключенным в ПЭК сервисам, скидкам и основным дополнительным соглашениям по конкретному контрагенту. Для работы метода контрагент должен подтвердить, что связан с логином, который указан при авторизации (см. вопрос "Как подтвердить личный кабинет на сайте pecom.ru?" внизу страницы: https://pecom.ru/business/integration/#ltl-ltl).
     *
     * Основные сервисы, доп. соглашения, которые могут повлиять на процесс интеграции с клиентами, и их важные параметры приведены в описании примера ответа метода с необходимыми пояснениями по правилам их использования.
     *
     * Если какая-то запись есть в ответе — значит сервис по контрагенту подключен и действует на момент вызова запроса. Данные по срокам действия необходимо уточнять у своего менеджера ПЭК
     *
     * Массив `params`, выводимый в массиве `specialConditionsWithParams`, в некоторых случаях содержит дополнительную информацию по особенностям применения скидок и сервисов. Пример основных параметров, которые там могут быть приведены, в описании формат ответа. В общем случае для пояснения логики работы тех или иных сервисов и скидок, прямо не представленных в примере ответа метода, необходимо обращаться к Вашему менеджеру ПЭК. API является "витриной" и специалисты по API не имеют достаточных компетенций в консультациях по особенностям всего объема скидок и сервисов.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|ConnectedDiscountsServicesAgreementsResponse|ResponseInterface
     *
     * @throws CounterpartsConnecteddiscountsservicesagreementsBadRequestException
     * @throws CounterpartsConnecteddiscountsservicesagreementsForbiddenException
     * @throws CounterpartsConnecteddiscountsservicesagreementsInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    public function counterpartsConnecteddiscountsservicesagreements(ConnectedDiscountsServicesAgreementsRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new CounterpartsConnecteddiscountsservicesagreements($requestBody), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|LegalFormType[]|ResponseInterface
     *
     * @throws CounterpartsLegalformtypesBadRequestException
     * @throws CounterpartsLegalformtypesForbiddenException
     * @throws CounterpartsLegalformtypesInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    public function counterpartsLegalformtypes(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new CounterpartsLegalformtypes(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|CurrencyItem[]|ResponseInterface
     *
     * @throws CurrencyAllBadRequestException
     * @throws CurrencyAllForbiddenException
     * @throws CurrencyAllInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    public function currencyAll(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new CurrencyAll(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|NetshopReceiver[]|ResponseInterface
     *
     * @throws NetshopListreceiveraddressesBadRequestException
     * @throws NetshopListreceiveraddressesForbiddenException
     * @throws NetshopListreceiveraddressesInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    public function netshopListreceiveraddresses(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new NetshopListreceiveraddresses(), $fetch);
    }

    /**
     * Коды грузов и штрих-коды, возвращаемые этим методом являются **предварительными** и могут изменится при фактической приёмке груза
     * - Для грузов нужно указывать код адреса получателя из [справочника](#tag/receivers/POST/receivers/listreceiveraddresses/) адресов получателей
     * в поле `cargos[].receiver.receiverAddrCode`.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|NetshopSubmitResponse|ResponseInterface
     *
     * @throws NetshopSubmitBadRequestException
     * @throws NetshopSubmitForbiddenException
     * @throws NetshopSubmitInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    public function netshopSubmit(NetshopSubmitRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new NetshopSubmit($requestBody), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|NotificationCargoSubscribeResponse|ResponseInterface
     *
     * @throws NotificationCargosubscribeBadRequestException
     * @throws NotificationCargosubscribeForbiddenException
     * @throws NotificationCargosubscribeInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    public function notificationCargosubscribe(NotificationCargoSubscribeRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new NotificationCargosubscribe($requestBody), $fetch);
    }

    /**
     * Использовать метод нужно не ранее, чем через 5 – 10 минут после подачи заявки
     * Заявка на забор может быть аннулирована до момента её планирования в маршрутном листе водителя
     * Аннулирование заявок с самопривозом на склад ПЭК не требуется.
     *
     * @param string[] $requestBody
     * @param string   $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|OrderCancellationResult[]|ResponseInterface
     *
     * @throws OrderCancellationBadRequestException
     * @throws OrderCancellationForbiddenException
     * @throws OrderCancellationInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    public function orderCancellation(array $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new OrderCancellation($requestBody), $fetch);
    }

    /**
     * Метод позволяет получать файлы заявок и этикеток в формате PDF в кодировке base64
     * В зависимости от значений параметра типа (`type` : `big`, `simple`, `multiple`), можно получить печатную форму заявки, этикетки конкретного груза или этикеток всех грузов заявки соответственно. Для типа `multiple`, если в заявке указано несколько грузополучателей (метод подачи заявки `preregistration/submit` `orderType` = `0` или `14`), то будут выведены на печать этикетки по всем грузам из заявки).
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ResponseInterface|string
     *
     * @throws OrderPrintBadRequestException
     * @throws OrderPrintForbiddenException
     * @throws OrderPrintInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    public function orderPrint(OrderPrintRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new OrderPrint($requestBody), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|BarcodeType[]|ResponseInterface
     *
     * @throws PreregistrationAvailabletypebarcodeBadRequestException
     * @throws PreregistrationAvailabletypebarcodeForbiddenException
     * @throws PreregistrationAvailabletypebarcodeInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    public function preregistrationAvailabletypebarcode(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new PreregistrationAvailabletypebarcode(), $fetch);
    }

    /**
     * - Максимальное количество грузов в одной заявке для orderType = 0 и 14 — **50**, для orderType = 3 и 4 - **1**.
     * - [Общие рекомендации по передаче адреса забора/доставки в запрос при интеграции с транспортной компанией](https://kabinet.pecom.ru/UserData/Api/%D0%9E%D0%B1%D1%89%D0%B8%D0%B5%20%D1%80%D0%B5%D0%BA%D0%BE%D0%BC%D0%B5%D0%BD%D0%B4%D0%B0%D1%86%D0%B8%D0%B8%20%D0%BF%D0%BE%20%D0%BF%D0%B5%D1%80%D0%B5%D0%B4%D0%B0%D1%87%D0%B5%20%D0%B0%D0%B4%D1%80%D0%B5%D1%81%D0%B0%20%D0%B2%20%D0%B7%D0%B0%D0%BF%D1%80%D0%BE%D1%81%20%D0%BF%D1%80%D0%B8%20%D0%B8%D0%BD%D1%82%D0%B5%D0%B3%D1%80%D0%B0%D1%86%D0%B8%D0%B8.docx)
     * - Возможность забора груза "день в день" в соответствии с Вашим договором уточняйте у своего закрепленного менеджера или в филиале отправления. Есть ограничения по времени забора и по габаритам, которые зависят от конкретных филиалов. Подача заявок по API на забор груза "день в день" за административными чертами города, а также на праздничные и выходные дни невозможна.
     * - **ВАЖНО!** Использование технологии "Упрощенный забор": раздельной подачи "Заказа на машину" и "Заказа на перевозку" (orderType = 4), возможно, только после подключения услуги менеджером со стороны ПЭК. Вызов машины по этой технологии осуществляется только после подачи отдельного "Заказа на машину"
     * - При подаче "Заказа на перевозку" (orderType = 4) реквизиты с требованиями к машине забора заполнять необходимо, но они будут проигнорированы, требования к машине имеет смысл передавать при подаче "Заказа на машину". Адрес забора в "Заказе на перевозку" и "Заказе на машину" должны в точности совпадать.
     * - ID склада населенного пункта (с отбором по разрешенным габаритам можно получить методом [`/branches/nearestdepartments/`](#tag/branches/POST/branches/nearestdepartments/), возвращающим ближайшие отделения к переданному в запрос адресу. Или самостоятельно выбирать удобное отделение/склад из ответа метода [`/branches/all/`](#tag/branches/POST/branches/all/) (поле `branches[].divisions[].warehouses[].id`). Обращайте внимание на разрешенные типы операций складов и ограничения по габаритам (поле `branches[].divisions[].warehouses[].kindsOfTransportation[].description`, `type`, `operations[]`)
     * - Быстро получить ID склада основного отделения любого филиала можно используя метод [`/branches/findzonebyaddress/`](#tag/branches/POST/branches/findzonebyaddress/). В ответе метода реквизит `mainWarehouseId`. Основное отделение является центральным складом конкретного филиала, из которого можно заказать доставку до адреса или ПВЗ, который относится к зоне обслуживаемого филиала.
     * Например, по адресу «Самарская область, город Отрадный», основным является отделение филиала «Самара» по адресу: ул. Земеца, д. 32 литера 354, так как город Отрадный обслуживает филиал «Самара».
     * - Указать получателей для грузов можно в объекте `cargos[].receiver`.   - Услуга наложенного платежа `cargos[].services.cashOnDelivery` может быть доступна при заключении договора на оказание данной услуги и для тарифа/продукта EasyWay.
     * - Для работы с продуктами/ тарифами EasyWay (12) и ДТС Автоперевозка (7) требуется заключение дополнительного соглашения на соответствующий продукт.
     * - Реквизит `"paymentCity"` рекомендуется передавать только в некоторых случаях, описанных ниже. При передаче `"paymentCity"` в нём ожидается указание наименования филиала оплаты. "Филиал оплаты" - филиал ПЭК, в котором плательщик за услугу ПЭК будет получать оригиналы закрывающих бухгалтерских документов: УПД, отчёт по страхованию и т.п. Филиал оплаты также определяет возможность применения к грузу некоторых назначенных контрагенту скидок и сервисов.
     *
     * `"paymentCity"` обязателен только при указании плательщиком "третьего лица" (type=3)!
     *
     * Если плательщиками указаны Отправитель (type=1) или Получатель (type=2), то `"paymentCity"` следует передавать ТОЛЬКО в следующих случаях:
     * плательщиком за услугу указан Отправитель (type=1) и Филиал оплаты, отличается от филиала отправления,
     * плательщиком за услугу указан Получатель (type=2) и Филиал оплаты, отличается от филиала получения.
     * По умолчанию, если Плательщик - отправитель, то Филиалом оплаты будет указан Филиал отправления; если Плательщик - получатель, то Филиал получения.
     *
     * Наименование филиала можно получить в ответе методов [`/branches/all/`](#tag/branches/POST/branches/all/) в поле `branches[].title` или [`/branches/findzonebyaddress/`](#tag/branches/POST/branches/findzonebyaddress/) в поле `branchTitle`
     * - Замечания по валидации
     * При заказе услуги наложенного платежа `cargos[].services.cashOnDelivery` заявленная стоимость груза `cargos[].services.insurance.cost` устанавливается равной фактической стоимости товара `cargos[].services.cashOnDelivery.actualCost`.
     * Установка соответствующего значения в поле `includeTES` позволяет настраивать включение транспортно-экспедиционных услуг (ТЭУ) в сумму наложенного платежа (НП) для каждого груза или исключение ТЭУ из суммы НП: `true`— за услуги платит отправитель из суммы НП, `false`— за услуги платит получатель сверх суммы НП.
     * При указании идентификатора склада `sender.warehouseId` следует помнить, что он будет проигнорирован, если заказана услуга забор от адреса отправителя.
     * При указании идентификатора склада `cargos[].receiver.warehouseId` следует помнить, что он будет проигнорирован, если заказана услуга доставки.
     * - `cargo.services.delivery.avisationDateTime, cargo.services.delivery.dateOfDelivery` При передаче выполняется проверка на возможность выполнения заявок в указанные даты по процессам компании
     * - [Архив с примерами минимальных запросов Preregistration (.zip, 7Кб)](https://kabinet.pecom.ru/UserData/Api/%D0%90%D1%80%D1%85%D0%B8%D0%B2%20%D1%81%20%D0%BF%D1%80%D0%B8%D0%BC%D0%B5%D1%80%D0%B0%D0%BC%D0%B8%20%D0%BC%D0%B8%D0%BD%D0%B8%D0%BC%D0%B0%D0%BB%D1%8C%D0%BD%D1%8B%D1%85%20%D0%B7%D0%B0%D0%BF%D1%80%D0%BE%D1%81%D0%BE%D0%B2%20PREREGISTRATION.zip?v=134222797078245462)
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|PreregistrationSubmitResponse|ResponseInterface
     *
     * @throws PreregistrationSubmitBadRequestException
     * @throws PreregistrationSubmitForbiddenException
     * @throws PreregistrationSubmitInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    public function preregistrationSubmit(PreregistrationSubmitRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new PreregistrationSubmit($requestBody), $fetch);
    }

    /**
     * В поле `code` (код получателя) нужно сгенерировать `GUID` и передать его в строковом виде.
     * Поля `code, title, city, phone` обязательны для заполнения.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|ReceiversSuccessResponse|ResponseInterface
     *
     * @throws ReceiversAddBadRequestException
     * @throws ReceiversAddForbiddenException
     * @throws ReceiversAddInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    public function receiversAdd(ReceiverAddRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new ReceiversAdd($requestBody), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|ReceiversSuccessResponse|ResponseInterface
     *
     * @throws ReceiversDeleteBadRequestException
     * @throws ReceiversDeleteForbiddenException
     * @throws ReceiversDeleteInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    public function receiversDelete(ReceiverDeleteRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new ReceiversDelete($requestBody), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|ReceiversListResponse|ResponseInterface
     *
     * @throws ReceiversListBadRequestException
     * @throws ReceiversListForbiddenException
     * @throws ReceiversListInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    public function receiversList(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new ReceiversList(), $fetch);
    }

    /**
     * Обязательно указывать в запросе код получателя в поле `code`
     * Остальные поля необязательны, следует указывать только значения полей, которые нужно изменить
     * Значения необязательных полей `inn, address, person` можно очистить с помощью запроса,
     * для этого надо установить соответствующий признак очистки поля (один из: `clearInn, clearAddress, clearPerson`).
     * При этом недопустимо в одном запросе указывать и новое значение, и признак очистки для одного и того же поля.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|ReceiversSuccessResponse|ResponseInterface
     *
     * @throws ReceiversUpdateBadRequestException
     * @throws ReceiversUpdateForbiddenException
     * @throws ReceiversUpdateInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    public function receiversUpdate(ReceiverUpdateRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new ReceiversUpdate($requestBody), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|ResponseInterface|TypesOfDeliveryItem[]
     *
     * @throws TypesofdeliveryAllBadRequestException
     * @throws TypesofdeliveryAllForbiddenException
     * @throws TypesofdeliveryAllInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    public function typesofdeliveryAll(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new TypesofdeliveryAll(), $fetch);
    }

    public static function create($httpClient = null, array $additionalPlugins = [])
    {
        if (null === $httpClient) {
            $httpClient = Psr18ClientDiscovery::find();
            $plugins = [];
            $uri = Psr17FactoryDiscovery::findUrlFactory()->createUri('https://kabinet.pecom.ru/api/v1');
            $plugins[] = new AddHostPlugin($uri);
            $plugins[] = new AddPathPlugin($uri);
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new PluginClient($httpClient, $plugins);
        }
        $requestFactory = Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = Psr17FactoryDiscovery::findStreamFactory();
        $serializer = new Serializer([new ArrayDenormalizer(), new JaneObjectNormalizer()], [new JsonEncoder(new JsonEncode(), new JsonDecode(['json_decode_associative' => true]))]);

        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}
