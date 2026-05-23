<?php

namespace glook\PecomSdk\Generated\Normalizer;

use glook\PecomSdk\Generated\Model\CargoPickupReceiver;
use glook\PecomSdk\Generated\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
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
        return 'glook\PecomSdk\Generated\Model\CargoPickupReceiver' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'glook\PecomSdk\Generated\Model\CargoPickupReceiver' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new CargoPickupReceiver();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('avisationDateTime', $data) && null !== $data['avisationDateTime']) {
            $object->setAvisationDateTime(\DateTime::createFromFormat('Y-m-d', $data['avisationDateTime'])->setTime(0, 0, 0));
        } elseif (\array_key_exists('avisationDateTime', $data) && null === $data['avisationDateTime']) {
            $object->setAvisationDateTime(null);
        }
        if (\array_key_exists('carryingDistance', $data) && null !== $data['carryingDistance']) {
            $object->setCarryingDistance($data['carryingDistance']);
        } elseif (\array_key_exists('carryingDistance', $data) && null === $data['carryingDistance']) {
            $object->setCarryingDistance(null);
        }
        if (\array_key_exists('coordinates', $data) && null !== $data['coordinates']) {
            $object->setCoordinates($this->denormalizer->denormalize($data['coordinates'], 'glook\PecomSdk\Generated\Model\CargopickupCoordinates', 'json', $context));
        } elseif (\array_key_exists('coordinates', $data) && null === $data['coordinates']) {
            $object->setCoordinates(null);
        }
        if (\array_key_exists('countryOfRegistrationCode', $data) && null !== $data['countryOfRegistrationCode']) {
            $object->setCountryOfRegistrationCode($data['countryOfRegistrationCode']);
        } elseif (\array_key_exists('countryOfRegistrationCode', $data) && null === $data['countryOfRegistrationCode']) {
            $object->setCountryOfRegistrationCode(null);
        }
        if (\array_key_exists('dateOfDelivery', $data) && null !== $data['dateOfDelivery']) {
            $object->setDateOfDelivery(\DateTime::createFromFormat('Y-m-d', $data['dateOfDelivery'])->setTime(0, 0, 0));
        } elseif (\array_key_exists('dateOfDelivery', $data) && null === $data['dateOfDelivery']) {
            $object->setDateOfDelivery(null);
        }
        if (\array_key_exists('dateOfDeliveryCheck', $data) && null !== $data['dateOfDeliveryCheck']) {
            $object->setDateOfDeliveryCheck($data['dateOfDeliveryCheck']);
        } elseif (\array_key_exists('dateOfDeliveryCheck', $data) && null === $data['dateOfDeliveryCheck']) {
            $object->setDateOfDeliveryCheck(null);
        }
        if (\array_key_exists('email', $data) && null !== $data['email']) {
            $object->setEmail($data['email']);
        } elseif (\array_key_exists('email', $data) && null === $data['email']) {
            $object->setEmail(null);
        }
        if (\array_key_exists('floor', $data) && null !== $data['floor']) {
            $object->setFloor($data['floor']);
        } elseif (\array_key_exists('floor', $data) && null === $data['floor']) {
            $object->setFloor(null);
        }
        if (\array_key_exists('fs', $data) && null !== $data['fs']) {
            $object->setFs($data['fs']);
        } elseif (\array_key_exists('fs', $data) && null === $data['fs']) {
            $object->setFs(null);
        }
        if (\array_key_exists('identityCard', $data) && null !== $data['identityCard']) {
            $object->setIdentityCard($this->denormalizer->denormalize($data['identityCard'], 'glook\PecomSdk\Generated\Model\CargopickupIdentityCard', 'json', $context));
        } elseif (\array_key_exists('identityCard', $data) && null === $data['identityCard']) {
            $object->setIdentityCard(null);
        }
        if (\array_key_exists('inn', $data) && null !== $data['inn']) {
            $object->setInn($data['inn']);
        } elseif (\array_key_exists('inn', $data) && null === $data['inn']) {
            $object->setInn(null);
        }
        if (\array_key_exists('isCityDeliveryNeeded', $data) && null !== $data['isCityDeliveryNeeded']) {
            $object->setIsCityDeliveryNeeded($data['isCityDeliveryNeeded']);
        } elseif (\array_key_exists('isCityDeliveryNeeded', $data) && null === $data['isCityDeliveryNeeded']) {
            $object->setIsCityDeliveryNeeded(null);
        }
        if (\array_key_exists('isCityDeliveryNeededAddress', $data) && null !== $data['isCityDeliveryNeededAddress']) {
            $object->setIsCityDeliveryNeededAddress($data['isCityDeliveryNeededAddress']);
        } elseif (\array_key_exists('isCityDeliveryNeededAddress', $data) && null === $data['isCityDeliveryNeededAddress']) {
            $object->setIsCityDeliveryNeededAddress(null);
        }
        if (\array_key_exists('isCityDeliveryNeededAddressComment', $data) && null !== $data['isCityDeliveryNeededAddressComment']) {
            $object->setIsCityDeliveryNeededAddressComment($data['isCityDeliveryNeededAddressComment']);
        } elseif (\array_key_exists('isCityDeliveryNeededAddressComment', $data) && null === $data['isCityDeliveryNeededAddressComment']) {
            $object->setIsCityDeliveryNeededAddressComment(null);
        }
        if (\array_key_exists('isElevator', $data) && null !== $data['isElevator']) {
            $object->setIsElevator($data['isElevator']);
        } elseif (\array_key_exists('isElevator', $data) && null === $data['isElevator']) {
            $object->setIsElevator(null);
        }
        if (\array_key_exists('isLoading', $data) && null !== $data['isLoading']) {
            $object->setIsLoading($data['isLoading']);
        } elseif (\array_key_exists('isLoading', $data) && null === $data['isLoading']) {
            $object->setIsLoading(null);
        }
        if (\array_key_exists('kpp', $data) && null !== $data['kpp']) {
            $object->setKpp($data['kpp']);
        } elseif (\array_key_exists('kpp', $data) && null === $data['kpp']) {
            $object->setKpp(null);
        }
        if (\array_key_exists('legalForm', $data)) {
            $object->setLegalForm($data['legalForm']);
        }
        if (\array_key_exists('person', $data)) {
            $object->setPerson($data['person']);
        }
        if (\array_key_exists('personPhones', $data)) {
            $values = [];
            foreach ($data['personPhones'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'glook\PecomSdk\Generated\Model\Phone', 'json', $context);
            }
            $object->setPersonPhones($values);
        }
        if (\array_key_exists('title', $data)) {
            $object->setTitle($data['title']);
        }
        if (\array_key_exists('warehouseId', $data) && null !== $data['warehouseId']) {
            $object->setWarehouseId($data['warehouseId']);
        } elseif (\array_key_exists('warehouseId', $data) && null === $data['warehouseId']) {
            $object->setWarehouseId(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
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
        $values = [];
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
