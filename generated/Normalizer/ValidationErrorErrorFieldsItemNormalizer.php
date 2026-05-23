<?php

namespace glook\PecomSdk\Generated\Normalizer;

use glook\PecomSdk\Generated\Model\ValidationErrorErrorFieldsItem;
use glook\PecomSdk\Generated\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ValidationErrorErrorFieldsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'glook\PecomSdk\Generated\Model\ValidationErrorErrorFieldsItem' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'glook\PecomSdk\Generated\Model\ValidationErrorErrorFieldsItem' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new ValidationErrorErrorFieldsItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Key', $data) && null !== $data['Key']) {
            $object->setKey($data['Key']);
        } elseif (\array_key_exists('Key', $data) && null === $data['Key']) {
            $object->setKey(null);
        }
        if (\array_key_exists('Value', $data) && null !== $data['Value']) {
            $values = [];
            foreach ($data['Value'] as $value) {
                $values[] = $value;
            }
            $object->setValue($values);
        } elseif (\array_key_exists('Value', $data) && null === $data['Value']) {
            $object->setValue(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getKey()) {
            $data['Key'] = $object->getKey();
        }
        if (null !== $object->getValue()) {
            $values = [];
            foreach ($object->getValue() as $value) {
                $values[] = $value;
            }
            $data['Value'] = $values;
        }

        return $data;
    }
}
