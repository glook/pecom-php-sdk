<?php

namespace glook\PecomSdk\Generated\Normalizer;

use glook\PecomSdk\Generated\Model\CargoPickupNetworkSubmitRequestCargosItemsItemConditions;
use glook\PecomSdk\Generated\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CargoPickupNetworkSubmitRequestCargosItemsItemConditionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'glook\PecomSdk\Generated\Model\CargoPickupNetworkSubmitRequestCargosItemsItemConditions' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'glook\PecomSdk\Generated\Model\CargoPickupNetworkSubmitRequestCargosItemsItemConditions' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new CargoPickupNetworkSubmitRequestCargosItemsItemConditions();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('isFast', $data) && null !== $data['isFast']) {
            $object->setIsFast($data['isFast']);
        } elseif (\array_key_exists('isFast', $data) && null === $data['isFast']) {
            $object->setIsFast(null);
        }
        if (\array_key_exists('isLoading', $data) && null !== $data['isLoading']) {
            $object->setIsLoading($data['isLoading']);
        } elseif (\array_key_exists('isLoading', $data) && null === $data['isLoading']) {
            $object->setIsLoading(null);
        }
        if (\array_key_exists('isOpenCar', $data) && null !== $data['isOpenCar']) {
            $object->setIsOpenCar($data['isOpenCar']);
        } elseif (\array_key_exists('isOpenCar', $data) && null === $data['isOpenCar']) {
            $object->setIsOpenCar(null);
        }
        if (\array_key_exists('isSideLoad', $data) && null !== $data['isSideLoad']) {
            $object->setIsSideLoad($data['isSideLoad']);
        } elseif (\array_key_exists('isSideLoad', $data) && null === $data['isSideLoad']) {
            $object->setIsSideLoad(null);
        }
        if (\array_key_exists('isSpecialEquipment', $data) && null !== $data['isSpecialEquipment']) {
            $object->setIsSpecialEquipment($data['isSpecialEquipment']);
        } elseif (\array_key_exists('isSpecialEquipment', $data) && null === $data['isSpecialEquipment']) {
            $object->setIsSpecialEquipment(null);
        }
        if (\array_key_exists('isUncovered', $data) && null !== $data['isUncovered']) {
            $object->setIsUncovered($data['isUncovered']);
        } elseif (\array_key_exists('isUncovered', $data) && null === $data['isUncovered']) {
            $object->setIsUncovered(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getIsFast()) {
            $data['isFast'] = $object->getIsFast();
        }
        if (null !== $object->getIsLoading()) {
            $data['isLoading'] = $object->getIsLoading();
        }
        if (null !== $object->getIsOpenCar()) {
            $data['isOpenCar'] = $object->getIsOpenCar();
        }
        if (null !== $object->getIsSideLoad()) {
            $data['isSideLoad'] = $object->getIsSideLoad();
        }
        if (null !== $object->getIsSpecialEquipment()) {
            $data['isSpecialEquipment'] = $object->getIsSpecialEquipment();
        }
        if (null !== $object->getIsUncovered()) {
            $data['isUncovered'] = $object->getIsUncovered();
        }

        return $data;
    }
}
