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
class PreregistrationSubmitResponseReceiverNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'glook\\PecomSdk\\Generated\\Model\\PreregistrationSubmitResponseReceiver';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'glook\\PecomSdk\\Generated\\Model\\PreregistrationSubmitResponseReceiver';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \glook\PecomSdk\Generated\Model\PreregistrationSubmitResponseReceiver();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('addressNormal', $data) && $data['addressNormal'] !== null) {
            $object->setAddressNormal($data['addressNormal']);
        }
        elseif (\array_key_exists('addressNormal', $data) && $data['addressNormal'] === null) {
            $object->setAddressNormal(null);
        }
        if (\array_key_exists('coordinates', $data) && $data['coordinates'] !== null) {
            $object->setCoordinates($this->denormalizer->denormalize($data['coordinates'], 'glook\\PecomSdk\\Generated\\Model\\PreregistrationSubmitResponseReceiverCoordinates', 'json', $context));
        }
        elseif (\array_key_exists('coordinates', $data) && $data['coordinates'] === null) {
            $object->setCoordinates(null);
        }
        if (\array_key_exists('warehouseId', $data) && $data['warehouseId'] !== null) {
            $object->setWarehouseId($data['warehouseId']);
        }
        elseif (\array_key_exists('warehouseId', $data) && $data['warehouseId'] === null) {
            $object->setWarehouseId(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAddressNormal()) {
            $data['addressNormal'] = $object->getAddressNormal();
        }
        if (null !== $object->getCoordinates()) {
            $data['coordinates'] = $this->normalizer->normalize($object->getCoordinates(), 'json', $context);
        }
        if (null !== $object->getWarehouseId()) {
            $data['warehouseId'] = $object->getWarehouseId();
        }
        return $data;
    }
}