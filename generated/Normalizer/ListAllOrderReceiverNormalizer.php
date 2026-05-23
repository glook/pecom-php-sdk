<?php

namespace glook\PecomSdk\Generated\Normalizer;

use glook\PecomSdk\Generated\Model\ListAllOrderReceiver;
use glook\PecomSdk\Generated\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ListAllOrderReceiverNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'glook\PecomSdk\Generated\Model\ListAllOrderReceiver' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'glook\PecomSdk\Generated\Model\ListAllOrderReceiver' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new ListAllOrderReceiver();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Counterpart', $data) && null !== $data['Counterpart']) {
            $object->setCounterpart($this->denormalizer->denormalize($data['Counterpart'], 'glook\PecomSdk\Generated\Model\ListAllOrderReceiverCounterpart', 'json', $context));
        } elseif (\array_key_exists('Counterpart', $data) && null === $data['Counterpart']) {
            $object->setCounterpart(null);
        }
        if (\array_key_exists('DelivieryAddress', $data) && null !== $data['DelivieryAddress']) {
            $object->setDelivieryAddress($data['DelivieryAddress']);
        } elseif (\array_key_exists('DelivieryAddress', $data) && null === $data['DelivieryAddress']) {
            $object->setDelivieryAddress(null);
        }
        if (\array_key_exists('IsDelivery', $data) && null !== $data['IsDelivery']) {
            $object->setIsDelivery($data['IsDelivery']);
        } elseif (\array_key_exists('IsDelivery', $data) && null === $data['IsDelivery']) {
            $object->setIsDelivery(null);
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
        if (null !== $object->getCounterpart()) {
            $data['Counterpart'] = $this->normalizer->normalize($object->getCounterpart(), 'json', $context);
        }
        if (null !== $object->getDelivieryAddress()) {
            $data['DelivieryAddress'] = $object->getDelivieryAddress();
        }
        if (null !== $object->getIsDelivery()) {
            $data['IsDelivery'] = $object->getIsDelivery();
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
