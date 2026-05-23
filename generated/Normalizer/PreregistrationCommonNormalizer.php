<?php

namespace glook\PecomSdk\Generated\Normalizer;

use glook\PecomSdk\Generated\Model\PreregistrationCommon;
use glook\PecomSdk\Generated\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class PreregistrationCommonNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'glook\PecomSdk\Generated\Model\PreregistrationCommon' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'glook\PecomSdk\Generated\Model\PreregistrationCommon' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new PreregistrationCommon();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('callToScheduleCar', $data) && null !== $data['callToScheduleCar']) {
            $object->setCallToScheduleCar($data['callToScheduleCar']);
        } elseif (\array_key_exists('callToScheduleCar', $data) && null === $data['callToScheduleCar']) {
            $object->setCallToScheduleCar(null);
        }
        if (\array_key_exists('counterpartClientCard', $data) && null !== $data['counterpartClientCard']) {
            $object->setCounterpartClientCard($data['counterpartClientCard']);
        } elseif (\array_key_exists('counterpartClientCard', $data) && null === $data['counterpartClientCard']) {
            $object->setCounterpartClientCard(null);
        }
        if (\array_key_exists('orderType', $data)) {
            $object->setOrderType($data['orderType']);
        }
        if (\array_key_exists('plannedDate', $data) && null !== $data['plannedDate']) {
            $object->setPlannedDate(\DateTime::createFromFormat('Y-m-d', $data['plannedDate'])->setTime(0, 0, 0));
        } elseif (\array_key_exists('plannedDate', $data) && null === $data['plannedDate']) {
            $object->setPlannedDate(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getCallToScheduleCar()) {
            $data['callToScheduleCar'] = $object->getCallToScheduleCar();
        }
        if (null !== $object->getCounterpartClientCard()) {
            $data['counterpartClientCard'] = $object->getCounterpartClientCard();
        }
        $data['orderType'] = $object->getOrderType();
        if (null !== $object->getPlannedDate()) {
            $data['plannedDate'] = $object->getPlannedDate()->format('Y-m-d');
        }

        return $data;
    }
}
