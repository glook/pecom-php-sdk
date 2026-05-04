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
class GeoObjectMetaDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'glook\\PecomSdk\\Generated\\Model\\GeoObjectMetaData';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'glook\\PecomSdk\\Generated\\Model\\GeoObjectMetaData';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \glook\PecomSdk\Generated\Model\GeoObjectMetaData();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Address', $data)) {
            $object->setAddress($this->denormalizer->denormalize($data['Address'], 'glook\\PecomSdk\\Generated\\Model\\GeoDataAddress', 'json', $context));
        }
        if (\array_key_exists('AddressDetails', $data)) {
            $object->setAddressDetails($this->denormalizer->denormalize($data['AddressDetails'], 'glook\\PecomSdk\\Generated\\Model\\GeoObjectMetaDataAddressDetails', 'json', $context));
        }
        if (\array_key_exists('kind', $data)) {
            $object->setKind($data['kind']);
        }
        if (\array_key_exists('precision', $data)) {
            $object->setPrecision($data['precision']);
        }
        if (\array_key_exists('text', $data)) {
            $object->setText($data['text']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['Address'] = $this->normalizer->normalize($object->getAddress(), 'json', $context);
        $data['AddressDetails'] = $this->normalizer->normalize($object->getAddressDetails(), 'json', $context);
        $data['kind'] = $object->getKind();
        $data['precision'] = $object->getPrecision();
        $data['text'] = $object->getText();
        return $data;
    }
}