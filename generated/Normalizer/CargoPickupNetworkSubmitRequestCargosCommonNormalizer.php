<?php

namespace glook\PecomSdk\Generated\Normalizer;

use glook\PecomSdk\Generated\Model\CargoPickupNetworkSubmitRequestCargosCommon;
use glook\PecomSdk\Generated\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
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
        return 'glook\PecomSdk\Generated\Model\CargoPickupNetworkSubmitRequestCargosCommon' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'glook\PecomSdk\Generated\Model\CargoPickupNetworkSubmitRequestCargosCommon' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new CargoPickupNetworkSubmitRequestCargosCommon();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('cargoTotals', $data) && null !== $data['cargoTotals']) {
            $object->setCargoTotals($this->denormalizer->denormalize($data['cargoTotals'], 'glook\PecomSdk\Generated\Model\CargoPickupNetworkSubmitRequestCargosCommonCargoTotals', 'json', $context));
        } elseif (\array_key_exists('cargoTotals', $data) && null === $data['cargoTotals']) {
            $object->setCargoTotals(null);
        }
        if (\array_key_exists('services', $data) && null !== $data['services']) {
            $object->setServices($this->denormalizer->denormalize($data['services'], 'glook\PecomSdk\Generated\Model\CargoPickupNetworkSubmitRequestCargosCommonServices', 'json', $context));
        } elseif (\array_key_exists('services', $data) && null === $data['services']) {
            $object->setServices(null);
        }
        if (\array_key_exists('typeClientBarcode', $data) && null !== $data['typeClientBarcode']) {
            $object->setTypeClientBarcode($data['typeClientBarcode']);
        } elseif (\array_key_exists('typeClientBarcode', $data) && null === $data['typeClientBarcode']) {
            $object->setTypeClientBarcode(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
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
