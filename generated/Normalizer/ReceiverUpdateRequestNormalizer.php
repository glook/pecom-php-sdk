<?php

namespace glook\PecomSdk\Generated\Normalizer;

use glook\PecomSdk\Generated\Model\ReceiverUpdateRequest;
use glook\PecomSdk\Generated\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
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
        return 'glook\PecomSdk\Generated\Model\ReceiverUpdateRequest' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'glook\PecomSdk\Generated\Model\ReceiverUpdateRequest' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new ReceiverUpdateRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('address', $data) && null !== $data['address']) {
            $object->setAddress($data['address']);
        } elseif (\array_key_exists('address', $data) && null === $data['address']) {
            $object->setAddress(null);
        }
        if (\array_key_exists('city', $data) && null !== $data['city']) {
            $object->setCity($data['city']);
        } elseif (\array_key_exists('city', $data) && null === $data['city']) {
            $object->setCity(null);
        }
        if (\array_key_exists('clearAddress', $data) && null !== $data['clearAddress']) {
            $object->setClearAddress($data['clearAddress']);
        } elseif (\array_key_exists('clearAddress', $data) && null === $data['clearAddress']) {
            $object->setClearAddress(null);
        }
        if (\array_key_exists('clearInn', $data) && null !== $data['clearInn']) {
            $object->setClearInn($data['clearInn']);
        } elseif (\array_key_exists('clearInn', $data) && null === $data['clearInn']) {
            $object->setClearInn(null);
        }
        if (\array_key_exists('clearPerson', $data) && null !== $data['clearPerson']) {
            $object->setClearPerson($data['clearPerson']);
        } elseif (\array_key_exists('clearPerson', $data) && null === $data['clearPerson']) {
            $object->setClearPerson(null);
        }
        if (\array_key_exists('code', $data)) {
            $object->setCode($data['code']);
        }
        if (\array_key_exists('inn', $data) && null !== $data['inn']) {
            $object->setInn($data['inn']);
        } elseif (\array_key_exists('inn', $data) && null === $data['inn']) {
            $object->setInn(null);
        }
        if (\array_key_exists('person', $data) && null !== $data['person']) {
            $object->setPerson($data['person']);
        } elseif (\array_key_exists('person', $data) && null === $data['person']) {
            $object->setPerson(null);
        }
        if (\array_key_exists('phone', $data) && null !== $data['phone']) {
            $object->setPhone($data['phone']);
        } elseif (\array_key_exists('phone', $data) && null === $data['phone']) {
            $object->setPhone(null);
        }
        if (\array_key_exists('title', $data) && null !== $data['title']) {
            $object->setTitle($data['title']);
        } elseif (\array_key_exists('title', $data) && null === $data['title']) {
            $object->setTitle(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
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
