<?php

namespace glook\PecomSdk\Generated\Normalizer;

use glook\PecomSdk\Generated\Model\PreregistrationSubmitResponseReceiver;
use glook\PecomSdk\Generated\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
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
        return 'glook\PecomSdk\Generated\Model\PreregistrationSubmitResponseReceiver' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'glook\PecomSdk\Generated\Model\PreregistrationSubmitResponseReceiver' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new PreregistrationSubmitResponseReceiver();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('addressNormal', $data) && null !== $data['addressNormal']) {
            $object->setAddressNormal($data['addressNormal']);
        } elseif (\array_key_exists('addressNormal', $data) && null === $data['addressNormal']) {
            $object->setAddressNormal(null);
        }
        if (\array_key_exists('coordinates', $data) && null !== $data['coordinates']) {
            $object->setCoordinates($this->denormalizer->denormalize($data['coordinates'], 'glook\PecomSdk\Generated\Model\PreregistrationSubmitResponseCoordinates', 'json', $context));
        } elseif (\array_key_exists('coordinates', $data) && null === $data['coordinates']) {
            $object->setCoordinates(null);
        }
        if (\array_key_exists('warehouseId', $data) && null !== $data['warehouseId']) {
            $object->setWarehouseId($data['warehouseId']);
        } elseif (\array_key_exists('warehouseId', $data) && null === $data['warehouseId']) {
            $object->setWarehouseId(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
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
