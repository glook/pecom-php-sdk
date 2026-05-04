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
class ReceiverUpdateRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'glook\\PecomSdk\\Generated\\Model\\ReceiverUpdateRequest';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'glook\\PecomSdk\\Generated\\Model\\ReceiverUpdateRequest';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \glook\PecomSdk\Generated\Model\ReceiverUpdateRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('address', $data) && $data['address'] !== null) {
            $object->setAddress($data['address']);
        }
        elseif (\array_key_exists('address', $data) && $data['address'] === null) {
            $object->setAddress(null);
        }
        if (\array_key_exists('city', $data) && $data['city'] !== null) {
            $object->setCity($data['city']);
        }
        elseif (\array_key_exists('city', $data) && $data['city'] === null) {
            $object->setCity(null);
        }
        if (\array_key_exists('clearAddress', $data) && $data['clearAddress'] !== null) {
            $object->setClearAddress($data['clearAddress']);
        }
        elseif (\array_key_exists('clearAddress', $data) && $data['clearAddress'] === null) {
            $object->setClearAddress(null);
        }
        if (\array_key_exists('clearInn', $data) && $data['clearInn'] !== null) {
            $object->setClearInn($data['clearInn']);
        }
        elseif (\array_key_exists('clearInn', $data) && $data['clearInn'] === null) {
            $object->setClearInn(null);
        }
        if (\array_key_exists('clearPerson', $data) && $data['clearPerson'] !== null) {
            $object->setClearPerson($data['clearPerson']);
        }
        elseif (\array_key_exists('clearPerson', $data) && $data['clearPerson'] === null) {
            $object->setClearPerson(null);
        }
        if (\array_key_exists('code', $data)) {
            $object->setCode($data['code']);
        }
        if (\array_key_exists('inn', $data) && $data['inn'] !== null) {
            $object->setInn($data['inn']);
        }
        elseif (\array_key_exists('inn', $data) && $data['inn'] === null) {
            $object->setInn(null);
        }
        if (\array_key_exists('person', $data) && $data['person'] !== null) {
            $object->setPerson($data['person']);
        }
        elseif (\array_key_exists('person', $data) && $data['person'] === null) {
            $object->setPerson(null);
        }
        if (\array_key_exists('phone', $data) && $data['phone'] !== null) {
            $object->setPhone($data['phone']);
        }
        elseif (\array_key_exists('phone', $data) && $data['phone'] === null) {
            $object->setPhone(null);
        }
        if (\array_key_exists('title', $data) && $data['title'] !== null) {
            $object->setTitle($data['title']);
        }
        elseif (\array_key_exists('title', $data) && $data['title'] === null) {
            $object->setTitle(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAddress()) {
            $data['address'] = $object->getAddress();
        }
        if (null !== $object->getCity()) {
            $data['city'] = $object->getCity();
        }
        if (null !== $object->getClearAddress()) {
            $data['clearAddress'] = $object->getClearAddress();
        }
        if (null !== $object->getClearInn()) {
            $data['clearInn'] = $object->getClearInn();
        }
        if (null !== $object->getClearPerson()) {
            $data['clearPerson'] = $object->getClearPerson();
        }
        $data['code'] = $object->getCode();
        if (null !== $object->getInn()) {
            $data['inn'] = $object->getInn();
        }
        if (null !== $object->getPerson()) {
            $data['person'] = $object->getPerson();
        }
        if (null !== $object->getPhone()) {
            $data['phone'] = $object->getPhone();
        }
        if (null !== $object->getTitle()) {
            $data['title'] = $object->getTitle();
        }
        return $data;
    }
}