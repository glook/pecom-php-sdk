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
class DivisionTimeOfWorkNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'glook\\PecomSdk\\Generated\\Model\\DivisionTimeOfWork';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'glook\\PecomSdk\\Generated\\Model\\DivisionTimeOfWork';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \glook\PecomSdk\Generated\Model\DivisionTimeOfWork();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('dayOfWeek', $data)) {
            $object->setDayOfWeek($data['dayOfWeek']);
        }
        if (\array_key_exists('dinnerFrom', $data) && $data['dinnerFrom'] !== null) {
            $object->setDinnerFrom($data['dinnerFrom']);
        }
        elseif (\array_key_exists('dinnerFrom', $data) && $data['dinnerFrom'] === null) {
            $object->setDinnerFrom(null);
        }
        if (\array_key_exists('dinnerTo', $data) && $data['dinnerTo'] !== null) {
            $object->setDinnerTo($data['dinnerTo']);
        }
        elseif (\array_key_exists('dinnerTo', $data) && $data['dinnerTo'] === null) {
            $object->setDinnerTo(null);
        }
        if (\array_key_exists('workFrom', $data)) {
            $object->setWorkFrom($data['workFrom']);
        }
        if (\array_key_exists('workTo', $data)) {
            $object->setWorkTo($data['workTo']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['dayOfWeek'] = $object->getDayOfWeek();
        if (null !== $object->getDinnerFrom()) {
            $data['dinnerFrom'] = $object->getDinnerFrom();
        }
        if (null !== $object->getDinnerTo()) {
            $data['dinnerTo'] = $object->getDinnerTo();
        }
        $data['workFrom'] = $object->getWorkFrom();
        $data['workTo'] = $object->getWorkTo();
        return $data;
    }
}