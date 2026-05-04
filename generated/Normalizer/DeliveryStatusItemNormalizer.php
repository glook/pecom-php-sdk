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
class DeliveryStatusItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'glook\\PecomSdk\\Generated\\Model\\DeliveryStatusItem';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'glook\\PecomSdk\\Generated\\Model\\DeliveryStatusItem';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \glook\PecomSdk\Generated\Model\DeliveryStatusItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('carBrand', $data) && $data['carBrand'] !== null) {
            $object->setCarBrand($data['carBrand']);
        }
        elseif (\array_key_exists('carBrand', $data) && $data['carBrand'] === null) {
            $object->setCarBrand(null);
        }
        if (\array_key_exists('carDriver', $data) && $data['carDriver'] !== null) {
            $object->setCarDriver($data['carDriver']);
        }
        elseif (\array_key_exists('carDriver', $data) && $data['carDriver'] === null) {
            $object->setCarDriver(null);
        }
        if (\array_key_exists('carDriverPhone', $data) && $data['carDriverPhone'] !== null) {
            $object->setCarDriverPhone($data['carDriverPhone']);
        }
        elseif (\array_key_exists('carDriverPhone', $data) && $data['carDriverPhone'] === null) {
            $object->setCarDriverPhone(null);
        }
        if (\array_key_exists('cargoCode', $data) && $data['cargoCode'] !== null) {
            $object->setCargoCode($data['cargoCode']);
        }
        elseif (\array_key_exists('cargoCode', $data) && $data['cargoCode'] === null) {
            $object->setCargoCode(null);
        }
        if (\array_key_exists('carNumber', $data) && $data['carNumber'] !== null) {
            $object->setCarNumber($data['carNumber']);
        }
        elseif (\array_key_exists('carNumber', $data) && $data['carNumber'] === null) {
            $object->setCarNumber(null);
        }
        if (\array_key_exists('deliveryAddress', $data) && $data['deliveryAddress'] !== null) {
            $object->setDeliveryAddress($data['deliveryAddress']);
        }
        elseif (\array_key_exists('deliveryAddress', $data) && $data['deliveryAddress'] === null) {
            $object->setDeliveryAddress(null);
        }
        if (\array_key_exists('deliveryAgreedDate', $data) && $data['deliveryAgreedDate'] !== null) {
            $object->setDeliveryAgreedDate($data['deliveryAgreedDate']);
        }
        elseif (\array_key_exists('deliveryAgreedDate', $data) && $data['deliveryAgreedDate'] === null) {
            $object->setDeliveryAgreedDate(null);
        }
        if (\array_key_exists('deliveryPlanDate', $data) && $data['deliveryPlanDate'] !== null) {
            $object->setDeliveryPlanDate($data['deliveryPlanDate']);
        }
        elseif (\array_key_exists('deliveryPlanDate', $data) && $data['deliveryPlanDate'] === null) {
            $object->setDeliveryPlanDate(null);
        }
        if (\array_key_exists('deliveryStatus', $data) && $data['deliveryStatus'] !== null) {
            $object->setDeliveryStatus($data['deliveryStatus']);
        }
        elseif (\array_key_exists('deliveryStatus', $data) && $data['deliveryStatus'] === null) {
            $object->setDeliveryStatus(null);
        }
        if (\array_key_exists('deliveryStatusCode', $data) && $data['deliveryStatusCode'] !== null) {
            $object->setDeliveryStatusCode($data['deliveryStatusCode']);
        }
        elseif (\array_key_exists('deliveryStatusCode', $data) && $data['deliveryStatusCode'] === null) {
            $object->setDeliveryStatusCode(null);
        }
        if (\array_key_exists('delivieryHypermarket', $data) && $data['delivieryHypermarket'] !== null) {
            $object->setDelivieryHypermarket($data['delivieryHypermarket']);
        }
        elseif (\array_key_exists('delivieryHypermarket', $data) && $data['delivieryHypermarket'] === null) {
            $object->setDelivieryHypermarket(null);
        }
        if (\array_key_exists('intervalFrom', $data) && $data['intervalFrom'] !== null) {
            $object->setIntervalFrom($data['intervalFrom']);
        }
        elseif (\array_key_exists('intervalFrom', $data) && $data['intervalFrom'] === null) {
            $object->setIntervalFrom(null);
        }
        if (\array_key_exists('intervallunchBreakFrom', $data) && $data['intervallunchBreakFrom'] !== null) {
            $object->setIntervallunchBreakFrom($data['intervallunchBreakFrom']);
        }
        elseif (\array_key_exists('intervallunchBreakFrom', $data) && $data['intervallunchBreakFrom'] === null) {
            $object->setIntervallunchBreakFrom(null);
        }
        if (\array_key_exists('intervallunchBreakTo', $data) && $data['intervallunchBreakTo'] !== null) {
            $object->setIntervallunchBreakTo($data['intervallunchBreakTo']);
        }
        elseif (\array_key_exists('intervallunchBreakTo', $data) && $data['intervallunchBreakTo'] === null) {
            $object->setIntervallunchBreakTo(null);
        }
        if (\array_key_exists('intervalTo', $data) && $data['intervalTo'] !== null) {
            $object->setIntervalTo($data['intervalTo']);
        }
        elseif (\array_key_exists('intervalTo', $data) && $data['intervalTo'] === null) {
            $object->setIntervalTo(null);
        }
        if (\array_key_exists('isLoading', $data) && $data['isLoading'] !== null) {
            $object->setIsLoading($data['isLoading']);
        }
        elseif (\array_key_exists('isLoading', $data) && $data['isLoading'] === null) {
            $object->setIsLoading(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getCarBrand()) {
            $data['carBrand'] = $object->getCarBrand();
        }
        if (null !== $object->getCarDriver()) {
            $data['carDriver'] = $object->getCarDriver();
        }
        if (null !== $object->getCarDriverPhone()) {
            $data['carDriverPhone'] = $object->getCarDriverPhone();
        }
        if (null !== $object->getCargoCode()) {
            $data['cargoCode'] = $object->getCargoCode();
        }
        if (null !== $object->getCarNumber()) {
            $data['carNumber'] = $object->getCarNumber();
        }
        if (null !== $object->getDeliveryAddress()) {
            $data['deliveryAddress'] = $object->getDeliveryAddress();
        }
        if (null !== $object->getDeliveryAgreedDate()) {
            $data['deliveryAgreedDate'] = $object->getDeliveryAgreedDate();
        }
        if (null !== $object->getDeliveryPlanDate()) {
            $data['deliveryPlanDate'] = $object->getDeliveryPlanDate();
        }
        if (null !== $object->getDeliveryStatus()) {
            $data['deliveryStatus'] = $object->getDeliveryStatus();
        }
        if (null !== $object->getDeliveryStatusCode()) {
            $data['deliveryStatusCode'] = $object->getDeliveryStatusCode();
        }
        if (null !== $object->getDelivieryHypermarket()) {
            $data['delivieryHypermarket'] = $object->getDelivieryHypermarket();
        }
        if (null !== $object->getIntervalFrom()) {
            $data['intervalFrom'] = $object->getIntervalFrom();
        }
        if (null !== $object->getIntervallunchBreakFrom()) {
            $data['intervallunchBreakFrom'] = $object->getIntervallunchBreakFrom();
        }
        if (null !== $object->getIntervallunchBreakTo()) {
            $data['intervallunchBreakTo'] = $object->getIntervallunchBreakTo();
        }
        if (null !== $object->getIntervalTo()) {
            $data['intervalTo'] = $object->getIntervalTo();
        }
        if (null !== $object->getIsLoading()) {
            $data['isLoading'] = $object->getIsLoading();
        }
        return $data;
    }
}