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
class BranchNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'glook\\PecomSdk\\Generated\\Model\\Branch';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'glook\\PecomSdk\\Generated\\Model\\Branch';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \glook\PecomSdk\Generated\Model\Branch();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('address', $data)) {
            $object->setAddress($data['address']);
        }
        if (\array_key_exists('bitrixId', $data)) {
            $object->setBitrixId($data['bitrixId']);
        }
        if (\array_key_exists('branchCode', $data)) {
            $object->setBranchCode($data['branchCode']);
        }
        if (\array_key_exists('cities', $data)) {
            $values = array();
            foreach ($data['cities'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'glook\\PecomSdk\\Generated\\Model\\BranchCity', 'json', $context);
            }
            $object->setCities($values);
        }
        if (\array_key_exists('coordinates', $data) && $data['coordinates'] !== null) {
            $object->setCoordinates($data['coordinates']);
        }
        elseif (\array_key_exists('coordinates', $data) && $data['coordinates'] === null) {
            $object->setCoordinates(null);
        }
        if (\array_key_exists('coordinatesobj', $data) && $data['coordinatesobj'] !== null) {
            $object->setCoordinatesobj($this->denormalizer->denormalize($data['coordinatesobj'], 'glook\\PecomSdk\\Generated\\Model\\BranchesCoordinates', 'json', $context));
        }
        elseif (\array_key_exists('coordinatesobj', $data) && $data['coordinatesobj'] === null) {
            $object->setCoordinatesobj(null);
        }
        if (\array_key_exists('country', $data)) {
            $object->setCountry($data['country']);
        }
        if (\array_key_exists('countryOfRegistrationCode', $data)) {
            $object->setCountryOfRegistrationCode($data['countryOfRegistrationCode']);
        }
        if (\array_key_exists('divisions', $data)) {
            $values_1 = array();
            foreach ($data['divisions'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'glook\\PecomSdk\\Generated\\Model\\BranchDivision', 'json', $context);
            }
            $object->setDivisions($values_1);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('postalCode', $data)) {
            $object->setPostalCode($data['postalCode']);
        }
        if (\array_key_exists('timezone', $data)) {
            $object->setTimezone($data['timezone']);
        }
        if (\array_key_exists('title', $data)) {
            $object->setTitle($data['title']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['address'] = $object->getAddress();
        $data['bitrixId'] = $object->getBitrixId();
        $data['branchCode'] = $object->getBranchCode();
        $values = array();
        foreach ($object->getCities() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['cities'] = $values;
        if (null !== $object->getCoordinates()) {
            $data['coordinates'] = $object->getCoordinates();
        }
        if (null !== $object->getCoordinatesobj()) {
            $data['coordinatesobj'] = $this->normalizer->normalize($object->getCoordinatesobj(), 'json', $context);
        }
        $data['country'] = $object->getCountry();
        $data['countryOfRegistrationCode'] = $object->getCountryOfRegistrationCode();
        $values_1 = array();
        foreach ($object->getDivisions() as $value_1) {
            $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
        }
        $data['divisions'] = $values_1;
        $data['id'] = $object->getId();
        $data['postalCode'] = $object->getPostalCode();
        $data['timezone'] = $object->getTimezone();
        $data['title'] = $object->getTitle();
        return $data;
    }
}