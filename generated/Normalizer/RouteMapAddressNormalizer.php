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
class RouteMapAddressNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'glook\\PecomSdk\\Generated\\Model\\RouteMapAddress';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'glook\\PecomSdk\\Generated\\Model\\RouteMapAddress';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \glook\PecomSdk\Generated\Model\RouteMapAddress();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('coordinates', $data)) {
            $object->setCoordinates($this->denormalizer->denormalize($data['coordinates'], 'glook\\PecomSdk\\Generated\\Model\\CargosCoordinates', 'json', $context));
        }
        if (\array_key_exists('geoData', $data)) {
            $object->setGeoData($this->denormalizer->denormalize($data['geoData'], 'glook\\PecomSdk\\Generated\\Model\\CargosGeoData', 'json', $context));
        }
        if (\array_key_exists('operationAddresses', $data) && $data['operationAddresses'] !== null) {
            $values = array();
            foreach ($data['operationAddresses'] as $value) {
                $values[] = $value;
            }
            $object->setOperationAddresses($values);
        }
        elseif (\array_key_exists('operationAddresses', $data) && $data['operationAddresses'] === null) {
            $object->setOperationAddresses(null);
        }
        if (\array_key_exists('routeMaps', $data) && $data['routeMaps'] !== null) {
            $values_1 = array();
            foreach ($data['routeMaps'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'glook\\PecomSdk\\Generated\\Model\\RouteMap', 'json', $context);
            }
            $object->setRouteMaps($values_1);
        }
        elseif (\array_key_exists('routeMaps', $data) && $data['routeMaps'] === null) {
            $object->setRouteMaps(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getCoordinates()) {
            $data['coordinates'] = $this->normalizer->normalize($object->getCoordinates(), 'json', $context);
        }
        if (null !== $object->getGeoData()) {
            $data['geoData'] = $this->normalizer->normalize($object->getGeoData(), 'json', $context);
        }
        if (null !== $object->getOperationAddresses()) {
            $values = array();
            foreach ($object->getOperationAddresses() as $value) {
                $values[] = $value;
            }
            $data['operationAddresses'] = $values;
        }
        if (null !== $object->getRouteMaps()) {
            $values_1 = array();
            foreach ($object->getRouteMaps() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['routeMaps'] = $values_1;
        }
        return $data;
    }
}