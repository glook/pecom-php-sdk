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
class ListAllOrderReceiverNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'glook\\PecomSdk\\Generated\\Model\\ListAllOrderReceiver';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'glook\\PecomSdk\\Generated\\Model\\ListAllOrderReceiver';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \glook\PecomSdk\Generated\Model\ListAllOrderReceiver();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Counterpart', $data) && $data['Counterpart'] !== null) {
            $object->setCounterpart($this->denormalizer->denormalize($data['Counterpart'], 'glook\\PecomSdk\\Generated\\Model\\ListAllOrderReceiverCounterpart', 'json', $context));
        }
        elseif (\array_key_exists('Counterpart', $data) && $data['Counterpart'] === null) {
            $object->setCounterpart(null);
        }
        if (\array_key_exists('DelivieryAddress', $data) && $data['DelivieryAddress'] !== null) {
            $object->setDelivieryAddress($data['DelivieryAddress']);
        }
        elseif (\array_key_exists('DelivieryAddress', $data) && $data['DelivieryAddress'] === null) {
            $object->setDelivieryAddress(null);
        }
        if (\array_key_exists('IsDelivery', $data) && $data['IsDelivery'] !== null) {
            $object->setIsDelivery($data['IsDelivery']);
        }
        elseif (\array_key_exists('IsDelivery', $data) && $data['IsDelivery'] === null) {
            $object->setIsDelivery(null);
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