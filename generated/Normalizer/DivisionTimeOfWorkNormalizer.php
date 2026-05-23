<?php

namespace glook\PecomSdk\Generated\Normalizer;

use glook\PecomSdk\Generated\Model\DivisionTimeOfWork;
use glook\PecomSdk\Generated\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class DivisionTimeOfWorkNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'glook\PecomSdk\Generated\Model\DivisionTimeOfWork' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'glook\PecomSdk\Generated\Model\DivisionTimeOfWork' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new DivisionTimeOfWork();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('dayOfWeek', $data)) {
            $object->setDayOfWeek($data['dayOfWeek']);
        }
        if (\array_key_exists('dinnerFrom', $data) && null !== $data['dinnerFrom']) {
            $object->setDinnerFrom($data['dinnerFrom']);
        } elseif (\array_key_exists('dinnerFrom', $data) && null === $data['dinnerFrom']) {
            $object->setDinnerFrom(null);
        }
        if (\array_key_exists('dinnerTo', $data) && null !== $data['dinnerTo']) {
            $object->setDinnerTo($data['dinnerTo']);
        } elseif (\array_key_exists('dinnerTo', $data) && null === $data['dinnerTo']) {
            $object->setDinnerTo(null);
        }
        if (\array_key_exists('workFrom', $data)) {
            $object->setWorkFrom($data['workFrom']);
        }
        if (\array_key_exists('workTo', $data)) {
            $object->setWorkTo($data['workTo']);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['dayOfWeek'] = $object->getDayOfWeek();
        if (null !== $object->getDinnerFrom()) {
            $data['dinnerFrom'] = $object->getDinnerFrom();
        }
        if (null !== $object->getDinnerTo()) {
            $data['dinnerTo'] = $object->getDinnerTo();
        }
        $data['workFrom'] = $object->getWorkFrom();
        $data['workTo'] = $object->getWorkTo();

        return $data;
    }
}
