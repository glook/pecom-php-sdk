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
class ScheduleShortWorkDayNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'glook\\PecomSdk\\Generated\\Model\\ScheduleShortWorkDay';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'glook\\PecomSdk\\Generated\\Model\\ScheduleShortWorkDay';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \glook\PecomSdk\Generated\Model\ScheduleShortWorkDay();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('breakTime', $data) && $data['breakTime'] !== null) {
            $object->setBreakTime($data['breakTime']);
        }
        elseif (\array_key_exists('breakTime', $data) && $data['breakTime'] === null) {
            $object->setBreakTime(null);
        }
        if (\array_key_exists('date', $data)) {
            $object->setDate($data['date']);
        }
        if (\array_key_exists('workTime', $data)) {
            $object->setWorkTime($this->denormalizer->denormalize($data['workTime'], 'glook\\PecomSdk\\Generated\\Model\\WorkTime', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getBreakTime()) {
            $data['breakTime'] = $object->getBreakTime();
        }
        $data['date'] = $object->getDate();
        $data['workTime'] = $this->normalizer->normalize($object->getWorkTime(), 'json', $context);
        return $data;
    }
}