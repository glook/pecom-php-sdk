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
class ValidationErrorErrorFieldsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'glook\\PecomSdk\\Generated\\Model\\ValidationErrorErrorFieldsItem';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'glook\\PecomSdk\\Generated\\Model\\ValidationErrorErrorFieldsItem';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \glook\PecomSdk\Generated\Model\ValidationErrorErrorFieldsItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Key', $data) && $data['Key'] !== null) {
            $object->setKey($data['Key']);
        }
        elseif (\array_key_exists('Key', $data) && $data['Key'] === null) {
            $object->setKey(null);
        }
        if (\array_key_exists('Value', $data) && $data['Value'] !== null) {
            $values = array();
            foreach ($data['Value'] as $value) {
                $values[] = $value;
            }
            $object->setValue($values);
        }
        elseif (\array_key_exists('Value', $data) && $data['Value'] === null) {
            $object->setValue(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getKey()) {
            $data['Key'] = $object->getKey();
        }
        if (null !== $object->getValue()) {
            $values = array();
            foreach ($object->getValue() as $value) {
                $values[] = $value;
            }
            $data['Value'] = $values;
        }
        return $data;
    }
}