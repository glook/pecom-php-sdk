<?php

namespace glook\PecomSdk\Generated\Normalizer;

use glook\PecomSdk\Generated\Model\PreregistrationCoordinates;
use glook\PecomSdk\Generated\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class PreregistrationCoordinatesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'glook\PecomSdk\Generated\Model\PreregistrationCoordinates' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'glook\PecomSdk\Generated\Model\PreregistrationCoordinates' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new PreregistrationCoordinates();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('latitude', $data) && null !== $data['latitude']) {
            $object->setLatitude($data['latitude']);
        } elseif (\array_key_exists('latitude', $data) && null === $data['latitude']) {
            $object->setLatitude(null);
        }
        if (\array_key_exists('longitude', $data) && null !== $data['longitude']) {
            $object->setLongitude($data['longitude']);
        } elseif (\array_key_exists('longitude', $data) && null === $data['longitude']) {
            $object->setLongitude(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getLatitude()) {
            $data['latitude'] = $object->getLatitude();
        }
        if (null !== $object->getLongitude()) {
            $data['longitude'] = $object->getLongitude();
        }

        return $data;
    }
}
