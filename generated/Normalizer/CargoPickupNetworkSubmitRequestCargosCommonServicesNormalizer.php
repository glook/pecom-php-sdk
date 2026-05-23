<?php

namespace glook\PecomSdk\Generated\Normalizer;

use glook\PecomSdk\Generated\Model\CargoPickupNetworkSubmitRequestCargosCommonServices;
use glook\PecomSdk\Generated\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CargoPickupNetworkSubmitRequestCargosCommonServicesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'glook\PecomSdk\Generated\Model\CargoPickupNetworkSubmitRequestCargosCommonServices' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'glook\PecomSdk\Generated\Model\CargoPickupNetworkSubmitRequestCargosCommonServices' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new CargoPickupNetworkSubmitRequestCargosCommonServices();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('delivery', $data) && null !== $data['delivery']) {
            $object->setDelivery($this->denormalizer->denormalize($data['delivery'], 'glook\PecomSdk\Generated\Model\CargopickupnetworkServicePayer', 'json', $context));
        } elseif (\array_key_exists('delivery', $data) && null === $data['delivery']) {
            $object->setDelivery(null);
        }
        if (\array_key_exists('insurance', $data) && null !== $data['insurance']) {
            $object->setInsurance($this->denormalizer->denormalize($data['insurance'], 'glook\PecomSdk\Generated\Model\CargopickupnetworkServicePayer', 'json', $context));
        } elseif (\array_key_exists('insurance', $data) && null === $data['insurance']) {
            $object->setInsurance(null);
        }
        if (\array_key_exists('pickUp', $data) && null !== $data['pickUp']) {
            $object->setPickUp($this->denormalizer->denormalize($data['pickUp'], 'glook\PecomSdk\Generated\Model\CargopickupnetworkServicePayer', 'json', $context));
        } elseif (\array_key_exists('pickUp', $data) && null === $data['pickUp']) {
            $object->setPickUp(null);
        }
        if (\array_key_exists('transporting', $data) && null !== $data['transporting']) {
            $object->setTransporting($this->denormalizer->denormalize($data['transporting'], 'glook\PecomSdk\Generated\Model\CargopickupnetworkServicePayer', 'json', $context));
        } elseif (\array_key_exists('transporting', $data) && null === $data['transporting']) {
            $object->setTransporting(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getDelivery()) {
            $data['delivery'] = $this->normalizer->normalize($object->getDelivery(), 'json', $context);
        }
        if (null !== $object->getInsurance()) {
            $data['insurance'] = $this->normalizer->normalize($object->getInsurance(), 'json', $context);
        }
        if (null !== $object->getPickUp()) {
            $data['pickUp'] = $this->normalizer->normalize($object->getPickUp(), 'json', $context);
        }
        if (null !== $object->getTransporting()) {
            $data['transporting'] = $this->normalizer->normalize($object->getTransporting(), 'json', $context);
        }

        return $data;
    }
}
