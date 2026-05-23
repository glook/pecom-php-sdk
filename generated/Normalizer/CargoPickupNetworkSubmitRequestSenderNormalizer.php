<?php

namespace glook\PecomSdk\Generated\Normalizer;

use glook\PecomSdk\Generated\Model\CargoPickupNetworkSubmitRequestSender;
use glook\PecomSdk\Generated\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
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
        return 'glook\PecomSdk\Generated\Model\CargoPickupNetworkSubmitRequestSender' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'glook\PecomSdk\Generated\Model\CargoPickupNetworkSubmitRequestSender' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new CargoPickupNetworkSubmitRequestSender();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('addressOffice', $data) && null !== $data['addressOffice']) {
            $object->setAddressOffice($data['addressOffice']);
        } elseif (\array_key_exists('addressOffice', $data) && null === $data['addressOffice']) {
            $object->setAddressOffice(null);
        }
        if (\array_key_exists('addressStock', $data) && null !== $data['addressStock']) {
            $object->setAddressStock($data['addressStock']);
        } elseif (\array_key_exists('addressStock', $data) && null === $data['addressStock']) {
            $object->setAddressStock(null);
        }
        if (\array_key_exists('city', $data)) {
            $object->setCity($data['city']);
        }
        if (\array_key_exists('email', $data) && null !== $data['email']) {
            $object->setEmail($data['email']);
        } elseif (\array_key_exists('email', $data) && null === $data['email']) {
            $object->setEmail(null);
        }
        if (\array_key_exists('identityCard', $data) && null !== $data['identityCard']) {
            $object->setIdentityCard($this->denormalizer->denormalize($data['identityCard'], 'glook\PecomSdk\Generated\Model\CargopickupnetworkIdentityCard', 'json', $context));
        } elseif (\array_key_exists('identityCard', $data) && null === $data['identityCard']) {
            $object->setIdentityCard(null);
        }
        if (\array_key_exists('inn', $data) && null !== $data['inn']) {
            $object->setInn($data['inn']);
        } elseif (\array_key_exists('inn', $data) && null === $data['inn']) {
            $object->setInn(null);
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
        if (\array_key_exists('person', $data) && null !== $data['person']) {
            $object->setPerson($data['person']);
        } elseif (\array_key_exists('person', $data) && null === $data['person']) {
            $object->setPerson(null);
        }
        if (\array_key_exists('phone', $data)) {
            $object->setPhone($data['phone']);
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
