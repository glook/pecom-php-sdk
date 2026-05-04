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
class CargoPickupStatusItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'glook\\PecomSdk\\Generated\\Model\\CargoPickupStatusItem';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'glook\\PecomSdk\\Generated\\Model\\CargoPickupStatusItem';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \glook\PecomSdk\Generated\Model\CargoPickupStatusItem();
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
        if (\array_key_exists('cargoCode', $data)) {
            $object->setCargoCode($data['cargoCode']);
        }
        if (\array_key_exists('carNumber', $data) && $data['carNumber'] !== null) {
            $object->setCarNumber($data['carNumber']);
        }
        elseif (\array_key_exists('carNumber', $data) && $data['carNumber'] === null) {
            $object->setCarNumber(null);
        }
        if (\array_key_exists('error', $data) && $data['error'] !== null) {
            $object->setError($data['error']);
        }
        elseif (\array_key_exists('error', $data) && $data['error'] === null) {
            $object->setError(null);
        }
        if (\array_key_exists('fenceStatus', $data) && $data['fenceStatus'] !== null) {
            $object->setFenceStatus($data['fenceStatus']);
        }
        elseif (\array_key_exists('fenceStatus', $data) && $data['fenceStatus'] === null) {
            $object->setFenceStatus(null);
        }
        if (\array_key_exists('intakeStatus', $data) && $data['intakeStatus'] !== null) {
            $object->setIntakeStatus($data['intakeStatus']);
        }
        elseif (\array_key_exists('intakeStatus', $data) && $data['intakeStatus'] === null) {
            $object->setIntakeStatus(null);
        }
        if (\array_key_exists('intakeStatusCode', $data) && $data['intakeStatusCode'] !== null) {
            $object->setIntakeStatusCode($data['intakeStatusCode']);
        }
        elseif (\array_key_exists('intakeStatusCode', $data) && $data['intakeStatusCode'] === null) {
            $object->setIntakeStatusCode(null);
        }
        if (\array_key_exists('intervalFrom', $data) && $data['intervalFrom'] !== null) {
            $object->setIntervalFrom($data['intervalFrom']);
        }
        elseif (\array_key_exists('intervalFrom', $data) && $data['intervalFrom'] === null) {
            $object->setIntervalFrom(null);
        }
        if (\array_key_exists('intervalLunchBreakFrom', $data) && $data['intervalLunchBreakFrom'] !== null) {
            $object->setIntervalLunchBreakFrom($data['intervalLunchBreakFrom']);
        }
        elseif (\array_key_exists('intervalLunchBreakFrom', $data) && $data['intervalLunchBreakFrom'] === null) {
            $object->setIntervalLunchBreakFrom(null);
        }
        if (\array_key_exists('intervalLunchBreakTo', $data) && $data['intervalLunchBreakTo'] !== null) {
            $object->setIntervalLunchBreakTo($data['intervalLunchBreakTo']);
        }
        elseif (\array_key_exists('intervalLunchBreakTo', $data) && $data['intervalLunchBreakTo'] === null) {
            $object->setIntervalLunchBreakTo(null);
        }
        if (\array_key_exists('intervalTo', $data) && $data['intervalTo'] !== null) {
            $object->setIntervalTo($data['intervalTo']);
        }
        elseif (\array_key_exists('intervalTo', $data) && $data['intervalTo'] === null) {
            $object->setIntervalTo(null);
        }
        if (\array_key_exists('pickupDate', $data) && $data['pickupDate'] !== null) {
            $object->setPickupDate(\DateTime::createFromFormat('Y-m-d', $data['pickupDate'])->setTime(0, 0, 0));
        }
        elseif (\array_key_exists('pickupDate', $data) && $data['pickupDate'] === null) {
            $object->setPickupDate(null);
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
        $data['cargoCode'] = $object->getCargoCode();
        if (null !== $object->getCarNumber()) {
            $data['carNumber'] = $object->getCarNumber();
        }
        if (null !== $object->getError()) {
            $data['error'] = $object->getError();
        }
        if (null !== $object->getFenceStatus()) {
            $data['fenceStatus'] = $object->getFenceStatus();
        }
        if (null !== $object->getIntakeStatus()) {
            $data['intakeStatus'] = $object->getIntakeStatus();
        }
        if (null !== $object->getIntakeStatusCode()) {
            $data['intakeStatusCode'] = $object->getIntakeStatusCode();
        }
        if (null !== $object->getIntervalFrom()) {
            $data['intervalFrom'] = $object->getIntervalFrom();
        }
        if (null !== $object->getIntervalLunchBreakFrom()) {
            $data['intervalLunchBreakFrom'] = $object->getIntervalLunchBreakFrom();
        }
        if (null !== $object->getIntervalLunchBreakTo()) {
            $data['intervalLunchBreakTo'] = $object->getIntervalLunchBreakTo();
        }
        if (null !== $object->getIntervalTo()) {
            $data['intervalTo'] = $object->getIntervalTo();
        }
        if (null !== $object->getPickupDate()) {
            $data['pickupDate'] = $object->getPickupDate()->format('Y-m-d');
        }
        return $data;
    }
}