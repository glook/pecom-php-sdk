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
class ListAllOrderSenderNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'glook\\PecomSdk\\Generated\\Model\\ListAllOrderSender';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'glook\\PecomSdk\\Generated\\Model\\ListAllOrderSender';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \glook\PecomSdk\Generated\Model\ListAllOrderSender();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('branchId', $data) && $data['branchId'] !== null) {
            $object->setBranchId($data['branchId']);
        }
        elseif (\array_key_exists('branchId', $data) && $data['branchId'] === null) {
            $object->setBranchId(null);
        }
        if (\array_key_exists('Counterpart', $data) && $data['Counterpart'] !== null) {
            $object->setCounterpart($this->denormalizer->denormalize($data['Counterpart'], 'glook\\PecomSdk\\Generated\\Model\\ListAllOrderSenderCounterpart', 'json', $context));
        }
        elseif (\array_key_exists('Counterpart', $data) && $data['Counterpart'] === null) {
            $object->setCounterpart(null);
        }
        if (\array_key_exists('IntakeAddress', $data) && $data['IntakeAddress'] !== null) {
            $object->setIntakeAddress($data['IntakeAddress']);
        }
        elseif (\array_key_exists('IntakeAddress', $data) && $data['IntakeAddress'] === null) {
            $object->setIntakeAddress(null);
        }
        if (\array_key_exists('IsIntake', $data) && $data['IsIntake'] !== null) {
            $object->setIsIntake($data['IsIntake']);
        }
        elseif (\array_key_exists('IsIntake', $data) && $data['IsIntake'] === null) {
            $object->setIsIntake(null);
        }
        if (\array_key_exists('WarehouseAddress', $data) && $data['WarehouseAddress'] !== null) {
            $object->setWarehouseAddress($data['WarehouseAddress']);
        }
        elseif (\array_key_exists('WarehouseAddress', $data) && $data['WarehouseAddress'] === null) {
            $object->setWarehouseAddress(null);
        }
        if (\array_key_exists('WarehouseId', $data) && $data['WarehouseId'] !== null) {
            $object->setWarehouseId($data['WarehouseId']);
        }
        elseif (\array_key_exists('WarehouseId', $data) && $data['WarehouseId'] === null) {
            $object->setWarehouseId(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getBranchId()) {
            $data['branchId'] = $object->getBranchId();
        }
        if (null !== $object->getCounterpart()) {
            $data['Counterpart'] = $this->normalizer->normalize($object->getCounterpart(), 'json', $context);
        }
        if (null !== $object->getIntakeAddress()) {
            $data['IntakeAddress'] = $object->getIntakeAddress();
        }
        if (null !== $object->getIsIntake()) {
            $data['IsIntake'] = $object->getIsIntake();
        }
        if (null !== $object->getWarehouseAddress()) {
            $data['WarehouseAddress'] = $object->getWarehouseAddress();
        }
        if (null !== $object->getWarehouseId()) {
            $data['WarehouseId'] = $object->getWarehouseId();
        }
        return $data;
    }
}