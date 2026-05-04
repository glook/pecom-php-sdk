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
class AbbreviatedReceiverNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'glook\\PecomSdk\\Generated\\Model\\AbbreviatedReceiver';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'glook\\PecomSdk\\Generated\\Model\\AbbreviatedReceiver';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \glook\PecomSdk\Generated\Model\AbbreviatedReceiver();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('legalPerson', $data) && $data['legalPerson'] !== null) {
            $object->setLegalPerson($this->denormalizer->denormalize($data['legalPerson'], 'glook\\PecomSdk\\Generated\\Model\\AbbreviatedReceiverLegalPerson', 'json', $context));
        }
        elseif (\array_key_exists('legalPerson', $data) && $data['legalPerson'] === null) {
            $object->setLegalPerson(null);
        }
        if (\array_key_exists('privatePerson', $data) && $data['privatePerson'] !== null) {
            $object->setPrivatePerson($this->denormalizer->denormalize($data['privatePerson'], 'glook\\PecomSdk\\Generated\\Model\\AbbreviatedReceiverPrivatePerson', 'json', $context));
        }
        elseif (\array_key_exists('privatePerson', $data) && $data['privatePerson'] === null) {
            $object->setPrivatePerson(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getLegalPerson()) {
            $data['legalPerson'] = $this->normalizer->normalize($object->getLegalPerson(), 'json', $context);
        }
        if (null !== $object->getPrivatePerson()) {
            $data['privatePerson'] = $this->normalizer->normalize($object->getPrivatePerson(), 'json', $context);
        }
        return $data;
    }
}