<?php

namespace glook\PecomSdk\Generated\Normalizer;

use glook\PecomSdk\Generated\Model\CommonTerm;
use glook\PecomSdk\Generated\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CommonTermNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'glook\PecomSdk\Generated\Model\CommonTerm' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'glook\PecomSdk\Generated\Model\CommonTerm' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new CommonTerm();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('branchReceiver', $data) && null !== $data['branchReceiver']) {
            $object->setBranchReceiver($data['branchReceiver']);
        } elseif (\array_key_exists('branchReceiver', $data) && null === $data['branchReceiver']) {
            $object->setBranchReceiver(null);
        }
        if (\array_key_exists('branchSender', $data) && null !== $data['branchSender']) {
            $object->setBranchSender($data['branchSender']);
        } elseif (\array_key_exists('branchSender', $data) && null === $data['branchSender']) {
            $object->setBranchSender(null);
        }
        if (\array_key_exists('discountedDeliveryWeekDays', $data) && null !== $data['discountedDeliveryWeekDays']) {
            $values = [];
            foreach ($data['discountedDeliveryWeekDays'] as $value) {
                $values[] = $value;
            }
            $object->setDiscountedDeliveryWeekDays($values);
        } elseif (\array_key_exists('discountedDeliveryWeekDays', $data) && null === $data['discountedDeliveryWeekDays']) {
            $object->setDiscountedDeliveryWeekDays(null);
        }
        if (\array_key_exists('senderShippingDays', $data) && null !== $data['senderShippingDays']) {
            $values_1 = [];
            foreach ($data['senderShippingDays'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setSenderShippingDays($values_1);
        } elseif (\array_key_exists('senderShippingDays', $data) && null === $data['senderShippingDays']) {
            $object->setSenderShippingDays(null);
        }
        if (\array_key_exists('transporting', $data) && null !== $data['transporting']) {
            $values_2 = [];
            foreach ($data['transporting'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setTransporting($values_2);
        } elseif (\array_key_exists('transporting', $data) && null === $data['transporting']) {
            $object->setTransporting(null);
        }
        if (\array_key_exists('transportingTypes', $data) && null !== $data['transportingTypes']) {
            $object->setTransportingTypes($data['transportingTypes']);
        } elseif (\array_key_exists('transportingTypes', $data) && null === $data['transportingTypes']) {
            $object->setTransportingTypes(null);
        }
        if (\array_key_exists('transportingWithDelivery', $data) && null !== $data['transportingWithDelivery']) {
            $values_3 = [];
            foreach ($data['transportingWithDelivery'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setTransportingWithDelivery($values_3);
        } elseif (\array_key_exists('transportingWithDelivery', $data) && null === $data['transportingWithDelivery']) {
            $object->setTransportingWithDelivery(null);
        }
        if (\array_key_exists('transportingWithDeliveryWithPickup', $data) && null !== $data['transportingWithDeliveryWithPickup']) {
            $object->setTransportingWithDeliveryWithPickup($data['transportingWithDeliveryWithPickup']);
        } elseif (\array_key_exists('transportingWithDeliveryWithPickup', $data) && null === $data['transportingWithDeliveryWithPickup']) {
            $object->setTransportingWithDeliveryWithPickup(null);
        }
        if (\array_key_exists('transportingWithPickup', $data) && null !== $data['transportingWithPickup']) {
            $object->setTransportingWithPickup($data['transportingWithPickup']);
        } elseif (\array_key_exists('transportingWithPickup', $data) && null === $data['transportingWithPickup']) {
            $object->setTransportingWithPickup(null);
        }
        if (\array_key_exists('type', $data) && null !== $data['type']) {
            $object->setType($data['type']);
        } elseif (\array_key_exists('type', $data) && null === $data['type']) {
            $object->setType(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getBranchReceiver()) {
            $data['branchReceiver'] = $object->getBranchReceiver();
        }
        if (null !== $object->getBranchSender()) {
            $data['branchSender'] = $object->getBranchSender();
        }
        if (null !== $object->getDiscountedDeliveryWeekDays()) {
            $values = [];
            foreach ($object->getDiscountedDeliveryWeekDays() as $value) {
                $values[] = $value;
            }
            $data['discountedDeliveryWeekDays'] = $values;
        }
        if (null !== $object->getSenderShippingDays()) {
            $values_1 = [];
            foreach ($object->getSenderShippingDays() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['senderShippingDays'] = $values_1;
        }
        if (null !== $object->getTransporting()) {
            $values_2 = [];
            foreach ($object->getTransporting() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['transporting'] = $values_2;
        }
        if (null !== $object->getTransportingTypes()) {
            $data['transportingTypes'] = $object->getTransportingTypes();
        }
        if (null !== $object->getTransportingWithDelivery()) {
            $values_3 = [];
            foreach ($object->getTransportingWithDelivery() as $value_3) {
                $values_3[] = $value_3;
            }
            $data['transportingWithDelivery'] = $values_3;
        }
        if (null !== $object->getTransportingWithDeliveryWithPickup()) {
            $data['transportingWithDeliveryWithPickup'] = $object->getTransportingWithDeliveryWithPickup();
        }
        if (null !== $object->getTransportingWithPickup()) {
            $data['transportingWithPickup'] = $object->getTransportingWithPickup();
        }
        if (null !== $object->getType()) {
            $data['type'] = $object->getType();
        }

        return $data;
    }
}
