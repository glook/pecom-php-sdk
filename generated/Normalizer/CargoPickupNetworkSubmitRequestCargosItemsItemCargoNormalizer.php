<?php

namespace glook\PecomSdk\Generated\Normalizer;

use glook\PecomSdk\Generated\Model\CargoPickupNetworkSubmitRequestCargosItemsItemCargo;
use glook\PecomSdk\Generated\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
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
        return 'glook\PecomSdk\Generated\Model\CargoPickupNetworkSubmitRequestCargosItemsItemCargo' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'glook\PecomSdk\Generated\Model\CargoPickupNetworkSubmitRequestCargosItemsItemCargo' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new CargoPickupNetworkSubmitRequestCargosItemsItemCargo();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('clientPositionsBarcode', $data) && null !== $data['clientPositionsBarcode']) {
            $values = [];
            foreach ($data['clientPositionsBarcode'] as $value) {
                $values[] = $value;
            }
            $object->setClientPositionsBarcode($values);
        } elseif (\array_key_exists('clientPositionsBarcode', $data) && null === $data['clientPositionsBarcode']) {
            $object->setClientPositionsBarcode(null);
        }
        if (\array_key_exists('customerCorrelation', $data) && null !== $data['customerCorrelation']) {
            $object->setCustomerCorrelation($data['customerCorrelation']);
        } elseif (\array_key_exists('customerCorrelation', $data) && null === $data['customerCorrelation']) {
            $object->setCustomerCorrelation(null);
        }
        if (\array_key_exists('description', $data) && null !== $data['description']) {
            $object->setDescription($data['description']);
        } elseif (\array_key_exists('description', $data) && null === $data['description']) {
            $object->setDescription(null);
        }
        if (\array_key_exists('height', $data) && null !== $data['height']) {
            $object->setHeight($data['height']);
        } elseif (\array_key_exists('height', $data) && null === $data['height']) {
            $object->setHeight(null);
        }
        if (\array_key_exists('length', $data) && null !== $data['length']) {
            $object->setLength($data['length']);
        } elseif (\array_key_exists('length', $data) && null === $data['length']) {
            $object->setLength(null);
        }
        if (\array_key_exists('orderNumber', $data) && null !== $data['orderNumber']) {
            $object->setOrderNumber($data['orderNumber']);
        } elseif (\array_key_exists('orderNumber', $data) && null === $data['orderNumber']) {
            $object->setOrderNumber(null);
        }
        if (\array_key_exists('positionsCount', $data) && null !== $data['positionsCount']) {
            $object->setPositionsCount($data['positionsCount']);
        } elseif (\array_key_exists('positionsCount', $data) && null === $data['positionsCount']) {
            $object->setPositionsCount(null);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
        }
        if (\array_key_exists('volume', $data) && null !== $data['volume']) {
            $object->setVolume($data['volume']);
        } elseif (\array_key_exists('volume', $data) && null === $data['volume']) {
            $object->setVolume(null);
        }
        if (\array_key_exists('weight', $data) && null !== $data['weight']) {
            $object->setWeight($data['weight']);
        } elseif (\array_key_exists('weight', $data) && null === $data['weight']) {
            $object->setWeight(null);
        }
        if (\array_key_exists('width', $data) && null !== $data['width']) {
            $object->setWidth($data['width']);
        } elseif (\array_key_exists('width', $data) && null === $data['width']) {
            $object->setWidth(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getClientPositionsBarcode()) {
            $values = [];
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
