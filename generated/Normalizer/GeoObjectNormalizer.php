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
class GeoObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'glook\\PecomSdk\\Generated\\Model\\GeoObject';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'glook\\PecomSdk\\Generated\\Model\\GeoObject';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \glook\PecomSdk\Generated\Model\GeoObject();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('boundedBy', $data)) {
            $object->setBoundedBy($this->denormalizer->denormalize($data['boundedBy'], 'glook\\PecomSdk\\Generated\\Model\\GeoObjectBoundedBy', 'json', $context));
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        if (\array_key_exists('metaDataProperty', $data)) {
            $object->setMetaDataProperty($this->denormalizer->denormalize($data['metaDataProperty'], 'glook\\PecomSdk\\Generated\\Model\\GeoObjectMetaDataProperty', 'json', $context));
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('Point', $data)) {
            $object->setPoint($this->denormalizer->denormalize($data['Point'], 'glook\\PecomSdk\\Generated\\Model\\GeoObjectPoint', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['boundedBy'] = $this->normalizer->normalize($object->getBoundedBy(), 'json', $context);
        $data['description'] = $object->getDescription();
        $data['metaDataProperty'] = $this->normalizer->normalize($object->getMetaDataProperty(), 'json', $context);
        $data['name'] = $object->getName();
        $data['Point'] = $this->normalizer->normalize($object->getPoint(), 'json', $context);
        return $data;
    }
}