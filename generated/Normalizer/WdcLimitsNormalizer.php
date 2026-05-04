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
class WdcLimitsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'glook\\PecomSdk\\Generated\\Model\\WdcLimits';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'glook\\PecomSdk\\Generated\\Model\\WdcLimits';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \glook\PecomSdk\Generated\Model\WdcLimits();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('height', $data)) {
            $object->setHeight($data['height']);
        }
        if (\array_key_exists('length', $data)) {
            $object->setLength($data['length']);
        }
        if (\array_key_exists('maxLength', $data)) {
            $object->setMaxLength($data['maxLength']);
        }
        if (\array_key_exists('totalWeight', $data)) {
            $object->setTotalWeight($data['totalWeight']);
        }
        if (\array_key_exists('volume', $data)) {
            $object->setVolume($data['volume']);
        }
        if (\array_key_exists('weight', $data)) {
            $object->setWeight($data['weight']);
        }
        if (\array_key_exists('width', $data)) {
            $object->setWidth($data['width']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['height'] = $object->getHeight();
        $data['length'] = $object->getLength();
        $data['maxLength'] = $object->getMaxLength();
        $data['totalWeight'] = $object->getTotalWeight();
        $data['volume'] = $object->getVolume();
        $data['weight'] = $object->getWeight();
        $data['width'] = $object->getWidth();
        return $data;
    }
}