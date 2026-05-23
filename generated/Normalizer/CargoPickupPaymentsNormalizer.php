<?php

namespace glook\PecomSdk\Generated\Normalizer;

use glook\PecomSdk\Generated\Model\CargoPickupPayments;
use glook\PecomSdk\Generated\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
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
        return 'glook\PecomSdk\Generated\Model\CargoPickupPayments' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'glook\PecomSdk\Generated\Model\CargoPickupPayments' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new CargoPickupPayments();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('delivery', $data) && null !== $data['delivery']) {
            $object->setDelivery($this->denormalizer->denormalize($data['delivery'], 'glook\PecomSdk\Generated\Model\PaymentBlock', 'json', $context));
        } elseif (\array_key_exists('delivery', $data) && null === $data['delivery']) {
            $object->setDelivery(null);
        }
        if (\array_key_exists('hardPacking', $data) && null !== $data['hardPacking']) {
            $object->setHardPacking($this->denormalizer->denormalize($data['hardPacking'], 'glook\PecomSdk\Generated\Model\PaymentBlock', 'json', $context));
        } elseif (\array_key_exists('hardPacking', $data) && null === $data['hardPacking']) {
            $object->setHardPacking(null);
        }
        if (\array_key_exists('insurance', $data) && null !== $data['insurance']) {
            $object->setInsurance($this->denormalizer->denormalize($data['insurance'], 'glook\PecomSdk\Generated\Model\PaymentBlock', 'json', $context));
        } elseif (\array_key_exists('insurance', $data) && null === $data['insurance']) {
            $object->setInsurance(null);
        }
        if (\array_key_exists('moving', $data) && null !== $data['moving']) {
            $object->setMoving($this->denormalizer->denormalize($data['moving'], 'glook\PecomSdk\Generated\Model\PaymentBlock', 'json', $context));
        } elseif (\array_key_exists('moving', $data) && null === $data['moving']) {
            $object->setMoving(null);
        }
        if (\array_key_exists('pickUp', $data) && null !== $data['pickUp']) {
            $object->setPickUp($this->denormalizer->denormalize($data['pickUp'], 'glook\PecomSdk\Generated\Model\PaymentBlock', 'json', $context));
        } elseif (\array_key_exists('pickUp', $data) && null === $data['pickUp']) {
            $object->setPickUp(null);
        }
        if (\array_key_exists('sealing', $data) && null !== $data['sealing']) {
            $object->setSealing($this->denormalizer->denormalize($data['sealing'], 'glook\PecomSdk\Generated\Model\PaymentBlock', 'json', $context));
        } elseif (\array_key_exists('sealing', $data) && null === $data['sealing']) {
            $object->setSealing(null);
        }
        if (\array_key_exists('strapping', $data) && null !== $data['strapping']) {
            $object->setStrapping($this->denormalizer->denormalize($data['strapping'], 'glook\PecomSdk\Generated\Model\PaymentBlock', 'json', $context));
        } elseif (\array_key_exists('strapping', $data) && null === $data['strapping']) {
            $object->setStrapping(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
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
