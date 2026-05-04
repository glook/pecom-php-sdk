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
class CargoPickupNetworkSubmitResponseCargosItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'glook\\PecomSdk\\Generated\\Model\\CargoPickupNetworkSubmitResponseCargosItem';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'glook\\PecomSdk\\Generated\\Model\\CargoPickupNetworkSubmitResponseCargosItem';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \glook\PecomSdk\Generated\Model\CargoPickupNetworkSubmitResponseCargosItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('barcode', $data)) {
            $object->setBarcode($data['barcode']);
        }
        if (\array_key_exists('cargoCode', $data)) {
            $object->setCargoCode($data['cargoCode']);
        }
        if (\array_key_exists('clientPositionsBarcode', $data) && $data['clientPositionsBarcode'] !== null) {
            $values = array();
            foreach ($data['clientPositionsBarcode'] as $value) {
                $values[] = $value;
            }
            $object->setClientPositionsBarcode($values);
        }
        elseif (\array_key_exists('clientPositionsBarcode', $data) && $data['clientPositionsBarcode'] === null) {
            $object->setClientPositionsBarcode(null);
        }
        if (\array_key_exists('customerCorrelation', $data) && $data['customerCorrelation'] !== null) {
            $object->setCustomerCorrelation($data['customerCorrelation']);
        }
        elseif (\array_key_exists('customerCorrelation', $data) && $data['customerCorrelation'] === null) {
            $object->setCustomerCorrelation(null);
        }
        if (\array_key_exists('orderNumber', $data) && $data['orderNumber'] !== null) {
            $object->setOrderNumber($data['orderNumber']);
        }
        elseif (\array_key_exists('orderNumber', $data) && $data['orderNumber'] === null) {
            $object->setOrderNumber(null);
        }
        if (\array_key_exists('positions', $data) && $data['positions'] !== null) {
            $values_1 = array();
            foreach ($data['positions'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'glook\\PecomSdk\\Generated\\Model\\CargoPickupNetworkSubmitResponseCargosItemPositionsItem', 'json', $context);
            }
            $object->setPositions($values_1);
        }
        elseif (\array_key_exists('positions', $data) && $data['positions'] === null) {
            $object->setPositions(null);
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
        $data['barcode'] = $object->getBarcode();
        $data['cargoCode'] = $object->getCargoCode();
        if (null !== $object->getClientPositionsBarcode()) {
            $values = array();
            foreach ($object->getClientPositionsBarcode() as $value) {
                $values[] = $value;
            }
            $data['clientPositionsBarcode'] = $values;
        }
        if (null !== $object->getCustomerCorrelation()) {
            $data['customerCorrelation'] = $object->getCustomerCorrelation();
        }
        if (null !== $object->getOrderNumber()) {
            $data['orderNumber'] = $object->getOrderNumber();
        }
        if (null !== $object->getPositions()) {
            $values_1 = array();
            foreach ($object->getPositions() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['positions'] = $values_1;
        }
        if (null !== $object->getTypeClientBarcode()) {
            $data['typeClientBarcode'] = $object->getTypeClientBarcode();
        }
        return $data;
    }
}