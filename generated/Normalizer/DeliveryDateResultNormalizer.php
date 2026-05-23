<?php

namespace glook\PecomSdk\Generated\Normalizer;

use glook\PecomSdk\Generated\Model\DeliveryDateResult;
use glook\PecomSdk\Generated\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class DeliveryDateResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'glook\PecomSdk\Generated\Model\DeliveryDateResult' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'glook\PecomSdk\Generated\Model\DeliveryDateResult' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new DeliveryDateResult();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('date', $data) && null !== $data['date']) {
            $object->setDate($data['date']);
        } elseif (\array_key_exists('date', $data) && null === $data['date']) {
            $object->setDate(null);
        }
        if (\array_key_exists('isPreferential', $data) && null !== $data['isPreferential']) {
            $object->setIsPreferential($data['isPreferential']);
        } elseif (\array_key_exists('isPreferential', $data) && null === $data['isPreferential']) {
            $object->setIsPreferential(null);
        }
        if (\array_key_exists('periods', $data) && null !== $data['periods']) {
            $values = [];
            foreach ($data['periods'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'glook\PecomSdk\Generated\Model\Period', 'json', $context);
            }
            $object->setPeriods($values);
        } elseif (\array_key_exists('periods', $data) && null === $data['periods']) {
            $object->setPeriods(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getDate()) {
            $data['date'] = $object->getDate();
        }
        if (null !== $object->getIsPreferential()) {
            $data['isPreferential'] = $object->getIsPreferential();
        }
        if (null !== $object->getPeriods()) {
            $values = [];
            foreach ($object->getPeriods() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['periods'] = $values;
        }

        return $data;
    }
}
