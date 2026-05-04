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
class CargoPickupOrderItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'glook\\PecomSdk\\Generated\\Model\\CargoPickupOrderItem';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'glook\\PecomSdk\\Generated\\Model\\CargoPickupOrderItem';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \glook\PecomSdk\Generated\Model\CargoPickupOrderItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('order', $data)) {
            $object->setOrder($data['order']);
        }
        if (\array_key_exists('senderAddressStock', $data) && $data['senderAddressStock'] !== null) {
            $object->setSenderAddressStock($data['senderAddressStock']);
        }
        elseif (\array_key_exists('senderAddressStock', $data) && $data['senderAddressStock'] === null) {
            $object->setSenderAddressStock(null);
        }
        if (\array_key_exists('senderCity', $data) && $data['senderCity'] !== null) {
            $object->setSenderCity($data['senderCity']);
        }
        elseif (\array_key_exists('senderCity', $data) && $data['senderCity'] === null) {
            $object->setSenderCity(null);
        }
        if (\array_key_exists('senderInn', $data) && $data['senderInn'] !== null) {
            $object->setSenderInn($data['senderInn']);
        }
        elseif (\array_key_exists('senderInn', $data) && $data['senderInn'] === null) {
            $object->setSenderInn(null);
        }
        if (\array_key_exists('senderTitle', $data) && $data['senderTitle'] !== null) {
            $object->setSenderTitle($data['senderTitle']);
        }
        elseif (\array_key_exists('senderTitle', $data) && $data['senderTitle'] === null) {
            $object->setSenderTitle(null);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
        }
        if (\array_key_exists('volume', $data)) {
            $object->setVolume($data['volume']);
        }
        if (\array_key_exists('weight', $data)) {
            $object->setWeight($data['weight']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['order'] = $object->getOrder();
        if (null !== $object->getSenderAddressStock()) {
            $data['senderAddressStock'] = $object->getSenderAddressStock();
        }
        if (null !== $object->getSenderCity()) {
            $data['senderCity'] = $object->getSenderCity();
        }
        if (null !== $object->getSenderInn()) {
            $data['senderInn'] = $object->getSenderInn();
        }
        if (null !== $object->getSenderTitle()) {
            $data['senderTitle'] = $object->getSenderTitle();
        }
        $data['status'] = $object->getStatus();
        $data['volume'] = $object->getVolume();
        $data['weight'] = $object->getWeight();
        return $data;
    }
}