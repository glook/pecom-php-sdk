<?php

namespace glook\PecomSdk\Generated\Normalizer;

use glook\PecomSdk\Generated\Model\CargoDetail;
use glook\PecomSdk\Generated\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CargoDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'glook\PecomSdk\Generated\Model\CargoDetail' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'glook\PecomSdk\Generated\Model\CargoDetail' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new CargoDetail();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('photos', $data) && null !== $data['photos']) {
            $values = [];
            foreach ($data['photos'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'glook\PecomSdk\Generated\Model\CargoPhoto', 'json', $context);
            }
            $object->setPhotos($values);
        } elseif (\array_key_exists('photos', $data) && null === $data['photos']) {
            $object->setPhotos(null);
        }
        if (\array_key_exists('positionsCount', $data) && null !== $data['positionsCount']) {
            $object->setPositionsCount($data['positionsCount']);
        } elseif (\array_key_exists('positionsCount', $data) && null === $data['positionsCount']) {
            $object->setPositionsCount(null);
        }
        if (\array_key_exists('volume', $data) && null !== $data['volume']) {
            $object->setVolume($data['volume']);
        } elseif (\array_key_exists('volume', $data) && null === $data['volume']) {
            $object->setVolume(null);
        }
        if (\array_key_exists('weight', $data) && null !== $data['weight']) {
            $object->setWeight($data['weight']);
        } elseif (\array_key_exists('weight', $data) && null === $data['weight']) {
            $object->setWeight(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getPhotos()) {
            $values = [];
            foreach ($object->getPhotos() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['photos'] = $values;
        }
        if (null !== $object->getPositionsCount()) {
            $data['positionsCount'] = $object->getPositionsCount();
        }
        if (null !== $object->getVolume()) {
            $data['volume'] = $object->getVolume();
        }
        if (null !== $object->getWeight()) {
            $data['weight'] = $object->getWeight();
        }

        return $data;
    }
}
