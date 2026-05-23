<?php

namespace glook\PecomSdk\Generated\Normalizer;

use glook\PecomSdk\Generated\Model\ListAllOrderReceiverCounterpart;
use glook\PecomSdk\Generated\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
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
        return 'glook\PecomSdk\Generated\Model\ListAllOrderReceiverCounterpart' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'glook\PecomSdk\Generated\Model\ListAllOrderReceiverCounterpart' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new ListAllOrderReceiverCounterpart();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('LegalEntity', $data) && null !== $data['LegalEntity']) {
            $object->setLegalEntity($this->denormalizer->denormalize($data['LegalEntity'], 'glook\PecomSdk\Generated\Model\ListAllOrderCounterpartLegalEntity', 'json', $context));
        } elseif (\array_key_exists('LegalEntity', $data) && null === $data['LegalEntity']) {
            $object->setLegalEntity(null);
        }
        if (\array_key_exists('Name', $data) && null !== $data['Name']) {
            $object->setName($data['Name']);
        } elseif (\array_key_exists('Name', $data) && null === $data['Name']) {
            $object->setName(null);
        }
        if (\array_key_exists('PhysicalPerson', $data) && null !== $data['PhysicalPerson']) {
            $object->setPhysicalPerson($this->denormalizer->denormalize($data['PhysicalPerson'], 'glook\PecomSdk\Generated\Model\ListAllOrderReceiverCounterpartPhysicalPerson', 'json', $context));
        } elseif (\array_key_exists('PhysicalPerson', $data) && null === $data['PhysicalPerson']) {
            $object->setPhysicalPerson(null);
        }
        if (\array_key_exists('Type', $data) && null !== $data['Type']) {
            $object->setType($data['Type']);
        } elseif (\array_key_exists('Type', $data) && null === $data['Type']) {
            $object->setType(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
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
