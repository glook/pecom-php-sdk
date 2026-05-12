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
class PreregistrationPickUpDetailsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'glook\\PecomSdk\\Generated\\Model\\PreregistrationPickUpDetails';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'glook\\PecomSdk\\Generated\\Model\\PreregistrationPickUpDetails';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \glook\PecomSdk\Generated\Model\PreregistrationPickUpDetails();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('addressForDocuments', $data) && $data['addressForDocuments'] !== null) {
            $object->setAddressForDocuments($data['addressForDocuments']);
        }
        elseif (\array_key_exists('addressForDocuments', $data) && $data['addressForDocuments'] === null) {
            $object->setAddressForDocuments(null);
        }
        if (\array_key_exists('addressForDocumentsComment', $data) && $data['addressForDocumentsComment'] !== null) {
            $object->setAddressForDocumentsComment($data['addressForDocumentsComment']);
        }
        elseif (\array_key_exists('addressForDocumentsComment', $data) && $data['addressForDocumentsComment'] === null) {
            $object->setAddressForDocumentsComment(null);
        }
        if (\array_key_exists('addressStockComment', $data) && $data['addressStockComment'] !== null) {
            $object->setAddressStockComment($data['addressStockComment']);
        }
        elseif (\array_key_exists('addressStockComment', $data) && $data['addressStockComment'] === null) {
            $object->setAddressStockComment(null);
        }
        if (\array_key_exists('carryingDistance', $data) && $data['carryingDistance'] !== null) {
            $object->setCarryingDistance($data['carryingDistance']);
        }
        elseif (\array_key_exists('carryingDistance', $data) && $data['carryingDistance'] === null) {
            $object->setCarryingDistance(null);
        }
        if (\array_key_exists('coordinates', $data) && $data['coordinates'] !== null) {
            $object->setCoordinates($this->denormalizer->denormalize($data['coordinates'], 'glook\\PecomSdk\\Generated\\Model\\PreregistrationCoordinates', 'json', $context));
        }
        elseif (\array_key_exists('coordinates', $data) && $data['coordinates'] === null) {
            $object->setCoordinates(null);
        }
        if (\array_key_exists('dinnerFrom', $data) && $data['dinnerFrom'] !== null) {
            $object->setDinnerFrom($data['dinnerFrom']);
        }
        elseif (\array_key_exists('dinnerFrom', $data) && $data['dinnerFrom'] === null) {
            $object->setDinnerFrom(null);
        }
        if (\array_key_exists('dinnerTo', $data) && $data['dinnerTo'] !== null) {
            $object->setDinnerTo($data['dinnerTo']);
        }
        elseif (\array_key_exists('dinnerTo', $data) && $data['dinnerTo'] === null) {
            $object->setDinnerTo(null);
        }
        if (\array_key_exists('floor', $data) && $data['floor'] !== null) {
            $object->setFloor($data['floor']);
        }
        elseif (\array_key_exists('floor', $data) && $data['floor'] === null) {
            $object->setFloor(null);
        }
        if (\array_key_exists('isAuthorityNeeded', $data) && $data['isAuthorityNeeded'] !== null) {
            $object->setIsAuthorityNeeded($data['isAuthorityNeeded']);
        }
        elseif (\array_key_exists('isAuthorityNeeded', $data) && $data['isAuthorityNeeded'] === null) {
            $object->setIsAuthorityNeeded(null);
        }
        if (\array_key_exists('isElevator', $data) && $data['isElevator'] !== null) {
            $object->setIsElevator($data['isElevator']);
        }
        elseif (\array_key_exists('isElevator', $data) && $data['isElevator'] === null) {
            $object->setIsElevator(null);
        }
        if (\array_key_exists('isHydrolift', $data) && $data['isHydrolift'] !== null) {
            $object->setIsHydrolift($data['isHydrolift']);
        }
        elseif (\array_key_exists('isHydrolift', $data) && $data['isHydrolift'] === null) {
            $object->setIsHydrolift(null);
        }
        if (\array_key_exists('isLoading', $data) && $data['isLoading'] !== null) {
            $object->setIsLoading($data['isLoading']);
        }
        elseif (\array_key_exists('isLoading', $data) && $data['isLoading'] === null) {
            $object->setIsLoading(null);
        }
        if (\array_key_exists('isOpenCar', $data) && $data['isOpenCar'] !== null) {
            $object->setIsOpenCar($data['isOpenCar']);
        }
        elseif (\array_key_exists('isOpenCar', $data) && $data['isOpenCar'] === null) {
            $object->setIsOpenCar(null);
        }
        if (\array_key_exists('isSideLoad', $data) && $data['isSideLoad'] !== null) {
            $object->setIsSideLoad($data['isSideLoad']);
        }
        elseif (\array_key_exists('isSideLoad', $data) && $data['isSideLoad'] === null) {
            $object->setIsSideLoad(null);
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
        if (\array_key_exists('periodTimeFrom', $data) && $data['periodTimeFrom'] !== null) {
            $object->setPeriodTimeFrom($data['periodTimeFrom']);
        }
        elseif (\array_key_exists('periodTimeFrom', $data) && $data['periodTimeFrom'] === null) {
            $object->setPeriodTimeFrom(null);
        }
        if (\array_key_exists('periodTimeTo', $data) && $data['periodTimeTo'] !== null) {
            $object->setPeriodTimeTo($data['periodTimeTo']);
        }
        elseif (\array_key_exists('periodTimeTo', $data) && $data['periodTimeTo'] === null) {
            $object->setPeriodTimeTo(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAddressForDocuments()) {
            $data['addressForDocuments'] = $object->getAddressForDocuments();
        }
        if (null !== $object->getAddressForDocumentsComment()) {
            $data['addressForDocumentsComment'] = $object->getAddressForDocumentsComment();
        }
        if (null !== $object->getAddressStockComment()) {
            $data['addressStockComment'] = $object->getAddressStockComment();
        }
        if (null !== $object->getCarryingDistance()) {
            $data['carryingDistance'] = $object->getCarryingDistance();
        }
        if (null !== $object->getCoordinates()) {
            $data['coordinates'] = $this->normalizer->normalize($object->getCoordinates(), 'json', $context);
        }
        if (null !== $object->getDinnerFrom()) {
            $data['dinnerFrom'] = $object->getDinnerFrom();
        }
        if (null !== $object->getDinnerTo()) {
            $data['dinnerTo'] = $object->getDinnerTo();
        }
        if (null !== $object->getFloor()) {
            $data['floor'] = $object->getFloor();
        }
        if (null !== $object->getIsAuthorityNeeded()) {
            $data['isAuthorityNeeded'] = $object->getIsAuthorityNeeded();
        }
        if (null !== $object->getIsElevator()) {
            $data['isElevator'] = $object->getIsElevator();
        }
        if (null !== $object->getIsHydrolift()) {
            $data['isHydrolift'] = $object->getIsHydrolift();
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
        if (null !== $object->getPeriodTimeFrom()) {
            $data['periodTimeFrom'] = $object->getPeriodTimeFrom();
        }
        if (null !== $object->getPeriodTimeTo()) {
            $data['periodTimeTo'] = $object->getPeriodTimeTo();
        }
        return $data;
    }
}