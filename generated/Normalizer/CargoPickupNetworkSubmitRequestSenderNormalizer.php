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
class CargoPickupNetworkSubmitRequestSenderNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'glook\\PecomSdk\\Generated\\Model\\CargoPickupNetworkSubmitRequestSender';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'glook\\PecomSdk\\Generated\\Model\\CargoPickupNetworkSubmitRequestSender';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \glook\PecomSdk\Generated\Model\CargoPickupNetworkSubmitRequestSender();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('addressOffice', $data) && $data['addressOffice'] !== null) {
            $object->setAddressOffice($data['addressOffice']);
        }
        elseif (\array_key_exists('addressOffice', $data) && $data['addressOffice'] === null) {
            $object->setAddressOffice(null);
        }
        if (\array_key_exists('addressStock', $data) && $data['addressStock'] !== null) {
            $object->setAddressStock($data['addressStock']);
        }
        elseif (\array_key_exists('addressStock', $data) && $data['addressStock'] === null) {
            $object->setAddressStock(null);
        }
        if (\array_key_exists('city', $data)) {
            $object->setCity($data['city']);
        }
        if (\array_key_exists('email', $data) && $data['email'] !== null) {
            $object->setEmail($data['email']);
        }
        elseif (\array_key_exists('email', $data) && $data['email'] === null) {
            $object->setEmail(null);
        }
        if (\array_key_exists('identityCard', $data) && $data['identityCard'] !== null) {
            $object->setIdentityCard($this->denormalizer->denormalize($data['identityCard'], 'glook\\PecomSdk\\Generated\\Model\\CargoPickupNetworkSubmitRequestSenderIdentityCard', 'json', $context));
        }
        elseif (\array_key_exists('identityCard', $data) && $data['identityCard'] === null) {
            $object->setIdentityCard(null);
        }
        if (\array_key_exists('inn', $data) && $data['inn'] !== null) {
            $object->setInn($data['inn']);
        }
        elseif (\array_key_exists('inn', $data) && $data['inn'] === null) {
            $object->setInn(null);
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
        if (\array_key_exists('person', $data) && $data['person'] !== null) {
            $object->setPerson($data['person']);
        }
        elseif (\array_key_exists('person', $data) && $data['person'] === null) {
            $object->setPerson(null);
        }
        if (\array_key_exists('phone', $data)) {
            $object->setPhone($data['phone']);
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
        if (null !== $object->getAddressStock()) {
            $data['addressStock'] = $object->getAddressStock();
        }
        $data['city'] = $object->getCity();
        if (null !== $object->getEmail()) {
            $data['email'] = $object->getEmail();
        }
        if (null !== $object->getIdentityCard()) {
            $data['identityCard'] = $this->normalizer->normalize($object->getIdentityCard(), 'json', $context);
        }
        if (null !== $object->getInn()) {
            $data['inn'] = $object->getInn();
        }
        if (null !== $object->getLunchBreakFrom()) {
            $data['lunchBreakFrom'] = $object->getLunchBreakFrom();
        }
        if (null !== $object->getLunchBreakTo()) {
            $data['lunchBreakTo'] = $object->getLunchBreakTo();
        }
        if (null !== $object->getPerson()) {
            $data['person'] = $object->getPerson();
        }
        $data['phone'] = $object->getPhone();
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