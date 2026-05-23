<?php

namespace glook\PecomSdk\Generated\Normalizer;

use glook\PecomSdk\Generated\Model\RouteMapAddress;
use glook\PecomSdk\Generated\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
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
        return 'glook\PecomSdk\Generated\Model\RouteMapAddress' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'glook\PecomSdk\Generated\Model\RouteMapAddress' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new RouteMapAddress();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('coordinates', $data) && null !== $data['coordinates']) {
            $object->setCoordinates($this->denormalizer->denormalize($data['coordinates'], 'glook\PecomSdk\Generated\Model\CargosCoordinates', 'json', $context));
        } elseif (\array_key_exists('coordinates', $data) && null === $data['coordinates']) {
            $object->setCoordinates(null);
        }
        if (\array_key_exists('geoData', $data) && null !== $data['geoData']) {
            $object->setGeoData($this->denormalizer->denormalize($data['geoData'], 'glook\PecomSdk\Generated\Model\CargosGeoData', 'json', $context));
        } elseif (\array_key_exists('geoData', $data) && null === $data['geoData']) {
            $object->setGeoData(null);
        }
        if (\array_key_exists('operationAddresses', $data) && null !== $data['operationAddresses']) {
            $values = [];
            foreach ($data['operationAddresses'] as $value) {
                $values[] = $value;
            }
            $object->setOperationAddresses($values);
        } elseif (\array_key_exists('operationAddresses', $data) && null === $data['operationAddresses']) {
            $object->setOperationAddresses(null);
        }
        if (\array_key_exists('routeMaps', $data) && null !== $data['routeMaps']) {
            $values_1 = [];
            foreach ($data['routeMaps'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'glook\PecomSdk\Generated\Model\RouteMap', 'json', $context);
            }
            $object->setRouteMaps($values_1);
        } elseif (\array_key_exists('routeMaps', $data) && null === $data['routeMaps']) {
            $object->setRouteMaps(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getCoordinates()) {
            $data['coordinates'] = $this->normalizer->normalize($object->getCoordinates(), 'json', $context);
        }
        if (null !== $object->getGeoData()) {
            $data['geoData'] = $this->normalizer->normalize($object->getGeoData(), 'json', $context);
        }
        if (null !== $object->getOperationAddresses()) {
            $values = [];
            foreach ($object->getOperationAddresses() as $value) {
                $values[] = $value;
            }
            $data['operationAddresses'] = $values;
        }
        if (null !== $object->getRouteMaps()) {
            $values_1 = [];
            foreach ($object->getRouteMaps() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['routeMaps'] = $values_1;
        }

        return $data;
    }
}
