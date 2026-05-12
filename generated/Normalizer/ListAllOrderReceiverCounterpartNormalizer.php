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
class ListAllOrderReceiverCounterpartNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'glook\\PecomSdk\\Generated\\Model\\ListAllOrderReceiverCounterpart';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'glook\\PecomSdk\\Generated\\Model\\ListAllOrderReceiverCounterpart';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \glook\PecomSdk\Generated\Model\ListAllOrderReceiverCounterpart();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('LegalEntity', $data) && $data['LegalEntity'] !== null) {
            $object->setLegalEntity($this->denormalizer->denormalize($data['LegalEntity'], 'glook\\PecomSdk\\Generated\\Model\\ListAllOrderCounterpartLegalEntity', 'json', $context));
        }
        elseif (\array_key_exists('LegalEntity', $data) && $data['LegalEntity'] === null) {
            $object->setLegalEntity(null);
        }
        if (\array_key_exists('Name', $data) && $data['Name'] !== null) {
            $object->setName($data['Name']);
        }
        elseif (\array_key_exists('Name', $data) && $data['Name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('PhysicalPerson', $data) && $data['PhysicalPerson'] !== null) {
            $object->setPhysicalPerson($this->denormalizer->denormalize($data['PhysicalPerson'], 'glook\\PecomSdk\\Generated\\Model\\ListAllOrderReceiverCounterpartPhysicalPerson', 'json', $context));
        }
        elseif (\array_key_exists('PhysicalPerson', $data) && $data['PhysicalPerson'] === null) {
            $object->setPhysicalPerson(null);
        }
        if (\array_key_exists('Type', $data) && $data['Type'] !== null) {
            $object->setType($data['Type']);
        }
        elseif (\array_key_exists('Type', $data) && $data['Type'] === null) {
            $object->setType(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getLegalEntity()) {
            $data['LegalEntity'] = $this->normalizer->normalize($object->getLegalEntity(), 'json', $context);
        }
        if (null !== $object->getName()) {
            $data['Name'] = $object->getName();
        }
        if (null !== $object->getPhysicalPerson()) {
            $data['PhysicalPerson'] = $this->normalizer->normalize($object->getPhysicalPerson(), 'json', $context);
        }
        if (null !== $object->getType()) {
            $data['Type'] = $object->getType();
        }
        return $data;
    }
}