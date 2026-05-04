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
class CargoPickupSubmitRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'glook\\PecomSdk\\Generated\\Model\\CargoPickupSubmitRequest';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'glook\\PecomSdk\\Generated\\Model\\CargoPickupSubmitRequest';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \glook\PecomSdk\Generated\Model\CargoPickupSubmitRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('billing', $data)) {
            $object->setBilling($this->denormalizer->denormalize($data['billing'], 'glook\\PecomSdk\\Generated\\Model\\CargoPickupBilling', 'json', $context));
        }
        if (\array_key_exists('common', $data)) {
            $object->setCommon($this->denormalizer->denormalize($data['common'], 'glook\\PecomSdk\\Generated\\Model\\CargoPickupCommon', 'json', $context));
        }
        if (\array_key_exists('files', $data) && $data['files'] !== null) {
            $values = array();
            foreach ($data['files'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'glook\\PecomSdk\\Generated\\Model\\CargoPickupFile', 'json', $context);
            }
            $object->setFiles($values);
        }
        elseif (\array_key_exists('files', $data) && $data['files'] === null) {
            $object->setFiles(null);
        }
        if (\array_key_exists('payments', $data)) {
            $object->setPayments($this->denormalizer->denormalize($data['payments'], 'glook\\PecomSdk\\Generated\\Model\\CargoPickupPayments', 'json', $context));
        }
        if (\array_key_exists('receiver', $data)) {
            $object->setReceiver($this->denormalizer->denormalize($data['receiver'], 'glook\\PecomSdk\\Generated\\Model\\CargoPickupReceiver', 'json', $context));
        }
        if (\array_key_exists('refusalWarehouse', $data)) {
            $object->setRefusalWarehouse($this->denormalizer->denormalize($data['refusalWarehouse'], 'glook\\PecomSdk\\Generated\\Model\\CargoPickupRefusalWarehouse', 'json', $context));
        }
        if (\array_key_exists('sender', $data)) {
            $object->setSender($this->denormalizer->denormalize($data['sender'], 'glook\\PecomSdk\\Generated\\Model\\CargoPickupSender', 'json', $context));
        }
        if (\array_key_exists('services', $data)) {
            $object->setServices($this->denormalizer->denormalize($data['services'], 'glook\\PecomSdk\\Generated\\Model\\CargoPickupServices', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getBilling()) {
            $data['billing'] = $this->normalizer->normalize($object->getBilling(), 'json', $context);
        }
        $data['common'] = $this->normalizer->normalize($object->getCommon(), 'json', $context);
        if (null !== $object->getFiles()) {
            $values = array();
            foreach ($object->getFiles() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['files'] = $values;
        }
        if (null !== $object->getPayments()) {
            $data['payments'] = $this->normalizer->normalize($object->getPayments(), 'json', $context);
        }
        if (null !== $object->getReceiver()) {
            $data['receiver'] = $this->normalizer->normalize($object->getReceiver(), 'json', $context);
        }
        if (null !== $object->getRefusalWarehouse()) {
            $data['refusalWarehouse'] = $this->normalizer->normalize($object->getRefusalWarehouse(), 'json', $context);
        }
        $data['sender'] = $this->normalizer->normalize($object->getSender(), 'json', $context);
        $data['services'] = $this->normalizer->normalize($object->getServices(), 'json', $context);
        return $data;
    }
}