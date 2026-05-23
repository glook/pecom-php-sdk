<?php

namespace glook\PecomSdk\Generated\Normalizer;

use glook\PecomSdk\Generated\Model\NetshopPickup;
use glook\PecomSdk\Generated\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
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
        return 'glook\PecomSdk\Generated\Model\NetshopPickup' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'glook\PecomSdk\Generated\Model\NetshopPickup' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new NetshopPickup();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('address', $data)) {
            $object->setAddress($data['address']);
        }
        if (\array_key_exists('applicationDate', $data)) {
            $object->setApplicationDate(\DateTime::createFromFormat('Y-m-d', $data['applicationDate'])->setTime(0, 0, 0));
        }
        if (\array_key_exists('comment', $data) && null !== $data['comment']) {
            $object->setComment($data['comment']);
        } elseif (\array_key_exists('comment', $data) && null === $data['comment']) {
            $object->setComment(null);
        }
        if (\array_key_exists('enabled', $data)) {
            $object->setEnabled($data['enabled']);
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
        if (\array_key_exists('payer', $data) && null !== $data['payer']) {
            $object->setPayer($this->denormalizer->denormalize($data['payer'], 'glook\PecomSdk\Generated\Model\NetshopPayer', 'json', $context));
        } elseif (\array_key_exists('payer', $data) && null === $data['payer']) {
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
