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
class CalculatePriceRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'glook\\PecomSdk\\Generated\\Model\\CalculatePriceRequest';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'glook\\PecomSdk\\Generated\\Model\\CalculatePriceRequest';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \glook\PecomSdk\Generated\Model\CalculatePriceRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('cargos', $data) && $data['cargos'] !== null) {
            $values = array();
            foreach ($data['cargos'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'glook\\PecomSdk\\Generated\\Model\\Cargo', 'json', $context);
            }
            $object->setCargos($values);
        }
        elseif (\array_key_exists('cargos', $data) && $data['cargos'] === null) {
            $object->setCargos(null);
        }
        if (\array_key_exists('counterpart', $data)) {
            $object->setCounterpart($this->denormalizer->denormalize($data['counterpart'], 'glook\\PecomSdk\\Generated\\Model\\Counterpart', 'json', $context));
        }
        if (\array_key_exists('currencyCode', $data) && $data['currencyCode'] !== null) {
            $object->setCurrencyCode($data['currencyCode']);
        }
        elseif (\array_key_exists('currencyCode', $data) && $data['currencyCode'] === null) {
            $object->setCurrencyCode(null);
        }
        if (\array_key_exists('delivery', $data)) {
            $object->setDelivery($this->denormalizer->denormalize($data['delivery'], 'glook\\PecomSdk\\Generated\\Model\\AddressBlock', 'json', $context));
        }
        if (\array_key_exists('deliveryServices', $data)) {
            $object->setDeliveryServices($this->denormalizer->denormalize($data['deliveryServices'], 'glook\\PecomSdk\\Generated\\Model\\LoadingServices', 'json', $context));
        }
        if (\array_key_exists('isDelivery', $data) && $data['isDelivery'] !== null) {
            $object->setIsDelivery($data['isDelivery']);
        }
        elseif (\array_key_exists('isDelivery', $data) && $data['isDelivery'] === null) {
            $object->setIsDelivery(null);
        }
        if (\array_key_exists('isHyperMarket', $data) && $data['isHyperMarket'] !== null) {
            $object->setIsHyperMarket($data['isHyperMarket']);
        }
        elseif (\array_key_exists('isHyperMarket', $data) && $data['isHyperMarket'] === null) {
            $object->setIsHyperMarket(null);
        }
        if (\array_key_exists('isInsurance', $data) && $data['isInsurance'] !== null) {
            $object->setIsInsurance($data['isInsurance']);
        }
        elseif (\array_key_exists('isInsurance', $data) && $data['isInsurance'] === null) {
            $object->setIsInsurance(null);
        }
        if (\array_key_exists('isInsurancePrice', $data) && $data['isInsurancePrice'] !== null) {
            $object->setIsInsurancePrice($data['isInsurancePrice']);
        }
        elseif (\array_key_exists('isInsurancePrice', $data) && $data['isInsurancePrice'] === null) {
            $object->setIsInsurancePrice(null);
        }
        if (\array_key_exists('isOpenCarReceiver', $data) && $data['isOpenCarReceiver'] !== null) {
            $object->setIsOpenCarReceiver($data['isOpenCarReceiver']);
        }
        elseif (\array_key_exists('isOpenCarReceiver', $data) && $data['isOpenCarReceiver'] === null) {
            $object->setIsOpenCarReceiver(null);
        }
        if (\array_key_exists('isOpenCarSender', $data) && $data['isOpenCarSender'] !== null) {
            $object->setIsOpenCarSender($data['isOpenCarSender']);
        }
        elseif (\array_key_exists('isOpenCarSender', $data) && $data['isOpenCarSender'] === null) {
            $object->setIsOpenCarSender(null);
        }
        if (\array_key_exists('isPickUp', $data) && $data['isPickUp'] !== null) {
            $object->setIsPickUp($data['isPickUp']);
        }
        elseif (\array_key_exists('isPickUp', $data) && $data['isPickUp'] === null) {
            $object->setIsPickUp(null);
        }
        if (\array_key_exists('needArrangeTransportationDocuments', $data) && $data['needArrangeTransportationDocuments'] !== null) {
            $object->setNeedArrangeTransportationDocuments($data['needArrangeTransportationDocuments']);
        }
        elseif (\array_key_exists('needArrangeTransportationDocuments', $data) && $data['needArrangeTransportationDocuments'] === null) {
            $object->setNeedArrangeTransportationDocuments(null);
        }
        if (\array_key_exists('needReturnDocuments', $data) && $data['needReturnDocuments'] !== null) {
            $object->setNeedReturnDocuments($data['needReturnDocuments']);
        }
        elseif (\array_key_exists('needReturnDocuments', $data) && $data['needReturnDocuments'] === null) {
            $object->setNeedReturnDocuments(null);
        }
        if (\array_key_exists('pickup', $data)) {
            $object->setPickup($this->denormalizer->denormalize($data['pickup'], 'glook\\PecomSdk\\Generated\\Model\\AddressBlock', 'json', $context));
        }
        if (\array_key_exists('pickupServices', $data)) {
            $object->setPickupServices($this->denormalizer->denormalize($data['pickupServices'], 'glook\\PecomSdk\\Generated\\Model\\LoadingServices', 'json', $context));
        }
        if (\array_key_exists('plannedDateTime', $data) && $data['plannedDateTime'] !== null) {
            $object->setPlannedDateTime($data['plannedDateTime']);
        }
        elseif (\array_key_exists('plannedDateTime', $data) && $data['plannedDateTime'] === null) {
            $object->setPlannedDateTime(null);
        }
        if (\array_key_exists('receiverDistanceType', $data) && $data['receiverDistanceType'] !== null) {
            $object->setReceiverDistanceType($data['receiverDistanceType']);
        }
        elseif (\array_key_exists('receiverDistanceType', $data) && $data['receiverDistanceType'] === null) {
            $object->setReceiverDistanceType(null);
        }
        if (\array_key_exists('receiverWarehouseId', $data) && $data['receiverWarehouseId'] !== null) {
            $object->setReceiverWarehouseId($data['receiverWarehouseId']);
        }
        elseif (\array_key_exists('receiverWarehouseId', $data) && $data['receiverWarehouseId'] === null) {
            $object->setReceiverWarehouseId(null);
        }
        if (\array_key_exists('senderDistanceType', $data) && $data['senderDistanceType'] !== null) {
            $object->setSenderDistanceType($data['senderDistanceType']);
        }
        elseif (\array_key_exists('senderDistanceType', $data) && $data['senderDistanceType'] === null) {
            $object->setSenderDistanceType(null);
        }
        if (\array_key_exists('senderWarehouseId', $data) && $data['senderWarehouseId'] !== null) {
            $object->setSenderWarehouseId($data['senderWarehouseId']);
        }
        elseif (\array_key_exists('senderWarehouseId', $data) && $data['senderWarehouseId'] === null) {
            $object->setSenderWarehouseId(null);
        }
        if (\array_key_exists('types', $data)) {
            $values_1 = array();
            foreach ($data['types'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setTypes($values_1);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getCargos()) {
            $values = array();
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
        $values_1 = array();
        foreach ($object->getTypes() as $value_1) {
            $values_1[] = $value_1;
        }
        $data['types'] = $values_1;
        return $data;
    }
}