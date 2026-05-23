<?php

namespace glook\PecomSdk\Generated\Normalizer;

use glook\PecomSdk\Generated\Model\GeoObjectMetaDataAddressDetailsCountryAdministrativeArea;
use glook\PecomSdk\Generated\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class GeoObjectMetaDataAddressDetailsCountryAdministrativeAreaNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'glook\PecomSdk\Generated\Model\GeoObjectMetaDataAddressDetailsCountryAdministrativeArea' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'glook\PecomSdk\Generated\Model\GeoObjectMetaDataAddressDetailsCountryAdministrativeArea' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new GeoObjectMetaDataAddressDetailsCountryAdministrativeArea();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('AdministrativeAreaName', $data)) {
            $object->setAdministrativeAreaName($data['AdministrativeAreaName']);
        }
        if (\array_key_exists('SubAdministrativeArea', $data)) {
            $object->setSubAdministrativeArea($this->denormalizer->denormalize($data['SubAdministrativeArea'], 'glook\PecomSdk\Generated\Model\GeoObjectMetaDataAddressDetailsCountryAdministrativeAreaSubAdministrativeArea', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['AdministrativeAreaName'] = $object->getAdministrativeAreaName();
        $data['SubAdministrativeArea'] = $this->normalizer->normalize($object->getSubAdministrativeArea(), 'json', $context);

        return $data;
    }
}
