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
class CounterpartInRouteMapNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'glook\\PecomSdk\\Generated\\Model\\CounterpartInRouteMap';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'glook\\PecomSdk\\Generated\\Model\\CounterpartInRouteMap';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \glook\PecomSdk\Generated\Model\CounterpartInRouteMap();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('countCargosForDelivery', $data) && $data['countCargosForDelivery'] !== null) {
            $object->setCountCargosForDelivery($data['countCargosForDelivery']);
        }
        elseif (\array_key_exists('countCargosForDelivery', $data) && $data['countCargosForDelivery'] === null) {
            $object->setCountCargosForDelivery(null);
        }
        if (\array_key_exists('countCargosForIntake', $data) && $data['countCargosForIntake'] !== null) {
            $object->setCountCargosForIntake($data['countCargosForIntake']);
        }
        elseif (\array_key_exists('countCargosForIntake', $data) && $data['countCargosForIntake'] === null) {
            $object->setCountCargosForIntake(null);
        }
        if (\array_key_exists('counterpart', $data)) {
            $object->setCounterpart($this->denormalizer->denormalize($data['counterpart'], 'glook\\PecomSdk\\Generated\\Model\\RouteMapCounterpart', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getCountCargosForDelivery()) {
            $data['countCargosForDelivery'] = $object->getCountCargosForDelivery();
        }
        if (null !== $object->getCountCargosForIntake()) {
            $data['countCargosForIntake'] = $object->getCountCargosForIntake();
        }
        if (null !== $object->getCounterpart()) {
            $data['counterpart'] = $this->normalizer->normalize($object->getCounterpart(), 'json', $context);
        }
        return $data;
    }
}