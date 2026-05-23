<?php

namespace glook\PecomSdk\Generated\Normalizer;

use glook\PecomSdk\Generated\Model\SuggestAddressResponseResponseGeoObjectCollectionMetaDataProperty;
use glook\PecomSdk\Generated\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SuggestAddressResponseResponseGeoObjectCollectionMetaDataPropertyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'glook\PecomSdk\Generated\Model\SuggestAddressResponseResponseGeoObjectCollectionMetaDataProperty' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'glook\PecomSdk\Generated\Model\SuggestAddressResponseResponseGeoObjectCollectionMetaDataProperty' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new SuggestAddressResponseResponseGeoObjectCollectionMetaDataProperty();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('GeocoderResponseMetaData', $data)) {
            $object->setGeocoderResponseMetaData($this->denormalizer->denormalize($data['GeocoderResponseMetaData'], 'glook\PecomSdk\Generated\Model\GeocoderResponseMetaData', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['GeocoderResponseMetaData'] = $this->normalizer->normalize($object->getGeocoderResponseMetaData(), 'json', $context);

        return $data;
    }
}
