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
class CargoPickupCommonNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'glook\\PecomSdk\\Generated\\Model\\CargoPickupCommon';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'glook\\PecomSdk\\Generated\\Model\\CargoPickupCommon';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \glook\PecomSdk\Generated\Model\CargoPickupCommon();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('adjustDimensions', $data) && $data['adjustDimensions'] !== null) {
            $object->setAdjustDimensions($data['adjustDimensions']);
        }
        elseif (\array_key_exists('adjustDimensions', $data) && $data['adjustDimensions'] === null) {
            $object->setAdjustDimensions(null);
        }
        if (\array_key_exists('applicationDate', $data)) {
            $object->setApplicationDate(\DateTime::createFromFormat('Y-m-d', $data['applicationDate'])->setTime(0, 0, 0));
        }
        if (\array_key_exists('callToScheduleCar', $data) && $data['callToScheduleCar'] !== null) {
            $object->setCallToScheduleCar($data['callToScheduleCar']);
        }
        elseif (\array_key_exists('callToScheduleCar', $data) && $data['callToScheduleCar'] === null) {
            $object->setCallToScheduleCar(null);
        }
        if (\array_key_exists('cargoPlaceList', $data) && $data['cargoPlaceList'] !== null) {
            $values = array();
            foreach ($data['cargoPlaceList'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'glook\\PecomSdk\\Generated\\Model\\CargopickupCargoPlace', 'json', $context);
            }
            $object->setCargoPlaceList($values);
        }
        elseif (\array_key_exists('cargoPlaceList', $data) && $data['cargoPlaceList'] === null) {
            $object->setCargoPlaceList(null);
        }
        if (\array_key_exists('clientPositionsBarcode', $data) && $data['clientPositionsBarcode'] !== null) {
            $values_1 = array();
            foreach ($data['clientPositionsBarcode'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setClientPositionsBarcode($values_1);
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
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        if (\array_key_exists('height', $data)) {
            $object->setHeight($data['height']);
        }
        if (\array_key_exists('isFragile', $data) && $data['isFragile'] !== null) {
            $object->setIsFragile($data['isFragile']);
        }
        elseif (\array_key_exists('isFragile', $data) && $data['isFragile'] === null) {
            $object->setIsFragile(null);
        }
        if (\array_key_exists('isGlass', $data) && $data['isGlass'] !== null) {
            $object->setIsGlass($data['isGlass']);
        }
        elseif (\array_key_exists('isGlass', $data) && $data['isGlass'] === null) {
            $object->setIsGlass(null);
        }
        if (\array_key_exists('isLiquid', $data) && $data['isLiquid'] !== null) {
            $object->setIsLiquid($data['isLiquid']);
        }
        elseif (\array_key_exists('isLiquid', $data) && $data['isLiquid'] === null) {
            $object->setIsLiquid(null);
        }
        if (\array_key_exists('isOpenCar', $data)) {
            $object->setIsOpenCar($data['isOpenCar']);
        }
        if (\array_key_exists('isSideLoad', $data)) {
            $object->setIsSideLoad($data['isSideLoad']);
        }
        if (\array_key_exists('isSpecialEquipment', $data) && $data['isSpecialEquipment'] !== null) {
            $object->setIsSpecialEquipment($data['isSpecialEquipment']);
        }
        elseif (\array_key_exists('isSpecialEquipment', $data) && $data['isSpecialEquipment'] === null) {
            $object->setIsSpecialEquipment(null);
        }
        if (\array_key_exists('isUncovered', $data) && $data['isUncovered'] !== null) {
            $object->setIsUncovered($data['isUncovered']);
        }
        elseif (\array_key_exists('isUncovered', $data) && $data['isUncovered'] === null) {
            $object->setIsUncovered(null);
        }
        if (\array_key_exists('length', $data)) {
            $object->setLength($data['length']);
        }
        if (\array_key_exists('pickupType', $data) && $data['pickupType'] !== null) {
            $object->setPickupType($data['pickupType']);
        }
        elseif (\array_key_exists('pickupType', $data) && $data['pickupType'] === null) {
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
        if (\array_key_exists('typeClientBarcode', $data) && $data['typeClientBarcode'] !== null) {
            $object->setTypeClientBarcode($data['typeClientBarcode']);
        }
        elseif (\array_key_exists('typeClientBarcode', $data) && $data['typeClientBarcode'] === null) {
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
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAdjustDimensions()) {
            $data['adjustDimensions'] = $object->getAdjustDimensions();
        }
        $data['applicationDate'] = $object->getApplicationDate()->format('Y-m-d');
        if (null !== $object->getCallToScheduleCar()) {
            $data['callToScheduleCar'] = $object->getCallToScheduleCar();
        }
        if (null !== $object->getCargoPlaceList()) {
            $values = array();
            foreach ($object->getCargoPlaceList() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['cargoPlaceList'] = $values;
        }
        if (null !== $object->getClientPositionsBarcode()) {
            $values_1 = array();
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