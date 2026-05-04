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
class CargoPickupPaymentsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'glook\\PecomSdk\\Generated\\Model\\CargoPickupPayments';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'glook\\PecomSdk\\Generated\\Model\\CargoPickupPayments';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \glook\PecomSdk\Generated\Model\CargoPickupPayments();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('delivery', $data)) {
            $object->setDelivery($this->denormalizer->denormalize($data['delivery'], 'glook\\PecomSdk\\Generated\\Model\\PaymentBlock', 'json', $context));
        }
        if (\array_key_exists('hardPacking', $data)) {
            $object->setHardPacking($this->denormalizer->denormalize($data['hardPacking'], 'glook\\PecomSdk\\Generated\\Model\\PaymentBlock', 'json', $context));
        }
        if (\array_key_exists('insurance', $data)) {
            $object->setInsurance($this->denormalizer->denormalize($data['insurance'], 'glook\\PecomSdk\\Generated\\Model\\PaymentBlock', 'json', $context));
        }
        if (\array_key_exists('moving', $data)) {
            $object->setMoving($this->denormalizer->denormalize($data['moving'], 'glook\\PecomSdk\\Generated\\Model\\PaymentBlock', 'json', $context));
        }
        if (\array_key_exists('pickUp', $data)) {
            $object->setPickUp($this->denormalizer->denormalize($data['pickUp'], 'glook\\PecomSdk\\Generated\\Model\\PaymentBlock', 'json', $context));
        }
        if (\array_key_exists('sealing', $data)) {
            $object->setSealing($this->denormalizer->denormalize($data['sealing'], 'glook\\PecomSdk\\Generated\\Model\\PaymentBlock', 'json', $context));
        }
        if (\array_key_exists('strapping', $data)) {
            $object->setStrapping($this->denormalizer->denormalize($data['strapping'], 'glook\\PecomSdk\\Generated\\Model\\PaymentBlock', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getDelivery()) {
            $data['delivery'] = $this->normalizer->normalize($object->getDelivery(), 'json', $context);
        }
        if (null !== $object->getHardPacking()) {
            $data['hardPacking'] = $this->normalizer->normalize($object->getHardPacking(), 'json', $context);
        }
        if (null !== $object->getInsurance()) {
            $data['insurance'] = $this->normalizer->normalize($object->getInsurance(), 'json', $context);
        }
        if (null !== $object->getMoving()) {
            $data['moving'] = $this->normalizer->normalize($object->getMoving(), 'json', $context);
        }
        if (null !== $object->getPickUp()) {
            $data['pickUp'] = $this->normalizer->normalize($object->getPickUp(), 'json', $context);
        }
        if (null !== $object->getSealing()) {
            $data['sealing'] = $this->normalizer->normalize($object->getSealing(), 'json', $context);
        }
        if (null !== $object->getStrapping()) {
            $data['strapping'] = $this->normalizer->normalize($object->getStrapping(), 'json', $context);
        }
        return $data;
    }
}