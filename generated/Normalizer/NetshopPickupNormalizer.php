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
class NetshopPickupNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'glook\\PecomSdk\\Generated\\Model\\NetshopPickup';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'glook\\PecomSdk\\Generated\\Model\\NetshopPickup';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \glook\PecomSdk\Generated\Model\NetshopPickup();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('address', $data)) {
            $object->setAddress($data['address']);
        }
        if (\array_key_exists('applicationDate', $data)) {
            $object->setApplicationDate(\DateTime::createFromFormat('Y-m-d', $data['applicationDate'])->setTime(0, 0, 0));
        }
        if (\array_key_exists('comment', $data) && $data['comment'] !== null) {
            $object->setComment($data['comment']);
        }
        elseif (\array_key_exists('comment', $data) && $data['comment'] === null) {
            $object->setComment(null);
        }
        if (\array_key_exists('enabled', $data)) {
            $object->setEnabled($data['enabled']);
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
        if (\array_key_exists('payer', $data) && $data['payer'] !== null) {
            $object->setPayer($this->denormalizer->denormalize($data['payer'], 'glook\\PecomSdk\\Generated\\Model\\NetshopPayer', 'json', $context));
        }
        elseif (\array_key_exists('payer', $data) && $data['payer'] === null) {
            $object->setPayer(null);
        }
        if (\array_key_exists('person', $data)) {
            $object->setPerson($data['person']);
        }
        if (\array_key_exists('phone', $data)) {
            $object->setPhone($data['phone']);
        }
        if (\array_key_exists('volume', $data)) {
            $object->setVolume($data['volume']);
        }
        if (\array_key_exists('weight', $data)) {
            $object->setWeight($data['weight']);
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
        $data['address'] = $object->getAddress();
        $data['applicationDate'] = $object->getApplicationDate()->format('Y-m-d');
        if (null !== $object->getComment()) {
            $data['comment'] = $object->getComment();
        }
        $data['enabled'] = $object->getEnabled();
        if (null !== $object->getLunchBreakFrom()) {
            $data['lunchBreakFrom'] = $object->getLunchBreakFrom();
        }
        if (null !== $object->getLunchBreakTo()) {
            $data['lunchBreakTo'] = $object->getLunchBreakTo();
        }
        if (null !== $object->getPayer()) {
            $data['payer'] = $this->normalizer->normalize($object->getPayer(), 'json', $context);
        }
        $data['person'] = $object->getPerson();
        $data['phone'] = $object->getPhone();
        $data['volume'] = $object->getVolume();
        $data['weight'] = $object->getWeight();
        if (null !== $object->getWorkTimeFrom()) {
            $data['workTimeFrom'] = $object->getWorkTimeFrom();
        }
        if (null !== $object->getWorkTimeTo()) {
            $data['workTimeTo'] = $object->getWorkTimeTo();
        }
        return $data;
    }
}