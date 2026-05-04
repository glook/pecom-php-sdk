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
class CargoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'glook\\PecomSdk\\Generated\\Model\\Cargo';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'glook\\PecomSdk\\Generated\\Model\\Cargo';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \glook\PecomSdk\Generated\Model\Cargo();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('height', $data) && $data['height'] !== null) {
            $object->setHeight($data['height']);
        }
        elseif (\array_key_exists('height', $data) && $data['height'] === null) {
            $object->setHeight(null);
        }
        if (\array_key_exists('isHP', $data) && $data['isHP'] !== null) {
            $object->setIsHP($data['isHP']);
        }
        elseif (\array_key_exists('isHP', $data) && $data['isHP'] === null) {
            $object->setIsHP(null);
        }
        if (\array_key_exists('length', $data) && $data['length'] !== null) {
            $object->setLength($data['length']);
        }
        elseif (\array_key_exists('length', $data) && $data['length'] === null) {
            $object->setLength(null);
        }
        if (\array_key_exists('maxPlaceWeight', $data) && $data['maxPlaceWeight'] !== null) {
            $object->setMaxPlaceWeight($data['maxPlaceWeight']);
        }
        elseif (\array_key_exists('maxPlaceWeight', $data) && $data['maxPlaceWeight'] === null) {
            $object->setMaxPlaceWeight(null);
        }
        if (\array_key_exists('maxSize', $data) && $data['maxSize'] !== null) {
            $object->setMaxSize($data['maxSize']);
        }
        elseif (\array_key_exists('maxSize', $data) && $data['maxSize'] === null) {
            $object->setMaxSize(null);
        }
        if (\array_key_exists('sealingPositionsCount', $data) && $data['sealingPositionsCount'] !== null) {
            $object->setSealingPositionsCount($data['sealingPositionsCount']);
        }
        elseif (\array_key_exists('sealingPositionsCount', $data) && $data['sealingPositionsCount'] === null) {
            $object->setSealingPositionsCount(null);
        }
        if (\array_key_exists('volume', $data) && $data['volume'] !== null) {
            $object->setVolume($data['volume']);
        }
        elseif (\array_key_exists('volume', $data) && $data['volume'] === null) {
            $object->setVolume(null);
        }
        if (\array_key_exists('weight', $data)) {
            $object->setWeight($data['weight']);
        }
        if (\array_key_exists('width', $data) && $data['width'] !== null) {
            $object->setWidth($data['width']);
        }
        elseif (\array_key_exists('width', $data) && $data['width'] === null) {
            $object->setWidth(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
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