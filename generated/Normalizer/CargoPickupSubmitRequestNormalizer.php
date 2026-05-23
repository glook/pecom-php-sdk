<?php

namespace glook\PecomSdk\Generated\Normalizer;

use glook\PecomSdk\Generated\Model\CargoPickupSubmitRequest;
use glook\PecomSdk\Generated\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
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
        return 'glook\PecomSdk\Generated\Model\CargoPickupSubmitRequest' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'glook\PecomSdk\Generated\Model\CargoPickupSubmitRequest' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new CargoPickupSubmitRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('billing', $data) && null !== $data['billing']) {
            $object->setBilling($this->denormalizer->denormalize($data['billing'], 'glook\PecomSdk\Generated\Model\CargoPickupBilling', 'json', $context));
        } elseif (\array_key_exists('billing', $data) && null === $data['billing']) {
            $object->setBilling(null);
        }
        if (\array_key_exists('common', $data)) {
            $object->setCommon($this->denormalizer->denormalize($data['common'], 'glook\PecomSdk\Generated\Model\CargoPickupCommon', 'json', $context));
        }
        if (\array_key_exists('files', $data) && null !== $data['files']) {
            $values = [];
            foreach ($data['files'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'glook\PecomSdk\Generated\Model\CargoPickupFile', 'json', $context);
            }
            $object->setFiles($values);
        } elseif (\array_key_exists('files', $data) && null === $data['files']) {
            $object->setFiles(null);
        }
        if (\array_key_exists('payments', $data) && null !== $data['payments']) {
            $object->setPayments($this->denormalizer->denormalize($data['payments'], 'glook\PecomSdk\Generated\Model\CargoPickupPayments', 'json', $context));
        } elseif (\array_key_exists('payments', $data) && null === $data['payments']) {
            $object->setPayments(null);
        }
        if (\array_key_exists('receiver', $data) && null !== $data['receiver']) {
            $object->setReceiver($this->denormalizer->denormalize($data['receiver'], 'glook\PecomSdk\Generated\Model\CargoPickupReceiver', 'json', $context));
        } elseif (\array_key_exists('receiver', $data) && null === $data['receiver']) {
            $object->setReceiver(null);
        }
        if (\array_key_exists('refusalWarehouse', $data) && null !== $data['refusalWarehouse']) {
            $object->setRefusalWarehouse($this->denormalizer->denormalize($data['refusalWarehouse'], 'glook\PecomSdk\Generated\Model\CargoPickupRefusalWarehouse', 'json', $context));
        } elseif (\array_key_exists('refusalWarehouse', $data) && null === $data['refusalWarehouse']) {
            $object->setRefusalWarehouse(null);
        }
        if (\array_key_exists('sender', $data)) {
            $object->setSender($this->denormalizer->denormalize($data['sender'], 'glook\PecomSdk\Generated\Model\CargoPickupSender', 'json', $context));
        }
        if (\array_key_exists('services', $data)) {
            $object->setServices($this->denormalizer->denormalize($data['services'], 'glook\PecomSdk\Generated\Model\CargoPickupServices', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getBilling()) {
            $data['billing'] = $this->normalizer->normalize($object->getBilling(), 'json', $context);
        }
        $data['common'] = $this->normalizer->normalize($object->getCommon(), 'json', $context);
        if (null !== $object->getFiles()) {
            $values = [];
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
