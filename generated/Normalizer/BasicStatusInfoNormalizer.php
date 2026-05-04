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
class BasicStatusInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'glook\\PecomSdk\\Generated\\Model\\BasicStatusInfo';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'glook\\PecomSdk\\Generated\\Model\\BasicStatusInfo';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \glook\PecomSdk\Generated\Model\BasicStatusInfo();
        if (null === $data || false === \is_array($data)) {
            return $object;
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
        if (\array_key_exists('receivedByClientDateTime', $data) && $data['receivedByClientDateTime'] !== null) {
            $object->setReceivedByClientDateTime($data['receivedByClientDateTime']);
        }
        elseif (\array_key_exists('receivedByClientDateTime', $data) && $data['receivedByClientDateTime'] === null) {
            $object->setReceivedByClientDateTime(null);
        }
        if (\array_key_exists('sendingDateTime', $data) && $data['sendingDateTime'] !== null) {
            $object->setSendingDateTime($data['sendingDateTime']);
        }
        elseif (\array_key_exists('sendingDateTime', $data) && $data['sendingDateTime'] === null) {
            $object->setSendingDateTime(null);
        }
        if (\array_key_exists('takeOnStockDateTime', $data) && $data['takeOnStockDateTime'] !== null) {
            $object->setTakeOnStockDateTime($data['takeOnStockDateTime']);
        }
        elseif (\array_key_exists('takeOnStockDateTime', $data) && $data['takeOnStockDateTime'] === null) {
            $object->setTakeOnStockDateTime(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getArrivalDateTime()) {
            $data['arrivalDateTime'] = $object->getArrivalDateTime();
        }
        if (null !== $object->getArrivalPlanDateTime()) {
            $data['arrivalPlanDateTime'] = $object->getArrivalPlanDateTime();
        }
        if (null !== $object->getCargoStatus()) {
            $data['cargoStatus'] = $object->getCargoStatus();
        }
        if (null !== $object->getDeliveryPlanDate()) {
            $data['deliveryPlanDate'] = $object->getDeliveryPlanDate();
        }
        if (null !== $object->getGiveOutDateTime()) {
            $data['giveOutDateTime'] = $object->getGiveOutDateTime();
        }
        if (null !== $object->getReceivedByClientDateTime()) {
            $data['receivedByClientDateTime'] = $object->getReceivedByClientDateTime();
        }
        if (null !== $object->getSendingDateTime()) {
            $data['sendingDateTime'] = $object->getSendingDateTime();
        }
        if (null !== $object->getTakeOnStockDateTime()) {
            $data['takeOnStockDateTime'] = $object->getTakeOnStockDateTime();
        }
        return $data;
    }
}