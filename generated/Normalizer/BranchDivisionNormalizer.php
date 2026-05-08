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
class BranchDivisionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'glook\\PecomSdk\\Generated\\Model\\BranchDivision';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'glook\\PecomSdk\\Generated\\Model\\BranchDivision';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \glook\PecomSdk\Generated\Model\BranchDivision();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('cityId', $data)) {
            $object->setCityId($data['cityId']);
        }
        if (\array_key_exists('departmentType', $data)) {
            $object->setDepartmentType($data['departmentType']);
        }
        if (\array_key_exists('departmentTypeId', $data)) {
            $object->setDepartmentTypeId($data['departmentTypeId']);
        }
        if (\array_key_exists('divisionPriority', $data)) {
            $object->setDivisionPriority($data['divisionPriority']);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('isAcceptanceOnly', $data)) {
            $object->setIsAcceptanceOnly($data['isAcceptanceOnly']);
        }
        if (\array_key_exists('isPartialDistributionAllowed', $data)) {
            $object->setIsPartialDistributionAllowed($data['isPartialDistributionAllowed']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('warehouses', $data)) {
            $values = array();
            foreach ($data['warehouses'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'glook\\PecomSdk\\Generated\\Model\\Warehouse', 'json', $context);
            }
            $object->setWarehouses($values);
        }
        if (\array_key_exists('kindsOfTransportation', $data)) {
            $values_1 = array();
            foreach ($data['kindsOfTransportation'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'glook\\PecomSdk\\Generated\\Model\\KindOfTransportation', 'json', $context);
            }
            $object->setKindsOfTransportation($values_1);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['cityId'] = $object->getCityId();
        $data['departmentType'] = $object->getDepartmentType();
        $data['departmentTypeId'] = $object->getDepartmentTypeId();
        $data['divisionPriority'] = $object->getDivisionPriority();
        $data['id'] = $object->getId();
        $data['isAcceptanceOnly'] = $object->getIsAcceptanceOnly();
        $data['isPartialDistributionAllowed'] = $object->getIsPartialDistributionAllowed();
        $data['name'] = $object->getName();
        $values = array();
        foreach ($object->getWarehouses() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['warehouses'] = $values;
        $values_1 = array();
        foreach ($object->getKindsOfTransportation() as $value_1) {
            $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
        }
        $data['kindsOfTransportation'] = $values_1;
        return $data;
    }
}