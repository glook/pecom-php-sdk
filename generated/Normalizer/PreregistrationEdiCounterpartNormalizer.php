<?php

namespace glook\PecomSdk\Generated\Normalizer;

use glook\PecomSdk\Generated\Model\PreregistrationEdiCounterpart;
use glook\PecomSdk\Generated\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class PreregistrationEdiCounterpartNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'glook\PecomSdk\Generated\Model\PreregistrationEdiCounterpart' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'glook\PecomSdk\Generated\Model\PreregistrationEdiCounterpart' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new PreregistrationEdiCounterpart();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('EDImail', $data) && null !== $data['EDImail']) {
            $object->setEDImail($data['EDImail']);
        } elseif (\array_key_exists('EDImail', $data) && null === $data['EDImail']) {
            $object->setEDImail(null);
        }
        if (\array_key_exists('EDItype', $data)) {
            $object->setEDItype($data['EDItype']);
        }
        if (\array_key_exists('other', $data) && null !== $data['other']) {
            $object->setOther($this->denormalizer->denormalize($data['other'], 'glook\PecomSdk\Generated\Model\PreregistrationEdiCounterpartOther', 'json', $context));
        } elseif (\array_key_exists('other', $data) && null === $data['other']) {
            $object->setOther(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getEDImail()) {
            $data['EDImail'] = $object->getEDImail();
        }
        $data['EDItype'] = $object->getEDItype();
        if (null !== $object->getOther()) {
            $data['other'] = $this->normalizer->normalize($object->getOther(), 'json', $context);
        }

        return $data;
    }
}
