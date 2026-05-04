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
class CargoPickupReceiverNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'glook\\PecomSdk\\Generated\\Model\\CargoPickupReceiver';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'glook\\PecomSdk\\Generated\\Model\\CargoPickupReceiver';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \glook\PecomSdk\Generated\Model\CargoPickupReceiver();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('avisationDateTime', $data) && $data['avisationDateTime'] !== null) {
            $object->setAvisationDateTime(\DateTime::createFromFormat('Y-m-d', $data['avisationDateTime'])->setTime(0, 0, 0));
        }
        elseif (\array_key_exists('avisationDateTime', $data) && $data['avisationDateTime'] === null) {
            $object->setAvisationDateTime(null);
        }
        if (\array_key_exists('carryingDistance', $data) && $data['carryingDistance'] !== null) {
            $object->setCarryingDistance($data['carryingDistance']);
        }
        elseif (\array_key_exists('carryingDistance', $data) && $data['carryingDistance'] === null) {
            $object->setCarryingDistance(null);
        }
        if (\array_key_exists('coordinates', $data)) {
            $object->setCoordinates($this->denormalizer->denormalize($data['coordinates'], 'glook\\PecomSdk\\Generated\\Model\\CargopickupCoordinates', 'json', $context));
        }
        if (\array_key_exists('countryOfRegistrationCode', $data) && $data['countryOfRegistrationCode'] !== null) {
            $object->setCountryOfRegistrationCode($data['countryOfRegistrationCode']);
        }
        elseif (\array_key_exists('countryOfRegistrationCode', $data) && $data['countryOfRegistrationCode'] === null) {
            $object->setCountryOfRegistrationCode(null);
        }
        if (\array_key_exists('dateOfDelivery', $data) && $data['dateOfDelivery'] !== null) {
            $object->setDateOfDelivery(\DateTime::createFromFormat('Y-m-d', $data['dateOfDelivery'])->setTime(0, 0, 0));
        }
        elseif (\array_key_exists('dateOfDelivery', $data) && $data['dateOfDelivery'] === null) {
            $object->setDateOfDelivery(null);
        }
        if (\array_key_exists('dateOfDeliveryCheck', $data) && $data['dateOfDeliveryCheck'] !== null) {
            $object->setDateOfDeliveryCheck($data['dateOfDeliveryCheck']);
        }
        elseif (\array_key_exists('dateOfDeliveryCheck', $data) && $data['dateOfDeliveryCheck'] === null) {
            $object->setDateOfDeliveryCheck(null);
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
        if (\array_key_exists('fs', $data) && $data['fs'] !== null) {
            $object->setFs($data['fs']);
        }
        elseif (\array_key_exists('fs', $data) && $data['fs'] === null) {
            $object->setFs(null);
        }
        if (\array_key_exists('identityCard', $data)) {
            $object->setIdentityCard($this->denormalizer->denormalize($data['identityCard'], 'glook\\PecomSdk\\Generated\\Model\\CargopickupIdentityCard', 'json', $context));
        }
        if (\array_key_exists('inn', $data) && $data['inn'] !== null) {
            $object->setInn($data['inn']);
        }
        elseif (\array_key_exists('inn', $data) && $data['inn'] === null) {
            $object->setInn(null);
        }
        if (\array_key_exists('isCityDeliveryNeeded', $data) && $data['isCityDeliveryNeeded'] !== null) {
            $object->setIsCityDeliveryNeeded($data['isCityDeliveryNeeded']);
        }
        elseif (\array_key_exists('isCityDeliveryNeeded', $data) && $data['isCityDeliveryNeeded'] === null) {
            $object->setIsCityDeliveryNeeded(null);
        }
        if (\array_key_exists('isCityDeliveryNeededAddress', $data) && $data['isCityDeliveryNeededAddress'] !== null) {
            $object->setIsCityDeliveryNeededAddress($data['isCityDeliveryNeededAddress']);
        }
        elseif (\array_key_exists('isCityDeliveryNeededAddress', $data) && $data['isCityDeliveryNeededAddress'] === null) {
            $object->setIsCityDeliveryNeededAddress(null);
        }
        if (\array_key_exists('isCityDeliveryNeededAddressComment', $data) && $data['isCityDeliveryNeededAddressComment'] !== null) {
            $object->setIsCityDeliveryNeededAddressComment($data['isCityDeliveryNeededAddressComment']);
        }
        elseif (\array_key_exists('isCityDeliveryNeededAddressComment', $data) && $data['isCityDeliveryNeededAddressComment'] === null) {
            $object->setIsCityDeliveryNeededAddressComment(null);
        }
        if (\array_key_exists('isElevator', $data) && $data['isElevator'] !== null) {
            $object->setIsElevator($data['isElevator']);
        }
        elseif (\array_key_exists('isElevator', $data) && $data['isElevator'] === null) {
            $object->setIsElevator(null);
        }
        if (\array_key_exists('isLoading', $data) && $data['isLoading'] !== null) {
            $object->setIsLoading($data['isLoading']);
        }
        elseif (\array_key_exists('isLoading', $data) && $data['isLoading'] === null) {
            $object->setIsLoading(null);
        }
        if (\array_key_exists('kpp', $data) && $data['kpp'] !== null) {
            $object->setKpp($data['kpp']);
        }
        elseif (\array_key_exists('kpp', $data) && $data['kpp'] === null) {
            $object->setKpp(null);
        }
        if (\array_key_exists('legalForm', $data)) {
            $object->setLegalForm($data['legalForm']);
        }
        if (\array_key_exists('person', $data)) {
            $object->setPerson($data['person']);
        }
        if (\array_key_exists('personPhones', $data)) {
            $values = array();
            foreach ($data['personPhones'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'glook\\PecomSdk\\Generated\\Model\\Phone', 'json', $context);
            }
            $object->setPersonPhones($values);
        }
        if (\array_key_exists('title', $data)) {
            $object->setTitle($data['title']);
        }
        if (\array_key_exists('warehouseId', $data) && $data['warehouseId'] !== null) {
            $object->setWarehouseId($data['warehouseId']);
        }
        elseif (\array_key_exists('warehouseId', $data) && $data['warehouseId'] === null) {
            $object->setWarehouseId(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAvisationDateTime()) {
            $data['avisationDateTime'] = $object->getAvisationDateTime()->format('Y-m-d');
        }
        if (null !== $object->getCarryingDistance()) {
            $data['carryingDistance'] = $object->getCarryingDistance();
        }
        if (null !== $object->getCoordinates()) {
            $data['coordinates'] = $this->normalizer->normalize($object->getCoordinates(), 'json', $context);
        }
        if (null !== $object->getCountryOfRegistrationCode()) {
            $data['countryOfRegistrationCode'] = $object->getCountryOfRegistrationCode();
        }
        if (null !== $object->getDateOfDelivery()) {
            $data['dateOfDelivery'] = $object->getDateOfDelivery()->format('Y-m-d');
        }
        if (null !== $object->getDateOfDeliveryCheck()) {
            $data['dateOfDeliveryCheck'] = $object->getDateOfDeliveryCheck();
        }
        if (null !== $object->getEmail()) {
            $data['email'] = $object->getEmail();
        }
        if (null !== $object->getFloor()) {
            $data['floor'] = $object->getFloor();
        }
        if (null !== $object->getFs()) {
            $data['fs'] = $object->getFs();
        }
        if (null !== $object->getIdentityCard()) {
            $data['identityCard'] = $this->normalizer->normalize($object->getIdentityCard(), 'json', $context);
        }
        if (null !== $object->getInn()) {
            $data['inn'] = $object->getInn();
        }
        if (null !== $object->getIsCityDeliveryNeeded()) {
            $data['isCityDeliveryNeeded'] = $object->getIsCityDeliveryNeeded();
        }
        if (null !== $object->getIsCityDeliveryNeededAddress()) {
            $data['isCityDeliveryNeededAddress'] = $object->getIsCityDeliveryNeededAddress();
        }
        if (null !== $object->getIsCityDeliveryNeededAddressComment()) {
            $data['isCityDeliveryNeededAddressComment'] = $object->getIsCityDeliveryNeededAddressComment();
        }
        if (null !== $object->getIsElevator()) {
            $data['isElevator'] = $object->getIsElevator();
        }
        if (null !== $object->getIsLoading()) {
            $data['isLoading'] = $object->getIsLoading();
        }
        if (null !== $object->getKpp()) {
            $data['kpp'] = $object->getKpp();
        }
        $data['legalForm'] = $object->getLegalForm();
        $data['person'] = $object->getPerson();
        $values = array();
        foreach ($object->getPersonPhones() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['personPhones'] = $values;
        $data['title'] = $object->getTitle();
        if (null !== $object->getWarehouseId()) {
            $data['warehouseId'] = $object->getWarehouseId();
        }
        return $data;
    }
}