<?php

namespace glook\PecomSdk\Generated\Normalizer;

use glook\PecomSdk\Generated\Model\RouteMapCounterpart;
use glook\PecomSdk\Generated\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class RouteMapCounterpartNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'glook\PecomSdk\Generated\Model\RouteMapCounterpart' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'glook\PecomSdk\Generated\Model\RouteMapCounterpart' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new RouteMapCounterpart();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('form', $data) && null !== $data['form']) {
            $object->setForm($data['form']);
        } elseif (\array_key_exists('form', $data) && null === $data['form']) {
            $object->setForm(null);
        }
        if (\array_key_exists('legalPerson', $data) && null !== $data['legalPerson']) {
            $object->setLegalPerson($this->denormalizer->denormalize($data['legalPerson'], 'glook\PecomSdk\Generated\Model\RouteMapCounterpartLegalPerson', 'json', $context));
        } elseif (\array_key_exists('legalPerson', $data) && null === $data['legalPerson']) {
            $object->setLegalPerson(null);
        }
        if (\array_key_exists('name', $data) && null !== $data['name']) {
            $object->setName($data['name']);
        } elseif (\array_key_exists('name', $data) && null === $data['name']) {
            $object->setName(null);
        }
        if (\array_key_exists('privatePerson', $data) && null !== $data['privatePerson']) {
            $object->setPrivatePerson($this->denormalizer->denormalize($data['privatePerson'], 'glook\PecomSdk\Generated\Model\RouteMapCounterpartPrivatePerson', 'json', $context));
        } elseif (\array_key_exists('privatePerson', $data) && null === $data['privatePerson']) {
            $object->setPrivatePerson(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getForm()) {
            $data['form'] = $object->getForm();
        }
        if (null !== $object->getLegalPerson()) {
            $data['legalPerson'] = $this->normalizer->normalize($object->getLegalPerson(), 'json', $context);
        }
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if (null !== $object->getPrivatePerson()) {
            $data['privatePerson'] = $this->normalizer->normalize($object->getPrivatePerson(), 'json', $context);
        }

        return $data;
    }
}
