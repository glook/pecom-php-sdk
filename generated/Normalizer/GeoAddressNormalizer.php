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
class GeoAddressNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'glook\\PecomSdk\\Generated\\Model\\GeoAddress';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'glook\\PecomSdk\\Generated\\Model\\GeoAddress';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \glook\PecomSdk\Generated\Model\GeoAddress();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('components', $data) && $data['components'] !== null) {
            $values = array();
            foreach ($data['components'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'glook\\PecomSdk\\Generated\\Model\\GeoAddressComponent', 'json', $context);
            }
            $object->setComponents($values);
        }
        elseif (\array_key_exists('components', $data) && $data['components'] === null) {
            $object->setComponents(null);
        }
        if (\array_key_exists('country_code', $data) && $data['country_code'] !== null) {
            $object->setCountryCode($data['country_code']);
        }
        elseif (\array_key_exists('country_code', $data) && $data['country_code'] === null) {
            $object->setCountryCode(null);
        }
        if (\array_key_exists('formatted', $data) && $data['formatted'] !== null) {
            $object->setFormatted($data['formatted']);
        }
        elseif (\array_key_exists('formatted', $data) && $data['formatted'] === null) {
            $object->setFormatted(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getComponents()) {
            $values = array();
            foreach ($object->getComponents() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['components'] = $values;
        }
        if (null !== $object->getCountryCode()) {
            $data['country_code'] = $object->getCountryCode();
        }
        if (null !== $object->getFormatted()) {
            $data['formatted'] = $object->getFormatted();
        }
        return $data;
    }
}