<?php

namespace glook\PecomSdk\Generated\Normalizer;

use glook\PecomSdk\Generated\Model\CargoStatusInfo;
use glook\PecomSdk\Generated\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
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
        return 'glook\PecomSdk\Generated\Model\CargoStatusInfo' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'glook\PecomSdk\Generated\Model\CargoStatusInfo' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new CargoStatusInfo();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('arrivalContractDateTime', $data) && null !== $data['arrivalContractDateTime']) {
            $object->setArrivalContractDateTime($data['arrivalContractDateTime']);
        } elseif (\array_key_exists('arrivalContractDateTime', $data) && null === $data['arrivalContractDateTime']) {
            $object->setArrivalContractDateTime(null);
        }
        if (\array_key_exists('arrivalDateTime', $data) && null !== $data['arrivalDateTime']) {
            $object->setArrivalDateTime($data['arrivalDateTime']);
        } elseif (\array_key_exists('arrivalDateTime', $data) && null === $data['arrivalDateTime']) {
            $object->setArrivalDateTime(null);
        }
        if (\array_key_exists('arrivalPlanDateTime', $data) && null !== $data['arrivalPlanDateTime']) {
            $object->setArrivalPlanDateTime($data['arrivalPlanDateTime']);
        } elseif (\array_key_exists('arrivalPlanDateTime', $data) && null === $data['arrivalPlanDateTime']) {
            $object->setArrivalPlanDateTime(null);
        }
        if (\array_key_exists('cargoStatus', $data) && null !== $data['cargoStatus']) {
            $object->setCargoStatus($data['cargoStatus']);
        } elseif (\array_key_exists('cargoStatus', $data) && null === $data['cargoStatus']) {
            $object->setCargoStatus(null);
        }
        if (\array_key_exists('cargoStatusId', $data) && null !== $data['cargoStatusId']) {
            $object->setCargoStatusId($data['cargoStatusId']);
        } elseif (\array_key_exists('cargoStatusId', $data) && null === $data['cargoStatusId']) {
            $object->setCargoStatusId(null);
        }
        if (\array_key_exists('deliveryPlanDate', $data) && null !== $data['deliveryPlanDate']) {
            $object->setDeliveryPlanDate($data['deliveryPlanDate']);
        } elseif (\array_key_exists('deliveryPlanDate', $data) && null === $data['deliveryPlanDate']) {
            $object->setDeliveryPlanDate(null);
        }
        if (\array_key_exists('giveOutDateTime', $data) && null !== $data['giveOutDateTime']) {
            $object->setGiveOutDateTime($data['giveOutDateTime']);
        } elseif (\array_key_exists('giveOutDateTime', $data) && null === $data['giveOutDateTime']) {
            $object->setGiveOutDateTime(null);
        }
        if (\array_key_exists('intakePlanDateTime', $data) && null !== $data['intakePlanDateTime']) {
            $object->setIntakePlanDateTime($data['intakePlanDateTime']);
        } elseif (\array_key_exists('intakePlanDateTime', $data) && null === $data['intakePlanDateTime']) {
            $object->setIntakePlanDateTime(null);
        }
        if (\array_key_exists('position', $data) && null !== $data['position']) {
            $object->setPosition($data['position']);
        } elseif (\array_key_exists('position', $data) && null === $data['position']) {
            $object->setPosition(null);
        }
        if (\array_key_exists('receivedByClientDateTime', $data) && null !== $data['receivedByClientDateTime']) {
            $object->setReceivedByClientDateTime($data['receivedByClientDateTime']);
        } elseif (\array_key_exists('receivedByClientDateTime', $data) && null === $data['receivedByClientDateTime']) {
            $object->setReceivedByClientDateTime(null);
        }
        if (\array_key_exists('receivingByDocument', $data) && null !== $data['receivingByDocument']) {
            $object->setReceivingByDocument($data['receivingByDocument']);
        } elseif (\array_key_exists('receivingByDocument', $data) && null === $data['receivingByDocument']) {
            $object->setReceivingByDocument(null);
        }
        if (\array_key_exists('receivingBySMSCode', $data) && null !== $data['receivingBySMSCode']) {
            $object->setReceivingBySMSCode($data['receivingBySMSCode']);
        } elseif (\array_key_exists('receivingBySMSCode', $data) && null === $data['receivingBySMSCode']) {
            $object->setReceivingBySMSCode(null);
        }
        if (\array_key_exists('sendingDateTime', $data) && null !== $data['sendingDateTime']) {
            $object->setSendingDateTime($data['sendingDateTime']);
        } elseif (\array_key_exists('sendingDateTime', $data) && null === $data['sendingDateTime']) {
            $object->setSendingDateTime(null);
        }
        if (\array_key_exists('statuses', $data) && null !== $data['statuses']) {
            $values = [];
            foreach ($data['statuses'] as $value) {
                $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($value as $key => $value_1) {
                    $values_1[$key] = $value_1;
                }
                $values[] = $values_1;
            }
            $object->setStatuses($values);
        } elseif (\array_key_exists('statuses', $data) && null === $data['statuses']) {
            $object->setStatuses(null);
        }
        if (\array_key_exists('storageStartPlanDate', $data) && null !== $data['storageStartPlanDate']) {
            $object->setStorageStartPlanDate($data['storageStartPlanDate']);
        } elseif (\array_key_exists('storageStartPlanDate', $data) && null === $data['storageStartPlanDate']) {
            $object->setStorageStartPlanDate(null);
        }
        if (\array_key_exists('takeOnStockDateTime', $data) && null !== $data['takeOnStockDateTime']) {
            $object->setTakeOnStockDateTime($data['takeOnStockDateTime']);
        } elseif (\array_key_exists('takeOnStockDateTime', $data) && null === $data['takeOnStockDateTime']) {
            $object->setTakeOnStockDateTime(null);
        }
        if (\array_key_exists('takeOnStockPackageState', $data) && null !== $data['takeOnStockPackageState']) {
            $object->setTakeOnStockPackageState($data['takeOnStockPackageState']);
        } elseif (\array_key_exists('takeOnStockPackageState', $data) && null === $data['takeOnStockPackageState']) {
            $object->setTakeOnStockPackageState(null);
        }
        if (\array_key_exists('takeOnStockPlanDateTime', $data) && null !== $data['takeOnStockPlanDateTime']) {
            $object->setTakeOnStockPlanDateTime($data['takeOnStockPlanDateTime']);
        } elseif (\array_key_exists('takeOnStockPlanDateTime', $data) && null === $data['takeOnStockPlanDateTime']) {
            $object->setTakeOnStockPlanDateTime(null);
        }
        if (\array_key_exists('callStatus', $data) && null !== $data['callStatus']) {
            $object->setCallStatus($data['callStatus']);
        } elseif (\array_key_exists('callStatus', $data) && null === $data['callStatus']) {
            $object->setCallStatus(null);
        }
        if (\array_key_exists('callStatusDateTime', $data) && null !== $data['callStatusDateTime']) {
            $object->setCallStatusDateTime($data['callStatusDateTime']);
        } elseif (\array_key_exists('callStatusDateTime', $data) && null === $data['callStatusDateTime']) {
            $object->setCallStatusDateTime(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
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
            $values = [];
            foreach ($object->getStatuses() as $value) {
                $values_1 = [];
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
