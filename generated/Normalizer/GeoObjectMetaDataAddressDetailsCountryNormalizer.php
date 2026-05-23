<?php

namespace glook\PecomSdk\Generated\Normalizer;

use glook\PecomSdk\Generated\Model\GeoObjectMetaDataAddressDetailsCountry;
use glook\PecomSdk\Generated\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class GeoObjectMetaDataAddressDetailsCountryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'glook\PecomSdk\Generated\Model\GeoObjectMetaDataAddressDetailsCountry' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'glook\PecomSdk\Generated\Model\GeoObjectMetaDataAddressDetailsCountry' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new GeoObjectMetaDataAddressDetailsCountry();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('AddressLine', $data)) {
            $object->setAddressLine($data['AddressLine']);
        }
        if (\array_key_exists('AdministrativeArea', $data)) {
            $object->setAdministrativeArea($this->denormalizer->denormalize($data['AdministrativeArea'], 'glook\PecomSdk\Generated\Model\GeoObjectMetaDataAddressDetailsCountryAdministrativeArea', 'json', $context));
        }
        if (\array_key_exists('CountryName', $data)) {
            $object->setCountryName($data['CountryName']);
        }
        if (\array_key_exists('CountryNameCode', $data)) {
            $object->setCountryNameCode($data['CountryNameCode']);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['AddressLine'] = $object->getAddressLine();
        $data['AdministrativeArea'] = $this->normalizer->normalize($object->getAdministrativeArea(), 'json', $context);
        $data['CountryName'] = $object->getCountryName();
        $data['CountryNameCode'] = $object->getCountryNameCode();

        return $data;
    }
}
