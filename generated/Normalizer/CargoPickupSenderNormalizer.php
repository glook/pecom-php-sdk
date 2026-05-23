<?php

namespace glook\PecomSdk\Generated\Normalizer;

use glook\PecomSdk\Generated\Model\CargoPickupSender;
use glook\PecomSdk\Generated\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CargoPickupSenderNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'glook\PecomSdk\Generated\Model\CargoPickupSender' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'glook\PecomSdk\Generated\Model\CargoPickupSender' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new CargoPickupSender();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('addressOffice', $data) && null !== $data['addressOffice']) {
            $object->setAddressOffice($data['addressOffice']);
        } elseif (\array_key_exists('addressOffice', $data) && null === $data['addressOffice']) {
            $object->setAddressOffice(null);
        }
        if (\array_key_exists('addressOfficeComment', $data) && null !== $data['addressOfficeComment']) {
            $object->setAddressOfficeComment($data['addressOfficeComment']);
        } elseif (\array_key_exists('addressOfficeComment', $data) && null === $data['addressOfficeComment']) {
            $object->setAddressOfficeComment(null);
        }
        if (\array_key_exists('addressStock', $data)) {
            $object->setAddressStock($data['addressStock']);
        }
        if (\array_key_exists('addressStockComment', $data) && null !== $data['addressStockComment']) {
            $object->setAddressStockComment($data['addressStockComment']);
        } elseif (\array_key_exists('addressStockComment', $data) && null === $data['addressStockComment']) {
            $object->setAddressStockComment(null);
        }
        if (\array_key_exists('cargoDocumentNumber', $data) && null !== $data['cargoDocumentNumber']) {
            $object->setCargoDocumentNumber($data['cargoDocumentNumber']);
        } elseif (\array_key_exists('cargoDocumentNumber', $data) && null === $data['cargoDocumentNumber']) {
            $object->setCargoDocumentNumber(null);
        }
        if (\array_key_exists('countryOfRegistrationCode', $data) && null !== $data['countryOfRegistrationCode']) {
            $object->setCountryOfRegistrationCode($data['countryOfRegistrationCode']);
        } elseif (\array_key_exists('countryOfRegistrationCode', $data) && null === $data['countryOfRegistrationCode']) {
            $object->setCountryOfRegistrationCode(null);
        }
        if (\array_key_exists('email', $data) && null !== $data['email']) {
            $object->setEmail($data['email']);
        } elseif (\array_key_exists('email', $data) && null === $data['email']) {
            $object->setEmail(null);
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
        if (\array_key_exists('isAuthorityNeeded', $data) && null !== $data['isAuthorityNeeded']) {
            $object->setIsAuthorityNeeded($data['isAuthorityNeeded']);
        } elseif (\array_key_exists('isAuthorityNeeded', $data) && null === $data['isAuthorityNeeded']) {
            $object->setIsAuthorityNeeded(null);
        }
        if (\array_key_exists('kpp', $data) && null !== $data['kpp']) {
            $object->setKpp($data['kpp']);
        } elseif (\array_key_exists('kpp', $data) && null === $data['kpp']) {
            $object->setKpp(null);
        }
        if (\array_key_exists('latitudeForCar', $data) && null !== $data['latitudeForCar']) {
            $object->setLatitudeForCar($data['latitudeForCar']);
        } elseif (\array_key_exists('latitudeForCar', $data) && null === $data['latitudeForCar']) {
            $object->setLatitudeForCar(null);
        }
        if (\array_key_exists('legalForm', $data)) {
            $object->setLegalForm($data['legalForm']);
        }
        if (\array_key_exists('longitudeForCar', $data) && null !== $data['longitudeForCar']) {
            $object->setLongitudeForCar($data['longitudeForCar']);
        } elseif (\array_key_exists('longitudeForCar', $data) && null === $data['longitudeForCar']) {
            $object->setLongitudeForCar(null);
        }
        if (\array_key_exists('lunchBreakFrom', $data) && null !== $data['lunchBreakFrom']) {
            $object->setLunchBreakFrom($data['lunchBreakFrom']);
        } elseif (\array_key_exists('lunchBreakFrom', $data) && null === $data['lunchBreakFrom']) {
            $object->setLunchBreakFrom(null);
        }
        if (\array_key_exists('lunchBreakTo', $data) && null !== $data['lunchBreakTo']) {
            $object->setLunchBreakTo($data['lunchBreakTo']);
        } elseif (\array_key_exists('lunchBreakTo', $data) && null === $data['lunchBreakTo']) {
            $object->setLunchBreakTo(null);
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
        if (\array_key_exists('workTimeFrom', $data) && null !== $data['workTimeFrom']) {
            $object->setWorkTimeFrom($data['workTimeFrom']);
        } elseif (\array_key_exists('workTimeFrom', $data) && null === $data['workTimeFrom']) {
            $object->setWorkTimeFrom(null);
        }
        if (\array_key_exists('workTimeTo', $data) && null !== $data['workTimeTo']) {
            $object->setWorkTimeTo($data['workTimeTo']);
        } elseif (\array_key_exists('workTimeTo', $data) && null === $data['workTimeTo']) {
            $object->setWorkTimeTo(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getAddressOffice()) {
            $data['addressOffice'] = $object->getAddressOffice();
        }
        if (null !== $object->getAddressOfficeComment()) {
            $data['addressOfficeComment'] = $object->getAddressOfficeComment();
        }
        $data['addressStock'] = $object->getAddressStock();
        if (null !== $object->getAddressStockComment()) {
            $data['addressStockComment'] = $object->getAddressStockComment();
        }
        if (null !== $object->getCargoDocumentNumber()) {
            $data['cargoDocumentNumber'] = $object->getCargoDocumentNumber();
        }
        if (null !== $object->getCountryOfRegistrationCode()) {
            $data['countryOfRegistrationCode'] = $object->getCountryOfRegistrationCode();
        }
        if (null !== $object->getEmail()) {
            $data['email'] = $object->getEmail();
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
        if (null !== $object->getIsAuthorityNeeded()) {
            $data['isAuthorityNeeded'] = $object->getIsAuthorityNeeded();
        }
        if (null !== $object->getKpp()) {
            $data['kpp'] = $object->getKpp();
        }
        if (null !== $object->getLatitudeForCar()) {
            $data['latitudeForCar'] = $object->getLatitudeForCar();
        }
        $data['legalForm'] = $object->getLegalForm();
        if (null !== $object->getLongitudeForCar()) {
            $data['longitudeForCar'] = $object->getLongitudeForCar();
        }
        if (null !== $object->getLunchBreakFrom()) {
            $data['lunchBreakFrom'] = $object->getLunchBreakFrom();
        }
        if (null !== $object->getLunchBreakTo()) {
            $data['lunchBreakTo'] = $object->getLunchBreakTo();
        }
        $data['person'] = $object->getPerson();
        $values = [];
        foreach ($object->getPersonPhones() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['personPhones'] = $values;
        $data['title'] = $object->getTitle();
        if (null !== $object->getWorkTimeFrom()) {
            $data['workTimeFrom'] = $object->getWorkTimeFrom();
        }
        if (null !== $object->getWorkTimeTo()) {
            $data['workTimeTo'] = $object->getWorkTimeTo();
        }

        return $data;
    }
}
