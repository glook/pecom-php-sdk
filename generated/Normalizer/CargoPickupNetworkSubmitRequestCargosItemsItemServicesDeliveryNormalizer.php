<?php

namespace glook\PecomSdk\Generated\Normalizer;

use glook\PecomSdk\Generated\Model\CargoPickupNetworkSubmitRequestCargosItemsItemServicesDelivery;
use glook\PecomSdk\Generated\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CargoPickupNetworkSubmitRequestCargosItemsItemServicesDeliveryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'glook\PecomSdk\Generated\Model\CargoPickupNetworkSubmitRequestCargosItemsItemServicesDelivery' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'glook\PecomSdk\Generated\Model\CargoPickupNetworkSubmitRequestCargosItemsItemServicesDelivery' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new CargoPickupNetworkSubmitRequestCargosItemsItemServicesDelivery();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('address', $data) && null !== $data['address']) {
            $object->setAddress($data['address']);
        } elseif (\array_key_exists('address', $data) && null === $data['address']) {
            $object->setAddress(null);
        }
        if (\array_key_exists('avisationDateTime', $data) && null !== $data['avisationDateTime']) {
            $object->setAvisationDateTime(\DateTime::createFromFormat('Y-m-d', $data['avisationDateTime'])->setTime(0, 0, 0));
        } elseif (\array_key_exists('avisationDateTime', $data) && null === $data['avisationDateTime']) {
            $object->setAvisationDateTime(null);
        }
        if (\array_key_exists('enabled', $data)) {
            $object->setEnabled($data['enabled']);
        }
        if (\array_key_exists('payer', $data) && null !== $data['payer']) {
            $object->setPayer($this->denormalizer->denormalize($data['payer'], 'glook\PecomSdk\Generated\Model\CargopickupnetworkPayer', 'json', $context));
        } elseif (\array_key_exists('payer', $data) && null === $data['payer']) {
            $object->setPayer(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getAddress()) {
            $data['address'] = $object->getAddress();
        }
        if (null !== $object->getAvisationDateTime()) {
            $data['avisationDateTime'] = $object->getAvisationDateTime()->format('Y-m-d');
        }
        $data['enabled'] = $object->getEnabled();
        if (null !== $object->getPayer()) {
            $data['payer'] = $this->normalizer->normalize($object->getPayer(), 'json', $context);
        }

        return $data;
    }
}
