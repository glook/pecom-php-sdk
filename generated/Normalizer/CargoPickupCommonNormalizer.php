<?php

namespace glook\PecomSdk\Generated\Normalizer;

use glook\PecomSdk\Generated\Model\CargoPickupCommon;
use glook\PecomSdk\Generated\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CargoPickupCommonNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'glook\PecomSdk\Generated\Model\CargoPickupCommon' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'glook\PecomSdk\Generated\Model\CargoPickupCommon' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new CargoPickupCommon();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('adjustDimensions', $data) && null !== $data['adjustDimensions']) {
            $object->setAdjustDimensions($data['adjustDimensions']);
        } elseif (\array_key_exists('adjustDimensions', $data) && null === $data['adjustDimensions']) {
            $object->setAdjustDimensions(null);
        }
        if (\array_key_exists('applicationDate', $data)) {
            $object->setApplicationDate(\DateTime::createFromFormat('Y-m-d', $data['applicationDate'])->setTime(0, 0, 0));
        }
        if (\array_key_exists('callToScheduleCar', $data) && null !== $data['callToScheduleCar']) {
            $object->setCallToScheduleCar($data['callToScheduleCar']);
        } elseif (\array_key_exists('callToScheduleCar', $data) && null === $data['callToScheduleCar']) {
            $object->setCallToScheduleCar(null);
        }
        if (\array_key_exists('cargoPlaceList', $data) && null !== $data['cargoPlaceList']) {
            $values = [];
            foreach ($data['cargoPlaceList'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'glook\PecomSdk\Generated\Model\CargopickupCargoPlace', 'json', $context);
            }
            $object->setCargoPlaceList($values);
        } elseif (\array_key_exists('cargoPlaceList', $data) && null === $data['cargoPlaceList']) {
            $object->setCargoPlaceList(null);
        }
        if (\array_key_exists('clientPositionsBarcode', $data) && null !== $data['clientPositionsBarcode']) {
            $values_1 = [];
            foreach ($data['clientPositionsBarcode'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setClientPositionsBarcode($values_1);
        } elseif (\array_key_exists('clientPositionsBarcode', $data) && null === $data['clientPositionsBarcode']) {
            $object->setClientPositionsBarcode(null);
        }
        if (\array_key_exists('customerCorrelation', $data) && null !== $data['customerCorrelation']) {
            $object->setCustomerCorrelation($data['customerCorrelation']);
        } elseif (\array_key_exists('customerCorrelation', $data) && null === $data['customerCorrelation']) {
            $object->setCustomerCorrelation(null);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        if (\array_key_exists('height', $data)) {
            $object->setHeight($data['height']);
        }
        if (\array_key_exists('isFragile', $data) && null !== $data['isFragile']) {
            $object->setIsFragile($data['isFragile']);
        } elseif (\array_key_exists('isFragile', $data) && null === $data['isFragile']) {
            $object->setIsFragile(null);
        }
        if (\array_key_exists('isGlass', $data) && null !== $data['isGlass']) {
            $object->setIsGlass($data['isGlass']);
        } elseif (\array_key_exists('isGlass', $data) && null === $data['isGlass']) {
            $object->setIsGlass(null);
        }
        if (\array_key_exists('isLiquid', $data) && null !== $data['isLiquid']) {
            $object->setIsLiquid($data['isLiquid']);
        } elseif (\array_key_exists('isLiquid', $data) && null === $data['isLiquid']) {
            $object->setIsLiquid(null);
        }
        if (\array_key_exists('isOpenCar', $data)) {
            $object->setIsOpenCar($data['isOpenCar']);
        }
        if (\array_key_exists('isSideLoad', $data)) {
            $object->setIsSideLoad($data['isSideLoad']);
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
        if (\array_key_exists('length', $data)) {
            $object->setLength($data['length']);
        }
        if (\array_key_exists('pickupType', $data) && null !== $data['pickupType']) {
            $object->setPickupType($data['pickupType']);
        } elseif (\array_key_exists('pickupType', $data) && null === $data['pickupType']) {
            $object->setPickupType(null);
        }
        if (\array_key_exists('positionsCount', $data)) {
            $object->setPositionsCount($data['positionsCount']);
        }
        if (\array_key_exists('responsiblePerson', $data)) {
            $object->setResponsiblePerson($data['responsiblePerson']);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
        }
        if (\array_key_exists('typeClientBarcode', $data) && null !== $data['typeClientBarcode']) {
            $object->setTypeClientBarcode($data['typeClientBarcode']);
        } elseif (\array_key_exists('typeClientBarcode', $data) && null === $data['typeClientBarcode']) {
            $object->setTypeClientBarcode(null);
        }
        if (\array_key_exists('volume', $data)) {
            $object->setVolume($data['volume']);
        }
        if (\array_key_exists('weight', $data)) {
            $object->setWeight($data['weight']);
        }
        if (\array_key_exists('whoRegisterApplication', $data)) {
            $object->setWhoRegisterApplication($data['whoRegisterApplication']);
        }
        if (\array_key_exists('width', $data)) {
            $object->setWidth($data['width']);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getAdjustDimensions()) {
            $data['adjustDimensions'] = $object->getAdjustDimensions();
        }
        $data['applicationDate'] = $object->getApplicationDate()->format('Y-m-d');
        if (null !== $object->getCallToScheduleCar()) {
            $data['callToScheduleCar'] = $object->getCallToScheduleCar();
        }
        if (null !== $object->getCargoPlaceList()) {
            $values = [];
            foreach ($object->getCargoPlaceList() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['cargoPlaceList'] = $values;
        }
        if (null !== $object->getClientPositionsBarcode()) {
            $values_1 = [];
            foreach ($object->getClientPositionsBarcode() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['clientPositionsBarcode'] = $values_1;
        }
        if (null !== $object->getCustomerCorrelation()) {
            $data['customerCorrelation'] = $object->getCustomerCorrelation();
        }
        $data['description'] = $object->getDescription();
        $data['height'] = $object->getHeight();
        if (null !== $object->getIsFragile()) {
            $data['isFragile'] = $object->getIsFragile();
        }
        if (null !== $object->getIsGlass()) {
            $data['isGlass'] = $object->getIsGlass();
        }
        if (null !== $object->getIsLiquid()) {
            $data['isLiquid'] = $object->getIsLiquid();
        }
        $data['isOpenCar'] = $object->getIsOpenCar();
        $data['isSideLoad'] = $object->getIsSideLoad();
        if (null !== $object->getIsSpecialEquipment()) {
            $data['isSpecialEquipment'] = $object->getIsSpecialEquipment();
        }
        if (null !== $object->getIsUncovered()) {
            $data['isUncovered'] = $object->getIsUncovered();
        }
        $data['length'] = $object->getLength();
        if (null !== $object->getPickupType()) {
            $data['pickupType'] = $object->getPickupType();
        }
        $data['positionsCount'] = $object->getPositionsCount();
        $data['responsiblePerson'] = $object->getResponsiblePerson();
        $data['type'] = $object->getType();
        if (null !== $object->getTypeClientBarcode()) {
            $data['typeClientBarcode'] = $object->getTypeClientBarcode();
        }
        $data['volume'] = $object->getVolume();
        $data['weight'] = $object->getWeight();
        $data['whoRegisterApplication'] = $object->getWhoRegisterApplication();
        $data['width'] = $object->getWidth();

        return $data;
    }
}
