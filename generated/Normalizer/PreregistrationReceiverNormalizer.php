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
class PreregistrationReceiverNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'glook\\PecomSdk\\Generated\\Model\\PreregistrationReceiver';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'glook\\PecomSdk\\Generated\\Model\\PreregistrationReceiver';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \glook\PecomSdk\Generated\Model\PreregistrationReceiver();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('addressStock', $data) && $data['addressStock'] !== null) {
            $object->setAddressStock($data['addressStock']);
        }
        elseif (\array_key_exists('addressStock', $data) && $data['addressStock'] === null) {
            $object->setAddressStock(null);
        }
        if (\array_key_exists('comment', $data) && $data['comment'] !== null) {
            $object->setComment($data['comment']);
        }
        elseif (\array_key_exists('comment', $data) && $data['comment'] === null) {
            $object->setComment(null);
        }
        if (\array_key_exists('coordinates', $data)) {
            $object->setCoordinates($this->denormalizer->denormalize($data['coordinates'], 'glook\\PecomSdk\\Generated\\Model\\PreregistrationCoordinates', 'json', $context));
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
        if (\array_key_exists('GLN', $data) && $data['GLN'] !== null) {
            $object->setGLN($data['GLN']);
        }
        elseif (\array_key_exists('GLN', $data) && $data['GLN'] === null) {
            $object->setGLN(null);
        }
        if (\array_key_exists('identityCard', $data)) {
            $object->setIdentityCard($this->denormalizer->denormalize($data['identityCard'], 'glook\\PecomSdk\\Generated\\Model\\PreregistrationIdentityCard', 'json', $context));
        }
        if (\array_key_exists('individual', $data)) {
            $object->setIndividual($this->denormalizer->denormalize($data['individual'], 'glook\\PecomSdk\\Generated\\Model\\Individual', 'json', $context));
        }
        if (\array_key_exists('inn', $data) && $data['inn'] !== null) {
            $object->setInn($data['inn']);
        }
        elseif (\array_key_exists('inn', $data) && $data['inn'] === null) {
            $object->setInn(null);
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
                $values[] = $this->denormalizer->denormalize($value, 'glook\\PecomSdk\\Generated\\Model\\PersonPhone', 'json', $context);
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
        if (null !== $object->getAddressStock()) {
            $data['addressStock'] = $object->getAddressStock();
        }
        if (null !== $object->getComment()) {
            $data['comment'] = $object->getComment();
        }
        if (null !== $object->getCoordinates()) {
            $data['coordinates'] = $this->normalizer->normalize($object->getCoordinates(), 'json', $context);
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
        if (null !== $object->getGLN()) {
            $data['GLN'] = $object->getGLN();
        }
        if (null !== $object->getIdentityCard()) {
            $data['identityCard'] = $this->normalizer->normalize($object->getIdentityCard(), 'json', $context);
        }
        if (null !== $object->getIndividual()) {
            $data['individual'] = $this->normalizer->normalize($object->getIndividual(), 'json', $context);
        }
        if (null !== $object->getInn()) {
            $data['inn'] = $object->getInn();
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