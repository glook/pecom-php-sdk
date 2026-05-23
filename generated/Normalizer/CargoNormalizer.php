<?php

namespace glook\PecomSdk\Generated\Normalizer;

use glook\PecomSdk\Generated\Model\Cargo;
use glook\PecomSdk\Generated\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CargoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'glook\PecomSdk\Generated\Model\Cargo' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'glook\PecomSdk\Generated\Model\Cargo' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new Cargo();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('height', $data) && null !== $data['height']) {
            $object->setHeight($data['height']);
        } elseif (\array_key_exists('height', $data) && null === $data['height']) {
            $object->setHeight(null);
        }
        if (\array_key_exists('isHP', $data) && null !== $data['isHP']) {
            $object->setIsHP($data['isHP']);
        } elseif (\array_key_exists('isHP', $data) && null === $data['isHP']) {
            $object->setIsHP(null);
        }
        if (\array_key_exists('length', $data) && null !== $data['length']) {
            $object->setLength($data['length']);
        } elseif (\array_key_exists('length', $data) && null === $data['length']) {
            $object->setLength(null);
        }
        if (\array_key_exists('maxPlaceWeight', $data) && null !== $data['maxPlaceWeight']) {
            $object->setMaxPlaceWeight($data['maxPlaceWeight']);
        } elseif (\array_key_exists('maxPlaceWeight', $data) && null === $data['maxPlaceWeight']) {
            $object->setMaxPlaceWeight(null);
        }
        if (\array_key_exists('maxSize', $data) && null !== $data['maxSize']) {
            $object->setMaxSize($data['maxSize']);
        } elseif (\array_key_exists('maxSize', $data) && null === $data['maxSize']) {
            $object->setMaxSize(null);
        }
        if (\array_key_exists('sealingPositionsCount', $data) && null !== $data['sealingPositionsCount']) {
            $object->setSealingPositionsCount($data['sealingPositionsCount']);
        } elseif (\array_key_exists('sealingPositionsCount', $data) && null === $data['sealingPositionsCount']) {
            $object->setSealingPositionsCount(null);
        }
        if (\array_key_exists('volume', $data) && null !== $data['volume']) {
            $object->setVolume($data['volume']);
        } elseif (\array_key_exists('volume', $data) && null === $data['volume']) {
            $object->setVolume(null);
        }
        if (\array_key_exists('weight', $data)) {
            $object->setWeight($data['weight']);
        }
        if (\array_key_exists('width', $data) && null !== $data['width']) {
            $object->setWidth($data['width']);
        } elseif (\array_key_exists('width', $data) && null === $data['width']) {
            $object->setWidth(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getHeight()) {
            $data['height'] = $object->getHeight();
        }
        if (null !== $object->getIsHP()) {
            $data['isHP'] = $object->getIsHP();
        }
        if (null !== $object->getLength()) {
            $data['length'] = $object->getLength();
        }
        if (null !== $object->getMaxPlaceWeight()) {
            $data['maxPlaceWeight'] = $object->getMaxPlaceWeight();
        }
        if (null !== $object->getMaxSize()) {
            $data['maxSize'] = $object->getMaxSize();
        }
        if (null !== $object->getSealingPositionsCount()) {
            $data['sealingPositionsCount'] = $object->getSealingPositionsCount();
        }
        if (null !== $object->getVolume()) {
            $data['volume'] = $object->getVolume();
        }
        $data['weight'] = $object->getWeight();
        if (null !== $object->getWidth()) {
            $data['width'] = $object->getWidth();
        }

        return $data;
    }
}
