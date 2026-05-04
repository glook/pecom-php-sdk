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
class CargoPickupNetworkSubmitRequestCargosCommonServicesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'glook\\PecomSdk\\Generated\\Model\\CargoPickupNetworkSubmitRequestCargosCommonServices';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'glook\\PecomSdk\\Generated\\Model\\CargoPickupNetworkSubmitRequestCargosCommonServices';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \glook\PecomSdk\Generated\Model\CargoPickupNetworkSubmitRequestCargosCommonServices();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('delivery', $data) && $data['delivery'] !== null) {
            $object->setDelivery($this->denormalizer->denormalize($data['delivery'], 'glook\\PecomSdk\\Generated\\Model\\CargoPickupNetworkSubmitRequestCargosCommonServicesDelivery', 'json', $context));
        }
        elseif (\array_key_exists('delivery', $data) && $data['delivery'] === null) {
            $object->setDelivery(null);
        }
        if (\array_key_exists('insurance', $data) && $data['insurance'] !== null) {
            $object->setInsurance($this->denormalizer->denormalize($data['insurance'], 'glook\\PecomSdk\\Generated\\Model\\CargoPickupNetworkSubmitRequestCargosCommonServicesInsurance', 'json', $context));
        }
        elseif (\array_key_exists('insurance', $data) && $data['insurance'] === null) {
            $object->setInsurance(null);
        }
        if (\array_key_exists('pickUp', $data) && $data['pickUp'] !== null) {
            $object->setPickUp($this->denormalizer->denormalize($data['pickUp'], 'glook\\PecomSdk\\Generated\\Model\\CargoPickupNetworkSubmitRequestCargosCommonServicesPickUp', 'json', $context));
        }
        elseif (\array_key_exists('pickUp', $data) && $data['pickUp'] === null) {
            $object->setPickUp(null);
        }
        if (\array_key_exists('transporting', $data) && $data['transporting'] !== null) {
            $object->setTransporting($this->denormalizer->denormalize($data['transporting'], 'glook\\PecomSdk\\Generated\\Model\\CargoPickupNetworkSubmitRequestCargosCommonServicesTransporting', 'json', $context));
        }
        elseif (\array_key_exists('transporting', $data) && $data['transporting'] === null) {
            $object->setTransporting(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getDelivery()) {
            $data['delivery'] = $this->normalizer->normalize($object->getDelivery(), 'json', $context);
        }
        if (null !== $object->getInsurance()) {
            $data['insurance'] = $this->normalizer->normalize($object->getInsurance(), 'json', $context);
        }
        if (null !== $object->getPickUp()) {
            $data['pickUp'] = $this->normalizer->normalize($object->getPickUp(), 'json', $context);
        }
        if (null !== $object->getTransporting()) {
            $data['transporting'] = $this->normalizer->normalize($object->getTransporting(), 'json', $context);
        }
        return $data;
    }
}