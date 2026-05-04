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
class PreregistrationCargoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'glook\\PecomSdk\\Generated\\Model\\PreregistrationCargo';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'glook\\PecomSdk\\Generated\\Model\\PreregistrationCargo';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \glook\PecomSdk\Generated\Model\PreregistrationCargo();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('common', $data)) {
            $object->setCommon($this->denormalizer->denormalize($data['common'], 'glook\\PecomSdk\\Generated\\Model\\PreregistrationCargoCommon', 'json', $context));
        }
        if (\array_key_exists('receiver', $data)) {
            $object->setReceiver($this->denormalizer->denormalize($data['receiver'], 'glook\\PecomSdk\\Generated\\Model\\PreregistrationReceiver', 'json', $context));
        }
        if (\array_key_exists('refusalWarehouse', $data)) {
            $object->setRefusalWarehouse($this->denormalizer->denormalize($data['refusalWarehouse'], 'glook\\PecomSdk\\Generated\\Model\\PreregistrationRefusalWarehouse', 'json', $context));
        }
        if (\array_key_exists('services', $data)) {
            $object->setServices($this->denormalizer->denormalize($data['services'], 'glook\\PecomSdk\\Generated\\Model\\PreregistrationServices', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
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