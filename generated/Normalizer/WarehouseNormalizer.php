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
class WarehouseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'glook\\PecomSdk\\Generated\\Model\\Warehouse';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'glook\\PecomSdk\\Generated\\Model\\Warehouse';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \glook\PecomSdk\Generated\Model\Warehouse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('address', $data)) {
            $object->setAddress($data['address']);
        }
        if (\array_key_exists('addressDivision', $data)) {
            $object->setAddressDivision($data['addressDivision']);
        }
        if (\array_key_exists('coordinatesobj', $data)) {
            $object->setCoordinatesobj($this->denormalizer->denormalize($data['coordinatesobj'], 'glook\\PecomSdk\\Generated\\Model\\BranchesCoordinates', 'json', $context));
        }
        if (\array_key_exists('departmentClosingDate', $data) && $data['departmentClosingDate'] !== null) {
            $object->setDepartmentClosingDate($data['departmentClosingDate']);
        }
        elseif (\array_key_exists('departmentClosingDate', $data) && $data['departmentClosingDate'] === null) {
            $object->setDepartmentClosingDate(null);
        }
        if (\array_key_exists('divisionId', $data)) {
            $object->setDivisionId($data['divisionId']);
        }
        if (\array_key_exists('divisionName', $data)) {
            $object->setDivisionName($data['divisionName']);
        }
        if (\array_key_exists('divisionTimeOfWork', $data)) {
            $values = array();
            foreach ($data['divisionTimeOfWork'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'glook\\PecomSdk\\Generated\\Model\\DivisionTimeOfWork', 'json', $context);
            }
            $object->setDivisionTimeOfWork($values);
        }
        if (\array_key_exists('email', $data)) {
            $object->setEmail($data['email']);
        }
        if (\array_key_exists('endOfAvailabilityBeforeClosing', $data) && $data['endOfAvailabilityBeforeClosing'] !== null) {
            $object->setEndOfAvailabilityBeforeClosing($data['endOfAvailabilityBeforeClosing']);
        }
        elseif (\array_key_exists('endOfAvailabilityBeforeClosing', $data) && $data['endOfAvailabilityBeforeClosing'] === null) {
            $object->setEndOfAvailabilityBeforeClosing(null);
        }
        if (\array_key_exists('endOfCostCalculationAvailability', $data) && $data['endOfCostCalculationAvailability'] !== null) {
            $object->setEndOfCostCalculationAvailability($data['endOfCostCalculationAvailability']);
        }
        elseif (\array_key_exists('endOfCostCalculationAvailability', $data) && $data['endOfCostCalculationAvailability'] === null) {
            $object->setEndOfCostCalculationAvailability(null);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('isAcceptanceOnly', $data)) {
            $object->setIsAcceptanceOnly($data['isAcceptanceOnly']);
        }
        if (\array_key_exists('isFreightSurcharge', $data)) {
            $object->setIsFreightSurcharge($data['isFreightSurcharge']);
        }
        if (\array_key_exists('isWarehouseAcceptsFreights', $data)) {
            $object->setIsWarehouseAcceptsFreights($data['isWarehouseAcceptsFreights']);
        }
        if (\array_key_exists('isWarehouseGivesFreights', $data)) {
            $object->setIsWarehouseGivesFreights($data['isWarehouseGivesFreights']);
        }
        if (\array_key_exists('kindsOfTransportation', $data)) {
            $values_1 = array();
            foreach ($data['kindsOfTransportation'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'glook\\PecomSdk\\Generated\\Model\\KindOfTransportation', 'json', $context);
            }
            $object->setKindsOfTransportation($values_1);
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
        if (\array_key_exists('maxWeightPerPlace', $data)) {
            $object->setMaxWeightPerPlace($data['maxWeightPerPlace']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('pointerDescription', $data)) {
            $object->setPointerDescription($data['pointerDescription']);
        }
        if (\array_key_exists('scheduleHolidayDays', $data)) {
            $values_2 = array();
            foreach ($data['scheduleHolidayDays'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setScheduleHolidayDays($values_2);
        }
        if (\array_key_exists('ScheduleShortWorkDays', $data)) {
            $values_3 = array();
            foreach ($data['ScheduleShortWorkDays'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'glook\\PecomSdk\\Generated\\Model\\ScheduleShortWorkDay', 'json', $context);
            }
            $object->setScheduleShortWorkDays($values_3);
        }
        if (\array_key_exists('telephone', $data)) {
            $object->setTelephone($data['telephone']);
        }
        if (\array_key_exists('timeOfWork', $data)) {
            $values_4 = array();
            foreach ($data['timeOfWork'] as $value_4) {
                $values_4[] = $value_4;
            }
            $object->setTimeOfWork($values_4);
        }
        if (\array_key_exists('warehouseCode', $data)) {
            $object->setWarehouseCode($data['warehouseCode']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['address'] = $object->getAddress();
        $data['addressDivision'] = $object->getAddressDivision();
        $data['coordinatesobj'] = $this->normalizer->normalize($object->getCoordinatesobj(), 'json', $context);
        if (null !== $object->getDepartmentClosingDate()) {
            $data['departmentClosingDate'] = $object->getDepartmentClosingDate();
        }
        $data['divisionId'] = $object->getDivisionId();
        $data['divisionName'] = $object->getDivisionName();
        $values = array();
        foreach ($object->getDivisionTimeOfWork() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['divisionTimeOfWork'] = $values;
        $data['email'] = $object->getEmail();
        if (null !== $object->getEndOfAvailabilityBeforeClosing()) {
            $data['endOfAvailabilityBeforeClosing'] = $object->getEndOfAvailabilityBeforeClosing();
        }
        if (null !== $object->getEndOfCostCalculationAvailability()) {
            $data['endOfCostCalculationAvailability'] = $object->getEndOfCostCalculationAvailability();
        }
        $data['id'] = $object->getId();
        $data['isAcceptanceOnly'] = $object->getIsAcceptanceOnly();
        $data['isFreightSurcharge'] = $object->getIsFreightSurcharge();
        $data['isWarehouseAcceptsFreights'] = $object->getIsWarehouseAcceptsFreights();
        $data['isWarehouseGivesFreights'] = $object->getIsWarehouseGivesFreights();
        $values_1 = array();
        foreach ($object->getKindsOfTransportation() as $value_1) {
            $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
        }
        $data['kindsOfTransportation'] = $values_1;
        $data['maxDimension'] = $object->getMaxDimension();
        $data['maxVolume'] = $object->getMaxVolume();
        $data['maxWeight'] = $object->getMaxWeight();
        $data['maxWeightPerPlace'] = $object->getMaxWeightPerPlace();
        $data['name'] = $object->getName();
        $data['pointerDescription'] = $object->getPointerDescription();
        $values_2 = array();
        foreach ($object->getScheduleHolidayDays() as $value_2) {
            $values_2[] = $value_2;
        }
        $data['scheduleHolidayDays'] = $values_2;
        $values_3 = array();
        foreach ($object->getScheduleShortWorkDays() as $value_3) {
            $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
        }
        $data['ScheduleShortWorkDays'] = $values_3;
        $data['telephone'] = $object->getTelephone();
        $values_4 = array();
        foreach ($object->getTimeOfWork() as $value_4) {
            $values_4[] = $value_4;
        }
        $data['timeOfWork'] = $values_4;
        $data['warehouseCode'] = $object->getWarehouseCode();
        return $data;
    }
}