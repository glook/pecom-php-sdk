<?php

namespace glook\PecomSdk\Generated\Normalizer;

use glook\PecomSdk\Generated\Model\PreregistrationCargo;
use glook\PecomSdk\Generated\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class PreregistrationCargoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'glook\PecomSdk\Generated\Model\PreregistrationCargo' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'glook\PecomSdk\Generated\Model\PreregistrationCargo' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new PreregistrationCargo();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('common', $data)) {
            $object->setCommon($this->denormalizer->denormalize($data['common'], 'glook\PecomSdk\Generated\Model\PreregistrationCargoCommon', 'json', $context));
        }
        if (\array_key_exists('receiver', $data)) {
            $object->setReceiver($this->denormalizer->denormalize($data['receiver'], 'glook\PecomSdk\Generated\Model\PreregistrationReceiver', 'json', $context));
        }
        if (\array_key_exists('refusalWarehouse', $data) && null !== $data['refusalWarehouse']) {
            $object->setRefusalWarehouse($this->denormalizer->denormalize($data['refusalWarehouse'], 'glook\PecomSdk\Generated\Model\PreregistrationRefusalWarehouse', 'json', $context));
        } elseif (\array_key_exists('refusalWarehouse', $data) && null === $data['refusalWarehouse']) {
            $object->setRefusalWarehouse(null);
        }
        if (\array_key_exists('services', $data) && null !== $data['services']) {
            $object->setServices($this->denormalizer->denormalize($data['services'], 'glook\PecomSdk\Generated\Model\PreregistrationServices', 'json', $context));
        } elseif (\array_key_exists('services', $data) && null === $data['services']) {
            $object->setServices(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['common'] = $this->normalizer->normalize($object->getCommon(), 'json', $context);
        $data['receiver'] = $this->normalizer->normalize($object->getReceiver(), 'json', $context);
        if (null !== $object->getRefusalWarehouse()) {
            $data['refusalWarehouse'] = $this->normalizer->normalize($object->getRefusalWarehouse(), 'json', $context);
        }
        if (null !== $object->getServices()) {
            $data['services'] = $this->normalizer->normalize($object->getServices(), 'json', $context);
        }

        return $data;
    }
}
