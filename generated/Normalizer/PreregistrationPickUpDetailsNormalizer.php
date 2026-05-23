<?php

namespace glook\PecomSdk\Generated\Normalizer;

use glook\PecomSdk\Generated\Model\PreregistrationPickUpDetails;
use glook\PecomSdk\Generated\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
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
        return 'glook\PecomSdk\Generated\Model\PreregistrationPickUpDetails' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'glook\PecomSdk\Generated\Model\PreregistrationPickUpDetails' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new PreregistrationPickUpDetails();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('addressForDocuments', $data) && null !== $data['addressForDocuments']) {
            $object->setAddressForDocuments($data['addressForDocuments']);
        } elseif (\array_key_exists('addressForDocuments', $data) && null === $data['addressForDocuments']) {
            $object->setAddressForDocuments(null);
        }
        if (\array_key_exists('addressForDocumentsComment', $data) && null !== $data['addressForDocumentsComment']) {
            $object->setAddressForDocumentsComment($data['addressForDocumentsComment']);
        } elseif (\array_key_exists('addressForDocumentsComment', $data) && null === $data['addressForDocumentsComment']) {
            $object->setAddressForDocumentsComment(null);
        }
        if (\array_key_exists('addressStockComment', $data) && null !== $data['addressStockComment']) {
            $object->setAddressStockComment($data['addressStockComment']);
        } elseif (\array_key_exists('addressStockComment', $data) && null === $data['addressStockComment']) {
            $object->setAddressStockComment(null);
        }
        if (\array_key_exists('carryingDistance', $data) && null !== $data['carryingDistance']) {
            $object->setCarryingDistance($data['carryingDistance']);
        } elseif (\array_key_exists('carryingDistance', $data) && null === $data['carryingDistance']) {
            $object->setCarryingDistance(null);
        }
        if (\array_key_exists('coordinates', $data) && null !== $data['coordinates']) {
            $object->setCoordinates($this->denormalizer->denormalize($data['coordinates'], 'glook\PecomSdk\Generated\Model\PreregistrationCoordinates', 'json', $context));
        } elseif (\array_key_exists('coordinates', $data) && null === $data['coordinates']) {
            $object->setCoordinates(null);
        }
        if (\array_key_exists('dinnerFrom', $data) && null !== $data['dinnerFrom']) {
            $object->setDinnerFrom($data['dinnerFrom']);
        } elseif (\array_key_exists('dinnerFrom', $data) && null === $data['dinnerFrom']) {
            $object->setDinnerFrom(null);
        }
        if (\array_key_exists('dinnerTo', $data) && null !== $data['dinnerTo']) {
            $object->setDinnerTo($data['dinnerTo']);
        } elseif (\array_key_exists('dinnerTo', $data) && null === $data['dinnerTo']) {
            $object->setDinnerTo(null);
        }
        if (\array_key_exists('floor', $data) && null !== $data['floor']) {
            $object->setFloor($data['floor']);
        } elseif (\array_key_exists('floor', $data) && null === $data['floor']) {
            $object->setFloor(null);
        }
        if (\array_key_exists('isAuthorityNeeded', $data) && null !== $data['isAuthorityNeeded']) {
            $object->setIsAuthorityNeeded($data['isAuthorityNeeded']);
        } elseif (\array_key_exists('isAuthorityNeeded', $data) && null === $data['isAuthorityNeeded']) {
            $object->setIsAuthorityNeeded(null);
        }
        if (\array_key_exists('isElevator', $data) && null !== $data['isElevator']) {
            $object->setIsElevator($data['isElevator']);
        } elseif (\array_key_exists('isElevator', $data) && null === $data['isElevator']) {
            $object->setIsElevator(null);
        }
        if (\array_key_exists('isHydrolift', $data) && null !== $data['isHydrolift']) {
            $object->setIsHydrolift($data['isHydrolift']);
        } elseif (\array_key_exists('isHydrolift', $data) && null === $data['isHydrolift']) {
            $object->setIsHydrolift(null);
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
        if (\array_key_exists('periodTimeFrom', $data) && null !== $data['periodTimeFrom']) {
            $object->setPeriodTimeFrom($data['periodTimeFrom']);
        } elseif (\array_key_exists('periodTimeFrom', $data) && null === $data['periodTimeFrom']) {
            $object->setPeriodTimeFrom(null);
        }
        if (\array_key_exists('periodTimeTo', $data) && null !== $data['periodTimeTo']) {
            $object->setPeriodTimeTo($data['periodTimeTo']);
        } elseif (\array_key_exists('periodTimeTo', $data) && null === $data['periodTimeTo']) {
            $object->setPeriodTimeTo(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
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
