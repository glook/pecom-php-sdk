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
class CargoPickupNetworkSubmitRequestCargosItemsItemCargoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'glook\\PecomSdk\\Generated\\Model\\CargoPickupNetworkSubmitRequestCargosItemsItemCargo';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'glook\\PecomSdk\\Generated\\Model\\CargoPickupNetworkSubmitRequestCargosItemsItemCargo';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \glook\PecomSdk\Generated\Model\CargoPickupNetworkSubmitRequestCargosItemsItemCargo();
        if (null === $data || false === \is_array($data)) {
            return $object;
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
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
        }
        elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('height', $data) && $data['height'] !== null) {
            $object->setHeight($data['height']);
        }
        elseif (\array_key_exists('height', $data) && $data['height'] === null) {
            $object->setHeight(null);
        }
        if (\array_key_exists('length', $data) && $data['length'] !== null) {
            $object->setLength($data['length']);
        }
        elseif (\array_key_exists('length', $data) && $data['length'] === null) {
            $object->setLength(null);
        }
        if (\array_key_exists('orderNumber', $data) && $data['orderNumber'] !== null) {
            $object->setOrderNumber($data['orderNumber']);
        }
        elseif (\array_key_exists('orderNumber', $data) && $data['orderNumber'] === null) {
            $object->setOrderNumber(null);
        }
        if (\array_key_exists('positionsCount', $data) && $data['positionsCount'] !== null) {
            $object->setPositionsCount($data['positionsCount']);
        }
        elseif (\array_key_exists('positionsCount', $data) && $data['positionsCount'] === null) {
            $object->setPositionsCount(null);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
        }
        if (\array_key_exists('volume', $data) && $data['volume'] !== null) {
            $object->setVolume($data['volume']);
        }
        elseif (\array_key_exists('volume', $data) && $data['volume'] === null) {
            $object->setVolume(null);
        }
        if (\array_key_exists('weight', $data) && $data['weight'] !== null) {
            $object->setWeight($data['weight']);
        }
        elseif (\array_key_exists('weight', $data) && $data['weight'] === null) {
            $object->setWeight(null);
        }
        if (\array_key_exists('width', $data) && $data['width'] !== null) {
            $object->setWidth($data['width']);
        }
        elseif (\array_key_exists('width', $data) && $data['width'] === null) {
            $object->setWidth(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
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
        if (null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if (null !== $object->getHeight()) {
            $data['height'] = $object->getHeight();
        }
        if (null !== $object->getLength()) {
            $data['length'] = $object->getLength();
        }
        if (null !== $object->getOrderNumber()) {
            $data['orderNumber'] = $object->getOrderNumber();
        }
        if (null !== $object->getPositionsCount()) {
            $data['positionsCount'] = $object->getPositionsCount();
        }
        $data['type'] = $object->getType();
        if (null !== $object->getVolume()) {
            $data['volume'] = $object->getVolume();
        }
        if (null !== $object->getWeight()) {
            $data['weight'] = $object->getWeight();
        }
        if (null !== $object->getWidth()) {
            $data['width'] = $object->getWidth();
        }
        return $data;
    }
}