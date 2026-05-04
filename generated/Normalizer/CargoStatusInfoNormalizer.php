<?php

namespace glook\PecomSdk\Generated\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use glook\PecomSdk\Generated\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class CargoStatusInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'glook\\PecomSdk\\Generated\\Model\\CargoStatusInfo';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'glook\\PecomSdk\\Generated\\Model\\CargoStatusInfo';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \glook\PecomSdk\Generated\Model\CargoStatusInfo();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('arrivalContractDateTime', $data) && $data['arrivalContractDateTime'] !== null) {
            $object->setArrivalContractDateTime($data['arrivalContractDateTime']);
        }
        elseif (\array_key_exists('arrivalContractDateTime', $data) && $data['arrivalContractDateTime'] === null) {
            $object->setArrivalContractDateTime(null);
        }
        if (\array_key_exists('arrivalDateTime', $data) && $data['arrivalDateTime'] !== null) {
            $object->setArrivalDateTime($data['arrivalDateTime']);
        }
        elseif (\array_key_exists('arrivalDateTime', $data) && $data['arrivalDateTime'] === null) {
            $object->setArrivalDateTime(null);
        }
        if (\array_key_exists('arrivalPlanDateTime', $data) && $data['arrivalPlanDateTime'] !== null) {
            $object->setArrivalPlanDateTime($data['arrivalPlanDateTime']);
        }
        elseif (\array_key_exists('arrivalPlanDateTime', $data) && $data['arrivalPlanDateTime'] === null) {
            $object->setArrivalPlanDateTime(null);
        }
        if (\array_key_exists('cargoStatus', $data) && $data['cargoStatus'] !== null) {
            $object->setCargoStatus($data['cargoStatus']);
        }
        elseif (\array_key_exists('cargoStatus', $data) && $data['cargoStatus'] === null) {
            $object->setCargoStatus(null);
        }
        if (\array_key_exists('cargoStatusId', $data) && $data['cargoStatusId'] !== null) {
            $object->setCargoStatusId($data['cargoStatusId']);
        }
        elseif (\array_key_exists('cargoStatusId', $data) && $data['cargoStatusId'] === null) {
            $object->setCargoStatusId(null);
        }
        if (\array_key_exists('deliveryPlanDate', $data) && $data['deliveryPlanDate'] !== null) {
            $object->setDeliveryPlanDate($data['deliveryPlanDate']);
        }
        elseif (\array_key_exists('deliveryPlanDate', $data) && $data['deliveryPlanDate'] === null) {
            $object->setDeliveryPlanDate(null);
        }
        if (\array_key_exists('giveOutDateTime', $data) && $data['giveOutDateTime'] !== null) {
            $object->setGiveOutDateTime($data['giveOutDateTime']);
        }
        elseif (\array_key_exists('giveOutDateTime', $data) && $data['giveOutDateTime'] === null) {
            $object->setGiveOutDateTime(null);
        }
        if (\array_key_exists('intakePlanDateTime', $data) && $data['intakePlanDateTime'] !== null) {
            $object->setIntakePlanDateTime($data['intakePlanDateTime']);
        }
        elseif (\array_key_exists('intakePlanDateTime', $data) && $data['intakePlanDateTime'] === null) {
            $object->setIntakePlanDateTime(null);
        }
        if (\array_key_exists('position', $data) && $data['position'] !== null) {
            $object->setPosition($data['position']);
        }
        elseif (\array_key_exists('position', $data) && $data['position'] === null) {
            $object->setPosition(null);
        }
        if (\array_key_exists('receivedByClientDateTime', $data) && $data['receivedByClientDateTime'] !== null) {
            $object->setReceivedByClientDateTime($data['receivedByClientDateTime']);
        }
        elseif (\array_key_exists('receivedByClientDateTime', $data) && $data['receivedByClientDateTime'] === null) {
            $object->setReceivedByClientDateTime(null);
        }
        if (\array_key_exists('receivingByDocument', $data) && $data['receivingByDocument'] !== null) {
            $object->setReceivingByDocument($data['receivingByDocument']);
        }
        elseif (\array_key_exists('receivingByDocument', $data) && $data['receivingByDocument'] === null) {
            $object->setReceivingByDocument(null);
        }
        if (\array_key_exists('receivingBySMSCode', $data) && $data['receivingBySMSCode'] !== null) {
            $object->setReceivingBySMSCode($data['receivingBySMSCode']);
        }
        elseif (\array_key_exists('receivingBySMSCode', $data) && $data['receivingBySMSCode'] === null) {
            $object->setReceivingBySMSCode(null);
        }
        if (\array_key_exists('sendingDateTime', $data) && $data['sendingDateTime'] !== null) {
            $object->setSendingDateTime($data['sendingDateTime']);
        }
        elseif (\array_key_exists('sendingDateTime', $data) && $data['sendingDateTime'] === null) {
            $object->setSendingDateTime(null);
        }
        if (\array_key_exists('statuses', $data) && $data['statuses'] !== null) {
            $values = array();
            foreach ($data['statuses'] as $value) {
                $values_1 = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
                foreach ($value as $key => $value_1) {
                    $values_1[$key] = $value_1;
                }
                $values[] = $values_1;
            }
            $object->setStatuses($values);
        }
        elseif (\array_key_exists('statuses', $data) && $data['statuses'] === null) {
            $object->setStatuses(null);
        }
        if (\array_key_exists('storageStartPlanDate', $data) && $data['storageStartPlanDate'] !== null) {
            $object->setStorageStartPlanDate($data['storageStartPlanDate']);
        }
        elseif (\array_key_exists('storageStartPlanDate', $data) && $data['storageStartPlanDate'] === null) {
            $object->setStorageStartPlanDate(null);
        }
        if (\array_key_exists('takeOnStockDateTime', $data) && $data['takeOnStockDateTime'] !== null) {
            $object->setTakeOnStockDateTime($data['takeOnStockDateTime']);
        }
        elseif (\array_key_exists('takeOnStockDateTime', $data) && $data['takeOnStockDateTime'] === null) {
            $object->setTakeOnStockDateTime(null);
        }
        if (\array_key_exists('takeOnStockPackageState', $data) && $data['takeOnStockPackageState'] !== null) {
            $object->setTakeOnStockPackageState($data['takeOnStockPackageState']);
        }
        elseif (\array_key_exists('takeOnStockPackageState', $data) && $data['takeOnStockPackageState'] === null) {
            $object->setTakeOnStockPackageState(null);
        }
        if (\array_key_exists('takeOnStockPlanDateTime', $data) && $data['takeOnStockPlanDateTime'] !== null) {
            $object->setTakeOnStockPlanDateTime($data['takeOnStockPlanDateTime']);
        }
        elseif (\array_key_exists('takeOnStockPlanDateTime', $data) && $data['takeOnStockPlanDateTime'] === null) {
            $object->setTakeOnStockPlanDateTime(null);
        }
        if (\array_key_exists('callStatus', $data) && $data['callStatus'] !== null) {
            $object->setCallStatus($data['callStatus']);
        }
        elseif (\array_key_exists('callStatus', $data) && $data['callStatus'] === null) {
            $object->setCallStatus(null);
        }
        if (\array_key_exists('callStatusDateTime', $data) && $data['callStatusDateTime'] !== null) {
            $object->setCallStatusDateTime($data['callStatusDateTime']);
        }
        elseif (\array_key_exists('callStatusDateTime', $data) && $data['callStatusDateTime'] === null) {
            $object->setCallStatusDateTime(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getArrivalContractDateTime()) {
            $data['arrivalContractDateTime'] = $object->getArrivalContractDateTime();
        }
        if (null !== $object->getArrivalDateTime()) {
            $data['arrivalDateTime'] = $object->getArrivalDateTime();
        }
        if (null !== $object->getArrivalPlanDateTime()) {
            $data['arrivalPlanDateTime'] = $object->getArrivalPlanDateTime();
        }
        if (null !== $object->getCargoStatus()) {
            $data['cargoStatus'] = $object->getCargoStatus();
        }
        if (null !== $object->getCargoStatusId()) {
            $data['cargoStatusId'] = $object->getCargoStatusId();
        }
        if (null !== $object->getDeliveryPlanDate()) {
            $data['deliveryPlanDate'] = $object->getDeliveryPlanDate();
        }
        if (null !== $object->getGiveOutDateTime()) {
            $data['giveOutDateTime'] = $object->getGiveOutDateTime();
        }
        if (null !== $object->getIntakePlanDateTime()) {
            $data['intakePlanDateTime'] = $object->getIntakePlanDateTime();
        }
        if (null !== $object->getPosition()) {
            $data['position'] = $object->getPosition();
        }
        if (null !== $object->getReceivedByClientDateTime()) {
            $data['receivedByClientDateTime'] = $object->getReceivedByClientDateTime();
        }
        if (null !== $object->getReceivingByDocument()) {
            $data['receivingByDocument'] = $object->getReceivingByDocument();
        }
        if (null !== $object->getReceivingBySMSCode()) {
            $data['receivingBySMSCode'] = $object->getReceivingBySMSCode();
        }
        if (null !== $object->getSendingDateTime()) {
            $data['sendingDateTime'] = $object->getSendingDateTime();
        }
        if (null !== $object->getStatuses()) {
            $values = array();
            foreach ($object->getStatuses() as $value) {
                $values_1 = array();
                foreach ($value as $key => $value_1) {
                    $values_1[$key] = $value_1;
                }
                $values[] = $values_1;
            }
            $data['statuses'] = $values;
        }
        if (null !== $object->getStorageStartPlanDate()) {
            $data['storageStartPlanDate'] = $object->getStorageStartPlanDate();
        }
        if (null !== $object->getTakeOnStockDateTime()) {
            $data['takeOnStockDateTime'] = $object->getTakeOnStockDateTime();
        }
        if (null !== $object->getTakeOnStockPackageState()) {
            $data['takeOnStockPackageState'] = $object->getTakeOnStockPackageState();
        }
        if (null !== $object->getTakeOnStockPlanDateTime()) {
            $data['takeOnStockPlanDateTime'] = $object->getTakeOnStockPlanDateTime();
        }
        if (null !== $object->getCallStatus()) {
            $data['callStatus'] = $object->getCallStatus();
        }
        if (null !== $object->getCallStatusDateTime()) {
            $data['callStatusDateTime'] = $object->getCallStatusDateTime();
        }
        return $data;
    }
}