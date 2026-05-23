<?php

namespace glook\PecomSdk\Generated\Normalizer;

use glook\PecomSdk\Generated\Model\ListAllOrderSender;
use glook\PecomSdk\Generated\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
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
        return 'glook\PecomSdk\Generated\Model\ListAllOrderSender' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'glook\PecomSdk\Generated\Model\ListAllOrderSender' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new ListAllOrderSender();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('branchId', $data) && null !== $data['branchId']) {
            $object->setBranchId($data['branchId']);
        } elseif (\array_key_exists('branchId', $data) && null === $data['branchId']) {
            $object->setBranchId(null);
        }
        if (\array_key_exists('Counterpart', $data) && null !== $data['Counterpart']) {
            $object->setCounterpart($this->denormalizer->denormalize($data['Counterpart'], 'glook\PecomSdk\Generated\Model\ListAllOrderSenderCounterpart', 'json', $context));
        } elseif (\array_key_exists('Counterpart', $data) && null === $data['Counterpart']) {
            $object->setCounterpart(null);
        }
        if (\array_key_exists('IntakeAddress', $data) && null !== $data['IntakeAddress']) {
            $object->setIntakeAddress($data['IntakeAddress']);
        } elseif (\array_key_exists('IntakeAddress', $data) && null === $data['IntakeAddress']) {
            $object->setIntakeAddress(null);
        }
        if (\array_key_exists('IsIntake', $data) && null !== $data['IsIntake']) {
            $object->setIsIntake($data['IsIntake']);
        } elseif (\array_key_exists('IsIntake', $data) && null === $data['IsIntake']) {
            $object->setIsIntake(null);
        }
        if (\array_key_exists('WarehouseAddress', $data) && null !== $data['WarehouseAddress']) {
            $object->setWarehouseAddress($data['WarehouseAddress']);
        } elseif (\array_key_exists('WarehouseAddress', $data) && null === $data['WarehouseAddress']) {
            $object->setWarehouseAddress(null);
        }
        if (\array_key_exists('WarehouseId', $data) && null !== $data['WarehouseId']) {
            $object->setWarehouseId($data['WarehouseId']);
        } elseif (\array_key_exists('WarehouseId', $data) && null === $data['WarehouseId']) {
            $object->setWarehouseId(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
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
