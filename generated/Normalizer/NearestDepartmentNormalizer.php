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
class NearestDepartmentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'glook\\PecomSdk\\Generated\\Model\\NearestDepartment';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'glook\\PecomSdk\\Generated\\Model\\NearestDepartment';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \glook\PecomSdk\Generated\Model\NearestDepartment();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('address', $data)) {
            $object->setAddress($data['address']);
        }
        if (\array_key_exists('branchId', $data)) {
            $object->setBranchId($data['branchId']);
        }
        if (\array_key_exists('branchName', $data)) {
            $object->setBranchName($data['branchName']);
        }
        if (\array_key_exists('coordinates', $data)) {
            $object->setCoordinates($this->denormalizer->denormalize($data['coordinates'], 'glook\\PecomSdk\\Generated\\Model\\BranchesCoordinates', 'json', $context));
        }
        if (\array_key_exists('departmentType', $data)) {
            $object->setDepartmentType($data['departmentType']);
        }
        if (\array_key_exists('departmentTypeId', $data)) {
            $object->setDepartmentTypeId($data['departmentTypeId']);
        }
        if (\array_key_exists('divisionName', $data)) {
            $object->setDivisionName($data['divisionName']);
        }
        if (\array_key_exists('email', $data)) {
            $object->setEmail($data['email']);
        }
        if (\array_key_exists('isActive', $data)) {
            $object->setIsActive($data['isActive']);
        }
        if (\array_key_exists('maxCount', $data)) {
            $object->setMaxCount($data['maxCount']);
        }
        if (\array_key_exists('maxDimension', $data)) {
            $object->setMaxDimension($data['maxDimension']);
        }
        if (\array_key_exists('maxVolume', $data)) {
            $object->setMaxVolume($data['maxVolume']);
        }
        if (\array_key_exists('maxWeight', $data)) {
            $object->setMaxWeight($data['maxWeight']);
        }
        if (\array_key_exists('maxWeightOnePlace', $data)) {
            $object->setMaxWeightOnePlace($data['maxWeightOnePlace']);
        }
        if (\array_key_exists('phone', $data)) {
            $object->setPhone($data['phone']);
        }
        if (\array_key_exists('priority', $data)) {
            $object->setPriority($data['priority']);
        }
        if (\array_key_exists('scheduleHolidayDays', $data)) {
            $values = array();
            foreach ($data['scheduleHolidayDays'] as $value) {
                $values[] = $value;
            }
            $object->setScheduleHolidayDays($values);
        }
        if (\array_key_exists('scheduleShortWorkDays', $data)) {
            $values_1 = array();
            foreach ($data['scheduleShortWorkDays'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'glook\\PecomSdk\\Generated\\Model\\ScheduleShortWorkDay', 'json', $context);
            }
            $object->setScheduleShortWorkDays($values_1);
        }
        if (\array_key_exists('timeZone', $data)) {
            $object->setTimeZone($data['timeZone']);
        }
        if (\array_key_exists('townBitrixId', $data)) {
            $object->setTownBitrixId($data['townBitrixId']);
        }
        if (\array_key_exists('warehouseId', $data)) {
            $object->setWarehouseId($data['warehouseId']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['address'] = $object->getAddress();
        $data['branchId'] = $object->getBranchId();
        $data['branchName'] = $object->getBranchName();
        $data['coordinates'] = $this->normalizer->normalize($object->getCoordinates(), 'json', $context);
        $data['departmentType'] = $object->getDepartmentType();
        $data['departmentTypeId'] = $object->getDepartmentTypeId();
        $data['divisionName'] = $object->getDivisionName();
        $data['email'] = $object->getEmail();
        $data['isActive'] = $object->getIsActive();
        $data['maxCount'] = $object->getMaxCount();
        $data['maxDimension'] = $object->getMaxDimension();
        $data['maxVolume'] = $object->getMaxVolume();
        $data['maxWeight'] = $object->getMaxWeight();
        $data['maxWeightOnePlace'] = $object->getMaxWeightOnePlace();
        $data['phone'] = $object->getPhone();
        $data['priority'] = $object->getPriority();
        $values = array();
        foreach ($object->getScheduleHolidayDays() as $value) {
            $values[] = $value;
        }
        $data['scheduleHolidayDays'] = $values;
        $values_1 = array();
        foreach ($object->getScheduleShortWorkDays() as $value_1) {
            $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
        }
        $data['scheduleShortWorkDays'] = $values_1;
        $data['timeZone'] = $object->getTimeZone();
        $data['townBitrixId'] = $object->getTownBitrixId();
        $data['warehouseId'] = $object->getWarehouseId();
        return $data;
    }
}