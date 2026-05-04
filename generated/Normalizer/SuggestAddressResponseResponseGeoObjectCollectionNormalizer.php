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
class SuggestAddressResponseResponseGeoObjectCollectionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'glook\\PecomSdk\\Generated\\Model\\SuggestAddressResponseResponseGeoObjectCollection';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'glook\\PecomSdk\\Generated\\Model\\SuggestAddressResponseResponseGeoObjectCollection';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \glook\PecomSdk\Generated\Model\SuggestAddressResponseResponseGeoObjectCollection();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('featureMember', $data)) {
            $values = array();
            foreach ($data['featureMember'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'glook\\PecomSdk\\Generated\\Model\\FeatureMember', 'json', $context);
            }
            $object->setFeatureMember($values);
        }
        if (\array_key_exists('metaDataProperty', $data)) {
            $object->setMetaDataProperty($this->denormalizer->denormalize($data['metaDataProperty'], 'glook\\PecomSdk\\Generated\\Model\\SuggestAddressResponseResponseGeoObjectCollectionMetaDataProperty', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $values = array();
        foreach ($object->getFeatureMember() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['featureMember'] = $values;
        $data['metaDataProperty'] = $this->normalizer->normalize($object->getMetaDataProperty(), 'json', $context);
        return $data;
    }
}