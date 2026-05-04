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
class ForcedStoragePeriodNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'glook\\PecomSdk\\Generated\\Model\\ForcedStoragePeriod';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'glook\\PecomSdk\\Generated\\Model\\ForcedStoragePeriod';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \glook\PecomSdk\Generated\Model\ForcedStoragePeriod();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('cargoStatus', $data) && $data['cargoStatus'] !== null) {
            $object->setCargoStatus($data['cargoStatus']);
        }
        elseif (\array_key_exists('cargoStatus', $data) && $data['cargoStatus'] === null) {
            $object->setCargoStatus(null);
        }
        if (\array_key_exists('costStorage', $data) && $data['costStorage'] !== null) {
            $object->setCostStorage($data['costStorage']);
        }
        elseif (\array_key_exists('costStorage', $data) && $data['costStorage'] === null) {
            $object->setCostStorage(null);
        }
        if (\array_key_exists('endDataNumber', $data) && $data['endDataNumber'] !== null) {
            $object->setEndDataNumber($data['endDataNumber']);
        }
        elseif (\array_key_exists('endDataNumber', $data) && $data['endDataNumber'] === null) {
            $object->setEndDataNumber(null);
        }
        if (\array_key_exists('endDate', $data) && $data['endDate'] !== null) {
            $object->setEndDate($data['endDate']);
        }
        elseif (\array_key_exists('endDate', $data) && $data['endDate'] === null) {
            $object->setEndDate(null);
        }
        if (\array_key_exists('minStorageCost', $data) && $data['minStorageCost'] !== null) {
            $object->setMinStorageCost($data['minStorageCost']);
        }
        elseif (\array_key_exists('minStorageCost', $data) && $data['minStorageCost'] === null) {
            $object->setMinStorageCost(null);
        }
        if (\array_key_exists('rate', $data) && $data['rate'] !== null) {
            $object->setRate($data['rate']);
        }
        elseif (\array_key_exists('rate', $data) && $data['rate'] === null) {
            $object->setRate(null);
        }
        if (\array_key_exists('startDataNumber', $data) && $data['startDataNumber'] !== null) {
            $object->setStartDataNumber($data['startDataNumber']);
        }
        elseif (\array_key_exists('startDataNumber', $data) && $data['startDataNumber'] === null) {
            $object->setStartDataNumber(null);
        }
        if (\array_key_exists('startDate', $data) && $data['startDate'] !== null) {
            $object->setStartDate($data['startDate']);
        }
        elseif (\array_key_exists('startDate', $data) && $data['startDate'] === null) {
            $object->setStartDate(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getCargoStatus()) {
            $data['cargoStatus'] = $object->getCargoStatus();
        }
        if (null !== $object->getCostStorage()) {
            $data['costStorage'] = $object->getCostStorage();
        }
        if (null !== $object->getEndDataNumber()) {
            $data['endDataNumber'] = $object->getEndDataNumber();
        }
        if (null !== $object->getEndDate()) {
            $data['endDate'] = $object->getEndDate();
        }
        if (null !== $object->getMinStorageCost()) {
            $data['minStorageCost'] = $object->getMinStorageCost();
        }
        if (null !== $object->getRate()) {
            $data['rate'] = $object->getRate();
        }
        if (null !== $object->getStartDataNumber()) {
            $data['startDataNumber'] = $object->getStartDataNumber();
        }
        if (null !== $object->getStartDate()) {
            $data['startDate'] = $object->getStartDate();
        }
        return $data;
    }
}