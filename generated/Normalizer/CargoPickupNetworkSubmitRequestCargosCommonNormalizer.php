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
class CargoPickupNetworkSubmitRequestCargosCommonNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'glook\\PecomSdk\\Generated\\Model\\CargoPickupNetworkSubmitRequestCargosCommon';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'glook\\PecomSdk\\Generated\\Model\\CargoPickupNetworkSubmitRequestCargosCommon';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \glook\PecomSdk\Generated\Model\CargoPickupNetworkSubmitRequestCargosCommon();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('cargoTotals', $data) && $data['cargoTotals'] !== null) {
            $object->setCargoTotals($this->denormalizer->denormalize($data['cargoTotals'], 'glook\\PecomSdk\\Generated\\Model\\CargoPickupNetworkSubmitRequestCargosCommonCargoTotals', 'json', $context));
        }
        elseif (\array_key_exists('cargoTotals', $data) && $data['cargoTotals'] === null) {
            $object->setCargoTotals(null);
        }
        if (\array_key_exists('services', $data) && $data['services'] !== null) {
            $object->setServices($this->denormalizer->denormalize($data['services'], 'glook\\PecomSdk\\Generated\\Model\\CargoPickupNetworkSubmitRequestCargosCommonServices', 'json', $context));
        }
        elseif (\array_key_exists('services', $data) && $data['services'] === null) {
            $object->setServices(null);
        }
        if (\array_key_exists('typeClientBarcode', $data) && $data['typeClientBarcode'] !== null) {
            $object->setTypeClientBarcode($data['typeClientBarcode']);
        }
        elseif (\array_key_exists('typeClientBarcode', $data) && $data['typeClientBarcode'] === null) {
            $object->setTypeClientBarcode(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getCargoTotals()) {
            $data['cargoTotals'] = $this->normalizer->normalize($object->getCargoTotals(), 'json', $context);
        }
        if (null !== $object->getServices()) {
            $data['services'] = $this->normalizer->normalize($object->getServices(), 'json', $context);
        }
        if (null !== $object->getTypeClientBarcode()) {
            $data['typeClientBarcode'] = $object->getTypeClientBarcode();
        }
        return $data;
    }
}