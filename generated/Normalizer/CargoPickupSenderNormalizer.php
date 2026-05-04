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
class CargoPickupSenderNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'glook\\PecomSdk\\Generated\\Model\\CargoPickupSender';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'glook\\PecomSdk\\Generated\\Model\\CargoPickupSender';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \glook\PecomSdk\Generated\Model\CargoPickupSender();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('addressOffice', $data) && $data['addressOffice'] !== null) {
            $object->setAddressOffice($data['addressOffice']);
        }
        elseif (\array_key_exists('addressOffice', $data) && $data['addressOffice'] === null) {
            $object->setAddressOffice(null);
        }
        if (\array_key_exists('addressOfficeComment', $data) && $data['addressOfficeComment'] !== null) {
            $object->setAddressOfficeComment($data['addressOfficeComment']);
        }
        elseif (\array_key_exists('addressOfficeComment', $data) && $data['addressOfficeComment'] === null) {
            $object->setAddressOfficeComment(null);
        }
        if (\array_key_exists('addressStock', $data)) {
            $object->setAddressStock($data['addressStock']);
        }
        if (\array_key_exists('addressStockComment', $data) && $data['addressStockComment'] !== null) {
            $object->setAddressStockComment($data['addressStockComment']);
        }
        elseif (\array_key_exists('addressStockComment', $data) && $data['addressStockComment'] === null) {
            $object->setAddressStockComment(null);
        }
        if (\array_key_exists('cargoDocumentNumber', $data) && $data['cargoDocumentNumber'] !== null) {
            $object->setCargoDocumentNumber($data['cargoDocumentNumber']);
        }
        elseif (\array_key_exists('cargoDocumentNumber', $data) && $data['cargoDocumentNumber'] === null) {
            $object->setCargoDocumentNumber(null);
        }
        if (\array_key_exists('countryOfRegistrationCode', $data) && $data['countryOfRegistrationCode'] !== null) {
            $object->setCountryOfRegistrationCode($data['countryOfRegistrationCode']);
        }
        elseif (\array_key_exists('countryOfRegistrationCode', $data) && $data['countryOfRegistrationCode'] === null) {
            $object->setCountryOfRegistrationCode(null);
        }
        if (\array_key_exists('email', $data) && $data['email'] !== null) {
            $object->setEmail($data['email']);
        }
        elseif (\array_key_exists('email', $data) && $data['email'] === null) {
            $object->setEmail(null);
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
        if (\array_key_exists('isAuthorityNeeded', $data) && $data['isAuthorityNeeded'] !== null) {
            $object->setIsAuthorityNeeded($data['isAuthorityNeeded']);
        }
        elseif (\array_key_exists('isAuthorityNeeded', $data) && $data['isAuthorityNeeded'] === null) {
            $object->setIsAuthorityNeeded(null);
        }
        if (\array_key_exists('kpp', $data) && $data['kpp'] !== null) {
            $object->setKpp($data['kpp']);
        }
        elseif (\array_key_exists('kpp', $data) && $data['kpp'] === null) {
            $object->setKpp(null);
        }
        if (\array_key_exists('latitudeForCar', $data) && $data['latitudeForCar'] !== null) {
            $object->setLatitudeForCar($data['latitudeForCar']);
        }
        elseif (\array_key_exists('latitudeForCar', $data) && $data['latitudeForCar'] === null) {
            $object->setLatitudeForCar(null);
        }
        if (\array_key_exists('legalForm', $data)) {
            $object->setLegalForm($data['legalForm']);
        }
        if (\array_key_exists('longitudeForCar', $data) && $data['longitudeForCar'] !== null) {
            $object->setLongitudeForCar($data['longitudeForCar']);
        }
        elseif (\array_key_exists('longitudeForCar', $data) && $data['longitudeForCar'] === null) {
            $object->setLongitudeForCar(null);
        }
        if (\array_key_exists('lunchBreakFrom', $data) && $data['lunchBreakFrom'] !== null) {
            $object->setLunchBreakFrom($data['lunchBreakFrom']);
        }
        elseif (\array_key_exists('lunchBreakFrom', $data) && $data['lunchBreakFrom'] === null) {
            $object->setLunchBreakFrom(null);
        }
        if (\array_key_exists('lunchBreakTo', $data) && $data['lunchBreakTo'] !== null) {
            $object->setLunchBreakTo($data['lunchBreakTo']);
        }
        elseif (\array_key_exists('lunchBreakTo', $data) && $data['lunchBreakTo'] === null) {
            $object->setLunchBreakTo(null);
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
        if (\array_key_exists('workTimeFrom', $data) && $data['workTimeFrom'] !== null) {
            $object->setWorkTimeFrom($data['workTimeFrom']);
        }
        elseif (\array_key_exists('workTimeFrom', $data) && $data['workTimeFrom'] === null) {
            $object->setWorkTimeFrom(null);
        }
        if (\array_key_exists('workTimeTo', $data) && $data['workTimeTo'] !== null) {
            $object->setWorkTimeTo($data['workTimeTo']);
        }
        elseif (\array_key_exists('workTimeTo', $data) && $data['workTimeTo'] === null) {
            $object->setWorkTimeTo(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
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
        $values = array();
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