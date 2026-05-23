<?php

namespace glook\PecomSdk\Generated\Normalizer;

use glook\PecomSdk\Generated\Model\GeoObjectMetaDataAddressDetailsCountryAdministrativeAreaSubAdministrativeArea;
use glook\PecomSdk\Generated\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class GeoObjectMetaDataAddressDetailsCountryAdministrativeAreaSubAdministrativeAreaNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'glook\PecomSdk\Generated\Model\GeoObjectMetaDataAddressDetailsCountryAdministrativeAreaSubAdministrativeArea' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'glook\PecomSdk\Generated\Model\GeoObjectMetaDataAddressDetailsCountryAdministrativeAreaSubAdministrativeArea' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new GeoObjectMetaDataAddressDetailsCountryAdministrativeAreaSubAdministrativeArea();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Locality', $data)) {
            $object->setLocality($this->denormalizer->denormalize($data['Locality'], 'glook\PecomSdk\Generated\Model\GeoObjectMetaDataAddressDetailsCountryAdministrativeAreaSubAdministrativeAreaLocality', 'json', $context));
        }
        if (\array_key_exists('SubAdministrativeAreaName', $data)) {
            $object->setSubAdministrativeAreaName($data['SubAdministrativeAreaName']);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['Locality'] = $this->normalizer->normalize($object->getLocality(), 'json', $context);
        $data['SubAdministrativeAreaName'] = $object->getSubAdministrativeAreaName();

        return $data;
    }
}
