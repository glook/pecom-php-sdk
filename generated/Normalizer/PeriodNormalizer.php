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
class PeriodNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'glook\\PecomSdk\\Generated\\Model\\Period';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'glook\\PecomSdk\\Generated\\Model\\Period';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \glook\PecomSdk\Generated\Model\Period();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('isDayLight', $data) && $data['isDayLight'] !== null) {
            $object->setIsDayLight($data['isDayLight']);
        }
        elseif (\array_key_exists('isDayLight', $data) && $data['isDayLight'] === null) {
            $object->setIsDayLight(null);
        }
        if (\array_key_exists('periodTimeFrom', $data) && $data['periodTimeFrom'] !== null) {
            $object->setPeriodTimeFrom($data['periodTimeFrom']);
        }
        elseif (\array_key_exists('periodTimeFrom', $data) && $data['periodTimeFrom'] === null) {
            $object->setPeriodTimeFrom(null);
        }
        if (\array_key_exists('periodTimeTo', $data) && $data['periodTimeTo'] !== null) {
            $object->setPeriodTimeTo($data['periodTimeTo']);
        }
        elseif (\array_key_exists('periodTimeTo', $data) && $data['periodTimeTo'] === null) {
            $object->setPeriodTimeTo(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getIsDayLight()) {
            $data['isDayLight'] = $object->getIsDayLight();
        }
        if (null !== $object->getPeriodTimeFrom()) {
            $data['periodTimeFrom'] = $object->getPeriodTimeFrom();
        }
        if (null !== $object->getPeriodTimeTo()) {
            $data['periodTimeTo'] = $object->getPeriodTimeTo();
        }
        return $data;
    }
}