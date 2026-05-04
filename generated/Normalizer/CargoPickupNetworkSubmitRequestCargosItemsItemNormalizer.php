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
class CargoPickupNetworkSubmitRequestCargosItemsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'glook\\PecomSdk\\Generated\\Model\\CargoPickupNetworkSubmitRequestCargosItemsItem';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'glook\\PecomSdk\\Generated\\Model\\CargoPickupNetworkSubmitRequestCargosItemsItem';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \glook\PecomSdk\Generated\Model\CargoPickupNetworkSubmitRequestCargosItemsItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('cargo', $data)) {
            $object->setCargo($this->denormalizer->denormalize($data['cargo'], 'glook\\PecomSdk\\Generated\\Model\\CargoPickupNetworkSubmitRequestCargosItemsItemCargo', 'json', $context));
        }
        if (\array_key_exists('conditions', $data) && $data['conditions'] !== null) {
            $object->setConditions($this->denormalizer->denormalize($data['conditions'], 'glook\\PecomSdk\\Generated\\Model\\CargoPickupNetworkSubmitRequestCargosItemsItemConditions', 'json', $context));
        }
        elseif (\array_key_exists('conditions', $data) && $data['conditions'] === null) {
            $object->setConditions(null);
        }
        if (\array_key_exists('receiver', $data)) {
            $object->setReceiver($this->denormalizer->denormalize($data['receiver'], 'glook\\PecomSdk\\Generated\\Model\\CargoPickupNetworkSubmitRequestCargosItemsItemReceiver', 'json', $context));
        }
        if (\array_key_exists('services', $data) && $data['services'] !== null) {
            $object->setServices($this->denormalizer->denormalize($data['services'], 'glook\\PecomSdk\\Generated\\Model\\CargoPickupNetworkSubmitRequestCargosItemsItemServices', 'json', $context));
        }
        elseif (\array_key_exists('services', $data) && $data['services'] === null) {
            $object->setServices(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['cargo'] = $this->normalizer->normalize($object->getCargo(), 'json', $context);
        if (null !== $object->getConditions()) {
            $data['conditions'] = $this->normalizer->normalize($object->getConditions(), 'json', $context);
        }
        $data['receiver'] = $this->normalizer->normalize($object->getReceiver(), 'json', $context);
        if (null !== $object->getServices()) {
            $data['services'] = $this->normalizer->normalize($object->getServices(), 'json', $context);
        }
        return $data;
    }
}