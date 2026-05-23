<?php

namespace glook\PecomSdk\Generated\Normalizer;

use glook\PecomSdk\Generated\Model\CalculatePriceRequest;
use glook\PecomSdk\Generated\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CalculatePriceRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'glook\PecomSdk\Generated\Model\CalculatePriceRequest' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'glook\PecomSdk\Generated\Model\CalculatePriceRequest' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new CalculatePriceRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('cargos', $data) && null !== $data['cargos']) {
            $values = [];
            foreach ($data['cargos'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'glook\PecomSdk\Generated\Model\Cargo', 'json', $context);
            }
            $object->setCargos($values);
        } elseif (\array_key_exists('cargos', $data) && null === $data['cargos']) {
            $object->setCargos(null);
        }
        if (\array_key_exists('counterpart', $data) && null !== $data['counterpart']) {
            $object->setCounterpart($this->denormalizer->denormalize($data['counterpart'], 'glook\PecomSdk\Generated\Model\Counterpart', 'json', $context));
        } elseif (\array_key_exists('counterpart', $data) && null === $data['counterpart']) {
            $object->setCounterpart(null);
        }
        if (\array_key_exists('currencyCode', $data) && null !== $data['currencyCode']) {
            $object->setCurrencyCode($data['currencyCode']);
        } elseif (\array_key_exists('currencyCode', $data) && null === $data['currencyCode']) {
            $object->setCurrencyCode(null);
        }
        if (\array_key_exists('delivery', $data) && null !== $data['delivery']) {
            $object->setDelivery($this->denormalizer->denormalize($data['delivery'], 'glook\PecomSdk\Generated\Model\AddressBlock', 'json', $context));
        } elseif (\array_key_exists('delivery', $data) && null === $data['delivery']) {
            $object->setDelivery(null);
        }
        if (\array_key_exists('deliveryServices', $data) && null !== $data['deliveryServices']) {
            $object->setDeliveryServices($this->denormalizer->denormalize($data['deliveryServices'], 'glook\PecomSdk\Generated\Model\LoadingServices', 'json', $context));
        } elseif (\array_key_exists('deliveryServices', $data) && null === $data['deliveryServices']) {
            $object->setDeliveryServices(null);
        }
        if (\array_key_exists('isDelivery', $data) && null !== $data['isDelivery']) {
            $object->setIsDelivery($data['isDelivery']);
        } elseif (\array_key_exists('isDelivery', $data) && null === $data['isDelivery']) {
            $object->setIsDelivery(null);
        }
        if (\array_key_exists('isHyperMarket', $data) && null !== $data['isHyperMarket']) {
            $object->setIsHyperMarket($data['isHyperMarket']);
        } elseif (\array_key_exists('isHyperMarket', $data) && null === $data['isHyperMarket']) {
            $object->setIsHyperMarket(null);
        }
        if (\array_key_exists('isInsurance', $data) && null !== $data['isInsurance']) {
            $object->setIsInsurance($data['isInsurance']);
        } elseif (\array_key_exists('isInsurance', $data) && null === $data['isInsurance']) {
            $object->setIsInsurance(null);
        }
        if (\array_key_exists('isInsurancePrice', $data) && null !== $data['isInsurancePrice']) {
            $object->setIsInsurancePrice($data['isInsurancePrice']);
        } elseif (\array_key_exists('isInsurancePrice', $data) && null === $data['isInsurancePrice']) {
            $object->setIsInsurancePrice(null);
        }
        if (\array_key_exists('isOpenCarReceiver', $data) && null !== $data['isOpenCarReceiver']) {
            $object->setIsOpenCarReceiver($data['isOpenCarReceiver']);
        } elseif (\array_key_exists('isOpenCarReceiver', $data) && null === $data['isOpenCarReceiver']) {
            $object->setIsOpenCarReceiver(null);
        }
        if (\array_key_exists('isOpenCarSender', $data) && null !== $data['isOpenCarSender']) {
            $object->setIsOpenCarSender($data['isOpenCarSender']);
        } elseif (\array_key_exists('isOpenCarSender', $data) && null === $data['isOpenCarSender']) {
            $object->setIsOpenCarSender(null);
        }
        if (\array_key_exists('isPickUp', $data) && null !== $data['isPickUp']) {
            $object->setIsPickUp($data['isPickUp']);
        } elseif (\array_key_exists('isPickUp', $data) && null === $data['isPickUp']) {
            $object->setIsPickUp(null);
        }
        if (\array_key_exists('needArrangeTransportationDocuments', $data) && null !== $data['needArrangeTransportationDocuments']) {
            $object->setNeedArrangeTransportationDocuments($data['needArrangeTransportationDocuments']);
        } elseif (\array_key_exists('needArrangeTransportationDocuments', $data) && null === $data['needArrangeTransportationDocuments']) {
            $object->setNeedArrangeTransportationDocuments(null);
        }
        if (\array_key_exists('needReturnDocuments', $data) && null !== $data['needReturnDocuments']) {
            $object->setNeedReturnDocuments($data['needReturnDocuments']);
        } elseif (\array_key_exists('needReturnDocuments', $data) && null === $data['needReturnDocuments']) {
            $object->setNeedReturnDocuments(null);
        }
        if (\array_key_exists('pickup', $data) && null !== $data['pickup']) {
            $object->setPickup($this->denormalizer->denormalize($data['pickup'], 'glook\PecomSdk\Generated\Model\AddressBlock', 'json', $context));
        } elseif (\array_key_exists('pickup', $data) && null === $data['pickup']) {
            $object->setPickup(null);
        }
        if (\array_key_exists('pickupServices', $data) && null !== $data['pickupServices']) {
            $object->setPickupServices($this->denormalizer->denormalize($data['pickupServices'], 'glook\PecomSdk\Generated\Model\LoadingServices', 'json', $context));
        } elseif (\array_key_exists('pickupServices', $data) && null === $data['pickupServices']) {
            $object->setPickupServices(null);
        }
        if (\array_key_exists('plannedDateTime', $data) && null !== $data['plannedDateTime']) {
            $object->setPlannedDateTime($data['plannedDateTime']);
        } elseif (\array_key_exists('plannedDateTime', $data) && null === $data['plannedDateTime']) {
            $object->setPlannedDateTime(null);
        }
        if (\array_key_exists('receiverDistanceType', $data) && null !== $data['receiverDistanceType']) {
            $object->setReceiverDistanceType($data['receiverDistanceType']);
        } elseif (\array_key_exists('receiverDistanceType', $data) && null === $data['receiverDistanceType']) {
            $object->setReceiverDistanceType(null);
        }
        if (\array_key_exists('receiverWarehouseId', $data) && null !== $data['receiverWarehouseId']) {
            $object->setReceiverWarehouseId($data['receiverWarehouseId']);
        } elseif (\array_key_exists('receiverWarehouseId', $data) && null === $data['receiverWarehouseId']) {
            $object->setReceiverWarehouseId(null);
        }
        if (\array_key_exists('senderDistanceType', $data) && null !== $data['senderDistanceType']) {
            $object->setSenderDistanceType($data['senderDistanceType']);
        } elseif (\array_key_exists('senderDistanceType', $data) && null === $data['senderDistanceType']) {
            $object->setSenderDistanceType(null);
        }
        if (\array_key_exists('senderWarehouseId', $data) && null !== $data['senderWarehouseId']) {
            $object->setSenderWarehouseId($data['senderWarehouseId']);
        } elseif (\array_key_exists('senderWarehouseId', $data) && null === $data['senderWarehouseId']) {
            $object->setSenderWarehouseId(null);
        }
        if (\array_key_exists('types', $data)) {
            $values_1 = [];
            foreach ($data['types'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setTypes($values_1);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getCargos()) {
            $values = [];
            foreach ($object->getCargos() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['cargos'] = $values;
        }
        if (null !== $object->getCounterpart()) {
            $data['counterpart'] = $this->normalizer->normalize($object->getCounterpart(), 'json', $context);
        }
        if (null !== $object->getCurrencyCode()) {
            $data['currencyCode'] = $object->getCurrencyCode();
        }
        if (null !== $object->getDelivery()) {
            $data['delivery'] = $this->normalizer->normalize($object->getDelivery(), 'json', $context);
        }
        if (null !== $object->getDeliveryServices()) {
            $data['deliveryServices'] = $this->normalizer->normalize($object->getDeliveryServices(), 'json', $context);
        }
        if (null !== $object->getIsDelivery()) {
            $data['isDelivery'] = $object->getIsDelivery();
        }
        if (null !== $object->getIsHyperMarket()) {
            $data['isHyperMarket'] = $object->getIsHyperMarket();
        }
        if (null !== $object->getIsInsurance()) {
            $data['isInsurance'] = $object->getIsInsurance();
        }
        if (null !== $object->getIsInsurancePrice()) {
            $data['isInsurancePrice'] = $object->getIsInsurancePrice();
        }
        if (null !== $object->getIsOpenCarReceiver()) {
            $data['isOpenCarReceiver'] = $object->getIsOpenCarReceiver();
        }
        if (null !== $object->getIsOpenCarSender()) {
            $data['isOpenCarSender'] = $object->getIsOpenCarSender();
        }
        if (null !== $object->getIsPickUp()) {
            $data['isPickUp'] = $object->getIsPickUp();
        }
        if (null !== $object->getNeedArrangeTransportationDocuments()) {
            $data['needArrangeTransportationDocuments'] = $object->getNeedArrangeTransportationDocuments();
        }
        if (null !== $object->getNeedReturnDocuments()) {
            $data['needReturnDocuments'] = $object->getNeedReturnDocuments();
        }
        if (null !== $object->getPickup()) {
            $data['pickup'] = $this->normalizer->normalize($object->getPickup(), 'json', $context);
        }
        if (null !== $object->getPickupServices()) {
            $data['pickupServices'] = $this->normalizer->normalize($object->getPickupServices(), 'json', $context);
        }
        if (null !== $object->getPlannedDateTime()) {
            $data['plannedDateTime'] = $object->getPlannedDateTime();
        }
        if (null !== $object->getReceiverDistanceType()) {
            $data['receiverDistanceType'] = $object->getReceiverDistanceType();
        }
        if (null !== $object->getReceiverWarehouseId()) {
            $data['receiverWarehouseId'] = $object->getReceiverWarehouseId();
        }
        if (null !== $object->getSenderDistanceType()) {
            $data['senderDistanceType'] = $object->getSenderDistanceType();
        }
        if (null !== $object->getSenderWarehouseId()) {
            $data['senderWarehouseId'] = $object->getSenderWarehouseId();
        }
        $values_1 = [];
        foreach ($object->getTypes() as $value_1) {
            $values_1[] = $value_1;
        }
        $data['types'] = $values_1;

        return $data;
    }
}
