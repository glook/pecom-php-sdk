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
class CargoPickupServicesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'glook\\PecomSdk\\Generated\\Model\\CargoPickupServices';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'glook\\PecomSdk\\Generated\\Model\\CargoPickupServices';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \glook\PecomSdk\Generated\Model\CargoPickupServices();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('accompanyingDocuments', $data) && $data['accompanyingDocuments'] !== null) {
            $object->setAccompanyingDocuments($data['accompanyingDocuments']);
        }
        elseif (\array_key_exists('accompanyingDocuments', $data) && $data['accompanyingDocuments'] === null) {
            $object->setAccompanyingDocuments(null);
        }
        if (\array_key_exists('carryingDistance', $data) && $data['carryingDistance'] !== null) {
            $object->setCarryingDistance($data['carryingDistance']);
        }
        elseif (\array_key_exists('carryingDistance', $data) && $data['carryingDistance'] === null) {
            $object->setCarryingDistance(null);
        }
        if (\array_key_exists('cashOnDelivery', $data) && $data['cashOnDelivery'] !== null) {
            $object->setCashOnDelivery($this->denormalizer->denormalize($data['cashOnDelivery'], 'glook\\PecomSdk\\Generated\\Model\\CashOnDelivery', 'json', $context));
        }
        elseif (\array_key_exists('cashOnDelivery', $data) && $data['cashOnDelivery'] === null) {
            $object->setCashOnDelivery(null);
        }
        if (\array_key_exists('email', $data) && $data['email'] !== null) {
            $object->setEmail($data['email']);
        }
        elseif (\array_key_exists('email', $data) && $data['email'] === null) {
            $object->setEmail(null);
        }
        if (\array_key_exists('floor', $data) && $data['floor'] !== null) {
            $object->setFloor($data['floor']);
        }
        elseif (\array_key_exists('floor', $data) && $data['floor'] === null) {
            $object->setFloor(null);
        }
        if (\array_key_exists('isDocumentsReturn', $data) && $data['isDocumentsReturn'] !== null) {
            $object->setIsDocumentsReturn($data['isDocumentsReturn']);
        }
        elseif (\array_key_exists('isDocumentsReturn', $data) && $data['isDocumentsReturn'] === null) {
            $object->setIsDocumentsReturn(null);
        }
        if (\array_key_exists('isElevator', $data) && $data['isElevator'] !== null) {
            $object->setIsElevator($data['isElevator']);
        }
        elseif (\array_key_exists('isElevator', $data) && $data['isElevator'] === null) {
            $object->setIsElevator(null);
        }
        if (\array_key_exists('isHP', $data) && $data['isHP'] !== null) {
            $object->setIsHP($data['isHP']);
        }
        elseif (\array_key_exists('isHP', $data) && $data['isHP'] === null) {
            $object->setIsHP(null);
        }
        if (\array_key_exists('isInsurance', $data) && $data['isInsurance'] !== null) {
            $object->setIsInsurance($data['isInsurance']);
        }
        elseif (\array_key_exists('isInsurance', $data) && $data['isInsurance'] === null) {
            $object->setIsInsurance(null);
        }
        if (\array_key_exists('isInsurancePrice', $data) && $data['isInsurancePrice'] !== null) {
            $object->setIsInsurancePrice($data['isInsurancePrice']);
        }
        elseif (\array_key_exists('isInsurancePrice', $data) && $data['isInsurancePrice'] === null) {
            $object->setIsInsurancePrice(null);
        }
        if (\array_key_exists('isLoading', $data)) {
            $object->setIsLoading($data['isLoading']);
        }
        if (\array_key_exists('isSealing', $data) && $data['isSealing'] !== null) {
            $object->setIsSealing($data['isSealing']);
        }
        elseif (\array_key_exists('isSealing', $data) && $data['isSealing'] === null) {
            $object->setIsSealing(null);
        }
        if (\array_key_exists('isSealingPositionsCount', $data) && $data['isSealingPositionsCount'] !== null) {
            $object->setIsSealingPositionsCount($data['isSealingPositionsCount']);
        }
        elseif (\array_key_exists('isSealingPositionsCount', $data) && $data['isSealingPositionsCount'] === null) {
            $object->setIsSealingPositionsCount(null);
        }
        if (\array_key_exists('isStrapping', $data) && $data['isStrapping'] !== null) {
            $object->setIsStrapping($data['isStrapping']);
        }
        elseif (\array_key_exists('isStrapping', $data) && $data['isStrapping'] === null) {
            $object->setIsStrapping(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAccompanyingDocuments()) {
            $data['accompanyingDocuments'] = $object->getAccompanyingDocuments();
        }
        if (null !== $object->getCarryingDistance()) {
            $data['carryingDistance'] = $object->getCarryingDistance();
        }
        if (null !== $object->getCashOnDelivery()) {
            $data['cashOnDelivery'] = $this->normalizer->normalize($object->getCashOnDelivery(), 'json', $context);
        }
        if (null !== $object->getEmail()) {
            $data['email'] = $object->getEmail();
        }
        if (null !== $object->getFloor()) {
            $data['floor'] = $object->getFloor();
        }
        if (null !== $object->getIsDocumentsReturn()) {
            $data['isDocumentsReturn'] = $object->getIsDocumentsReturn();
        }
        if (null !== $object->getIsElevator()) {
            $data['isElevator'] = $object->getIsElevator();
        }
        if (null !== $object->getIsHP()) {
            $data['isHP'] = $object->getIsHP();
        }
        if (null !== $object->getIsInsurance()) {
            $data['isInsurance'] = $object->getIsInsurance();
        }
        if (null !== $object->getIsInsurancePrice()) {
            $data['isInsurancePrice'] = $object->getIsInsurancePrice();
        }
        $data['isLoading'] = $object->getIsLoading();
        if (null !== $object->getIsSealing()) {
            $data['isSealing'] = $object->getIsSealing();
        }
        if (null !== $object->getIsSealingPositionsCount()) {
            $data['isSealingPositionsCount'] = $object->getIsSealingPositionsCount();
        }
        if (null !== $object->getIsStrapping()) {
            $data['isStrapping'] = $object->getIsStrapping();
        }
        return $data;
    }
}