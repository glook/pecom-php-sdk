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
class CargoPickupNetworkSubmitRequestCargosItemsItemServicesDeliveryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'glook\\PecomSdk\\Generated\\Model\\CargoPickupNetworkSubmitRequestCargosItemsItemServicesDelivery';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'glook\\PecomSdk\\Generated\\Model\\CargoPickupNetworkSubmitRequestCargosItemsItemServicesDelivery';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \glook\PecomSdk\Generated\Model\CargoPickupNetworkSubmitRequestCargosItemsItemServicesDelivery();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('address', $data) && $data['address'] !== null) {
            $object->setAddress($data['address']);
        }
        elseif (\array_key_exists('address', $data) && $data['address'] === null) {
            $object->setAddress(null);
        }
        if (\array_key_exists('avisationDateTime', $data) && $data['avisationDateTime'] !== null) {
            $object->setAvisationDateTime(\DateTime::createFromFormat('Y-m-d', $data['avisationDateTime'])->setTime(0, 0, 0));
        }
        elseif (\array_key_exists('avisationDateTime', $data) && $data['avisationDateTime'] === null) {
            $object->setAvisationDateTime(null);
        }
        if (\array_key_exists('enabled', $data)) {
            $object->setEnabled($data['enabled']);
        }
        if (\array_key_exists('payer', $data)) {
            $object->setPayer($this->denormalizer->denormalize($data['payer'], 'glook\\PecomSdk\\Generated\\Model\\CargopickupnetworkPayer', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
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