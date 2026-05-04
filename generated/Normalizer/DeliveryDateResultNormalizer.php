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
class DeliveryDateResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'glook\\PecomSdk\\Generated\\Model\\DeliveryDateResult';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'glook\\PecomSdk\\Generated\\Model\\DeliveryDateResult';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \glook\PecomSdk\Generated\Model\DeliveryDateResult();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('date', $data) && $data['date'] !== null) {
            $object->setDate($data['date']);
        }
        elseif (\array_key_exists('date', $data) && $data['date'] === null) {
            $object->setDate(null);
        }
        if (\array_key_exists('isPreferential', $data) && $data['isPreferential'] !== null) {
            $object->setIsPreferential($data['isPreferential']);
        }
        elseif (\array_key_exists('isPreferential', $data) && $data['isPreferential'] === null) {
            $object->setIsPreferential(null);
        }
        if (\array_key_exists('periods', $data) && $data['periods'] !== null) {
            $values = array();
            foreach ($data['periods'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'glook\\PecomSdk\\Generated\\Model\\Period', 'json', $context);
            }
            $object->setPeriods($values);
        }
        elseif (\array_key_exists('periods', $data) && $data['periods'] === null) {
            $object->setPeriods(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getDate()) {
            $data['date'] = $object->getDate();
        }
        if (null !== $object->getIsPreferential()) {
            $data['isPreferential'] = $object->getIsPreferential();
        }
        if (null !== $object->getPeriods()) {
            $values = array();
            foreach ($object->getPeriods() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['periods'] = $values;
        }
        return $data;
    }
}